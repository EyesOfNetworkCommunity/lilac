<?php


/**
 * Base class that represents a query for the 'lilac_configuration' table.
 *
 * Lilac Configuration
 *
 * @method     LilacConfigurationQuery orderByKey($order = Criteria::ASC) Order by the key column
 * @method     LilacConfigurationQuery orderByValue($order = Criteria::ASC) Order by the value column
 *
 * @method     LilacConfigurationQuery groupByKey() Group by the key column
 * @method     LilacConfigurationQuery groupByValue() Group by the value column
 *
 * @method     LilacConfigurationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     LilacConfigurationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     LilacConfigurationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     LilacConfiguration findOne(PropelPDO $con = null) Return the first LilacConfiguration matching the query
 * @method     LilacConfiguration findOneOrCreate(PropelPDO $con = null) Return the first LilacConfiguration matching the query, or a new LilacConfiguration object populated from the query conditions when no match is found
 *
 * @method     LilacConfiguration findOneByKey(string $key) Return the first LilacConfiguration filtered by the key column
 * @method     LilacConfiguration findOneByValue(string $value) Return the first LilacConfiguration filtered by the value column
 *
 * @method     array findByKey(string $key) Return LilacConfiguration objects filtered by the key column
 * @method     array findByValue(string $value) Return LilacConfiguration objects filtered by the value column
 *
 * @package    propel.generator..om
 */
abstract class BaseLilacConfigurationQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseLilacConfigurationQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'LilacConfiguration', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new LilacConfigurationQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    LilacConfigurationQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof LilacConfigurationQuery) {
			return $criteria;
		}
		$query = new LilacConfigurationQuery();
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
	 * @return    LilacConfiguration|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = LilacConfigurationPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    LilacConfigurationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(LilacConfigurationPeer::KEY, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    LilacConfigurationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(LilacConfigurationPeer::KEY, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the key column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByKey('fooValue');   // WHERE key = 'fooValue'
	 * $query->filterByKey('%fooValue%'); // WHERE key LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $key The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LilacConfigurationQuery The current query, for fluid interface
	 */
	public function filterByKey($key = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($key)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $key)) {
				$key = str_replace('*', '%', $key);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LilacConfigurationPeer::KEY, $key, $comparison);
	}

	/**
	 * Filter the query on the value column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByValue('fooValue');   // WHERE value = 'fooValue'
	 * $query->filterByValue('%fooValue%'); // WHERE value LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $value The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LilacConfigurationQuery The current query, for fluid interface
	 */
	public function filterByValue($value = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($value)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $value)) {
				$value = str_replace('*', '%', $value);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LilacConfigurationPeer::VALUE, $value, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     LilacConfiguration $lilacConfiguration Object to remove from the list of results
	 *
	 * @return    LilacConfigurationQuery The current query, for fluid interface
	 */
	public function prune($lilacConfiguration = null)
	{
		if ($lilacConfiguration) {
			$this->addUsingAlias(LilacConfigurationPeer::KEY, $lilacConfiguration->getKey(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseLilacConfigurationQuery
