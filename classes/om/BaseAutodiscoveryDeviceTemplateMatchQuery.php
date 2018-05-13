<?php


/**
 * Base class that represents a query for the 'autodiscovery_device_template_match' table.
 *
 * AutoDiscovery Device Matched Template
 *
 * @method     AutodiscoveryDeviceTemplateMatchQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     AutodiscoveryDeviceTemplateMatchQuery orderByDeviceId($order = Criteria::ASC) Order by the device_id column
 * @method     AutodiscoveryDeviceTemplateMatchQuery orderByHostTemplate($order = Criteria::ASC) Order by the host_template column
 * @method     AutodiscoveryDeviceTemplateMatchQuery orderByPercent($order = Criteria::ASC) Order by the percent column
 * @method     AutodiscoveryDeviceTemplateMatchQuery orderByComplexity($order = Criteria::ASC) Order by the complexity column
 *
 * @method     AutodiscoveryDeviceTemplateMatchQuery groupById() Group by the id column
 * @method     AutodiscoveryDeviceTemplateMatchQuery groupByDeviceId() Group by the device_id column
 * @method     AutodiscoveryDeviceTemplateMatchQuery groupByHostTemplate() Group by the host_template column
 * @method     AutodiscoveryDeviceTemplateMatchQuery groupByPercent() Group by the percent column
 * @method     AutodiscoveryDeviceTemplateMatchQuery groupByComplexity() Group by the complexity column
 *
 * @method     AutodiscoveryDeviceTemplateMatchQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AutodiscoveryDeviceTemplateMatchQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AutodiscoveryDeviceTemplateMatchQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AutodiscoveryDeviceTemplateMatchQuery leftJoinAutodiscoveryDevice($relationAlias = null) Adds a LEFT JOIN clause to the query using the AutodiscoveryDevice relation
 * @method     AutodiscoveryDeviceTemplateMatchQuery rightJoinAutodiscoveryDevice($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AutodiscoveryDevice relation
 * @method     AutodiscoveryDeviceTemplateMatchQuery innerJoinAutodiscoveryDevice($relationAlias = null) Adds a INNER JOIN clause to the query using the AutodiscoveryDevice relation
 *
 * @method     AutodiscoveryDeviceTemplateMatchQuery leftJoinNagiosHostTemplate($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostTemplate relation
 * @method     AutodiscoveryDeviceTemplateMatchQuery rightJoinNagiosHostTemplate($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostTemplate relation
 * @method     AutodiscoveryDeviceTemplateMatchQuery innerJoinNagiosHostTemplate($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostTemplate relation
 *
 * @method     AutodiscoveryDeviceTemplateMatch findOne(PropelPDO $con = null) Return the first AutodiscoveryDeviceTemplateMatch matching the query
 * @method     AutodiscoveryDeviceTemplateMatch findOneOrCreate(PropelPDO $con = null) Return the first AutodiscoveryDeviceTemplateMatch matching the query, or a new AutodiscoveryDeviceTemplateMatch object populated from the query conditions when no match is found
 *
 * @method     AutodiscoveryDeviceTemplateMatch findOneById(int $id) Return the first AutodiscoveryDeviceTemplateMatch filtered by the id column
 * @method     AutodiscoveryDeviceTemplateMatch findOneByDeviceId(int $device_id) Return the first AutodiscoveryDeviceTemplateMatch filtered by the device_id column
 * @method     AutodiscoveryDeviceTemplateMatch findOneByHostTemplate(int $host_template) Return the first AutodiscoveryDeviceTemplateMatch filtered by the host_template column
 * @method     AutodiscoveryDeviceTemplateMatch findOneByPercent(double $percent) Return the first AutodiscoveryDeviceTemplateMatch filtered by the percent column
 * @method     AutodiscoveryDeviceTemplateMatch findOneByComplexity(int $complexity) Return the first AutodiscoveryDeviceTemplateMatch filtered by the complexity column
 *
 * @method     array findById(int $id) Return AutodiscoveryDeviceTemplateMatch objects filtered by the id column
 * @method     array findByDeviceId(int $device_id) Return AutodiscoveryDeviceTemplateMatch objects filtered by the device_id column
 * @method     array findByHostTemplate(int $host_template) Return AutodiscoveryDeviceTemplateMatch objects filtered by the host_template column
 * @method     array findByPercent(double $percent) Return AutodiscoveryDeviceTemplateMatch objects filtered by the percent column
 * @method     array findByComplexity(int $complexity) Return AutodiscoveryDeviceTemplateMatch objects filtered by the complexity column
 *
 * @package    propel.generator..om
 */
abstract class BaseAutodiscoveryDeviceTemplateMatchQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseAutodiscoveryDeviceTemplateMatchQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'AutodiscoveryDeviceTemplateMatch', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new AutodiscoveryDeviceTemplateMatchQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    AutodiscoveryDeviceTemplateMatchQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof AutodiscoveryDeviceTemplateMatchQuery) {
			return $criteria;
		}
		$query = new AutodiscoveryDeviceTemplateMatchQuery();
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
	 * @return    AutodiscoveryDeviceTemplateMatch|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = AutodiscoveryDeviceTemplateMatchPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    AutodiscoveryDeviceTemplateMatchQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(AutodiscoveryDeviceTemplateMatchPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    AutodiscoveryDeviceTemplateMatchQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(AutodiscoveryDeviceTemplateMatchPeer::ID, $keys, Criteria::IN);
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
	 * @return    AutodiscoveryDeviceTemplateMatchQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(AutodiscoveryDeviceTemplateMatchPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the device_id column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByDeviceId(1234); // WHERE device_id = 1234
	 * $query->filterByDeviceId(array(12, 34)); // WHERE device_id IN (12, 34)
	 * $query->filterByDeviceId(array('min' => 12)); // WHERE device_id > 12
	 * </code>
	 *
	 * @see       filterByAutodiscoveryDevice()
	 *
	 * @param     mixed $deviceId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryDeviceTemplateMatchQuery The current query, for fluid interface
	 */
	public function filterByDeviceId($deviceId = null, $comparison = null)
	{
		if (is_array($deviceId)) {
			$useMinMax = false;
			if (isset($deviceId['min'])) {
				$this->addUsingAlias(AutodiscoveryDeviceTemplateMatchPeer::DEVICE_ID, $deviceId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deviceId['max'])) {
				$this->addUsingAlias(AutodiscoveryDeviceTemplateMatchPeer::DEVICE_ID, $deviceId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AutodiscoveryDeviceTemplateMatchPeer::DEVICE_ID, $deviceId, $comparison);
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
	 * @return    AutodiscoveryDeviceTemplateMatchQuery The current query, for fluid interface
	 */
	public function filterByHostTemplate($hostTemplate = null, $comparison = null)
	{
		if (is_array($hostTemplate)) {
			$useMinMax = false;
			if (isset($hostTemplate['min'])) {
				$this->addUsingAlias(AutodiscoveryDeviceTemplateMatchPeer::HOST_TEMPLATE, $hostTemplate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($hostTemplate['max'])) {
				$this->addUsingAlias(AutodiscoveryDeviceTemplateMatchPeer::HOST_TEMPLATE, $hostTemplate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AutodiscoveryDeviceTemplateMatchPeer::HOST_TEMPLATE, $hostTemplate, $comparison);
	}

	/**
	 * Filter the query on the percent column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByPercent(1234); // WHERE percent = 1234
	 * $query->filterByPercent(array(12, 34)); // WHERE percent IN (12, 34)
	 * $query->filterByPercent(array('min' => 12)); // WHERE percent > 12
	 * </code>
	 *
	 * @param     mixed $percent The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryDeviceTemplateMatchQuery The current query, for fluid interface
	 */
	public function filterByPercent($percent = null, $comparison = null)
	{
		if (is_array($percent)) {
			$useMinMax = false;
			if (isset($percent['min'])) {
				$this->addUsingAlias(AutodiscoveryDeviceTemplateMatchPeer::PERCENT, $percent['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($percent['max'])) {
				$this->addUsingAlias(AutodiscoveryDeviceTemplateMatchPeer::PERCENT, $percent['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AutodiscoveryDeviceTemplateMatchPeer::PERCENT, $percent, $comparison);
	}

	/**
	 * Filter the query on the complexity column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByComplexity(1234); // WHERE complexity = 1234
	 * $query->filterByComplexity(array(12, 34)); // WHERE complexity IN (12, 34)
	 * $query->filterByComplexity(array('min' => 12)); // WHERE complexity > 12
	 * </code>
	 *
	 * @param     mixed $complexity The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryDeviceTemplateMatchQuery The current query, for fluid interface
	 */
	public function filterByComplexity($complexity = null, $comparison = null)
	{
		if (is_array($complexity)) {
			$useMinMax = false;
			if (isset($complexity['min'])) {
				$this->addUsingAlias(AutodiscoveryDeviceTemplateMatchPeer::COMPLEXITY, $complexity['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($complexity['max'])) {
				$this->addUsingAlias(AutodiscoveryDeviceTemplateMatchPeer::COMPLEXITY, $complexity['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AutodiscoveryDeviceTemplateMatchPeer::COMPLEXITY, $complexity, $comparison);
	}

	/**
	 * Filter the query by a related AutodiscoveryDevice object
	 *
	 * @param     AutodiscoveryDevice|PropelCollection $autodiscoveryDevice The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryDeviceTemplateMatchQuery The current query, for fluid interface
	 */
	public function filterByAutodiscoveryDevice($autodiscoveryDevice, $comparison = null)
	{
		if ($autodiscoveryDevice instanceof AutodiscoveryDevice) {
			return $this
				->addUsingAlias(AutodiscoveryDeviceTemplateMatchPeer::DEVICE_ID, $autodiscoveryDevice->getId(), $comparison);
		} elseif ($autodiscoveryDevice instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(AutodiscoveryDeviceTemplateMatchPeer::DEVICE_ID, $autodiscoveryDevice->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByAutodiscoveryDevice() only accepts arguments of type AutodiscoveryDevice or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the AutodiscoveryDevice relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AutodiscoveryDeviceTemplateMatchQuery The current query, for fluid interface
	 */
	public function joinAutodiscoveryDevice($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('AutodiscoveryDevice');
		
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
			$this->addJoinObject($join, 'AutodiscoveryDevice');
		}
		
		return $this;
	}

	/**
	 * Use the AutodiscoveryDevice relation AutodiscoveryDevice object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AutodiscoveryDeviceQuery A secondary query class using the current class as primary query
	 */
	public function useAutodiscoveryDeviceQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinAutodiscoveryDevice($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'AutodiscoveryDevice', 'AutodiscoveryDeviceQuery');
	}

	/**
	 * Filter the query by a related NagiosHostTemplate object
	 *
	 * @param     NagiosHostTemplate|PropelCollection $nagiosHostTemplate The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryDeviceTemplateMatchQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostTemplate($nagiosHostTemplate, $comparison = null)
	{
		if ($nagiosHostTemplate instanceof NagiosHostTemplate) {
			return $this
				->addUsingAlias(AutodiscoveryDeviceTemplateMatchPeer::HOST_TEMPLATE, $nagiosHostTemplate->getId(), $comparison);
		} elseif ($nagiosHostTemplate instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(AutodiscoveryDeviceTemplateMatchPeer::HOST_TEMPLATE, $nagiosHostTemplate->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    AutodiscoveryDeviceTemplateMatchQuery The current query, for fluid interface
	 */
	public function joinNagiosHostTemplate($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
	public function useNagiosHostTemplateQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinNagiosHostTemplate($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosHostTemplate', 'NagiosHostTemplateQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     AutodiscoveryDeviceTemplateMatch $autodiscoveryDeviceTemplateMatch Object to remove from the list of results
	 *
	 * @return    AutodiscoveryDeviceTemplateMatchQuery The current query, for fluid interface
	 */
	public function prune($autodiscoveryDeviceTemplateMatch = null)
	{
		if ($autodiscoveryDeviceTemplateMatch) {
			$this->addUsingAlias(AutodiscoveryDeviceTemplateMatchPeer::ID, $autodiscoveryDeviceTemplateMatch->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseAutodiscoveryDeviceTemplateMatchQuery
