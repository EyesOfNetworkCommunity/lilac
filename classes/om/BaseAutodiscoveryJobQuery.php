<?php


/**
 * Base class that represents a query for the 'autodiscovery_job' table.
 *
 * AutoDiscovery Job Information
 *
 * @method     AutodiscoveryJobQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     AutodiscoveryJobQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     AutodiscoveryJobQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     AutodiscoveryJobQuery orderByConfig($order = Criteria::ASC) Order by the config column
 * @method     AutodiscoveryJobQuery orderByStartTime($order = Criteria::ASC) Order by the start_time column
 * @method     AutodiscoveryJobQuery orderByEndTime($order = Criteria::ASC) Order by the end_time column
 * @method     AutodiscoveryJobQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     AutodiscoveryJobQuery orderByStatusCode($order = Criteria::ASC) Order by the status_code column
 * @method     AutodiscoveryJobQuery orderByStatusChangeTime($order = Criteria::ASC) Order by the status_change_time column
 * @method     AutodiscoveryJobQuery orderByStats($order = Criteria::ASC) Order by the stats column
 * @method     AutodiscoveryJobQuery orderByCmd($order = Criteria::ASC) Order by the cmd column
 *
 * @method     AutodiscoveryJobQuery groupById() Group by the id column
 * @method     AutodiscoveryJobQuery groupByName() Group by the name column
 * @method     AutodiscoveryJobQuery groupByDescription() Group by the description column
 * @method     AutodiscoveryJobQuery groupByConfig() Group by the config column
 * @method     AutodiscoveryJobQuery groupByStartTime() Group by the start_time column
 * @method     AutodiscoveryJobQuery groupByEndTime() Group by the end_time column
 * @method     AutodiscoveryJobQuery groupByStatus() Group by the status column
 * @method     AutodiscoveryJobQuery groupByStatusCode() Group by the status_code column
 * @method     AutodiscoveryJobQuery groupByStatusChangeTime() Group by the status_change_time column
 * @method     AutodiscoveryJobQuery groupByStats() Group by the stats column
 * @method     AutodiscoveryJobQuery groupByCmd() Group by the cmd column
 *
 * @method     AutodiscoveryJobQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AutodiscoveryJobQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AutodiscoveryJobQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AutodiscoveryJobQuery leftJoinAutodiscoveryLogEntry($relationAlias = null) Adds a LEFT JOIN clause to the query using the AutodiscoveryLogEntry relation
 * @method     AutodiscoveryJobQuery rightJoinAutodiscoveryLogEntry($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AutodiscoveryLogEntry relation
 * @method     AutodiscoveryJobQuery innerJoinAutodiscoveryLogEntry($relationAlias = null) Adds a INNER JOIN clause to the query using the AutodiscoveryLogEntry relation
 *
 * @method     AutodiscoveryJobQuery leftJoinAutodiscoveryDevice($relationAlias = null) Adds a LEFT JOIN clause to the query using the AutodiscoveryDevice relation
 * @method     AutodiscoveryJobQuery rightJoinAutodiscoveryDevice($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AutodiscoveryDevice relation
 * @method     AutodiscoveryJobQuery innerJoinAutodiscoveryDevice($relationAlias = null) Adds a INNER JOIN clause to the query using the AutodiscoveryDevice relation
 *
 * @method     AutodiscoveryJob findOne(PropelPDO $con = null) Return the first AutodiscoveryJob matching the query
 * @method     AutodiscoveryJob findOneOrCreate(PropelPDO $con = null) Return the first AutodiscoveryJob matching the query, or a new AutodiscoveryJob object populated from the query conditions when no match is found
 *
 * @method     AutodiscoveryJob findOneById(int $id) Return the first AutodiscoveryJob filtered by the id column
 * @method     AutodiscoveryJob findOneByName(string $name) Return the first AutodiscoveryJob filtered by the name column
 * @method     AutodiscoveryJob findOneByDescription(string $description) Return the first AutodiscoveryJob filtered by the description column
 * @method     AutodiscoveryJob findOneByConfig(string $config) Return the first AutodiscoveryJob filtered by the config column
 * @method     AutodiscoveryJob findOneByStartTime(string $start_time) Return the first AutodiscoveryJob filtered by the start_time column
 * @method     AutodiscoveryJob findOneByEndTime(string $end_time) Return the first AutodiscoveryJob filtered by the end_time column
 * @method     AutodiscoveryJob findOneByStatus(string $status) Return the first AutodiscoveryJob filtered by the status column
 * @method     AutodiscoveryJob findOneByStatusCode(int $status_code) Return the first AutodiscoveryJob filtered by the status_code column
 * @method     AutodiscoveryJob findOneByStatusChangeTime(string $status_change_time) Return the first AutodiscoveryJob filtered by the status_change_time column
 * @method     AutodiscoveryJob findOneByStats(string $stats) Return the first AutodiscoveryJob filtered by the stats column
 * @method     AutodiscoveryJob findOneByCmd(string $cmd) Return the first AutodiscoveryJob filtered by the cmd column
 *
 * @method     array findById(int $id) Return AutodiscoveryJob objects filtered by the id column
 * @method     array findByName(string $name) Return AutodiscoveryJob objects filtered by the name column
 * @method     array findByDescription(string $description) Return AutodiscoveryJob objects filtered by the description column
 * @method     array findByConfig(string $config) Return AutodiscoveryJob objects filtered by the config column
 * @method     array findByStartTime(string $start_time) Return AutodiscoveryJob objects filtered by the start_time column
 * @method     array findByEndTime(string $end_time) Return AutodiscoveryJob objects filtered by the end_time column
 * @method     array findByStatus(string $status) Return AutodiscoveryJob objects filtered by the status column
 * @method     array findByStatusCode(int $status_code) Return AutodiscoveryJob objects filtered by the status_code column
 * @method     array findByStatusChangeTime(string $status_change_time) Return AutodiscoveryJob objects filtered by the status_change_time column
 * @method     array findByStats(string $stats) Return AutodiscoveryJob objects filtered by the stats column
 * @method     array findByCmd(string $cmd) Return AutodiscoveryJob objects filtered by the cmd column
 *
 * @package    propel.generator..om
 */
abstract class BaseAutodiscoveryJobQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseAutodiscoveryJobQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'AutodiscoveryJob', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new AutodiscoveryJobQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    AutodiscoveryJobQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof AutodiscoveryJobQuery) {
			return $criteria;
		}
		$query = new AutodiscoveryJobQuery();
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
	 * @return    AutodiscoveryJob|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = AutodiscoveryJobPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    AutodiscoveryJobQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(AutodiscoveryJobPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    AutodiscoveryJobQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(AutodiscoveryJobPeer::ID, $keys, Criteria::IN);
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
	 * @return    AutodiscoveryJobQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(AutodiscoveryJobPeer::ID, $id, $comparison);
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
	 * @return    AutodiscoveryJobQuery The current query, for fluid interface
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
		return $this->addUsingAlias(AutodiscoveryJobPeer::NAME, $name, $comparison);
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
	 * @return    AutodiscoveryJobQuery The current query, for fluid interface
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
		return $this->addUsingAlias(AutodiscoveryJobPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query on the config column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByConfig('fooValue');   // WHERE config = 'fooValue'
	 * $query->filterByConfig('%fooValue%'); // WHERE config LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $config The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryJobQuery The current query, for fluid interface
	 */
	public function filterByConfig($config = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($config)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $config)) {
				$config = str_replace('*', '%', $config);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(AutodiscoveryJobPeer::CONFIG, $config, $comparison);
	}

	/**
	 * Filter the query on the start_time column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByStartTime('2011-03-14'); // WHERE start_time = '2011-03-14'
	 * $query->filterByStartTime('now'); // WHERE start_time = '2011-03-14'
	 * $query->filterByStartTime(array('max' => 'yesterday')); // WHERE start_time > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $startTime The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryJobQuery The current query, for fluid interface
	 */
	public function filterByStartTime($startTime = null, $comparison = null)
	{
		if (is_array($startTime)) {
			$useMinMax = false;
			if (isset($startTime['min'])) {
				$this->addUsingAlias(AutodiscoveryJobPeer::START_TIME, $startTime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($startTime['max'])) {
				$this->addUsingAlias(AutodiscoveryJobPeer::START_TIME, $startTime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AutodiscoveryJobPeer::START_TIME, $startTime, $comparison);
	}

	/**
	 * Filter the query on the end_time column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEndTime('2011-03-14'); // WHERE end_time = '2011-03-14'
	 * $query->filterByEndTime('now'); // WHERE end_time = '2011-03-14'
	 * $query->filterByEndTime(array('max' => 'yesterday')); // WHERE end_time > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $endTime The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryJobQuery The current query, for fluid interface
	 */
	public function filterByEndTime($endTime = null, $comparison = null)
	{
		if (is_array($endTime)) {
			$useMinMax = false;
			if (isset($endTime['min'])) {
				$this->addUsingAlias(AutodiscoveryJobPeer::END_TIME, $endTime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($endTime['max'])) {
				$this->addUsingAlias(AutodiscoveryJobPeer::END_TIME, $endTime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AutodiscoveryJobPeer::END_TIME, $endTime, $comparison);
	}

	/**
	 * Filter the query on the status column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByStatus('fooValue');   // WHERE status = 'fooValue'
	 * $query->filterByStatus('%fooValue%'); // WHERE status LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $status The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryJobQuery The current query, for fluid interface
	 */
	public function filterByStatus($status = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($status)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $status)) {
				$status = str_replace('*', '%', $status);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(AutodiscoveryJobPeer::STATUS, $status, $comparison);
	}

	/**
	 * Filter the query on the status_code column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByStatusCode(1234); // WHERE status_code = 1234
	 * $query->filterByStatusCode(array(12, 34)); // WHERE status_code IN (12, 34)
	 * $query->filterByStatusCode(array('min' => 12)); // WHERE status_code > 12
	 * </code>
	 *
	 * @param     mixed $statusCode The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryJobQuery The current query, for fluid interface
	 */
	public function filterByStatusCode($statusCode = null, $comparison = null)
	{
		if (is_array($statusCode)) {
			$useMinMax = false;
			if (isset($statusCode['min'])) {
				$this->addUsingAlias(AutodiscoveryJobPeer::STATUS_CODE, $statusCode['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($statusCode['max'])) {
				$this->addUsingAlias(AutodiscoveryJobPeer::STATUS_CODE, $statusCode['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AutodiscoveryJobPeer::STATUS_CODE, $statusCode, $comparison);
	}

	/**
	 * Filter the query on the status_change_time column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByStatusChangeTime('2011-03-14'); // WHERE status_change_time = '2011-03-14'
	 * $query->filterByStatusChangeTime('now'); // WHERE status_change_time = '2011-03-14'
	 * $query->filterByStatusChangeTime(array('max' => 'yesterday')); // WHERE status_change_time > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $statusChangeTime The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryJobQuery The current query, for fluid interface
	 */
	public function filterByStatusChangeTime($statusChangeTime = null, $comparison = null)
	{
		if (is_array($statusChangeTime)) {
			$useMinMax = false;
			if (isset($statusChangeTime['min'])) {
				$this->addUsingAlias(AutodiscoveryJobPeer::STATUS_CHANGE_TIME, $statusChangeTime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($statusChangeTime['max'])) {
				$this->addUsingAlias(AutodiscoveryJobPeer::STATUS_CHANGE_TIME, $statusChangeTime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AutodiscoveryJobPeer::STATUS_CHANGE_TIME, $statusChangeTime, $comparison);
	}

	/**
	 * Filter the query on the stats column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByStats('fooValue');   // WHERE stats = 'fooValue'
	 * $query->filterByStats('%fooValue%'); // WHERE stats LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $stats The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryJobQuery The current query, for fluid interface
	 */
	public function filterByStats($stats = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($stats)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $stats)) {
				$stats = str_replace('*', '%', $stats);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(AutodiscoveryJobPeer::STATS, $stats, $comparison);
	}

	/**
	 * Filter the query on the cmd column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByCmd('fooValue');   // WHERE cmd = 'fooValue'
	 * $query->filterByCmd('%fooValue%'); // WHERE cmd LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $cmd The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryJobQuery The current query, for fluid interface
	 */
	public function filterByCmd($cmd = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($cmd)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $cmd)) {
				$cmd = str_replace('*', '%', $cmd);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(AutodiscoveryJobPeer::CMD, $cmd, $comparison);
	}

	/**
	 * Filter the query by a related AutodiscoveryLogEntry object
	 *
	 * @param     AutodiscoveryLogEntry $autodiscoveryLogEntry  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryJobQuery The current query, for fluid interface
	 */
	public function filterByAutodiscoveryLogEntry($autodiscoveryLogEntry, $comparison = null)
	{
		if ($autodiscoveryLogEntry instanceof AutodiscoveryLogEntry) {
			return $this
				->addUsingAlias(AutodiscoveryJobPeer::ID, $autodiscoveryLogEntry->getJob(), $comparison);
		} elseif ($autodiscoveryLogEntry instanceof PropelCollection) {
			return $this
				->useAutodiscoveryLogEntryQuery()
					->filterByPrimaryKeys($autodiscoveryLogEntry->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByAutodiscoveryLogEntry() only accepts arguments of type AutodiscoveryLogEntry or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the AutodiscoveryLogEntry relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AutodiscoveryJobQuery The current query, for fluid interface
	 */
	public function joinAutodiscoveryLogEntry($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('AutodiscoveryLogEntry');
		
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
			$this->addJoinObject($join, 'AutodiscoveryLogEntry');
		}
		
		return $this;
	}

	/**
	 * Use the AutodiscoveryLogEntry relation AutodiscoveryLogEntry object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AutodiscoveryLogEntryQuery A secondary query class using the current class as primary query
	 */
	public function useAutodiscoveryLogEntryQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinAutodiscoveryLogEntry($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'AutodiscoveryLogEntry', 'AutodiscoveryLogEntryQuery');
	}

	/**
	 * Filter the query by a related AutodiscoveryDevice object
	 *
	 * @param     AutodiscoveryDevice $autodiscoveryDevice  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryJobQuery The current query, for fluid interface
	 */
	public function filterByAutodiscoveryDevice($autodiscoveryDevice, $comparison = null)
	{
		if ($autodiscoveryDevice instanceof AutodiscoveryDevice) {
			return $this
				->addUsingAlias(AutodiscoveryJobPeer::ID, $autodiscoveryDevice->getJobId(), $comparison);
		} elseif ($autodiscoveryDevice instanceof PropelCollection) {
			return $this
				->useAutodiscoveryDeviceQuery()
					->filterByPrimaryKeys($autodiscoveryDevice->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByAutodiscoveryDevice() only accepts arguments of type AutodiscoveryDevice or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the AutodiscoveryDevice relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AutodiscoveryJobQuery The current query, for fluid interface
	 */
	public function joinAutodiscoveryDevice($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('AutodiscoveryDevice');
		
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
			$this->addJoinObject($join, 'AutodiscoveryDevice');
		}
		
		return $this;
	}

	/**
	 * Use the AutodiscoveryDevice relation AutodiscoveryDevice object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AutodiscoveryDeviceQuery A secondary query class using the current class as primary query
	 */
	public function useAutodiscoveryDeviceQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinAutodiscoveryDevice($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'AutodiscoveryDevice', 'AutodiscoveryDeviceQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     AutodiscoveryJob $autodiscoveryJob Object to remove from the list of results
	 *
	 * @return    AutodiscoveryJobQuery The current query, for fluid interface
	 */
	public function prune($autodiscoveryJob = null)
	{
		if ($autodiscoveryJob) {
			$this->addUsingAlias(AutodiscoveryJobPeer::ID, $autodiscoveryJob->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseAutodiscoveryJobQuery
