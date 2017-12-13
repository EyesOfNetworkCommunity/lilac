<?php


/**
 * Base class that represents a query for the 'autodiscovery_device' table.
 *
 * AutoDiscovery Found Device
 *
 * @method     AutodiscoveryDeviceQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     AutodiscoveryDeviceQuery orderByJobId($order = Criteria::ASC) Order by the job_id column
 * @method     AutodiscoveryDeviceQuery orderByAddress($order = Criteria::ASC) Order by the address column
 * @method     AutodiscoveryDeviceQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     AutodiscoveryDeviceQuery orderByHostname($order = Criteria::ASC) Order by the hostname column
 * @method     AutodiscoveryDeviceQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     AutodiscoveryDeviceQuery orderByOsvendor($order = Criteria::ASC) Order by the osvendor column
 * @method     AutodiscoveryDeviceQuery orderByOsfamily($order = Criteria::ASC) Order by the osfamily column
 * @method     AutodiscoveryDeviceQuery orderByOsgen($order = Criteria::ASC) Order by the osgen column
 * @method     AutodiscoveryDeviceQuery orderByHostTemplate($order = Criteria::ASC) Order by the host_template column
 * @method     AutodiscoveryDeviceQuery orderByProposedParent($order = Criteria::ASC) Order by the proposed_parent column
 *
 * @method     AutodiscoveryDeviceQuery groupById() Group by the id column
 * @method     AutodiscoveryDeviceQuery groupByJobId() Group by the job_id column
 * @method     AutodiscoveryDeviceQuery groupByAddress() Group by the address column
 * @method     AutodiscoveryDeviceQuery groupByName() Group by the name column
 * @method     AutodiscoveryDeviceQuery groupByHostname() Group by the hostname column
 * @method     AutodiscoveryDeviceQuery groupByDescription() Group by the description column
 * @method     AutodiscoveryDeviceQuery groupByOsvendor() Group by the osvendor column
 * @method     AutodiscoveryDeviceQuery groupByOsfamily() Group by the osfamily column
 * @method     AutodiscoveryDeviceQuery groupByOsgen() Group by the osgen column
 * @method     AutodiscoveryDeviceQuery groupByHostTemplate() Group by the host_template column
 * @method     AutodiscoveryDeviceQuery groupByProposedParent() Group by the proposed_parent column
 *
 * @method     AutodiscoveryDeviceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AutodiscoveryDeviceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AutodiscoveryDeviceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AutodiscoveryDeviceQuery leftJoinAutodiscoveryJob($relationAlias = null) Adds a LEFT JOIN clause to the query using the AutodiscoveryJob relation
 * @method     AutodiscoveryDeviceQuery rightJoinAutodiscoveryJob($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AutodiscoveryJob relation
 * @method     AutodiscoveryDeviceQuery innerJoinAutodiscoveryJob($relationAlias = null) Adds a INNER JOIN clause to the query using the AutodiscoveryJob relation
 *
 * @method     AutodiscoveryDeviceQuery leftJoinNagiosHostTemplate($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostTemplate relation
 * @method     AutodiscoveryDeviceQuery rightJoinNagiosHostTemplate($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostTemplate relation
 * @method     AutodiscoveryDeviceQuery innerJoinNagiosHostTemplate($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostTemplate relation
 *
 * @method     AutodiscoveryDeviceQuery leftJoinNagiosHost($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHost relation
 * @method     AutodiscoveryDeviceQuery rightJoinNagiosHost($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHost relation
 * @method     AutodiscoveryDeviceQuery innerJoinNagiosHost($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHost relation
 *
 * @method     AutodiscoveryDeviceQuery leftJoinAutodiscoveryDeviceService($relationAlias = null) Adds a LEFT JOIN clause to the query using the AutodiscoveryDeviceService relation
 * @method     AutodiscoveryDeviceQuery rightJoinAutodiscoveryDeviceService($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AutodiscoveryDeviceService relation
 * @method     AutodiscoveryDeviceQuery innerJoinAutodiscoveryDeviceService($relationAlias = null) Adds a INNER JOIN clause to the query using the AutodiscoveryDeviceService relation
 *
 * @method     AutodiscoveryDeviceQuery leftJoinAutodiscoveryDeviceTemplateMatch($relationAlias = null) Adds a LEFT JOIN clause to the query using the AutodiscoveryDeviceTemplateMatch relation
 * @method     AutodiscoveryDeviceQuery rightJoinAutodiscoveryDeviceTemplateMatch($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AutodiscoveryDeviceTemplateMatch relation
 * @method     AutodiscoveryDeviceQuery innerJoinAutodiscoveryDeviceTemplateMatch($relationAlias = null) Adds a INNER JOIN clause to the query using the AutodiscoveryDeviceTemplateMatch relation
 *
 * @method     AutodiscoveryDevice findOne(PropelPDO $con = null) Return the first AutodiscoveryDevice matching the query
 * @method     AutodiscoveryDevice findOneOrCreate(PropelPDO $con = null) Return the first AutodiscoveryDevice matching the query, or a new AutodiscoveryDevice object populated from the query conditions when no match is found
 *
 * @method     AutodiscoveryDevice findOneById(int $id) Return the first AutodiscoveryDevice filtered by the id column
 * @method     AutodiscoveryDevice findOneByJobId(int $job_id) Return the first AutodiscoveryDevice filtered by the job_id column
 * @method     AutodiscoveryDevice findOneByAddress(string $address) Return the first AutodiscoveryDevice filtered by the address column
 * @method     AutodiscoveryDevice findOneByName(string $name) Return the first AutodiscoveryDevice filtered by the name column
 * @method     AutodiscoveryDevice findOneByHostname(string $hostname) Return the first AutodiscoveryDevice filtered by the hostname column
 * @method     AutodiscoveryDevice findOneByDescription(string $description) Return the first AutodiscoveryDevice filtered by the description column
 * @method     AutodiscoveryDevice findOneByOsvendor(string $osvendor) Return the first AutodiscoveryDevice filtered by the osvendor column
 * @method     AutodiscoveryDevice findOneByOsfamily(string $osfamily) Return the first AutodiscoveryDevice filtered by the osfamily column
 * @method     AutodiscoveryDevice findOneByOsgen(string $osgen) Return the first AutodiscoveryDevice filtered by the osgen column
 * @method     AutodiscoveryDevice findOneByHostTemplate(int $host_template) Return the first AutodiscoveryDevice filtered by the host_template column
 * @method     AutodiscoveryDevice findOneByProposedParent(int $proposed_parent) Return the first AutodiscoveryDevice filtered by the proposed_parent column
 *
 * @method     array findById(int $id) Return AutodiscoveryDevice objects filtered by the id column
 * @method     array findByJobId(int $job_id) Return AutodiscoveryDevice objects filtered by the job_id column
 * @method     array findByAddress(string $address) Return AutodiscoveryDevice objects filtered by the address column
 * @method     array findByName(string $name) Return AutodiscoveryDevice objects filtered by the name column
 * @method     array findByHostname(string $hostname) Return AutodiscoveryDevice objects filtered by the hostname column
 * @method     array findByDescription(string $description) Return AutodiscoveryDevice objects filtered by the description column
 * @method     array findByOsvendor(string $osvendor) Return AutodiscoveryDevice objects filtered by the osvendor column
 * @method     array findByOsfamily(string $osfamily) Return AutodiscoveryDevice objects filtered by the osfamily column
 * @method     array findByOsgen(string $osgen) Return AutodiscoveryDevice objects filtered by the osgen column
 * @method     array findByHostTemplate(int $host_template) Return AutodiscoveryDevice objects filtered by the host_template column
 * @method     array findByProposedParent(int $proposed_parent) Return AutodiscoveryDevice objects filtered by the proposed_parent column
 *
 * @package    propel.generator..om
 */
abstract class BaseAutodiscoveryDeviceQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseAutodiscoveryDeviceQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'AutodiscoveryDevice', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new AutodiscoveryDeviceQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    AutodiscoveryDeviceQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof AutodiscoveryDeviceQuery) {
			return $criteria;
		}
		$query = new AutodiscoveryDeviceQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key
	 * Use instance pooling to avoid a database query if the object exists
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    AutodiscoveryDevice|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = AutodiscoveryDevicePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
			// the object is alredy in the instance pool
			return $obj;
		} else {
			// the object has not been requested yet, or the formatter is not an object formatter
			$criteria = $this->isKeepQuery() ? clone $this : $this;
			$stmt = $criteria
				->filterByPrimaryKey($key)
				->getSelectStatement($con);
			return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
		}
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		return $this
			->filterByPrimaryKeys($keys)
			->find($con);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    AutodiscoveryDeviceQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(AutodiscoveryDevicePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    AutodiscoveryDeviceQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(AutodiscoveryDevicePeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterById(1234); // WHERE id = 1234
	 * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
	 * $query->filterById(array('min' => 12)); // WHERE id > 12
	 * </code>
	 *
	 * @param     mixed $id The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryDeviceQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(AutodiscoveryDevicePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the job_id column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByJobId(1234); // WHERE job_id = 1234
	 * $query->filterByJobId(array(12, 34)); // WHERE job_id IN (12, 34)
	 * $query->filterByJobId(array('min' => 12)); // WHERE job_id > 12
	 * </code>
	 *
	 * @see       filterByAutodiscoveryJob()
	 *
	 * @param     mixed $jobId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryDeviceQuery The current query, for fluid interface
	 */
	public function filterByJobId($jobId = null, $comparison = null)
	{
		if (is_array($jobId)) {
			$useMinMax = false;
			if (isset($jobId['min'])) {
				$this->addUsingAlias(AutodiscoveryDevicePeer::JOB_ID, $jobId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($jobId['max'])) {
				$this->addUsingAlias(AutodiscoveryDevicePeer::JOB_ID, $jobId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AutodiscoveryDevicePeer::JOB_ID, $jobId, $comparison);
	}

	/**
	 * Filter the query on the address column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByAddress('fooValue');   // WHERE address = 'fooValue'
	 * $query->filterByAddress('%fooValue%'); // WHERE address LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $address The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryDeviceQuery The current query, for fluid interface
	 */
	public function filterByAddress($address = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($address)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $address)) {
				$address = str_replace('*', '%', $address);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(AutodiscoveryDevicePeer::ADDRESS, $address, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
	 * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $name The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryDeviceQuery The current query, for fluid interface
	 */
	public function filterByName($name = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($name)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $name)) {
				$name = str_replace('*', '%', $name);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(AutodiscoveryDevicePeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the hostname column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByHostname('fooValue');   // WHERE hostname = 'fooValue'
	 * $query->filterByHostname('%fooValue%'); // WHERE hostname LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $hostname The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryDeviceQuery The current query, for fluid interface
	 */
	public function filterByHostname($hostname = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($hostname)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $hostname)) {
				$hostname = str_replace('*', '%', $hostname);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(AutodiscoveryDevicePeer::HOSTNAME, $hostname, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
	 * $query->filterByDescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $description The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryDeviceQuery The current query, for fluid interface
	 */
	public function filterByDescription($description = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($description)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $description)) {
				$description = str_replace('*', '%', $description);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(AutodiscoveryDevicePeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the osvendor column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByOsvendor('fooValue');   // WHERE osvendor = 'fooValue'
	 * $query->filterByOsvendor('%fooValue%'); // WHERE osvendor LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $osvendor The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryDeviceQuery The current query, for fluid interface
	 */
	public function filterByOsvendor($osvendor = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($osvendor)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $osvendor)) {
				$osvendor = str_replace('*', '%', $osvendor);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(AutodiscoveryDevicePeer::OSVENDOR, $osvendor, $comparison);
	}

	/**
	 * Filter the query on the osfamily column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByOsfamily('fooValue');   // WHERE osfamily = 'fooValue'
	 * $query->filterByOsfamily('%fooValue%'); // WHERE osfamily LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $osfamily The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryDeviceQuery The current query, for fluid interface
	 */
	public function filterByOsfamily($osfamily = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($osfamily)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $osfamily)) {
				$osfamily = str_replace('*', '%', $osfamily);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(AutodiscoveryDevicePeer::OSFAMILY, $osfamily, $comparison);
	}

	/**
	 * Filter the query on the osgen column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByOsgen('fooValue');   // WHERE osgen = 'fooValue'
	 * $query->filterByOsgen('%fooValue%'); // WHERE osgen LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $osgen The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryDeviceQuery The current query, for fluid interface
	 */
	public function filterByOsgen($osgen = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($osgen)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $osgen)) {
				$osgen = str_replace('*', '%', $osgen);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(AutodiscoveryDevicePeer::OSGEN, $osgen, $comparison);
	}

	/**
	 * Filter the query on the host_template column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByHostTemplate(1234); // WHERE host_template = 1234
	 * $query->filterByHostTemplate(array(12, 34)); // WHERE host_template IN (12, 34)
	 * $query->filterByHostTemplate(array('min' => 12)); // WHERE host_template > 12
	 * </code>
	 *
	 * @see       filterByNagiosHostTemplate()
	 *
	 * @param     mixed $hostTemplate The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryDeviceQuery The current query, for fluid interface
	 */
	public function filterByHostTemplate($hostTemplate = null, $comparison = null)
	{
		if (is_array($hostTemplate)) {
			$useMinMax = false;
			if (isset($hostTemplate['min'])) {
				$this->addUsingAlias(AutodiscoveryDevicePeer::HOST_TEMPLATE, $hostTemplate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($hostTemplate['max'])) {
				$this->addUsingAlias(AutodiscoveryDevicePeer::HOST_TEMPLATE, $hostTemplate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AutodiscoveryDevicePeer::HOST_TEMPLATE, $hostTemplate, $comparison);
	}

	/**
	 * Filter the query on the proposed_parent column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByProposedParent(1234); // WHERE proposed_parent = 1234
	 * $query->filterByProposedParent(array(12, 34)); // WHERE proposed_parent IN (12, 34)
	 * $query->filterByProposedParent(array('min' => 12)); // WHERE proposed_parent > 12
	 * </code>
	 *
	 * @see       filterByNagiosHost()
	 *
	 * @param     mixed $proposedParent The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryDeviceQuery The current query, for fluid interface
	 */
	public function filterByProposedParent($proposedParent = null, $comparison = null)
	{
		if (is_array($proposedParent)) {
			$useMinMax = false;
			if (isset($proposedParent['min'])) {
				$this->addUsingAlias(AutodiscoveryDevicePeer::PROPOSED_PARENT, $proposedParent['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($proposedParent['max'])) {
				$this->addUsingAlias(AutodiscoveryDevicePeer::PROPOSED_PARENT, $proposedParent['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AutodiscoveryDevicePeer::PROPOSED_PARENT, $proposedParent, $comparison);
	}

	/**
	 * Filter the query by a related AutodiscoveryJob object
	 *
	 * @param     AutodiscoveryJob|PropelCollection $autodiscoveryJob The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryDeviceQuery The current query, for fluid interface
	 */
	public function filterByAutodiscoveryJob($autodiscoveryJob, $comparison = null)
	{
		if ($autodiscoveryJob instanceof AutodiscoveryJob) {
			return $this
				->addUsingAlias(AutodiscoveryDevicePeer::JOB_ID, $autodiscoveryJob->getId(), $comparison);
		} elseif ($autodiscoveryJob instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(AutodiscoveryDevicePeer::JOB_ID, $autodiscoveryJob->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByAutodiscoveryJob() only accepts arguments of type AutodiscoveryJob or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the AutodiscoveryJob relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AutodiscoveryDeviceQuery The current query, for fluid interface
	 */
	public function joinAutodiscoveryJob($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('AutodiscoveryJob');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'AutodiscoveryJob');
		}
		
		return $this;
	}

	/**
	 * Use the AutodiscoveryJob relation AutodiscoveryJob object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AutodiscoveryJobQuery A secondary query class using the current class as primary query
	 */
	public function useAutodiscoveryJobQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinAutodiscoveryJob($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'AutodiscoveryJob', 'AutodiscoveryJobQuery');
	}

	/**
	 * Filter the query by a related NagiosHostTemplate object
	 *
	 * @param     NagiosHostTemplate|PropelCollection $nagiosHostTemplate The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryDeviceQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostTemplate($nagiosHostTemplate, $comparison = null)
	{
		if ($nagiosHostTemplate instanceof NagiosHostTemplate) {
			return $this
				->addUsingAlias(AutodiscoveryDevicePeer::HOST_TEMPLATE, $nagiosHostTemplate->getId(), $comparison);
		} elseif ($nagiosHostTemplate instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(AutodiscoveryDevicePeer::HOST_TEMPLATE, $nagiosHostTemplate->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosHostTemplate() only accepts arguments of type NagiosHostTemplate or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosHostTemplate relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AutodiscoveryDeviceQuery The current query, for fluid interface
	 */
	public function joinNagiosHostTemplate($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosHostTemplate');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'NagiosHostTemplate');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosHostTemplate relation NagiosHostTemplate object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostTemplateQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosHostTemplateQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinNagiosHostTemplate($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosHostTemplate', 'NagiosHostTemplateQuery');
	}

	/**
	 * Filter the query by a related NagiosHost object
	 *
	 * @param     NagiosHost|PropelCollection $nagiosHost The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryDeviceQuery The current query, for fluid interface
	 */
	public function filterByNagiosHost($nagiosHost, $comparison = null)
	{
		if ($nagiosHost instanceof NagiosHost) {
			return $this
				->addUsingAlias(AutodiscoveryDevicePeer::PROPOSED_PARENT, $nagiosHost->getId(), $comparison);
		} elseif ($nagiosHost instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(AutodiscoveryDevicePeer::PROPOSED_PARENT, $nagiosHost->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosHost() only accepts arguments of type NagiosHost or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosHost relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AutodiscoveryDeviceQuery The current query, for fluid interface
	 */
	public function joinNagiosHost($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosHost');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'NagiosHost');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosHost relation NagiosHost object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosHostQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosHost($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosHost', 'NagiosHostQuery');
	}

	/**
	 * Filter the query by a related AutodiscoveryDeviceService object
	 *
	 * @param     AutodiscoveryDeviceService $autodiscoveryDeviceService  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryDeviceQuery The current query, for fluid interface
	 */
	public function filterByAutodiscoveryDeviceService($autodiscoveryDeviceService, $comparison = null)
	{
		if ($autodiscoveryDeviceService instanceof AutodiscoveryDeviceService) {
			return $this
				->addUsingAlias(AutodiscoveryDevicePeer::ID, $autodiscoveryDeviceService->getDeviceId(), $comparison);
		} elseif ($autodiscoveryDeviceService instanceof PropelCollection) {
			return $this
				->useAutodiscoveryDeviceServiceQuery()
					->filterByPrimaryKeys($autodiscoveryDeviceService->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByAutodiscoveryDeviceService() only accepts arguments of type AutodiscoveryDeviceService or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the AutodiscoveryDeviceService relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AutodiscoveryDeviceQuery The current query, for fluid interface
	 */
	public function joinAutodiscoveryDeviceService($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('AutodiscoveryDeviceService');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'AutodiscoveryDeviceService');
		}
		
		return $this;
	}

	/**
	 * Use the AutodiscoveryDeviceService relation AutodiscoveryDeviceService object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AutodiscoveryDeviceServiceQuery A secondary query class using the current class as primary query
	 */
	public function useAutodiscoveryDeviceServiceQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinAutodiscoveryDeviceService($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'AutodiscoveryDeviceService', 'AutodiscoveryDeviceServiceQuery');
	}

	/**
	 * Filter the query by a related AutodiscoveryDeviceTemplateMatch object
	 *
	 * @param     AutodiscoveryDeviceTemplateMatch $autodiscoveryDeviceTemplateMatch  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryDeviceQuery The current query, for fluid interface
	 */
	public function filterByAutodiscoveryDeviceTemplateMatch($autodiscoveryDeviceTemplateMatch, $comparison = null)
	{
		if ($autodiscoveryDeviceTemplateMatch instanceof AutodiscoveryDeviceTemplateMatch) {
			return $this
				->addUsingAlias(AutodiscoveryDevicePeer::ID, $autodiscoveryDeviceTemplateMatch->getDeviceId(), $comparison);
		} elseif ($autodiscoveryDeviceTemplateMatch instanceof PropelCollection) {
			return $this
				->useAutodiscoveryDeviceTemplateMatchQuery()
					->filterByPrimaryKeys($autodiscoveryDeviceTemplateMatch->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByAutodiscoveryDeviceTemplateMatch() only accepts arguments of type AutodiscoveryDeviceTemplateMatch or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the AutodiscoveryDeviceTemplateMatch relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AutodiscoveryDeviceQuery The current query, for fluid interface
	 */
	public function joinAutodiscoveryDeviceTemplateMatch($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('AutodiscoveryDeviceTemplateMatch');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'AutodiscoveryDeviceTemplateMatch');
		}
		
		return $this;
	}

	/**
	 * Use the AutodiscoveryDeviceTemplateMatch relation AutodiscoveryDeviceTemplateMatch object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AutodiscoveryDeviceTemplateMatchQuery A secondary query class using the current class as primary query
	 */
	public function useAutodiscoveryDeviceTemplateMatchQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinAutodiscoveryDeviceTemplateMatch($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'AutodiscoveryDeviceTemplateMatch', 'AutodiscoveryDeviceTemplateMatchQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     AutodiscoveryDevice $autodiscoveryDevice Object to remove from the list of results
	 *
	 * @return    AutodiscoveryDeviceQuery The current query, for fluid interface
	 */
	public function prune($autodiscoveryDevice = null)
	{
		if ($autodiscoveryDevice) {
			$this->addUsingAlias(AutodiscoveryDevicePeer::ID, $autodiscoveryDevice->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseAutodiscoveryDeviceQuery
