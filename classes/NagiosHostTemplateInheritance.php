<?php

require 'om/BaseNagiosHostTemplateInheritance.php';


/**
 * Skeleton subclass for representing a row from the 'nagios_host_template_inheritance' table.
 *
 * Nagios Host Template Inheritance
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    
 */
class NagiosHostTemplateInheritance extends BaseNagiosHostTemplateInheritance {

	/**
	 * Initializes internal state of NagiosHostTemplateInheritance object.
	 * @see        parent::__construct()
	 */
	public function __construct()
	{
		// Make sure that parent constructor is always invoked, since that
		// is where any default values for this object are set.
		parent::__construct();
	}
	
	/**
	 * Checks to determine if inheritance creates a circular chain.  This is 
	 * done by recursively going through inheritance trees and seeing if the 
	 * source template is already found.  If so, this would create a circular 
	 * inheritance loop and destroy our world as we know it.
	 *
	 *@param int $targetTemplateId what template Id are we looking at
	 *@param int $originalSourceTemplateId what template Id are we looking for
	 */
	static function isCircular($targetTemplateId, $originalSourceTemplateId) {
		if($targetTemplateId == $originalSourceTemplateId)
			return true;
		else {
			// Get all the potential inheritance in which the target template id 
			// is the source
			$c = new Criteria();
			$c->add(NagiosHostTemplateInheritancePeer::SOURCE_TEMPLATE, $targetTemplateId);
			$inheritances = NagiosHostTemplateInheritancePeer::doSelect($c);
			foreach($inheritances as $inheritance) {
				if(NagiosHostTemplateInheritance::isCircular($inheritance->getTargetTemplate(), $originalSourceTemplateId))
				   return true;
			}
		}
		return false;
	}

    public function delete(PropelPDO $con = null) {
        parent::delete($con);
        // Check our service dependencies
        $targetTemplate = $this->getNagiosHostTemplateRelatedByTargetTemplate();
        $targetTemplate->integrityCheck(); 
               
    }
	
	public function save(PropelPDO $con = null) {
		if(NagiosHostTemplateInheritance::isCircular($this->getTargetTemplate(), $this->getSourceTemplate())) {
			throw new Exception("Adding that inheritance would create a circular chain.");
		}
		else {
			parent::save($con);	// Okay, we've saved
		}
	}

} // NagiosHostTemplateInheritance
