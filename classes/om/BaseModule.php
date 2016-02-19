<?php

/**
 * Base class that represents a row from the 'module' table.
 *
 * Module for Add-On
 *
 * @package    .om
 */
abstract class BaseModule extends BaseObject  implements Persistent {


	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        ModulePeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the name field.
	 * @var        string
	 */
	protected $name;

	/**
	 * The value for the title field.
	 * @var        string
	 */
	protected $title;

	/**
	 * The value for the description field.
	 * @var        string
	 */
	protected $description;

	/**
	 * The value for the add_on field.
	 * @var        int
	 */
	protected $add_on;

	/**
	 * The value for the classname field.
	 * @var        string
	 */
	protected $classname;

	/**
	 * The value for the hook field.
	 * @var        int
	 */
	protected $hook;

	/**
	 * @var        AddOn
	 */
	protected $aAddOnRelatedByAddOn;

	/**
	 * @var        ModuleHook
	 */
	protected $aModuleHook;

	/**
	 * @var        array ModuleHook[] Collection to store aggregation of ModuleHook objects.
	 */
	protected $collModuleHooks;

	/**
	 * @var        Criteria The criteria used to select the current contents of collModuleHooks.
	 */
	private $lastModuleHookCriteria = null;

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
	 * Initializes internal state of BaseModule object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
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
	 * Get the [name] column value.
	 * 
	 * @return     string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Get the [title] column value.
	 * 
	 * @return     string
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * Get the [description] column value.
	 * 
	 * @return     string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * Get the [add_on] column value.
	 * 
	 * @return     int
	 */
	public function getAddOn()
	{
		return $this->add_on;
	}

	/**
	 * Get the [classname] column value.
	 * 
	 * @return     string
	 */
	public function getClassname()
	{
		return $this->classname;
	}

	/**
	 * Get the [hook] column value.
	 * 
	 * @return     int
	 */
	public function getHook()
	{
		return $this->hook;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     Module The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ModulePeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     Module The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = ModulePeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Set the value of [title] column.
	 * 
	 * @param      string $v new value
	 * @return     Module The current object (for fluent API support)
	 */
	public function setTitle($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->title !== $v) {
			$this->title = $v;
			$this->modifiedColumns[] = ModulePeer::TITLE;
		}

		return $this;
	} // setTitle()

	/**
	 * Set the value of [description] column.
	 * 
	 * @param      string $v new value
	 * @return     Module The current object (for fluent API support)
	 */
	public function setDescription($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = ModulePeer::DESCRIPTION;
		}

		return $this;
	} // setDescription()

	/**
	 * Set the value of [add_on] column.
	 * 
	 * @param      int $v new value
	 * @return     Module The current object (for fluent API support)
	 */
	public function setAddOn($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->add_on !== $v) {
			$this->add_on = $v;
			$this->modifiedColumns[] = ModulePeer::ADD_ON;
		}

		if ($this->aAddOnRelatedByAddOn !== null && $this->aAddOnRelatedByAddOn->getId() !== $v) {
			$this->aAddOnRelatedByAddOn = null;
		}

		return $this;
	} // setAddOn()

	/**
	 * Set the value of [classname] column.
	 * 
	 * @param      string $v new value
	 * @return     Module The current object (for fluent API support)
	 */
	public function setClassname($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->classname !== $v) {
			$this->classname = $v;
			$this->modifiedColumns[] = ModulePeer::CLASSNAME;
		}

		return $this;
	} // setClassname()

	/**
	 * Set the value of [hook] column.
	 * 
	 * @param      int $v new value
	 * @return     Module The current object (for fluent API support)
	 */
	public function setHook($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->hook !== $v) {
			$this->hook = $v;
			$this->modifiedColumns[] = ModulePeer::HOOK;
		}

		if ($this->aModuleHook !== null && $this->aModuleHook->getId() !== $v) {
			$this->aModuleHook = null;
		}

		return $this;
	} // setHook()

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
			$this->name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->title = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->description = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->add_on = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->classname = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->hook = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 7; // 7 = ModulePeer::NUM_COLUMNS - ModulePeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating Module object", $e);
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

		if ($this->aAddOnRelatedByAddOn !== null && $this->add_on !== $this->aAddOnRelatedByAddOn->getId()) {
			$this->aAddOnRelatedByAddOn = null;
		}
		if ($this->aModuleHook !== null && $this->hook !== $this->aModuleHook->getId()) {
			$this->aModuleHook = null;
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
			$con = Propel::getConnection(ModulePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = ModulePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aAddOnRelatedByAddOn = null;
			$this->aModuleHook = null;
			$this->collModuleHooks = null;
			$this->lastModuleHookCriteria = null;

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
			$con = Propel::getConnection(ModulePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		try {
			$con->beginTransaction();
			ModulePeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
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
			$con = Propel::getConnection(ModulePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		try {
			$con->beginTransaction();
			$affectedRows = $this->doSave($con);
			$con->commit();
			ModulePeer::addInstanceToPool($this);
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
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

			if ($this->aAddOnRelatedByAddOn !== null) {
				if ($this->aAddOnRelatedByAddOn->isModified() || $this->aAddOnRelatedByAddOn->isNew()) {
					$affectedRows += $this->aAddOnRelatedByAddOn->save($con);
				}
				$this->setAddOnRelatedByAddOn($this->aAddOnRelatedByAddOn);
			}

			if ($this->aModuleHook !== null) {
				if ($this->aModuleHook->isModified() || $this->aModuleHook->isNew()) {
					$affectedRows += $this->aModuleHook->save($con);
				}
				$this->setModuleHook($this->aModuleHook);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = ModulePeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = ModulePeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += ModulePeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collModuleHooks !== null) {
				foreach ($this->collModuleHooks as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
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

			if ($this->aAddOnRelatedByAddOn !== null) {
				if (!$this->aAddOnRelatedByAddOn->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aAddOnRelatedByAddOn->getValidationFailures());
				}
			}

			if ($this->aModuleHook !== null) {
				if (!$this->aModuleHook->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aModuleHook->getValidationFailures());
				}
			}


			if (($retval = ModulePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collModuleHooks !== null) {
					foreach ($this->collModuleHooks as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
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
		$pos = ModulePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getName();
				break;
			case 2:
				return $this->getTitle();
				break;
			case 3:
				return $this->getDescription();
				break;
			case 4:
				return $this->getAddOn();
				break;
			case 5:
				return $this->getClassname();
				break;
			case 6:
				return $this->getHook();
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
		$keys = ModulePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
			$keys[2] => $this->getTitle(),
			$keys[3] => $this->getDescription(),
			$keys[4] => $this->getAddOn(),
			$keys[5] => $this->getClassname(),
			$keys[6] => $this->getHook(),
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
		$pos = ModulePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setName($value);
				break;
			case 2:
				$this->setTitle($value);
				break;
			case 3:
				$this->setDescription($value);
				break;
			case 4:
				$this->setAddOn($value);
				break;
			case 5:
				$this->setClassname($value);
				break;
			case 6:
				$this->setHook($value);
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
		$keys = ModulePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTitle($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDescription($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setAddOn($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setClassname($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setHook($arr[$keys[6]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(ModulePeer::DATABASE_NAME);

		if ($this->isColumnModified(ModulePeer::ID)) $criteria->add(ModulePeer::ID, $this->id);
		if ($this->isColumnModified(ModulePeer::NAME)) $criteria->add(ModulePeer::NAME, $this->name);
		if ($this->isColumnModified(ModulePeer::TITLE)) $criteria->add(ModulePeer::TITLE, $this->title);
		if ($this->isColumnModified(ModulePeer::DESCRIPTION)) $criteria->add(ModulePeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(ModulePeer::ADD_ON)) $criteria->add(ModulePeer::ADD_ON, $this->add_on);
		if ($this->isColumnModified(ModulePeer::CLASSNAME)) $criteria->add(ModulePeer::CLASSNAME, $this->classname);
		if ($this->isColumnModified(ModulePeer::HOOK)) $criteria->add(ModulePeer::HOOK, $this->hook);

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
		$criteria = new Criteria(ModulePeer::DATABASE_NAME);

		$criteria->add(ModulePeer::ID, $this->id);

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
	 * @param      object $copyObj An object of Module (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setName($this->name);

		$copyObj->setTitle($this->title);

		$copyObj->setDescription($this->description);

		$copyObj->setAddOn($this->add_on);

		$copyObj->setClassname($this->classname);

		$copyObj->setHook($this->hook);


		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getModuleHooks() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addModuleHook($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)


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
	 * @return     Module Clone of current object.
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
	 * @return     ModulePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new ModulePeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a AddOn object.
	 *
	 * @param      AddOn $v
	 * @return     Module The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setAddOnRelatedByAddOn(AddOn $v = null)
	{
		if ($v === null) {
			$this->setAddOn(NULL);
		} else {
			$this->setAddOn($v->getId());
		}

		$this->aAddOnRelatedByAddOn = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the AddOn object, it will not be re-added.
		if ($v !== null) {
			$v->addModule($this);
		}

		return $this;
	}


	/**
	 * Get the associated AddOn object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     AddOn The associated AddOn object.
	 * @throws     PropelException
	 */
	public function getAddOnRelatedByAddOn(PropelPDO $con = null)
	{
		if ($this->aAddOnRelatedByAddOn === null && ($this->add_on !== null)) {
			$this->aAddOnRelatedByAddOn = AddOnPeer::retrieveByPK($this->add_on, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aAddOnRelatedByAddOn->addModules($this);
			 */
		}
		return $this->aAddOnRelatedByAddOn;
	}

	/**
	 * Declares an association between this object and a ModuleHook object.
	 *
	 * @param      ModuleHook $v
	 * @return     Module The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setModuleHook(ModuleHook $v = null)
	{
		if ($v === null) {
			$this->setHook(NULL);
		} else {
			$this->setHook($v->getId());
		}

		$this->aModuleHook = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the ModuleHook object, it will not be re-added.
		if ($v !== null) {
			$v->addModule($this);
		}

		return $this;
	}


	/**
	 * Get the associated ModuleHook object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     ModuleHook The associated ModuleHook object.
	 * @throws     PropelException
	 */
	public function getModuleHook(PropelPDO $con = null)
	{
		if ($this->aModuleHook === null && ($this->hook !== null)) {
			$this->aModuleHook = ModuleHookPeer::retrieveByPK($this->hook, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aModuleHook->addModules($this);
			 */
		}
		return $this->aModuleHook;
	}

	/**
	 * Clears out the collModuleHooks collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addModuleHooks()
	 */
	public function clearModuleHooks()
	{
		$this->collModuleHooks = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collModuleHooks collection (array).
	 *
	 * By default this just sets the collModuleHooks collection to an empty array (like clearcollModuleHooks());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initModuleHooks()
	{
		$this->collModuleHooks = array();
	}

	/**
	 * Gets an array of ModuleHook objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this Module has previously been saved, it will retrieve
	 * related ModuleHooks from storage. If this Module is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array ModuleHook[]
	 * @throws     PropelException
	 */
	public function getModuleHooks($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(ModulePeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collModuleHooks === null) {
			if ($this->isNew()) {
			   $this->collModuleHooks = array();
			} else {

				$criteria->add(ModuleHookPeer::MODULE, $this->id);

				ModuleHookPeer::addSelectColumns($criteria);
				$this->collModuleHooks = ModuleHookPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(ModuleHookPeer::MODULE, $this->id);

				ModuleHookPeer::addSelectColumns($criteria);
				if (!isset($this->lastModuleHookCriteria) || !$this->lastModuleHookCriteria->equals($criteria)) {
					$this->collModuleHooks = ModuleHookPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastModuleHookCriteria = $criteria;
		return $this->collModuleHooks;
	}

	/**
	 * Returns the number of related ModuleHook objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related ModuleHook objects.
	 * @throws     PropelException
	 */
	public function countModuleHooks(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(ModulePeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collModuleHooks === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(ModuleHookPeer::MODULE, $this->id);

				$count = ModuleHookPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(ModuleHookPeer::MODULE, $this->id);

				if (!isset($this->lastModuleHookCriteria) || !$this->lastModuleHookCriteria->equals($criteria)) {
					$count = ModuleHookPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collModuleHooks);
				}
			} else {
				$count = count($this->collModuleHooks);
			}
		}
		$this->lastModuleHookCriteria = $criteria;
		return $count;
	}

	/**
	 * Method called to associate a ModuleHook object to this object
	 * through the ModuleHook foreign key attribute.
	 *
	 * @param      ModuleHook $l ModuleHook
	 * @return     void
	 * @throws     PropelException
	 */
	public function addModuleHook(ModuleHook $l)
	{
		if ($this->collModuleHooks === null) {
			$this->initModuleHooks();
		}
		if (!in_array($l, $this->collModuleHooks, true)) { // only add it if the **same** object is not already associated
			array_push($this->collModuleHooks, $l);
			$l->setModuleRelatedByModule($this);
		}
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
			if ($this->collModuleHooks) {
				foreach ((array) $this->collModuleHooks as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collModuleHooks = null;
	}

} // BaseModule
