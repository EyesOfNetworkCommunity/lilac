<?php


/**
 * Base class that represents a query for the 'autodiscovery_device_service' table.
 *
 * AutoDiscovery Found Service
 *
 * @method     AutodiscoveryDeviceServiceQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     AutodiscoveryDeviceServiceQuery orderByDeviceId($order = Criteria::ASC) Order by the device_id column
 * @method     AutodiscoveryDeviceServiceQuery orderByProtocol($order = Criteria::ASC) Order by the protocol column
 * @method     AutodiscoveryDeviceServiceQuery orderByPort($order = Criteria::ASC) Order by the port column
 * @method     AutodiscoveryDeviceServiceQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     AutodiscoveryDeviceServiceQuery orderByProduct($order = Criteria::ASC) Order by the product column
 * @method     AutodiscoveryDeviceServiceQuery orderByVersion($order = Criteria::ASC) Order by the version column
 * @method     AutodiscoveryDeviceServiceQuery orderByExtrainfo($order = Criteria::ASC) Order by the extrainfo column
 *
 * @method     AutodiscoveryDeviceServiceQuery groupById() Group by the id column
 * @method     AutodiscoveryDeviceServiceQuery groupByDeviceId() Group by the device_id column
 * @method     AutodiscoveryDeviceServiceQuery groupByProtocol() Group by the protocol column
 * @method     AutodiscoveryDeviceServiceQuery groupByPort() Group by the port column
 * @method     AutodiscoveryDeviceServiceQuery groupByName() Group by the name column
 * @method     AutodiscoveryDeviceServiceQuery groupByProduct() Group by the product column
 * @method     AutodiscoveryDeviceServiceQuery groupByVersion() Group by the version column
 * @method     AutodiscoveryDeviceServiceQuery groupByExtrainfo() Group by the extrainfo column
 *
 * @method     AutodiscoveryDeviceServiceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AutodiscoveryDeviceServiceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AutodiscoveryDeviceServiceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AutodiscoveryDeviceServiceQuery leftJoinAutodiscoveryDevice($relationAlias = null) Adds a LEFT JOIN clause to the query using the AutodiscoveryDevice relation
 * @method     AutodiscoveryDeviceServiceQuery rightJoinAutodiscoveryDevice($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AutodiscoveryDevice relation
 * @method     AutodiscoveryDeviceServiceQuery innerJoinAutodiscoveryDevice($relationAlias = null) Adds a INNER JOIN clause to the query using the AutodiscoveryDevice relation
 *
 * @method     AutodiscoveryDeviceService findOne(PropelPDO $con = null) Return the first AutodiscoveryDeviceService matching the query
 * @method     AutodiscoveryDeviceService findOneOrCreate(PropelPDO $con = null) Return the first AutodiscoveryDeviceService matching the query, or a new AutodiscoveryDeviceService object populated from the query conditions when no match is found
 *
 * @method     AutodiscoveryDeviceService findOneById(int $id) Return the first AutodiscoveryDeviceService filtered by the id column
 * @method     AutodiscoveryDeviceService findOneByDeviceId(int $device_id) Return the first AutodiscoveryDeviceService filtered by the device_id column
 * @method     AutodiscoveryDeviceService findOneByProtocol(string $protocol) Return the first AutodiscoveryDeviceService filtered by the protocol column
 * @method     AutodiscoveryDeviceService findOneByPort(int $port) Return the first AutodiscoveryDeviceService filtered by the port column
 * @method     AutodiscoveryDeviceService findOneByName(string $name) Return the first AutodiscoveryDeviceService filtered by the name column
 * @method     AutodiscoveryDeviceService findOneByProduct(string $product) Return the first AutodiscoveryDeviceService filtered by the product column
 * @method     AutodiscoveryDeviceService findOneByVersion(string $version) Return the first AutodiscoveryDeviceService filtered by the version column
 * @method     AutodiscoveryDeviceService findOneByExtrainfo(string $extrainfo) Return the first AutodiscoveryDeviceService filtered by the extrainfo column
 *
 * @method     array findById(int $id) Return AutodiscoveryDeviceService objects filtered by the id column
 * @method     array findByDeviceId(int $device_id) Return AutodiscoveryDeviceService objects filtered by the device_id column
 * @method     array findByProtocol(string $protocol) Return AutodiscoveryDeviceService objects filtered by the protocol column
 * @method     array findByPort(int $port) Return AutodiscoveryDeviceService objects filtered by the port column
 * @method     array findByName(string $name) Return AutodiscoveryDeviceService objects filtered by the name column
 * @method     array findByProduct(string $product) Return AutodiscoveryDeviceService objects filtered by the product column
 * @method     array findByVersion(string $version) Return AutodiscoveryDeviceService objects filtered by the version column
 * @method     array findByExtrainfo(string $extrainfo) Return AutodiscoveryDeviceService objects filtered by the extrainfo column
 *
 * @package    propel.generator..om
 */
abstract class BaseAutodiscoveryDeviceServiceQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseAutodiscoveryDeviceServiceQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'AutodiscoveryDeviceService', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new AutodiscoveryDeviceServiceQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    AutodiscoveryDeviceServiceQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof AutodiscoveryDeviceServiceQuery) {
			return $criteria;
		}
		$query = new AutodiscoveryDeviceServiceQuery();
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
	 * @return    AutodiscoveryDeviceService|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = AutodiscoveryDeviceServicePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    AutodiscoveryDeviceServiceQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(AutodiscoveryDeviceServicePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    AutodiscoveryDeviceServiceQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(AutodiscoveryDeviceServicePeer::ID, $keys, Criteria::IN);
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
	 * @return    AutodiscoveryDeviceServiceQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(AutodiscoveryDeviceServicePeer::ID, $id, $comparison);
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
	 * @return    AutodiscoveryDeviceServiceQuery The current query, for fluid interface
	 */
	public function filterByDeviceId($deviceId = null, $comparison = null)
	{
		if (is_array($deviceId)) {
			$useMinMax = false;
			if (isset($deviceId['min'])) {
				$this->addUsingAlias(AutodiscoveryDeviceServicePeer::DEVICE_ID, $deviceId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($deviceId['max'])) {
				$this->addUsingAlias(AutodiscoveryDeviceServicePeer::DEVICE_ID, $deviceId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AutodiscoveryDeviceServicePeer::DEVICE_ID, $deviceId, $comparison);
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
	 * @return    AutodiscoveryDeviceServiceQuery The current query, for fluid interface
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
		return $this->addUsingAlias(AutodiscoveryDeviceServicePeer::PROTOCOL, $protocol, $comparison);
	}

	/**
	 * Filter the query on the port column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByPort(1234); // WHERE port = 1234
	 * $query->filterByPort(array(12, 34)); // WHERE port IN (12, 34)
	 * $query->filterByPort(array('min' => 12)); // WHERE port > 12
	 * </code>
	 *
	 * @param     mixed $port The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryDeviceServiceQuery The current query, for fluid interface
	 */
	public function filterByPort($port = null, $comparison = null)
	{
		if (is_array($port)) {
			$useMinMax = false;
			if (isset($port['min'])) {
				$this->addUsingAlias(AutodiscoveryDeviceServicePeer::PORT, $port['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($port['max'])) {
				$this->addUsingAlias(AutodiscoveryDeviceServicePeer::PORT, $port['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(AutodiscoveryDeviceServicePeer::PORT, $port, $comparison);
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
	 * @return    AutodiscoveryDeviceServiceQuery The current query, for fluid interface
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
		return $this->addUsingAlias(AutodiscoveryDeviceServicePeer::NAME, $name, $comparison);
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
	 * @return    AutodiscoveryDeviceServiceQuery The current query, for fluid interface
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
		return $this->addUsingAlias(AutodiscoveryDeviceServicePeer::PRODUCT, $product, $comparison);
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
	 * @return    AutodiscoveryDeviceServiceQuery The current query, for fluid interface
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
		return $this->addUsingAlias(AutodiscoveryDeviceServicePeer::VERSION, $version, $comparison);
	}

	/**
	 * Filter the query on the extrainfo column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByExtrainfo('fooValue');   // WHERE extrainfo = 'fooValue'
	 * $query->filterByExtrainfo('%fooValue%'); // WHERE extrainfo LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $extrainfo The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryDeviceServiceQuery The current query, for fluid interface
	 */
	public function filterByExtrainfo($extrainfo = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($extrainfo)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $extrainfo)) {
				$extrainfo = str_replace('*', '%', $extrainfo);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(AutodiscoveryDeviceServicePeer::EXTRAINFO, $extrainfo, $comparison);
	}

	/**
	 * Filter the query by a related AutodiscoveryDevice object
	 *
	 * @param     AutodiscoveryDevice|PropelCollection $autodiscoveryDevice The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    AutodiscoveryDeviceServiceQuery The current query, for fluid interface
	 */
	public function filterByAutodiscoveryDevice($autodiscoveryDevice, $comparison = null)
	{
		if ($autodiscoveryDevice instanceof AutodiscoveryDevice) {
			return $this
				->addUsingAlias(AutodiscoveryDeviceServicePeer::DEVICE_ID, $autodiscoveryDevice->getId(), $comparison);
		} elseif ($autodiscoveryDevice instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(AutodiscoveryDeviceServicePeer::DEVICE_ID, $autodiscoveryDevice->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    AutodiscoveryDeviceServiceQuery The current query, for fluid interface
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
	 * Exclude object from result
	 *
	 * @param     AutodiscoveryDeviceService $autodiscoveryDeviceService Object to remove from the list of results
	 *
	 * @return    AutodiscoveryDeviceServiceQuery The current query, for fluid interface
	 */
	public function prune($autodiscoveryDeviceService = null)
	{
		if ($autodiscoveryDeviceService) {
			$this->addUsingAlias(AutodiscoveryDeviceServicePeer::ID, $autodiscoveryDeviceService->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseAutodiscoveryDeviceServiceQuery
