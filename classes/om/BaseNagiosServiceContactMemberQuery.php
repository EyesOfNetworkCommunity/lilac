<?php


/**
 * Base class that represents a query for the 'nagios_service_contact_member' table.
 *
 * Contacts which belong to service templates or services
 *
 * @method     NagiosServiceContactMemberQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NagiosServiceContactMemberQuery orderByService($order = Criteria::ASC) Order by the service column
 * @method     NagiosServiceContactMemberQuery orderByTemplate($order = Criteria::ASC) Order by the template column
 * @method     NagiosServiceContactMemberQuery orderByContact($order = Criteria::ASC) Order by the contact column
 *
 * @method     NagiosServiceContactMemberQuery groupById() Group by the id column
 * @method     NagiosServiceContactMemberQuery groupByService() Group by the service column
 * @method     NagiosServiceContactMemberQuery groupByTemplate() Group by the template column
 * @method     NagiosServiceContactMemberQuery groupByContact() Group by the contact column
 *
 * @method     NagiosServiceContactMemberQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NagiosServiceContactMemberQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NagiosServiceContactMemberQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NagiosServiceContactMemberQuery leftJoinNagiosService($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosService relation
 * @method     NagiosServiceContactMemberQuery rightJoinNagiosService($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosService relation
 * @method     NagiosServiceContactMemberQuery innerJoinNagiosService($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosService relation
 *
 * @method     NagiosServiceContactMemberQuery leftJoinNagiosServiceTemplate($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosServiceTemplate relation
 * @method     NagiosServiceContactMemberQuery rightJoinNagiosServiceTemplate($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosServiceTemplate relation
 * @method     NagiosServiceContactMemberQuery innerJoinNagiosServiceTemplate($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosServiceTemplate relation
 *
 * @method     NagiosServiceContactMemberQuery leftJoinNagiosContact($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosContact relation
 * @method     NagiosServiceContactMemberQuery rightJoinNagiosContact($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosContact relation
 * @method     NagiosServiceContactMemberQuery innerJoinNagiosContact($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosContact relation
 *
 * @method     NagiosServiceContactMember findOne(PropelPDO $con = null) Return the first NagiosServiceContactMember matching the query
 * @method     NagiosServiceContactMember findOneOrCreate(PropelPDO $con = null) Return the first NagiosServiceContactMember matching the query, or a new NagiosServiceContactMember object populated from the query conditions when no match is found
 *
 * @method     NagiosServiceContactMember findOneById(int $id) Return the first NagiosServiceContactMember filtered by the id column
 * @method     NagiosServiceContactMember findOneByService(int $service) Return the first NagiosServiceContactMember filtered by the service column
 * @method     NagiosServiceContactMember findOneByTemplate(int $template) Return the first NagiosServiceContactMember filtered by the template column
 * @method     NagiosServiceContactMember findOneByContact(int $contact) Return the first NagiosServiceContactMember filtered by the contact column
 *
 * @method     array findById(int $id) Return NagiosServiceContactMember objects filtered by the id column
 * @method     array findByService(int $service) Return NagiosServiceContactMember objects filtered by the service column
 * @method     array findByTemplate(int $template) Return NagiosServiceContactMember objects filtered by the template column
 * @method     array findByContact(int $contact) Return NagiosServiceContactMember objects filtered by the contact column
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosServiceContactMemberQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNagiosServiceContactMemberQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'NagiosServiceContactMember', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NagiosServiceContactMemberQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NagiosServiceContactMemberQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NagiosServiceContactMemberQuery) {
			return $criteria;
		}
		$query = new NagiosServiceContactMemberQuery();
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
	 * @return    NagiosServiceContactMember|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NagiosServiceContactMemberPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    NagiosServiceContactMemberQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NagiosServiceContactMemberPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NagiosServiceContactMemberQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NagiosServiceContactMemberPeer::ID, $keys, Criteria::IN);
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
	 * @return    NagiosServiceContactMemberQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NagiosServiceContactMemberPeer::ID, $id, $comparison);
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
	 * @return    NagiosServiceContactMemberQuery The current query, for fluid interface
	 */
	public function filterByService($service = null, $comparison = null)
	{
		if (is_array($service)) {
			$useMinMax = false;
			if (isset($service['min'])) {
				$this->addUsingAlias(NagiosServiceContactMemberPeer::SERVICE, $service['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($service['max'])) {
				$this->addUsingAlias(NagiosServiceContactMemberPeer::SERVICE, $service['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosServiceContactMemberPeer::SERVICE, $service, $comparison);
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
	 * @return    NagiosServiceContactMemberQuery The current query, for fluid interface
	 */
	public function filterByTemplate($template = null, $comparison = null)
	{
		if (is_array($template)) {
			$useMinMax = false;
			if (isset($template['min'])) {
				$this->addUsingAlias(NagiosServiceContactMemberPeer::TEMPLATE, $template['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($template['max'])) {
				$this->addUsingAlias(NagiosServiceContactMemberPeer::TEMPLATE, $template['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosServiceContactMemberPeer::TEMPLATE, $template, $comparison);
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
	 * @return    NagiosServiceContactMemberQuery The current query, for fluid interface
	 */
	public function filterByContact($contact = null, $comparison = null)
	{
		if (is_array($contact)) {
			$useMinMax = false;
			if (isset($contact['min'])) {
				$this->addUsingAlias(NagiosServiceContactMemberPeer::CONTACT, $contact['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($contact['max'])) {
				$this->addUsingAlias(NagiosServiceContactMemberPeer::CONTACT, $contact['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosServiceContactMemberPeer::CONTACT, $contact, $comparison);
	}

	/**
	 * Filter the query by a related NagiosService object
	 *
	 * @param     NagiosService|PropelCollection $nagiosService The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceContactMemberQuery The current query, for fluid interface
	 */
	public function filterByNagiosService($nagiosService, $comparison = null)
	{
		if ($nagiosService instanceof NagiosService) {
			return $this
				->addUsingAlias(NagiosServiceContactMemberPeer::SERVICE, $nagiosService->getId(), $comparison);
		} elseif ($nagiosService instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosServiceContactMemberPeer::SERVICE, $nagiosService->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosServiceContactMemberQuery The current query, for fluid interface
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
	 * @return    NagiosServiceContactMemberQuery The current query, for fluid interface
	 */
	public function filterByNagiosServiceTemplate($nagiosServiceTemplate, $comparison = null)
	{
		if ($nagiosServiceTemplate instanceof NagiosServiceTemplate) {
			return $this
				->addUsingAlias(NagiosServiceContactMemberPeer::TEMPLATE, $nagiosServiceTemplate->getId(), $comparison);
		} elseif ($nagiosServiceTemplate instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosServiceContactMemberPeer::TEMPLATE, $nagiosServiceTemplate->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosServiceContactMemberQuery The current query, for fluid interface
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
	 * Filter the query by a related NagiosContact object
	 *
	 * @param     NagiosContact|PropelCollection $nagiosContact The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceContactMemberQuery The current query, for fluid interface
	 */
	public function filterByNagiosContact($nagiosContact, $comparison = null)
	{
		if ($nagiosContact instanceof NagiosContact) {
			return $this
				->addUsingAlias(NagiosServiceContactMemberPeer::CONTACT, $nagiosContact->getId(), $comparison);
		} elseif ($nagiosContact instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosServiceContactMemberPeer::CONTACT, $nagiosContact->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosServiceContactMemberQuery The current query, for fluid interface
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
	 * @param     NagiosServiceContactMember $nagiosServiceContactMember Object to remove from the list of results
	 *
	 * @return    NagiosServiceContactMemberQuery The current query, for fluid interface
	 */
	public function prune($nagiosServiceContactMember = null)
	{
		if ($nagiosServiceContactMember) {
			$this->addUsingAlias(NagiosServiceContactMemberPeer::ID, $nagiosServiceContactMember->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseNagiosServiceContactMemberQuery
