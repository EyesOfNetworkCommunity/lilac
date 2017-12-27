<?php


/**
 * Base class that represents a query for the 'nagios_host_contact_member' table.
 *
 * Contacts which belong to host templates or hosts
 *
 * @method     NagiosHostContactMemberQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NagiosHostContactMemberQuery orderByHost($order = Criteria::ASC) Order by the host column
 * @method     NagiosHostContactMemberQuery orderByTemplate($order = Criteria::ASC) Order by the template column
 * @method     NagiosHostContactMemberQuery orderByContact($order = Criteria::ASC) Order by the contact column
 *
 * @method     NagiosHostContactMemberQuery groupById() Group by the id column
 * @method     NagiosHostContactMemberQuery groupByHost() Group by the host column
 * @method     NagiosHostContactMemberQuery groupByTemplate() Group by the template column
 * @method     NagiosHostContactMemberQuery groupByContact() Group by the contact column
 *
 * @method     NagiosHostContactMemberQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NagiosHostContactMemberQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NagiosHostContactMemberQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NagiosHostContactMemberQuery leftJoinNagiosHost($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHost relation
 * @method     NagiosHostContactMemberQuery rightJoinNagiosHost($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHost relation
 * @method     NagiosHostContactMemberQuery innerJoinNagiosHost($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHost relation
 *
 * @method     NagiosHostContactMemberQuery leftJoinNagiosHostTemplate($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostTemplate relation
 * @method     NagiosHostContactMemberQuery rightJoinNagiosHostTemplate($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostTemplate relation
 * @method     NagiosHostContactMemberQuery innerJoinNagiosHostTemplate($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostTemplate relation
 *
 * @method     NagiosHostContactMemberQuery leftJoinNagiosContact($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosContact relation
 * @method     NagiosHostContactMemberQuery rightJoinNagiosContact($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosContact relation
 * @method     NagiosHostContactMemberQuery innerJoinNagiosContact($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosContact relation
 *
 * @method     NagiosHostContactMember findOne(PropelPDO $con = null) Return the first NagiosHostContactMember matching the query
 * @method     NagiosHostContactMember findOneOrCreate(PropelPDO $con = null) Return the first NagiosHostContactMember matching the query, or a new NagiosHostContactMember object populated from the query conditions when no match is found
 *
 * @method     NagiosHostContactMember findOneById(int $id) Return the first NagiosHostContactMember filtered by the id column
 * @method     NagiosHostContactMember findOneByHost(int $host) Return the first NagiosHostContactMember filtered by the host column
 * @method     NagiosHostContactMember findOneByTemplate(int $template) Return the first NagiosHostContactMember filtered by the template column
 * @method     NagiosHostContactMember findOneByContact(int $contact) Return the first NagiosHostContactMember filtered by the contact column
 *
 * @method     array findById(int $id) Return NagiosHostContactMember objects filtered by the id column
 * @method     array findByHost(int $host) Return NagiosHostContactMember objects filtered by the host column
 * @method     array findByTemplate(int $template) Return NagiosHostContactMember objects filtered by the template column
 * @method     array findByContact(int $contact) Return NagiosHostContactMember objects filtered by the contact column
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosHostContactMemberQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNagiosHostContactMemberQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'NagiosHostContactMember', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NagiosHostContactMemberQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NagiosHostContactMemberQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NagiosHostContactMemberQuery) {
			return $criteria;
		}
		$query = new NagiosHostContactMemberQuery();
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
	 * @return    NagiosHostContactMember|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NagiosHostContactMemberPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    NagiosHostContactMemberQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NagiosHostContactMemberPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NagiosHostContactMemberQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NagiosHostContactMemberPeer::ID, $keys, Criteria::IN);
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
	 * @return    NagiosHostContactMemberQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NagiosHostContactMemberPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the host column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByHost(1234); // WHERE host = 1234
	 * $query->filterByHost(array(12, 34)); // WHERE host IN (12, 34)
	 * $query->filterByHost(array('min' => 12)); // WHERE host > 12
	 * </code>
	 *
	 * @see       filterByNagiosHost()
	 *
	 * @param     mixed $host The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostContactMemberQuery The current query, for fluid interface
	 */
	public function filterByHost($host = null, $comparison = null)
	{
		if (is_array($host)) {
			$useMinMax = false;
			if (isset($host['min'])) {
				$this->addUsingAlias(NagiosHostContactMemberPeer::HOST, $host['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($host['max'])) {
				$this->addUsingAlias(NagiosHostContactMemberPeer::HOST, $host['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosHostContactMemberPeer::HOST, $host, $comparison);
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
	 * @see       filterByNagiosHostTemplate()
	 *
	 * @param     mixed $template The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostContactMemberQuery The current query, for fluid interface
	 */
	public function filterByTemplate($template = null, $comparison = null)
	{
		if (is_array($template)) {
			$useMinMax = false;
			if (isset($template['min'])) {
				$this->addUsingAlias(NagiosHostContactMemberPeer::TEMPLATE, $template['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($template['max'])) {
				$this->addUsingAlias(NagiosHostContactMemberPeer::TEMPLATE, $template['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosHostContactMemberPeer::TEMPLATE, $template, $comparison);
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
	 * @return    NagiosHostContactMemberQuery The current query, for fluid interface
	 */
	public function filterByContact($contact = null, $comparison = null)
	{
		if (is_array($contact)) {
			$useMinMax = false;
			if (isset($contact['min'])) {
				$this->addUsingAlias(NagiosHostContactMemberPeer::CONTACT, $contact['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($contact['max'])) {
				$this->addUsingAlias(NagiosHostContactMemberPeer::CONTACT, $contact['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosHostContactMemberPeer::CONTACT, $contact, $comparison);
	}

	/**
	 * Filter the query by a related NagiosHost object
	 *
	 * @param     NagiosHost|PropelCollection $nagiosHost The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostContactMemberQuery The current query, for fluid interface
	 */
	public function filterByNagiosHost($nagiosHost, $comparison = null)
	{
		if ($nagiosHost instanceof NagiosHost) {
			return $this
				->addUsingAlias(NagiosHostContactMemberPeer::HOST, $nagiosHost->getId(), $comparison);
		} elseif ($nagiosHost instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosHostContactMemberPeer::HOST, $nagiosHost->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosHostContactMemberQuery The current query, for fluid interface
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
	 * @return    NagiosHostContactMemberQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostTemplate($nagiosHostTemplate, $comparison = null)
	{
		if ($nagiosHostTemplate instanceof NagiosHostTemplate) {
			return $this
				->addUsingAlias(NagiosHostContactMemberPeer::TEMPLATE, $nagiosHostTemplate->getId(), $comparison);
		} elseif ($nagiosHostTemplate instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosHostContactMemberPeer::TEMPLATE, $nagiosHostTemplate->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosHostContactMemberQuery The current query, for fluid interface
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
	 * Filter the query by a related NagiosContact object
	 *
	 * @param     NagiosContact|PropelCollection $nagiosContact The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostContactMemberQuery The current query, for fluid interface
	 */
	public function filterByNagiosContact($nagiosContact, $comparison = null)
	{
		if ($nagiosContact instanceof NagiosContact) {
			return $this
				->addUsingAlias(NagiosHostContactMemberPeer::CONTACT, $nagiosContact->getId(), $comparison);
		} elseif ($nagiosContact instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosHostContactMemberPeer::CONTACT, $nagiosContact->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosHostContactMemberQuery The current query, for fluid interface
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
	 * @param     NagiosHostContactMember $nagiosHostContactMember Object to remove from the list of results
	 *
	 * @return    NagiosHostContactMemberQuery The current query, for fluid interface
	 */
	public function prune($nagiosHostContactMember = null)
	{
		if ($nagiosHostContactMember) {
			$this->addUsingAlias(NagiosHostContactMemberPeer::ID, $nagiosHostContactMember->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseNagiosHostContactMemberQuery
