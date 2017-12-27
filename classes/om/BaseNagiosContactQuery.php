<?php


/**
 * Base class that represents a query for the 'nagios_contact' table.
 *
 * Nagios Contact
 *
 * @method     NagiosContactQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NagiosContactQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     NagiosContactQuery orderByAlias($order = Criteria::ASC) Order by the alias column
 * @method     NagiosContactQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     NagiosContactQuery orderByPager($order = Criteria::ASC) Order by the pager column
 * @method     NagiosContactQuery orderByHostNotificationsEnabled($order = Criteria::ASC) Order by the host_notifications_enabled column
 * @method     NagiosContactQuery orderByServiceNotificationsEnabled($order = Criteria::ASC) Order by the service_notifications_enabled column
 * @method     NagiosContactQuery orderByHostNotificationPeriod($order = Criteria::ASC) Order by the host_notification_period column
 * @method     NagiosContactQuery orderByServiceNotificationPeriod($order = Criteria::ASC) Order by the service_notification_period column
 * @method     NagiosContactQuery orderByHostNotificationOnDown($order = Criteria::ASC) Order by the host_notification_on_down column
 * @method     NagiosContactQuery orderByHostNotificationOnUnreachable($order = Criteria::ASC) Order by the host_notification_on_unreachable column
 * @method     NagiosContactQuery orderByHostNotificationOnRecovery($order = Criteria::ASC) Order by the host_notification_on_recovery column
 * @method     NagiosContactQuery orderByHostNotificationOnFlapping($order = Criteria::ASC) Order by the host_notification_on_flapping column
 * @method     NagiosContactQuery orderByHostNotificationOnScheduledDowntime($order = Criteria::ASC) Order by the host_notification_on_scheduled_downtime column
 * @method     NagiosContactQuery orderByServiceNotificationOnWarning($order = Criteria::ASC) Order by the service_notification_on_warning column
 * @method     NagiosContactQuery orderByServiceNotificationOnUnknown($order = Criteria::ASC) Order by the service_notification_on_unknown column
 * @method     NagiosContactQuery orderByServiceNotificationOnCritical($order = Criteria::ASC) Order by the service_notification_on_critical column
 * @method     NagiosContactQuery orderByServiceNotificationOnRecovery($order = Criteria::ASC) Order by the service_notification_on_recovery column
 * @method     NagiosContactQuery orderByServiceNotificationOnFlapping($order = Criteria::ASC) Order by the service_notification_on_flapping column
 * @method     NagiosContactQuery orderByCanSubmitCommands($order = Criteria::ASC) Order by the can_submit_commands column
 * @method     NagiosContactQuery orderByRetainStatusInformation($order = Criteria::ASC) Order by the retain_status_information column
 * @method     NagiosContactQuery orderByRetainNonstatusInformation($order = Criteria::ASC) Order by the retain_nonstatus_information column
 *
 * @method     NagiosContactQuery groupById() Group by the id column
 * @method     NagiosContactQuery groupByName() Group by the name column
 * @method     NagiosContactQuery groupByAlias() Group by the alias column
 * @method     NagiosContactQuery groupByEmail() Group by the email column
 * @method     NagiosContactQuery groupByPager() Group by the pager column
 * @method     NagiosContactQuery groupByHostNotificationsEnabled() Group by the host_notifications_enabled column
 * @method     NagiosContactQuery groupByServiceNotificationsEnabled() Group by the service_notifications_enabled column
 * @method     NagiosContactQuery groupByHostNotificationPeriod() Group by the host_notification_period column
 * @method     NagiosContactQuery groupByServiceNotificationPeriod() Group by the service_notification_period column
 * @method     NagiosContactQuery groupByHostNotificationOnDown() Group by the host_notification_on_down column
 * @method     NagiosContactQuery groupByHostNotificationOnUnreachable() Group by the host_notification_on_unreachable column
 * @method     NagiosContactQuery groupByHostNotificationOnRecovery() Group by the host_notification_on_recovery column
 * @method     NagiosContactQuery groupByHostNotificationOnFlapping() Group by the host_notification_on_flapping column
 * @method     NagiosContactQuery groupByHostNotificationOnScheduledDowntime() Group by the host_notification_on_scheduled_downtime column
 * @method     NagiosContactQuery groupByServiceNotificationOnWarning() Group by the service_notification_on_warning column
 * @method     NagiosContactQuery groupByServiceNotificationOnUnknown() Group by the service_notification_on_unknown column
 * @method     NagiosContactQuery groupByServiceNotificationOnCritical() Group by the service_notification_on_critical column
 * @method     NagiosContactQuery groupByServiceNotificationOnRecovery() Group by the service_notification_on_recovery column
 * @method     NagiosContactQuery groupByServiceNotificationOnFlapping() Group by the service_notification_on_flapping column
 * @method     NagiosContactQuery groupByCanSubmitCommands() Group by the can_submit_commands column
 * @method     NagiosContactQuery groupByRetainStatusInformation() Group by the retain_status_information column
 * @method     NagiosContactQuery groupByRetainNonstatusInformation() Group by the retain_nonstatus_information column
 *
 * @method     NagiosContactQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NagiosContactQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NagiosContactQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NagiosContactQuery leftJoinNagiosTimeperiodRelatedByHostNotificationPeriod($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosTimeperiodRelatedByHostNotificationPeriod relation
 * @method     NagiosContactQuery rightJoinNagiosTimeperiodRelatedByHostNotificationPeriod($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosTimeperiodRelatedByHostNotificationPeriod relation
 * @method     NagiosContactQuery innerJoinNagiosTimeperiodRelatedByHostNotificationPeriod($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosTimeperiodRelatedByHostNotificationPeriod relation
 *
 * @method     NagiosContactQuery leftJoinNagiosTimeperiodRelatedByServiceNotificationPeriod($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosTimeperiodRelatedByServiceNotificationPeriod relation
 * @method     NagiosContactQuery rightJoinNagiosTimeperiodRelatedByServiceNotificationPeriod($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosTimeperiodRelatedByServiceNotificationPeriod relation
 * @method     NagiosContactQuery innerJoinNagiosTimeperiodRelatedByServiceNotificationPeriod($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosTimeperiodRelatedByServiceNotificationPeriod relation
 *
 * @method     NagiosContactQuery leftJoinNagiosContactAddress($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosContactAddress relation
 * @method     NagiosContactQuery rightJoinNagiosContactAddress($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosContactAddress relation
 * @method     NagiosContactQuery innerJoinNagiosContactAddress($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosContactAddress relation
 *
 * @method     NagiosContactQuery leftJoinNagiosContactGroupMember($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosContactGroupMember relation
 * @method     NagiosContactQuery rightJoinNagiosContactGroupMember($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosContactGroupMember relation
 * @method     NagiosContactQuery innerJoinNagiosContactGroupMember($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosContactGroupMember relation
 *
 * @method     NagiosContactQuery leftJoinNagiosContactNotificationCommand($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosContactNotificationCommand relation
 * @method     NagiosContactQuery rightJoinNagiosContactNotificationCommand($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosContactNotificationCommand relation
 * @method     NagiosContactQuery innerJoinNagiosContactNotificationCommand($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosContactNotificationCommand relation
 *
 * @method     NagiosContactQuery leftJoinNagiosHostContactMember($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostContactMember relation
 * @method     NagiosContactQuery rightJoinNagiosHostContactMember($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostContactMember relation
 * @method     NagiosContactQuery innerJoinNagiosHostContactMember($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostContactMember relation
 *
 * @method     NagiosContactQuery leftJoinNagiosServiceContactMember($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosServiceContactMember relation
 * @method     NagiosContactQuery rightJoinNagiosServiceContactMember($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosServiceContactMember relation
 * @method     NagiosContactQuery innerJoinNagiosServiceContactMember($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosServiceContactMember relation
 *
 * @method     NagiosContactQuery leftJoinNagiosEscalationContact($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosEscalationContact relation
 * @method     NagiosContactQuery rightJoinNagiosEscalationContact($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosEscalationContact relation
 * @method     NagiosContactQuery innerJoinNagiosEscalationContact($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosEscalationContact relation
 *
 * @method     NagiosContactQuery leftJoinNagiosContactCustomObjectVar($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosContactCustomObjectVar relation
 * @method     NagiosContactQuery rightJoinNagiosContactCustomObjectVar($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosContactCustomObjectVar relation
 * @method     NagiosContactQuery innerJoinNagiosContactCustomObjectVar($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosContactCustomObjectVar relation
 *
 * @method     NagiosContact findOne(PropelPDO $con = null) Return the first NagiosContact matching the query
 * @method     NagiosContact findOneOrCreate(PropelPDO $con = null) Return the first NagiosContact matching the query, or a new NagiosContact object populated from the query conditions when no match is found
 *
 * @method     NagiosContact findOneById(int $id) Return the first NagiosContact filtered by the id column
 * @method     NagiosContact findOneByName(string $name) Return the first NagiosContact filtered by the name column
 * @method     NagiosContact findOneByAlias(string $alias) Return the first NagiosContact filtered by the alias column
 * @method     NagiosContact findOneByEmail(string $email) Return the first NagiosContact filtered by the email column
 * @method     NagiosContact findOneByPager(string $pager) Return the first NagiosContact filtered by the pager column
 * @method     NagiosContact findOneByHostNotificationsEnabled(boolean $host_notifications_enabled) Return the first NagiosContact filtered by the host_notifications_enabled column
 * @method     NagiosContact findOneByServiceNotificationsEnabled(boolean $service_notifications_enabled) Return the first NagiosContact filtered by the service_notifications_enabled column
 * @method     NagiosContact findOneByHostNotificationPeriod(int $host_notification_period) Return the first NagiosContact filtered by the host_notification_period column
 * @method     NagiosContact findOneByServiceNotificationPeriod(int $service_notification_period) Return the first NagiosContact filtered by the service_notification_period column
 * @method     NagiosContact findOneByHostNotificationOnDown(boolean $host_notification_on_down) Return the first NagiosContact filtered by the host_notification_on_down column
 * @method     NagiosContact findOneByHostNotificationOnUnreachable(boolean $host_notification_on_unreachable) Return the first NagiosContact filtered by the host_notification_on_unreachable column
 * @method     NagiosContact findOneByHostNotificationOnRecovery(boolean $host_notification_on_recovery) Return the first NagiosContact filtered by the host_notification_on_recovery column
 * @method     NagiosContact findOneByHostNotificationOnFlapping(boolean $host_notification_on_flapping) Return the first NagiosContact filtered by the host_notification_on_flapping column
 * @method     NagiosContact findOneByHostNotificationOnScheduledDowntime(boolean $host_notification_on_scheduled_downtime) Return the first NagiosContact filtered by the host_notification_on_scheduled_downtime column
 * @method     NagiosContact findOneByServiceNotificationOnWarning(boolean $service_notification_on_warning) Return the first NagiosContact filtered by the service_notification_on_warning column
 * @method     NagiosContact findOneByServiceNotificationOnUnknown(boolean $service_notification_on_unknown) Return the first NagiosContact filtered by the service_notification_on_unknown column
 * @method     NagiosContact findOneByServiceNotificationOnCritical(boolean $service_notification_on_critical) Return the first NagiosContact filtered by the service_notification_on_critical column
 * @method     NagiosContact findOneByServiceNotificationOnRecovery(boolean $service_notification_on_recovery) Return the first NagiosContact filtered by the service_notification_on_recovery column
 * @method     NagiosContact findOneByServiceNotificationOnFlapping(boolean $service_notification_on_flapping) Return the first NagiosContact filtered by the service_notification_on_flapping column
 * @method     NagiosContact findOneByCanSubmitCommands(boolean $can_submit_commands) Return the first NagiosContact filtered by the can_submit_commands column
 * @method     NagiosContact findOneByRetainStatusInformation(boolean $retain_status_information) Return the first NagiosContact filtered by the retain_status_information column
 * @method     NagiosContact findOneByRetainNonstatusInformation(boolean $retain_nonstatus_information) Return the first NagiosContact filtered by the retain_nonstatus_information column
 *
 * @method     array findById(int $id) Return NagiosContact objects filtered by the id column
 * @method     array findByName(string $name) Return NagiosContact objects filtered by the name column
 * @method     array findByAlias(string $alias) Return NagiosContact objects filtered by the alias column
 * @method     array findByEmail(string $email) Return NagiosContact objects filtered by the email column
 * @method     array findByPager(string $pager) Return NagiosContact objects filtered by the pager column
 * @method     array findByHostNotificationsEnabled(boolean $host_notifications_enabled) Return NagiosContact objects filtered by the host_notifications_enabled column
 * @method     array findByServiceNotificationsEnabled(boolean $service_notifications_enabled) Return NagiosContact objects filtered by the service_notifications_enabled column
 * @method     array findByHostNotificationPeriod(int $host_notification_period) Return NagiosContact objects filtered by the host_notification_period column
 * @method     array findByServiceNotificationPeriod(int $service_notification_period) Return NagiosContact objects filtered by the service_notification_period column
 * @method     array findByHostNotificationOnDown(boolean $host_notification_on_down) Return NagiosContact objects filtered by the host_notification_on_down column
 * @method     array findByHostNotificationOnUnreachable(boolean $host_notification_on_unreachable) Return NagiosContact objects filtered by the host_notification_on_unreachable column
 * @method     array findByHostNotificationOnRecovery(boolean $host_notification_on_recovery) Return NagiosContact objects filtered by the host_notification_on_recovery column
 * @method     array findByHostNotificationOnFlapping(boolean $host_notification_on_flapping) Return NagiosContact objects filtered by the host_notification_on_flapping column
 * @method     array findByHostNotificationOnScheduledDowntime(boolean $host_notification_on_scheduled_downtime) Return NagiosContact objects filtered by the host_notification_on_scheduled_downtime column
 * @method     array findByServiceNotificationOnWarning(boolean $service_notification_on_warning) Return NagiosContact objects filtered by the service_notification_on_warning column
 * @method     array findByServiceNotificationOnUnknown(boolean $service_notification_on_unknown) Return NagiosContact objects filtered by the service_notification_on_unknown column
 * @method     array findByServiceNotificationOnCritical(boolean $service_notification_on_critical) Return NagiosContact objects filtered by the service_notification_on_critical column
 * @method     array findByServiceNotificationOnRecovery(boolean $service_notification_on_recovery) Return NagiosContact objects filtered by the service_notification_on_recovery column
 * @method     array findByServiceNotificationOnFlapping(boolean $service_notification_on_flapping) Return NagiosContact objects filtered by the service_notification_on_flapping column
 * @method     array findByCanSubmitCommands(boolean $can_submit_commands) Return NagiosContact objects filtered by the can_submit_commands column
 * @method     array findByRetainStatusInformation(boolean $retain_status_information) Return NagiosContact objects filtered by the retain_status_information column
 * @method     array findByRetainNonstatusInformation(boolean $retain_nonstatus_information) Return NagiosContact objects filtered by the retain_nonstatus_information column
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosContactQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNagiosContactQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'NagiosContact', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NagiosContactQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NagiosContactQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NagiosContactQuery) {
			return $criteria;
		}
		$query = new NagiosContactQuery();
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
	 * @return    NagiosContact|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NagiosContactPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NagiosContactPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NagiosContactPeer::ID, $keys, Criteria::IN);
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
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NagiosContactPeer::ID, $id, $comparison);
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
	 * @return    NagiosContactQuery The current query, for fluid interface
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
		return $this->addUsingAlias(NagiosContactPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the alias column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByAlias('fooValue');   // WHERE alias = 'fooValue'
	 * $query->filterByAlias('%fooValue%'); // WHERE alias LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $alias The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterByAlias($alias = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($alias)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $alias)) {
				$alias = str_replace('*', '%', $alias);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosContactPeer::ALIAS, $alias, $comparison);
	}

	/**
	 * Filter the query on the email column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
	 * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $email The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterByEmail($email = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($email)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $email)) {
				$email = str_replace('*', '%', $email);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosContactPeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query on the pager column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByPager('fooValue');   // WHERE pager = 'fooValue'
	 * $query->filterByPager('%fooValue%'); // WHERE pager LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $pager The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterByPager($pager = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($pager)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $pager)) {
				$pager = str_replace('*', '%', $pager);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosContactPeer::PAGER, $pager, $comparison);
	}

	/**
	 * Filter the query on the host_notifications_enabled column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByHostNotificationsEnabled(true); // WHERE host_notifications_enabled = true
	 * $query->filterByHostNotificationsEnabled('yes'); // WHERE host_notifications_enabled = true
	 * </code>
	 *
	 * @param     boolean|string $hostNotificationsEnabled The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterByHostNotificationsEnabled($hostNotificationsEnabled = null, $comparison = null)
	{
		if (is_string($hostNotificationsEnabled)) {
			$host_notifications_enabled = in_array(strtolower($hostNotificationsEnabled), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosContactPeer::HOST_NOTIFICATIONS_ENABLED, $hostNotificationsEnabled, $comparison);
	}

	/**
	 * Filter the query on the service_notifications_enabled column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByServiceNotificationsEnabled(true); // WHERE service_notifications_enabled = true
	 * $query->filterByServiceNotificationsEnabled('yes'); // WHERE service_notifications_enabled = true
	 * </code>
	 *
	 * @param     boolean|string $serviceNotificationsEnabled The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterByServiceNotificationsEnabled($serviceNotificationsEnabled = null, $comparison = null)
	{
		if (is_string($serviceNotificationsEnabled)) {
			$service_notifications_enabled = in_array(strtolower($serviceNotificationsEnabled), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosContactPeer::SERVICE_NOTIFICATIONS_ENABLED, $serviceNotificationsEnabled, $comparison);
	}

	/**
	 * Filter the query on the host_notification_period column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByHostNotificationPeriod(1234); // WHERE host_notification_period = 1234
	 * $query->filterByHostNotificationPeriod(array(12, 34)); // WHERE host_notification_period IN (12, 34)
	 * $query->filterByHostNotificationPeriod(array('min' => 12)); // WHERE host_notification_period > 12
	 * </code>
	 *
	 * @see       filterByNagiosTimeperiodRelatedByHostNotificationPeriod()
	 *
	 * @param     mixed $hostNotificationPeriod The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterByHostNotificationPeriod($hostNotificationPeriod = null, $comparison = null)
	{
		if (is_array($hostNotificationPeriod)) {
			$useMinMax = false;
			if (isset($hostNotificationPeriod['min'])) {
				$this->addUsingAlias(NagiosContactPeer::HOST_NOTIFICATION_PERIOD, $hostNotificationPeriod['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($hostNotificationPeriod['max'])) {
				$this->addUsingAlias(NagiosContactPeer::HOST_NOTIFICATION_PERIOD, $hostNotificationPeriod['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosContactPeer::HOST_NOTIFICATION_PERIOD, $hostNotificationPeriod, $comparison);
	}

	/**
	 * Filter the query on the service_notification_period column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByServiceNotificationPeriod(1234); // WHERE service_notification_period = 1234
	 * $query->filterByServiceNotificationPeriod(array(12, 34)); // WHERE service_notification_period IN (12, 34)
	 * $query->filterByServiceNotificationPeriod(array('min' => 12)); // WHERE service_notification_period > 12
	 * </code>
	 *
	 * @see       filterByNagiosTimeperiodRelatedByServiceNotificationPeriod()
	 *
	 * @param     mixed $serviceNotificationPeriod The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterByServiceNotificationPeriod($serviceNotificationPeriod = null, $comparison = null)
	{
		if (is_array($serviceNotificationPeriod)) {
			$useMinMax = false;
			if (isset($serviceNotificationPeriod['min'])) {
				$this->addUsingAlias(NagiosContactPeer::SERVICE_NOTIFICATION_PERIOD, $serviceNotificationPeriod['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($serviceNotificationPeriod['max'])) {
				$this->addUsingAlias(NagiosContactPeer::SERVICE_NOTIFICATION_PERIOD, $serviceNotificationPeriod['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosContactPeer::SERVICE_NOTIFICATION_PERIOD, $serviceNotificationPeriod, $comparison);
	}

	/**
	 * Filter the query on the host_notification_on_down column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByHostNotificationOnDown(true); // WHERE host_notification_on_down = true
	 * $query->filterByHostNotificationOnDown('yes'); // WHERE host_notification_on_down = true
	 * </code>
	 *
	 * @param     boolean|string $hostNotificationOnDown The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterByHostNotificationOnDown($hostNotificationOnDown = null, $comparison = null)
	{
		if (is_string($hostNotificationOnDown)) {
			$host_notification_on_down = in_array(strtolower($hostNotificationOnDown), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosContactPeer::HOST_NOTIFICATION_ON_DOWN, $hostNotificationOnDown, $comparison);
	}

	/**
	 * Filter the query on the host_notification_on_unreachable column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByHostNotificationOnUnreachable(true); // WHERE host_notification_on_unreachable = true
	 * $query->filterByHostNotificationOnUnreachable('yes'); // WHERE host_notification_on_unreachable = true
	 * </code>
	 *
	 * @param     boolean|string $hostNotificationOnUnreachable The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterByHostNotificationOnUnreachable($hostNotificationOnUnreachable = null, $comparison = null)
	{
		if (is_string($hostNotificationOnUnreachable)) {
			$host_notification_on_unreachable = in_array(strtolower($hostNotificationOnUnreachable), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosContactPeer::HOST_NOTIFICATION_ON_UNREACHABLE, $hostNotificationOnUnreachable, $comparison);
	}

	/**
	 * Filter the query on the host_notification_on_recovery column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByHostNotificationOnRecovery(true); // WHERE host_notification_on_recovery = true
	 * $query->filterByHostNotificationOnRecovery('yes'); // WHERE host_notification_on_recovery = true
	 * </code>
	 *
	 * @param     boolean|string $hostNotificationOnRecovery The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterByHostNotificationOnRecovery($hostNotificationOnRecovery = null, $comparison = null)
	{
		if (is_string($hostNotificationOnRecovery)) {
			$host_notification_on_recovery = in_array(strtolower($hostNotificationOnRecovery), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosContactPeer::HOST_NOTIFICATION_ON_RECOVERY, $hostNotificationOnRecovery, $comparison);
	}

	/**
	 * Filter the query on the host_notification_on_flapping column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByHostNotificationOnFlapping(true); // WHERE host_notification_on_flapping = true
	 * $query->filterByHostNotificationOnFlapping('yes'); // WHERE host_notification_on_flapping = true
	 * </code>
	 *
	 * @param     boolean|string $hostNotificationOnFlapping The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterByHostNotificationOnFlapping($hostNotificationOnFlapping = null, $comparison = null)
	{
		if (is_string($hostNotificationOnFlapping)) {
			$host_notification_on_flapping = in_array(strtolower($hostNotificationOnFlapping), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosContactPeer::HOST_NOTIFICATION_ON_FLAPPING, $hostNotificationOnFlapping, $comparison);
	}

	/**
	 * Filter the query on the host_notification_on_scheduled_downtime column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByHostNotificationOnScheduledDowntime(true); // WHERE host_notification_on_scheduled_downtime = true
	 * $query->filterByHostNotificationOnScheduledDowntime('yes'); // WHERE host_notification_on_scheduled_downtime = true
	 * </code>
	 *
	 * @param     boolean|string $hostNotificationOnScheduledDowntime The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterByHostNotificationOnScheduledDowntime($hostNotificationOnScheduledDowntime = null, $comparison = null)
	{
		if (is_string($hostNotificationOnScheduledDowntime)) {
			$host_notification_on_scheduled_downtime = in_array(strtolower($hostNotificationOnScheduledDowntime), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosContactPeer::HOST_NOTIFICATION_ON_SCHEDULED_DOWNTIME, $hostNotificationOnScheduledDowntime, $comparison);
	}

	/**
	 * Filter the query on the service_notification_on_warning column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByServiceNotificationOnWarning(true); // WHERE service_notification_on_warning = true
	 * $query->filterByServiceNotificationOnWarning('yes'); // WHERE service_notification_on_warning = true
	 * </code>
	 *
	 * @param     boolean|string $serviceNotificationOnWarning The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterByServiceNotificationOnWarning($serviceNotificationOnWarning = null, $comparison = null)
	{
		if (is_string($serviceNotificationOnWarning)) {
			$service_notification_on_warning = in_array(strtolower($serviceNotificationOnWarning), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosContactPeer::SERVICE_NOTIFICATION_ON_WARNING, $serviceNotificationOnWarning, $comparison);
	}

	/**
	 * Filter the query on the service_notification_on_unknown column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByServiceNotificationOnUnknown(true); // WHERE service_notification_on_unknown = true
	 * $query->filterByServiceNotificationOnUnknown('yes'); // WHERE service_notification_on_unknown = true
	 * </code>
	 *
	 * @param     boolean|string $serviceNotificationOnUnknown The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterByServiceNotificationOnUnknown($serviceNotificationOnUnknown = null, $comparison = null)
	{
		if (is_string($serviceNotificationOnUnknown)) {
			$service_notification_on_unknown = in_array(strtolower($serviceNotificationOnUnknown), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosContactPeer::SERVICE_NOTIFICATION_ON_UNKNOWN, $serviceNotificationOnUnknown, $comparison);
	}

	/**
	 * Filter the query on the service_notification_on_critical column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByServiceNotificationOnCritical(true); // WHERE service_notification_on_critical = true
	 * $query->filterByServiceNotificationOnCritical('yes'); // WHERE service_notification_on_critical = true
	 * </code>
	 *
	 * @param     boolean|string $serviceNotificationOnCritical The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterByServiceNotificationOnCritical($serviceNotificationOnCritical = null, $comparison = null)
	{
		if (is_string($serviceNotificationOnCritical)) {
			$service_notification_on_critical = in_array(strtolower($serviceNotificationOnCritical), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosContactPeer::SERVICE_NOTIFICATION_ON_CRITICAL, $serviceNotificationOnCritical, $comparison);
	}

	/**
	 * Filter the query on the service_notification_on_recovery column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByServiceNotificationOnRecovery(true); // WHERE service_notification_on_recovery = true
	 * $query->filterByServiceNotificationOnRecovery('yes'); // WHERE service_notification_on_recovery = true
	 * </code>
	 *
	 * @param     boolean|string $serviceNotificationOnRecovery The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterByServiceNotificationOnRecovery($serviceNotificationOnRecovery = null, $comparison = null)
	{
		if (is_string($serviceNotificationOnRecovery)) {
			$service_notification_on_recovery = in_array(strtolower($serviceNotificationOnRecovery), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosContactPeer::SERVICE_NOTIFICATION_ON_RECOVERY, $serviceNotificationOnRecovery, $comparison);
	}

	/**
	 * Filter the query on the service_notification_on_flapping column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByServiceNotificationOnFlapping(true); // WHERE service_notification_on_flapping = true
	 * $query->filterByServiceNotificationOnFlapping('yes'); // WHERE service_notification_on_flapping = true
	 * </code>
	 *
	 * @param     boolean|string $serviceNotificationOnFlapping The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterByServiceNotificationOnFlapping($serviceNotificationOnFlapping = null, $comparison = null)
	{
		if (is_string($serviceNotificationOnFlapping)) {
			$service_notification_on_flapping = in_array(strtolower($serviceNotificationOnFlapping), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosContactPeer::SERVICE_NOTIFICATION_ON_FLAPPING, $serviceNotificationOnFlapping, $comparison);
	}

	/**
	 * Filter the query on the can_submit_commands column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByCanSubmitCommands(true); // WHERE can_submit_commands = true
	 * $query->filterByCanSubmitCommands('yes'); // WHERE can_submit_commands = true
	 * </code>
	 *
	 * @param     boolean|string $canSubmitCommands The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterByCanSubmitCommands($canSubmitCommands = null, $comparison = null)
	{
		if (is_string($canSubmitCommands)) {
			$can_submit_commands = in_array(strtolower($canSubmitCommands), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosContactPeer::CAN_SUBMIT_COMMANDS, $canSubmitCommands, $comparison);
	}

	/**
	 * Filter the query on the retain_status_information column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByRetainStatusInformation(true); // WHERE retain_status_information = true
	 * $query->filterByRetainStatusInformation('yes'); // WHERE retain_status_information = true
	 * </code>
	 *
	 * @param     boolean|string $retainStatusInformation The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterByRetainStatusInformation($retainStatusInformation = null, $comparison = null)
	{
		if (is_string($retainStatusInformation)) {
			$retain_status_information = in_array(strtolower($retainStatusInformation), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosContactPeer::RETAIN_STATUS_INFORMATION, $retainStatusInformation, $comparison);
	}

	/**
	 * Filter the query on the retain_nonstatus_information column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByRetainNonstatusInformation(true); // WHERE retain_nonstatus_information = true
	 * $query->filterByRetainNonstatusInformation('yes'); // WHERE retain_nonstatus_information = true
	 * </code>
	 *
	 * @param     boolean|string $retainNonstatusInformation The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterByRetainNonstatusInformation($retainNonstatusInformation = null, $comparison = null)
	{
		if (is_string($retainNonstatusInformation)) {
			$retain_nonstatus_information = in_array(strtolower($retainNonstatusInformation), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosContactPeer::RETAIN_NONSTATUS_INFORMATION, $retainNonstatusInformation, $comparison);
	}

	/**
	 * Filter the query by a related NagiosTimeperiod object
	 *
	 * @param     NagiosTimeperiod|PropelCollection $nagiosTimeperiod The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterByNagiosTimeperiodRelatedByHostNotificationPeriod($nagiosTimeperiod, $comparison = null)
	{
		if ($nagiosTimeperiod instanceof NagiosTimeperiod) {
			return $this
				->addUsingAlias(NagiosContactPeer::HOST_NOTIFICATION_PERIOD, $nagiosTimeperiod->getId(), $comparison);
		} elseif ($nagiosTimeperiod instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosContactPeer::HOST_NOTIFICATION_PERIOD, $nagiosTimeperiod->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosTimeperiodRelatedByHostNotificationPeriod() only accepts arguments of type NagiosTimeperiod or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosTimeperiodRelatedByHostNotificationPeriod relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function joinNagiosTimeperiodRelatedByHostNotificationPeriod($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosTimeperiodRelatedByHostNotificationPeriod');
		
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
			$this->addJoinObject($join, 'NagiosTimeperiodRelatedByHostNotificationPeriod');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosTimeperiodRelatedByHostNotificationPeriod relation NagiosTimeperiod object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosTimeperiodQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosTimeperiodRelatedByHostNotificationPeriodQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosTimeperiodRelatedByHostNotificationPeriod($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosTimeperiodRelatedByHostNotificationPeriod', 'NagiosTimeperiodQuery');
	}

	/**
	 * Filter the query by a related NagiosTimeperiod object
	 *
	 * @param     NagiosTimeperiod|PropelCollection $nagiosTimeperiod The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterByNagiosTimeperiodRelatedByServiceNotificationPeriod($nagiosTimeperiod, $comparison = null)
	{
		if ($nagiosTimeperiod instanceof NagiosTimeperiod) {
			return $this
				->addUsingAlias(NagiosContactPeer::SERVICE_NOTIFICATION_PERIOD, $nagiosTimeperiod->getId(), $comparison);
		} elseif ($nagiosTimeperiod instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosContactPeer::SERVICE_NOTIFICATION_PERIOD, $nagiosTimeperiod->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosTimeperiodRelatedByServiceNotificationPeriod() only accepts arguments of type NagiosTimeperiod or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosTimeperiodRelatedByServiceNotificationPeriod relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function joinNagiosTimeperiodRelatedByServiceNotificationPeriod($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosTimeperiodRelatedByServiceNotificationPeriod');
		
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
			$this->addJoinObject($join, 'NagiosTimeperiodRelatedByServiceNotificationPeriod');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosTimeperiodRelatedByServiceNotificationPeriod relation NagiosTimeperiod object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosTimeperiodQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosTimeperiodRelatedByServiceNotificationPeriodQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosTimeperiodRelatedByServiceNotificationPeriod($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosTimeperiodRelatedByServiceNotificationPeriod', 'NagiosTimeperiodQuery');
	}

	/**
	 * Filter the query by a related NagiosContactAddress object
	 *
	 * @param     NagiosContactAddress $nagiosContactAddress  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterByNagiosContactAddress($nagiosContactAddress, $comparison = null)
	{
		if ($nagiosContactAddress instanceof NagiosContactAddress) {
			return $this
				->addUsingAlias(NagiosContactPeer::ID, $nagiosContactAddress->getContact(), $comparison);
		} elseif ($nagiosContactAddress instanceof PropelCollection) {
			return $this
				->useNagiosContactAddressQuery()
					->filterByPrimaryKeys($nagiosContactAddress->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosContactAddress() only accepts arguments of type NagiosContactAddress or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosContactAddress relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function joinNagiosContactAddress($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosContactAddress');
		
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
			$this->addJoinObject($join, 'NagiosContactAddress');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosContactAddress relation NagiosContactAddress object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosContactAddressQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosContactAddressQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinNagiosContactAddress($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosContactAddress', 'NagiosContactAddressQuery');
	}

	/**
	 * Filter the query by a related NagiosContactGroupMember object
	 *
	 * @param     NagiosContactGroupMember $nagiosContactGroupMember  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterByNagiosContactGroupMember($nagiosContactGroupMember, $comparison = null)
	{
		if ($nagiosContactGroupMember instanceof NagiosContactGroupMember) {
			return $this
				->addUsingAlias(NagiosContactPeer::ID, $nagiosContactGroupMember->getContact(), $comparison);
		} elseif ($nagiosContactGroupMember instanceof PropelCollection) {
			return $this
				->useNagiosContactGroupMemberQuery()
					->filterByPrimaryKeys($nagiosContactGroupMember->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosContactGroupMember() only accepts arguments of type NagiosContactGroupMember or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosContactGroupMember relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function joinNagiosContactGroupMember($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosContactGroupMember');
		
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
			$this->addJoinObject($join, 'NagiosContactGroupMember');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosContactGroupMember relation NagiosContactGroupMember object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosContactGroupMemberQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosContactGroupMemberQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinNagiosContactGroupMember($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosContactGroupMember', 'NagiosContactGroupMemberQuery');
	}

	/**
	 * Filter the query by a related NagiosContactNotificationCommand object
	 *
	 * @param     NagiosContactNotificationCommand $nagiosContactNotificationCommand  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterByNagiosContactNotificationCommand($nagiosContactNotificationCommand, $comparison = null)
	{
		if ($nagiosContactNotificationCommand instanceof NagiosContactNotificationCommand) {
			return $this
				->addUsingAlias(NagiosContactPeer::ID, $nagiosContactNotificationCommand->getContactId(), $comparison);
		} elseif ($nagiosContactNotificationCommand instanceof PropelCollection) {
			return $this
				->useNagiosContactNotificationCommandQuery()
					->filterByPrimaryKeys($nagiosContactNotificationCommand->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosContactNotificationCommand() only accepts arguments of type NagiosContactNotificationCommand or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosContactNotificationCommand relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function joinNagiosContactNotificationCommand($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosContactNotificationCommand');
		
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
			$this->addJoinObject($join, 'NagiosContactNotificationCommand');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosContactNotificationCommand relation NagiosContactNotificationCommand object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosContactNotificationCommandQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosContactNotificationCommandQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinNagiosContactNotificationCommand($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosContactNotificationCommand', 'NagiosContactNotificationCommandQuery');
	}

	/**
	 * Filter the query by a related NagiosHostContactMember object
	 *
	 * @param     NagiosHostContactMember $nagiosHostContactMember  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostContactMember($nagiosHostContactMember, $comparison = null)
	{
		if ($nagiosHostContactMember instanceof NagiosHostContactMember) {
			return $this
				->addUsingAlias(NagiosContactPeer::ID, $nagiosHostContactMember->getContact(), $comparison);
		} elseif ($nagiosHostContactMember instanceof PropelCollection) {
			return $this
				->useNagiosHostContactMemberQuery()
					->filterByPrimaryKeys($nagiosHostContactMember->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosHostContactMember() only accepts arguments of type NagiosHostContactMember or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosHostContactMember relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function joinNagiosHostContactMember($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosHostContactMember');
		
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
			$this->addJoinObject($join, 'NagiosHostContactMember');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosHostContactMember relation NagiosHostContactMember object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostContactMemberQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosHostContactMemberQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosHostContactMember($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosHostContactMember', 'NagiosHostContactMemberQuery');
	}

	/**
	 * Filter the query by a related NagiosServiceContactMember object
	 *
	 * @param     NagiosServiceContactMember $nagiosServiceContactMember  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterByNagiosServiceContactMember($nagiosServiceContactMember, $comparison = null)
	{
		if ($nagiosServiceContactMember instanceof NagiosServiceContactMember) {
			return $this
				->addUsingAlias(NagiosContactPeer::ID, $nagiosServiceContactMember->getContact(), $comparison);
		} elseif ($nagiosServiceContactMember instanceof PropelCollection) {
			return $this
				->useNagiosServiceContactMemberQuery()
					->filterByPrimaryKeys($nagiosServiceContactMember->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosServiceContactMember() only accepts arguments of type NagiosServiceContactMember or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosServiceContactMember relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function joinNagiosServiceContactMember($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosServiceContactMember');
		
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
			$this->addJoinObject($join, 'NagiosServiceContactMember');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosServiceContactMember relation NagiosServiceContactMember object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceContactMemberQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosServiceContactMemberQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosServiceContactMember($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosServiceContactMember', 'NagiosServiceContactMemberQuery');
	}

	/**
	 * Filter the query by a related NagiosEscalationContact object
	 *
	 * @param     NagiosEscalationContact $nagiosEscalationContact  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterByNagiosEscalationContact($nagiosEscalationContact, $comparison = null)
	{
		if ($nagiosEscalationContact instanceof NagiosEscalationContact) {
			return $this
				->addUsingAlias(NagiosContactPeer::ID, $nagiosEscalationContact->getContact(), $comparison);
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
	 * @return    NagiosContactQuery The current query, for fluid interface
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
	 * Filter the query by a related NagiosContactCustomObjectVar object
	 *
	 * @param     NagiosContactCustomObjectVar $nagiosContactCustomObjectVar  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function filterByNagiosContactCustomObjectVar($nagiosContactCustomObjectVar, $comparison = null)
	{
		if ($nagiosContactCustomObjectVar instanceof NagiosContactCustomObjectVar) {
			return $this
				->addUsingAlias(NagiosContactPeer::ID, $nagiosContactCustomObjectVar->getContact(), $comparison);
		} elseif ($nagiosContactCustomObjectVar instanceof PropelCollection) {
			return $this
				->useNagiosContactCustomObjectVarQuery()
					->filterByPrimaryKeys($nagiosContactCustomObjectVar->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosContactCustomObjectVar() only accepts arguments of type NagiosContactCustomObjectVar or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosContactCustomObjectVar relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function joinNagiosContactCustomObjectVar($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosContactCustomObjectVar');
		
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
			$this->addJoinObject($join, 'NagiosContactCustomObjectVar');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosContactCustomObjectVar relation NagiosContactCustomObjectVar object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosContactCustomObjectVarQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosContactCustomObjectVarQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosContactCustomObjectVar($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosContactCustomObjectVar', 'NagiosContactCustomObjectVarQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     NagiosContact $nagiosContact Object to remove from the list of results
	 *
	 * @return    NagiosContactQuery The current query, for fluid interface
	 */
	public function prune($nagiosContact = null)
	{
		if ($nagiosContact) {
			$this->addUsingAlias(NagiosContactPeer::ID, $nagiosContact->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseNagiosContactQuery
