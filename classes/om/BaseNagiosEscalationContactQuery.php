<?php


/**
 * Base class that represents a query for the 'nagios_escalation_contact' table.
 *
 * Contact Group for Escalation
 *
 * @method     NagiosEscalationContactQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NagiosEscalationContactQuery orderByEscalation($order = Criteria::ASC) Order by the escalation column
 * @method     NagiosEscalationContactQuery orderByContact($order = Criteria::ASC) Order by the contact column
 *
 * @method     NagiosEscalationContactQuery groupById() Group by the id column
 * @method     NagiosEscalationContactQuery groupByEscalation() Group by the escalation column
 * @method     NagiosEscalationContactQuery groupByContact() Group by the contact column
 *
 * @method     NagiosEscalationContactQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NagiosEscalationContactQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NagiosEscalationContactQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NagiosEscalationContactQuery leftJoinNagiosEscalation($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosEscalation relation
 * @method     NagiosEscalationContactQuery rightJoinNagiosEscalation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosEscalation relation
 * @method     NagiosEscalationContactQuery innerJoinNagiosEscalation($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosEscalation relation
 *
 * @method     NagiosEscalationContactQuery leftJoinNagiosContact($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosContact relation
 * @method     NagiosEscalationContactQuery rightJoinNagiosContact($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosContact relation
 * @method     NagiosEscalationContactQuery innerJoinNagiosContact($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosContact relation
 *
 * @method     NagiosEscalationContact findOne(PropelPDO $con = null) Return the first NagiosEscalationContact matching the query
 * @method     NagiosEscalationContact findOneOrCreate(PropelPDO $con = null) Return the first NagiosEscalationContact matching the query, or a new NagiosEscalationContact object populated from the query conditions when no match is found
 *
 * @method     NagiosEscalationContact findOneById(int $id) Return the first NagiosEscalationContact filtered by the id column
 * @method     NagiosEscalationContact findOneByEscalation(int $escalation) Return the first NagiosEscalationContact filtered by the escalation column
 * @method     NagiosEscalationContact findOneByContact(int $contact) Return the first NagiosEscalationContact filtered by the contact column
 *
 * @method     array findById(int $id) Return NagiosEscalationContact objects filtered by the id column
 * @method     array findByEscalation(int $escalation) Return NagiosEscalationContact objects filtered by the escalation column
 * @method     array findByContact(int $contact) Return NagiosEscalationContact objects filtered by the contact column
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosEscalationContactQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNagiosEscalationContactQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'NagiosEscalationContact', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NagiosEscalationContactQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NagiosEscalationContactQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NagiosEscalationContactQuery) {
			return $criteria;
		}
		$query = new NagiosEscalationContactQuery();
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
	 * @return    NagiosEscalationContact|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NagiosEscalationContactPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    NagiosEscalationContactQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NagiosEscalationContactPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NagiosEscalationContactQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NagiosEscalationContactPeer::ID, $keys, Criteria::IN);
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
	 * @return    NagiosEscalationContactQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NagiosEscalationContactPeer::ID, $id, $comparison);
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
	 * @return    NagiosEscalationContactQuery The current query, for fluid interface
	 */
	public function filterByEscalation($escalation = null, $comparison = null)
	{
		if (is_array($escalation)) {
			$useMinMax = false;
			if (isset($escalation['min'])) {
				$this->addUsingAlias(NagiosEscalationContactPeer::ESCALATION, $escalation['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($escalation['max'])) {
				$this->addUsingAlias(NagiosEscalationContactPeer::ESCALATION, $escalation['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosEscalationContactPeer::ESCALATION, $escalation, $comparison);
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
	 * @return    NagiosEscalationContactQuery The current query, for fluid interface
	 */
	public function filterByContact($contact = null, $comparison = null)
	{
		if (is_array($contact)) {
			$useMinMax = false;
			if (isset($contact['min'])) {
				$this->addUsingAlias(NagiosEscalationContactPeer::CONTACT, $contact['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($contact['max'])) {
				$this->addUsingAlias(NagiosEscalationContactPeer::CONTACT, $contact['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosEscalationContactPeer::CONTACT, $contact, $comparison);
	}

	/**
	 * Filter the query by a related NagiosEscalation object
	 *
	 * @param     NagiosEscalation|PropelCollection $nagiosEscalation The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosEscalationContactQuery The current query, for fluid interface
	 */
	public function filterByNagiosEscalation($nagiosEscalation, $comparison = null)
	{
		if ($nagiosEscalation instanceof NagiosEscalation) {
			return $this
				->addUsingAlias(NagiosEscalationContactPeer::ESCALATION, $nagiosEscalation->getId(), $comparison);
		} elseif ($nagiosEscalation instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosEscalationContactPeer::ESCALATION, $nagiosEscalation->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosEscalationContactQuery The current query, for fluid interface
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
	 * Filter the query by a related NagiosContact object
	 *
	 * @param     NagiosContact|PropelCollection $nagiosContact The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosEscalationContactQuery The current query, for fluid interface
	 */
	public function filterByNagiosContact($nagiosContact, $comparison = null)
	{
		if ($nagiosContact instanceof NagiosContact) {
			return $this
				->addUsingAlias(NagiosEscalationContactPeer::CONTACT, $nagiosContact->getId(), $comparison);
		} elseif ($nagiosContact instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosEscalationContactPeer::CONTACT, $nagiosContact->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosEscalationContactQuery The current query, for fluid interface
	 */
	public function joinNagiosContact($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
	public function useNagiosContactQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinNagiosContact($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosContact', 'NagiosContactQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     NagiosEscalationContact $nagiosEscalationContact Object to remove from the list of results
	 *
	 * @return    NagiosEscalationContactQuery The current query, for fluid interface
	 */
	public function prune($nagiosEscalationContact = null)
	{
		if ($nagiosEscalationContact) {
			$this->addUsingAlias(NagiosEscalationContactPeer::ID, $nagiosEscalationContact->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseNagiosEscalationContactQuery
