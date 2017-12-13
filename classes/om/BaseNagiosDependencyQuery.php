<?php


/**
 * Base class that represents a query for the 'nagios_dependency' table.
 *
 * Nagios Dependency
 *
 * @method     NagiosDependencyQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NagiosDependencyQuery orderByHostTemplate($order = Criteria::ASC) Order by the host_template column
 * @method     NagiosDependencyQuery orderByHost($order = Criteria::ASC) Order by the host column
 * @method     NagiosDependencyQuery orderByServiceTemplate($order = Criteria::ASC) Order by the service_template column
 * @method     NagiosDependencyQuery orderByService($order = Criteria::ASC) Order by the service column
 * @method     NagiosDependencyQuery orderByHostgroup($order = Criteria::ASC) Order by the hostgroup column
 * @method     NagiosDependencyQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     NagiosDependencyQuery orderByExecutionFailureCriteriaUp($order = Criteria::ASC) Order by the execution_failure_criteria_up column
 * @method     NagiosDependencyQuery orderByExecutionFailureCriteriaDown($order = Criteria::ASC) Order by the execution_failure_criteria_down column
 * @method     NagiosDependencyQuery orderByExecutionFailureCriteriaUnreachable($order = Criteria::ASC) Order by the execution_failure_criteria_unreachable column
 * @method     NagiosDependencyQuery orderByExecutionFailureCriteriaPending($order = Criteria::ASC) Order by the execution_failure_criteria_pending column
 * @method     NagiosDependencyQuery orderByExecutionFailureCriteriaOk($order = Criteria::ASC) Order by the execution_failure_criteria_ok column
 * @method     NagiosDependencyQuery orderByExecutionFailureCriteriaWarning($order = Criteria::ASC) Order by the execution_failure_criteria_warning column
 * @method     NagiosDependencyQuery orderByExecutionFailureCriteriaUnknown($order = Criteria::ASC) Order by the execution_failure_criteria_unknown column
 * @method     NagiosDependencyQuery orderByExecutionFailureCriteriaCritical($order = Criteria::ASC) Order by the execution_failure_criteria_critical column
 * @method     NagiosDependencyQuery orderByNotificationFailureCriteriaOk($order = Criteria::ASC) Order by the notification_failure_criteria_ok column
 * @method     NagiosDependencyQuery orderByNotificationFailureCriteriaWarning($order = Criteria::ASC) Order by the notification_failure_criteria_warning column
 * @method     NagiosDependencyQuery orderByNotificationFailureCriteriaUnknown($order = Criteria::ASC) Order by the notification_failure_criteria_unknown column
 * @method     NagiosDependencyQuery orderByNotificationFailureCriteriaCritical($order = Criteria::ASC) Order by the notification_failure_criteria_critical column
 * @method     NagiosDependencyQuery orderByNotificationFailureCriteriaPending($order = Criteria::ASC) Order by the notification_failure_criteria_pending column
 * @method     NagiosDependencyQuery orderByNotificationFailureCriteriaUp($order = Criteria::ASC) Order by the notification_failure_criteria_up column
 * @method     NagiosDependencyQuery orderByNotificationFailureCriteriaDown($order = Criteria::ASC) Order by the notification_failure_criteria_down column
 * @method     NagiosDependencyQuery orderByNotificationFailureCriteriaUnreachable($order = Criteria::ASC) Order by the notification_failure_criteria_unreachable column
 * @method     NagiosDependencyQuery orderByInheritsParent($order = Criteria::ASC) Order by the inherits_parent column
 * @method     NagiosDependencyQuery orderByDependencyPeriod($order = Criteria::ASC) Order by the dependency_period column
 *
 * @method     NagiosDependencyQuery groupById() Group by the id column
 * @method     NagiosDependencyQuery groupByHostTemplate() Group by the host_template column
 * @method     NagiosDependencyQuery groupByHost() Group by the host column
 * @method     NagiosDependencyQuery groupByServiceTemplate() Group by the service_template column
 * @method     NagiosDependencyQuery groupByService() Group by the service column
 * @method     NagiosDependencyQuery groupByHostgroup() Group by the hostgroup column
 * @method     NagiosDependencyQuery groupByName() Group by the name column
 * @method     NagiosDependencyQuery groupByExecutionFailureCriteriaUp() Group by the execution_failure_criteria_up column
 * @method     NagiosDependencyQuery groupByExecutionFailureCriteriaDown() Group by the execution_failure_criteria_down column
 * @method     NagiosDependencyQuery groupByExecutionFailureCriteriaUnreachable() Group by the execution_failure_criteria_unreachable column
 * @method     NagiosDependencyQuery groupByExecutionFailureCriteriaPending() Group by the execution_failure_criteria_pending column
 * @method     NagiosDependencyQuery groupByExecutionFailureCriteriaOk() Group by the execution_failure_criteria_ok column
 * @method     NagiosDependencyQuery groupByExecutionFailureCriteriaWarning() Group by the execution_failure_criteria_warning column
 * @method     NagiosDependencyQuery groupByExecutionFailureCriteriaUnknown() Group by the execution_failure_criteria_unknown column
 * @method     NagiosDependencyQuery groupByExecutionFailureCriteriaCritical() Group by the execution_failure_criteria_critical column
 * @method     NagiosDependencyQuery groupByNotificationFailureCriteriaOk() Group by the notification_failure_criteria_ok column
 * @method     NagiosDependencyQuery groupByNotificationFailureCriteriaWarning() Group by the notification_failure_criteria_warning column
 * @method     NagiosDependencyQuery groupByNotificationFailureCriteriaUnknown() Group by the notification_failure_criteria_unknown column
 * @method     NagiosDependencyQuery groupByNotificationFailureCriteriaCritical() Group by the notification_failure_criteria_critical column
 * @method     NagiosDependencyQuery groupByNotificationFailureCriteriaPending() Group by the notification_failure_criteria_pending column
 * @method     NagiosDependencyQuery groupByNotificationFailureCriteriaUp() Group by the notification_failure_criteria_up column
 * @method     NagiosDependencyQuery groupByNotificationFailureCriteriaDown() Group by the notification_failure_criteria_down column
 * @method     NagiosDependencyQuery groupByNotificationFailureCriteriaUnreachable() Group by the notification_failure_criteria_unreachable column
 * @method     NagiosDependencyQuery groupByInheritsParent() Group by the inherits_parent column
 * @method     NagiosDependencyQuery groupByDependencyPeriod() Group by the dependency_period column
 *
 * @method     NagiosDependencyQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NagiosDependencyQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NagiosDependencyQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NagiosDependencyQuery leftJoinNagiosHostTemplate($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostTemplate relation
 * @method     NagiosDependencyQuery rightJoinNagiosHostTemplate($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostTemplate relation
 * @method     NagiosDependencyQuery innerJoinNagiosHostTemplate($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostTemplate relation
 *
 * @method     NagiosDependencyQuery leftJoinNagiosHost($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHost relation
 * @method     NagiosDependencyQuery rightJoinNagiosHost($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHost relation
 * @method     NagiosDependencyQuery innerJoinNagiosHost($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHost relation
 *
 * @method     NagiosDependencyQuery leftJoinNagiosServiceTemplate($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosServiceTemplate relation
 * @method     NagiosDependencyQuery rightJoinNagiosServiceTemplate($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosServiceTemplate relation
 * @method     NagiosDependencyQuery innerJoinNagiosServiceTemplate($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosServiceTemplate relation
 *
 * @method     NagiosDependencyQuery leftJoinNagiosService($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosService relation
 * @method     NagiosDependencyQuery rightJoinNagiosService($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosService relation
 * @method     NagiosDependencyQuery innerJoinNagiosService($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosService relation
 *
 * @method     NagiosDependencyQuery leftJoinNagiosHostgroup($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostgroup relation
 * @method     NagiosDependencyQuery rightJoinNagiosHostgroup($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostgroup relation
 * @method     NagiosDependencyQuery innerJoinNagiosHostgroup($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostgroup relation
 *
 * @method     NagiosDependencyQuery leftJoinNagiosTimeperiod($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosTimeperiod relation
 * @method     NagiosDependencyQuery rightJoinNagiosTimeperiod($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosTimeperiod relation
 * @method     NagiosDependencyQuery innerJoinNagiosTimeperiod($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosTimeperiod relation
 *
 * @method     NagiosDependencyQuery leftJoinNagiosDependencyTarget($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosDependencyTarget relation
 * @method     NagiosDependencyQuery rightJoinNagiosDependencyTarget($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosDependencyTarget relation
 * @method     NagiosDependencyQuery innerJoinNagiosDependencyTarget($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosDependencyTarget relation
 *
 * @method     NagiosDependency findOne(PropelPDO $con = null) Return the first NagiosDependency matching the query
 * @method     NagiosDependency findOneOrCreate(PropelPDO $con = null) Return the first NagiosDependency matching the query, or a new NagiosDependency object populated from the query conditions when no match is found
 *
 * @method     NagiosDependency findOneById(int $id) Return the first NagiosDependency filtered by the id column
 * @method     NagiosDependency findOneByHostTemplate(int $host_template) Return the first NagiosDependency filtered by the host_template column
 * @method     NagiosDependency findOneByHost(int $host) Return the first NagiosDependency filtered by the host column
 * @method     NagiosDependency findOneByServiceTemplate(int $service_template) Return the first NagiosDependency filtered by the service_template column
 * @method     NagiosDependency findOneByService(int $service) Return the first NagiosDependency filtered by the service column
 * @method     NagiosDependency findOneByHostgroup(int $hostgroup) Return the first NagiosDependency filtered by the hostgroup column
 * @method     NagiosDependency findOneByName(string $name) Return the first NagiosDependency filtered by the name column
 * @method     NagiosDependency findOneByExecutionFailureCriteriaUp(boolean $execution_failure_criteria_up) Return the first NagiosDependency filtered by the execution_failure_criteria_up column
 * @method     NagiosDependency findOneByExecutionFailureCriteriaDown(boolean $execution_failure_criteria_down) Return the first NagiosDependency filtered by the execution_failure_criteria_down column
 * @method     NagiosDependency findOneByExecutionFailureCriteriaUnreachable(boolean $execution_failure_criteria_unreachable) Return the first NagiosDependency filtered by the execution_failure_criteria_unreachable column
 * @method     NagiosDependency findOneByExecutionFailureCriteriaPending(boolean $execution_failure_criteria_pending) Return the first NagiosDependency filtered by the execution_failure_criteria_pending column
 * @method     NagiosDependency findOneByExecutionFailureCriteriaOk(boolean $execution_failure_criteria_ok) Return the first NagiosDependency filtered by the execution_failure_criteria_ok column
 * @method     NagiosDependency findOneByExecutionFailureCriteriaWarning(boolean $execution_failure_criteria_warning) Return the first NagiosDependency filtered by the execution_failure_criteria_warning column
 * @method     NagiosDependency findOneByExecutionFailureCriteriaUnknown(boolean $execution_failure_criteria_unknown) Return the first NagiosDependency filtered by the execution_failure_criteria_unknown column
 * @method     NagiosDependency findOneByExecutionFailureCriteriaCritical(boolean $execution_failure_criteria_critical) Return the first NagiosDependency filtered by the execution_failure_criteria_critical column
 * @method     NagiosDependency findOneByNotificationFailureCriteriaOk(boolean $notification_failure_criteria_ok) Return the first NagiosDependency filtered by the notification_failure_criteria_ok column
 * @method     NagiosDependency findOneByNotificationFailureCriteriaWarning(boolean $notification_failure_criteria_warning) Return the first NagiosDependency filtered by the notification_failure_criteria_warning column
 * @method     NagiosDependency findOneByNotificationFailureCriteriaUnknown(boolean $notification_failure_criteria_unknown) Return the first NagiosDependency filtered by the notification_failure_criteria_unknown column
 * @method     NagiosDependency findOneByNotificationFailureCriteriaCritical(boolean $notification_failure_criteria_critical) Return the first NagiosDependency filtered by the notification_failure_criteria_critical column
 * @method     NagiosDependency findOneByNotificationFailureCriteriaPending(boolean $notification_failure_criteria_pending) Return the first NagiosDependency filtered by the notification_failure_criteria_pending column
 * @method     NagiosDependency findOneByNotificationFailureCriteriaUp(boolean $notification_failure_criteria_up) Return the first NagiosDependency filtered by the notification_failure_criteria_up column
 * @method     NagiosDependency findOneByNotificationFailureCriteriaDown(boolean $notification_failure_criteria_down) Return the first NagiosDependency filtered by the notification_failure_criteria_down column
 * @method     NagiosDependency findOneByNotificationFailureCriteriaUnreachable(boolean $notification_failure_criteria_unreachable) Return the first NagiosDependency filtered by the notification_failure_criteria_unreachable column
 * @method     NagiosDependency findOneByInheritsParent(boolean $inherits_parent) Return the first NagiosDependency filtered by the inherits_parent column
 * @method     NagiosDependency findOneByDependencyPeriod(int $dependency_period) Return the first NagiosDependency filtered by the dependency_period column
 *
 * @method     array findById(int $id) Return NagiosDependency objects filtered by the id column
 * @method     array findByHostTemplate(int $host_template) Return NagiosDependency objects filtered by the host_template column
 * @method     array findByHost(int $host) Return NagiosDependency objects filtered by the host column
 * @method     array findByServiceTemplate(int $service_template) Return NagiosDependency objects filtered by the service_template column
 * @method     array findByService(int $service) Return NagiosDependency objects filtered by the service column
 * @method     array findByHostgroup(int $hostgroup) Return NagiosDependency objects filtered by the hostgroup column
 * @method     array findByName(string $name) Return NagiosDependency objects filtered by the name column
 * @method     array findByExecutionFailureCriteriaUp(boolean $execution_failure_criteria_up) Return NagiosDependency objects filtered by the execution_failure_criteria_up column
 * @method     array findByExecutionFailureCriteriaDown(boolean $execution_failure_criteria_down) Return NagiosDependency objects filtered by the execution_failure_criteria_down column
 * @method     array findByExecutionFailureCriteriaUnreachable(boolean $execution_failure_criteria_unreachable) Return NagiosDependency objects filtered by the execution_failure_criteria_unreachable column
 * @method     array findByExecutionFailureCriteriaPending(boolean $execution_failure_criteria_pending) Return NagiosDependency objects filtered by the execution_failure_criteria_pending column
 * @method     array findByExecutionFailureCriteriaOk(boolean $execution_failure_criteria_ok) Return NagiosDependency objects filtered by the execution_failure_criteria_ok column
 * @method     array findByExecutionFailureCriteriaWarning(boolean $execution_failure_criteria_warning) Return NagiosDependency objects filtered by the execution_failure_criteria_warning column
 * @method     array findByExecutionFailureCriteriaUnknown(boolean $execution_failure_criteria_unknown) Return NagiosDependency objects filtered by the execution_failure_criteria_unknown column
 * @method     array findByExecutionFailureCriteriaCritical(boolean $execution_failure_criteria_critical) Return NagiosDependency objects filtered by the execution_failure_criteria_critical column
 * @method     array findByNotificationFailureCriteriaOk(boolean $notification_failure_criteria_ok) Return NagiosDependency objects filtered by the notification_failure_criteria_ok column
 * @method     array findByNotificationFailureCriteriaWarning(boolean $notification_failure_criteria_warning) Return NagiosDependency objects filtered by the notification_failure_criteria_warning column
 * @method     array findByNotificationFailureCriteriaUnknown(boolean $notification_failure_criteria_unknown) Return NagiosDependency objects filtered by the notification_failure_criteria_unknown column
 * @method     array findByNotificationFailureCriteriaCritical(boolean $notification_failure_criteria_critical) Return NagiosDependency objects filtered by the notification_failure_criteria_critical column
 * @method     array findByNotificationFailureCriteriaPending(boolean $notification_failure_criteria_pending) Return NagiosDependency objects filtered by the notification_failure_criteria_pending column
 * @method     array findByNotificationFailureCriteriaUp(boolean $notification_failure_criteria_up) Return NagiosDependency objects filtered by the notification_failure_criteria_up column
 * @method     array findByNotificationFailureCriteriaDown(boolean $notification_failure_criteria_down) Return NagiosDependency objects filtered by the notification_failure_criteria_down column
 * @method     array findByNotificationFailureCriteriaUnreachable(boolean $notification_failure_criteria_unreachable) Return NagiosDependency objects filtered by the notification_failure_criteria_unreachable column
 * @method     array findByInheritsParent(boolean $inherits_parent) Return NagiosDependency objects filtered by the inherits_parent column
 * @method     array findByDependencyPeriod(int $dependency_period) Return NagiosDependency objects filtered by the dependency_period column
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosDependencyQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNagiosDependencyQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'NagiosDependency', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NagiosDependencyQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NagiosDependencyQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NagiosDependencyQuery) {
			return $criteria;
		}
		$query = new NagiosDependencyQuery();
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
	 * @return    NagiosDependency|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NagiosDependencyPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NagiosDependencyPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NagiosDependencyPeer::ID, $keys, Criteria::IN);
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
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NagiosDependencyPeer::ID, $id, $comparison);
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
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByHostTemplate($hostTemplate = null, $comparison = null)
	{
		if (is_array($hostTemplate)) {
			$useMinMax = false;
			if (isset($hostTemplate['min'])) {
				$this->addUsingAlias(NagiosDependencyPeer::HOST_TEMPLATE, $hostTemplate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($hostTemplate['max'])) {
				$this->addUsingAlias(NagiosDependencyPeer::HOST_TEMPLATE, $hostTemplate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosDependencyPeer::HOST_TEMPLATE, $hostTemplate, $comparison);
	}

	/**
	 * Filter the query on the host column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByHost(1234); // WHERE host = 1234
	 * $query->filterByHost(array(12, 34)); // WHERE host IN (12, 34)
	 * $query->filterByHost(array('min' => 12)); // WHERE host > 12
	 * </code>
	 *
	 * @see       filterByNagiosHost()
	 *
	 * @param     mixed $host The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByHost($host = null, $comparison = null)
	{
		if (is_array($host)) {
			$useMinMax = false;
			if (isset($host['min'])) {
				$this->addUsingAlias(NagiosDependencyPeer::HOST, $host['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($host['max'])) {
				$this->addUsingAlias(NagiosDependencyPeer::HOST, $host['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosDependencyPeer::HOST, $host, $comparison);
	}

	/**
	 * Filter the query on the service_template column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByServiceTemplate(1234); // WHERE service_template = 1234
	 * $query->filterByServiceTemplate(array(12, 34)); // WHERE service_template IN (12, 34)
	 * $query->filterByServiceTemplate(array('min' => 12)); // WHERE service_template > 12
	 * </code>
	 *
	 * @see       filterByNagiosServiceTemplate()
	 *
	 * @param     mixed $serviceTemplate The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByServiceTemplate($serviceTemplate = null, $comparison = null)
	{
		if (is_array($serviceTemplate)) {
			$useMinMax = false;
			if (isset($serviceTemplate['min'])) {
				$this->addUsingAlias(NagiosDependencyPeer::SERVICE_TEMPLATE, $serviceTemplate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($serviceTemplate['max'])) {
				$this->addUsingAlias(NagiosDependencyPeer::SERVICE_TEMPLATE, $serviceTemplate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosDependencyPeer::SERVICE_TEMPLATE, $serviceTemplate, $comparison);
	}

	/**
	 * Filter the query on the service column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByService(1234); // WHERE service = 1234
	 * $query->filterByService(array(12, 34)); // WHERE service IN (12, 34)
	 * $query->filterByService(array('min' => 12)); // WHERE service > 12
	 * </code>
	 *
	 * @see       filterByNagiosService()
	 *
	 * @param     mixed $service The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByService($service = null, $comparison = null)
	{
		if (is_array($service)) {
			$useMinMax = false;
			if (isset($service['min'])) {
				$this->addUsingAlias(NagiosDependencyPeer::SERVICE, $service['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($service['max'])) {
				$this->addUsingAlias(NagiosDependencyPeer::SERVICE, $service['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosDependencyPeer::SERVICE, $service, $comparison);
	}

	/**
	 * Filter the query on the hostgroup column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByHostgroup(1234); // WHERE hostgroup = 1234
	 * $query->filterByHostgroup(array(12, 34)); // WHERE hostgroup IN (12, 34)
	 * $query->filterByHostgroup(array('min' => 12)); // WHERE hostgroup > 12
	 * </code>
	 *
	 * @see       filterByNagiosHostgroup()
	 *
	 * @param     mixed $hostgroup The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByHostgroup($hostgroup = null, $comparison = null)
	{
		if (is_array($hostgroup)) {
			$useMinMax = false;
			if (isset($hostgroup['min'])) {
				$this->addUsingAlias(NagiosDependencyPeer::HOSTGROUP, $hostgroup['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($hostgroup['max'])) {
				$this->addUsingAlias(NagiosDependencyPeer::HOSTGROUP, $hostgroup['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosDependencyPeer::HOSTGROUP, $hostgroup, $comparison);
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
	 * @return    NagiosDependencyQuery The current query, for fluid interface
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
		return $this->addUsingAlias(NagiosDependencyPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the execution_failure_criteria_up column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByExecutionFailureCriteriaUp(true); // WHERE execution_failure_criteria_up = true
	 * $query->filterByExecutionFailureCriteriaUp('yes'); // WHERE execution_failure_criteria_up = true
	 * </code>
	 *
	 * @param     boolean|string $executionFailureCriteriaUp The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByExecutionFailureCriteriaUp($executionFailureCriteriaUp = null, $comparison = null)
	{
		if (is_string($executionFailureCriteriaUp)) {
			$execution_failure_criteria_up = in_array(strtolower($executionFailureCriteriaUp), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_UP, $executionFailureCriteriaUp, $comparison);
	}

	/**
	 * Filter the query on the execution_failure_criteria_down column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByExecutionFailureCriteriaDown(true); // WHERE execution_failure_criteria_down = true
	 * $query->filterByExecutionFailureCriteriaDown('yes'); // WHERE execution_failure_criteria_down = true
	 * </code>
	 *
	 * @param     boolean|string $executionFailureCriteriaDown The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByExecutionFailureCriteriaDown($executionFailureCriteriaDown = null, $comparison = null)
	{
		if (is_string($executionFailureCriteriaDown)) {
			$execution_failure_criteria_down = in_array(strtolower($executionFailureCriteriaDown), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_DOWN, $executionFailureCriteriaDown, $comparison);
	}

	/**
	 * Filter the query on the execution_failure_criteria_unreachable column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByExecutionFailureCriteriaUnreachable(true); // WHERE execution_failure_criteria_unreachable = true
	 * $query->filterByExecutionFailureCriteriaUnreachable('yes'); // WHERE execution_failure_criteria_unreachable = true
	 * </code>
	 *
	 * @param     boolean|string $executionFailureCriteriaUnreachable The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByExecutionFailureCriteriaUnreachable($executionFailureCriteriaUnreachable = null, $comparison = null)
	{
		if (is_string($executionFailureCriteriaUnreachable)) {
			$execution_failure_criteria_unreachable = in_array(strtolower($executionFailureCriteriaUnreachable), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_UNREACHABLE, $executionFailureCriteriaUnreachable, $comparison);
	}

	/**
	 * Filter the query on the execution_failure_criteria_pending column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByExecutionFailureCriteriaPending(true); // WHERE execution_failure_criteria_pending = true
	 * $query->filterByExecutionFailureCriteriaPending('yes'); // WHERE execution_failure_criteria_pending = true
	 * </code>
	 *
	 * @param     boolean|string $executionFailureCriteriaPending The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByExecutionFailureCriteriaPending($executionFailureCriteriaPending = null, $comparison = null)
	{
		if (is_string($executionFailureCriteriaPending)) {
			$execution_failure_criteria_pending = in_array(strtolower($executionFailureCriteriaPending), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_PENDING, $executionFailureCriteriaPending, $comparison);
	}

	/**
	 * Filter the query on the execution_failure_criteria_ok column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByExecutionFailureCriteriaOk(true); // WHERE execution_failure_criteria_ok = true
	 * $query->filterByExecutionFailureCriteriaOk('yes'); // WHERE execution_failure_criteria_ok = true
	 * </code>
	 *
	 * @param     boolean|string $executionFailureCriteriaOk The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByExecutionFailureCriteriaOk($executionFailureCriteriaOk = null, $comparison = null)
	{
		if (is_string($executionFailureCriteriaOk)) {
			$execution_failure_criteria_ok = in_array(strtolower($executionFailureCriteriaOk), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_OK, $executionFailureCriteriaOk, $comparison);
	}

	/**
	 * Filter the query on the execution_failure_criteria_warning column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByExecutionFailureCriteriaWarning(true); // WHERE execution_failure_criteria_warning = true
	 * $query->filterByExecutionFailureCriteriaWarning('yes'); // WHERE execution_failure_criteria_warning = true
	 * </code>
	 *
	 * @param     boolean|string $executionFailureCriteriaWarning The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByExecutionFailureCriteriaWarning($executionFailureCriteriaWarning = null, $comparison = null)
	{
		if (is_string($executionFailureCriteriaWarning)) {
			$execution_failure_criteria_warning = in_array(strtolower($executionFailureCriteriaWarning), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_WARNING, $executionFailureCriteriaWarning, $comparison);
	}

	/**
	 * Filter the query on the execution_failure_criteria_unknown column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByExecutionFailureCriteriaUnknown(true); // WHERE execution_failure_criteria_unknown = true
	 * $query->filterByExecutionFailureCriteriaUnknown('yes'); // WHERE execution_failure_criteria_unknown = true
	 * </code>
	 *
	 * @param     boolean|string $executionFailureCriteriaUnknown The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByExecutionFailureCriteriaUnknown($executionFailureCriteriaUnknown = null, $comparison = null)
	{
		if (is_string($executionFailureCriteriaUnknown)) {
			$execution_failure_criteria_unknown = in_array(strtolower($executionFailureCriteriaUnknown), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_UNKNOWN, $executionFailureCriteriaUnknown, $comparison);
	}

	/**
	 * Filter the query on the execution_failure_criteria_critical column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByExecutionFailureCriteriaCritical(true); // WHERE execution_failure_criteria_critical = true
	 * $query->filterByExecutionFailureCriteriaCritical('yes'); // WHERE execution_failure_criteria_critical = true
	 * </code>
	 *
	 * @param     boolean|string $executionFailureCriteriaCritical The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByExecutionFailureCriteriaCritical($executionFailureCriteriaCritical = null, $comparison = null)
	{
		if (is_string($executionFailureCriteriaCritical)) {
			$execution_failure_criteria_critical = in_array(strtolower($executionFailureCriteriaCritical), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_CRITICAL, $executionFailureCriteriaCritical, $comparison);
	}

	/**
	 * Filter the query on the notification_failure_criteria_ok column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNotificationFailureCriteriaOk(true); // WHERE notification_failure_criteria_ok = true
	 * $query->filterByNotificationFailureCriteriaOk('yes'); // WHERE notification_failure_criteria_ok = true
	 * </code>
	 *
	 * @param     boolean|string $notificationFailureCriteriaOk The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByNotificationFailureCriteriaOk($notificationFailureCriteriaOk = null, $comparison = null)
	{
		if (is_string($notificationFailureCriteriaOk)) {
			$notification_failure_criteria_ok = in_array(strtolower($notificationFailureCriteriaOk), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_OK, $notificationFailureCriteriaOk, $comparison);
	}

	/**
	 * Filter the query on the notification_failure_criteria_warning column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNotificationFailureCriteriaWarning(true); // WHERE notification_failure_criteria_warning = true
	 * $query->filterByNotificationFailureCriteriaWarning('yes'); // WHERE notification_failure_criteria_warning = true
	 * </code>
	 *
	 * @param     boolean|string $notificationFailureCriteriaWarning The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByNotificationFailureCriteriaWarning($notificationFailureCriteriaWarning = null, $comparison = null)
	{
		if (is_string($notificationFailureCriteriaWarning)) {
			$notification_failure_criteria_warning = in_array(strtolower($notificationFailureCriteriaWarning), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_WARNING, $notificationFailureCriteriaWarning, $comparison);
	}

	/**
	 * Filter the query on the notification_failure_criteria_unknown column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNotificationFailureCriteriaUnknown(true); // WHERE notification_failure_criteria_unknown = true
	 * $query->filterByNotificationFailureCriteriaUnknown('yes'); // WHERE notification_failure_criteria_unknown = true
	 * </code>
	 *
	 * @param     boolean|string $notificationFailureCriteriaUnknown The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByNotificationFailureCriteriaUnknown($notificationFailureCriteriaUnknown = null, $comparison = null)
	{
		if (is_string($notificationFailureCriteriaUnknown)) {
			$notification_failure_criteria_unknown = in_array(strtolower($notificationFailureCriteriaUnknown), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_UNKNOWN, $notificationFailureCriteriaUnknown, $comparison);
	}

	/**
	 * Filter the query on the notification_failure_criteria_critical column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNotificationFailureCriteriaCritical(true); // WHERE notification_failure_criteria_critical = true
	 * $query->filterByNotificationFailureCriteriaCritical('yes'); // WHERE notification_failure_criteria_critical = true
	 * </code>
	 *
	 * @param     boolean|string $notificationFailureCriteriaCritical The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByNotificationFailureCriteriaCritical($notificationFailureCriteriaCritical = null, $comparison = null)
	{
		if (is_string($notificationFailureCriteriaCritical)) {
			$notification_failure_criteria_critical = in_array(strtolower($notificationFailureCriteriaCritical), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_CRITICAL, $notificationFailureCriteriaCritical, $comparison);
	}

	/**
	 * Filter the query on the notification_failure_criteria_pending column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNotificationFailureCriteriaPending(true); // WHERE notification_failure_criteria_pending = true
	 * $query->filterByNotificationFailureCriteriaPending('yes'); // WHERE notification_failure_criteria_pending = true
	 * </code>
	 *
	 * @param     boolean|string $notificationFailureCriteriaPending The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByNotificationFailureCriteriaPending($notificationFailureCriteriaPending = null, $comparison = null)
	{
		if (is_string($notificationFailureCriteriaPending)) {
			$notification_failure_criteria_pending = in_array(strtolower($notificationFailureCriteriaPending), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_PENDING, $notificationFailureCriteriaPending, $comparison);
	}

	/**
	 * Filter the query on the notification_failure_criteria_up column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNotificationFailureCriteriaUp(true); // WHERE notification_failure_criteria_up = true
	 * $query->filterByNotificationFailureCriteriaUp('yes'); // WHERE notification_failure_criteria_up = true
	 * </code>
	 *
	 * @param     boolean|string $notificationFailureCriteriaUp The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByNotificationFailureCriteriaUp($notificationFailureCriteriaUp = null, $comparison = null)
	{
		if (is_string($notificationFailureCriteriaUp)) {
			$notification_failure_criteria_up = in_array(strtolower($notificationFailureCriteriaUp), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_UP, $notificationFailureCriteriaUp, $comparison);
	}

	/**
	 * Filter the query on the notification_failure_criteria_down column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNotificationFailureCriteriaDown(true); // WHERE notification_failure_criteria_down = true
	 * $query->filterByNotificationFailureCriteriaDown('yes'); // WHERE notification_failure_criteria_down = true
	 * </code>
	 *
	 * @param     boolean|string $notificationFailureCriteriaDown The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByNotificationFailureCriteriaDown($notificationFailureCriteriaDown = null, $comparison = null)
	{
		if (is_string($notificationFailureCriteriaDown)) {
			$notification_failure_criteria_down = in_array(strtolower($notificationFailureCriteriaDown), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_DOWN, $notificationFailureCriteriaDown, $comparison);
	}

	/**
	 * Filter the query on the notification_failure_criteria_unreachable column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNotificationFailureCriteriaUnreachable(true); // WHERE notification_failure_criteria_unreachable = true
	 * $query->filterByNotificationFailureCriteriaUnreachable('yes'); // WHERE notification_failure_criteria_unreachable = true
	 * </code>
	 *
	 * @param     boolean|string $notificationFailureCriteriaUnreachable The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByNotificationFailureCriteriaUnreachable($notificationFailureCriteriaUnreachable = null, $comparison = null)
	{
		if (is_string($notificationFailureCriteriaUnreachable)) {
			$notification_failure_criteria_unreachable = in_array(strtolower($notificationFailureCriteriaUnreachable), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_UNREACHABLE, $notificationFailureCriteriaUnreachable, $comparison);
	}

	/**
	 * Filter the query on the inherits_parent column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByInheritsParent(true); // WHERE inherits_parent = true
	 * $query->filterByInheritsParent('yes'); // WHERE inherits_parent = true
	 * </code>
	 *
	 * @param     boolean|string $inheritsParent The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByInheritsParent($inheritsParent = null, $comparison = null)
	{
		if (is_string($inheritsParent)) {
			$inherits_parent = in_array(strtolower($inheritsParent), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosDependencyPeer::INHERITS_PARENT, $inheritsParent, $comparison);
	}

	/**
	 * Filter the query on the dependency_period column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByDependencyPeriod(1234); // WHERE dependency_period = 1234
	 * $query->filterByDependencyPeriod(array(12, 34)); // WHERE dependency_period IN (12, 34)
	 * $query->filterByDependencyPeriod(array('min' => 12)); // WHERE dependency_period > 12
	 * </code>
	 *
	 * @see       filterByNagiosTimeperiod()
	 *
	 * @param     mixed $dependencyPeriod The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByDependencyPeriod($dependencyPeriod = null, $comparison = null)
	{
		if (is_array($dependencyPeriod)) {
			$useMinMax = false;
			if (isset($dependencyPeriod['min'])) {
				$this->addUsingAlias(NagiosDependencyPeer::DEPENDENCY_PERIOD, $dependencyPeriod['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dependencyPeriod['max'])) {
				$this->addUsingAlias(NagiosDependencyPeer::DEPENDENCY_PERIOD, $dependencyPeriod['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosDependencyPeer::DEPENDENCY_PERIOD, $dependencyPeriod, $comparison);
	}

	/**
	 * Filter the query by a related NagiosHostTemplate object
	 *
	 * @param     NagiosHostTemplate|PropelCollection $nagiosHostTemplate The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostTemplate($nagiosHostTemplate, $comparison = null)
	{
		if ($nagiosHostTemplate instanceof NagiosHostTemplate) {
			return $this
				->addUsingAlias(NagiosDependencyPeer::HOST_TEMPLATE, $nagiosHostTemplate->getId(), $comparison);
		} elseif ($nagiosHostTemplate instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosDependencyPeer::HOST_TEMPLATE, $nagiosHostTemplate->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function joinNagiosHostTemplate($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
	public function useNagiosHostTemplateQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByNagiosHost($nagiosHost, $comparison = null)
	{
		if ($nagiosHost instanceof NagiosHost) {
			return $this
				->addUsingAlias(NagiosDependencyPeer::HOST, $nagiosHost->getId(), $comparison);
		} elseif ($nagiosHost instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosDependencyPeer::HOST, $nagiosHost->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosDependencyQuery The current query, for fluid interface
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
	 * Filter the query by a related NagiosServiceTemplate object
	 *
	 * @param     NagiosServiceTemplate|PropelCollection $nagiosServiceTemplate The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByNagiosServiceTemplate($nagiosServiceTemplate, $comparison = null)
	{
		if ($nagiosServiceTemplate instanceof NagiosServiceTemplate) {
			return $this
				->addUsingAlias(NagiosDependencyPeer::SERVICE_TEMPLATE, $nagiosServiceTemplate->getId(), $comparison);
		} elseif ($nagiosServiceTemplate instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosDependencyPeer::SERVICE_TEMPLATE, $nagiosServiceTemplate->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosServiceTemplate() only accepts arguments of type NagiosServiceTemplate or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosServiceTemplate relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function joinNagiosServiceTemplate($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosServiceTemplate');
		
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
			$this->addJoinObject($join, 'NagiosServiceTemplate');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosServiceTemplate relation NagiosServiceTemplate object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceTemplateQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosServiceTemplateQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosServiceTemplate($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosServiceTemplate', 'NagiosServiceTemplateQuery');
	}

	/**
	 * Filter the query by a related NagiosService object
	 *
	 * @param     NagiosService|PropelCollection $nagiosService The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByNagiosService($nagiosService, $comparison = null)
	{
		if ($nagiosService instanceof NagiosService) {
			return $this
				->addUsingAlias(NagiosDependencyPeer::SERVICE, $nagiosService->getId(), $comparison);
		} elseif ($nagiosService instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosDependencyPeer::SERVICE, $nagiosService->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosService() only accepts arguments of type NagiosService or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosService relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function joinNagiosService($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosService');
		
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
			$this->addJoinObject($join, 'NagiosService');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosService relation NagiosService object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosServiceQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosService($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosService', 'NagiosServiceQuery');
	}

	/**
	 * Filter the query by a related NagiosHostgroup object
	 *
	 * @param     NagiosHostgroup|PropelCollection $nagiosHostgroup The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostgroup($nagiosHostgroup, $comparison = null)
	{
		if ($nagiosHostgroup instanceof NagiosHostgroup) {
			return $this
				->addUsingAlias(NagiosDependencyPeer::HOSTGROUP, $nagiosHostgroup->getId(), $comparison);
		} elseif ($nagiosHostgroup instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosDependencyPeer::HOSTGROUP, $nagiosHostgroup->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosHostgroup() only accepts arguments of type NagiosHostgroup or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosHostgroup relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function joinNagiosHostgroup($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosHostgroup');
		
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
			$this->addJoinObject($join, 'NagiosHostgroup');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosHostgroup relation NagiosHostgroup object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostgroupQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosHostgroupQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosHostgroup($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosHostgroup', 'NagiosHostgroupQuery');
	}

	/**
	 * Filter the query by a related NagiosTimeperiod object
	 *
	 * @param     NagiosTimeperiod|PropelCollection $nagiosTimeperiod The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByNagiosTimeperiod($nagiosTimeperiod, $comparison = null)
	{
		if ($nagiosTimeperiod instanceof NagiosTimeperiod) {
			return $this
				->addUsingAlias(NagiosDependencyPeer::DEPENDENCY_PERIOD, $nagiosTimeperiod->getId(), $comparison);
		} elseif ($nagiosTimeperiod instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosDependencyPeer::DEPENDENCY_PERIOD, $nagiosTimeperiod->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosTimeperiod() only accepts arguments of type NagiosTimeperiod or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosTimeperiod relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function joinNagiosTimeperiod($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosTimeperiod');
		
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
			$this->addJoinObject($join, 'NagiosTimeperiod');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosTimeperiod relation NagiosTimeperiod object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosTimeperiodQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosTimeperiodQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosTimeperiod($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosTimeperiod', 'NagiosTimeperiodQuery');
	}

	/**
	 * Filter the query by a related NagiosDependencyTarget object
	 *
	 * @param     NagiosDependencyTarget $nagiosDependencyTarget  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function filterByNagiosDependencyTarget($nagiosDependencyTarget, $comparison = null)
	{
		if ($nagiosDependencyTarget instanceof NagiosDependencyTarget) {
			return $this
				->addUsingAlias(NagiosDependencyPeer::ID, $nagiosDependencyTarget->getDependency(), $comparison);
		} elseif ($nagiosDependencyTarget instanceof PropelCollection) {
			return $this
				->useNagiosDependencyTargetQuery()
					->filterByPrimaryKeys($nagiosDependencyTarget->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosDependencyTarget() only accepts arguments of type NagiosDependencyTarget or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosDependencyTarget relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function joinNagiosDependencyTarget($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosDependencyTarget');
		
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
			$this->addJoinObject($join, 'NagiosDependencyTarget');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosDependencyTarget relation NagiosDependencyTarget object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosDependencyTargetQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosDependencyTargetQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosDependencyTarget($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosDependencyTarget', 'NagiosDependencyTargetQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     NagiosDependency $nagiosDependency Object to remove from the list of results
	 *
	 * @return    NagiosDependencyQuery The current query, for fluid interface
	 */
	public function prune($nagiosDependency = null)
	{
		if ($nagiosDependency) {
			$this->addUsingAlias(NagiosDependencyPeer::ID, $nagiosDependency->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseNagiosDependencyQuery
