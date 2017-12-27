<?php


/**
 * Base class that represents a query for the 'nagios_host_template_inheritance' table.
 *
 * Nagios Host Template Inheritance
 *
 * @method     NagiosHostTemplateInheritanceQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NagiosHostTemplateInheritanceQuery orderBySourceHost($order = Criteria::ASC) Order by the source_host column
 * @method     NagiosHostTemplateInheritanceQuery orderBySourceTemplate($order = Criteria::ASC) Order by the source_template column
 * @method     NagiosHostTemplateInheritanceQuery orderByTargetTemplate($order = Criteria::ASC) Order by the target_template column
 * @method     NagiosHostTemplateInheritanceQuery orderByOrder($order = Criteria::ASC) Order by the order column
 *
 * @method     NagiosHostTemplateInheritanceQuery groupById() Group by the id column
 * @method     NagiosHostTemplateInheritanceQuery groupBySourceHost() Group by the source_host column
 * @method     NagiosHostTemplateInheritanceQuery groupBySourceTemplate() Group by the source_template column
 * @method     NagiosHostTemplateInheritanceQuery groupByTargetTemplate() Group by the target_template column
 * @method     NagiosHostTemplateInheritanceQuery groupByOrder() Group by the order column
 *
 * @method     NagiosHostTemplateInheritanceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NagiosHostTemplateInheritanceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NagiosHostTemplateInheritanceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NagiosHostTemplateInheritanceQuery leftJoinNagiosHost($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHost relation
 * @method     NagiosHostTemplateInheritanceQuery rightJoinNagiosHost($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHost relation
 * @method     NagiosHostTemplateInheritanceQuery innerJoinNagiosHost($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHost relation
 *
 * @method     NagiosHostTemplateInheritanceQuery leftJoinNagiosHostTemplateRelatedBySourceTemplate($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostTemplateRelatedBySourceTemplate relation
 * @method     NagiosHostTemplateInheritanceQuery rightJoinNagiosHostTemplateRelatedBySourceTemplate($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostTemplateRelatedBySourceTemplate relation
 * @method     NagiosHostTemplateInheritanceQuery innerJoinNagiosHostTemplateRelatedBySourceTemplate($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostTemplateRelatedBySourceTemplate relation
 *
 * @method     NagiosHostTemplateInheritanceQuery leftJoinNagiosHostTemplateRelatedByTargetTemplate($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostTemplateRelatedByTargetTemplate relation
 * @method     NagiosHostTemplateInheritanceQuery rightJoinNagiosHostTemplateRelatedByTargetTemplate($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostTemplateRelatedByTargetTemplate relation
 * @method     NagiosHostTemplateInheritanceQuery innerJoinNagiosHostTemplateRelatedByTargetTemplate($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostTemplateRelatedByTargetTemplate relation
 *
 * @method     NagiosHostTemplateInheritance findOne(PropelPDO $con = null) Return the first NagiosHostTemplateInheritance matching the query
 * @method     NagiosHostTemplateInheritance findOneOrCreate(PropelPDO $con = null) Return the first NagiosHostTemplateInheritance matching the query, or a new NagiosHostTemplateInheritance object populated from the query conditions when no match is found
 *
 * @method     NagiosHostTemplateInheritance findOneById(int $id) Return the first NagiosHostTemplateInheritance filtered by the id column
 * @method     NagiosHostTemplateInheritance findOneBySourceHost(int $source_host) Return the first NagiosHostTemplateInheritance filtered by the source_host column
 * @method     NagiosHostTemplateInheritance findOneBySourceTemplate(int $source_template) Return the first NagiosHostTemplateInheritance filtered by the source_template column
 * @method     NagiosHostTemplateInheritance findOneByTargetTemplate(int $target_template) Return the first NagiosHostTemplateInheritance filtered by the target_template column
 * @method     NagiosHostTemplateInheritance findOneByOrder(int $order) Return the first NagiosHostTemplateInheritance filtered by the order column
 *
 * @method     array findById(int $id) Return NagiosHostTemplateInheritance objects filtered by the id column
 * @method     array findBySourceHost(int $source_host) Return NagiosHostTemplateInheritance objects filtered by the source_host column
 * @method     array findBySourceTemplate(int $source_template) Return NagiosHostTemplateInheritance objects filtered by the source_template column
 * @method     array findByTargetTemplate(int $target_template) Return NagiosHostTemplateInheritance objects filtered by the target_template column
 * @method     array findByOrder(int $order) Return NagiosHostTemplateInheritance objects filtered by the order column
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosHostTemplateInheritanceQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNagiosHostTemplateInheritanceQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'NagiosHostTemplateInheritance', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NagiosHostTemplateInheritanceQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NagiosHostTemplateInheritanceQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NagiosHostTemplateInheritanceQuery) {
			return $criteria;
		}
		$query = new NagiosHostTemplateInheritanceQuery();
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
	 * @return    NagiosHostTemplateInheritance|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NagiosHostTemplateInheritancePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    NagiosHostTemplateInheritanceQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NagiosHostTemplateInheritancePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NagiosHostTemplateInheritanceQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NagiosHostTemplateInheritancePeer::ID, $keys, Criteria::IN);
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
	 * @return    NagiosHostTemplateInheritanceQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NagiosHostTemplateInheritancePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the source_host column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterBySourceHost(1234); // WHERE source_host = 1234
	 * $query->filterBySourceHost(array(12, 34)); // WHERE source_host IN (12, 34)
	 * $query->filterBySourceHost(array('min' => 12)); // WHERE source_host > 12
	 * </code>
	 *
	 * @see       filterByNagiosHost()
	 *
	 * @param     mixed $sourceHost The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostTemplateInheritanceQuery The current query, for fluid interface
	 */
	public function filterBySourceHost($sourceHost = null, $comparison = null)
	{
		if (is_array($sourceHost)) {
			$useMinMax = false;
			if (isset($sourceHost['min'])) {
				$this->addUsingAlias(NagiosHostTemplateInheritancePeer::SOURCE_HOST, $sourceHost['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sourceHost['max'])) {
				$this->addUsingAlias(NagiosHostTemplateInheritancePeer::SOURCE_HOST, $sourceHost['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosHostTemplateInheritancePeer::SOURCE_HOST, $sourceHost, $comparison);
	}

	/**
	 * Filter the query on the source_template column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterBySourceTemplate(1234); // WHERE source_template = 1234
	 * $query->filterBySourceTemplate(array(12, 34)); // WHERE source_template IN (12, 34)
	 * $query->filterBySourceTemplate(array('min' => 12)); // WHERE source_template > 12
	 * </code>
	 *
	 * @see       filterByNagiosHostTemplateRelatedBySourceTemplate()
	 *
	 * @param     mixed $sourceTemplate The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostTemplateInheritanceQuery The current query, for fluid interface
	 */
	public function filterBySourceTemplate($sourceTemplate = null, $comparison = null)
	{
		if (is_array($sourceTemplate)) {
			$useMinMax = false;
			if (isset($sourceTemplate['min'])) {
				$this->addUsingAlias(NagiosHostTemplateInheritancePeer::SOURCE_TEMPLATE, $sourceTemplate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sourceTemplate['max'])) {
				$this->addUsingAlias(NagiosHostTemplateInheritancePeer::SOURCE_TEMPLATE, $sourceTemplate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosHostTemplateInheritancePeer::SOURCE_TEMPLATE, $sourceTemplate, $comparison);
	}

	/**
	 * Filter the query on the target_template column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByTargetTemplate(1234); // WHERE target_template = 1234
	 * $query->filterByTargetTemplate(array(12, 34)); // WHERE target_template IN (12, 34)
	 * $query->filterByTargetTemplate(array('min' => 12)); // WHERE target_template > 12
	 * </code>
	 *
	 * @see       filterByNagiosHostTemplateRelatedByTargetTemplate()
	 *
	 * @param     mixed $targetTemplate The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostTemplateInheritanceQuery The current query, for fluid interface
	 */
	public function filterByTargetTemplate($targetTemplate = null, $comparison = null)
	{
		if (is_array($targetTemplate)) {
			$useMinMax = false;
			if (isset($targetTemplate['min'])) {
				$this->addUsingAlias(NagiosHostTemplateInheritancePeer::TARGET_TEMPLATE, $targetTemplate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($targetTemplate['max'])) {
				$this->addUsingAlias(NagiosHostTemplateInheritancePeer::TARGET_TEMPLATE, $targetTemplate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosHostTemplateInheritancePeer::TARGET_TEMPLATE, $targetTemplate, $comparison);
	}

	/**
	 * Filter the query on the order column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByOrder(1234); // WHERE order = 1234
	 * $query->filterByOrder(array(12, 34)); // WHERE order IN (12, 34)
	 * $query->filterByOrder(array('min' => 12)); // WHERE order > 12
	 * </code>
	 *
	 * @param     mixed $order The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostTemplateInheritanceQuery The current query, for fluid interface
	 */
	public function filterByOrder($order = null, $comparison = null)
	{
		if (is_array($order)) {
			$useMinMax = false;
			if (isset($order['min'])) {
				$this->addUsingAlias(NagiosHostTemplateInheritancePeer::ORDER, $order['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($order['max'])) {
				$this->addUsingAlias(NagiosHostTemplateInheritancePeer::ORDER, $order['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosHostTemplateInheritancePeer::ORDER, $order, $comparison);
	}

	/**
	 * Filter the query by a related NagiosHost object
	 *
	 * @param     NagiosHost|PropelCollection $nagiosHost The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostTemplateInheritanceQuery The current query, for fluid interface
	 */
	public function filterByNagiosHost($nagiosHost, $comparison = null)
	{
		if ($nagiosHost instanceof NagiosHost) {
			return $this
				->addUsingAlias(NagiosHostTemplateInheritancePeer::SOURCE_HOST, $nagiosHost->getId(), $comparison);
		} elseif ($nagiosHost instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosHostTemplateInheritancePeer::SOURCE_HOST, $nagiosHost->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosHostTemplateInheritanceQuery The current query, for fluid interface
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
	 * @return    NagiosHostTemplateInheritanceQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostTemplateRelatedBySourceTemplate($nagiosHostTemplate, $comparison = null)
	{
		if ($nagiosHostTemplate instanceof NagiosHostTemplate) {
			return $this
				->addUsingAlias(NagiosHostTemplateInheritancePeer::SOURCE_TEMPLATE, $nagiosHostTemplate->getId(), $comparison);
		} elseif ($nagiosHostTemplate instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosHostTemplateInheritancePeer::SOURCE_TEMPLATE, $nagiosHostTemplate->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosHostTemplateRelatedBySourceTemplate() only accepts arguments of type NagiosHostTemplate or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosHostTemplateRelatedBySourceTemplate relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostTemplateInheritanceQuery The current query, for fluid interface
	 */
	public function joinNagiosHostTemplateRelatedBySourceTemplate($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosHostTemplateRelatedBySourceTemplate');
		
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
			$this->addJoinObject($join, 'NagiosHostTemplateRelatedBySourceTemplate');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosHostTemplateRelatedBySourceTemplate relation NagiosHostTemplate object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostTemplateQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosHostTemplateRelatedBySourceTemplateQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosHostTemplateRelatedBySourceTemplate($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosHostTemplateRelatedBySourceTemplate', 'NagiosHostTemplateQuery');
	}

	/**
	 * Filter the query by a related NagiosHostTemplate object
	 *
	 * @param     NagiosHostTemplate|PropelCollection $nagiosHostTemplate The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostTemplateInheritanceQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostTemplateRelatedByTargetTemplate($nagiosHostTemplate, $comparison = null)
	{
		if ($nagiosHostTemplate instanceof NagiosHostTemplate) {
			return $this
				->addUsingAlias(NagiosHostTemplateInheritancePeer::TARGET_TEMPLATE, $nagiosHostTemplate->getId(), $comparison);
		} elseif ($nagiosHostTemplate instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosHostTemplateInheritancePeer::TARGET_TEMPLATE, $nagiosHostTemplate->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosHostTemplateRelatedByTargetTemplate() only accepts arguments of type NagiosHostTemplate or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosHostTemplateRelatedByTargetTemplate relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostTemplateInheritanceQuery The current query, for fluid interface
	 */
	public function joinNagiosHostTemplateRelatedByTargetTemplate($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosHostTemplateRelatedByTargetTemplate');
		
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
			$this->addJoinObject($join, 'NagiosHostTemplateRelatedByTargetTemplate');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosHostTemplateRelatedByTargetTemplate relation NagiosHostTemplate object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostTemplateQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosHostTemplateRelatedByTargetTemplateQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinNagiosHostTemplateRelatedByTargetTemplate($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosHostTemplateRelatedByTargetTemplate', 'NagiosHostTemplateQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     NagiosHostTemplateInheritance $nagiosHostTemplateInheritance Object to remove from the list of results
	 *
	 * @return    NagiosHostTemplateInheritanceQuery The current query, for fluid interface
	 */
	public function prune($nagiosHostTemplateInheritance = null)
	{
		if ($nagiosHostTemplateInheritance) {
			$this->addUsingAlias(NagiosHostTemplateInheritancePeer::ID, $nagiosHostTemplateInheritance->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseNagiosHostTemplateInheritanceQuery
