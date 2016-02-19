<?php
/*
 *  $Id: PropelConfiguration.php 1106 2009-02-23 11:38:27Z v-dogg $
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the LGPL. For more information please see
 * <http://propel.phpdb.org>.
 */

/**
 * PropelConfiguration is a container for all Propel's configuration data.
 *
 * PropelConfiguration implements ArrayAccess interface so the configuration
 * can be accessed as an array or using a simple getter and setter. The whole
 * configuration can also be retrieved as a nested arrays, flat array or as a
 * PropelConfiguration instance.
 *
 * @author     Veikko M�kinen <veikko@veikko.fi>
 * @version    $Revision: 1106 $
 * @package    propel
 */
class PropelConfiguration implements ArrayAccess
{
	const TYPE_ARRAY = 1;

	const TYPE_ARRAY_FLAT = 2;

	const TYPE_OBJECT = 3;

	/**
	* @var        array An array of parameters
	*/
	protected $parameters = array();

	/**
	 * Construct a new configuration container
	 *
	 * @param      array $parameters
	 */
	public function __construct(array $parameters = array())
	{
		$this->parameters = $parameters;
	}

	/**
	 * @see        http://www.php.net/ArrayAccess
	 */
	public function offsetExists($offset)
	{
		return isset($this->parameter[$offset]) || array_key_exists($offset, $this->parameters);
	}

	/**
	 * @see        http://www.php.net/ArrayAccess
	 */
	public function offsetSet($offset, $value)
	{
		$this->parameter[$offset] = $value;
	}

	/**
	 * @see        http://www.php.net/ArrayAccess
	 */
	public function offsetGet($offset)
	{
		return $this->parameters[$offset];
	}

	/**
	 * @see        http://www.php.net/ArrayAccess
	 */
	public function offsetUnset($offset)
	{
		unset($this->parameters[$offset]);
	}

	/**
	 * Get parameter value from the container
	 *
	 * @param      string $name
	 * @param      mixed $default Default value to be used if the
	 *                            requested value is not found
	 * @return     mixed Parameter value or the default
	 */
	public function getParameter($name, $default = null)
	{
		$parts = explode('.', $name); //name.space.name
		$name =  array_pop($parts); //actual name

		$section = $this->parameters;
		for($i=0; $i<count($parts); ++$i) {
			if(isset($section[$parts[$i]])) {
				$section = $section[$parts[$i]];
			}
			else { //namespace was not found, return default
				return $default;
			}
		}

		if(isset($section[$name]) || array_key_exists($name, $section)) {
			return $section[$name];
		}

		return $default;
	}

	/**
	 * Store a value to the container
	 *
	 * @param      string $name Configuration item name (name.space.name)
	 * @param      mixed $value Value to be stored
	 */
	public function setParameter($name, $value)
	{
		$parts = explode('.', $name); //name.space.name
		$name =  array_pop($parts); //actual name

		$section =& $this->parameters;
		for($i=0; $i<count($parts); ++$i) {
			if(!isset($section[$parts[$i]]) || !is_array($section[$parts[$i]])) { //yes, this will overwrite if the namespace was used for a scalar value
				$section[$parts[$i]] = array();
			}
			$section =& $section[$parts[$i]];
		}
		$section[$name] = $value;
	}

	/**
	 *
	 *
	 * @param      int $type
	 * @return     mixed
	 */
	public function getParameters($type = PropelConfiguration::TYPE_ARRAY)
	{
		switch ($type) {
			case PropelConfiguration::TYPE_ARRAY:
				return $this->parameters;
			case PropelConfiguration::TYPE_ARRAY_FLAT:
				return $this->toFlatArray();
			case PropelConfiguration::TYPE_OBJECT:
				return $this;
			default:
				throw new PropelException('Unknown configuration type: '. var_export($type, true));
		}

	}


	/**
	 * Get the configuration as a flat array. ($array['name.space.item'] = 'value')
	 *
	 * @return     array
	 */
	protected function toFlatArray()
	{
		$result = array();
		$it = new PropelConfigurationIterator(new RecursiveArrayIterator($this->parameters), RecursiveIteratorIterator::SELF_FIRST);
		foreach($it as $key => $value) {
			$ns = $it->getDepth() ? $it->getNamespace() . '.'. $key : $key;
			if ($it->getNodeType() == PropelConfigurationIterator::NODE_ITEM) {
				$result[$ns] = $value;
			}
		}

		return $result;
	}

}

?>
