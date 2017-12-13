<?php


/**
 * Base class that represents a query for the 'nagios_hostgroup_membership' table.
 *
 * Hostgroup Membership for Host
 *
 * @method     NagiosHostgroupMembershipQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NagiosHostgroupMembershipQuery orderByHost($order = Criteria::ASC) Order by the host column
 * @method     NagiosHostgroupMembershipQuery orderByHostTemplate($order = Criteria::ASC) Order by the host_template column
 * @method     NagiosHostgroupMembershipQuery orderByHostgroup($order = Criteria::ASC) Order by the hostgroup column
 *
 * @method     NagiosHostgroupMembershipQuery groupById() Group by the id column
 * @method     NagiosHostgroupMembershipQuery groupByHost() Group by the host column
 * @method     NagiosHostgroupMembershipQuery groupByHostTemplate() Group by the host_template column
 * @method     NagiosHostgroupMembershipQuery groupByHostgroup() Group by the hostgroup column
 *
 * @method     NagiosHostgroupMembershipQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NagiosHostgroupMembershipQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NagiosHostgroupMembershipQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NagiosHostgroupMembershipQuery leftJoinNagiosHost($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHost relation
 * @method     NagiosHostgroupMembershipQuery rightJoinNagiosHost($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHost relation
 * @method     NagiosHostgroupMembershipQuery innerJoinNagiosHost($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHost relation
 *
 * @method     NagiosHostgroupMembershipQuery leftJoinNagiosHostTemplate($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostTemplate relation
 * @method     NagiosHostgroupMembershipQuery rightJoinNagiosHostTemplate($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostTemplate relation
 * @method     NagiosHostgroupMembershipQuery innerJoinNagiosHostTemplate($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostTemplate relation
 *
 * @method     NagiosHostgroupMembershipQuery leftJoinNagiosHostgroup($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostgroup relation
 * @method     NagiosHostgroupMembershipQuery rightJoinNagiosHostgroup($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostgroup relation
 * @method     NagiosHostgroupMembershipQuery innerJoinNagiosHostgroup($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostgroup relation
 *
 * @method     NagiosHostgroupMembership findOne(PropelPDO $con = null) Return the first NagiosHostgroupMembership matching the query
 * @method     NagiosHostgroupMembership findOneOrCreate(PropelPDO $con = null) Return the first NagiosHostgroupMembership matching the query, or a new NagiosHostgroupMembership object populated from the query conditions when no match is found
 *
 * @method     NagiosHostgroupMembership findOneById(int $id) Return the first NagiosHostgroupMembership filtered by the id column
 * @method     NagiosHostgroupMembership findOneByHost(int $host) Return the first NagiosHostgroupMembership filtered by the host column
 * @method     NagiosHostgroupMembership findOneByHostTemplate(int $host_template) Return the first NagiosHostgroupMembership filtered by the host_template column
 * @method     NagiosHostgroupMembership findOneByHostgroup(int $hostgroup) Return the first NagiosHostgroupMembership filtered by the hostgroup column
 *
 * @method     array findById(int $id) Return NagiosHostgroupMembership objects filtered by the id column
 * @method     array findByHost(int $host) Return NagiosHostgroupMembership objects filtered by the host column
 * @method     array findByHostTemplate(int $host_template) Return NagiosHostgroupMembership objects filtered by the host_template column
 * @method     array findByHostgroup(int $hostgroup) Return NagiosHostgroupMembership objects filtered by the hostgroup column
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosHostgroupMembershipQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNagiosHostgroupMembershipQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'NagiosHostgroupMembership', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NagiosHostgroupMembershipQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NagiosHostgroupMembershipQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NagiosHostgroupMembershipQuery) {
			return $criteria;
		}
		$query = new NagiosHostgroupMembershipQuery();
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
	 * @return    NagiosHostgroupMembership|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NagiosHostgroupMembershipPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    NagiosHostgroupMembershipQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NagiosHostgroupMembershipPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NagiosHostgroupMembershipQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NagiosHostgroupMembershipPeer::ID, $keys, Criteria::IN);
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
	 * @return    NagiosHostgroupMembershipQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NagiosHostgroupMembershipPeer::ID, $id, $comparison);
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
	 * @return    NagiosHostgroupMembershipQuery The current query, for fluid interface
	 */
	public function filterByHost($host = null, $comparison = null)
	{
		if (is_array($host)) {
			$useMinMax = false;
			if (isset($host['min'])) {
				$this->addUsingAlias(NagiosHostgroupMembershipPeer::HOST, $host['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($host['max'])) {
				$this->addUsingAlias(NagiosHostgroupMembershipPeer::HOST, $host['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosHostgroupMembershipPeer::HOST, $host, $comparison);
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
	 * @return    NagiosHostgroupMembershipQuery The current query, for fluid interface
	 */
	public function filterByHostTemplate($hostTemplate = null, $comparison = null)
	{
		if (is_array($hostTemplate)) {
			$useMinMax = false;
			if (isset($hostTemplate['min'])) {
				$this->addUsingAlias(NagiosHostgroupMembershipPeer::HOST_TEMPLATE, $hostTemplate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($hostTemplate['max'])) {
				$this->addUsingAlias(NagiosHostgroupMembershipPeer::HOST_TEMPLATE, $hostTemplate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosHostgroupMembershipPeer::HOST_TEMPLATE, $hostTemplate, $comparison);
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
	 * @return    NagiosHostgroupMembershipQuery The current query, for fluid interface
	 */
	public function filterByHostgroup($hostgroup = null, $comparison = null)
	{
		if (is_array($hostgroup)) {
			$useMinMax = false;
			if (isset($hostgroup['min'])) {
				$this->addUsingAlias(NagiosHostgroupMembershipPeer::HOSTGROUP, $hostgroup['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($hostgroup['max'])) {
				$this->addUsingAlias(NagiosHostgroupMembershipPeer::HOSTGROUP, $hostgroup['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosHostgroupMembershipPeer::HOSTGROUP, $hostgroup, $comparison);
	}

	/**
	 * Filter the query by a related NagiosHost object
	 *
	 * @param     NagiosHost|PropelCollection $nagiosHost The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostgroupMembershipQuery The current query, for fluid interface
	 */
	public function filterByNagiosHost($nagiosHost, $comparison = null)
	{
		if ($nagiosHost instanceof NagiosHost) {
			return $this
				->addUsingAlias(NagiosHostgroupMembershipPeer::HOST, $nagiosHost->getId(), $comparison);
		} elseif ($nagiosHost instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosHostgroupMembershipPeer::HOST, $nagiosHost->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosHostgroupMembershipQuery The current query, for fluid interface
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
	 * Filter the query by a related NagiosHostTemplate object
	 *
	 * @param     NagiosHostTemplate|PropelCollection $nagiosHostTemplate The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostgroupMembershipQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostTemplate($nagiosHostTemplate, $comparison = null)
	{
		if ($nagiosHostTemplate instanceof NagiosHostTemplate) {
			return $this
				->addUsingAlias(NagiosHostgroupMembershipPeer::HOST_TEMPLATE, $nagiosHostTemplate->getId(), $comparison);
		} elseif ($nagiosHostTemplate instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosHostgroupMembershipPeer::HOST_TEMPLATE, $nagiosHostTemplate->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosHostgroupMembershipQuery The current query, for fluid interface
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
	 * Filter the query by a related NagiosHostgroup object
	 *
	 * @param     NagiosHostgroup|PropelCollection $nagiosHostgroup The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostgroupMembershipQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostgroup($nagiosHostgroup, $comparison = null)
	{
		if ($nagiosHostgroup instanceof NagiosHostgroup) {
			return $this
				->addUsingAlias(NagiosHostgroupMembershipPeer::HOSTGROUP, $nagiosHostgroup->getId(), $comparison);
		} elseif ($nagiosHostgroup instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosHostgroupMembershipPeer::HOSTGROUP, $nagiosHostgroup->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosHostgroupMembershipQuery The current query, for fluid interface
	 */
	public function joinNagiosHostgroup($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
	public function useNagiosHostgroupQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinNagiosHostgroup($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosHostgroup', 'NagiosHostgroupQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     NagiosHostgroupMembership $nagiosHostgroupMembership Object to remove from the list of results
	 *
	 * @return    NagiosHostgroupMembershipQuery The current query, for fluid interface
	 */
	public function prune($nagiosHostgroupMembership = null)
	{
		if ($nagiosHostgroupMembership) {
			$this->addUsingAlias(NagiosHostgroupMembershipPeer::ID, $nagiosHostgroupMembership->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseNagiosHostgroupMembershipQuery
