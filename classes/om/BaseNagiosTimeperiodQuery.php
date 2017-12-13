<?php


/**
 * Base class that represents a query for the 'nagios_timeperiod' table.
 *
 * Nagios Timeperiods
 *
 * @method     NagiosTimeperiodQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NagiosTimeperiodQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     NagiosTimeperiodQuery orderByAlias($order = Criteria::ASC) Order by the alias column
 *
 * @method     NagiosTimeperiodQuery groupById() Group by the id column
 * @method     NagiosTimeperiodQuery groupByName() Group by the name column
 * @method     NagiosTimeperiodQuery groupByAlias() Group by the alias column
 *
 * @method     NagiosTimeperiodQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NagiosTimeperiodQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NagiosTimeperiodQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NagiosTimeperiodQuery leftJoinNagiosTimeperiodEntry($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosTimeperiodEntry relation
 * @method     NagiosTimeperiodQuery rightJoinNagiosTimeperiodEntry($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosTimeperiodEntry relation
 * @method     NagiosTimeperiodQuery innerJoinNagiosTimeperiodEntry($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosTimeperiodEntry relation
 *
 * @method     NagiosTimeperiodQuery leftJoinNagiosTimeperiodExcludeRelatedByTimeperiodId($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosTimeperiodExcludeRelatedByTimeperiodId relation
 * @method     NagiosTimeperiodQuery rightJoinNagiosTimeperiodExcludeRelatedByTimeperiodId($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosTimeperiodExcludeRelatedByTimeperiodId relation
 * @method     NagiosTimeperiodQuery innerJoinNagiosTimeperiodExcludeRelatedByTimeperiodId($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosTimeperiodExcludeRelatedByTimeperiodId relation
 *
 * @method     NagiosTimeperiodQuery leftJoinNagiosTimeperiodExcludeRelatedByExcludedTimeperiod($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosTimeperiodExcludeRelatedByExcludedTimeperiod relation
 * @method     NagiosTimeperiodQuery rightJoinNagiosTimeperiodExcludeRelatedByExcludedTimeperiod($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosTimeperiodExcludeRelatedByExcludedTimeperiod relation
 * @method     NagiosTimeperiodQuery innerJoinNagiosTimeperiodExcludeRelatedByExcludedTimeperiod($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosTimeperiodExcludeRelatedByExcludedTimeperiod relation
 *
 * @method     NagiosTimeperiodQuery leftJoinNagiosContactRelatedByHostNotificationPeriod($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosContactRelatedByHostNotificationPeriod relation
 * @method     NagiosTimeperiodQuery rightJoinNagiosContactRelatedByHostNotificationPeriod($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosContactRelatedByHostNotificationPeriod relation
 * @method     NagiosTimeperiodQuery innerJoinNagiosContactRelatedByHostNotificationPeriod($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosContactRelatedByHostNotificationPeriod relation
 *
 * @method     NagiosTimeperiodQuery leftJoinNagiosContactRelatedByServiceNotificationPeriod($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosContactRelatedByServiceNotificationPeriod relation
 * @method     NagiosTimeperiodQuery rightJoinNagiosContactRelatedByServiceNotificationPeriod($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosContactRelatedByServiceNotificationPeriod relation
 * @method     NagiosTimeperiodQuery innerJoinNagiosContactRelatedByServiceNotificationPeriod($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosContactRelatedByServiceNotificationPeriod relation
 *
 * @method     NagiosTimeperiodQuery leftJoinNagiosHostTemplateRelatedByCheckPeriod($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostTemplateRelatedByCheckPeriod relation
 * @method     NagiosTimeperiodQuery rightJoinNagiosHostTemplateRelatedByCheckPeriod($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostTemplateRelatedByCheckPeriod relation
 * @method     NagiosTimeperiodQuery innerJoinNagiosHostTemplateRelatedByCheckPeriod($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostTemplateRelatedByCheckPeriod relation
 *
 * @method     NagiosTimeperiodQuery leftJoinNagiosHostTemplateRelatedByNotificationPeriod($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostTemplateRelatedByNotificationPeriod relation
 * @method     NagiosTimeperiodQuery rightJoinNagiosHostTemplateRelatedByNotificationPeriod($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostTemplateRelatedByNotificationPeriod relation
 * @method     NagiosTimeperiodQuery innerJoinNagiosHostTemplateRelatedByNotificationPeriod($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostTemplateRelatedByNotificationPeriod relation
 *
 * @method     NagiosTimeperiodQuery leftJoinNagiosHostRelatedByCheckPeriod($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostRelatedByCheckPeriod relation
 * @method     NagiosTimeperiodQuery rightJoinNagiosHostRelatedByCheckPeriod($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostRelatedByCheckPeriod relation
 * @method     NagiosTimeperiodQuery innerJoinNagiosHostRelatedByCheckPeriod($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostRelatedByCheckPeriod relation
 *
 * @method     NagiosTimeperiodQuery leftJoinNagiosHostRelatedByNotificationPeriod($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostRelatedByNotificationPeriod relation
 * @method     NagiosTimeperiodQuery rightJoinNagiosHostRelatedByNotificationPeriod($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostRelatedByNotificationPeriod relation
 * @method     NagiosTimeperiodQuery innerJoinNagiosHostRelatedByNotificationPeriod($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostRelatedByNotificationPeriod relation
 *
 * @method     NagiosTimeperiodQuery leftJoinNagiosServiceTemplateRelatedByCheckPeriod($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosServiceTemplateRelatedByCheckPeriod relation
 * @method     NagiosTimeperiodQuery rightJoinNagiosServiceTemplateRelatedByCheckPeriod($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosServiceTemplateRelatedByCheckPeriod relation
 * @method     NagiosTimeperiodQuery innerJoinNagiosServiceTemplateRelatedByCheckPeriod($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosServiceTemplateRelatedByCheckPeriod relation
 *
 * @method     NagiosTimeperiodQuery leftJoinNagiosServiceTemplateRelatedByNotificationPeriod($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosServiceTemplateRelatedByNotificationPeriod relation
 * @method     NagiosTimeperiodQuery rightJoinNagiosServiceTemplateRelatedByNotificationPeriod($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosServiceTemplateRelatedByNotificationPeriod relation
 * @method     NagiosTimeperiodQuery innerJoinNagiosServiceTemplateRelatedByNotificationPeriod($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosServiceTemplateRelatedByNotificationPeriod relation
 *
 * @method     NagiosTimeperiodQuery leftJoinNagiosServiceRelatedByCheckPeriod($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosServiceRelatedByCheckPeriod relation
 * @method     NagiosTimeperiodQuery rightJoinNagiosServiceRelatedByCheckPeriod($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosServiceRelatedByCheckPeriod relation
 * @method     NagiosTimeperiodQuery innerJoinNagiosServiceRelatedByCheckPeriod($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosServiceRelatedByCheckPeriod relation
 *
 * @method     NagiosTimeperiodQuery leftJoinNagiosServiceRelatedByNotificationPeriod($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosServiceRelatedByNotificationPeriod relation
 * @method     NagiosTimeperiodQuery rightJoinNagiosServiceRelatedByNotificationPeriod($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosServiceRelatedByNotificationPeriod relation
 * @method     NagiosTimeperiodQuery innerJoinNagiosServiceRelatedByNotificationPeriod($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosServiceRelatedByNotificationPeriod relation
 *
 * @method     NagiosTimeperiodQuery leftJoinNagiosDependency($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosDependency relation
 * @method     NagiosTimeperiodQuery rightJoinNagiosDependency($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosDependency relation
 * @method     NagiosTimeperiodQuery innerJoinNagiosDependency($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosDependency relation
 *
 * @method     NagiosTimeperiodQuery leftJoinNagiosEscalation($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosEscalation relation
 * @method     NagiosTimeperiodQuery rightJoinNagiosEscalation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosEscalation relation
 * @method     NagiosTimeperiodQuery innerJoinNagiosEscalation($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosEscalation relation
 *
 * @method     NagiosTimeperiod findOne(PropelPDO $con = null) Return the first NagiosTimeperiod matching the query
 * @method     NagiosTimeperiod findOneOrCreate(PropelPDO $con = null) Return the first NagiosTimeperiod matching the query, or a new NagiosTimeperiod object populated from the query conditions when no match is found
 *
 * @method     NagiosTimeperiod findOneById(int $id) Return the first NagiosTimeperiod filtered by the id column
 * @method     NagiosTimeperiod findOneByName(string $name) Return the first NagiosTimeperiod filtered by the name column
 * @method     NagiosTimeperiod findOneByAlias(string $alias) Return the first NagiosTimeperiod filtered by the alias column
 *
 * @method     array findById(int $id) Return NagiosTimeperiod objects filtered by the id column
 * @method     array findByName(string $name) Return NagiosTimeperiod objects filtered by the name column
 * @method     array findByAlias(string $alias) Return NagiosTimeperiod objects filtered by the alias column
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosTimeperiodQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNagiosTimeperiodQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'NagiosTimeperiod', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NagiosTimeperiodQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NagiosTimeperiodQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NagiosTimeperiodQuery) {
			return $criteria;
		}
		$query = new NagiosTimeperiodQuery();
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
	 * @return    NagiosTimeperiod|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NagiosTimeperiodPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NagiosTimeperiodPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NagiosTimeperiodPeer::ID, $keys, Criteria::IN);
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
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NagiosTimeperiodPeer::ID, $id, $comparison);
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
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
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
		return $this->addUsingAlias(NagiosTimeperiodPeer::NAME, $name, $comparison);
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
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
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
		return $this->addUsingAlias(NagiosTimeperiodPeer::ALIAS, $alias, $comparison);
	}

	/**
	 * Filter the query by a related NagiosTimeperiodEntry object
	 *
	 * @param     NagiosTimeperiodEntry $nagiosTimeperiodEntry  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function filterByNagiosTimeperiodEntry($nagiosTimeperiodEntry, $comparison = null)
	{
		if ($nagiosTimeperiodEntry instanceof NagiosTimeperiodEntry) {
			return $this
				->addUsingAlias(NagiosTimeperiodPeer::ID, $nagiosTimeperiodEntry->getTimeperiodId(), $comparison);
		} elseif ($nagiosTimeperiodEntry instanceof PropelCollection) {
			return $this
				->useNagiosTimeperiodEntryQuery()
					->filterByPrimaryKeys($nagiosTimeperiodEntry->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosTimeperiodEntry() only accepts arguments of type NagiosTimeperiodEntry or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosTimeperiodEntry relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function joinNagiosTimeperiodEntry($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosTimeperiodEntry');
		
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
			$this->addJoinObject($join, 'NagiosTimeperiodEntry');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosTimeperiodEntry relation NagiosTimeperiodEntry object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosTimeperiodEntryQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosTimeperiodEntryQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosTimeperiodEntry($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosTimeperiodEntry', 'NagiosTimeperiodEntryQuery');
	}

	/**
	 * Filter the query by a related NagiosTimeperiodExclude object
	 *
	 * @param     NagiosTimeperiodExclude $nagiosTimeperiodExclude  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function filterByNagiosTimeperiodExcludeRelatedByTimeperiodId($nagiosTimeperiodExclude, $comparison = null)
	{
		if ($nagiosTimeperiodExclude instanceof NagiosTimeperiodExclude) {
			return $this
				->addUsingAlias(NagiosTimeperiodPeer::ID, $nagiosTimeperiodExclude->getTimeperiodId(), $comparison);
		} elseif ($nagiosTimeperiodExclude instanceof PropelCollection) {
			return $this
				->useNagiosTimeperiodExcludeRelatedByTimeperiodIdQuery()
					->filterByPrimaryKeys($nagiosTimeperiodExclude->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosTimeperiodExcludeRelatedByTimeperiodId() only accepts arguments of type NagiosTimeperiodExclude or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosTimeperiodExcludeRelatedByTimeperiodId relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function joinNagiosTimeperiodExcludeRelatedByTimeperiodId($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosTimeperiodExcludeRelatedByTimeperiodId');
		
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
			$this->addJoinObject($join, 'NagiosTimeperiodExcludeRelatedByTimeperiodId');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosTimeperiodExcludeRelatedByTimeperiodId relation NagiosTimeperiodExclude object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosTimeperiodExcludeQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosTimeperiodExcludeRelatedByTimeperiodIdQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosTimeperiodExcludeRelatedByTimeperiodId($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosTimeperiodExcludeRelatedByTimeperiodId', 'NagiosTimeperiodExcludeQuery');
	}

	/**
	 * Filter the query by a related NagiosTimeperiodExclude object
	 *
	 * @param     NagiosTimeperiodExclude $nagiosTimeperiodExclude  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function filterByNagiosTimeperiodExcludeRelatedByExcludedTimeperiod($nagiosTimeperiodExclude, $comparison = null)
	{
		if ($nagiosTimeperiodExclude instanceof NagiosTimeperiodExclude) {
			return $this
				->addUsingAlias(NagiosTimeperiodPeer::ID, $nagiosTimeperiodExclude->getExcludedTimeperiod(), $comparison);
		} elseif ($nagiosTimeperiodExclude instanceof PropelCollection) {
			return $this
				->useNagiosTimeperiodExcludeRelatedByExcludedTimeperiodQuery()
					->filterByPrimaryKeys($nagiosTimeperiodExclude->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosTimeperiodExcludeRelatedByExcludedTimeperiod() only accepts arguments of type NagiosTimeperiodExclude or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosTimeperiodExcludeRelatedByExcludedTimeperiod relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function joinNagiosTimeperiodExcludeRelatedByExcludedTimeperiod($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosTimeperiodExcludeRelatedByExcludedTimeperiod');
		
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
			$this->addJoinObject($join, 'NagiosTimeperiodExcludeRelatedByExcludedTimeperiod');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosTimeperiodExcludeRelatedByExcludedTimeperiod relation NagiosTimeperiodExclude object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosTimeperiodExcludeQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosTimeperiodExcludeRelatedByExcludedTimeperiodQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosTimeperiodExcludeRelatedByExcludedTimeperiod($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosTimeperiodExcludeRelatedByExcludedTimeperiod', 'NagiosTimeperiodExcludeQuery');
	}

	/**
	 * Filter the query by a related NagiosContact object
	 *
	 * @param     NagiosContact $nagiosContact  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function filterByNagiosContactRelatedByHostNotificationPeriod($nagiosContact, $comparison = null)
	{
		if ($nagiosContact instanceof NagiosContact) {
			return $this
				->addUsingAlias(NagiosTimeperiodPeer::ID, $nagiosContact->getHostNotificationPeriod(), $comparison);
		} elseif ($nagiosContact instanceof PropelCollection) {
			return $this
				->useNagiosContactRelatedByHostNotificationPeriodQuery()
					->filterByPrimaryKeys($nagiosContact->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosContactRelatedByHostNotificationPeriod() only accepts arguments of type NagiosContact or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosContactRelatedByHostNotificationPeriod relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function joinNagiosContactRelatedByHostNotificationPeriod($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosContactRelatedByHostNotificationPeriod');
		
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
			$this->addJoinObject($join, 'NagiosContactRelatedByHostNotificationPeriod');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosContactRelatedByHostNotificationPeriod relation NagiosContact object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosContactQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosContactRelatedByHostNotificationPeriodQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosContactRelatedByHostNotificationPeriod($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosContactRelatedByHostNotificationPeriod', 'NagiosContactQuery');
	}

	/**
	 * Filter the query by a related NagiosContact object
	 *
	 * @param     NagiosContact $nagiosContact  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function filterByNagiosContactRelatedByServiceNotificationPeriod($nagiosContact, $comparison = null)
	{
		if ($nagiosContact instanceof NagiosContact) {
			return $this
				->addUsingAlias(NagiosTimeperiodPeer::ID, $nagiosContact->getServiceNotificationPeriod(), $comparison);
		} elseif ($nagiosContact instanceof PropelCollection) {
			return $this
				->useNagiosContactRelatedByServiceNotificationPeriodQuery()
					->filterByPrimaryKeys($nagiosContact->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosContactRelatedByServiceNotificationPeriod() only accepts arguments of type NagiosContact or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosContactRelatedByServiceNotificationPeriod relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function joinNagiosContactRelatedByServiceNotificationPeriod($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosContactRelatedByServiceNotificationPeriod');
		
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
			$this->addJoinObject($join, 'NagiosContactRelatedByServiceNotificationPeriod');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosContactRelatedByServiceNotificationPeriod relation NagiosContact object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosContactQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosContactRelatedByServiceNotificationPeriodQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosContactRelatedByServiceNotificationPeriod($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosContactRelatedByServiceNotificationPeriod', 'NagiosContactQuery');
	}

	/**
	 * Filter the query by a related NagiosHostTemplate object
	 *
	 * @param     NagiosHostTemplate $nagiosHostTemplate  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostTemplateRelatedByCheckPeriod($nagiosHostTemplate, $comparison = null)
	{
		if ($nagiosHostTemplate instanceof NagiosHostTemplate) {
			return $this
				->addUsingAlias(NagiosTimeperiodPeer::ID, $nagiosHostTemplate->getCheckPeriod(), $comparison);
		} elseif ($nagiosHostTemplate instanceof PropelCollection) {
			return $this
				->useNagiosHostTemplateRelatedByCheckPeriodQuery()
					->filterByPrimaryKeys($nagiosHostTemplate->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosHostTemplateRelatedByCheckPeriod() only accepts arguments of type NagiosHostTemplate or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosHostTemplateRelatedByCheckPeriod relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function joinNagiosHostTemplateRelatedByCheckPeriod($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosHostTemplateRelatedByCheckPeriod');
		
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
			$this->addJoinObject($join, 'NagiosHostTemplateRelatedByCheckPeriod');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosHostTemplateRelatedByCheckPeriod relation NagiosHostTemplate object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostTemplateQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosHostTemplateRelatedByCheckPeriodQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosHostTemplateRelatedByCheckPeriod($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosHostTemplateRelatedByCheckPeriod', 'NagiosHostTemplateQuery');
	}

	/**
	 * Filter the query by a related NagiosHostTemplate object
	 *
	 * @param     NagiosHostTemplate $nagiosHostTemplate  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostTemplateRelatedByNotificationPeriod($nagiosHostTemplate, $comparison = null)
	{
		if ($nagiosHostTemplate instanceof NagiosHostTemplate) {
			return $this
				->addUsingAlias(NagiosTimeperiodPeer::ID, $nagiosHostTemplate->getNotificationPeriod(), $comparison);
		} elseif ($nagiosHostTemplate instanceof PropelCollection) {
			return $this
				->useNagiosHostTemplateRelatedByNotificationPeriodQuery()
					->filterByPrimaryKeys($nagiosHostTemplate->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosHostTemplateRelatedByNotificationPeriod() only accepts arguments of type NagiosHostTemplate or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosHostTemplateRelatedByNotificationPeriod relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function joinNagiosHostTemplateRelatedByNotificationPeriod($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosHostTemplateRelatedByNotificationPeriod');
		
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
			$this->addJoinObject($join, 'NagiosHostTemplateRelatedByNotificationPeriod');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosHostTemplateRelatedByNotificationPeriod relation NagiosHostTemplate object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostTemplateQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosHostTemplateRelatedByNotificationPeriodQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosHostTemplateRelatedByNotificationPeriod($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosHostTemplateRelatedByNotificationPeriod', 'NagiosHostTemplateQuery');
	}

	/**
	 * Filter the query by a related NagiosHost object
	 *
	 * @param     NagiosHost $nagiosHost  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostRelatedByCheckPeriod($nagiosHost, $comparison = null)
	{
		if ($nagiosHost instanceof NagiosHost) {
			return $this
				->addUsingAlias(NagiosTimeperiodPeer::ID, $nagiosHost->getCheckPeriod(), $comparison);
		} elseif ($nagiosHost instanceof PropelCollection) {
			return $this
				->useNagiosHostRelatedByCheckPeriodQuery()
					->filterByPrimaryKeys($nagiosHost->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosHostRelatedByCheckPeriod() only accepts arguments of type NagiosHost or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosHostRelatedByCheckPeriod relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function joinNagiosHostRelatedByCheckPeriod($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosHostRelatedByCheckPeriod');
		
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
			$this->addJoinObject($join, 'NagiosHostRelatedByCheckPeriod');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosHostRelatedByCheckPeriod relation NagiosHost object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosHostRelatedByCheckPeriodQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosHostRelatedByCheckPeriod($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosHostRelatedByCheckPeriod', 'NagiosHostQuery');
	}

	/**
	 * Filter the query by a related NagiosHost object
	 *
	 * @param     NagiosHost $nagiosHost  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostRelatedByNotificationPeriod($nagiosHost, $comparison = null)
	{
		if ($nagiosHost instanceof NagiosHost) {
			return $this
				->addUsingAlias(NagiosTimeperiodPeer::ID, $nagiosHost->getNotificationPeriod(), $comparison);
		} elseif ($nagiosHost instanceof PropelCollection) {
			return $this
				->useNagiosHostRelatedByNotificationPeriodQuery()
					->filterByPrimaryKeys($nagiosHost->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosHostRelatedByNotificationPeriod() only accepts arguments of type NagiosHost or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosHostRelatedByNotificationPeriod relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function joinNagiosHostRelatedByNotificationPeriod($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosHostRelatedByNotificationPeriod');
		
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
			$this->addJoinObject($join, 'NagiosHostRelatedByNotificationPeriod');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosHostRelatedByNotificationPeriod relation NagiosHost object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosHostRelatedByNotificationPeriodQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosHostRelatedByNotificationPeriod($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosHostRelatedByNotificationPeriod', 'NagiosHostQuery');
	}

	/**
	 * Filter the query by a related NagiosServiceTemplate object
	 *
	 * @param     NagiosServiceTemplate $nagiosServiceTemplate  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function filterByNagiosServiceTemplateRelatedByCheckPeriod($nagiosServiceTemplate, $comparison = null)
	{
		if ($nagiosServiceTemplate instanceof NagiosServiceTemplate) {
			return $this
				->addUsingAlias(NagiosTimeperiodPeer::ID, $nagiosServiceTemplate->getCheckPeriod(), $comparison);
		} elseif ($nagiosServiceTemplate instanceof PropelCollection) {
			return $this
				->useNagiosServiceTemplateRelatedByCheckPeriodQuery()
					->filterByPrimaryKeys($nagiosServiceTemplate->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosServiceTemplateRelatedByCheckPeriod() only accepts arguments of type NagiosServiceTemplate or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosServiceTemplateRelatedByCheckPeriod relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function joinNagiosServiceTemplateRelatedByCheckPeriod($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosServiceTemplateRelatedByCheckPeriod');
		
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
			$this->addJoinObject($join, 'NagiosServiceTemplateRelatedByCheckPeriod');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosServiceTemplateRelatedByCheckPeriod relation NagiosServiceTemplate object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceTemplateQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosServiceTemplateRelatedByCheckPeriodQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosServiceTemplateRelatedByCheckPeriod($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosServiceTemplateRelatedByCheckPeriod', 'NagiosServiceTemplateQuery');
	}

	/**
	 * Filter the query by a related NagiosServiceTemplate object
	 *
	 * @param     NagiosServiceTemplate $nagiosServiceTemplate  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function filterByNagiosServiceTemplateRelatedByNotificationPeriod($nagiosServiceTemplate, $comparison = null)
	{
		if ($nagiosServiceTemplate instanceof NagiosServiceTemplate) {
			return $this
				->addUsingAlias(NagiosTimeperiodPeer::ID, $nagiosServiceTemplate->getNotificationPeriod(), $comparison);
		} elseif ($nagiosServiceTemplate instanceof PropelCollection) {
			return $this
				->useNagiosServiceTemplateRelatedByNotificationPeriodQuery()
					->filterByPrimaryKeys($nagiosServiceTemplate->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosServiceTemplateRelatedByNotificationPeriod() only accepts arguments of type NagiosServiceTemplate or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosServiceTemplateRelatedByNotificationPeriod relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function joinNagiosServiceTemplateRelatedByNotificationPeriod($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosServiceTemplateRelatedByNotificationPeriod');
		
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
			$this->addJoinObject($join, 'NagiosServiceTemplateRelatedByNotificationPeriod');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosServiceTemplateRelatedByNotificationPeriod relation NagiosServiceTemplate object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceTemplateQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosServiceTemplateRelatedByNotificationPeriodQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosServiceTemplateRelatedByNotificationPeriod($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosServiceTemplateRelatedByNotificationPeriod', 'NagiosServiceTemplateQuery');
	}

	/**
	 * Filter the query by a related NagiosService object
	 *
	 * @param     NagiosService $nagiosService  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function filterByNagiosServiceRelatedByCheckPeriod($nagiosService, $comparison = null)
	{
		if ($nagiosService instanceof NagiosService) {
			return $this
				->addUsingAlias(NagiosTimeperiodPeer::ID, $nagiosService->getCheckPeriod(), $comparison);
		} elseif ($nagiosService instanceof PropelCollection) {
			return $this
				->useNagiosServiceRelatedByCheckPeriodQuery()
					->filterByPrimaryKeys($nagiosService->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosServiceRelatedByCheckPeriod() only accepts arguments of type NagiosService or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosServiceRelatedByCheckPeriod relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function joinNagiosServiceRelatedByCheckPeriod($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosServiceRelatedByCheckPeriod');
		
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
			$this->addJoinObject($join, 'NagiosServiceRelatedByCheckPeriod');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosServiceRelatedByCheckPeriod relation NagiosService object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosServiceRelatedByCheckPeriodQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosServiceRelatedByCheckPeriod($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosServiceRelatedByCheckPeriod', 'NagiosServiceQuery');
	}

	/**
	 * Filter the query by a related NagiosService object
	 *
	 * @param     NagiosService $nagiosService  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function filterByNagiosServiceRelatedByNotificationPeriod($nagiosService, $comparison = null)
	{
		if ($nagiosService instanceof NagiosService) {
			return $this
				->addUsingAlias(NagiosTimeperiodPeer::ID, $nagiosService->getNotificationPeriod(), $comparison);
		} elseif ($nagiosService instanceof PropelCollection) {
			return $this
				->useNagiosServiceRelatedByNotificationPeriodQuery()
					->filterByPrimaryKeys($nagiosService->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosServiceRelatedByNotificationPeriod() only accepts arguments of type NagiosService or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosServiceRelatedByNotificationPeriod relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function joinNagiosServiceRelatedByNotificationPeriod($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosServiceRelatedByNotificationPeriod');
		
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
			$this->addJoinObject($join, 'NagiosServiceRelatedByNotificationPeriod');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosServiceRelatedByNotificationPeriod relation NagiosService object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosServiceRelatedByNotificationPeriodQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosServiceRelatedByNotificationPeriod($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosServiceRelatedByNotificationPeriod', 'NagiosServiceQuery');
	}

	/**
	 * Filter the query by a related NagiosDependency object
	 *
	 * @param     NagiosDependency $nagiosDependency  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function filterByNagiosDependency($nagiosDependency, $comparison = null)
	{
		if ($nagiosDependency instanceof NagiosDependency) {
			return $this
				->addUsingAlias(NagiosTimeperiodPeer::ID, $nagiosDependency->getDependencyPeriod(), $comparison);
		} elseif ($nagiosDependency instanceof PropelCollection) {
			return $this
				->useNagiosDependencyQuery()
					->filterByPrimaryKeys($nagiosDependency->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosDependency() only accepts arguments of type NagiosDependency or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosDependency relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function joinNagiosDependency($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosDependency');
		
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
			$this->addJoinObject($join, 'NagiosDependency');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosDependency relation NagiosDependency object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosDependencyQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosDependencyQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosDependency($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosDependency', 'NagiosDependencyQuery');
	}

	/**
	 * Filter the query by a related NagiosEscalation object
	 *
	 * @param     NagiosEscalation $nagiosEscalation  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function filterByNagiosEscalation($nagiosEscalation, $comparison = null)
	{
		if ($nagiosEscalation instanceof NagiosEscalation) {
			return $this
				->addUsingAlias(NagiosTimeperiodPeer::ID, $nagiosEscalation->getEscalationPeriod(), $comparison);
		} elseif ($nagiosEscalation instanceof PropelCollection) {
			return $this
				->useNagiosEscalationQuery()
					->filterByPrimaryKeys($nagiosEscalation->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosEscalation() only accepts arguments of type NagiosEscalation or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosEscalation relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function joinNagiosEscalation($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosEscalation');
		
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
			$this->addJoinObject($join, 'NagiosEscalation');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosEscalation relation NagiosEscalation object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosEscalationQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosEscalationQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosEscalation($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosEscalation', 'NagiosEscalationQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     NagiosTimeperiod $nagiosTimeperiod Object to remove from the list of results
	 *
	 * @return    NagiosTimeperiodQuery The current query, for fluid interface
	 */
	public function prune($nagiosTimeperiod = null)
	{
		if ($nagiosTimeperiod) {
			$this->addUsingAlias(NagiosTimeperiodPeer::ID, $nagiosTimeperiod->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseNagiosTimeperiodQuery
