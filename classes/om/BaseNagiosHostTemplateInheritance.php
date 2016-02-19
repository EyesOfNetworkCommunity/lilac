<?php

/**
 * Base class that represents a row from the 'nagios_host_template_inheritance' table.
 *
 * Nagios Host Template Inheritance
 *
 * @package    .om
 */
abstract class BaseNagiosHostTemplateInheritance extends BaseObject  implements Persistent {


	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        NagiosHostTemplateInheritancePeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the source_host field.
	 * @var        int
	 */
	protected $source_host;

	/**
	 * The value for the source_template field.
	 * @var        int
	 */
	protected $source_template;

	/**
	 * The value for the target_template field.
	 * @var        int
	 */
	protected $target_template;

	/**
	 * The value for the order field.
	 * @var        int
	 */
	protected $order;

	/**
	 * @var        NagiosHost
	 */
	protected $aNagiosHost;

	/**
	 * @var        NagiosHostTemplate
	 */
	protected $aNagiosHostTemplateRelatedBySourceTemplate;

	/**
	 * @var        NagiosHostTemplate
	 */
	protected $aNagiosHostTemplateRelatedByTargetTemplate;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Initializes internal state of BaseNagiosHostTemplateInheritance object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
	}

	/**
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [source_host] column value.
	 * 
	 * @return     int
	 */
	public function getSourceHost()
	{
		return $this->source_host;
	}

	/**
	 * Get the [source_template] column value.
	 * 
	 * @return     int
	 */
	public function getSourceTemplate()
	{
		return $this->source_template;
	}

	/**
	 * Get the [target_template] column value.
	 * 
	 * @return     int
	 */
	public function getTargetTemplate()
	{
		return $this->target_template;
	}

	/**
	 * Get the [order] column value.
	 * 
	 * @return     int
	 */
	public function getOrder()
	{
		return $this->order;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosHostTemplateInheritance The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = NagiosHostTemplateInheritancePeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [source_host] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosHostTemplateInheritance The current object (for fluent API support)
	 */
	public function setSourceHost($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->source_host !== $v) {
			$this->source_host = $v;
			$this->modifiedColumns[] = NagiosHostTemplateInheritancePeer::SOURCE_HOST;
		}

		if ($this->aNagiosHost !== null && $this->aNagiosHost->getId() !== $v) {
			$this->aNagiosHost = null;
		}

		return $this;
	} // setSourceHost()

	/**
	 * Set the value of [source_template] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosHostTemplateInheritance The current object (for fluent API support)
	 */
	public function setSourceTemplate($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->source_template !== $v) {
			$this->source_template = $v;
			$this->modifiedColumns[] = NagiosHostTemplateInheritancePeer::SOURCE_TEMPLATE;
		}

		if ($this->aNagiosHostTemplateRelatedBySourceTemplate !== null && $this->aNagiosHostTemplateRelatedBySourceTemplate->getId() !== $v) {
			$this->aNagiosHostTemplateRelatedBySourceTemplate = null;
		}

		return $this;
	} // setSourceTemplate()

	/**
	 * Set the value of [target_template] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosHostTemplateInheritance The current object (for fluent API support)
	 */
	public function setTargetTemplate($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->target_template !== $v) {
			$this->target_template = $v;
			$this->modifiedColumns[] = NagiosHostTemplateInheritancePeer::TARGET_TEMPLATE;
		}

		if ($this->aNagiosHostTemplateRelatedByTargetTemplate !== null && $this->aNagiosHostTemplateRelatedByTargetTemplate->getId() !== $v) {
			$this->aNagiosHostTemplateRelatedByTargetTemplate = null;
		}

		return $this;
	} // setTargetTemplate()

	/**
	 * Set the value of [order] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosHostTemplateInheritance The current object (for fluent API support)
	 */
	public function setOrder($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->order !== $v) {
			$this->order = $v;
			$this->modifiedColumns[] = NagiosHostTemplateInheritancePeer::ORDER;
		}

		return $this;
	} // setOrder()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
			// First, ensure that we don't have any columns that have been modified which aren't default columns.
			if (array_diff($this->modifiedColumns, array())) {
				return false;
			}

		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->source_host = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->source_template = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->target_template = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->order = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 5; // 5 = NagiosHostTemplateInheritancePeer::NUM_COLUMNS - NagiosHostTemplateInheritancePeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating NagiosHostTemplateInheritance object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

		if ($this->aNagiosHost !== null && $this->source_host !== $this->aNagiosHost->getId()) {
			$this->aNagiosHost = null;
		}
		if ($this->aNagiosHostTemplateRelatedBySourceTemplate !== null && $this->source_template !== $this->aNagiosHostTemplateRelatedBySourceTemplate->getId()) {
			$this->aNagiosHostTemplateRelatedBySourceTemplate = null;
		}
		if ($this->aNagiosHostTemplateRelatedByTargetTemplate !== null && $this->target_template !== $this->aNagiosHostTemplateRelatedByTargetTemplate->getId()) {
			$this->aNagiosHostTemplateRelatedByTargetTemplate = null;
		}
	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(NagiosHostTemplateInheritancePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = NagiosHostTemplateInheritancePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aNagiosHost = null;
			$this->aNagiosHostTemplateRelatedBySourceTemplate = null;
			$this->aNagiosHostTemplateRelatedByTargetTemplate = null;
		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(NagiosHostTemplateInheritancePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			NagiosHostTemplateInheritancePeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(NagiosHostTemplateInheritancePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$affectedRows = $this->doSave($con);
			$con->commit();
			NagiosHostTemplateInheritancePeer::addInstanceToPool($this);
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aNagiosHost !== null) {
				if ($this->aNagiosHost->isModified() || $this->aNagiosHost->isNew()) {
					$affectedRows += $this->aNagiosHost->save($con);
				}
				$this->setNagiosHost($this->aNagiosHost);
			}

			if ($this->aNagiosHostTemplateRelatedBySourceTemplate !== null) {
				if ($this->aNagiosHostTemplateRelatedBySourceTemplate->isModified() || $this->aNagiosHostTemplateRelatedBySourceTemplate->isNew()) {
					$affectedRows += $this->aNagiosHostTemplateRelatedBySourceTemplate->save($con);
				}
				$this->setNagiosHostTemplateRelatedBySourceTemplate($this->aNagiosHostTemplateRelatedBySourceTemplate);
			}

			if ($this->aNagiosHostTemplateRelatedByTargetTemplate !== null) {
				if ($this->aNagiosHostTemplateRelatedByTargetTemplate->isModified() || $this->aNagiosHostTemplateRelatedByTargetTemplate->isNew()) {
					$affectedRows += $this->aNagiosHostTemplateRelatedByTargetTemplate->save($con);
				}
				$this->setNagiosHostTemplateRelatedByTargetTemplate($this->aNagiosHostTemplateRelatedByTargetTemplate);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = NagiosHostTemplateInheritancePeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = NagiosHostTemplateInheritancePeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += NagiosHostTemplateInheritancePeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aNagiosHost !== null) {
				if (!$this->aNagiosHost->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosHost->getValidationFailures());
				}
			}

			if ($this->aNagiosHostTemplateRelatedBySourceTemplate !== null) {
				if (!$this->aNagiosHostTemplateRelatedBySourceTemplate->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosHostTemplateRelatedBySourceTemplate->getValidationFailures());
				}
			}

			if ($this->aNagiosHostTemplateRelatedByTargetTemplate !== null) {
				if (!$this->aNagiosHostTemplateRelatedByTargetTemplate->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosHostTemplateRelatedByTargetTemplate->getValidationFailures());
				}
			}


			if (($retval = NagiosHostTemplateInheritancePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = NagiosHostTemplateInheritancePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getSourceHost();
				break;
			case 2:
				return $this->getSourceTemplate();
				break;
			case 3:
				return $this->getTargetTemplate();
				break;
			case 4:
				return $this->getOrder();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param      string $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                        BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. Defaults to BasePeer::TYPE_PHPNAME.
	 * @param      boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns.  Defaults to TRUE.
	 * @return     an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true)
	{
		$keys = NagiosHostTemplateInheritancePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getSourceHost(),
			$keys[2] => $this->getSourceTemplate(),
			$keys[3] => $this->getTargetTemplate(),
			$keys[4] => $this->getOrder(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = NagiosHostTemplateInheritancePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setSourceHost($value);
				break;
			case 2:
				$this->setSourceTemplate($value);
				break;
			case 3:
				$this->setTargetTemplate($value);
				break;
			case 4:
				$this->setOrder($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = NagiosHostTemplateInheritancePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setSourceHost($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setSourceTemplate($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTargetTemplate($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setOrder($arr[$keys[4]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(NagiosHostTemplateInheritancePeer::DATABASE_NAME);

		if ($this->isColumnModified(NagiosHostTemplateInheritancePeer::ID)) $criteria->add(NagiosHostTemplateInheritancePeer::ID, $this->id);
		if ($this->isColumnModified(NagiosHostTemplateInheritancePeer::SOURCE_HOST)) $criteria->add(NagiosHostTemplateInheritancePeer::SOURCE_HOST, $this->source_host);
		if ($this->isColumnModified(NagiosHostTemplateInheritancePeer::SOURCE_TEMPLATE)) $criteria->add(NagiosHostTemplateInheritancePeer::SOURCE_TEMPLATE, $this->source_template);
		if ($this->isColumnModified(NagiosHostTemplateInheritancePeer::TARGET_TEMPLATE)) $criteria->add(NagiosHostTemplateInheritancePeer::TARGET_TEMPLATE, $this->target_template);
		if ($this->isColumnModified(NagiosHostTemplateInheritancePeer::ORDER)) $criteria->add(NagiosHostTemplateInheritancePeer::ORDER, $this->order);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(NagiosHostTemplateInheritancePeer::DATABASE_NAME);

		$criteria->add(NagiosHostTemplateInheritancePeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of NagiosHostTemplateInheritance (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setSourceHost($this->source_host);

		$copyObj->setSourceTemplate($this->source_template);

		$copyObj->setTargetTemplate($this->target_template);

		$copyObj->setOrder($this->order);


		$copyObj->setNew(true);

		$copyObj->setId(NULL); // this is a auto-increment column, so set to default value

	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     NagiosHostTemplateInheritance Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     NagiosHostTemplateInheritancePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new NagiosHostTemplateInheritancePeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a NagiosHost object.
	 *
	 * @param      NagiosHost $v
	 * @return     NagiosHostTemplateInheritance The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosHost(NagiosHost $v = null)
	{
		if ($v === null) {
			$this->setSourceHost(NULL);
		} else {
			$this->setSourceHost($v->getId());
		}

		$this->aNagiosHost = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosHost object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosHostTemplateInheritance($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosHost object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosHost The associated NagiosHost object.
	 * @throws     PropelException
	 */
	public function getNagiosHost(PropelPDO $con = null)
	{
		if ($this->aNagiosHost === null && ($this->source_host !== null)) {
			$c = new Criteria(NagiosHostPeer::DATABASE_NAME);
			$c->add(NagiosHostPeer::ID, $this->source_host);
			$this->aNagiosHost = NagiosHostPeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aNagiosHost->addNagiosHostTemplateInheritances($this);
			 */
		}
		return $this->aNagiosHost;
	}

	/**
	 * Declares an association between this object and a NagiosHostTemplate object.
	 *
	 * @param      NagiosHostTemplate $v
	 * @return     NagiosHostTemplateInheritance The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosHostTemplateRelatedBySourceTemplate(NagiosHostTemplate $v = null)
	{
		if ($v === null) {
			$this->setSourceTemplate(NULL);
		} else {
			$this->setSourceTemplate($v->getId());
		}

		$this->aNagiosHostTemplateRelatedBySourceTemplate = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosHostTemplate object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosHostTemplateInheritanceRelatedBySourceTemplate($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosHostTemplate object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosHostTemplate The associated NagiosHostTemplate object.
	 * @throws     PropelException
	 */
	public function getNagiosHostTemplateRelatedBySourceTemplate(PropelPDO $con = null)
	{
		if ($this->aNagiosHostTemplateRelatedBySourceTemplate === null && ($this->source_template !== null)) {
			$c = new Criteria(NagiosHostTemplatePeer::DATABASE_NAME);
			$c->add(NagiosHostTemplatePeer::ID, $this->source_template);
			$this->aNagiosHostTemplateRelatedBySourceTemplate = NagiosHostTemplatePeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aNagiosHostTemplateRelatedBySourceTemplate->addNagiosHostTemplateInheritancesRelatedBySourceTemplate($this);
			 */
		}
		return $this->aNagiosHostTemplateRelatedBySourceTemplate;
	}

	/**
	 * Declares an association between this object and a NagiosHostTemplate object.
	 *
	 * @param      NagiosHostTemplate $v
	 * @return     NagiosHostTemplateInheritance The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosHostTemplateRelatedByTargetTemplate(NagiosHostTemplate $v = null)
	{
		if ($v === null) {
			$this->setTargetTemplate(NULL);
		} else {
			$this->setTargetTemplate($v->getId());
		}

		$this->aNagiosHostTemplateRelatedByTargetTemplate = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosHostTemplate object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosHostTemplateInheritanceRelatedByTargetTemplate($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosHostTemplate object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosHostTemplate The associated NagiosHostTemplate object.
	 * @throws     PropelException
	 */
	public function getNagiosHostTemplateRelatedByTargetTemplate(PropelPDO $con = null)
	{
		if ($this->aNagiosHostTemplateRelatedByTargetTemplate === null && ($this->target_template !== null)) {
			$c = new Criteria(NagiosHostTemplatePeer::DATABASE_NAME);
			$c->add(NagiosHostTemplatePeer::ID, $this->target_template);
			$this->aNagiosHostTemplateRelatedByTargetTemplate = NagiosHostTemplatePeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aNagiosHostTemplateRelatedByTargetTemplate->addNagiosHostTemplateInheritancesRelatedByTargetTemplate($this);
			 */
		}
		return $this->aNagiosHostTemplateRelatedByTargetTemplate;
	}

	/**
	 * Resets all collections of referencing foreign keys.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect objects
	 * with circular references.  This is currently necessary when using Propel in certain
	 * daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all associated objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

			$this->aNagiosHost = null;
			$this->aNagiosHostTemplateRelatedBySourceTemplate = null;
			$this->aNagiosHostTemplateRelatedByTargetTemplate = null;
	}

} // BaseNagiosHostTemplateInheritance
