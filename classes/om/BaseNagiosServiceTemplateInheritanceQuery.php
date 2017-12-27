<?php


/**
 * Base class that represents a query for the 'nagios_service_template_inheritance' table.
 *
 * Nagios service Template Inheritance
 *
 * @method     NagiosServiceTemplateInheritanceQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NagiosServiceTemplateInheritanceQuery orderBySourceService($order = Criteria::ASC) Order by the source_service column
 * @method     NagiosServiceTemplateInheritanceQuery orderBySourceTemplate($order = Criteria::ASC) Order by the source_template column
 * @method     NagiosServiceTemplateInheritanceQuery orderByTargetTemplate($order = Criteria::ASC) Order by the target_template column
 * @method     NagiosServiceTemplateInheritanceQuery orderByOrder($order = Criteria::ASC) Order by the order column
 *
 * @method     NagiosServiceTemplateInheritanceQuery groupById() Group by the id column
 * @method     NagiosServiceTemplateInheritanceQuery groupBySourceService() Group by the source_service column
 * @method     NagiosServiceTemplateInheritanceQuery groupBySourceTemplate() Group by the source_template column
 * @method     NagiosServiceTemplateInheritanceQuery groupByTargetTemplate() Group by the target_template column
 * @method     NagiosServiceTemplateInheritanceQuery groupByOrder() Group by the order column
 *
 * @method     NagiosServiceTemplateInheritanceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NagiosServiceTemplateInheritanceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NagiosServiceTemplateInheritanceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NagiosServiceTemplateInheritanceQuery leftJoinNagiosService($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosService relation
 * @method     NagiosServiceTemplateInheritanceQuery rightJoinNagiosService($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosService relation
 * @method     NagiosServiceTemplateInheritanceQuery innerJoinNagiosService($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosService relation
 *
 * @method     NagiosServiceTemplateInheritanceQuery leftJoinNagiosServiceTemplateRelatedBySourceTemplate($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosServiceTemplateRelatedBySourceTemplate relation
 * @method     NagiosServiceTemplateInheritanceQuery rightJoinNagiosServiceTemplateRelatedBySourceTemplate($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosServiceTemplateRelatedBySourceTemplate relation
 * @method     NagiosServiceTemplateInheritanceQuery innerJoinNagiosServiceTemplateRelatedBySourceTemplate($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosServiceTemplateRelatedBySourceTemplate relation
 *
 * @method     NagiosServiceTemplateInheritanceQuery leftJoinNagiosServiceTemplateRelatedByTargetTemplate($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosServiceTemplateRelatedByTargetTemplate relation
 * @method     NagiosServiceTemplateInheritanceQuery rightJoinNagiosServiceTemplateRelatedByTargetTemplate($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosServiceTemplateRelatedByTargetTemplate relation
 * @method     NagiosServiceTemplateInheritanceQuery innerJoinNagiosServiceTemplateRelatedByTargetTemplate($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosServiceTemplateRelatedByTargetTemplate relation
 *
 * @method     NagiosServiceTemplateInheritance findOne(PropelPDO $con = null) Return the first NagiosServiceTemplateInheritance matching the query
 * @method     NagiosServiceTemplateInheritance findOneOrCreate(PropelPDO $con = null) Return the first NagiosServiceTemplateInheritance matching the query, or a new NagiosServiceTemplateInheritance object populated from the query conditions when no match is found
 *
 * @method     NagiosServiceTemplateInheritance findOneById(int $id) Return the first NagiosServiceTemplateInheritance filtered by the id column
 * @method     NagiosServiceTemplateInheritance findOneBySourceService(int $source_service) Return the first NagiosServiceTemplateInheritance filtered by the source_service column
 * @method     NagiosServiceTemplateInheritance findOneBySourceTemplate(int $source_template) Return the first NagiosServiceTemplateInheritance filtered by the source_template column
 * @method     NagiosServiceTemplateInheritance findOneByTargetTemplate(int $target_template) Return the first NagiosServiceTemplateInheritance filtered by the target_template column
 * @method     NagiosServiceTemplateInheritance findOneByOrder(int $order) Return the first NagiosServiceTemplateInheritance filtered by the order column
 *
 * @method     array findById(int $id) Return NagiosServiceTemplateInheritance objects filtered by the id column
 * @method     array findBySourceService(int $source_service) Return NagiosServiceTemplateInheritance objects filtered by the source_service column
 * @method     array findBySourceTemplate(int $source_template) Return NagiosServiceTemplateInheritance objects filtered by the source_template column
 * @method     array findByTargetTemplate(int $target_template) Return NagiosServiceTemplateInheritance objects filtered by the target_template column
 * @method     array findByOrder(int $order) Return NagiosServiceTemplateInheritance objects filtered by the order column
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosServiceTemplateInheritanceQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNagiosServiceTemplateInheritanceQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'NagiosServiceTemplateInheritance', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NagiosServiceTemplateInheritanceQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NagiosServiceTemplateInheritanceQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NagiosServiceTemplateInheritanceQuery) {
			return $criteria;
		}
		$query = new NagiosServiceTemplateInheritanceQuery();
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
	 * @return    NagiosServiceTemplateInheritance|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NagiosServiceTemplateInheritancePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    NagiosServiceTemplateInheritanceQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NagiosServiceTemplateInheritancePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NagiosServiceTemplateInheritanceQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NagiosServiceTemplateInheritancePeer::ID, $keys, Criteria::IN);
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
	 * @return    NagiosServiceTemplateInheritanceQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NagiosServiceTemplateInheritancePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the source_service column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterBySourceService(1234); // WHERE source_service = 1234
	 * $query->filterBySourceService(array(12, 34)); // WHERE source_service IN (12, 34)
	 * $query->filterBySourceService(array('min' => 12)); // WHERE source_service > 12
	 * </code>
	 *
	 * @see       filterByNagiosService()
	 *
	 * @param     mixed $sourceService The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceTemplateInheritanceQuery The current query, for fluid interface
	 */
	public function filterBySourceService($sourceService = null, $comparison = null)
	{
		if (is_array($sourceService)) {
			$useMinMax = false;
			if (isset($sourceService['min'])) {
				$this->addUsingAlias(NagiosServiceTemplateInheritancePeer::SOURCE_SERVICE, $sourceService['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sourceService['max'])) {
				$this->addUsingAlias(NagiosServiceTemplateInheritancePeer::SOURCE_SERVICE, $sourceService['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosServiceTemplateInheritancePeer::SOURCE_SERVICE, $sourceService, $comparison);
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
	 * @see       filterByNagiosServiceTemplateRelatedBySourceTemplate()
	 *
	 * @param     mixed $sourceTemplate The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceTemplateInheritanceQuery The current query, for fluid interface
	 */
	public function filterBySourceTemplate($sourceTemplate = null, $comparison = null)
	{
		if (is_array($sourceTemplate)) {
			$useMinMax = false;
			if (isset($sourceTemplate['min'])) {
				$this->addUsingAlias(NagiosServiceTemplateInheritancePeer::SOURCE_TEMPLATE, $sourceTemplate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sourceTemplate['max'])) {
				$this->addUsingAlias(NagiosServiceTemplateInheritancePeer::SOURCE_TEMPLATE, $sourceTemplate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosServiceTemplateInheritancePeer::SOURCE_TEMPLATE, $sourceTemplate, $comparison);
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
	 * @see       filterByNagiosServiceTemplateRelatedByTargetTemplate()
	 *
	 * @param     mixed $targetTemplate The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceTemplateInheritanceQuery The current query, for fluid interface
	 */
	public function filterByTargetTemplate($targetTemplate = null, $comparison = null)
	{
		if (is_array($targetTemplate)) {
			$useMinMax = false;
			if (isset($targetTemplate['min'])) {
				$this->addUsingAlias(NagiosServiceTemplateInheritancePeer::TARGET_TEMPLATE, $targetTemplate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($targetTemplate['max'])) {
				$this->addUsingAlias(NagiosServiceTemplateInheritancePeer::TARGET_TEMPLATE, $targetTemplate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosServiceTemplateInheritancePeer::TARGET_TEMPLATE, $targetTemplate, $comparison);
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
	 * @return    NagiosServiceTemplateInheritanceQuery The current query, for fluid interface
	 */
	public function filterByOrder($order = null, $comparison = null)
	{
		if (is_array($order)) {
			$useMinMax = false;
			if (isset($order['min'])) {
				$this->addUsingAlias(NagiosServiceTemplateInheritancePeer::ORDER, $order['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($order['max'])) {
				$this->addUsingAlias(NagiosServiceTemplateInheritancePeer::ORDER, $order['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosServiceTemplateInheritancePeer::ORDER, $order, $comparison);
	}

	/**
	 * Filter the query by a related NagiosService object
	 *
	 * @param     NagiosService|PropelCollection $nagiosService The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceTemplateInheritanceQuery The current query, for fluid interface
	 */
	public function filterByNagiosService($nagiosService, $comparison = null)
	{
		if ($nagiosService instanceof NagiosService) {
			return $this
				->addUsingAlias(NagiosServiceTemplateInheritancePeer::SOURCE_SERVICE, $nagiosService->getId(), $comparison);
		} elseif ($nagiosService instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosServiceTemplateInheritancePeer::SOURCE_SERVICE, $nagiosService->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosServiceTemplateInheritanceQuery The current query, for fluid interface
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
	 * Filter the query by a related NagiosServiceTemplate object
	 *
	 * @param     NagiosServiceTemplate|PropelCollection $nagiosServiceTemplate The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceTemplateInheritanceQuery The current query, for fluid interface
	 */
	public function filterByNagiosServiceTemplateRelatedBySourceTemplate($nagiosServiceTemplate, $comparison = null)
	{
		if ($nagiosServiceTemplate instanceof NagiosServiceTemplate) {
			return $this
				->addUsingAlias(NagiosServiceTemplateInheritancePeer::SOURCE_TEMPLATE, $nagiosServiceTemplate->getId(), $comparison);
		} elseif ($nagiosServiceTemplate instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosServiceTemplateInheritancePeer::SOURCE_TEMPLATE, $nagiosServiceTemplate->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosServiceTemplateRelatedBySourceTemplate() only accepts arguments of type NagiosServiceTemplate or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosServiceTemplateRelatedBySourceTemplate relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceTemplateInheritanceQuery The current query, for fluid interface
	 */
	public function joinNagiosServiceTemplateRelatedBySourceTemplate($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosServiceTemplateRelatedBySourceTemplate');
		
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
			$this->addJoinObject($join, 'NagiosServiceTemplateRelatedBySourceTemplate');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosServiceTemplateRelatedBySourceTemplate relation NagiosServiceTemplate object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceTemplateQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosServiceTemplateRelatedBySourceTemplateQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosServiceTemplateRelatedBySourceTemplate($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosServiceTemplateRelatedBySourceTemplate', 'NagiosServiceTemplateQuery');
	}

	/**
	 * Filter the query by a related NagiosServiceTemplate object
	 *
	 * @param     NagiosServiceTemplate|PropelCollection $nagiosServiceTemplate The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceTemplateInheritanceQuery The current query, for fluid interface
	 */
	public function filterByNagiosServiceTemplateRelatedByTargetTemplate($nagiosServiceTemplate, $comparison = null)
	{
		if ($nagiosServiceTemplate instanceof NagiosServiceTemplate) {
			return $this
				->addUsingAlias(NagiosServiceTemplateInheritancePeer::TARGET_TEMPLATE, $nagiosServiceTemplate->getId(), $comparison);
		} elseif ($nagiosServiceTemplate instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosServiceTemplateInheritancePeer::TARGET_TEMPLATE, $nagiosServiceTemplate->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosServiceTemplateRelatedByTargetTemplate() only accepts arguments of type NagiosServiceTemplate or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosServiceTemplateRelatedByTargetTemplate relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceTemplateInheritanceQuery The current query, for fluid interface
	 */
	public function joinNagiosServiceTemplateRelatedByTargetTemplate($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosServiceTemplateRelatedByTargetTemplate');
		
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
			$this->addJoinObject($join, 'NagiosServiceTemplateRelatedByTargetTemplate');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosServiceTemplateRelatedByTargetTemplate relation NagiosServiceTemplate object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceTemplateQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosServiceTemplateRelatedByTargetTemplateQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinNagiosServiceTemplateRelatedByTargetTemplate($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosServiceTemplateRelatedByTargetTemplate', 'NagiosServiceTemplateQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     NagiosServiceTemplateInheritance $nagiosServiceTemplateInheritance Object to remove from the list of results
	 *
	 * @return    NagiosServiceTemplateInheritanceQuery The current query, for fluid interface
	 */
	public function prune($nagiosServiceTemplateInheritance = null)
	{
		if ($nagiosServiceTemplateInheritance) {
			$this->addUsingAlias(NagiosServiceTemplateInheritancePeer::ID, $nagiosServiceTemplateInheritance->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseNagiosServiceTemplateInheritanceQuery
