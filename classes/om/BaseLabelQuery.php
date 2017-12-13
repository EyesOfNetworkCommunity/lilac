<?php


/**
 * Base class that represents a query for the 'label' table.
 *
 * Language based labels
 *
 * @method     LabelQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     LabelQuery orderBySection($order = Criteria::ASC) Order by the section column
 * @method     LabelQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     LabelQuery orderByLabel($order = Criteria::ASC) Order by the label column
 *
 * @method     LabelQuery groupById() Group by the id column
 * @method     LabelQuery groupBySection() Group by the section column
 * @method     LabelQuery groupByName() Group by the name column
 * @method     LabelQuery groupByLabel() Group by the label column
 *
 * @method     LabelQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     LabelQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     LabelQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Label findOne(PropelPDO $con = null) Return the first Label matching the query
 * @method     Label findOneOrCreate(PropelPDO $con = null) Return the first Label matching the query, or a new Label object populated from the query conditions when no match is found
 *
 * @method     Label findOneById(int $id) Return the first Label filtered by the id column
 * @method     Label findOneBySection(string $section) Return the first Label filtered by the section column
 * @method     Label findOneByName(string $name) Return the first Label filtered by the name column
 * @method     Label findOneByLabel(string $label) Return the first Label filtered by the label column
 *
 * @method     array findById(int $id) Return Label objects filtered by the id column
 * @method     array findBySection(string $section) Return Label objects filtered by the section column
 * @method     array findByName(string $name) Return Label objects filtered by the name column
 * @method     array findByLabel(string $label) Return Label objects filtered by the label column
 *
 * @package    propel.generator..om
 */
abstract class BaseLabelQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseLabelQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'Label', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new LabelQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    LabelQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof LabelQuery) {
			return $criteria;
		}
		$query = new LabelQuery();
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
	 * @return    Label|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = LabelPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    LabelQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(LabelPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    LabelQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(LabelPeer::ID, $keys, Criteria::IN);
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
	 * @return    LabelQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(LabelPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the section column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterBySection('fooValue');   // WHERE section = 'fooValue'
	 * $query->filterBySection('%fooValue%'); // WHERE section LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $section The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LabelQuery The current query, for fluid interface
	 */
	public function filterBySection($section = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($section)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $section)) {
				$section = str_replace('*', '%', $section);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LabelPeer::SECTION, $section, $comparison);
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
	 * @return    LabelQuery The current query, for fluid interface
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
		return $this->addUsingAlias(LabelPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the label column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByLabel('fooValue');   // WHERE label = 'fooValue'
	 * $query->filterByLabel('%fooValue%'); // WHERE label LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $label The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    LabelQuery The current query, for fluid interface
	 */
	public function filterByLabel($label = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($label)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $label)) {
				$label = str_replace('*', '%', $label);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(LabelPeer::LABEL, $label, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Label $label Object to remove from the list of results
	 *
	 * @return    LabelQuery The current query, for fluid interface
	 */
	public function prune($label = null)
	{
		if ($label) {
			$this->addUsingAlias(LabelPeer::ID, $label->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseLabelQuery
