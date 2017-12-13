<?php


/**
 * Base class that represents a query for the 'nagios_escalation' table.
 *
 * Nagios Escalation
 *
 * @method     NagiosEscalationQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NagiosEscalationQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     NagiosEscalationQuery orderByHostTemplate($order = Criteria::ASC) Order by the host_template column
 * @method     NagiosEscalationQuery orderByHost($order = Criteria::ASC) Order by the host column
 * @method     NagiosEscalationQuery orderByHostgroup($order = Criteria::ASC) Order by the hostgroup column
 * @method     NagiosEscalationQuery orderByServiceTemplate($order = Criteria::ASC) Order by the service_template column
 * @method     NagiosEscalationQuery orderByService($order = Criteria::ASC) Order by the service column
 * @method     NagiosEscalationQuery orderByFirstNotification($order = Criteria::ASC) Order by the first_notification column
 * @method     NagiosEscalationQuery orderByLastNotification($order = Criteria::ASC) Order by the last_notification column
 * @method     NagiosEscalationQuery orderByNotificationInterval($order = Criteria::ASC) Order by the notification_interval column
 * @method     NagiosEscalationQuery orderByEscalationPeriod($order = Criteria::ASC) Order by the escalation_period column
 * @method     NagiosEscalationQuery orderByEscalationOptionsUp($order = Criteria::ASC) Order by the escalation_options_up column
 * @method     NagiosEscalationQuery orderByEscalationOptionsDown($order = Criteria::ASC) Order by the escalation_options_down column
 * @method     NagiosEscalationQuery orderByEscalationOptionsUnreachable($order = Criteria::ASC) Order by the escalation_options_unreachable column
 * @method     NagiosEscalationQuery orderByEscalationOptionsOk($order = Criteria::ASC) Order by the escalation_options_ok column
 * @method     NagiosEscalationQuery orderByEscalationOptionsWarning($order = Criteria::ASC) Order by the escalation_options_warning column
 * @method     NagiosEscalationQuery orderByEscalationOptionsUnknown($order = Criteria::ASC) Order by the escalation_options_unknown column
 * @method     NagiosEscalationQuery orderByEscalationOptionsCritical($order = Criteria::ASC) Order by the escalation_options_critical column
 *
 * @method     NagiosEscalationQuery groupById() Group by the id column
 * @method     NagiosEscalationQuery groupByDescription() Group by the description column
 * @method     NagiosEscalationQuery groupByHostTemplate() Group by the host_template column
 * @method     NagiosEscalationQuery groupByHost() Group by the host column
 * @method     NagiosEscalationQuery groupByHostgroup() Group by the hostgroup column
 * @method     NagiosEscalationQuery groupByServiceTemplate() Group by the service_template column
 * @method     NagiosEscalationQuery groupByService() Group by the service column
 * @method     NagiosEscalationQuery groupByFirstNotification() Group by the first_notification column
 * @method     NagiosEscalationQuery groupByLastNotification() Group by the last_notification column
 * @method     NagiosEscalationQuery groupByNotificationInterval() Group by the notification_interval column
 * @method     NagiosEscalationQuery groupByEscalationPeriod() Group by the escalation_period column
 * @method     NagiosEscalationQuery groupByEscalationOptionsUp() Group by the escalation_options_up column
 * @method     NagiosEscalationQuery groupByEscalationOptionsDown() Group by the escalation_options_down column
 * @method     NagiosEscalationQuery groupByEscalationOptionsUnreachable() Group by the escalation_options_unreachable column
 * @method     NagiosEscalationQuery groupByEscalationOptionsOk() Group by the escalation_options_ok column
 * @method     NagiosEscalationQuery groupByEscalationOptionsWarning() Group by the escalation_options_warning column
 * @method     NagiosEscalationQuery groupByEscalationOptionsUnknown() Group by the escalation_options_unknown column
 * @method     NagiosEscalationQuery groupByEscalationOptionsCritical() Group by the escalation_options_critical column
 *
 * @method     NagiosEscalationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NagiosEscalationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NagiosEscalationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NagiosEscalationQuery leftJoinNagiosHostTemplate($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostTemplate relation
 * @method     NagiosEscalationQuery rightJoinNagiosHostTemplate($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostTemplate relation
 * @method     NagiosEscalationQuery innerJoinNagiosHostTemplate($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostTemplate relation
 *
 * @method     NagiosEscalationQuery leftJoinNagiosHost($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHost relation
 * @method     NagiosEscalationQuery rightJoinNagiosHost($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHost relation
 * @method     NagiosEscalationQuery innerJoinNagiosHost($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHost relation
 *
 * @method     NagiosEscalationQuery leftJoinNagiosServiceTemplate($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosServiceTemplate relation
 * @method     NagiosEscalationQuery rightJoinNagiosServiceTemplate($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosServiceTemplate relation
 * @method     NagiosEscalationQuery innerJoinNagiosServiceTemplate($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosServiceTemplate relation
 *
 * @method     NagiosEscalationQuery leftJoinNagiosService($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosService relation
 * @method     NagiosEscalationQuery rightJoinNagiosService($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosService relation
 * @method     NagiosEscalationQuery innerJoinNagiosService($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosService relation
 *
 * @method     NagiosEscalationQuery leftJoinNagiosHostgroup($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostgroup relation
 * @method     NagiosEscalationQuery rightJoinNagiosHostgroup($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostgroup relation
 * @method     NagiosEscalationQuery innerJoinNagiosHostgroup($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostgroup relation
 *
 * @method     NagiosEscalationQuery leftJoinNagiosTimeperiod($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosTimeperiod relation
 * @method     NagiosEscalationQuery rightJoinNagiosTimeperiod($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosTimeperiod relation
 * @method     NagiosEscalationQuery innerJoinNagiosTimeperiod($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosTimeperiod relation
 *
 * @method     NagiosEscalationQuery leftJoinNagiosEscalationContact($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosEscalationContact relation
 * @method     NagiosEscalationQuery rightJoinNagiosEscalationContact($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosEscalationContact relation
 * @method     NagiosEscalationQuery innerJoinNagiosEscalationContact($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosEscalationContact relation
 *
 * @method     NagiosEscalationQuery leftJoinNagiosEscalationContactgroup($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosEscalationContactgroup relation
 * @method     NagiosEscalationQuery rightJoinNagiosEscalationContactgroup($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosEscalationContactgroup relation
 * @method     NagiosEscalationQuery innerJoinNagiosEscalationContactgroup($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosEscalationContactgroup relation
 *
 * @method     NagiosEscalation findOne(PropelPDO $con = null) Return the first NagiosEscalation matching the query
 * @method     NagiosEscalation findOneOrCreate(PropelPDO $con = null) Return the first NagiosEscalation matching the query, or a new NagiosEscalation object populated from the query conditions when no match is found
 *
 * @method     NagiosEscalation findOneById(int $id) Return the first NagiosEscalation filtered by the id column
 * @method     NagiosEscalation findOneByDescription(string $description) Return the first NagiosEscalation filtered by the description column
 * @method     NagiosEscalation findOneByHostTemplate(int $host_template) Return the first NagiosEscalation filtered by the host_template column
 * @method     NagiosEscalation findOneByHost(int $host) Return the first NagiosEscalation filtered by the host column
 * @method     NagiosEscalation findOneByHostgroup(int $hostgroup) Return the first NagiosEscalation filtered by the hostgroup column
 * @method     NagiosEscalation findOneByServiceTemplate(int $service_template) Return the first NagiosEscalation filtered by the service_template column
 * @method     NagiosEscalation findOneByService(int $service) Return the first NagiosEscalation filtered by the service column
 * @method     NagiosEscalation findOneByFirstNotification(int $first_notification) Return the first NagiosEscalation filtered by the first_notification column
 * @method     NagiosEscalation findOneByLastNotification(int $last_notification) Return the first NagiosEscalation filtered by the last_notification column
 * @method     NagiosEscalation findOneByNotificationInterval(int $notification_interval) Return the first NagiosEscalation filtered by the notification_interval column
 * @method     NagiosEscalation findOneByEscalationPeriod(int $escalation_period) Return the first NagiosEscalation filtered by the escalation_period column
 * @method     NagiosEscalation findOneByEscalationOptionsUp(boolean $escalation_options_up) Return the first NagiosEscalation filtered by the escalation_options_up column
 * @method     NagiosEscalation findOneByEscalationOptionsDown(boolean $escalation_options_down) Return the first NagiosEscalation filtered by the escalation_options_down column
 * @method     NagiosEscalation findOneByEscalationOptionsUnreachable(boolean $escalation_options_unreachable) Return the first NagiosEscalation filtered by the escalation_options_unreachable column
 * @method     NagiosEscalation findOneByEscalationOptionsOk(boolean $escalation_options_ok) Return the first NagiosEscalation filtered by the escalation_options_ok column
 * @method     NagiosEscalation findOneByEscalationOptionsWarning(boolean $escalation_options_warning) Return the first NagiosEscalation filtered by the escalation_options_warning column
 * @method     NagiosEscalation findOneByEscalationOptionsUnknown(boolean $escalation_options_unknown) Return the first NagiosEscalation filtered by the escalation_options_unknown column
 * @method     NagiosEscalation findOneByEscalationOptionsCritical(boolean $escalation_options_critical) Return the first NagiosEscalation filtered by the escalation_options_critical column
 *
 * @method     array findById(int $id) Return NagiosEscalation objects filtered by the id column
 * @method     array findByDescription(string $description) Return NagiosEscalation objects filtered by the description column
 * @method     array findByHostTemplate(int $host_template) Return NagiosEscalation objects filtered by the host_template column
 * @method     array findByHost(int $host) Return NagiosEscalation objects filtered by the host column
 * @method     array findByHostgroup(int $hostgroup) Return NagiosEscalation objects filtered by the hostgroup column
 * @method     array findByServiceTemplate(int $service_template) Return NagiosEscalation objects filtered by the service_template column
 * @method     array findByService(int $service) Return NagiosEscalation objects filtered by the service column
 * @method     array findByFirstNotification(int $first_notification) Return NagiosEscalation objects filtered by the first_notification column
 * @method     array findByLastNotification(int $last_notification) Return NagiosEscalation objects filtered by the last_notification column
 * @method     array findByNotificationInterval(int $notification_interval) Return NagiosEscalation objects filtered by the notification_interval column
 * @method     array findByEscalationPeriod(int $escalation_period) Return NagiosEscalation objects filtered by the escalation_period column
 * @method     array findByEscalationOptionsUp(boolean $escalation_options_up) Return NagiosEscalation objects filtered by the escalation_options_up column
 * @method     array findByEscalationOptionsDown(boolean $escalation_options_down) Return NagiosEscalation objects filtered by the escalation_options_down column
 * @method     array findByEscalationOptionsUnreachable(boolean $escalation_options_unreachable) Return NagiosEscalation objects filtered by the escalation_options_unreachable column
 * @method     array findByEscalationOptionsOk(boolean $escalation_options_ok) Return NagiosEscalation objects filtered by the escalation_options_ok column
 * @method     array findByEscalationOptionsWarning(boolean $escalation_options_warning) Return NagiosEscalation objects filtered by the escalation_options_warning column
 * @method     array findByEscalationOptionsUnknown(boolean $escalation_options_unknown) Return NagiosEscalation objects filtered by the escalation_options_unknown column
 * @method     array findByEscalationOptionsCritical(boolean $escalation_options_critical) Return NagiosEscalation objects filtered by the escalation_options_critical column
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosEscalationQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNagiosEscalationQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'NagiosEscalation', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NagiosEscalationQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NagiosEscalationQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NagiosEscalationQuery) {
			return $criteria;
		}
		$query = new NagiosEscalationQuery();
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
	 * @return    NagiosEscalation|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NagiosEscalationPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    NagiosEscalationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NagiosEscalationPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NagiosEscalationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NagiosEscalationPeer::ID, $keys, Criteria::IN);
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
	 * @return    NagiosEscalationQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NagiosEscalationPeer::ID, $id, $comparison);
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
	 * @return    NagiosEscalationQuery The current query, for fluid interface
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
		return $this->addUsingAlias(NagiosEscalationPeer::DESCRIPTION, $description, $comparison);
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
	 * @return    NagiosEscalationQuery The current query, for fluid interface
	 */
	public function filterByHostTemplate($hostTemplate = null, $comparison = null)
	{
		if (is_array($hostTemplate)) {
			$useMinMax = false;
			if (isset($hostTemplate['min'])) {
				$this->addUsingAlias(NagiosEscalationPeer::HOST_TEMPLATE, $hostTemplate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($hostTemplate['max'])) {
				$this->addUsingAlias(NagiosEscalationPeer::HOST_TEMPLATE, $hostTemplate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosEscalationPeer::HOST_TEMPLATE, $hostTemplate, $comparison);
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
	 * @return    NagiosEscalationQuery The current query, for fluid interface
	 */
	public function filterByHost($host = null, $comparison = null)
	{
		if (is_array($host)) {
			$useMinMax = false;
			if (isset($host['min'])) {
				$this->addUsingAlias(NagiosEscalationPeer::HOST, $host['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($host['max'])) {
				$this->addUsingAlias(NagiosEscalationPeer::HOST, $host['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosEscalationPeer::HOST, $host, $comparison);
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
	 * @return    NagiosEscalationQuery The current query, for fluid interface
	 */
	public function filterByHostgroup($hostgroup = null, $comparison = null)
	{
		if (is_array($hostgroup)) {
			$useMinMax = false;
			if (isset($hostgroup['min'])) {
				$this->addUsingAlias(NagiosEscalationPeer::HOSTGROUP, $hostgroup['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($hostgroup['max'])) {
				$this->addUsingAlias(NagiosEscalationPeer::HOSTGROUP, $hostgroup['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosEscalationPeer::HOSTGROUP, $hostgroup, $comparison);
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
	 * @return    NagiosEscalationQuery The current query, for fluid interface
	 */
	public function filterByServiceTemplate($serviceTemplate = null, $comparison = null)
	{
		if (is_array($serviceTemplate)) {
			$useMinMax = false;
			if (isset($serviceTemplate['min'])) {
				$this->addUsingAlias(NagiosEscalationPeer::SERVICE_TEMPLATE, $serviceTemplate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($serviceTemplate['max'])) {
				$this->addUsingAlias(NagiosEscalationPeer::SERVICE_TEMPLATE, $serviceTemplate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosEscalationPeer::SERVICE_TEMPLATE, $serviceTemplate, $comparison);
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
	 * @return    NagiosEscalationQuery The current query, for fluid interface
	 */
	public function filterByService($service = null, $comparison = null)
	{
		if (is_array($service)) {
			$useMinMax = false;
			if (isset($service['min'])) {
				$this->addUsingAlias(NagiosEscalationPeer::SERVICE, $service['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($service['max'])) {
				$this->addUsingAlias(NagiosEscalationPeer::SERVICE, $service['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosEscalationPeer::SERVICE, $service, $comparison);
	}

	/**
	 * Filter the query on the first_notification column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByFirstNotification(1234); // WHERE first_notification = 1234
	 * $query->filterByFirstNotification(array(12, 34)); // WHERE first_notification IN (12, 34)
	 * $query->filterByFirstNotification(array('min' => 12)); // WHERE first_notification > 12
	 * </code>
	 *
	 * @param     mixed $firstNotification The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosEscalationQuery The current query, for fluid interface
	 */
	public function filterByFirstNotification($firstNotification = null, $comparison = null)
	{
		if (is_array($firstNotification)) {
			$useMinMax = false;
			if (isset($firstNotification['min'])) {
				$this->addUsingAlias(NagiosEscalationPeer::FIRST_NOTIFICATION, $firstNotification['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($firstNotification['max'])) {
				$this->addUsingAlias(NagiosEscalationPeer::FIRST_NOTIFICATION, $firstNotification['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosEscalationPeer::FIRST_NOTIFICATION, $firstNotification, $comparison);
	}

	/**
	 * Filter the query on the last_notification column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByLastNotification(1234); // WHERE last_notification = 1234
	 * $query->filterByLastNotification(array(12, 34)); // WHERE last_notification IN (12, 34)
	 * $query->filterByLastNotification(array('min' => 12)); // WHERE last_notification > 12
	 * </code>
	 *
	 * @param     mixed $lastNotification The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosEscalationQuery The current query, for fluid interface
	 */
	public function filterByLastNotification($lastNotification = null, $comparison = null)
	{
		if (is_array($lastNotification)) {
			$useMinMax = false;
			if (isset($lastNotification['min'])) {
				$this->addUsingAlias(NagiosEscalationPeer::LAST_NOTIFICATION, $lastNotification['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lastNotification['max'])) {
				$this->addUsingAlias(NagiosEscalationPeer::LAST_NOTIFICATION, $lastNotification['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosEscalationPeer::LAST_NOTIFICATION, $lastNotification, $comparison);
	}

	/**
	 * Filter the query on the notification_interval column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNotificationInterval(1234); // WHERE notification_interval = 1234
	 * $query->filterByNotificationInterval(array(12, 34)); // WHERE notification_interval IN (12, 34)
	 * $query->filterByNotificationInterval(array('min' => 12)); // WHERE notification_interval > 12
	 * </code>
	 *
	 * @param     mixed $notificationInterval The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosEscalationQuery The current query, for fluid interface
	 */
	public function filterByNotificationInterval($notificationInterval = null, $comparison = null)
	{
		if (is_array($notificationInterval)) {
			$useMinMax = false;
			if (isset($notificationInterval['min'])) {
				$this->addUsingAlias(NagiosEscalationPeer::NOTIFICATION_INTERVAL, $notificationInterval['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($notificationInterval['max'])) {
				$this->addUsingAlias(NagiosEscalationPeer::NOTIFICATION_INTERVAL, $notificationInterval['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosEscalationPeer::NOTIFICATION_INTERVAL, $notificationInterval, $comparison);
	}

	/**
	 * Filter the query on the escalation_period column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEscalationPeriod(1234); // WHERE escalation_period = 1234
	 * $query->filterByEscalationPeriod(array(12, 34)); // WHERE escalation_period IN (12, 34)
	 * $query->filterByEscalationPeriod(array('min' => 12)); // WHERE escalation_period > 12
	 * </code>
	 *
	 * @see       filterByNagiosTimeperiod()
	 *
	 * @param     mixed $escalationPeriod The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosEscalationQuery The current query, for fluid interface
	 */
	public function filterByEscalationPeriod($escalationPeriod = null, $comparison = null)
	{
		if (is_array($escalationPeriod)) {
			$useMinMax = false;
			if (isset($escalationPeriod['min'])) {
				$this->addUsingAlias(NagiosEscalationPeer::ESCALATION_PERIOD, $escalationPeriod['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($escalationPeriod['max'])) {
				$this->addUsingAlias(NagiosEscalationPeer::ESCALATION_PERIOD, $escalationPeriod['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosEscalationPeer::ESCALATION_PERIOD, $escalationPeriod, $comparison);
	}

	/**
	 * Filter the query on the escalation_options_up column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEscalationOptionsUp(true); // WHERE escalation_options_up = true
	 * $query->filterByEscalationOptionsUp('yes'); // WHERE escalation_options_up = true
	 * </code>
	 *
	 * @param     boolean|string $escalationOptionsUp The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosEscalationQuery The current query, for fluid interface
	 */
	public function filterByEscalationOptionsUp($escalationOptionsUp = null, $comparison = null)
	{
		if (is_string($escalationOptionsUp)) {
			$escalation_options_up = in_array(strtolower($escalationOptionsUp), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosEscalationPeer::ESCALATION_OPTIONS_UP, $escalationOptionsUp, $comparison);
	}

	/**
	 * Filter the query on the escalation_options_down column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEscalationOptionsDown(true); // WHERE escalation_options_down = true
	 * $query->filterByEscalationOptionsDown('yes'); // WHERE escalation_options_down = true
	 * </code>
	 *
	 * @param     boolean|string $escalationOptionsDown The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosEscalationQuery The current query, for fluid interface
	 */
	public function filterByEscalationOptionsDown($escalationOptionsDown = null, $comparison = null)
	{
		if (is_string($escalationOptionsDown)) {
			$escalation_options_down = in_array(strtolower($escalationOptionsDown), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosEscalationPeer::ESCALATION_OPTIONS_DOWN, $escalationOptionsDown, $comparison);
	}

	/**
	 * Filter the query on the escalation_options_unreachable column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEscalationOptionsUnreachable(true); // WHERE escalation_options_unreachable = true
	 * $query->filterByEscalationOptionsUnreachable('yes'); // WHERE escalation_options_unreachable = true
	 * </code>
	 *
	 * @param     boolean|string $escalationOptionsUnreachable The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosEscalationQuery The current query, for fluid interface
	 */
	public function filterByEscalationOptionsUnreachable($escalationOptionsUnreachable = null, $comparison = null)
	{
		if (is_string($escalationOptionsUnreachable)) {
			$escalation_options_unreachable = in_array(strtolower($escalationOptionsUnreachable), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosEscalationPeer::ESCALATION_OPTIONS_UNREACHABLE, $escalationOptionsUnreachable, $comparison);
	}

	/**
	 * Filter the query on the escalation_options_ok column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEscalationOptionsOk(true); // WHERE escalation_options_ok = true
	 * $query->filterByEscalationOptionsOk('yes'); // WHERE escalation_options_ok = true
	 * </code>
	 *
	 * @param     boolean|string $escalationOptionsOk The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosEscalationQuery The current query, for fluid interface
	 */
	public function filterByEscalationOptionsOk($escalationOptionsOk = null, $comparison = null)
	{
		if (is_string($escalationOptionsOk)) {
			$escalation_options_ok = in_array(strtolower($escalationOptionsOk), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosEscalationPeer::ESCALATION_OPTIONS_OK, $escalationOptionsOk, $comparison);
	}

	/**
	 * Filter the query on the escalation_options_warning column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEscalationOptionsWarning(true); // WHERE escalation_options_warning = true
	 * $query->filterByEscalationOptionsWarning('yes'); // WHERE escalation_options_warning = true
	 * </code>
	 *
	 * @param     boolean|string $escalationOptionsWarning The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosEscalationQuery The current query, for fluid interface
	 */
	public function filterByEscalationOptionsWarning($escalationOptionsWarning = null, $comparison = null)
	{
		if (is_string($escalationOptionsWarning)) {
			$escalation_options_warning = in_array(strtolower($escalationOptionsWarning), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosEscalationPeer::ESCALATION_OPTIONS_WARNING, $escalationOptionsWarning, $comparison);
	}

	/**
	 * Filter the query on the escalation_options_unknown column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEscalationOptionsUnknown(true); // WHERE escalation_options_unknown = true
	 * $query->filterByEscalationOptionsUnknown('yes'); // WHERE escalation_options_unknown = true
	 * </code>
	 *
	 * @param     boolean|string $escalationOptionsUnknown The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosEscalationQuery The current query, for fluid interface
	 */
	public function filterByEscalationOptionsUnknown($escalationOptionsUnknown = null, $comparison = null)
	{
		if (is_string($escalationOptionsUnknown)) {
			$escalation_options_unknown = in_array(strtolower($escalationOptionsUnknown), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosEscalationPeer::ESCALATION_OPTIONS_UNKNOWN, $escalationOptionsUnknown, $comparison);
	}

	/**
	 * Filter the query on the escalation_options_critical column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEscalationOptionsCritical(true); // WHERE escalation_options_critical = true
	 * $query->filterByEscalationOptionsCritical('yes'); // WHERE escalation_options_critical = true
	 * </code>
	 *
	 * @param     boolean|string $escalationOptionsCritical The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosEscalationQuery The current query, for fluid interface
	 */
	public function filterByEscalationOptionsCritical($escalationOptionsCritical = null, $comparison = null)
	{
		if (is_string($escalationOptionsCritical)) {
			$escalation_options_critical = in_array(strtolower($escalationOptionsCritical), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosEscalationPeer::ESCALATION_OPTIONS_CRITICAL, $escalationOptionsCritical, $comparison);
	}

	/**
	 * Filter the query by a related NagiosHostTemplate object
	 *
	 * @param     NagiosHostTemplate|PropelCollection $nagiosHostTemplate The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosEscalationQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostTemplate($nagiosHostTemplate, $comparison = null)
	{
		if ($nagiosHostTemplate instanceof NagiosHostTemplate) {
			return $this
				->addUsingAlias(NagiosEscalationPeer::HOST_TEMPLATE, $nagiosHostTemplate->getId(), $comparison);
		} elseif ($nagiosHostTemplate instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosEscalationPeer::HOST_TEMPLATE, $nagiosHostTemplate->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosEscalationQuery The current query, for fluid interface
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
	 * @return    NagiosEscalationQuery The current query, for fluid interface
	 */
	public function filterByNagiosHost($nagiosHost, $comparison = null)
	{
		if ($nagiosHost instanceof NagiosHost) {
			return $this
				->addUsingAlias(NagiosEscalationPeer::HOST, $nagiosHost->getId(), $comparison);
		} elseif ($nagiosHost instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosEscalationPeer::HOST, $nagiosHost->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosEscalationQuery The current query, for fluid interface
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
	 * @return    NagiosEscalationQuery The current query, for fluid interface
	 */
	public function filterByNagiosServiceTemplate($nagiosServiceTemplate, $comparison = null)
	{
		if ($nagiosServiceTemplate instanceof NagiosServiceTemplate) {
			return $this
				->addUsingAlias(NagiosEscalationPeer::SERVICE_TEMPLATE, $nagiosServiceTemplate->getId(), $comparison);
		} elseif ($nagiosServiceTemplate instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosEscalationPeer::SERVICE_TEMPLATE, $nagiosServiceTemplate->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosEscalationQuery The current query, for fluid interface
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
	 * @return    NagiosEscalationQuery The current query, for fluid interface
	 */
	public function filterByNagiosService($nagiosService, $comparison = null)
	{
		if ($nagiosService instanceof NagiosService) {
			return $this
				->addUsingAlias(NagiosEscalationPeer::SERVICE, $nagiosService->getId(), $comparison);
		} elseif ($nagiosService instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosEscalationPeer::SERVICE, $nagiosService->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosEscalationQuery The current query, for fluid interface
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
	 * @return    NagiosEscalationQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostgroup($nagiosHostgroup, $comparison = null)
	{
		if ($nagiosHostgroup instanceof NagiosHostgroup) {
			return $this
				->addUsingAlias(NagiosEscalationPeer::HOSTGROUP, $nagiosHostgroup->getId(), $comparison);
		} elseif ($nagiosHostgroup instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosEscalationPeer::HOSTGROUP, $nagiosHostgroup->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosEscalationQuery The current query, for fluid interface
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
	 * @return    NagiosEscalationQuery The current query, for fluid interface
	 */
	public function filterByNagiosTimeperiod($nagiosTimeperiod, $comparison = null)
	{
		if ($nagiosTimeperiod instanceof NagiosTimeperiod) {
			return $this
				->addUsingAlias(NagiosEscalationPeer::ESCALATION_PERIOD, $nagiosTimeperiod->getId(), $comparison);
		} elseif ($nagiosTimeperiod instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosEscalationPeer::ESCALATION_PERIOD, $nagiosTimeperiod->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosEscalationQuery The current query, for fluid interface
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
	 * Filter the query by a related NagiosEscalationContact object
	 *
	 * @param     NagiosEscalationContact $nagiosEscalationContact  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosEscalationQuery The current query, for fluid interface
	 */
	public function filterByNagiosEscalationContact($nagiosEscalationContact, $comparison = null)
	{
		if ($nagiosEscalationContact instanceof NagiosEscalationContact) {
			return $this
				->addUsingAlias(NagiosEscalationPeer::ID, $nagiosEscalationContact->getEscalation(), $comparison);
		} elseif ($nagiosEscalationContact instanceof PropelCollection) {
			return $this
				->useNagiosEscalationContactQuery()
					->filterByPrimaryKeys($nagiosEscalationContact->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosEscalationContact() only accepts arguments of type NagiosEscalationContact or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosEscalationContact relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosEscalationQuery The current query, for fluid interface
	 */
	public function joinNagiosEscalationContact($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosEscalationContact');
		
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
			$this->addJoinObject($join, 'NagiosEscalationContact');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosEscalationContact relation NagiosEscalationContact object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosEscalationContactQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosEscalationContactQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinNagiosEscalationContact($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosEscalationContact', 'NagiosEscalationContactQuery');
	}

	/**
	 * Filter the query by a related NagiosEscalationContactgroup object
	 *
	 * @param     NagiosEscalationContactgroup $nagiosEscalationContactgroup  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosEscalationQuery The current query, for fluid interface
	 */
	public function filterByNagiosEscalationContactgroup($nagiosEscalationContactgroup, $comparison = null)
	{
		if ($nagiosEscalationContactgroup instanceof NagiosEscalationContactgroup) {
			return $this
				->addUsingAlias(NagiosEscalationPeer::ID, $nagiosEscalationContactgroup->getEscalation(), $comparison);
		} elseif ($nagiosEscalationContactgroup instanceof PropelCollection) {
			return $this
				->useNagiosEscalationContactgroupQuery()
					->filterByPrimaryKeys($nagiosEscalationContactgroup->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosEscalationContactgroup() only accepts arguments of type NagiosEscalationContactgroup or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosEscalationContactgroup relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosEscalationQuery The current query, for fluid interface
	 */
	public function joinNagiosEscalationContactgroup($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosEscalationContactgroup');
		
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
			$this->addJoinObject($join, 'NagiosEscalationContactgroup');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosEscalationContactgroup relation NagiosEscalationContactgroup object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosEscalationContactgroupQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosEscalationContactgroupQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinNagiosEscalationContactgroup($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosEscalationContactgroup', 'NagiosEscalationContactgroupQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     NagiosEscalation $nagiosEscalation Object to remove from the list of results
	 *
	 * @return    NagiosEscalationQuery The current query, for fluid interface
	 */
	public function prune($nagiosEscalation = null)
	{
		if ($nagiosEscalation) {
			$this->addUsingAlias(NagiosEscalationPeer::ID, $nagiosEscalation->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseNagiosEscalationQuery
