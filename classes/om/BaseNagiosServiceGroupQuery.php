<?php


/**
 * Base class that represents a query for the 'nagios_service_group' table.
 *
 * Nagios  Service Group
 *
 * @method     NagiosServiceGroupQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NagiosServiceGroupQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     NagiosServiceGroupQuery orderByAlias($order = Criteria::ASC) Order by the alias column
 * @method     NagiosServiceGroupQuery orderByNotes($order = Criteria::ASC) Order by the notes column
 * @method     NagiosServiceGroupQuery orderByNotesUrl($order = Criteria::ASC) Order by the notes_url column
 * @method     NagiosServiceGroupQuery orderByActionUrl($order = Criteria::ASC) Order by the action_url column
 *
 * @method     NagiosServiceGroupQuery groupById() Group by the id column
 * @method     NagiosServiceGroupQuery groupByName() Group by the name column
 * @method     NagiosServiceGroupQuery groupByAlias() Group by the alias column
 * @method     NagiosServiceGroupQuery groupByNotes() Group by the notes column
 * @method     NagiosServiceGroupQuery groupByNotesUrl() Group by the notes_url column
 * @method     NagiosServiceGroupQuery groupByActionUrl() Group by the action_url column
 *
 * @method     NagiosServiceGroupQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NagiosServiceGroupQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NagiosServiceGroupQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NagiosServiceGroupQuery leftJoinNagiosServiceGroupMember($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosServiceGroupMember relation
 * @method     NagiosServiceGroupQuery rightJoinNagiosServiceGroupMember($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosServiceGroupMember relation
 * @method     NagiosServiceGroupQuery innerJoinNagiosServiceGroupMember($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosServiceGroupMember relation
 *
 * @method     NagiosServiceGroup findOne(PropelPDO $con = null) Return the first NagiosServiceGroup matching the query
 * @method     NagiosServiceGroup findOneOrCreate(PropelPDO $con = null) Return the first NagiosServiceGroup matching the query, or a new NagiosServiceGroup object populated from the query conditions when no match is found
 *
 * @method     NagiosServiceGroup findOneById(int $id) Return the first NagiosServiceGroup filtered by the id column
 * @method     NagiosServiceGroup findOneByName(string $name) Return the first NagiosServiceGroup filtered by the name column
 * @method     NagiosServiceGroup findOneByAlias(string $alias) Return the first NagiosServiceGroup filtered by the alias column
 * @method     NagiosServiceGroup findOneByNotes(string $notes) Return the first NagiosServiceGroup filtered by the notes column
 * @method     NagiosServiceGroup findOneByNotesUrl(string $notes_url) Return the first NagiosServiceGroup filtered by the notes_url column
 * @method     NagiosServiceGroup findOneByActionUrl(string $action_url) Return the first NagiosServiceGroup filtered by the action_url column
 *
 * @method     array findById(int $id) Return NagiosServiceGroup objects filtered by the id column
 * @method     array findByName(string $name) Return NagiosServiceGroup objects filtered by the name column
 * @method     array findByAlias(string $alias) Return NagiosServiceGroup objects filtered by the alias column
 * @method     array findByNotes(string $notes) Return NagiosServiceGroup objects filtered by the notes column
 * @method     array findByNotesUrl(string $notes_url) Return NagiosServiceGroup objects filtered by the notes_url column
 * @method     array findByActionUrl(string $action_url) Return NagiosServiceGroup objects filtered by the action_url column
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosServiceGroupQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNagiosServiceGroupQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'NagiosServiceGroup', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NagiosServiceGroupQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NagiosServiceGroupQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NagiosServiceGroupQuery) {
			return $criteria;
		}
		$query = new NagiosServiceGroupQuery();
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
	 * @return    NagiosServiceGroup|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NagiosServiceGroupPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    NagiosServiceGroupQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NagiosServiceGroupPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NagiosServiceGroupQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NagiosServiceGroupPeer::ID, $keys, Criteria::IN);
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
	 * @return    NagiosServiceGroupQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NagiosServiceGroupPeer::ID, $id, $comparison);
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
	 * @return    NagiosServiceGroupQuery The current query, for fluid interface
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
		return $this->addUsingAlias(NagiosServiceGroupPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the alias column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByAlias('fooValue');   // WHERE alias = 'fooValue'
	 * $query->filterByAlias('%fooValue%'); // WHERE alias LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $alias The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceGroupQuery The current query, for fluid interface
	 */
	public function filterByAlias($alias = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($alias)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $alias)) {
				$alias = str_replace('*', '%', $alias);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosServiceGroupPeer::ALIAS, $alias, $comparison);
	}

	/**
	 * Filter the query on the notes column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNotes('fooValue');   // WHERE notes = 'fooValue'
	 * $query->filterByNotes('%fooValue%'); // WHERE notes LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $notes The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceGroupQuery The current query, for fluid interface
	 */
	public function filterByNotes($notes = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($notes)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $notes)) {
				$notes = str_replace('*', '%', $notes);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosServiceGroupPeer::NOTES, $notes, $comparison);
	}

	/**
	 * Filter the query on the notes_url column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNotesUrl('fooValue');   // WHERE notes_url = 'fooValue'
	 * $query->filterByNotesUrl('%fooValue%'); // WHERE notes_url LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $notesUrl The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceGroupQuery The current query, for fluid interface
	 */
	public function filterByNotesUrl($notesUrl = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($notesUrl)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $notesUrl)) {
				$notesUrl = str_replace('*', '%', $notesUrl);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosServiceGroupPeer::NOTES_URL, $notesUrl, $comparison);
	}

	/**
	 * Filter the query on the action_url column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByActionUrl('fooValue');   // WHERE action_url = 'fooValue'
	 * $query->filterByActionUrl('%fooValue%'); // WHERE action_url LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $actionUrl The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceGroupQuery The current query, for fluid interface
	 */
	public function filterByActionUrl($actionUrl = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($actionUrl)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $actionUrl)) {
				$actionUrl = str_replace('*', '%', $actionUrl);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosServiceGroupPeer::ACTION_URL, $actionUrl, $comparison);
	}

	/**
	 * Filter the query by a related NagiosServiceGroupMember object
	 *
	 * @param     NagiosServiceGroupMember $nagiosServiceGroupMember  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceGroupQuery The current query, for fluid interface
	 */
	public function filterByNagiosServiceGroupMember($nagiosServiceGroupMember, $comparison = null)
	{
		if ($nagiosServiceGroupMember instanceof NagiosServiceGroupMember) {
			return $this
				->addUsingAlias(NagiosServiceGroupPeer::ID, $nagiosServiceGroupMember->getServiceGroup(), $comparison);
		} elseif ($nagiosServiceGroupMember instanceof PropelCollection) {
			return $this
				->useNagiosServiceGroupMemberQuery()
					->filterByPrimaryKeys($nagiosServiceGroupMember->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosServiceGroupMember() only accepts arguments of type NagiosServiceGroupMember or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosServiceGroupMember relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceGroupQuery The current query, for fluid interface
	 */
	public function joinNagiosServiceGroupMember($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosServiceGroupMember');
		
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
			$this->addJoinObject($join, 'NagiosServiceGroupMember');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosServiceGroupMember relation NagiosServiceGroupMember object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceGroupMemberQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosServiceGroupMemberQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosServiceGroupMember($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosServiceGroupMember', 'NagiosServiceGroupMemberQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     NagiosServiceGroup $nagiosServiceGroup Object to remove from the list of results
	 *
	 * @return    NagiosServiceGroupQuery The current query, for fluid interface
	 */
	public function prune($nagiosServiceGroup = null)
	{
		if ($nagiosServiceGroup) {
			$this->addUsingAlias(NagiosServiceGroupPeer::ID, $nagiosServiceGroup->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseNagiosServiceGroupQuery
