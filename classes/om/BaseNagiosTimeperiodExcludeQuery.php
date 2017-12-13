<?php


/**
 * Base class that represents a query for the 'nagios_timeperiod_exclude' table.
 *
 * Time Period Excludes
 *
 * @method     NagiosTimeperiodExcludeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NagiosTimeperiodExcludeQuery orderByTimeperiodId($order = Criteria::ASC) Order by the timeperiod_id column
 * @method     NagiosTimeperiodExcludeQuery orderByExcludedTimeperiod($order = Criteria::ASC) Order by the excluded_timeperiod column
 *
 * @method     NagiosTimeperiodExcludeQuery groupById() Group by the id column
 * @method     NagiosTimeperiodExcludeQuery groupByTimeperiodId() Group by the timeperiod_id column
 * @method     NagiosTimeperiodExcludeQuery groupByExcludedTimeperiod() Group by the excluded_timeperiod column
 *
 * @method     NagiosTimeperiodExcludeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NagiosTimeperiodExcludeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NagiosTimeperiodExcludeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NagiosTimeperiodExcludeQuery leftJoinNagiosTimeperiodRelatedByTimeperiodId($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosTimeperiodRelatedByTimeperiodId relation
 * @method     NagiosTimeperiodExcludeQuery rightJoinNagiosTimeperiodRelatedByTimeperiodId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosTimeperiodRelatedByTimeperiodId relation
 * @method     NagiosTimeperiodExcludeQuery innerJoinNagiosTimeperiodRelatedByTimeperiodId($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosTimeperiodRelatedByTimeperiodId relation
 *
 * @method     NagiosTimeperiodExcludeQuery leftJoinNagiosTimeperiodRelatedByExcludedTimeperiod($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosTimeperiodRelatedByExcludedTimeperiod relation
 * @method     NagiosTimeperiodExcludeQuery rightJoinNagiosTimeperiodRelatedByExcludedTimeperiod($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosTimeperiodRelatedByExcludedTimeperiod relation
 * @method     NagiosTimeperiodExcludeQuery innerJoinNagiosTimeperiodRelatedByExcludedTimeperiod($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosTimeperiodRelatedByExcludedTimeperiod relation
 *
 * @method     NagiosTimeperiodExclude findOne(PropelPDO $con = null) Return the first NagiosTimeperiodExclude matching the query
 * @method     NagiosTimeperiodExclude findOneOrCreate(PropelPDO $con = null) Return the first NagiosTimeperiodExclude matching the query, or a new NagiosTimeperiodExclude object populated from the query conditions when no match is found
 *
 * @method     NagiosTimeperiodExclude findOneById(int $id) Return the first NagiosTimeperiodExclude filtered by the id column
 * @method     NagiosTimeperiodExclude findOneByTimeperiodId(int $timeperiod_id) Return the first NagiosTimeperiodExclude filtered by the timeperiod_id column
 * @method     NagiosTimeperiodExclude findOneByExcludedTimeperiod(int $excluded_timeperiod) Return the first NagiosTimeperiodExclude filtered by the excluded_timeperiod column
 *
 * @method     array findById(int $id) Return NagiosTimeperiodExclude objects filtered by the id column
 * @method     array findByTimeperiodId(int $timeperiod_id) Return NagiosTimeperiodExclude objects filtered by the timeperiod_id column
 * @method     array findByExcludedTimeperiod(int $excluded_timeperiod) Return NagiosTimeperiodExclude objects filtered by the excluded_timeperiod column
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosTimeperiodExcludeQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNagiosTimeperiodExcludeQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'NagiosTimeperiodExclude', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NagiosTimeperiodExcludeQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NagiosTimeperiodExcludeQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NagiosTimeperiodExcludeQuery) {
			return $criteria;
		}
		$query = new NagiosTimeperiodExcludeQuery();
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
	 * @return    NagiosTimeperiodExclude|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NagiosTimeperiodExcludePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    NagiosTimeperiodExcludeQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NagiosTimeperiodExcludePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NagiosTimeperiodExcludeQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NagiosTimeperiodExcludePeer::ID, $keys, Criteria::IN);
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
	 * @return    NagiosTimeperiodExcludeQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NagiosTimeperiodExcludePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the timeperiod_id column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByTimeperiodId(1234); // WHERE timeperiod_id = 1234
	 * $query->filterByTimeperiodId(array(12, 34)); // WHERE timeperiod_id IN (12, 34)
	 * $query->filterByTimeperiodId(array('min' => 12)); // WHERE timeperiod_id > 12
	 * </code>
	 *
	 * @see       filterByNagiosTimeperiodRelatedByTimeperiodId()
	 *
	 * @param     mixed $timeperiodId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosTimeperiodExcludeQuery The current query, for fluid interface
	 */
	public function filterByTimeperiodId($timeperiodId = null, $comparison = null)
	{
		if (is_array($timeperiodId)) {
			$useMinMax = false;
			if (isset($timeperiodId['min'])) {
				$this->addUsingAlias(NagiosTimeperiodExcludePeer::TIMEPERIOD_ID, $timeperiodId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($timeperiodId['max'])) {
				$this->addUsingAlias(NagiosTimeperiodExcludePeer::TIMEPERIOD_ID, $timeperiodId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosTimeperiodExcludePeer::TIMEPERIOD_ID, $timeperiodId, $comparison);
	}

	/**
	 * Filter the query on the excluded_timeperiod column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByExcludedTimeperiod(1234); // WHERE excluded_timeperiod = 1234
	 * $query->filterByExcludedTimeperiod(array(12, 34)); // WHERE excluded_timeperiod IN (12, 34)
	 * $query->filterByExcludedTimeperiod(array('min' => 12)); // WHERE excluded_timeperiod > 12
	 * </code>
	 *
	 * @see       filterByNagiosTimeperiodRelatedByExcludedTimeperiod()
	 *
	 * @param     mixed $excludedTimeperiod The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosTimeperiodExcludeQuery The current query, for fluid interface
	 */
	public function filterByExcludedTimeperiod($excludedTimeperiod = null, $comparison = null)
	{
		if (is_array($excludedTimeperiod)) {
			$useMinMax = false;
			if (isset($excludedTimeperiod['min'])) {
				$this->addUsingAlias(NagiosTimeperiodExcludePeer::EXCLUDED_TIMEPERIOD, $excludedTimeperiod['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($excludedTimeperiod['max'])) {
				$this->addUsingAlias(NagiosTimeperiodExcludePeer::EXCLUDED_TIMEPERIOD, $excludedTimeperiod['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosTimeperiodExcludePeer::EXCLUDED_TIMEPERIOD, $excludedTimeperiod, $comparison);
	}

	/**
	 * Filter the query by a related NagiosTimeperiod object
	 *
	 * @param     NagiosTimeperiod|PropelCollection $nagiosTimeperiod The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosTimeperiodExcludeQuery The current query, for fluid interface
	 */
	public function filterByNagiosTimeperiodRelatedByTimeperiodId($nagiosTimeperiod, $comparison = null)
	{
		if ($nagiosTimeperiod instanceof NagiosTimeperiod) {
			return $this
				->addUsingAlias(NagiosTimeperiodExcludePeer::TIMEPERIOD_ID, $nagiosTimeperiod->getId(), $comparison);
		} elseif ($nagiosTimeperiod instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosTimeperiodExcludePeer::TIMEPERIOD_ID, $nagiosTimeperiod->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosTimeperiodRelatedByTimeperiodId() only accepts arguments of type NagiosTimeperiod or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosTimeperiodRelatedByTimeperiodId relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosTimeperiodExcludeQuery The current query, for fluid interface
	 */
	public function joinNagiosTimeperiodRelatedByTimeperiodId($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosTimeperiodRelatedByTimeperiodId');
		
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
			$this->addJoinObject($join, 'NagiosTimeperiodRelatedByTimeperiodId');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosTimeperiodRelatedByTimeperiodId relation NagiosTimeperiod object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosTimeperiodQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosTimeperiodRelatedByTimeperiodIdQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosTimeperiodRelatedByTimeperiodId($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosTimeperiodRelatedByTimeperiodId', 'NagiosTimeperiodQuery');
	}

	/**
	 * Filter the query by a related NagiosTimeperiod object
	 *
	 * @param     NagiosTimeperiod|PropelCollection $nagiosTimeperiod The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosTimeperiodExcludeQuery The current query, for fluid interface
	 */
	public function filterByNagiosTimeperiodRelatedByExcludedTimeperiod($nagiosTimeperiod, $comparison = null)
	{
		if ($nagiosTimeperiod instanceof NagiosTimeperiod) {
			return $this
				->addUsingAlias(NagiosTimeperiodExcludePeer::EXCLUDED_TIMEPERIOD, $nagiosTimeperiod->getId(), $comparison);
		} elseif ($nagiosTimeperiod instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosTimeperiodExcludePeer::EXCLUDED_TIMEPERIOD, $nagiosTimeperiod->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosTimeperiodRelatedByExcludedTimeperiod() only accepts arguments of type NagiosTimeperiod or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosTimeperiodRelatedByExcludedTimeperiod relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosTimeperiodExcludeQuery The current query, for fluid interface
	 */
	public function joinNagiosTimeperiodRelatedByExcludedTimeperiod($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosTimeperiodRelatedByExcludedTimeperiod');
		
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
			$this->addJoinObject($join, 'NagiosTimeperiodRelatedByExcludedTimeperiod');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosTimeperiodRelatedByExcludedTimeperiod relation NagiosTimeperiod object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosTimeperiodQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosTimeperiodRelatedByExcludedTimeperiodQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosTimeperiodRelatedByExcludedTimeperiod($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosTimeperiodRelatedByExcludedTimeperiod', 'NagiosTimeperiodQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     NagiosTimeperiodExclude $nagiosTimeperiodExclude Object to remove from the list of results
	 *
	 * @return    NagiosTimeperiodExcludeQuery The current query, for fluid interface
	 */
	public function prune($nagiosTimeperiodExclude = null)
	{
		if ($nagiosTimeperiodExclude) {
			$this->addUsingAlias(NagiosTimeperiodExcludePeer::ID, $nagiosTimeperiodExclude->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseNagiosTimeperiodExcludeQuery
