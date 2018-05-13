<?php


/**
 * Base class that represents a query for the 'export_job' table.
 *
 * Export Job Information
 *
 * @method     ExportJobQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ExportJobQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ExportJobQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     ExportJobQuery orderByConfig($order = Criteria::ASC) Order by the config column
 * @method     ExportJobQuery orderByStartTime($order = Criteria::ASC) Order by the start_time column
 * @method     ExportJobQuery orderByEndTime($order = Criteria::ASC) Order by the end_time column
 * @method     ExportJobQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ExportJobQuery orderByStatusCode($order = Criteria::ASC) Order by the status_code column
 * @method     ExportJobQuery orderByStatusChangeTime($order = Criteria::ASC) Order by the status_change_time column
 * @method     ExportJobQuery orderByStats($order = Criteria::ASC) Order by the stats column
 * @method     ExportJobQuery orderByCmd($order = Criteria::ASC) Order by the cmd column
 *
 * @method     ExportJobQuery groupById() Group by the id column
 * @method     ExportJobQuery groupByName() Group by the name column
 * @method     ExportJobQuery groupByDescription() Group by the description column
 * @method     ExportJobQuery groupByConfig() Group by the config column
 * @method     ExportJobQuery groupByStartTime() Group by the start_time column
 * @method     ExportJobQuery groupByEndTime() Group by the end_time column
 * @method     ExportJobQuery groupByStatus() Group by the status column
 * @method     ExportJobQuery groupByStatusCode() Group by the status_code column
 * @method     ExportJobQuery groupByStatusChangeTime() Group by the status_change_time column
 * @method     ExportJobQuery groupByStats() Group by the stats column
 * @method     ExportJobQuery groupByCmd() Group by the cmd column
 *
 * @method     ExportJobQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ExportJobQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ExportJobQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ExportJobQuery leftJoinExportLogEntry($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExportLogEntry relation
 * @method     ExportJobQuery rightJoinExportLogEntry($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExportLogEntry relation
 * @method     ExportJobQuery innerJoinExportLogEntry($relationAlias = null) Adds a INNER JOIN clause to the query using the ExportLogEntry relation
 *
 * @method     ExportJob findOne(PropelPDO $con = null) Return the first ExportJob matching the query
 * @method     ExportJob findOneOrCreate(PropelPDO $con = null) Return the first ExportJob matching the query, or a new ExportJob object populated from the query conditions when no match is found
 *
 * @method     ExportJob findOneById(int $id) Return the first ExportJob filtered by the id column
 * @method     ExportJob findOneByName(string $name) Return the first ExportJob filtered by the name column
 * @method     ExportJob findOneByDescription(string $description) Return the first ExportJob filtered by the description column
 * @method     ExportJob findOneByConfig(string $config) Return the first ExportJob filtered by the config column
 * @method     ExportJob findOneByStartTime(string $start_time) Return the first ExportJob filtered by the start_time column
 * @method     ExportJob findOneByEndTime(string $end_time) Return the first ExportJob filtered by the end_time column
 * @method     ExportJob findOneByStatus(string $status) Return the first ExportJob filtered by the status column
 * @method     ExportJob findOneByStatusCode(int $status_code) Return the first ExportJob filtered by the status_code column
 * @method     ExportJob findOneByStatusChangeTime(string $status_change_time) Return the first ExportJob filtered by the status_change_time column
 * @method     ExportJob findOneByStats(string $stats) Return the first ExportJob filtered by the stats column
 * @method     ExportJob findOneByCmd(string $cmd) Return the first ExportJob filtered by the cmd column
 *
 * @method     array findById(int $id) Return ExportJob objects filtered by the id column
 * @method     array findByName(string $name) Return ExportJob objects filtered by the name column
 * @method     array findByDescription(string $description) Return ExportJob objects filtered by the description column
 * @method     array findByConfig(string $config) Return ExportJob objects filtered by the config column
 * @method     array findByStartTime(string $start_time) Return ExportJob objects filtered by the start_time column
 * @method     array findByEndTime(string $end_time) Return ExportJob objects filtered by the end_time column
 * @method     array findByStatus(string $status) Return ExportJob objects filtered by the status column
 * @method     array findByStatusCode(int $status_code) Return ExportJob objects filtered by the status_code column
 * @method     array findByStatusChangeTime(string $status_change_time) Return ExportJob objects filtered by the status_change_time column
 * @method     array findByStats(string $stats) Return ExportJob objects filtered by the stats column
 * @method     array findByCmd(string $cmd) Return ExportJob objects filtered by the cmd column
 *
 * @package    propel.generator..om
 */
abstract class BaseExportJobQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseExportJobQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'ExportJob', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ExportJobQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ExportJobQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ExportJobQuery) {
			return $criteria;
		}
		$query = new ExportJobQuery();
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
	 * @return    ExportJob|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ExportJobPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ExportJobQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ExportJobPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ExportJobQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ExportJobPeer::ID, $keys, Criteria::IN);
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
	 * @return    ExportJobQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ExportJobPeer::ID, $id, $comparison);
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
	 * @return    ExportJobQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ExportJobPeer::NAME, $name, $comparison);
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
	 * @return    ExportJobQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ExportJobPeer::DESCRIPTION, $description, $comparison);
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
	 * @return    ExportJobQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ExportJobPeer::CONFIG, $config, $comparison);
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
	 * @return    ExportJobQuery The current query, for fluid interface
	 */
	public function filterByStartTime($startTime = null, $comparison = null)
	{
		if (is_array($startTime)) {
			$useMinMax = false;
			if (isset($startTime['min'])) {
				$this->addUsingAlias(ExportJobPeer::START_TIME, $startTime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($startTime['max'])) {
				$this->addUsingAlias(ExportJobPeer::START_TIME, $startTime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ExportJobPeer::START_TIME, $startTime, $comparison);
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
	 * @return    ExportJobQuery The current query, for fluid interface
	 */
	public function filterByEndTime($endTime = null, $comparison = null)
	{
		if (is_array($endTime)) {
			$useMinMax = false;
			if (isset($endTime['min'])) {
				$this->addUsingAlias(ExportJobPeer::END_TIME, $endTime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($endTime['max'])) {
				$this->addUsingAlias(ExportJobPeer::END_TIME, $endTime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ExportJobPeer::END_TIME, $endTime, $comparison);
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
	 * @return    ExportJobQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ExportJobPeer::STATUS, $status, $comparison);
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
	 * @return    ExportJobQuery The current query, for fluid interface
	 */
	public function filterByStatusCode($statusCode = null, $comparison = null)
	{
		if (is_array($statusCode)) {
			$useMinMax = false;
			if (isset($statusCode['min'])) {
				$this->addUsingAlias(ExportJobPeer::STATUS_CODE, $statusCode['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($statusCode['max'])) {
				$this->addUsingAlias(ExportJobPeer::STATUS_CODE, $statusCode['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ExportJobPeer::STATUS_CODE, $statusCode, $comparison);
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
	 * @return    ExportJobQuery The current query, for fluid interface
	 */
	public function filterByStatusChangeTime($statusChangeTime = null, $comparison = null)
	{
		if (is_array($statusChangeTime)) {
			$useMinMax = false;
			if (isset($statusChangeTime['min'])) {
				$this->addUsingAlias(ExportJobPeer::STATUS_CHANGE_TIME, $statusChangeTime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($statusChangeTime['max'])) {
				$this->addUsingAlias(ExportJobPeer::STATUS_CHANGE_TIME, $statusChangeTime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ExportJobPeer::STATUS_CHANGE_TIME, $statusChangeTime, $comparison);
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
	 * @return    ExportJobQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ExportJobPeer::STATS, $stats, $comparison);
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
	 * @return    ExportJobQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ExportJobPeer::CMD, $cmd, $comparison);
	}

	/**
	 * Filter the query by a related ExportLogEntry object
	 *
	 * @param     ExportLogEntry $exportLogEntry  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ExportJobQuery The current query, for fluid interface
	 */
	public function filterByExportLogEntry($exportLogEntry, $comparison = null)
	{
		if ($exportLogEntry instanceof ExportLogEntry) {
			return $this
				->addUsingAlias(ExportJobPeer::ID, $exportLogEntry->getJob(), $comparison);
		} elseif ($exportLogEntry instanceof PropelCollection) {
			return $this
				->useExportLogEntryQuery()
					->filterByPrimaryKeys($exportLogEntry->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByExportLogEntry() only accepts arguments of type ExportLogEntry or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the ExportLogEntry relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ExportJobQuery The current query, for fluid interface
	 */
	public function joinExportLogEntry($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('ExportLogEntry');
		
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
			$this->addJoinObject($join, 'ExportLogEntry');
		}
		
		return $this;
	}

	/**
	 * Use the ExportLogEntry relation ExportLogEntry object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ExportLogEntryQuery A secondary query class using the current class as primary query
	 */
	public function useExportLogEntryQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinExportLogEntry($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'ExportLogEntry', 'ExportLogEntryQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     ExportJob $exportJob Object to remove from the list of results
	 *
	 * @return    ExportJobQuery The current query, for fluid interface
	 */
	public function prune($exportJob = null)
	{
		if ($exportJob) {
			$this->addUsingAlias(ExportJobPeer::ID, $exportJob->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseExportJobQuery
