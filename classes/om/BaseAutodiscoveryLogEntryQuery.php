<?php


/**
 * Base class that represents a query for the 'autodiscovery_log_entry' table.
 *
 * Export Job Entry
 *
 * @method     AutodiscoveryLogEntryQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     AutodiscoveryLogEntryQuery orderByJob($order = Criteria::ASC) Order by the job column
 * @method     AutodiscoveryLogEntryQuery orderByTime($order = Criteria::ASC) Order by the time column
 * @method     AutodiscoveryLogEntryQuery orderByText($order = Criteria::ASC) Order by the text column
 * @method     AutodiscoveryLogEntryQuery orderByType($order = Criteria::ASC) Order by the type column
 *
 * @method     AutodiscoveryLogEntryQuery groupById() Group by the id column
 * @method     AutodiscoveryLogEntryQuery groupByJob() Group by the job column
 * @method     AutodiscoveryLogEntryQuery groupByTime() Group by the time column
 * @method     AutodiscoveryLogEntryQuery groupByText() Group by the text column
 * @method     AutodiscoveryLogEntryQuery groupByType() Group by the type column
 *
 * @method     AutodiscoveryLogEntryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AutodiscoveryLogEntryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AutodiscoveryLogEntryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AutodiscoveryLogEntryQuery leftJoinAutodiscoveryJob($relationAlias = null) Adds a LEFT JOIN clause to the query using the AutodiscoveryJob relation
 * @method     AutodiscoveryLogEntryQuery rightJoinAutodiscoveryJob($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AutodiscoveryJob relation
 * @method     AutodiscoveryLogEntryQuery innerJoinAutodiscoveryJob($relationAlias = null) Adds a INNER JOIN clause to the query using the AutodiscoveryJob relation
 *
 * @method     AutodiscoveryLogEntry findOne(PropelPDO $con = null) Return the first AutodiscoveryLogEntry matching the query
 * @method     AutodiscoveryLogEntry findOneOrCreate(PropelPDO $con = null) Return the first AutodiscoveryLogEntry matching the query, or a new AutodiscoveryLogEntry object populated from the query conditions when no match is found
 *
 * @method     AutodiscoveryLogEntry findOneById(int $id) Return the first AutodiscoveryLogEntry filtered by the id column
 * @method     AutodiscoveryLogEntry findOneByJob(int $job) Return the first AutodiscoveryLogEntry filtered by the job column
 * @method     AutodiscoveryLogEntry findOneByTime(string $time) Return the first AutodiscoveryLogEntry filtered by the time column
 * @method     AutodiscoveryLogEntry findOneByText(string $text) Return the first AutodiscoveryLogEntry filtered by the text column
 * @method     AutodiscoveryLogEntry findOneByType(int $type) Return the first AutodiscoveryLogEntry filtered by the type column
 *
 * @method     array findById(int $id) Return AutodiscoveryLogEntry objects filtered by the id column
 * @method     array findByJob(int $job) Return AutodiscoveryLogEntry objects filtered by the job column
 * @method     array findByTime(string $time) Return AutodiscoveryLogEntry objects filtered by the time column
 * @method     array findByText(string $text) Return AutodiscoveryLogEntry objects filtered by the text column
 * @method     array findByType(int $type) Return AutodiscoveryLogEntry objects filtered by the type column
 *
 * @package    propel.generator..om
 */
abstract class BaseAutodiscoveryLogEntryQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseAutodiscoveryLogEntryQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'AutodiscoveryLogEntry', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new AutodiscoveryLogEntryQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    AutodiscoveryLogEntryQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof AutodiscoveryLogEntryQuery) {
			return $criteria;
		}
		$query = new AutodiscoveryLogEntryQuery();
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
	 * @return    AutodiscoveryLogEntry|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = AutodiscoveryLogEntryPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    AutodiscoveryLogEntryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(AutodiscoveryLogEntryPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    AutodiscoveryLogEntryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(AutodiscoveryLogEntryPeer::ID, $keys, Criteria::IN);
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
	 * @return    AutodiscoveryLogEntryQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(AutodiscoveryLogEntryPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the job column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByJob(1234); // WHERE job = 1234
	 * $query->filterByJob(array(12, 34)); // WHERE job IN (12, 34)
	 * $query->filterByJob(array('min' => 12)); // WHERE job > 12
	 * </code>
	 *
	 * @see       filterByAutodiscoveryJob()
	 *
	 * @param     mixed $job The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryLogEntryQuery The current query, for fluid interface
	 */
	public function filterByJob($job = null, $comparison = null)
	{
		if (is_array($job)) {
			$useMinMax = false;
			if (isset($job['min'])) {
				$this->addUsingAlias(AutodiscoveryLogEntryPeer::JOB, $job['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($job['max'])) {
				$this->addUsingAlias(AutodiscoveryLogEntryPeer::JOB, $job['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AutodiscoveryLogEntryPeer::JOB, $job, $comparison);
	}

	/**
	 * Filter the query on the time column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByTime('2011-03-14'); // WHERE time = '2011-03-14'
	 * $query->filterByTime('now'); // WHERE time = '2011-03-14'
	 * $query->filterByTime(array('max' => 'yesterday')); // WHERE time > '2011-03-13'
	 * </code>
	 *
	 * @param     mixed $time The value to use as filter.
	 *              Values can be integers (unix timestamps), DateTime objects, or strings.
	 *              Empty strings are treated as NULL.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryLogEntryQuery The current query, for fluid interface
	 */
	public function filterByTime($time = null, $comparison = null)
	{
		if (is_array($time)) {
			$useMinMax = false;
			if (isset($time['min'])) {
				$this->addUsingAlias(AutodiscoveryLogEntryPeer::TIME, $time['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($time['max'])) {
				$this->addUsingAlias(AutodiscoveryLogEntryPeer::TIME, $time['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AutodiscoveryLogEntryPeer::TIME, $time, $comparison);
	}

	/**
	 * Filter the query on the text column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByText('fooValue');   // WHERE text = 'fooValue'
	 * $query->filterByText('%fooValue%'); // WHERE text LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $text The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryLogEntryQuery The current query, for fluid interface
	 */
	public function filterByText($text = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($text)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $text)) {
				$text = str_replace('*', '%', $text);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(AutodiscoveryLogEntryPeer::TEXT, $text, $comparison);
	}

	/**
	 * Filter the query on the type column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByType(1234); // WHERE type = 1234
	 * $query->filterByType(array(12, 34)); // WHERE type IN (12, 34)
	 * $query->filterByType(array('min' => 12)); // WHERE type > 12
	 * </code>
	 *
	 * @param     mixed $type The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryLogEntryQuery The current query, for fluid interface
	 */
	public function filterByType($type = null, $comparison = null)
	{
		if (is_array($type)) {
			$useMinMax = false;
			if (isset($type['min'])) {
				$this->addUsingAlias(AutodiscoveryLogEntryPeer::TYPE, $type['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($type['max'])) {
				$this->addUsingAlias(AutodiscoveryLogEntryPeer::TYPE, $type['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AutodiscoveryLogEntryPeer::TYPE, $type, $comparison);
	}

	/**
	 * Filter the query by a related AutodiscoveryJob object
	 *
	 * @param     AutodiscoveryJob|PropelCollection $autodiscoveryJob The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryLogEntryQuery The current query, for fluid interface
	 */
	public function filterByAutodiscoveryJob($autodiscoveryJob, $comparison = null)
	{
		if ($autodiscoveryJob instanceof AutodiscoveryJob) {
			return $this
				->addUsingAlias(AutodiscoveryLogEntryPeer::JOB, $autodiscoveryJob->getId(), $comparison);
		} elseif ($autodiscoveryJob instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(AutodiscoveryLogEntryPeer::JOB, $autodiscoveryJob->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    AutodiscoveryLogEntryQuery The current query, for fluid interface
	 */
	public function joinAutodiscoveryJob($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
	public function useAutodiscoveryJobQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinAutodiscoveryJob($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'AutodiscoveryJob', 'AutodiscoveryJobQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     AutodiscoveryLogEntry $autodiscoveryLogEntry Object to remove from the list of results
	 *
	 * @return    AutodiscoveryLogEntryQuery The current query, for fluid interface
	 */
	public function prune($autodiscoveryLogEntry = null)
	{
		if ($autodiscoveryLogEntry) {
			$this->addUsingAlias(AutodiscoveryLogEntryPeer::ID, $autodiscoveryLogEntry->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseAutodiscoveryLogEntryQuery
