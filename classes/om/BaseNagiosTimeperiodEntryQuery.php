<?php


/**
 * Base class that represents a query for the 'nagios_timeperiod_entry' table.
 *
 * Time Period Entries
 *
 * @method     NagiosTimeperiodEntryQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NagiosTimeperiodEntryQuery orderByTimeperiodId($order = Criteria::ASC) Order by the timeperiod_id column
 * @method     NagiosTimeperiodEntryQuery orderByEntry($order = Criteria::ASC) Order by the entry column
 * @method     NagiosTimeperiodEntryQuery orderByValue($order = Criteria::ASC) Order by the value column
 *
 * @method     NagiosTimeperiodEntryQuery groupById() Group by the id column
 * @method     NagiosTimeperiodEntryQuery groupByTimeperiodId() Group by the timeperiod_id column
 * @method     NagiosTimeperiodEntryQuery groupByEntry() Group by the entry column
 * @method     NagiosTimeperiodEntryQuery groupByValue() Group by the value column
 *
 * @method     NagiosTimeperiodEntryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NagiosTimeperiodEntryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NagiosTimeperiodEntryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NagiosTimeperiodEntryQuery leftJoinNagiosTimeperiod($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosTimeperiod relation
 * @method     NagiosTimeperiodEntryQuery rightJoinNagiosTimeperiod($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosTimeperiod relation
 * @method     NagiosTimeperiodEntryQuery innerJoinNagiosTimeperiod($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosTimeperiod relation
 *
 * @method     NagiosTimeperiodEntry findOne(PropelPDO $con = null) Return the first NagiosTimeperiodEntry matching the query
 * @method     NagiosTimeperiodEntry findOneOrCreate(PropelPDO $con = null) Return the first NagiosTimeperiodEntry matching the query, or a new NagiosTimeperiodEntry object populated from the query conditions when no match is found
 *
 * @method     NagiosTimeperiodEntry findOneById(int $id) Return the first NagiosTimeperiodEntry filtered by the id column
 * @method     NagiosTimeperiodEntry findOneByTimeperiodId(int $timeperiod_id) Return the first NagiosTimeperiodEntry filtered by the timeperiod_id column
 * @method     NagiosTimeperiodEntry findOneByEntry(string $entry) Return the first NagiosTimeperiodEntry filtered by the entry column
 * @method     NagiosTimeperiodEntry findOneByValue(string $value) Return the first NagiosTimeperiodEntry filtered by the value column
 *
 * @method     array findById(int $id) Return NagiosTimeperiodEntry objects filtered by the id column
 * @method     array findByTimeperiodId(int $timeperiod_id) Return NagiosTimeperiodEntry objects filtered by the timeperiod_id column
 * @method     array findByEntry(string $entry) Return NagiosTimeperiodEntry objects filtered by the entry column
 * @method     array findByValue(string $value) Return NagiosTimeperiodEntry objects filtered by the value column
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosTimeperiodEntryQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNagiosTimeperiodEntryQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'NagiosTimeperiodEntry', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NagiosTimeperiodEntryQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NagiosTimeperiodEntryQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NagiosTimeperiodEntryQuery) {
			return $criteria;
		}
		$query = new NagiosTimeperiodEntryQuery();
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
	 * @return    NagiosTimeperiodEntry|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NagiosTimeperiodEntryPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    NagiosTimeperiodEntryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NagiosTimeperiodEntryPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NagiosTimeperiodEntryQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NagiosTimeperiodEntryPeer::ID, $keys, Criteria::IN);
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
	 * @return    NagiosTimeperiodEntryQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NagiosTimeperiodEntryPeer::ID, $id, $comparison);
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
	 * @see       filterByNagiosTimeperiod()
	 *
	 * @param     mixed $timeperiodId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosTimeperiodEntryQuery The current query, for fluid interface
	 */
	public function filterByTimeperiodId($timeperiodId = null, $comparison = null)
	{
		if (is_array($timeperiodId)) {
			$useMinMax = false;
			if (isset($timeperiodId['min'])) {
				$this->addUsingAlias(NagiosTimeperiodEntryPeer::TIMEPERIOD_ID, $timeperiodId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($timeperiodId['max'])) {
				$this->addUsingAlias(NagiosTimeperiodEntryPeer::TIMEPERIOD_ID, $timeperiodId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosTimeperiodEntryPeer::TIMEPERIOD_ID, $timeperiodId, $comparison);
	}

	/**
	 * Filter the query on the entry column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEntry('fooValue');   // WHERE entry = 'fooValue'
	 * $query->filterByEntry('%fooValue%'); // WHERE entry LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $entry The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosTimeperiodEntryQuery The current query, for fluid interface
	 */
	public function filterByEntry($entry = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($entry)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $entry)) {
				$entry = str_replace('*', '%', $entry);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosTimeperiodEntryPeer::ENTRY, $entry, $comparison);
	}

	/**
	 * Filter the query on the value column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByValue('fooValue');   // WHERE value = 'fooValue'
	 * $query->filterByValue('%fooValue%'); // WHERE value LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $value The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosTimeperiodEntryQuery The current query, for fluid interface
	 */
	public function filterByValue($value = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($value)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $value)) {
				$value = str_replace('*', '%', $value);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosTimeperiodEntryPeer::VALUE, $value, $comparison);
	}

	/**
	 * Filter the query by a related NagiosTimeperiod object
	 *
	 * @param     NagiosTimeperiod|PropelCollection $nagiosTimeperiod The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosTimeperiodEntryQuery The current query, for fluid interface
	 */
	public function filterByNagiosTimeperiod($nagiosTimeperiod, $comparison = null)
	{
		if ($nagiosTimeperiod instanceof NagiosTimeperiod) {
			return $this
				->addUsingAlias(NagiosTimeperiodEntryPeer::TIMEPERIOD_ID, $nagiosTimeperiod->getId(), $comparison);
		} elseif ($nagiosTimeperiod instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosTimeperiodEntryPeer::TIMEPERIOD_ID, $nagiosTimeperiod->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosTimeperiodEntryQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     NagiosTimeperiodEntry $nagiosTimeperiodEntry Object to remove from the list of results
	 *
	 * @return    NagiosTimeperiodEntryQuery The current query, for fluid interface
	 */
	public function prune($nagiosTimeperiodEntry = null)
	{
		if ($nagiosTimeperiodEntry) {
			$this->addUsingAlias(NagiosTimeperiodEntryPeer::ID, $nagiosTimeperiodEntry->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseNagiosTimeperiodEntryQuery
