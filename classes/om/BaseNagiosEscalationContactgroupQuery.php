<?php


/**
 * Base class that represents a query for the 'nagios_escalation_contactgroup' table.
 *
 * Contact Group for Escalation
 *
 * @method     NagiosEscalationContactgroupQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NagiosEscalationContactgroupQuery orderByEscalation($order = Criteria::ASC) Order by the escalation column
 * @method     NagiosEscalationContactgroupQuery orderByContactgroup($order = Criteria::ASC) Order by the contactgroup column
 *
 * @method     NagiosEscalationContactgroupQuery groupById() Group by the id column
 * @method     NagiosEscalationContactgroupQuery groupByEscalation() Group by the escalation column
 * @method     NagiosEscalationContactgroupQuery groupByContactgroup() Group by the contactgroup column
 *
 * @method     NagiosEscalationContactgroupQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NagiosEscalationContactgroupQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NagiosEscalationContactgroupQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NagiosEscalationContactgroupQuery leftJoinNagiosEscalation($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosEscalation relation
 * @method     NagiosEscalationContactgroupQuery rightJoinNagiosEscalation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosEscalation relation
 * @method     NagiosEscalationContactgroupQuery innerJoinNagiosEscalation($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosEscalation relation
 *
 * @method     NagiosEscalationContactgroupQuery leftJoinNagiosContactGroup($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosContactGroup relation
 * @method     NagiosEscalationContactgroupQuery rightJoinNagiosContactGroup($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosContactGroup relation
 * @method     NagiosEscalationContactgroupQuery innerJoinNagiosContactGroup($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosContactGroup relation
 *
 * @method     NagiosEscalationContactgroup findOne(PropelPDO $con = null) Return the first NagiosEscalationContactgroup matching the query
 * @method     NagiosEscalationContactgroup findOneOrCreate(PropelPDO $con = null) Return the first NagiosEscalationContactgroup matching the query, or a new NagiosEscalationContactgroup object populated from the query conditions when no match is found
 *
 * @method     NagiosEscalationContactgroup findOneById(int $id) Return the first NagiosEscalationContactgroup filtered by the id column
 * @method     NagiosEscalationContactgroup findOneByEscalation(int $escalation) Return the first NagiosEscalationContactgroup filtered by the escalation column
 * @method     NagiosEscalationContactgroup findOneByContactgroup(int $contactgroup) Return the first NagiosEscalationContactgroup filtered by the contactgroup column
 *
 * @method     array findById(int $id) Return NagiosEscalationContactgroup objects filtered by the id column
 * @method     array findByEscalation(int $escalation) Return NagiosEscalationContactgroup objects filtered by the escalation column
 * @method     array findByContactgroup(int $contactgroup) Return NagiosEscalationContactgroup objects filtered by the contactgroup column
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosEscalationContactgroupQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNagiosEscalationContactgroupQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'NagiosEscalationContactgroup', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NagiosEscalationContactgroupQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NagiosEscalationContactgroupQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NagiosEscalationContactgroupQuery) {
			return $criteria;
		}
		$query = new NagiosEscalationContactgroupQuery();
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
	 * @return    NagiosEscalationContactgroup|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NagiosEscalationContactgroupPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    NagiosEscalationContactgroupQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NagiosEscalationContactgroupPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NagiosEscalationContactgroupQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NagiosEscalationContactgroupPeer::ID, $keys, Criteria::IN);
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
	 * @return    NagiosEscalationContactgroupQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NagiosEscalationContactgroupPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the escalation column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEscalation(1234); // WHERE escalation = 1234
	 * $query->filterByEscalation(array(12, 34)); // WHERE escalation IN (12, 34)
	 * $query->filterByEscalation(array('min' => 12)); // WHERE escalation > 12
	 * </code>
	 *
	 * @see       filterByNagiosEscalation()
	 *
	 * @param     mixed $escalation The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosEscalationContactgroupQuery The current query, for fluid interface
	 */
	public function filterByEscalation($escalation = null, $comparison = null)
	{
		if (is_array($escalation)) {
			$useMinMax = false;
			if (isset($escalation['min'])) {
				$this->addUsingAlias(NagiosEscalationContactgroupPeer::ESCALATION, $escalation['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($escalation['max'])) {
				$this->addUsingAlias(NagiosEscalationContactgroupPeer::ESCALATION, $escalation['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosEscalationContactgroupPeer::ESCALATION, $escalation, $comparison);
	}

	/**
	 * Filter the query on the contactgroup column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByContactgroup(1234); // WHERE contactgroup = 1234
	 * $query->filterByContactgroup(array(12, 34)); // WHERE contactgroup IN (12, 34)
	 * $query->filterByContactgroup(array('min' => 12)); // WHERE contactgroup > 12
	 * </code>
	 *
	 * @see       filterByNagiosContactGroup()
	 *
	 * @param     mixed $contactgroup The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosEscalationContactgroupQuery The current query, for fluid interface
	 */
	public function filterByContactgroup($contactgroup = null, $comparison = null)
	{
		if (is_array($contactgroup)) {
			$useMinMax = false;
			if (isset($contactgroup['min'])) {
				$this->addUsingAlias(NagiosEscalationContactgroupPeer::CONTACTGROUP, $contactgroup['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($contactgroup['max'])) {
				$this->addUsingAlias(NagiosEscalationContactgroupPeer::CONTACTGROUP, $contactgroup['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosEscalationContactgroupPeer::CONTACTGROUP, $contactgroup, $comparison);
	}

	/**
	 * Filter the query by a related NagiosEscalation object
	 *
	 * @param     NagiosEscalation|PropelCollection $nagiosEscalation The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosEscalationContactgroupQuery The current query, for fluid interface
	 */
	public function filterByNagiosEscalation($nagiosEscalation, $comparison = null)
	{
		if ($nagiosEscalation instanceof NagiosEscalation) {
			return $this
				->addUsingAlias(NagiosEscalationContactgroupPeer::ESCALATION, $nagiosEscalation->getId(), $comparison);
		} elseif ($nagiosEscalation instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosEscalationContactgroupPeer::ESCALATION, $nagiosEscalation->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosEscalationContactgroupQuery The current query, for fluid interface
	 */
	public function joinNagiosEscalation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
	public function useNagiosEscalationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinNagiosEscalation($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosEscalation', 'NagiosEscalationQuery');
	}

	/**
	 * Filter the query by a related NagiosContactGroup object
	 *
	 * @param     NagiosContactGroup|PropelCollection $nagiosContactGroup The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosEscalationContactgroupQuery The current query, for fluid interface
	 */
	public function filterByNagiosContactGroup($nagiosContactGroup, $comparison = null)
	{
		if ($nagiosContactGroup instanceof NagiosContactGroup) {
			return $this
				->addUsingAlias(NagiosEscalationContactgroupPeer::CONTACTGROUP, $nagiosContactGroup->getId(), $comparison);
		} elseif ($nagiosContactGroup instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosEscalationContactgroupPeer::CONTACTGROUP, $nagiosContactGroup->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosContactGroup() only accepts arguments of type NagiosContactGroup or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosContactGroup relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosEscalationContactgroupQuery The current query, for fluid interface
	 */
	public function joinNagiosContactGroup($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosContactGroup');
		
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
			$this->addJoinObject($join, 'NagiosContactGroup');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosContactGroup relation NagiosContactGroup object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosContactGroupQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosContactGroupQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinNagiosContactGroup($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosContactGroup', 'NagiosContactGroupQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     NagiosEscalationContactgroup $nagiosEscalationContactgroup Object to remove from the list of results
	 *
	 * @return    NagiosEscalationContactgroupQuery The current query, for fluid interface
	 */
	public function prune($nagiosEscalationContactgroup = null)
	{
		if ($nagiosEscalationContactgroup) {
			$this->addUsingAlias(NagiosEscalationContactgroupPeer::ID, $nagiosEscalationContactgroup->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseNagiosEscalationContactgroupQuery
