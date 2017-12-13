<?php


/**
 * Base class that represents a query for the 'nagios_contact_custom_object_var' table.
 *
 * Custom Object Variables for Contact
 *
 * @method     NagiosContactCustomObjectVarQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NagiosContactCustomObjectVarQuery orderByContact($order = Criteria::ASC) Order by the contact column
 * @method     NagiosContactCustomObjectVarQuery orderByVarName($order = Criteria::ASC) Order by the var_name column
 * @method     NagiosContactCustomObjectVarQuery orderByVarValue($order = Criteria::ASC) Order by the var_value column
 *
 * @method     NagiosContactCustomObjectVarQuery groupById() Group by the id column
 * @method     NagiosContactCustomObjectVarQuery groupByContact() Group by the contact column
 * @method     NagiosContactCustomObjectVarQuery groupByVarName() Group by the var_name column
 * @method     NagiosContactCustomObjectVarQuery groupByVarValue() Group by the var_value column
 *
 * @method     NagiosContactCustomObjectVarQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NagiosContactCustomObjectVarQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NagiosContactCustomObjectVarQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NagiosContactCustomObjectVarQuery leftJoinNagiosContact($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosContact relation
 * @method     NagiosContactCustomObjectVarQuery rightJoinNagiosContact($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosContact relation
 * @method     NagiosContactCustomObjectVarQuery innerJoinNagiosContact($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosContact relation
 *
 * @method     NagiosContactCustomObjectVar findOne(PropelPDO $con = null) Return the first NagiosContactCustomObjectVar matching the query
 * @method     NagiosContactCustomObjectVar findOneOrCreate(PropelPDO $con = null) Return the first NagiosContactCustomObjectVar matching the query, or a new NagiosContactCustomObjectVar object populated from the query conditions when no match is found
 *
 * @method     NagiosContactCustomObjectVar findOneById(int $id) Return the first NagiosContactCustomObjectVar filtered by the id column
 * @method     NagiosContactCustomObjectVar findOneByContact(int $contact) Return the first NagiosContactCustomObjectVar filtered by the contact column
 * @method     NagiosContactCustomObjectVar findOneByVarName(string $var_name) Return the first NagiosContactCustomObjectVar filtered by the var_name column
 * @method     NagiosContactCustomObjectVar findOneByVarValue(string $var_value) Return the first NagiosContactCustomObjectVar filtered by the var_value column
 *
 * @method     array findById(int $id) Return NagiosContactCustomObjectVar objects filtered by the id column
 * @method     array findByContact(int $contact) Return NagiosContactCustomObjectVar objects filtered by the contact column
 * @method     array findByVarName(string $var_name) Return NagiosContactCustomObjectVar objects filtered by the var_name column
 * @method     array findByVarValue(string $var_value) Return NagiosContactCustomObjectVar objects filtered by the var_value column
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosContactCustomObjectVarQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNagiosContactCustomObjectVarQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'NagiosContactCustomObjectVar', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NagiosContactCustomObjectVarQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NagiosContactCustomObjectVarQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NagiosContactCustomObjectVarQuery) {
			return $criteria;
		}
		$query = new NagiosContactCustomObjectVarQuery();
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
	 * @return    NagiosContactCustomObjectVar|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NagiosContactCustomObjectVarPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    NagiosContactCustomObjectVarQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NagiosContactCustomObjectVarPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NagiosContactCustomObjectVarQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NagiosContactCustomObjectVarPeer::ID, $keys, Criteria::IN);
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
	 * @return    NagiosContactCustomObjectVarQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NagiosContactCustomObjectVarPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the contact column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByContact(1234); // WHERE contact = 1234
	 * $query->filterByContact(array(12, 34)); // WHERE contact IN (12, 34)
	 * $query->filterByContact(array('min' => 12)); // WHERE contact > 12
	 * </code>
	 *
	 * @see       filterByNagiosContact()
	 *
	 * @param     mixed $contact The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactCustomObjectVarQuery The current query, for fluid interface
	 */
	public function filterByContact($contact = null, $comparison = null)
	{
		if (is_array($contact)) {
			$useMinMax = false;
			if (isset($contact['min'])) {
				$this->addUsingAlias(NagiosContactCustomObjectVarPeer::CONTACT, $contact['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($contact['max'])) {
				$this->addUsingAlias(NagiosContactCustomObjectVarPeer::CONTACT, $contact['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosContactCustomObjectVarPeer::CONTACT, $contact, $comparison);
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
	 * @return    NagiosContactCustomObjectVarQuery The current query, for fluid interface
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
		return $this->addUsingAlias(NagiosContactCustomObjectVarPeer::VAR_NAME, $varName, $comparison);
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
	 * @return    NagiosContactCustomObjectVarQuery The current query, for fluid interface
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
		return $this->addUsingAlias(NagiosContactCustomObjectVarPeer::VAR_VALUE, $varValue, $comparison);
	}

	/**
	 * Filter the query by a related NagiosContact object
	 *
	 * @param     NagiosContact|PropelCollection $nagiosContact The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactCustomObjectVarQuery The current query, for fluid interface
	 */
	public function filterByNagiosContact($nagiosContact, $comparison = null)
	{
		if ($nagiosContact instanceof NagiosContact) {
			return $this
				->addUsingAlias(NagiosContactCustomObjectVarPeer::CONTACT, $nagiosContact->getId(), $comparison);
		} elseif ($nagiosContact instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosContactCustomObjectVarPeer::CONTACT, $nagiosContact->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosContact() only accepts arguments of type NagiosContact or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosContact relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosContactCustomObjectVarQuery The current query, for fluid interface
	 */
	public function joinNagiosContact($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosContact');
		
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
			$this->addJoinObject($join, 'NagiosContact');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosContact relation NagiosContact object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosContactQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosContactQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosContact($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosContact', 'NagiosContactQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     NagiosContactCustomObjectVar $nagiosContactCustomObjectVar Object to remove from the list of results
	 *
	 * @return    NagiosContactCustomObjectVarQuery The current query, for fluid interface
	 */
	public function prune($nagiosContactCustomObjectVar = null)
	{
		if ($nagiosContactCustomObjectVar) {
			$this->addUsingAlias(NagiosContactCustomObjectVarPeer::ID, $nagiosContactCustomObjectVar->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseNagiosContactCustomObjectVarQuery
