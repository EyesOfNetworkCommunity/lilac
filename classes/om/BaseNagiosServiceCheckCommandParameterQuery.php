<?php


/**
 * Base class that represents a query for the 'nagios_service_check_command_parameter' table.
 *
 * Parameter for check command for service or service template
 *
 * @method     NagiosServiceCheckCommandParameterQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NagiosServiceCheckCommandParameterQuery orderByService($order = Criteria::ASC) Order by the service column
 * @method     NagiosServiceCheckCommandParameterQuery orderByTemplate($order = Criteria::ASC) Order by the template column
 * @method     NagiosServiceCheckCommandParameterQuery orderByParameter($order = Criteria::ASC) Order by the parameter column
 *
 * @method     NagiosServiceCheckCommandParameterQuery groupById() Group by the id column
 * @method     NagiosServiceCheckCommandParameterQuery groupByService() Group by the service column
 * @method     NagiosServiceCheckCommandParameterQuery groupByTemplate() Group by the template column
 * @method     NagiosServiceCheckCommandParameterQuery groupByParameter() Group by the parameter column
 *
 * @method     NagiosServiceCheckCommandParameterQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NagiosServiceCheckCommandParameterQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NagiosServiceCheckCommandParameterQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NagiosServiceCheckCommandParameterQuery leftJoinNagiosService($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosService relation
 * @method     NagiosServiceCheckCommandParameterQuery rightJoinNagiosService($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosService relation
 * @method     NagiosServiceCheckCommandParameterQuery innerJoinNagiosService($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosService relation
 *
 * @method     NagiosServiceCheckCommandParameterQuery leftJoinNagiosServiceTemplate($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosServiceTemplate relation
 * @method     NagiosServiceCheckCommandParameterQuery rightJoinNagiosServiceTemplate($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosServiceTemplate relation
 * @method     NagiosServiceCheckCommandParameterQuery innerJoinNagiosServiceTemplate($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosServiceTemplate relation
 *
 * @method     NagiosServiceCheckCommandParameter findOne(PropelPDO $con = null) Return the first NagiosServiceCheckCommandParameter matching the query
 * @method     NagiosServiceCheckCommandParameter findOneOrCreate(PropelPDO $con = null) Return the first NagiosServiceCheckCommandParameter matching the query, or a new NagiosServiceCheckCommandParameter object populated from the query conditions when no match is found
 *
 * @method     NagiosServiceCheckCommandParameter findOneById(int $id) Return the first NagiosServiceCheckCommandParameter filtered by the id column
 * @method     NagiosServiceCheckCommandParameter findOneByService(int $service) Return the first NagiosServiceCheckCommandParameter filtered by the service column
 * @method     NagiosServiceCheckCommandParameter findOneByTemplate(int $template) Return the first NagiosServiceCheckCommandParameter filtered by the template column
 * @method     NagiosServiceCheckCommandParameter findOneByParameter(string $parameter) Return the first NagiosServiceCheckCommandParameter filtered by the parameter column
 *
 * @method     array findById(int $id) Return NagiosServiceCheckCommandParameter objects filtered by the id column
 * @method     array findByService(int $service) Return NagiosServiceCheckCommandParameter objects filtered by the service column
 * @method     array findByTemplate(int $template) Return NagiosServiceCheckCommandParameter objects filtered by the template column
 * @method     array findByParameter(string $parameter) Return NagiosServiceCheckCommandParameter objects filtered by the parameter column
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosServiceCheckCommandParameterQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNagiosServiceCheckCommandParameterQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'NagiosServiceCheckCommandParameter', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NagiosServiceCheckCommandParameterQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NagiosServiceCheckCommandParameterQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NagiosServiceCheckCommandParameterQuery) {
			return $criteria;
		}
		$query = new NagiosServiceCheckCommandParameterQuery();
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
	 * @return    NagiosServiceCheckCommandParameter|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NagiosServiceCheckCommandParameterPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    NagiosServiceCheckCommandParameterQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NagiosServiceCheckCommandParameterPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NagiosServiceCheckCommandParameterQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NagiosServiceCheckCommandParameterPeer::ID, $keys, Criteria::IN);
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
	 * @return    NagiosServiceCheckCommandParameterQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NagiosServiceCheckCommandParameterPeer::ID, $id, $comparison);
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
	 * @return    NagiosServiceCheckCommandParameterQuery The current query, for fluid interface
	 */
	public function filterByService($service = null, $comparison = null)
	{
		if (is_array($service)) {
			$useMinMax = false;
			if (isset($service['min'])) {
				$this->addUsingAlias(NagiosServiceCheckCommandParameterPeer::SERVICE, $service['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($service['max'])) {
				$this->addUsingAlias(NagiosServiceCheckCommandParameterPeer::SERVICE, $service['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosServiceCheckCommandParameterPeer::SERVICE, $service, $comparison);
	}

	/**
	 * Filter the query on the template column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByTemplate(1234); // WHERE template = 1234
	 * $query->filterByTemplate(array(12, 34)); // WHERE template IN (12, 34)
	 * $query->filterByTemplate(array('min' => 12)); // WHERE template > 12
	 * </code>
	 *
	 * @see       filterByNagiosServiceTemplate()
	 *
	 * @param     mixed $template The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceCheckCommandParameterQuery The current query, for fluid interface
	 */
	public function filterByTemplate($template = null, $comparison = null)
	{
		if (is_array($template)) {
			$useMinMax = false;
			if (isset($template['min'])) {
				$this->addUsingAlias(NagiosServiceCheckCommandParameterPeer::TEMPLATE, $template['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($template['max'])) {
				$this->addUsingAlias(NagiosServiceCheckCommandParameterPeer::TEMPLATE, $template['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosServiceCheckCommandParameterPeer::TEMPLATE, $template, $comparison);
	}

	/**
	 * Filter the query on the parameter column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByParameter('fooValue');   // WHERE parameter = 'fooValue'
	 * $query->filterByParameter('%fooValue%'); // WHERE parameter LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $parameter The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceCheckCommandParameterQuery The current query, for fluid interface
	 */
	public function filterByParameter($parameter = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($parameter)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $parameter)) {
				$parameter = str_replace('*', '%', $parameter);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosServiceCheckCommandParameterPeer::PARAMETER, $parameter, $comparison);
	}

	/**
	 * Filter the query by a related NagiosService object
	 *
	 * @param     NagiosService|PropelCollection $nagiosService The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceCheckCommandParameterQuery The current query, for fluid interface
	 */
	public function filterByNagiosService($nagiosService, $comparison = null)
	{
		if ($nagiosService instanceof NagiosService) {
			return $this
				->addUsingAlias(NagiosServiceCheckCommandParameterPeer::SERVICE, $nagiosService->getId(), $comparison);
		} elseif ($nagiosService instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosServiceCheckCommandParameterPeer::SERVICE, $nagiosService->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosServiceCheckCommandParameterQuery The current query, for fluid interface
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
	 * @return    NagiosServiceCheckCommandParameterQuery The current query, for fluid interface
	 */
	public function filterByNagiosServiceTemplate($nagiosServiceTemplate, $comparison = null)
	{
		if ($nagiosServiceTemplate instanceof NagiosServiceTemplate) {
			return $this
				->addUsingAlias(NagiosServiceCheckCommandParameterPeer::TEMPLATE, $nagiosServiceTemplate->getId(), $comparison);
		} elseif ($nagiosServiceTemplate instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosServiceCheckCommandParameterPeer::TEMPLATE, $nagiosServiceTemplate->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosServiceCheckCommandParameterQuery The current query, for fluid interface
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
	 * @param     NagiosServiceCheckCommandParameter $nagiosServiceCheckCommandParameter Object to remove from the list of results
	 *
	 * @return    NagiosServiceCheckCommandParameterQuery The current query, for fluid interface
	 */
	public function prune($nagiosServiceCheckCommandParameter = null)
	{
		if ($nagiosServiceCheckCommandParameter) {
			$this->addUsingAlias(NagiosServiceCheckCommandParameterPeer::ID, $nagiosServiceCheckCommandParameter->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseNagiosServiceCheckCommandParameterQuery
