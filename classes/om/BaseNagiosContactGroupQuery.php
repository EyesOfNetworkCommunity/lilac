<?php


/**
 * Base class that represents a query for the 'nagios_contact_group' table.
 *
 * Nagios Contact Group
 *
 * @method     NagiosContactGroupQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NagiosContactGroupQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     NagiosContactGroupQuery orderByAlias($order = Criteria::ASC) Order by the alias column
 *
 * @method     NagiosContactGroupQuery groupById() Group by the id column
 * @method     NagiosContactGroupQuery groupByName() Group by the name column
 * @method     NagiosContactGroupQuery groupByAlias() Group by the alias column
 *
 * @method     NagiosContactGroupQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NagiosContactGroupQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NagiosContactGroupQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NagiosContactGroupQuery leftJoinNagiosContactGroupMember($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosContactGroupMember relation
 * @method     NagiosContactGroupQuery rightJoinNagiosContactGroupMember($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosContactGroupMember relation
 * @method     NagiosContactGroupQuery innerJoinNagiosContactGroupMember($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosContactGroupMember relation
 *
 * @method     NagiosContactGroupQuery leftJoinNagiosServiceContactGroupMember($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosServiceContactGroupMember relation
 * @method     NagiosContactGroupQuery rightJoinNagiosServiceContactGroupMember($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosServiceContactGroupMember relation
 * @method     NagiosContactGroupQuery innerJoinNagiosServiceContactGroupMember($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosServiceContactGroupMember relation
 *
 * @method     NagiosContactGroupQuery leftJoinNagiosEscalationContactgroup($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosEscalationContactgroup relation
 * @method     NagiosContactGroupQuery rightJoinNagiosEscalationContactgroup($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosEscalationContactgroup relation
 * @method     NagiosContactGroupQuery innerJoinNagiosEscalationContactgroup($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosEscalationContactgroup relation
 *
 * @method     NagiosContactGroupQuery leftJoinNagiosHostContactgroup($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostContactgroup relation
 * @method     NagiosContactGroupQuery rightJoinNagiosHostContactgroup($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostContactgroup relation
 * @method     NagiosContactGroupQuery innerJoinNagiosHostContactgroup($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostContactgroup relation
 *
 * @method     NagiosContactGroup findOne(PropelPDO $con = null) Return the first NagiosContactGroup matching the query
 * @method     NagiosContactGroup findOneOrCreate(PropelPDO $con = null) Return the first NagiosContactGroup matching the query, or a new NagiosContactGroup object populated from the query conditions when no match is found
 *
 * @method     NagiosContactGroup findOneById(int $id) Return the first NagiosContactGroup filtered by the id column
 * @method     NagiosContactGroup findOneByName(string $name) Return the first NagiosContactGroup filtered by the name column
 * @method     NagiosContactGroup findOneByAlias(string $alias) Return the first NagiosContactGroup filtered by the alias column
 *
 * @method     array findById(int $id) Return NagiosContactGroup objects filtered by the id column
 * @method     array findByName(string $name) Return NagiosContactGroup objects filtered by the name column
 * @method     array findByAlias(string $alias) Return NagiosContactGroup objects filtered by the alias column
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosContactGroupQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNagiosContactGroupQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'NagiosContactGroup', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NagiosContactGroupQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NagiosContactGroupQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NagiosContactGroupQuery) {
			return $criteria;
		}
		$query = new NagiosContactGroupQuery();
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
	 * @return    NagiosContactGroup|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NagiosContactGroupPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    NagiosContactGroupQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NagiosContactGroupPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NagiosContactGroupQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NagiosContactGroupPeer::ID, $keys, Criteria::IN);
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
	 * @return    NagiosContactGroupQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NagiosContactGroupPeer::ID, $id, $comparison);
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
	 * @return    NagiosContactGroupQuery The current query, for fluid interface
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
		return $this->addUsingAlias(NagiosContactGroupPeer::NAME, $name, $comparison);
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
	 * @return    NagiosContactGroupQuery The current query, for fluid interface
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
		return $this->addUsingAlias(NagiosContactGroupPeer::ALIAS, $alias, $comparison);
	}

	/**
	 * Filter the query by a related NagiosContactGroupMember object
	 *
	 * @param     NagiosContactGroupMember $nagiosContactGroupMember  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactGroupQuery The current query, for fluid interface
	 */
	public function filterByNagiosContactGroupMember($nagiosContactGroupMember, $comparison = null)
	{
		if ($nagiosContactGroupMember instanceof NagiosContactGroupMember) {
			return $this
				->addUsingAlias(NagiosContactGroupPeer::ID, $nagiosContactGroupMember->getContactgroup(), $comparison);
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
	 * @return    NagiosContactGroupQuery The current query, for fluid interface
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
	 * Filter the query by a related NagiosServiceContactGroupMember object
	 *
	 * @param     NagiosServiceContactGroupMember $nagiosServiceContactGroupMember  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactGroupQuery The current query, for fluid interface
	 */
	public function filterByNagiosServiceContactGroupMember($nagiosServiceContactGroupMember, $comparison = null)
	{
		if ($nagiosServiceContactGroupMember instanceof NagiosServiceContactGroupMember) {
			return $this
				->addUsingAlias(NagiosContactGroupPeer::ID, $nagiosServiceContactGroupMember->getContactGroup(), $comparison);
		} elseif ($nagiosServiceContactGroupMember instanceof PropelCollection) {
			return $this
				->useNagiosServiceContactGroupMemberQuery()
					->filterByPrimaryKeys($nagiosServiceContactGroupMember->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosServiceContactGroupMember() only accepts arguments of type NagiosServiceContactGroupMember or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosServiceContactGroupMember relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosContactGroupQuery The current query, for fluid interface
	 */
	public function joinNagiosServiceContactGroupMember($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosServiceContactGroupMember');
		
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
			$this->addJoinObject($join, 'NagiosServiceContactGroupMember');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosServiceContactGroupMember relation NagiosServiceContactGroupMember object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceContactGroupMemberQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosServiceContactGroupMemberQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosServiceContactGroupMember($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosServiceContactGroupMember', 'NagiosServiceContactGroupMemberQuery');
	}

	/**
	 * Filter the query by a related NagiosEscalationContactgroup object
	 *
	 * @param     NagiosEscalationContactgroup $nagiosEscalationContactgroup  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactGroupQuery The current query, for fluid interface
	 */
	public function filterByNagiosEscalationContactgroup($nagiosEscalationContactgroup, $comparison = null)
	{
		if ($nagiosEscalationContactgroup instanceof NagiosEscalationContactgroup) {
			return $this
				->addUsingAlias(NagiosContactGroupPeer::ID, $nagiosEscalationContactgroup->getContactgroup(), $comparison);
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
	 * @return    NagiosContactGroupQuery The current query, for fluid interface
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
	 * Filter the query by a related NagiosHostContactgroup object
	 *
	 * @param     NagiosHostContactgroup $nagiosHostContactgroup  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactGroupQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostContactgroup($nagiosHostContactgroup, $comparison = null)
	{
		if ($nagiosHostContactgroup instanceof NagiosHostContactgroup) {
			return $this
				->addUsingAlias(NagiosContactGroupPeer::ID, $nagiosHostContactgroup->getContactgroup(), $comparison);
		} elseif ($nagiosHostContactgroup instanceof PropelCollection) {
			return $this
				->useNagiosHostContactgroupQuery()
					->filterByPrimaryKeys($nagiosHostContactgroup->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosHostContactgroup() only accepts arguments of type NagiosHostContactgroup or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosHostContactgroup relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosContactGroupQuery The current query, for fluid interface
	 */
	public function joinNagiosHostContactgroup($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosHostContactgroup');
		
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
			$this->addJoinObject($join, 'NagiosHostContactgroup');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosHostContactgroup relation NagiosHostContactgroup object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostContactgroupQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosHostContactgroupQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinNagiosHostContactgroup($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosHostContactgroup', 'NagiosHostContactgroupQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     NagiosContactGroup $nagiosContactGroup Object to remove from the list of results
	 *
	 * @return    NagiosContactGroupQuery The current query, for fluid interface
	 */
	public function prune($nagiosContactGroup = null)
	{
		if ($nagiosContactGroup) {
			$this->addUsingAlias(NagiosContactGroupPeer::ID, $nagiosContactGroup->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseNagiosContactGroupQuery
