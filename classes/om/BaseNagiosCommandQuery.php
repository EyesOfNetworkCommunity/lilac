<?php


/**
 * Base class that represents a query for the 'nagios_command' table.
 *
 * Nagios Command
 *
 * @method     NagiosCommandQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NagiosCommandQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     NagiosCommandQuery orderByLine($order = Criteria::ASC) Order by the line column
 * @method     NagiosCommandQuery orderByDescription($order = Criteria::ASC) Order by the description column
 *
 * @method     NagiosCommandQuery groupById() Group by the id column
 * @method     NagiosCommandQuery groupByName() Group by the name column
 * @method     NagiosCommandQuery groupByLine() Group by the line column
 * @method     NagiosCommandQuery groupByDescription() Group by the description column
 *
 * @method     NagiosCommandQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NagiosCommandQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NagiosCommandQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NagiosCommandQuery leftJoinNagiosContactNotificationCommand($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosContactNotificationCommand relation
 * @method     NagiosCommandQuery rightJoinNagiosContactNotificationCommand($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosContactNotificationCommand relation
 * @method     NagiosCommandQuery innerJoinNagiosContactNotificationCommand($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosContactNotificationCommand relation
 *
 * @method     NagiosCommandQuery leftJoinNagiosHostTemplateRelatedByCheckCommand($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostTemplateRelatedByCheckCommand relation
 * @method     NagiosCommandQuery rightJoinNagiosHostTemplateRelatedByCheckCommand($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostTemplateRelatedByCheckCommand relation
 * @method     NagiosCommandQuery innerJoinNagiosHostTemplateRelatedByCheckCommand($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostTemplateRelatedByCheckCommand relation
 *
 * @method     NagiosCommandQuery leftJoinNagiosHostTemplateRelatedByEventHandler($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostTemplateRelatedByEventHandler relation
 * @method     NagiosCommandQuery rightJoinNagiosHostTemplateRelatedByEventHandler($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostTemplateRelatedByEventHandler relation
 * @method     NagiosCommandQuery innerJoinNagiosHostTemplateRelatedByEventHandler($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostTemplateRelatedByEventHandler relation
 *
 * @method     NagiosCommandQuery leftJoinNagiosHostRelatedByCheckCommand($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostRelatedByCheckCommand relation
 * @method     NagiosCommandQuery rightJoinNagiosHostRelatedByCheckCommand($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostRelatedByCheckCommand relation
 * @method     NagiosCommandQuery innerJoinNagiosHostRelatedByCheckCommand($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostRelatedByCheckCommand relation
 *
 * @method     NagiosCommandQuery leftJoinNagiosHostRelatedByEventHandler($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostRelatedByEventHandler relation
 * @method     NagiosCommandQuery rightJoinNagiosHostRelatedByEventHandler($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostRelatedByEventHandler relation
 * @method     NagiosCommandQuery innerJoinNagiosHostRelatedByEventHandler($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostRelatedByEventHandler relation
 *
 * @method     NagiosCommandQuery leftJoinNagiosServiceTemplateRelatedByCheckCommand($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosServiceTemplateRelatedByCheckCommand relation
 * @method     NagiosCommandQuery rightJoinNagiosServiceTemplateRelatedByCheckCommand($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosServiceTemplateRelatedByCheckCommand relation
 * @method     NagiosCommandQuery innerJoinNagiosServiceTemplateRelatedByCheckCommand($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosServiceTemplateRelatedByCheckCommand relation
 *
 * @method     NagiosCommandQuery leftJoinNagiosServiceTemplateRelatedByEventHandler($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosServiceTemplateRelatedByEventHandler relation
 * @method     NagiosCommandQuery rightJoinNagiosServiceTemplateRelatedByEventHandler($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosServiceTemplateRelatedByEventHandler relation
 * @method     NagiosCommandQuery innerJoinNagiosServiceTemplateRelatedByEventHandler($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosServiceTemplateRelatedByEventHandler relation
 *
 * @method     NagiosCommandQuery leftJoinNagiosServiceRelatedByCheckCommand($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosServiceRelatedByCheckCommand relation
 * @method     NagiosCommandQuery rightJoinNagiosServiceRelatedByCheckCommand($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosServiceRelatedByCheckCommand relation
 * @method     NagiosCommandQuery innerJoinNagiosServiceRelatedByCheckCommand($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosServiceRelatedByCheckCommand relation
 *
 * @method     NagiosCommandQuery leftJoinNagiosServiceRelatedByEventHandler($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosServiceRelatedByEventHandler relation
 * @method     NagiosCommandQuery rightJoinNagiosServiceRelatedByEventHandler($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosServiceRelatedByEventHandler relation
 * @method     NagiosCommandQuery innerJoinNagiosServiceRelatedByEventHandler($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosServiceRelatedByEventHandler relation
 *
 * @method     NagiosCommandQuery leftJoinNagiosMainConfigurationRelatedByOcspCommand($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosMainConfigurationRelatedByOcspCommand relation
 * @method     NagiosCommandQuery rightJoinNagiosMainConfigurationRelatedByOcspCommand($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosMainConfigurationRelatedByOcspCommand relation
 * @method     NagiosCommandQuery innerJoinNagiosMainConfigurationRelatedByOcspCommand($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosMainConfigurationRelatedByOcspCommand relation
 *
 * @method     NagiosCommandQuery leftJoinNagiosMainConfigurationRelatedByOchpCommand($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosMainConfigurationRelatedByOchpCommand relation
 * @method     NagiosCommandQuery rightJoinNagiosMainConfigurationRelatedByOchpCommand($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosMainConfigurationRelatedByOchpCommand relation
 * @method     NagiosCommandQuery innerJoinNagiosMainConfigurationRelatedByOchpCommand($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosMainConfigurationRelatedByOchpCommand relation
 *
 * @method     NagiosCommandQuery leftJoinNagiosMainConfigurationRelatedByHostPerfdataCommand($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosMainConfigurationRelatedByHostPerfdataCommand relation
 * @method     NagiosCommandQuery rightJoinNagiosMainConfigurationRelatedByHostPerfdataCommand($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosMainConfigurationRelatedByHostPerfdataCommand relation
 * @method     NagiosCommandQuery innerJoinNagiosMainConfigurationRelatedByHostPerfdataCommand($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosMainConfigurationRelatedByHostPerfdataCommand relation
 *
 * @method     NagiosCommandQuery leftJoinNagiosMainConfigurationRelatedByServicePerfdataCommand($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosMainConfigurationRelatedByServicePerfdataCommand relation
 * @method     NagiosCommandQuery rightJoinNagiosMainConfigurationRelatedByServicePerfdataCommand($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosMainConfigurationRelatedByServicePerfdataCommand relation
 * @method     NagiosCommandQuery innerJoinNagiosMainConfigurationRelatedByServicePerfdataCommand($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosMainConfigurationRelatedByServicePerfdataCommand relation
 *
 * @method     NagiosCommandQuery leftJoinNagiosMainConfigurationRelatedByHostPerfdataFileProcessingCommand($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosMainConfigurationRelatedByHostPerfdataFileProcessingCommand relation
 * @method     NagiosCommandQuery rightJoinNagiosMainConfigurationRelatedByHostPerfdataFileProcessingCommand($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosMainConfigurationRelatedByHostPerfdataFileProcessingCommand relation
 * @method     NagiosCommandQuery innerJoinNagiosMainConfigurationRelatedByHostPerfdataFileProcessingCommand($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosMainConfigurationRelatedByHostPerfdataFileProcessingCommand relation
 *
 * @method     NagiosCommandQuery leftJoinNagiosMainConfigurationRelatedByServicePerfdataFileProcessingCommand($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosMainConfigurationRelatedByServicePerfdataFileProcessingCommand relation
 * @method     NagiosCommandQuery rightJoinNagiosMainConfigurationRelatedByServicePerfdataFileProcessingCommand($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosMainConfigurationRelatedByServicePerfdataFileProcessingCommand relation
 * @method     NagiosCommandQuery innerJoinNagiosMainConfigurationRelatedByServicePerfdataFileProcessingCommand($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosMainConfigurationRelatedByServicePerfdataFileProcessingCommand relation
 *
 * @method     NagiosCommandQuery leftJoinNagiosMainConfigurationRelatedByGlobalServiceEventHandler($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosMainConfigurationRelatedByGlobalServiceEventHandler relation
 * @method     NagiosCommandQuery rightJoinNagiosMainConfigurationRelatedByGlobalServiceEventHandler($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosMainConfigurationRelatedByGlobalServiceEventHandler relation
 * @method     NagiosCommandQuery innerJoinNagiosMainConfigurationRelatedByGlobalServiceEventHandler($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosMainConfigurationRelatedByGlobalServiceEventHandler relation
 *
 * @method     NagiosCommandQuery leftJoinNagiosMainConfigurationRelatedByGlobalHostEventHandler($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosMainConfigurationRelatedByGlobalHostEventHandler relation
 * @method     NagiosCommandQuery rightJoinNagiosMainConfigurationRelatedByGlobalHostEventHandler($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosMainConfigurationRelatedByGlobalHostEventHandler relation
 * @method     NagiosCommandQuery innerJoinNagiosMainConfigurationRelatedByGlobalHostEventHandler($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosMainConfigurationRelatedByGlobalHostEventHandler relation
 *
 * @method     NagiosCommand findOne(PropelPDO $con = null) Return the first NagiosCommand matching the query
 * @method     NagiosCommand findOneOrCreate(PropelPDO $con = null) Return the first NagiosCommand matching the query, or a new NagiosCommand object populated from the query conditions when no match is found
 *
 * @method     NagiosCommand findOneById(int $id) Return the first NagiosCommand filtered by the id column
 * @method     NagiosCommand findOneByName(string $name) Return the first NagiosCommand filtered by the name column
 * @method     NagiosCommand findOneByLine(string $line) Return the first NagiosCommand filtered by the line column
 * @method     NagiosCommand findOneByDescription(string $description) Return the first NagiosCommand filtered by the description column
 *
 * @method     array findById(int $id) Return NagiosCommand objects filtered by the id column
 * @method     array findByName(string $name) Return NagiosCommand objects filtered by the name column
 * @method     array findByLine(string $line) Return NagiosCommand objects filtered by the line column
 * @method     array findByDescription(string $description) Return NagiosCommand objects filtered by the description column
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosCommandQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNagiosCommandQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'NagiosCommand', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NagiosCommandQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NagiosCommandQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NagiosCommandQuery) {
			return $criteria;
		}
		$query = new NagiosCommandQuery();
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
	 * @return    NagiosCommand|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NagiosCommandPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NagiosCommandPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NagiosCommandPeer::ID, $keys, Criteria::IN);
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
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NagiosCommandPeer::ID, $id, $comparison);
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
	 * @return    NagiosCommandQuery The current query, for fluid interface
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
		return $this->addUsingAlias(NagiosCommandPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the line column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByLine('fooValue');   // WHERE line = 'fooValue'
	 * $query->filterByLine('%fooValue%'); // WHERE line LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $line The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function filterByLine($line = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($line)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $line)) {
				$line = str_replace('*', '%', $line);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosCommandPeer::LINE, $line, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
	 * $query->filterByDescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $description The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function filterByDescription($description = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($description)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $description)) {
				$description = str_replace('*', '%', $description);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosCommandPeer::DESCRIPTION, $description, $comparison);
	}

	/**
	 * Filter the query by a related NagiosContactNotificationCommand object
	 *
	 * @param     NagiosContactNotificationCommand $nagiosContactNotificationCommand  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function filterByNagiosContactNotificationCommand($nagiosContactNotificationCommand, $comparison = null)
	{
		if ($nagiosContactNotificationCommand instanceof NagiosContactNotificationCommand) {
			return $this
				->addUsingAlias(NagiosCommandPeer::ID, $nagiosContactNotificationCommand->getCommand(), $comparison);
		} elseif ($nagiosContactNotificationCommand instanceof PropelCollection) {
			return $this
				->useNagiosContactNotificationCommandQuery()
					->filterByPrimaryKeys($nagiosContactNotificationCommand->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosContactNotificationCommand() only accepts arguments of type NagiosContactNotificationCommand or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosContactNotificationCommand relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function joinNagiosContactNotificationCommand($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosContactNotificationCommand');
		
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
			$this->addJoinObject($join, 'NagiosContactNotificationCommand');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosContactNotificationCommand relation NagiosContactNotificationCommand object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosContactNotificationCommandQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosContactNotificationCommandQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinNagiosContactNotificationCommand($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosContactNotificationCommand', 'NagiosContactNotificationCommandQuery');
	}

	/**
	 * Filter the query by a related NagiosHostTemplate object
	 *
	 * @param     NagiosHostTemplate $nagiosHostTemplate  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostTemplateRelatedByCheckCommand($nagiosHostTemplate, $comparison = null)
	{
		if ($nagiosHostTemplate instanceof NagiosHostTemplate) {
			return $this
				->addUsingAlias(NagiosCommandPeer::ID, $nagiosHostTemplate->getCheckCommand(), $comparison);
		} elseif ($nagiosHostTemplate instanceof PropelCollection) {
			return $this
				->useNagiosHostTemplateRelatedByCheckCommandQuery()
					->filterByPrimaryKeys($nagiosHostTemplate->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosHostTemplateRelatedByCheckCommand() only accepts arguments of type NagiosHostTemplate or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosHostTemplateRelatedByCheckCommand relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function joinNagiosHostTemplateRelatedByCheckCommand($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosHostTemplateRelatedByCheckCommand');
		
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
			$this->addJoinObject($join, 'NagiosHostTemplateRelatedByCheckCommand');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosHostTemplateRelatedByCheckCommand relation NagiosHostTemplate object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostTemplateQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosHostTemplateRelatedByCheckCommandQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosHostTemplateRelatedByCheckCommand($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosHostTemplateRelatedByCheckCommand', 'NagiosHostTemplateQuery');
	}

	/**
	 * Filter the query by a related NagiosHostTemplate object
	 *
	 * @param     NagiosHostTemplate $nagiosHostTemplate  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostTemplateRelatedByEventHandler($nagiosHostTemplate, $comparison = null)
	{
		if ($nagiosHostTemplate instanceof NagiosHostTemplate) {
			return $this
				->addUsingAlias(NagiosCommandPeer::ID, $nagiosHostTemplate->getEventHandler(), $comparison);
		} elseif ($nagiosHostTemplate instanceof PropelCollection) {
			return $this
				->useNagiosHostTemplateRelatedByEventHandlerQuery()
					->filterByPrimaryKeys($nagiosHostTemplate->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosHostTemplateRelatedByEventHandler() only accepts arguments of type NagiosHostTemplate or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosHostTemplateRelatedByEventHandler relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function joinNagiosHostTemplateRelatedByEventHandler($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosHostTemplateRelatedByEventHandler');
		
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
			$this->addJoinObject($join, 'NagiosHostTemplateRelatedByEventHandler');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosHostTemplateRelatedByEventHandler relation NagiosHostTemplate object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostTemplateQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosHostTemplateRelatedByEventHandlerQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosHostTemplateRelatedByEventHandler($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosHostTemplateRelatedByEventHandler', 'NagiosHostTemplateQuery');
	}

	/**
	 * Filter the query by a related NagiosHost object
	 *
	 * @param     NagiosHost $nagiosHost  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostRelatedByCheckCommand($nagiosHost, $comparison = null)
	{
		if ($nagiosHost instanceof NagiosHost) {
			return $this
				->addUsingAlias(NagiosCommandPeer::ID, $nagiosHost->getCheckCommand(), $comparison);
		} elseif ($nagiosHost instanceof PropelCollection) {
			return $this
				->useNagiosHostRelatedByCheckCommandQuery()
					->filterByPrimaryKeys($nagiosHost->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosHostRelatedByCheckCommand() only accepts arguments of type NagiosHost or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosHostRelatedByCheckCommand relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function joinNagiosHostRelatedByCheckCommand($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosHostRelatedByCheckCommand');
		
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
			$this->addJoinObject($join, 'NagiosHostRelatedByCheckCommand');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosHostRelatedByCheckCommand relation NagiosHost object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosHostRelatedByCheckCommandQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosHostRelatedByCheckCommand($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosHostRelatedByCheckCommand', 'NagiosHostQuery');
	}

	/**
	 * Filter the query by a related NagiosHost object
	 *
	 * @param     NagiosHost $nagiosHost  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostRelatedByEventHandler($nagiosHost, $comparison = null)
	{
		if ($nagiosHost instanceof NagiosHost) {
			return $this
				->addUsingAlias(NagiosCommandPeer::ID, $nagiosHost->getEventHandler(), $comparison);
		} elseif ($nagiosHost instanceof PropelCollection) {
			return $this
				->useNagiosHostRelatedByEventHandlerQuery()
					->filterByPrimaryKeys($nagiosHost->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosHostRelatedByEventHandler() only accepts arguments of type NagiosHost or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosHostRelatedByEventHandler relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function joinNagiosHostRelatedByEventHandler($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosHostRelatedByEventHandler');
		
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
			$this->addJoinObject($join, 'NagiosHostRelatedByEventHandler');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosHostRelatedByEventHandler relation NagiosHost object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosHostRelatedByEventHandlerQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosHostRelatedByEventHandler($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosHostRelatedByEventHandler', 'NagiosHostQuery');
	}

	/**
	 * Filter the query by a related NagiosServiceTemplate object
	 *
	 * @param     NagiosServiceTemplate $nagiosServiceTemplate  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function filterByNagiosServiceTemplateRelatedByCheckCommand($nagiosServiceTemplate, $comparison = null)
	{
		if ($nagiosServiceTemplate instanceof NagiosServiceTemplate) {
			return $this
				->addUsingAlias(NagiosCommandPeer::ID, $nagiosServiceTemplate->getCheckCommand(), $comparison);
		} elseif ($nagiosServiceTemplate instanceof PropelCollection) {
			return $this
				->useNagiosServiceTemplateRelatedByCheckCommandQuery()
					->filterByPrimaryKeys($nagiosServiceTemplate->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosServiceTemplateRelatedByCheckCommand() only accepts arguments of type NagiosServiceTemplate or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosServiceTemplateRelatedByCheckCommand relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function joinNagiosServiceTemplateRelatedByCheckCommand($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosServiceTemplateRelatedByCheckCommand');
		
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
			$this->addJoinObject($join, 'NagiosServiceTemplateRelatedByCheckCommand');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosServiceTemplateRelatedByCheckCommand relation NagiosServiceTemplate object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceTemplateQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosServiceTemplateRelatedByCheckCommandQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosServiceTemplateRelatedByCheckCommand($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosServiceTemplateRelatedByCheckCommand', 'NagiosServiceTemplateQuery');
	}

	/**
	 * Filter the query by a related NagiosServiceTemplate object
	 *
	 * @param     NagiosServiceTemplate $nagiosServiceTemplate  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function filterByNagiosServiceTemplateRelatedByEventHandler($nagiosServiceTemplate, $comparison = null)
	{
		if ($nagiosServiceTemplate instanceof NagiosServiceTemplate) {
			return $this
				->addUsingAlias(NagiosCommandPeer::ID, $nagiosServiceTemplate->getEventHandler(), $comparison);
		} elseif ($nagiosServiceTemplate instanceof PropelCollection) {
			return $this
				->useNagiosServiceTemplateRelatedByEventHandlerQuery()
					->filterByPrimaryKeys($nagiosServiceTemplate->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosServiceTemplateRelatedByEventHandler() only accepts arguments of type NagiosServiceTemplate or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosServiceTemplateRelatedByEventHandler relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function joinNagiosServiceTemplateRelatedByEventHandler($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosServiceTemplateRelatedByEventHandler');
		
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
			$this->addJoinObject($join, 'NagiosServiceTemplateRelatedByEventHandler');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosServiceTemplateRelatedByEventHandler relation NagiosServiceTemplate object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceTemplateQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosServiceTemplateRelatedByEventHandlerQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosServiceTemplateRelatedByEventHandler($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosServiceTemplateRelatedByEventHandler', 'NagiosServiceTemplateQuery');
	}

	/**
	 * Filter the query by a related NagiosService object
	 *
	 * @param     NagiosService $nagiosService  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function filterByNagiosServiceRelatedByCheckCommand($nagiosService, $comparison = null)
	{
		if ($nagiosService instanceof NagiosService) {
			return $this
				->addUsingAlias(NagiosCommandPeer::ID, $nagiosService->getCheckCommand(), $comparison);
		} elseif ($nagiosService instanceof PropelCollection) {
			return $this
				->useNagiosServiceRelatedByCheckCommandQuery()
					->filterByPrimaryKeys($nagiosService->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosServiceRelatedByCheckCommand() only accepts arguments of type NagiosService or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosServiceRelatedByCheckCommand relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function joinNagiosServiceRelatedByCheckCommand($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosServiceRelatedByCheckCommand');
		
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
			$this->addJoinObject($join, 'NagiosServiceRelatedByCheckCommand');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosServiceRelatedByCheckCommand relation NagiosService object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosServiceRelatedByCheckCommandQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosServiceRelatedByCheckCommand($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosServiceRelatedByCheckCommand', 'NagiosServiceQuery');
	}

	/**
	 * Filter the query by a related NagiosService object
	 *
	 * @param     NagiosService $nagiosService  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function filterByNagiosServiceRelatedByEventHandler($nagiosService, $comparison = null)
	{
		if ($nagiosService instanceof NagiosService) {
			return $this
				->addUsingAlias(NagiosCommandPeer::ID, $nagiosService->getEventHandler(), $comparison);
		} elseif ($nagiosService instanceof PropelCollection) {
			return $this
				->useNagiosServiceRelatedByEventHandlerQuery()
					->filterByPrimaryKeys($nagiosService->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosServiceRelatedByEventHandler() only accepts arguments of type NagiosService or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosServiceRelatedByEventHandler relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function joinNagiosServiceRelatedByEventHandler($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosServiceRelatedByEventHandler');
		
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
			$this->addJoinObject($join, 'NagiosServiceRelatedByEventHandler');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosServiceRelatedByEventHandler relation NagiosService object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosServiceRelatedByEventHandlerQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosServiceRelatedByEventHandler($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosServiceRelatedByEventHandler', 'NagiosServiceQuery');
	}

	/**
	 * Filter the query by a related NagiosMainConfiguration object
	 *
	 * @param     NagiosMainConfiguration $nagiosMainConfiguration  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function filterByNagiosMainConfigurationRelatedByOcspCommand($nagiosMainConfiguration, $comparison = null)
	{
		if ($nagiosMainConfiguration instanceof NagiosMainConfiguration) {
			return $this
				->addUsingAlias(NagiosCommandPeer::ID, $nagiosMainConfiguration->getOcspCommand(), $comparison);
		} elseif ($nagiosMainConfiguration instanceof PropelCollection) {
			return $this
				->useNagiosMainConfigurationRelatedByOcspCommandQuery()
					->filterByPrimaryKeys($nagiosMainConfiguration->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosMainConfigurationRelatedByOcspCommand() only accepts arguments of type NagiosMainConfiguration or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosMainConfigurationRelatedByOcspCommand relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function joinNagiosMainConfigurationRelatedByOcspCommand($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosMainConfigurationRelatedByOcspCommand');
		
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
			$this->addJoinObject($join, 'NagiosMainConfigurationRelatedByOcspCommand');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosMainConfigurationRelatedByOcspCommand relation NagiosMainConfiguration object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosMainConfigurationQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosMainConfigurationRelatedByOcspCommandQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosMainConfigurationRelatedByOcspCommand($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosMainConfigurationRelatedByOcspCommand', 'NagiosMainConfigurationQuery');
	}

	/**
	 * Filter the query by a related NagiosMainConfiguration object
	 *
	 * @param     NagiosMainConfiguration $nagiosMainConfiguration  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function filterByNagiosMainConfigurationRelatedByOchpCommand($nagiosMainConfiguration, $comparison = null)
	{
		if ($nagiosMainConfiguration instanceof NagiosMainConfiguration) {
			return $this
				->addUsingAlias(NagiosCommandPeer::ID, $nagiosMainConfiguration->getOchpCommand(), $comparison);
		} elseif ($nagiosMainConfiguration instanceof PropelCollection) {
			return $this
				->useNagiosMainConfigurationRelatedByOchpCommandQuery()
					->filterByPrimaryKeys($nagiosMainConfiguration->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosMainConfigurationRelatedByOchpCommand() only accepts arguments of type NagiosMainConfiguration or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosMainConfigurationRelatedByOchpCommand relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function joinNagiosMainConfigurationRelatedByOchpCommand($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosMainConfigurationRelatedByOchpCommand');
		
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
			$this->addJoinObject($join, 'NagiosMainConfigurationRelatedByOchpCommand');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosMainConfigurationRelatedByOchpCommand relation NagiosMainConfiguration object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosMainConfigurationQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosMainConfigurationRelatedByOchpCommandQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosMainConfigurationRelatedByOchpCommand($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosMainConfigurationRelatedByOchpCommand', 'NagiosMainConfigurationQuery');
	}

	/**
	 * Filter the query by a related NagiosMainConfiguration object
	 *
	 * @param     NagiosMainConfiguration $nagiosMainConfiguration  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function filterByNagiosMainConfigurationRelatedByHostPerfdataCommand($nagiosMainConfiguration, $comparison = null)
	{
		if ($nagiosMainConfiguration instanceof NagiosMainConfiguration) {
			return $this
				->addUsingAlias(NagiosCommandPeer::ID, $nagiosMainConfiguration->getHostPerfdataCommand(), $comparison);
		} elseif ($nagiosMainConfiguration instanceof PropelCollection) {
			return $this
				->useNagiosMainConfigurationRelatedByHostPerfdataCommandQuery()
					->filterByPrimaryKeys($nagiosMainConfiguration->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosMainConfigurationRelatedByHostPerfdataCommand() only accepts arguments of type NagiosMainConfiguration or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosMainConfigurationRelatedByHostPerfdataCommand relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function joinNagiosMainConfigurationRelatedByHostPerfdataCommand($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosMainConfigurationRelatedByHostPerfdataCommand');
		
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
			$this->addJoinObject($join, 'NagiosMainConfigurationRelatedByHostPerfdataCommand');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosMainConfigurationRelatedByHostPerfdataCommand relation NagiosMainConfiguration object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosMainConfigurationQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosMainConfigurationRelatedByHostPerfdataCommandQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosMainConfigurationRelatedByHostPerfdataCommand($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosMainConfigurationRelatedByHostPerfdataCommand', 'NagiosMainConfigurationQuery');
	}

	/**
	 * Filter the query by a related NagiosMainConfiguration object
	 *
	 * @param     NagiosMainConfiguration $nagiosMainConfiguration  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function filterByNagiosMainConfigurationRelatedByServicePerfdataCommand($nagiosMainConfiguration, $comparison = null)
	{
		if ($nagiosMainConfiguration instanceof NagiosMainConfiguration) {
			return $this
				->addUsingAlias(NagiosCommandPeer::ID, $nagiosMainConfiguration->getServicePerfdataCommand(), $comparison);
		} elseif ($nagiosMainConfiguration instanceof PropelCollection) {
			return $this
				->useNagiosMainConfigurationRelatedByServicePerfdataCommandQuery()
					->filterByPrimaryKeys($nagiosMainConfiguration->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosMainConfigurationRelatedByServicePerfdataCommand() only accepts arguments of type NagiosMainConfiguration or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosMainConfigurationRelatedByServicePerfdataCommand relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function joinNagiosMainConfigurationRelatedByServicePerfdataCommand($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosMainConfigurationRelatedByServicePerfdataCommand');
		
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
			$this->addJoinObject($join, 'NagiosMainConfigurationRelatedByServicePerfdataCommand');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosMainConfigurationRelatedByServicePerfdataCommand relation NagiosMainConfiguration object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosMainConfigurationQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosMainConfigurationRelatedByServicePerfdataCommandQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosMainConfigurationRelatedByServicePerfdataCommand($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosMainConfigurationRelatedByServicePerfdataCommand', 'NagiosMainConfigurationQuery');
	}

	/**
	 * Filter the query by a related NagiosMainConfiguration object
	 *
	 * @param     NagiosMainConfiguration $nagiosMainConfiguration  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function filterByNagiosMainConfigurationRelatedByHostPerfdataFileProcessingCommand($nagiosMainConfiguration, $comparison = null)
	{
		if ($nagiosMainConfiguration instanceof NagiosMainConfiguration) {
			return $this
				->addUsingAlias(NagiosCommandPeer::ID, $nagiosMainConfiguration->getHostPerfdataFileProcessingCommand(), $comparison);
		} elseif ($nagiosMainConfiguration instanceof PropelCollection) {
			return $this
				->useNagiosMainConfigurationRelatedByHostPerfdataFileProcessingCommandQuery()
					->filterByPrimaryKeys($nagiosMainConfiguration->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosMainConfigurationRelatedByHostPerfdataFileProcessingCommand() only accepts arguments of type NagiosMainConfiguration or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosMainConfigurationRelatedByHostPerfdataFileProcessingCommand relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function joinNagiosMainConfigurationRelatedByHostPerfdataFileProcessingCommand($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosMainConfigurationRelatedByHostPerfdataFileProcessingCommand');
		
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
			$this->addJoinObject($join, 'NagiosMainConfigurationRelatedByHostPerfdataFileProcessingCommand');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosMainConfigurationRelatedByHostPerfdataFileProcessingCommand relation NagiosMainConfiguration object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosMainConfigurationQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosMainConfigurationRelatedByHostPerfdataFileProcessingCommandQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosMainConfigurationRelatedByHostPerfdataFileProcessingCommand($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosMainConfigurationRelatedByHostPerfdataFileProcessingCommand', 'NagiosMainConfigurationQuery');
	}

	/**
	 * Filter the query by a related NagiosMainConfiguration object
	 *
	 * @param     NagiosMainConfiguration $nagiosMainConfiguration  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function filterByNagiosMainConfigurationRelatedByServicePerfdataFileProcessingCommand($nagiosMainConfiguration, $comparison = null)
	{
		if ($nagiosMainConfiguration instanceof NagiosMainConfiguration) {
			return $this
				->addUsingAlias(NagiosCommandPeer::ID, $nagiosMainConfiguration->getServicePerfdataFileProcessingCommand(), $comparison);
		} elseif ($nagiosMainConfiguration instanceof PropelCollection) {
			return $this
				->useNagiosMainConfigurationRelatedByServicePerfdataFileProcessingCommandQuery()
					->filterByPrimaryKeys($nagiosMainConfiguration->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosMainConfigurationRelatedByServicePerfdataFileProcessingCommand() only accepts arguments of type NagiosMainConfiguration or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosMainConfigurationRelatedByServicePerfdataFileProcessingCommand relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function joinNagiosMainConfigurationRelatedByServicePerfdataFileProcessingCommand($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosMainConfigurationRelatedByServicePerfdataFileProcessingCommand');
		
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
			$this->addJoinObject($join, 'NagiosMainConfigurationRelatedByServicePerfdataFileProcessingCommand');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosMainConfigurationRelatedByServicePerfdataFileProcessingCommand relation NagiosMainConfiguration object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosMainConfigurationQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosMainConfigurationRelatedByServicePerfdataFileProcessingCommandQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosMainConfigurationRelatedByServicePerfdataFileProcessingCommand($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosMainConfigurationRelatedByServicePerfdataFileProcessingCommand', 'NagiosMainConfigurationQuery');
	}

	/**
	 * Filter the query by a related NagiosMainConfiguration object
	 *
	 * @param     NagiosMainConfiguration $nagiosMainConfiguration  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function filterByNagiosMainConfigurationRelatedByGlobalServiceEventHandler($nagiosMainConfiguration, $comparison = null)
	{
		if ($nagiosMainConfiguration instanceof NagiosMainConfiguration) {
			return $this
				->addUsingAlias(NagiosCommandPeer::ID, $nagiosMainConfiguration->getGlobalServiceEventHandler(), $comparison);
		} elseif ($nagiosMainConfiguration instanceof PropelCollection) {
			return $this
				->useNagiosMainConfigurationRelatedByGlobalServiceEventHandlerQuery()
					->filterByPrimaryKeys($nagiosMainConfiguration->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosMainConfigurationRelatedByGlobalServiceEventHandler() only accepts arguments of type NagiosMainConfiguration or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosMainConfigurationRelatedByGlobalServiceEventHandler relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function joinNagiosMainConfigurationRelatedByGlobalServiceEventHandler($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosMainConfigurationRelatedByGlobalServiceEventHandler');
		
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
			$this->addJoinObject($join, 'NagiosMainConfigurationRelatedByGlobalServiceEventHandler');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosMainConfigurationRelatedByGlobalServiceEventHandler relation NagiosMainConfiguration object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosMainConfigurationQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosMainConfigurationRelatedByGlobalServiceEventHandlerQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosMainConfigurationRelatedByGlobalServiceEventHandler($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosMainConfigurationRelatedByGlobalServiceEventHandler', 'NagiosMainConfigurationQuery');
	}

	/**
	 * Filter the query by a related NagiosMainConfiguration object
	 *
	 * @param     NagiosMainConfiguration $nagiosMainConfiguration  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function filterByNagiosMainConfigurationRelatedByGlobalHostEventHandler($nagiosMainConfiguration, $comparison = null)
	{
		if ($nagiosMainConfiguration instanceof NagiosMainConfiguration) {
			return $this
				->addUsingAlias(NagiosCommandPeer::ID, $nagiosMainConfiguration->getGlobalHostEventHandler(), $comparison);
		} elseif ($nagiosMainConfiguration instanceof PropelCollection) {
			return $this
				->useNagiosMainConfigurationRelatedByGlobalHostEventHandlerQuery()
					->filterByPrimaryKeys($nagiosMainConfiguration->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosMainConfigurationRelatedByGlobalHostEventHandler() only accepts arguments of type NagiosMainConfiguration or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosMainConfigurationRelatedByGlobalHostEventHandler relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function joinNagiosMainConfigurationRelatedByGlobalHostEventHandler($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosMainConfigurationRelatedByGlobalHostEventHandler');
		
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
			$this->addJoinObject($join, 'NagiosMainConfigurationRelatedByGlobalHostEventHandler');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosMainConfigurationRelatedByGlobalHostEventHandler relation NagiosMainConfiguration object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosMainConfigurationQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosMainConfigurationRelatedByGlobalHostEventHandlerQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosMainConfigurationRelatedByGlobalHostEventHandler($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosMainConfigurationRelatedByGlobalHostEventHandler', 'NagiosMainConfigurationQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     NagiosCommand $nagiosCommand Object to remove from the list of results
	 *
	 * @return    NagiosCommandQuery The current query, for fluid interface
	 */
	public function prune($nagiosCommand = null)
	{
		if ($nagiosCommand) {
			$this->addUsingAlias(NagiosCommandPeer::ID, $nagiosCommand->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseNagiosCommandQuery
