<?php


/**
 * Base class that represents a query for the 'nagios_contact_notification_command' table.
 *
 * Notification Command for a Nagios Contact
 *
 * @method     NagiosContactNotificationCommandQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NagiosContactNotificationCommandQuery orderByContactId($order = Criteria::ASC) Order by the contact_id column
 * @method     NagiosContactNotificationCommandQuery orderByCommand($order = Criteria::ASC) Order by the command column
 * @method     NagiosContactNotificationCommandQuery orderByType($order = Criteria::ASC) Order by the type column
 *
 * @method     NagiosContactNotificationCommandQuery groupById() Group by the id column
 * @method     NagiosContactNotificationCommandQuery groupByContactId() Group by the contact_id column
 * @method     NagiosContactNotificationCommandQuery groupByCommand() Group by the command column
 * @method     NagiosContactNotificationCommandQuery groupByType() Group by the type column
 *
 * @method     NagiosContactNotificationCommandQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NagiosContactNotificationCommandQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NagiosContactNotificationCommandQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NagiosContactNotificationCommandQuery leftJoinNagiosContact($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosContact relation
 * @method     NagiosContactNotificationCommandQuery rightJoinNagiosContact($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosContact relation
 * @method     NagiosContactNotificationCommandQuery innerJoinNagiosContact($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosContact relation
 *
 * @method     NagiosContactNotificationCommandQuery leftJoinNagiosCommand($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosCommand relation
 * @method     NagiosContactNotificationCommandQuery rightJoinNagiosCommand($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosCommand relation
 * @method     NagiosContactNotificationCommandQuery innerJoinNagiosCommand($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosCommand relation
 *
 * @method     NagiosContactNotificationCommand findOne(PropelPDO $con = null) Return the first NagiosContactNotificationCommand matching the query
 * @method     NagiosContactNotificationCommand findOneOrCreate(PropelPDO $con = null) Return the first NagiosContactNotificationCommand matching the query, or a new NagiosContactNotificationCommand object populated from the query conditions when no match is found
 *
 * @method     NagiosContactNotificationCommand findOneById(int $id) Return the first NagiosContactNotificationCommand filtered by the id column
 * @method     NagiosContactNotificationCommand findOneByContactId(int $contact_id) Return the first NagiosContactNotificationCommand filtered by the contact_id column
 * @method     NagiosContactNotificationCommand findOneByCommand(int $command) Return the first NagiosContactNotificationCommand filtered by the command column
 * @method     NagiosContactNotificationCommand findOneByType(string $type) Return the first NagiosContactNotificationCommand filtered by the type column
 *
 * @method     array findById(int $id) Return NagiosContactNotificationCommand objects filtered by the id column
 * @method     array findByContactId(int $contact_id) Return NagiosContactNotificationCommand objects filtered by the contact_id column
 * @method     array findByCommand(int $command) Return NagiosContactNotificationCommand objects filtered by the command column
 * @method     array findByType(string $type) Return NagiosContactNotificationCommand objects filtered by the type column
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosContactNotificationCommandQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNagiosContactNotificationCommandQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'NagiosContactNotificationCommand', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NagiosContactNotificationCommandQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NagiosContactNotificationCommandQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NagiosContactNotificationCommandQuery) {
			return $criteria;
		}
		$query = new NagiosContactNotificationCommandQuery();
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
	 * @return    NagiosContactNotificationCommand|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NagiosContactNotificationCommandPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    NagiosContactNotificationCommandQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NagiosContactNotificationCommandPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NagiosContactNotificationCommandQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NagiosContactNotificationCommandPeer::ID, $keys, Criteria::IN);
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
	 * @return    NagiosContactNotificationCommandQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NagiosContactNotificationCommandPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the contact_id column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByContactId(1234); // WHERE contact_id = 1234
	 * $query->filterByContactId(array(12, 34)); // WHERE contact_id IN (12, 34)
	 * $query->filterByContactId(array('min' => 12)); // WHERE contact_id > 12
	 * </code>
	 *
	 * @see       filterByNagiosContact()
	 *
	 * @param     mixed $contactId The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactNotificationCommandQuery The current query, for fluid interface
	 */
	public function filterByContactId($contactId = null, $comparison = null)
	{
		if (is_array($contactId)) {
			$useMinMax = false;
			if (isset($contactId['min'])) {
				$this->addUsingAlias(NagiosContactNotificationCommandPeer::CONTACT_ID, $contactId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($contactId['max'])) {
				$this->addUsingAlias(NagiosContactNotificationCommandPeer::CONTACT_ID, $contactId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosContactNotificationCommandPeer::CONTACT_ID, $contactId, $comparison);
	}

	/**
	 * Filter the query on the command column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByCommand(1234); // WHERE command = 1234
	 * $query->filterByCommand(array(12, 34)); // WHERE command IN (12, 34)
	 * $query->filterByCommand(array('min' => 12)); // WHERE command > 12
	 * </code>
	 *
	 * @see       filterByNagiosCommand()
	 *
	 * @param     mixed $command The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactNotificationCommandQuery The current query, for fluid interface
	 */
	public function filterByCommand($command = null, $comparison = null)
	{
		if (is_array($command)) {
			$useMinMax = false;
			if (isset($command['min'])) {
				$this->addUsingAlias(NagiosContactNotificationCommandPeer::COMMAND, $command['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($command['max'])) {
				$this->addUsingAlias(NagiosContactNotificationCommandPeer::COMMAND, $command['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosContactNotificationCommandPeer::COMMAND, $command, $comparison);
	}

	/**
	 * Filter the query on the type column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByType('fooValue');   // WHERE type = 'fooValue'
	 * $query->filterByType('%fooValue%'); // WHERE type LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $type The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactNotificationCommandQuery The current query, for fluid interface
	 */
	public function filterByType($type = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($type)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $type)) {
				$type = str_replace('*', '%', $type);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosContactNotificationCommandPeer::TYPE, $type, $comparison);
	}

	/**
	 * Filter the query by a related NagiosContact object
	 *
	 * @param     NagiosContact|PropelCollection $nagiosContact The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactNotificationCommandQuery The current query, for fluid interface
	 */
	public function filterByNagiosContact($nagiosContact, $comparison = null)
	{
		if ($nagiosContact instanceof NagiosContact) {
			return $this
				->addUsingAlias(NagiosContactNotificationCommandPeer::CONTACT_ID, $nagiosContact->getId(), $comparison);
		} elseif ($nagiosContact instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosContactNotificationCommandPeer::CONTACT_ID, $nagiosContact->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosContactNotificationCommandQuery The current query, for fluid interface
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
	 * Filter the query by a related NagiosCommand object
	 *
	 * @param     NagiosCommand|PropelCollection $nagiosCommand The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosContactNotificationCommandQuery The current query, for fluid interface
	 */
	public function filterByNagiosCommand($nagiosCommand, $comparison = null)
	{
		if ($nagiosCommand instanceof NagiosCommand) {
			return $this
				->addUsingAlias(NagiosContactNotificationCommandPeer::COMMAND, $nagiosCommand->getId(), $comparison);
		} elseif ($nagiosCommand instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosContactNotificationCommandPeer::COMMAND, $nagiosCommand->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosCommand() only accepts arguments of type NagiosCommand or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosCommand relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosContactNotificationCommandQuery The current query, for fluid interface
	 */
	public function joinNagiosCommand($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosCommand');
		
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
			$this->addJoinObject($join, 'NagiosCommand');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosCommand relation NagiosCommand object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosCommandQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosCommandQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinNagiosCommand($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosCommand', 'NagiosCommandQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     NagiosContactNotificationCommand $nagiosContactNotificationCommand Object to remove from the list of results
	 *
	 * @return    NagiosContactNotificationCommandQuery The current query, for fluid interface
	 */
	public function prune($nagiosContactNotificationCommand = null)
	{
		if ($nagiosContactNotificationCommand) {
			$this->addUsingAlias(NagiosContactNotificationCommandPeer::ID, $nagiosContactNotificationCommand->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseNagiosContactNotificationCommandQuery
