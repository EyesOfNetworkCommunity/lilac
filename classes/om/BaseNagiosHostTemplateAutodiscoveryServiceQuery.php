<?php


/**
 * Base class that represents a query for the 'nagios_host_template_autodiscovery_service' table.
 *
 * 
 *
 * @method     NagiosHostTemplateAutodiscoveryServiceQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NagiosHostTemplateAutodiscoveryServiceQuery orderByHostTemplate($order = Criteria::ASC) Order by the host_template column
 * @method     NagiosHostTemplateAutodiscoveryServiceQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     NagiosHostTemplateAutodiscoveryServiceQuery orderByProtocol($order = Criteria::ASC) Order by the protocol column
 * @method     NagiosHostTemplateAutodiscoveryServiceQuery orderByPort($order = Criteria::ASC) Order by the port column
 * @method     NagiosHostTemplateAutodiscoveryServiceQuery orderByProduct($order = Criteria::ASC) Order by the product column
 * @method     NagiosHostTemplateAutodiscoveryServiceQuery orderByVersion($order = Criteria::ASC) Order by the version column
 * @method     NagiosHostTemplateAutodiscoveryServiceQuery orderByExtraInformation($order = Criteria::ASC) Order by the extra_information column
 *
 * @method     NagiosHostTemplateAutodiscoveryServiceQuery groupById() Group by the id column
 * @method     NagiosHostTemplateAutodiscoveryServiceQuery groupByHostTemplate() Group by the host_template column
 * @method     NagiosHostTemplateAutodiscoveryServiceQuery groupByName() Group by the name column
 * @method     NagiosHostTemplateAutodiscoveryServiceQuery groupByProtocol() Group by the protocol column
 * @method     NagiosHostTemplateAutodiscoveryServiceQuery groupByPort() Group by the port column
 * @method     NagiosHostTemplateAutodiscoveryServiceQuery groupByProduct() Group by the product column
 * @method     NagiosHostTemplateAutodiscoveryServiceQuery groupByVersion() Group by the version column
 * @method     NagiosHostTemplateAutodiscoveryServiceQuery groupByExtraInformation() Group by the extra_information column
 *
 * @method     NagiosHostTemplateAutodiscoveryServiceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NagiosHostTemplateAutodiscoveryServiceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NagiosHostTemplateAutodiscoveryServiceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NagiosHostTemplateAutodiscoveryServiceQuery leftJoinNagiosHostTemplate($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostTemplate relation
 * @method     NagiosHostTemplateAutodiscoveryServiceQuery rightJoinNagiosHostTemplate($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostTemplate relation
 * @method     NagiosHostTemplateAutodiscoveryServiceQuery innerJoinNagiosHostTemplate($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostTemplate relation
 *
 * @method     NagiosHostTemplateAutodiscoveryService findOne(PropelPDO $con = null) Return the first NagiosHostTemplateAutodiscoveryService matching the query
 * @method     NagiosHostTemplateAutodiscoveryService findOneOrCreate(PropelPDO $con = null) Return the first NagiosHostTemplateAutodiscoveryService matching the query, or a new NagiosHostTemplateAutodiscoveryService object populated from the query conditions when no match is found
 *
 * @method     NagiosHostTemplateAutodiscoveryService findOneById(int $id) Return the first NagiosHostTemplateAutodiscoveryService filtered by the id column
 * @method     NagiosHostTemplateAutodiscoveryService findOneByHostTemplate(int $host_template) Return the first NagiosHostTemplateAutodiscoveryService filtered by the host_template column
 * @method     NagiosHostTemplateAutodiscoveryService findOneByName(string $name) Return the first NagiosHostTemplateAutodiscoveryService filtered by the name column
 * @method     NagiosHostTemplateAutodiscoveryService findOneByProtocol(string $protocol) Return the first NagiosHostTemplateAutodiscoveryService filtered by the protocol column
 * @method     NagiosHostTemplateAutodiscoveryService findOneByPort(string $port) Return the first NagiosHostTemplateAutodiscoveryService filtered by the port column
 * @method     NagiosHostTemplateAutodiscoveryService findOneByProduct(string $product) Return the first NagiosHostTemplateAutodiscoveryService filtered by the product column
 * @method     NagiosHostTemplateAutodiscoveryService findOneByVersion(string $version) Return the first NagiosHostTemplateAutodiscoveryService filtered by the version column
 * @method     NagiosHostTemplateAutodiscoveryService findOneByExtraInformation(string $extra_information) Return the first NagiosHostTemplateAutodiscoveryService filtered by the extra_information column
 *
 * @method     array findById(int $id) Return NagiosHostTemplateAutodiscoveryService objects filtered by the id column
 * @method     array findByHostTemplate(int $host_template) Return NagiosHostTemplateAutodiscoveryService objects filtered by the host_template column
 * @method     array findByName(string $name) Return NagiosHostTemplateAutodiscoveryService objects filtered by the name column
 * @method     array findByProtocol(string $protocol) Return NagiosHostTemplateAutodiscoveryService objects filtered by the protocol column
 * @method     array findByPort(string $port) Return NagiosHostTemplateAutodiscoveryService objects filtered by the port column
 * @method     array findByProduct(string $product) Return NagiosHostTemplateAutodiscoveryService objects filtered by the product column
 * @method     array findByVersion(string $version) Return NagiosHostTemplateAutodiscoveryService objects filtered by the version column
 * @method     array findByExtraInformation(string $extra_information) Return NagiosHostTemplateAutodiscoveryService objects filtered by the extra_information column
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosHostTemplateAutodiscoveryServiceQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNagiosHostTemplateAutodiscoveryServiceQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'NagiosHostTemplateAutodiscoveryService', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NagiosHostTemplateAutodiscoveryServiceQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NagiosHostTemplateAutodiscoveryServiceQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NagiosHostTemplateAutodiscoveryServiceQuery) {
			return $criteria;
		}
		$query = new NagiosHostTemplateAutodiscoveryServiceQuery();
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
	 * @return    NagiosHostTemplateAutodiscoveryService|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NagiosHostTemplateAutodiscoveryServicePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    NagiosHostTemplateAutodiscoveryServiceQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NagiosHostTemplateAutodiscoveryServicePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NagiosHostTemplateAutodiscoveryServiceQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NagiosHostTemplateAutodiscoveryServicePeer::ID, $keys, Criteria::IN);
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
	 * @return    NagiosHostTemplateAutodiscoveryServiceQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NagiosHostTemplateAutodiscoveryServicePeer::ID, $id, $comparison);
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
	 * @return    NagiosHostTemplateAutodiscoveryServiceQuery The current query, for fluid interface
	 */
	public function filterByHostTemplate($hostTemplate = null, $comparison = null)
	{
		if (is_array($hostTemplate)) {
			$useMinMax = false;
			if (isset($hostTemplate['min'])) {
				$this->addUsingAlias(NagiosHostTemplateAutodiscoveryServicePeer::HOST_TEMPLATE, $hostTemplate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($hostTemplate['max'])) {
				$this->addUsingAlias(NagiosHostTemplateAutodiscoveryServicePeer::HOST_TEMPLATE, $hostTemplate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosHostTemplateAutodiscoveryServicePeer::HOST_TEMPLATE, $hostTemplate, $comparison);
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
	 * @return    NagiosHostTemplateAutodiscoveryServiceQuery The current query, for fluid interface
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
		return $this->addUsingAlias(NagiosHostTemplateAutodiscoveryServicePeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the protocol column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByProtocol('fooValue');   // WHERE protocol = 'fooValue'
	 * $query->filterByProtocol('%fooValue%'); // WHERE protocol LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $protocol The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostTemplateAutodiscoveryServiceQuery The current query, for fluid interface
	 */
	public function filterByProtocol($protocol = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($protocol)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $protocol)) {
				$protocol = str_replace('*', '%', $protocol);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosHostTemplateAutodiscoveryServicePeer::PROTOCOL, $protocol, $comparison);
	}

	/**
	 * Filter the query on the port column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByPort('fooValue');   // WHERE port = 'fooValue'
	 * $query->filterByPort('%fooValue%'); // WHERE port LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $port The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostTemplateAutodiscoveryServiceQuery The current query, for fluid interface
	 */
	public function filterByPort($port = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($port)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $port)) {
				$port = str_replace('*', '%', $port);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosHostTemplateAutodiscoveryServicePeer::PORT, $port, $comparison);
	}

	/**
	 * Filter the query on the product column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByProduct('fooValue');   // WHERE product = 'fooValue'
	 * $query->filterByProduct('%fooValue%'); // WHERE product LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $product The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostTemplateAutodiscoveryServiceQuery The current query, for fluid interface
	 */
	public function filterByProduct($product = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($product)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $product)) {
				$product = str_replace('*', '%', $product);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosHostTemplateAutodiscoveryServicePeer::PRODUCT, $product, $comparison);
	}

	/**
	 * Filter the query on the version column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByVersion('fooValue');   // WHERE version = 'fooValue'
	 * $query->filterByVersion('%fooValue%'); // WHERE version LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $version The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostTemplateAutodiscoveryServiceQuery The current query, for fluid interface
	 */
	public function filterByVersion($version = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($version)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $version)) {
				$version = str_replace('*', '%', $version);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosHostTemplateAutodiscoveryServicePeer::VERSION, $version, $comparison);
	}

	/**
	 * Filter the query on the extra_information column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByExtraInformation('fooValue');   // WHERE extra_information = 'fooValue'
	 * $query->filterByExtraInformation('%fooValue%'); // WHERE extra_information LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $extraInformation The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostTemplateAutodiscoveryServiceQuery The current query, for fluid interface
	 */
	public function filterByExtraInformation($extraInformation = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($extraInformation)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $extraInformation)) {
				$extraInformation = str_replace('*', '%', $extraInformation);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosHostTemplateAutodiscoveryServicePeer::EXTRA_INFORMATION, $extraInformation, $comparison);
	}

	/**
	 * Filter the query by a related NagiosHostTemplate object
	 *
	 * @param     NagiosHostTemplate|PropelCollection $nagiosHostTemplate The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostTemplateAutodiscoveryServiceQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostTemplate($nagiosHostTemplate, $comparison = null)
	{
		if ($nagiosHostTemplate instanceof NagiosHostTemplate) {
			return $this
				->addUsingAlias(NagiosHostTemplateAutodiscoveryServicePeer::HOST_TEMPLATE, $nagiosHostTemplate->getId(), $comparison);
		} elseif ($nagiosHostTemplate instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosHostTemplateAutodiscoveryServicePeer::HOST_TEMPLATE, $nagiosHostTemplate->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosHostTemplateAutodiscoveryServiceQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     NagiosHostTemplateAutodiscoveryService $nagiosHostTemplateAutodiscoveryService Object to remove from the list of results
	 *
	 * @return    NagiosHostTemplateAutodiscoveryServiceQuery The current query, for fluid interface
	 */
	public function prune($nagiosHostTemplateAutodiscoveryService = null)
	{
		if ($nagiosHostTemplateAutodiscoveryService) {
			$this->addUsingAlias(NagiosHostTemplateAutodiscoveryServicePeer::ID, $nagiosHostTemplateAutodiscoveryService->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseNagiosHostTemplateAutodiscoveryServiceQuery
