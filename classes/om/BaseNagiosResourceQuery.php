<?php


/**
 * Base class that represents a query for the 'nagios_resource' table.
 *
 * Nagios Resource
 *
 * @method     NagiosResourceQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NagiosResourceQuery orderByUser1($order = Criteria::ASC) Order by the user1 column
 * @method     NagiosResourceQuery orderByUser2($order = Criteria::ASC) Order by the user2 column
 * @method     NagiosResourceQuery orderByUser3($order = Criteria::ASC) Order by the user3 column
 * @method     NagiosResourceQuery orderByUser4($order = Criteria::ASC) Order by the user4 column
 * @method     NagiosResourceQuery orderByUser5($order = Criteria::ASC) Order by the user5 column
 * @method     NagiosResourceQuery orderByUser6($order = Criteria::ASC) Order by the user6 column
 * @method     NagiosResourceQuery orderByUser7($order = Criteria::ASC) Order by the user7 column
 * @method     NagiosResourceQuery orderByUser8($order = Criteria::ASC) Order by the user8 column
 * @method     NagiosResourceQuery orderByUser9($order = Criteria::ASC) Order by the user9 column
 * @method     NagiosResourceQuery orderByUser10($order = Criteria::ASC) Order by the user10 column
 * @method     NagiosResourceQuery orderByUser11($order = Criteria::ASC) Order by the user11 column
 * @method     NagiosResourceQuery orderByUser12($order = Criteria::ASC) Order by the user12 column
 * @method     NagiosResourceQuery orderByUser13($order = Criteria::ASC) Order by the user13 column
 * @method     NagiosResourceQuery orderByUser14($order = Criteria::ASC) Order by the user14 column
 * @method     NagiosResourceQuery orderByUser15($order = Criteria::ASC) Order by the user15 column
 * @method     NagiosResourceQuery orderByUser16($order = Criteria::ASC) Order by the user16 column
 * @method     NagiosResourceQuery orderByUser17($order = Criteria::ASC) Order by the user17 column
 * @method     NagiosResourceQuery orderByUser18($order = Criteria::ASC) Order by the user18 column
 * @method     NagiosResourceQuery orderByUser19($order = Criteria::ASC) Order by the user19 column
 * @method     NagiosResourceQuery orderByUser20($order = Criteria::ASC) Order by the user20 column
 * @method     NagiosResourceQuery orderByUser21($order = Criteria::ASC) Order by the user21 column
 * @method     NagiosResourceQuery orderByUser22($order = Criteria::ASC) Order by the user22 column
 * @method     NagiosResourceQuery orderByUser23($order = Criteria::ASC) Order by the user23 column
 * @method     NagiosResourceQuery orderByUser24($order = Criteria::ASC) Order by the user24 column
 * @method     NagiosResourceQuery orderByUser25($order = Criteria::ASC) Order by the user25 column
 * @method     NagiosResourceQuery orderByUser26($order = Criteria::ASC) Order by the user26 column
 * @method     NagiosResourceQuery orderByUser27($order = Criteria::ASC) Order by the user27 column
 * @method     NagiosResourceQuery orderByUser28($order = Criteria::ASC) Order by the user28 column
 * @method     NagiosResourceQuery orderByUser29($order = Criteria::ASC) Order by the user29 column
 * @method     NagiosResourceQuery orderByUser30($order = Criteria::ASC) Order by the user30 column
 * @method     NagiosResourceQuery orderByUser31($order = Criteria::ASC) Order by the user31 column
 * @method     NagiosResourceQuery orderByUser32($order = Criteria::ASC) Order by the user32 column
 *
 * @method     NagiosResourceQuery groupById() Group by the id column
 * @method     NagiosResourceQuery groupByUser1() Group by the user1 column
 * @method     NagiosResourceQuery groupByUser2() Group by the user2 column
 * @method     NagiosResourceQuery groupByUser3() Group by the user3 column
 * @method     NagiosResourceQuery groupByUser4() Group by the user4 column
 * @method     NagiosResourceQuery groupByUser5() Group by the user5 column
 * @method     NagiosResourceQuery groupByUser6() Group by the user6 column
 * @method     NagiosResourceQuery groupByUser7() Group by the user7 column
 * @method     NagiosResourceQuery groupByUser8() Group by the user8 column
 * @method     NagiosResourceQuery groupByUser9() Group by the user9 column
 * @method     NagiosResourceQuery groupByUser10() Group by the user10 column
 * @method     NagiosResourceQuery groupByUser11() Group by the user11 column
 * @method     NagiosResourceQuery groupByUser12() Group by the user12 column
 * @method     NagiosResourceQuery groupByUser13() Group by the user13 column
 * @method     NagiosResourceQuery groupByUser14() Group by the user14 column
 * @method     NagiosResourceQuery groupByUser15() Group by the user15 column
 * @method     NagiosResourceQuery groupByUser16() Group by the user16 column
 * @method     NagiosResourceQuery groupByUser17() Group by the user17 column
 * @method     NagiosResourceQuery groupByUser18() Group by the user18 column
 * @method     NagiosResourceQuery groupByUser19() Group by the user19 column
 * @method     NagiosResourceQuery groupByUser20() Group by the user20 column
 * @method     NagiosResourceQuery groupByUser21() Group by the user21 column
 * @method     NagiosResourceQuery groupByUser22() Group by the user22 column
 * @method     NagiosResourceQuery groupByUser23() Group by the user23 column
 * @method     NagiosResourceQuery groupByUser24() Group by the user24 column
 * @method     NagiosResourceQuery groupByUser25() Group by the user25 column
 * @method     NagiosResourceQuery groupByUser26() Group by the user26 column
 * @method     NagiosResourceQuery groupByUser27() Group by the user27 column
 * @method     NagiosResourceQuery groupByUser28() Group by the user28 column
 * @method     NagiosResourceQuery groupByUser29() Group by the user29 column
 * @method     NagiosResourceQuery groupByUser30() Group by the user30 column
 * @method     NagiosResourceQuery groupByUser31() Group by the user31 column
 * @method     NagiosResourceQuery groupByUser32() Group by the user32 column
 *
 * @method     NagiosResourceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NagiosResourceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NagiosResourceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NagiosResource findOne(PropelPDO $con = null) Return the first NagiosResource matching the query
 * @method     NagiosResource findOneOrCreate(PropelPDO $con = null) Return the first NagiosResource matching the query, or a new NagiosResource object populated from the query conditions when no match is found
 *
 * @method     NagiosResource findOneById(int $id) Return the first NagiosResource filtered by the id column
 * @method     NagiosResource findOneByUser1(string $user1) Return the first NagiosResource filtered by the user1 column
 * @method     NagiosResource findOneByUser2(string $user2) Return the first NagiosResource filtered by the user2 column
 * @method     NagiosResource findOneByUser3(string $user3) Return the first NagiosResource filtered by the user3 column
 * @method     NagiosResource findOneByUser4(string $user4) Return the first NagiosResource filtered by the user4 column
 * @method     NagiosResource findOneByUser5(string $user5) Return the first NagiosResource filtered by the user5 column
 * @method     NagiosResource findOneByUser6(string $user6) Return the first NagiosResource filtered by the user6 column
 * @method     NagiosResource findOneByUser7(string $user7) Return the first NagiosResource filtered by the user7 column
 * @method     NagiosResource findOneByUser8(string $user8) Return the first NagiosResource filtered by the user8 column
 * @method     NagiosResource findOneByUser9(string $user9) Return the first NagiosResource filtered by the user9 column
 * @method     NagiosResource findOneByUser10(string $user10) Return the first NagiosResource filtered by the user10 column
 * @method     NagiosResource findOneByUser11(string $user11) Return the first NagiosResource filtered by the user11 column
 * @method     NagiosResource findOneByUser12(string $user12) Return the first NagiosResource filtered by the user12 column
 * @method     NagiosResource findOneByUser13(string $user13) Return the first NagiosResource filtered by the user13 column
 * @method     NagiosResource findOneByUser14(string $user14) Return the first NagiosResource filtered by the user14 column
 * @method     NagiosResource findOneByUser15(string $user15) Return the first NagiosResource filtered by the user15 column
 * @method     NagiosResource findOneByUser16(string $user16) Return the first NagiosResource filtered by the user16 column
 * @method     NagiosResource findOneByUser17(string $user17) Return the first NagiosResource filtered by the user17 column
 * @method     NagiosResource findOneByUser18(string $user18) Return the first NagiosResource filtered by the user18 column
 * @method     NagiosResource findOneByUser19(string $user19) Return the first NagiosResource filtered by the user19 column
 * @method     NagiosResource findOneByUser20(string $user20) Return the first NagiosResource filtered by the user20 column
 * @method     NagiosResource findOneByUser21(string $user21) Return the first NagiosResource filtered by the user21 column
 * @method     NagiosResource findOneByUser22(string $user22) Return the first NagiosResource filtered by the user22 column
 * @method     NagiosResource findOneByUser23(string $user23) Return the first NagiosResource filtered by the user23 column
 * @method     NagiosResource findOneByUser24(string $user24) Return the first NagiosResource filtered by the user24 column
 * @method     NagiosResource findOneByUser25(string $user25) Return the first NagiosResource filtered by the user25 column
 * @method     NagiosResource findOneByUser26(string $user26) Return the first NagiosResource filtered by the user26 column
 * @method     NagiosResource findOneByUser27(string $user27) Return the first NagiosResource filtered by the user27 column
 * @method     NagiosResource findOneByUser28(string $user28) Return the first NagiosResource filtered by the user28 column
 * @method     NagiosResource findOneByUser29(string $user29) Return the first NagiosResource filtered by the user29 column
 * @method     NagiosResource findOneByUser30(string $user30) Return the first NagiosResource filtered by the user30 column
 * @method     NagiosResource findOneByUser31(string $user31) Return the first NagiosResource filtered by the user31 column
 * @method     NagiosResource findOneByUser32(string $user32) Return the first NagiosResource filtered by the user32 column
 *
 * @method     array findById(int $id) Return NagiosResource objects filtered by the id column
 * @method     array findByUser1(string $user1) Return NagiosResource objects filtered by the user1 column
 * @method     array findByUser2(string $user2) Return NagiosResource objects filtered by the user2 column
 * @method     array findByUser3(string $user3) Return NagiosResource objects filtered by the user3 column
 * @method     array findByUser4(string $user4) Return NagiosResource objects filtered by the user4 column
 * @method     array findByUser5(string $user5) Return NagiosResource objects filtered by the user5 column
 * @method     array findByUser6(string $user6) Return NagiosResource objects filtered by the user6 column
 * @method     array findByUser7(string $user7) Return NagiosResource objects filtered by the user7 column
 * @method     array findByUser8(string $user8) Return NagiosResource objects filtered by the user8 column
 * @method     array findByUser9(string $user9) Return NagiosResource objects filtered by the user9 column
 * @method     array findByUser10(string $user10) Return NagiosResource objects filtered by the user10 column
 * @method     array findByUser11(string $user11) Return NagiosResource objects filtered by the user11 column
 * @method     array findByUser12(string $user12) Return NagiosResource objects filtered by the user12 column
 * @method     array findByUser13(string $user13) Return NagiosResource objects filtered by the user13 column
 * @method     array findByUser14(string $user14) Return NagiosResource objects filtered by the user14 column
 * @method     array findByUser15(string $user15) Return NagiosResource objects filtered by the user15 column
 * @method     array findByUser16(string $user16) Return NagiosResource objects filtered by the user16 column
 * @method     array findByUser17(string $user17) Return NagiosResource objects filtered by the user17 column
 * @method     array findByUser18(string $user18) Return NagiosResource objects filtered by the user18 column
 * @method     array findByUser19(string $user19) Return NagiosResource objects filtered by the user19 column
 * @method     array findByUser20(string $user20) Return NagiosResource objects filtered by the user20 column
 * @method     array findByUser21(string $user21) Return NagiosResource objects filtered by the user21 column
 * @method     array findByUser22(string $user22) Return NagiosResource objects filtered by the user22 column
 * @method     array findByUser23(string $user23) Return NagiosResource objects filtered by the user23 column
 * @method     array findByUser24(string $user24) Return NagiosResource objects filtered by the user24 column
 * @method     array findByUser25(string $user25) Return NagiosResource objects filtered by the user25 column
 * @method     array findByUser26(string $user26) Return NagiosResource objects filtered by the user26 column
 * @method     array findByUser27(string $user27) Return NagiosResource objects filtered by the user27 column
 * @method     array findByUser28(string $user28) Return NagiosResource objects filtered by the user28 column
 * @method     array findByUser29(string $user29) Return NagiosResource objects filtered by the user29 column
 * @method     array findByUser30(string $user30) Return NagiosResource objects filtered by the user30 column
 * @method     array findByUser31(string $user31) Return NagiosResource objects filtered by the user31 column
 * @method     array findByUser32(string $user32) Return NagiosResource objects filtered by the user32 column
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosResourceQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNagiosResourceQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'NagiosResource', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NagiosResourceQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NagiosResourceQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NagiosResourceQuery) {
			return $criteria;
		}
		$query = new NagiosResourceQuery();
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
	 * @return    NagiosResource|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NagiosResourcePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NagiosResourcePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NagiosResourcePeer::ID, $keys, Criteria::IN);
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
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NagiosResourcePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the user1 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser1('fooValue');   // WHERE user1 = 'fooValue'
	 * $query->filterByUser1('%fooValue%'); // WHERE user1 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user1 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser1($user1 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user1)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user1)) {
				$user1 = str_replace('*', '%', $user1);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER1, $user1, $comparison);
	}

	/**
	 * Filter the query on the user2 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser2('fooValue');   // WHERE user2 = 'fooValue'
	 * $query->filterByUser2('%fooValue%'); // WHERE user2 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user2 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser2($user2 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user2)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user2)) {
				$user2 = str_replace('*', '%', $user2);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER2, $user2, $comparison);
	}

	/**
	 * Filter the query on the user3 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser3('fooValue');   // WHERE user3 = 'fooValue'
	 * $query->filterByUser3('%fooValue%'); // WHERE user3 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user3 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser3($user3 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user3)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user3)) {
				$user3 = str_replace('*', '%', $user3);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER3, $user3, $comparison);
	}

	/**
	 * Filter the query on the user4 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser4('fooValue');   // WHERE user4 = 'fooValue'
	 * $query->filterByUser4('%fooValue%'); // WHERE user4 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user4 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser4($user4 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user4)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user4)) {
				$user4 = str_replace('*', '%', $user4);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER4, $user4, $comparison);
	}

	/**
	 * Filter the query on the user5 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser5('fooValue');   // WHERE user5 = 'fooValue'
	 * $query->filterByUser5('%fooValue%'); // WHERE user5 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user5 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser5($user5 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user5)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user5)) {
				$user5 = str_replace('*', '%', $user5);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER5, $user5, $comparison);
	}

	/**
	 * Filter the query on the user6 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser6('fooValue');   // WHERE user6 = 'fooValue'
	 * $query->filterByUser6('%fooValue%'); // WHERE user6 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user6 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser6($user6 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user6)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user6)) {
				$user6 = str_replace('*', '%', $user6);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER6, $user6, $comparison);
	}

	/**
	 * Filter the query on the user7 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser7('fooValue');   // WHERE user7 = 'fooValue'
	 * $query->filterByUser7('%fooValue%'); // WHERE user7 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user7 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser7($user7 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user7)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user7)) {
				$user7 = str_replace('*', '%', $user7);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER7, $user7, $comparison);
	}

	/**
	 * Filter the query on the user8 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser8('fooValue');   // WHERE user8 = 'fooValue'
	 * $query->filterByUser8('%fooValue%'); // WHERE user8 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user8 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser8($user8 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user8)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user8)) {
				$user8 = str_replace('*', '%', $user8);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER8, $user8, $comparison);
	}

	/**
	 * Filter the query on the user9 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser9('fooValue');   // WHERE user9 = 'fooValue'
	 * $query->filterByUser9('%fooValue%'); // WHERE user9 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user9 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser9($user9 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user9)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user9)) {
				$user9 = str_replace('*', '%', $user9);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER9, $user9, $comparison);
	}

	/**
	 * Filter the query on the user10 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser10('fooValue');   // WHERE user10 = 'fooValue'
	 * $query->filterByUser10('%fooValue%'); // WHERE user10 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user10 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser10($user10 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user10)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user10)) {
				$user10 = str_replace('*', '%', $user10);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER10, $user10, $comparison);
	}

	/**
	 * Filter the query on the user11 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser11('fooValue');   // WHERE user11 = 'fooValue'
	 * $query->filterByUser11('%fooValue%'); // WHERE user11 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user11 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser11($user11 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user11)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user11)) {
				$user11 = str_replace('*', '%', $user11);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER11, $user11, $comparison);
	}

	/**
	 * Filter the query on the user12 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser12('fooValue');   // WHERE user12 = 'fooValue'
	 * $query->filterByUser12('%fooValue%'); // WHERE user12 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user12 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser12($user12 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user12)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user12)) {
				$user12 = str_replace('*', '%', $user12);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER12, $user12, $comparison);
	}

	/**
	 * Filter the query on the user13 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser13('fooValue');   // WHERE user13 = 'fooValue'
	 * $query->filterByUser13('%fooValue%'); // WHERE user13 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user13 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser13($user13 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user13)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user13)) {
				$user13 = str_replace('*', '%', $user13);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER13, $user13, $comparison);
	}

	/**
	 * Filter the query on the user14 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser14('fooValue');   // WHERE user14 = 'fooValue'
	 * $query->filterByUser14('%fooValue%'); // WHERE user14 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user14 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser14($user14 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user14)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user14)) {
				$user14 = str_replace('*', '%', $user14);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER14, $user14, $comparison);
	}

	/**
	 * Filter the query on the user15 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser15('fooValue');   // WHERE user15 = 'fooValue'
	 * $query->filterByUser15('%fooValue%'); // WHERE user15 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user15 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser15($user15 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user15)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user15)) {
				$user15 = str_replace('*', '%', $user15);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER15, $user15, $comparison);
	}

	/**
	 * Filter the query on the user16 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser16('fooValue');   // WHERE user16 = 'fooValue'
	 * $query->filterByUser16('%fooValue%'); // WHERE user16 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user16 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser16($user16 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user16)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user16)) {
				$user16 = str_replace('*', '%', $user16);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER16, $user16, $comparison);
	}

	/**
	 * Filter the query on the user17 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser17('fooValue');   // WHERE user17 = 'fooValue'
	 * $query->filterByUser17('%fooValue%'); // WHERE user17 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user17 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser17($user17 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user17)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user17)) {
				$user17 = str_replace('*', '%', $user17);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER17, $user17, $comparison);
	}

	/**
	 * Filter the query on the user18 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser18('fooValue');   // WHERE user18 = 'fooValue'
	 * $query->filterByUser18('%fooValue%'); // WHERE user18 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user18 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser18($user18 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user18)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user18)) {
				$user18 = str_replace('*', '%', $user18);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER18, $user18, $comparison);
	}

	/**
	 * Filter the query on the user19 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser19('fooValue');   // WHERE user19 = 'fooValue'
	 * $query->filterByUser19('%fooValue%'); // WHERE user19 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user19 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser19($user19 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user19)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user19)) {
				$user19 = str_replace('*', '%', $user19);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER19, $user19, $comparison);
	}

	/**
	 * Filter the query on the user20 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser20('fooValue');   // WHERE user20 = 'fooValue'
	 * $query->filterByUser20('%fooValue%'); // WHERE user20 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user20 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser20($user20 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user20)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user20)) {
				$user20 = str_replace('*', '%', $user20);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER20, $user20, $comparison);
	}

	/**
	 * Filter the query on the user21 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser21('fooValue');   // WHERE user21 = 'fooValue'
	 * $query->filterByUser21('%fooValue%'); // WHERE user21 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user21 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser21($user21 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user21)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user21)) {
				$user21 = str_replace('*', '%', $user21);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER21, $user21, $comparison);
	}

	/**
	 * Filter the query on the user22 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser22('fooValue');   // WHERE user22 = 'fooValue'
	 * $query->filterByUser22('%fooValue%'); // WHERE user22 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user22 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser22($user22 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user22)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user22)) {
				$user22 = str_replace('*', '%', $user22);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER22, $user22, $comparison);
	}

	/**
	 * Filter the query on the user23 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser23('fooValue');   // WHERE user23 = 'fooValue'
	 * $query->filterByUser23('%fooValue%'); // WHERE user23 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user23 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser23($user23 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user23)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user23)) {
				$user23 = str_replace('*', '%', $user23);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER23, $user23, $comparison);
	}

	/**
	 * Filter the query on the user24 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser24('fooValue');   // WHERE user24 = 'fooValue'
	 * $query->filterByUser24('%fooValue%'); // WHERE user24 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user24 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser24($user24 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user24)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user24)) {
				$user24 = str_replace('*', '%', $user24);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER24, $user24, $comparison);
	}

	/**
	 * Filter the query on the user25 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser25('fooValue');   // WHERE user25 = 'fooValue'
	 * $query->filterByUser25('%fooValue%'); // WHERE user25 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user25 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser25($user25 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user25)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user25)) {
				$user25 = str_replace('*', '%', $user25);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER25, $user25, $comparison);
	}

	/**
	 * Filter the query on the user26 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser26('fooValue');   // WHERE user26 = 'fooValue'
	 * $query->filterByUser26('%fooValue%'); // WHERE user26 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user26 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser26($user26 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user26)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user26)) {
				$user26 = str_replace('*', '%', $user26);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER26, $user26, $comparison);
	}

	/**
	 * Filter the query on the user27 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser27('fooValue');   // WHERE user27 = 'fooValue'
	 * $query->filterByUser27('%fooValue%'); // WHERE user27 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user27 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser27($user27 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user27)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user27)) {
				$user27 = str_replace('*', '%', $user27);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER27, $user27, $comparison);
	}

	/**
	 * Filter the query on the user28 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser28('fooValue');   // WHERE user28 = 'fooValue'
	 * $query->filterByUser28('%fooValue%'); // WHERE user28 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user28 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser28($user28 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user28)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user28)) {
				$user28 = str_replace('*', '%', $user28);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER28, $user28, $comparison);
	}

	/**
	 * Filter the query on the user29 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser29('fooValue');   // WHERE user29 = 'fooValue'
	 * $query->filterByUser29('%fooValue%'); // WHERE user29 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user29 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser29($user29 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user29)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user29)) {
				$user29 = str_replace('*', '%', $user29);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER29, $user29, $comparison);
	}

	/**
	 * Filter the query on the user30 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser30('fooValue');   // WHERE user30 = 'fooValue'
	 * $query->filterByUser30('%fooValue%'); // WHERE user30 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user30 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser30($user30 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user30)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user30)) {
				$user30 = str_replace('*', '%', $user30);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER30, $user30, $comparison);
	}

	/**
	 * Filter the query on the user31 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser31('fooValue');   // WHERE user31 = 'fooValue'
	 * $query->filterByUser31('%fooValue%'); // WHERE user31 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user31 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser31($user31 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user31)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user31)) {
				$user31 = str_replace('*', '%', $user31);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER31, $user31, $comparison);
	}

	/**
	 * Filter the query on the user32 column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUser32('fooValue');   // WHERE user32 = 'fooValue'
	 * $query->filterByUser32('%fooValue%'); // WHERE user32 LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $user32 The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function filterByUser32($user32 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($user32)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $user32)) {
				$user32 = str_replace('*', '%', $user32);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosResourcePeer::USER32, $user32, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     NagiosResource $nagiosResource Object to remove from the list of results
	 *
	 * @return    NagiosResourceQuery The current query, for fluid interface
	 */
	public function prune($nagiosResource = null)
	{
		if ($nagiosResource) {
			$this->addUsingAlias(NagiosResourcePeer::ID, $nagiosResource->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseNagiosResourceQuery
