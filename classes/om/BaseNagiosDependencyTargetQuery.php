<?php


/**
 * Base class that represents a query for the 'nagios_dependency_target' table.
 *
 * Targets for a Dependency
 *
 * @method     NagiosDependencyTargetQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NagiosDependencyTargetQuery orderByDependency($order = Criteria::ASC) Order by the dependency column
 * @method     NagiosDependencyTargetQuery orderByTargetHost($order = Criteria::ASC) Order by the target_host column
 * @method     NagiosDependencyTargetQuery orderByTargetService($order = Criteria::ASC) Order by the target_service column
 * @method     NagiosDependencyTargetQuery orderByTargetHostgroup($order = Criteria::ASC) Order by the target_hostgroup column
 *
 * @method     NagiosDependencyTargetQuery groupById() Group by the id column
 * @method     NagiosDependencyTargetQuery groupByDependency() Group by the dependency column
 * @method     NagiosDependencyTargetQuery groupByTargetHost() Group by the target_host column
 * @method     NagiosDependencyTargetQuery groupByTargetService() Group by the target_service column
 * @method     NagiosDependencyTargetQuery groupByTargetHostgroup() Group by the target_hostgroup column
 *
 * @method     NagiosDependencyTargetQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NagiosDependencyTargetQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NagiosDependencyTargetQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NagiosDependencyTargetQuery leftJoinNagiosDependency($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosDependency relation
 * @method     NagiosDependencyTargetQuery rightJoinNagiosDependency($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosDependency relation
 * @method     NagiosDependencyTargetQuery innerJoinNagiosDependency($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosDependency relation
 *
 * @method     NagiosDependencyTargetQuery leftJoinNagiosHost($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHost relation
 * @method     NagiosDependencyTargetQuery rightJoinNagiosHost($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHost relation
 * @method     NagiosDependencyTargetQuery innerJoinNagiosHost($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHost relation
 *
 * @method     NagiosDependencyTargetQuery leftJoinNagiosService($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosService relation
 * @method     NagiosDependencyTargetQuery rightJoinNagiosService($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosService relation
 * @method     NagiosDependencyTargetQuery innerJoinNagiosService($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosService relation
 *
 * @method     NagiosDependencyTargetQuery leftJoinNagiosHostgroup($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostgroup relation
 * @method     NagiosDependencyTargetQuery rightJoinNagiosHostgroup($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostgroup relation
 * @method     NagiosDependencyTargetQuery innerJoinNagiosHostgroup($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostgroup relation
 *
 * @method     NagiosDependencyTarget findOne(PropelPDO $con = null) Return the first NagiosDependencyTarget matching the query
 * @method     NagiosDependencyTarget findOneOrCreate(PropelPDO $con = null) Return the first NagiosDependencyTarget matching the query, or a new NagiosDependencyTarget object populated from the query conditions when no match is found
 *
 * @method     NagiosDependencyTarget findOneById(int $id) Return the first NagiosDependencyTarget filtered by the id column
 * @method     NagiosDependencyTarget findOneByDependency(int $dependency) Return the first NagiosDependencyTarget filtered by the dependency column
 * @method     NagiosDependencyTarget findOneByTargetHost(int $target_host) Return the first NagiosDependencyTarget filtered by the target_host column
 * @method     NagiosDependencyTarget findOneByTargetService(int $target_service) Return the first NagiosDependencyTarget filtered by the target_service column
 * @method     NagiosDependencyTarget findOneByTargetHostgroup(int $target_hostgroup) Return the first NagiosDependencyTarget filtered by the target_hostgroup column
 *
 * @method     array findById(int $id) Return NagiosDependencyTarget objects filtered by the id column
 * @method     array findByDependency(int $dependency) Return NagiosDependencyTarget objects filtered by the dependency column
 * @method     array findByTargetHost(int $target_host) Return NagiosDependencyTarget objects filtered by the target_host column
 * @method     array findByTargetService(int $target_service) Return NagiosDependencyTarget objects filtered by the target_service column
 * @method     array findByTargetHostgroup(int $target_hostgroup) Return NagiosDependencyTarget objects filtered by the target_hostgroup column
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosDependencyTargetQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNagiosDependencyTargetQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'NagiosDependencyTarget', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NagiosDependencyTargetQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NagiosDependencyTargetQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NagiosDependencyTargetQuery) {
			return $criteria;
		}
		$query = new NagiosDependencyTargetQuery();
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
	 * @return    NagiosDependencyTarget|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NagiosDependencyTargetPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    NagiosDependencyTargetQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NagiosDependencyTargetPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NagiosDependencyTargetQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NagiosDependencyTargetPeer::ID, $keys, Criteria::IN);
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
	 * @return    NagiosDependencyTargetQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NagiosDependencyTargetPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the dependency column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByDependency(1234); // WHERE dependency = 1234
	 * $query->filterByDependency(array(12, 34)); // WHERE dependency IN (12, 34)
	 * $query->filterByDependency(array('min' => 12)); // WHERE dependency > 12
	 * </code>
	 *
	 * @see       filterByNagiosDependency()
	 *
	 * @param     mixed $dependency The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyTargetQuery The current query, for fluid interface
	 */
	public function filterByDependency($dependency = null, $comparison = null)
	{
		if (is_array($dependency)) {
			$useMinMax = false;
			if (isset($dependency['min'])) {
				$this->addUsingAlias(NagiosDependencyTargetPeer::DEPENDENCY, $dependency['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dependency['max'])) {
				$this->addUsingAlias(NagiosDependencyTargetPeer::DEPENDENCY, $dependency['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosDependencyTargetPeer::DEPENDENCY, $dependency, $comparison);
	}

	/**
	 * Filter the query on the target_host column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByTargetHost(1234); // WHERE target_host = 1234
	 * $query->filterByTargetHost(array(12, 34)); // WHERE target_host IN (12, 34)
	 * $query->filterByTargetHost(array('min' => 12)); // WHERE target_host > 12
	 * </code>
	 *
	 * @see       filterByNagiosHost()
	 *
	 * @param     mixed $targetHost The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyTargetQuery The current query, for fluid interface
	 */
	public function filterByTargetHost($targetHost = null, $comparison = null)
	{
		if (is_array($targetHost)) {
			$useMinMax = false;
			if (isset($targetHost['min'])) {
				$this->addUsingAlias(NagiosDependencyTargetPeer::TARGET_HOST, $targetHost['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($targetHost['max'])) {
				$this->addUsingAlias(NagiosDependencyTargetPeer::TARGET_HOST, $targetHost['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosDependencyTargetPeer::TARGET_HOST, $targetHost, $comparison);
	}

	/**
	 * Filter the query on the target_service column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByTargetService(1234); // WHERE target_service = 1234
	 * $query->filterByTargetService(array(12, 34)); // WHERE target_service IN (12, 34)
	 * $query->filterByTargetService(array('min' => 12)); // WHERE target_service > 12
	 * </code>
	 *
	 * @see       filterByNagiosService()
	 *
	 * @param     mixed $targetService The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyTargetQuery The current query, for fluid interface
	 */
	public function filterByTargetService($targetService = null, $comparison = null)
	{
		if (is_array($targetService)) {
			$useMinMax = false;
			if (isset($targetService['min'])) {
				$this->addUsingAlias(NagiosDependencyTargetPeer::TARGET_SERVICE, $targetService['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($targetService['max'])) {
				$this->addUsingAlias(NagiosDependencyTargetPeer::TARGET_SERVICE, $targetService['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosDependencyTargetPeer::TARGET_SERVICE, $targetService, $comparison);
	}

	/**
	 * Filter the query on the target_hostgroup column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByTargetHostgroup(1234); // WHERE target_hostgroup = 1234
	 * $query->filterByTargetHostgroup(array(12, 34)); // WHERE target_hostgroup IN (12, 34)
	 * $query->filterByTargetHostgroup(array('min' => 12)); // WHERE target_hostgroup > 12
	 * </code>
	 *
	 * @see       filterByNagiosHostgroup()
	 *
	 * @param     mixed $targetHostgroup The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyTargetQuery The current query, for fluid interface
	 */
	public function filterByTargetHostgroup($targetHostgroup = null, $comparison = null)
	{
		if (is_array($targetHostgroup)) {
			$useMinMax = false;
			if (isset($targetHostgroup['min'])) {
				$this->addUsingAlias(NagiosDependencyTargetPeer::TARGET_HOSTGROUP, $targetHostgroup['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($targetHostgroup['max'])) {
				$this->addUsingAlias(NagiosDependencyTargetPeer::TARGET_HOSTGROUP, $targetHostgroup['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosDependencyTargetPeer::TARGET_HOSTGROUP, $targetHostgroup, $comparison);
	}

	/**
	 * Filter the query by a related NagiosDependency object
	 *
	 * @param     NagiosDependency|PropelCollection $nagiosDependency The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyTargetQuery The current query, for fluid interface
	 */
	public function filterByNagiosDependency($nagiosDependency, $comparison = null)
	{
		if ($nagiosDependency instanceof NagiosDependency) {
			return $this
				->addUsingAlias(NagiosDependencyTargetPeer::DEPENDENCY, $nagiosDependency->getId(), $comparison);
		} elseif ($nagiosDependency instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosDependencyTargetPeer::DEPENDENCY, $nagiosDependency->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosDependencyTargetQuery The current query, for fluid interface
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
	 * Filter the query by a related NagiosHost object
	 *
	 * @param     NagiosHost|PropelCollection $nagiosHost The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyTargetQuery The current query, for fluid interface
	 */
	public function filterByNagiosHost($nagiosHost, $comparison = null)
	{
		if ($nagiosHost instanceof NagiosHost) {
			return $this
				->addUsingAlias(NagiosDependencyTargetPeer::TARGET_HOST, $nagiosHost->getId(), $comparison);
		} elseif ($nagiosHost instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosDependencyTargetPeer::TARGET_HOST, $nagiosHost->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosDependencyTargetQuery The current query, for fluid interface
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
	 * Filter the query by a related NagiosService object
	 *
	 * @param     NagiosService|PropelCollection $nagiosService The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyTargetQuery The current query, for fluid interface
	 */
	public function filterByNagiosService($nagiosService, $comparison = null)
	{
		if ($nagiosService instanceof NagiosService) {
			return $this
				->addUsingAlias(NagiosDependencyTargetPeer::TARGET_SERVICE, $nagiosService->getId(), $comparison);
		} elseif ($nagiosService instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosDependencyTargetPeer::TARGET_SERVICE, $nagiosService->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosService() only accepts arguments of type NagiosService or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosService relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosDependencyTargetQuery The current query, for fluid interface
	 */
	public function joinNagiosService($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosService');
		
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
			$this->addJoinObject($join, 'NagiosService');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosService relation NagiosService object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosServiceQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosService($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosService', 'NagiosServiceQuery');
	}

	/**
	 * Filter the query by a related NagiosHostgroup object
	 *
	 * @param     NagiosHostgroup|PropelCollection $nagiosHostgroup The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosDependencyTargetQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostgroup($nagiosHostgroup, $comparison = null)
	{
		if ($nagiosHostgroup instanceof NagiosHostgroup) {
			return $this
				->addUsingAlias(NagiosDependencyTargetPeer::TARGET_HOSTGROUP, $nagiosHostgroup->getId(), $comparison);
		} elseif ($nagiosHostgroup instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosDependencyTargetPeer::TARGET_HOSTGROUP, $nagiosHostgroup->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosDependencyTargetQuery The current query, for fluid interface
	 */
	public function joinNagiosHostgroup($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
	public function useNagiosHostgroupQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosHostgroup($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosHostgroup', 'NagiosHostgroupQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     NagiosDependencyTarget $nagiosDependencyTarget Object to remove from the list of results
	 *
	 * @return    NagiosDependencyTargetQuery The current query, for fluid interface
	 */
	public function prune($nagiosDependencyTarget = null)
	{
		if ($nagiosDependencyTarget) {
			$this->addUsingAlias(NagiosDependencyTargetPeer::ID, $nagiosDependencyTarget->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseNagiosDependencyTargetQuery
