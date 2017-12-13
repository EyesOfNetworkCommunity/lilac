<?php


/**
 * Base class that represents a query for the 'nagios_service_custom_object_var' table.
 *
 * Custom Object Variables for Service
 *
 * @method     NagiosServiceCustomObjectVarQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NagiosServiceCustomObjectVarQuery orderByService($order = Criteria::ASC) Order by the service column
 * @method     NagiosServiceCustomObjectVarQuery orderByServiceTemplate($order = Criteria::ASC) Order by the service_template column
 * @method     NagiosServiceCustomObjectVarQuery orderByVarName($order = Criteria::ASC) Order by the var_name column
 * @method     NagiosServiceCustomObjectVarQuery orderByVarValue($order = Criteria::ASC) Order by the var_value column
 *
 * @method     NagiosServiceCustomObjectVarQuery groupById() Group by the id column
 * @method     NagiosServiceCustomObjectVarQuery groupByService() Group by the service column
 * @method     NagiosServiceCustomObjectVarQuery groupByServiceTemplate() Group by the service_template column
 * @method     NagiosServiceCustomObjectVarQuery groupByVarName() Group by the var_name column
 * @method     NagiosServiceCustomObjectVarQuery groupByVarValue() Group by the var_value column
 *
 * @method     NagiosServiceCustomObjectVarQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NagiosServiceCustomObjectVarQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NagiosServiceCustomObjectVarQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NagiosServiceCustomObjectVarQuery leftJoinNagiosService($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosService relation
 * @method     NagiosServiceCustomObjectVarQuery rightJoinNagiosService($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosService relation
 * @method     NagiosServiceCustomObjectVarQuery innerJoinNagiosService($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosService relation
 *
 * @method     NagiosServiceCustomObjectVarQuery leftJoinNagiosServiceTemplate($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosServiceTemplate relation
 * @method     NagiosServiceCustomObjectVarQuery rightJoinNagiosServiceTemplate($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosServiceTemplate relation
 * @method     NagiosServiceCustomObjectVarQuery innerJoinNagiosServiceTemplate($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosServiceTemplate relation
 *
 * @method     NagiosServiceCustomObjectVar findOne(PropelPDO $con = null) Return the first NagiosServiceCustomObjectVar matching the query
 * @method     NagiosServiceCustomObjectVar findOneOrCreate(PropelPDO $con = null) Return the first NagiosServiceCustomObjectVar matching the query, or a new NagiosServiceCustomObjectVar object populated from the query conditions when no match is found
 *
 * @method     NagiosServiceCustomObjectVar findOneById(int $id) Return the first NagiosServiceCustomObjectVar filtered by the id column
 * @method     NagiosServiceCustomObjectVar findOneByService(int $service) Return the first NagiosServiceCustomObjectVar filtered by the service column
 * @method     NagiosServiceCustomObjectVar findOneByServiceTemplate(int $service_template) Return the first NagiosServiceCustomObjectVar filtered by the service_template column
 * @method     NagiosServiceCustomObjectVar findOneByVarName(string $var_name) Return the first NagiosServiceCustomObjectVar filtered by the var_name column
 * @method     NagiosServiceCustomObjectVar findOneByVarValue(string $var_value) Return the first NagiosServiceCustomObjectVar filtered by the var_value column
 *
 * @method     array findById(int $id) Return NagiosServiceCustomObjectVar objects filtered by the id column
 * @method     array findByService(int $service) Return NagiosServiceCustomObjectVar objects filtered by the service column
 * @method     array findByServiceTemplate(int $service_template) Return NagiosServiceCustomObjectVar objects filtered by the service_template column
 * @method     array findByVarName(string $var_name) Return NagiosServiceCustomObjectVar objects filtered by the var_name column
 * @method     array findByVarValue(string $var_value) Return NagiosServiceCustomObjectVar objects filtered by the var_value column
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosServiceCustomObjectVarQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNagiosServiceCustomObjectVarQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'NagiosServiceCustomObjectVar', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NagiosServiceCustomObjectVarQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NagiosServiceCustomObjectVarQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NagiosServiceCustomObjectVarQuery) {
			return $criteria;
		}
		$query = new NagiosServiceCustomObjectVarQuery();
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
	 * @return    NagiosServiceCustomObjectVar|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NagiosServiceCustomObjectVarPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    NagiosServiceCustomObjectVarQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NagiosServiceCustomObjectVarPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NagiosServiceCustomObjectVarQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NagiosServiceCustomObjectVarPeer::ID, $keys, Criteria::IN);
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
	 * @return    NagiosServiceCustomObjectVarQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NagiosServiceCustomObjectVarPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the service column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByService(1234); // WHERE service = 1234
	 * $query->filterByService(array(12, 34)); // WHERE service IN (12, 34)
	 * $query->filterByService(array('min' => 12)); // WHERE service > 12
	 * </code>
	 *
	 * @see       filterByNagiosService()
	 *
	 * @param     mixed $service The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceCustomObjectVarQuery The current query, for fluid interface
	 */
	public function filterByService($service = null, $comparison = null)
	{
		if (is_array($service)) {
			$useMinMax = false;
			if (isset($service['min'])) {
				$this->addUsingAlias(NagiosServiceCustomObjectVarPeer::SERVICE, $service['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($service['max'])) {
				$this->addUsingAlias(NagiosServiceCustomObjectVarPeer::SERVICE, $service['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosServiceCustomObjectVarPeer::SERVICE, $service, $comparison);
	}

	/**
	 * Filter the query on the service_template column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByServiceTemplate(1234); // WHERE service_template = 1234
	 * $query->filterByServiceTemplate(array(12, 34)); // WHERE service_template IN (12, 34)
	 * $query->filterByServiceTemplate(array('min' => 12)); // WHERE service_template > 12
	 * </code>
	 *
	 * @see       filterByNagiosServiceTemplate()
	 *
	 * @param     mixed $serviceTemplate The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceCustomObjectVarQuery The current query, for fluid interface
	 */
	public function filterByServiceTemplate($serviceTemplate = null, $comparison = null)
	{
		if (is_array($serviceTemplate)) {
			$useMinMax = false;
			if (isset($serviceTemplate['min'])) {
				$this->addUsingAlias(NagiosServiceCustomObjectVarPeer::SERVICE_TEMPLATE, $serviceTemplate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($serviceTemplate['max'])) {
				$this->addUsingAlias(NagiosServiceCustomObjectVarPeer::SERVICE_TEMPLATE, $serviceTemplate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosServiceCustomObjectVarPeer::SERVICE_TEMPLATE, $serviceTemplate, $comparison);
	}

	/**
	 * Filter the query on the var_name column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByVarName('fooValue');   // WHERE var_name = 'fooValue'
	 * $query->filterByVarName('%fooValue%'); // WHERE var_name LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $varName The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceCustomObjectVarQuery The current query, for fluid interface
	 */
	public function filterByVarName($varName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($varName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $varName)) {
				$varName = str_replace('*', '%', $varName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosServiceCustomObjectVarPeer::VAR_NAME, $varName, $comparison);
	}

	/**
	 * Filter the query on the var_value column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByVarValue('fooValue');   // WHERE var_value = 'fooValue'
	 * $query->filterByVarValue('%fooValue%'); // WHERE var_value LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $varValue The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceCustomObjectVarQuery The current query, for fluid interface
	 */
	public function filterByVarValue($varValue = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($varValue)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $varValue)) {
				$varValue = str_replace('*', '%', $varValue);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosServiceCustomObjectVarPeer::VAR_VALUE, $varValue, $comparison);
	}

	/**
	 * Filter the query by a related NagiosService object
	 *
	 * @param     NagiosService|PropelCollection $nagiosService The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceCustomObjectVarQuery The current query, for fluid interface
	 */
	public function filterByNagiosService($nagiosService, $comparison = null)
	{
		if ($nagiosService instanceof NagiosService) {
			return $this
				->addUsingAlias(NagiosServiceCustomObjectVarPeer::SERVICE, $nagiosService->getId(), $comparison);
		} elseif ($nagiosService instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosServiceCustomObjectVarPeer::SERVICE, $nagiosService->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosServiceCustomObjectVarQuery The current query, for fluid interface
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
	 * @return    NagiosServiceCustomObjectVarQuery The current query, for fluid interface
	 */
	public function filterByNagiosServiceTemplate($nagiosServiceTemplate, $comparison = null)
	{
		if ($nagiosServiceTemplate instanceof NagiosServiceTemplate) {
			return $this
				->addUsingAlias(NagiosServiceCustomObjectVarPeer::SERVICE_TEMPLATE, $nagiosServiceTemplate->getId(), $comparison);
		} elseif ($nagiosServiceTemplate instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosServiceCustomObjectVarPeer::SERVICE_TEMPLATE, $nagiosServiceTemplate->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosServiceTemplate() only accepts arguments of type NagiosServiceTemplate or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosServiceTemplate relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceCustomObjectVarQuery The current query, for fluid interface
	 */
	public function joinNagiosServiceTemplate($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosServiceTemplate');
		
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
			$this->addJoinObject($join, 'NagiosServiceTemplate');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosServiceTemplate relation NagiosServiceTemplate object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceTemplateQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosServiceTemplateQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosServiceTemplate($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosServiceTemplate', 'NagiosServiceTemplateQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     NagiosServiceCustomObjectVar $nagiosServiceCustomObjectVar Object to remove from the list of results
	 *
	 * @return    NagiosServiceCustomObjectVarQuery The current query, for fluid interface
	 */
	public function prune($nagiosServiceCustomObjectVar = null)
	{
		if ($nagiosServiceCustomObjectVar) {
			$this->addUsingAlias(NagiosServiceCustomObjectVarPeer::ID, $nagiosServiceCustomObjectVar->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseNagiosServiceCustomObjectVarQuery
