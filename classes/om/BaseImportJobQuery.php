<?php


/**
 * Base class that represents a query for the 'import_job' table.
 *
 * Import Job Information
 *
 * @method     ImportJobQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     ImportJobQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ImportJobQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     ImportJobQuery orderByConfig($order = Criteria::ASC) Order by the config column
 * @method     ImportJobQuery orderByStartTime($order = Criteria::ASC) Order by the start_time column
 * @method     ImportJobQuery orderByEndTime($order = Criteria::ASC) Order by the end_time column
 * @method     ImportJobQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method     ImportJobQuery orderByStatusCode($order = Criteria::ASC) Order by the status_code column
 * @method     ImportJobQuery orderByStatusChangeTime($order = Criteria::ASC) Order by the status_change_time column
 * @method     ImportJobQuery orderByStats($order = Criteria::ASC) Order by the stats column
 * @method     ImportJobQuery orderByCmd($order = Criteria::ASC) Order by the cmd column
 *
 * @method     ImportJobQuery groupById() Group by the id column
 * @method     ImportJobQuery groupByName() Group by the name column
 * @method     ImportJobQuery groupByDescription() Group by the description column
 * @method     ImportJobQuery groupByConfig() Group by the config column
 * @method     ImportJobQuery groupByStartTime() Group by the start_time column
 * @method     ImportJobQuery groupByEndTime() Group by the end_time column
 * @method     ImportJobQuery groupByStatus() Group by the status column
 * @method     ImportJobQuery groupByStatusCode() Group by the status_code column
 * @method     ImportJobQuery groupByStatusChangeTime() Group by the status_change_time column
 * @method     ImportJobQuery groupByStats() Group by the stats column
 * @method     ImportJobQuery groupByCmd() Group by the cmd column
 *
 * @method     ImportJobQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ImportJobQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ImportJobQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ImportJobQuery leftJoinImportLogEntry($relationAlias = null) Adds a LEFT JOIN clause to the query using the ImportLogEntry relation
 * @method     ImportJobQuery rightJoinImportLogEntry($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ImportLogEntry relation
 * @method     ImportJobQuery innerJoinImportLogEntry($relationAlias = null) Adds a INNER JOIN clause to the query using the ImportLogEntry relation
 *
 * @method     ImportJob findOne(PropelPDO $con = null) Return the first ImportJob matching the query
 * @method     ImportJob findOneOrCreate(PropelPDO $con = null) Return the first ImportJob matching the query, or a new ImportJob object populated from the query conditions when no match is found
 *
 * @method     ImportJob findOneById(int $id) Return the first ImportJob filtered by the id column
 * @method     ImportJob findOneByName(string $name) Return the first ImportJob filtered by the name column
 * @method     ImportJob findOneByDescription(string $description) Return the first ImportJob filtered by the description column
 * @method     ImportJob findOneByConfig(string $config) Return the first ImportJob filtered by the config column
 * @method     ImportJob findOneByStartTime(string $start_time) Return the first ImportJob filtered by the start_time column
 * @method     ImportJob findOneByEndTime(string $end_time) Return the first ImportJob filtered by the end_time column
 * @method     ImportJob findOneByStatus(string $status) Return the first ImportJob filtered by the status column
 * @method     ImportJob findOneByStatusCode(int $status_code) Return the first ImportJob filtered by the status_code column
 * @method     ImportJob findOneByStatusChangeTime(string $status_change_time) Return the first ImportJob filtered by the status_change_time column
 * @method     ImportJob findOneByStats(string $stats) Return the first ImportJob filtered by the stats column
 * @method     ImportJob findOneByCmd(string $cmd) Return the first ImportJob filtered by the cmd column
 *
 * @method     array findById(int $id) Return ImportJob objects filtered by the id column
 * @method     array findByName(string $name) Return ImportJob objects filtered by the name column
 * @method     array findByDescription(string $description) Return ImportJob objects filtered by the description column
 * @method     array findByConfig(string $config) Return ImportJob objects filtered by the config column
 * @method     array findByStartTime(string $start_time) Return ImportJob objects filtered by the start_time column
 * @method     array findByEndTime(string $end_time) Return ImportJob objects filtered by the end_time column
 * @method     array findByStatus(string $status) Return ImportJob objects filtered by the status column
 * @method     array findByStatusCode(int $status_code) Return ImportJob objects filtered by the status_code column
 * @method     array findByStatusChangeTime(string $status_change_time) Return ImportJob objects filtered by the status_change_time column
 * @method     array findByStats(string $stats) Return ImportJob objects filtered by the stats column
 * @method     array findByCmd(string $cmd) Return ImportJob objects filtered by the cmd column
 *
 * @package    propel.generator..om
 */
abstract class BaseImportJobQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseImportJobQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'ImportJob', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ImportJobQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ImportJobQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ImportJobQuery) {
			return $criteria;
		}
		$query = new ImportJobQuery();
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
	 * @return    ImportJob|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ImportJobPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ImportJobQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ImportJobPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ImportJobQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ImportJobPeer::ID, $keys, Criteria::IN);
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
	 * @return    ImportJobQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ImportJobPeer::ID, $id, $comparison);
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
	 * @return    ImportJobQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ImportJobPeer::NAME, $name, $comparison);
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
	 * @return    ImportJobQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ImportJobPeer::DESCRIPTION, $description, $comparison);
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
	 * @return    ImportJobQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ImportJobPeer::CONFIG, $config, $comparison);
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
	 * @return    ImportJobQuery The current query, for fluid interface
	 */
	public function filterByStartTime($startTime = null, $comparison = null)
	{
		if (is_array($startTime)) {
			$useMinMax = false;
			if (isset($startTime['min'])) {
				$this->addUsingAlias(ImportJobPeer::START_TIME, $startTime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($startTime['max'])) {
				$this->addUsingAlias(ImportJobPeer::START_TIME, $startTime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ImportJobPeer::START_TIME, $startTime, $comparison);
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
	 * @return    ImportJobQuery The current query, for fluid interface
	 */
	public function filterByEndTime($endTime = null, $comparison = null)
	{
		if (is_array($endTime)) {
			$useMinMax = false;
			if (isset($endTime['min'])) {
				$this->addUsingAlias(ImportJobPeer::END_TIME, $endTime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($endTime['max'])) {
				$this->addUsingAlias(ImportJobPeer::END_TIME, $endTime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ImportJobPeer::END_TIME, $endTime, $comparison);
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
	 * @return    ImportJobQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ImportJobPeer::STATUS, $status, $comparison);
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
	 * @return    ImportJobQuery The current query, for fluid interface
	 */
	public function filterByStatusCode($statusCode = null, $comparison = null)
	{
		if (is_array($statusCode)) {
			$useMinMax = false;
			if (isset($statusCode['min'])) {
				$this->addUsingAlias(ImportJobPeer::STATUS_CODE, $statusCode['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($statusCode['max'])) {
				$this->addUsingAlias(ImportJobPeer::STATUS_CODE, $statusCode['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ImportJobPeer::STATUS_CODE, $statusCode, $comparison);
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
	 * @return    ImportJobQuery The current query, for fluid interface
	 */
	public function filterByStatusChangeTime($statusChangeTime = null, $comparison = null)
	{
		if (is_array($statusChangeTime)) {
			$useMinMax = false;
			if (isset($statusChangeTime['min'])) {
				$this->addUsingAlias(ImportJobPeer::STATUS_CHANGE_TIME, $statusChangeTime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($statusChangeTime['max'])) {
				$this->addUsingAlias(ImportJobPeer::STATUS_CHANGE_TIME, $statusChangeTime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ImportJobPeer::STATUS_CHANGE_TIME, $statusChangeTime, $comparison);
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
	 * @return    ImportJobQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ImportJobPeer::STATS, $stats, $comparison);
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
	 * @return    ImportJobQuery The current query, for fluid interface
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
		return $this->addUsingAlias(ImportJobPeer::CMD, $cmd, $comparison);
	}

	/**
	 * Filter the query by a related ImportLogEntry object
	 *
	 * @param     ImportLogEntry $importLogEntry  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ImportJobQuery The current query, for fluid interface
	 */
	public function filterByImportLogEntry($importLogEntry, $comparison = null)
	{
		if ($importLogEntry instanceof ImportLogEntry) {
			return $this
				->addUsingAlias(ImportJobPeer::ID, $importLogEntry->getJob(), $comparison);
		} elseif ($importLogEntry instanceof PropelCollection) {
			return $this
				->useImportLogEntryQuery()
					->filterByPrimaryKeys($importLogEntry->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByImportLogEntry() only accepts arguments of type ImportLogEntry or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the ImportLogEntry relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ImportJobQuery The current query, for fluid interface
	 */
	public function joinImportLogEntry($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('ImportLogEntry');
		
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
			$this->addJoinObject($join, 'ImportLogEntry');
		}
		
		return $this;
	}

	/**
	 * Use the ImportLogEntry relation ImportLogEntry object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ImportLogEntryQuery A secondary query class using the current class as primary query
	 */
	public function useImportLogEntryQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinImportLogEntry($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'ImportLogEntry', 'ImportLogEntryQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     ImportJob $importJob Object to remove from the list of results
	 *
	 * @return    ImportJobQuery The current query, for fluid interface
	 */
	public function prune($importJob = null)
	{
		if ($importJob) {
			$this->addUsingAlias(ImportJobPeer::ID, $importJob->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseImportJobQuery
