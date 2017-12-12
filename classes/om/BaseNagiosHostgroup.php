<?php


/**
 * Base class that represents a row from the 'nagios_hostgroup' table.
 *
 * Nagios Hostgroup
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosHostgroup extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'NagiosHostgroupPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        NagiosHostgroupPeer
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
	 * The value for the alias field.
	 * @var        string
	 */
	protected $alias;

	/**
	 * The value for the notes field.
	 * @var        string
	 */
	protected $notes;

	/**
	 * The value for the notes_url field.
	 * @var        string
	 */
	protected $notes_url;

	/**
	 * The value for the action_url field.
	 * @var        string
	 */
	protected $action_url;

	/**
	 * @var        array NagiosService[] Collection to store aggregation of NagiosService objects.
	 */
	protected $collNagiosServices;

	/**
	 * @var        array NagiosDependency[] Collection to store aggregation of NagiosDependency objects.
	 */
	protected $collNagiosDependencys;

	/**
	 * @var        array NagiosDependencyTarget[] Collection to store aggregation of NagiosDependencyTarget objects.
	 */
	protected $collNagiosDependencyTargets;

	/**
	 * @var        array NagiosEscalation[] Collection to store aggregation of NagiosEscalation objects.
	 */
	protected $collNagiosEscalations;

	/**
	 * @var        array NagiosHostgroupMembership[] Collection to store aggregation of NagiosHostgroupMembership objects.
	 */
	protected $collNagiosHostgroupMemberships;

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
	 * Get the [alias] column value.
	 * 
	 * @return     string
	 */
	public function getAlias()
	{
		return $this->alias;
	}

	/**
	 * Get the [notes] column value.
	 * 
	 * @return     string
	 */
	public function getNotes()
	{
		return $this->notes;
	}

	/**
	 * Get the [notes_url] column value.
	 * 
	 * @return     string
	 */
	public function getNotesUrl()
	{
		return $this->notes_url;
	}

	/**
	 * Get the [action_url] column value.
	 * 
	 * @return     string
	 */
	public function getActionUrl()
	{
		return $this->action_url;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosHostgroup The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = NagiosHostgroupPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosHostgroup The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = NagiosHostgroupPeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Set the value of [alias] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosHostgroup The current object (for fluent API support)
	 */
	public function setAlias($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->alias !== $v) {
			$this->alias = $v;
			$this->modifiedColumns[] = NagiosHostgroupPeer::ALIAS;
		}

		return $this;
	} // setAlias()

	/**
	 * Set the value of [notes] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosHostgroup The current object (for fluent API support)
	 */
	public function setNotes($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->notes !== $v) {
			$this->notes = $v;
			$this->modifiedColumns[] = NagiosHostgroupPeer::NOTES;
		}

		return $this;
	} // setNotes()

	/**
	 * Set the value of [notes_url] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosHostgroup The current object (for fluent API support)
	 */
	public function setNotesUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->notes_url !== $v) {
			$this->notes_url = $v;
			$this->modifiedColumns[] = NagiosHostgroupPeer::NOTES_URL;
		}

		return $this;
	} // setNotesUrl()

	/**
	 * Set the value of [action_url] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosHostgroup The current object (for fluent API support)
	 */
	public function setActionUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->action_url !== $v) {
			$this->action_url = $v;
			$this->modifiedColumns[] = NagiosHostgroupPeer::ACTION_URL;
		}

		return $this;
	} // setActionUrl()

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
			$this->alias = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->notes = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->notes_url = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->action_url = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 6; // 6 = NagiosHostgroupPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating NagiosHostgroup object", $e);
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
			$con = Propel::getConnection(NagiosHostgroupPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = NagiosHostgroupPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->collNagiosServices = null;

			$this->collNagiosDependencys = null;

			$this->collNagiosDependencyTargets = null;

			$this->collNagiosEscalations = null;

			$this->collNagiosHostgroupMemberships = null;

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
			$con = Propel::getConnection(NagiosHostgroupPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				NagiosHostgroupQuery::create()
					->filterByPrimaryKey($this->getPrimaryKey())
					->delete($con);
				$this->postDelete($con);
				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
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
			$con = Propel::getConnection(NagiosHostgroupPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				NagiosHostgroupPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
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

			if ($this->isNew() ) {
				$this->modifiedColumns[] = NagiosHostgroupPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(NagiosHostgroupPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.NagiosHostgroupPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = NagiosHostgroupPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collNagiosServices !== null) {
				foreach ($this->collNagiosServices as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosDependencys !== null) {
				foreach ($this->collNagiosDependencys as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosDependencyTargets !== null) {
				foreach ($this->collNagiosDependencyTargets as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosEscalations !== null) {
				foreach ($this->collNagiosEscalations as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosHostgroupMemberships !== null) {
				foreach ($this->collNagiosHostgroupMemberships as $referrerFK) {
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


			if (($retval = NagiosHostgroupPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collNagiosServices !== null) {
					foreach ($this->collNagiosServices as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosDependencys !== null) {
					foreach ($this->collNagiosDependencys as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosDependencyTargets !== null) {
					foreach ($this->collNagiosDependencyTargets as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosEscalations !== null) {
					foreach ($this->collNagiosEscalations as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosHostgroupMemberships !== null) {
					foreach ($this->collNagiosHostgroupMemberships as $referrerFK) {
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
		$pos = NagiosHostgroupPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getAlias();
				break;
			case 3:
				return $this->getNotes();
				break;
			case 4:
				return $this->getNotesUrl();
				break;
			case 5:
				return $this->getActionUrl();
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
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
	 * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
	{
		if (isset($alreadyDumpedObjects['NagiosHostgroup'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['NagiosHostgroup'][$this->getPrimaryKey()] = true;
		$keys = NagiosHostgroupPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
			$keys[2] => $this->getAlias(),
			$keys[3] => $this->getNotes(),
			$keys[4] => $this->getNotesUrl(),
			$keys[5] => $this->getActionUrl(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->collNagiosServices) {
				$result['NagiosServices'] = $this->collNagiosServices->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosDependencys) {
				$result['NagiosDependencys'] = $this->collNagiosDependencys->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosDependencyTargets) {
				$result['NagiosDependencyTargets'] = $this->collNagiosDependencyTargets->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosEscalations) {
				$result['NagiosEscalations'] = $this->collNagiosEscalations->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosHostgroupMemberships) {
				$result['NagiosHostgroupMemberships'] = $this->collNagiosHostgroupMemberships->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
		}
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
		$pos = NagiosHostgroupPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setAlias($value);
				break;
			case 3:
				$this->setNotes($value);
				break;
			case 4:
				$this->setNotesUrl($value);
				break;
			case 5:
				$this->setActionUrl($value);
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
		$keys = NagiosHostgroupPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setAlias($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setNotes($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setNotesUrl($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setActionUrl($arr[$keys[5]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(NagiosHostgroupPeer::DATABASE_NAME);

		if ($this->isColumnModified(NagiosHostgroupPeer::ID)) $criteria->add(NagiosHostgroupPeer::ID, $this->id);
		if ($this->isColumnModified(NagiosHostgroupPeer::NAME)) $criteria->add(NagiosHostgroupPeer::NAME, $this->name);
		if ($this->isColumnModified(NagiosHostgroupPeer::ALIAS)) $criteria->add(NagiosHostgroupPeer::ALIAS, $this->alias);
		if ($this->isColumnModified(NagiosHostgroupPeer::NOTES)) $criteria->add(NagiosHostgroupPeer::NOTES, $this->notes);
		if ($this->isColumnModified(NagiosHostgroupPeer::NOTES_URL)) $criteria->add(NagiosHostgroupPeer::NOTES_URL, $this->notes_url);
		if ($this->isColumnModified(NagiosHostgroupPeer::ACTION_URL)) $criteria->add(NagiosHostgroupPeer::ACTION_URL, $this->action_url);

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
		$criteria = new Criteria(NagiosHostgroupPeer::DATABASE_NAME);
		$criteria->add(NagiosHostgroupPeer::ID, $this->id);

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
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of NagiosHostgroup (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setName($this->getName());
		$copyObj->setAlias($this->getAlias());
		$copyObj->setNotes($this->getNotes());
		$copyObj->setNotesUrl($this->getNotesUrl());
		$copyObj->setActionUrl($this->getActionUrl());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getNagiosServices() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosService($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosDependencys() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosDependency($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosDependencyTargets() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosDependencyTarget($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosEscalations() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosEscalation($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosHostgroupMemberships() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosHostgroupMembership($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)

		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setId(NULL); // this is a auto-increment column, so set to default value
		}
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
	 * @return     NagiosHostgroup Clone of current object.
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
	 * @return     NagiosHostgroupPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new NagiosHostgroupPeer();
		}
		return self::$peer;
	}


	/**
	 * Initializes a collection based on the name of a relation.
	 * Avoids crafting an 'init[$relationName]s' method name 
	 * that wouldn't work when StandardEnglishPluralizer is used.
	 *
	 * @param      string $relationName The name of the relation to initialize
	 * @return     void
	 */
	public function initRelation($relationName)
	{
		if ('NagiosService' == $relationName) {
			return $this->initNagiosServices();
		}
		if ('NagiosDependency' == $relationName) {
			return $this->initNagiosDependencys();
		}
		if ('NagiosDependencyTarget' == $relationName) {
			return $this->initNagiosDependencyTargets();
		}
		if ('NagiosEscalation' == $relationName) {
			return $this->initNagiosEscalations();
		}
		if ('NagiosHostgroupMembership' == $relationName) {
			return $this->initNagiosHostgroupMemberships();
		}
	}

	/**
	 * Clears out the collNagiosServices collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosServices()
	 */
	public function clearNagiosServices()
	{
		$this->collNagiosServices = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosServices collection.
	 *
	 * By default this just sets the collNagiosServices collection to an empty array (like clearcollNagiosServices());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosServices($overrideExisting = true)
	{
		if (null !== $this->collNagiosServices && !$overrideExisting) {
			return;
		}
		$this->collNagiosServices = new PropelObjectCollection();
		$this->collNagiosServices->setModel('NagiosService');
	}

	/**
	 * Gets an array of NagiosService objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosHostgroup is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosService[] List of NagiosService objects
	 * @throws     PropelException
	 */
	public function getNagiosServices($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosServices || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosServices) {
				// return empty collection
				$this->initNagiosServices();
			} else {
				$collNagiosServices = NagiosServiceQuery::create(null, $criteria)
					->filterByNagiosHostgroup($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosServices;
				}
				$this->collNagiosServices = $collNagiosServices;
			}
		}
		return $this->collNagiosServices;
	}

	/**
	 * Returns the number of related NagiosService objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosService objects.
	 * @throws     PropelException
	 */
	public function countNagiosServices(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosServices || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosServices) {
				return 0;
			} else {
				$query = NagiosServiceQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosHostgroup($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosServices);
		}
	}

	/**
	 * Method called to associate a NagiosService object to this object
	 * through the NagiosService foreign key attribute.
	 *
	 * @param      NagiosService $l NagiosService
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosService(NagiosService $l)
	{
		if ($this->collNagiosServices === null) {
			$this->initNagiosServices();
		}
		if (!$this->collNagiosServices->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosServices[]= $l;
			$l->setNagiosHostgroup($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHostgroup is new, it will return
	 * an empty collection; or if this NagiosHostgroup has previously
	 * been saved, it will retrieve related NagiosServices from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHostgroup.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosService[] List of NagiosService objects
	 */
	public function getNagiosServicesJoinNagiosHost($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceQuery::create(null, $criteria);
		$query->joinWith('NagiosHost', $join_behavior);

		return $this->getNagiosServices($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHostgroup is new, it will return
	 * an empty collection; or if this NagiosHostgroup has previously
	 * been saved, it will retrieve related NagiosServices from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHostgroup.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosService[] List of NagiosService objects
	 */
	public function getNagiosServicesJoinNagiosHostTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceQuery::create(null, $criteria);
		$query->joinWith('NagiosHostTemplate', $join_behavior);

		return $this->getNagiosServices($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHostgroup is new, it will return
	 * an empty collection; or if this NagiosHostgroup has previously
	 * been saved, it will retrieve related NagiosServices from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHostgroup.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosService[] List of NagiosService objects
	 */
	public function getNagiosServicesJoinNagiosCommandRelatedByCheckCommand($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceQuery::create(null, $criteria);
		$query->joinWith('NagiosCommandRelatedByCheckCommand', $join_behavior);

		return $this->getNagiosServices($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHostgroup is new, it will return
	 * an empty collection; or if this NagiosHostgroup has previously
	 * been saved, it will retrieve related NagiosServices from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHostgroup.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosService[] List of NagiosService objects
	 */
	public function getNagiosServicesJoinNagiosCommandRelatedByEventHandler($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceQuery::create(null, $criteria);
		$query->joinWith('NagiosCommandRelatedByEventHandler', $join_behavior);

		return $this->getNagiosServices($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHostgroup is new, it will return
	 * an empty collection; or if this NagiosHostgroup has previously
	 * been saved, it will retrieve related NagiosServices from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHostgroup.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosService[] List of NagiosService objects
	 */
	public function getNagiosServicesJoinNagiosTimeperiodRelatedByCheckPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceQuery::create(null, $criteria);
		$query->joinWith('NagiosTimeperiodRelatedByCheckPeriod', $join_behavior);

		return $this->getNagiosServices($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHostgroup is new, it will return
	 * an empty collection; or if this NagiosHostgroup has previously
	 * been saved, it will retrieve related NagiosServices from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHostgroup.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosService[] List of NagiosService objects
	 */
	public function getNagiosServicesJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceQuery::create(null, $criteria);
		$query->joinWith('NagiosTimeperiodRelatedByNotificationPeriod', $join_behavior);

		return $this->getNagiosServices($query, $con);
	}

	/**
	 * Clears out the collNagiosDependencys collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosDependencys()
	 */
	public function clearNagiosDependencys()
	{
		$this->collNagiosDependencys = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosDependencys collection.
	 *
	 * By default this just sets the collNagiosDependencys collection to an empty array (like clearcollNagiosDependencys());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosDependencys($overrideExisting = true)
	{
		if (null !== $this->collNagiosDependencys && !$overrideExisting) {
			return;
		}
		$this->collNagiosDependencys = new PropelObjectCollection();
		$this->collNagiosDependencys->setModel('NagiosDependency');
	}

	/**
	 * Gets an array of NagiosDependency objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosHostgroup is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosDependency[] List of NagiosDependency objects
	 * @throws     PropelException
	 */
	public function getNagiosDependencys($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosDependencys || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosDependencys) {
				// return empty collection
				$this->initNagiosDependencys();
			} else {
				$collNagiosDependencys = NagiosDependencyQuery::create(null, $criteria)
					->filterByNagiosHostgroup($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosDependencys;
				}
				$this->collNagiosDependencys = $collNagiosDependencys;
			}
		}
		return $this->collNagiosDependencys;
	}

	/**
	 * Returns the number of related NagiosDependency objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosDependency objects.
	 * @throws     PropelException
	 */
	public function countNagiosDependencys(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosDependencys || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosDependencys) {
				return 0;
			} else {
				$query = NagiosDependencyQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosHostgroup($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosDependencys);
		}
	}

	/**
	 * Method called to associate a NagiosDependency object to this object
	 * through the NagiosDependency foreign key attribute.
	 *
	 * @param      NagiosDependency $l NagiosDependency
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosDependency(NagiosDependency $l)
	{
		if ($this->collNagiosDependencys === null) {
			$this->initNagiosDependencys();
		}
		if (!$this->collNagiosDependencys->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosDependencys[]= $l;
			$l->setNagiosHostgroup($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHostgroup is new, it will return
	 * an empty collection; or if this NagiosHostgroup has previously
	 * been saved, it will retrieve related NagiosDependencys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHostgroup.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosDependency[] List of NagiosDependency objects
	 */
	public function getNagiosDependencysJoinNagiosHostTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosDependencyQuery::create(null, $criteria);
		$query->joinWith('NagiosHostTemplate', $join_behavior);

		return $this->getNagiosDependencys($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHostgroup is new, it will return
	 * an empty collection; or if this NagiosHostgroup has previously
	 * been saved, it will retrieve related NagiosDependencys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHostgroup.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosDependency[] List of NagiosDependency objects
	 */
	public function getNagiosDependencysJoinNagiosHost($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosDependencyQuery::create(null, $criteria);
		$query->joinWith('NagiosHost', $join_behavior);

		return $this->getNagiosDependencys($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHostgroup is new, it will return
	 * an empty collection; or if this NagiosHostgroup has previously
	 * been saved, it will retrieve related NagiosDependencys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHostgroup.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosDependency[] List of NagiosDependency objects
	 */
	public function getNagiosDependencysJoinNagiosServiceTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosDependencyQuery::create(null, $criteria);
		$query->joinWith('NagiosServiceTemplate', $join_behavior);

		return $this->getNagiosDependencys($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHostgroup is new, it will return
	 * an empty collection; or if this NagiosHostgroup has previously
	 * been saved, it will retrieve related NagiosDependencys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHostgroup.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosDependency[] List of NagiosDependency objects
	 */
	public function getNagiosDependencysJoinNagiosService($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosDependencyQuery::create(null, $criteria);
		$query->joinWith('NagiosService', $join_behavior);

		return $this->getNagiosDependencys($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHostgroup is new, it will return
	 * an empty collection; or if this NagiosHostgroup has previously
	 * been saved, it will retrieve related NagiosDependencys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHostgroup.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosDependency[] List of NagiosDependency objects
	 */
	public function getNagiosDependencysJoinNagiosTimeperiod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosDependencyQuery::create(null, $criteria);
		$query->joinWith('NagiosTimeperiod', $join_behavior);

		return $this->getNagiosDependencys($query, $con);
	}

	/**
	 * Clears out the collNagiosDependencyTargets collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosDependencyTargets()
	 */
	public function clearNagiosDependencyTargets()
	{
		$this->collNagiosDependencyTargets = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosDependencyTargets collection.
	 *
	 * By default this just sets the collNagiosDependencyTargets collection to an empty array (like clearcollNagiosDependencyTargets());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosDependencyTargets($overrideExisting = true)
	{
		if (null !== $this->collNagiosDependencyTargets && !$overrideExisting) {
			return;
		}
		$this->collNagiosDependencyTargets = new PropelObjectCollection();
		$this->collNagiosDependencyTargets->setModel('NagiosDependencyTarget');
	}

	/**
	 * Gets an array of NagiosDependencyTarget objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosHostgroup is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosDependencyTarget[] List of NagiosDependencyTarget objects
	 * @throws     PropelException
	 */
	public function getNagiosDependencyTargets($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosDependencyTargets || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosDependencyTargets) {
				// return empty collection
				$this->initNagiosDependencyTargets();
			} else {
				$collNagiosDependencyTargets = NagiosDependencyTargetQuery::create(null, $criteria)
					->filterByNagiosHostgroup($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosDependencyTargets;
				}
				$this->collNagiosDependencyTargets = $collNagiosDependencyTargets;
			}
		}
		return $this->collNagiosDependencyTargets;
	}

	/**
	 * Returns the number of related NagiosDependencyTarget objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosDependencyTarget objects.
	 * @throws     PropelException
	 */
	public function countNagiosDependencyTargets(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosDependencyTargets || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosDependencyTargets) {
				return 0;
			} else {
				$query = NagiosDependencyTargetQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosHostgroup($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosDependencyTargets);
		}
	}

	/**
	 * Method called to associate a NagiosDependencyTarget object to this object
	 * through the NagiosDependencyTarget foreign key attribute.
	 *
	 * @param      NagiosDependencyTarget $l NagiosDependencyTarget
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosDependencyTarget(NagiosDependencyTarget $l)
	{
		if ($this->collNagiosDependencyTargets === null) {
			$this->initNagiosDependencyTargets();
		}
		if (!$this->collNagiosDependencyTargets->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosDependencyTargets[]= $l;
			$l->setNagiosHostgroup($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHostgroup is new, it will return
	 * an empty collection; or if this NagiosHostgroup has previously
	 * been saved, it will retrieve related NagiosDependencyTargets from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHostgroup.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosDependencyTarget[] List of NagiosDependencyTarget objects
	 */
	public function getNagiosDependencyTargetsJoinNagiosDependency($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosDependencyTargetQuery::create(null, $criteria);
		$query->joinWith('NagiosDependency', $join_behavior);

		return $this->getNagiosDependencyTargets($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHostgroup is new, it will return
	 * an empty collection; or if this NagiosHostgroup has previously
	 * been saved, it will retrieve related NagiosDependencyTargets from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHostgroup.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosDependencyTarget[] List of NagiosDependencyTarget objects
	 */
	public function getNagiosDependencyTargetsJoinNagiosHost($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosDependencyTargetQuery::create(null, $criteria);
		$query->joinWith('NagiosHost', $join_behavior);

		return $this->getNagiosDependencyTargets($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHostgroup is new, it will return
	 * an empty collection; or if this NagiosHostgroup has previously
	 * been saved, it will retrieve related NagiosDependencyTargets from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHostgroup.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosDependencyTarget[] List of NagiosDependencyTarget objects
	 */
	public function getNagiosDependencyTargetsJoinNagiosService($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosDependencyTargetQuery::create(null, $criteria);
		$query->joinWith('NagiosService', $join_behavior);

		return $this->getNagiosDependencyTargets($query, $con);
	}

	/**
	 * Clears out the collNagiosEscalations collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosEscalations()
	 */
	public function clearNagiosEscalations()
	{
		$this->collNagiosEscalations = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosEscalations collection.
	 *
	 * By default this just sets the collNagiosEscalations collection to an empty array (like clearcollNagiosEscalations());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosEscalations($overrideExisting = true)
	{
		if (null !== $this->collNagiosEscalations && !$overrideExisting) {
			return;
		}
		$this->collNagiosEscalations = new PropelObjectCollection();
		$this->collNagiosEscalations->setModel('NagiosEscalation');
	}

	/**
	 * Gets an array of NagiosEscalation objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosHostgroup is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosEscalation[] List of NagiosEscalation objects
	 * @throws     PropelException
	 */
	public function getNagiosEscalations($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosEscalations || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosEscalations) {
				// return empty collection
				$this->initNagiosEscalations();
			} else {
				$collNagiosEscalations = NagiosEscalationQuery::create(null, $criteria)
					->filterByNagiosHostgroup($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosEscalations;
				}
				$this->collNagiosEscalations = $collNagiosEscalations;
			}
		}
		return $this->collNagiosEscalations;
	}

	/**
	 * Returns the number of related NagiosEscalation objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosEscalation objects.
	 * @throws     PropelException
	 */
	public function countNagiosEscalations(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosEscalations || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosEscalations) {
				return 0;
			} else {
				$query = NagiosEscalationQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosHostgroup($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosEscalations);
		}
	}

	/**
	 * Method called to associate a NagiosEscalation object to this object
	 * through the NagiosEscalation foreign key attribute.
	 *
	 * @param      NagiosEscalation $l NagiosEscalation
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosEscalation(NagiosEscalation $l)
	{
		if ($this->collNagiosEscalations === null) {
			$this->initNagiosEscalations();
		}
		if (!$this->collNagiosEscalations->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosEscalations[]= $l;
			$l->setNagiosHostgroup($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHostgroup is new, it will return
	 * an empty collection; or if this NagiosHostgroup has previously
	 * been saved, it will retrieve related NagiosEscalations from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHostgroup.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosEscalation[] List of NagiosEscalation objects
	 */
	public function getNagiosEscalationsJoinNagiosHostTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosEscalationQuery::create(null, $criteria);
		$query->joinWith('NagiosHostTemplate', $join_behavior);

		return $this->getNagiosEscalations($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHostgroup is new, it will return
	 * an empty collection; or if this NagiosHostgroup has previously
	 * been saved, it will retrieve related NagiosEscalations from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHostgroup.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosEscalation[] List of NagiosEscalation objects
	 */
	public function getNagiosEscalationsJoinNagiosHost($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosEscalationQuery::create(null, $criteria);
		$query->joinWith('NagiosHost', $join_behavior);

		return $this->getNagiosEscalations($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHostgroup is new, it will return
	 * an empty collection; or if this NagiosHostgroup has previously
	 * been saved, it will retrieve related NagiosEscalations from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHostgroup.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosEscalation[] List of NagiosEscalation objects
	 */
	public function getNagiosEscalationsJoinNagiosServiceTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosEscalationQuery::create(null, $criteria);
		$query->joinWith('NagiosServiceTemplate', $join_behavior);

		return $this->getNagiosEscalations($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHostgroup is new, it will return
	 * an empty collection; or if this NagiosHostgroup has previously
	 * been saved, it will retrieve related NagiosEscalations from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHostgroup.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosEscalation[] List of NagiosEscalation objects
	 */
	public function getNagiosEscalationsJoinNagiosService($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosEscalationQuery::create(null, $criteria);
		$query->joinWith('NagiosService', $join_behavior);

		return $this->getNagiosEscalations($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHostgroup is new, it will return
	 * an empty collection; or if this NagiosHostgroup has previously
	 * been saved, it will retrieve related NagiosEscalations from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHostgroup.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosEscalation[] List of NagiosEscalation objects
	 */
	public function getNagiosEscalationsJoinNagiosTimeperiod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosEscalationQuery::create(null, $criteria);
		$query->joinWith('NagiosTimeperiod', $join_behavior);

		return $this->getNagiosEscalations($query, $con);
	}

	/**
	 * Clears out the collNagiosHostgroupMemberships collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosHostgroupMemberships()
	 */
	public function clearNagiosHostgroupMemberships()
	{
		$this->collNagiosHostgroupMemberships = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosHostgroupMemberships collection.
	 *
	 * By default this just sets the collNagiosHostgroupMemberships collection to an empty array (like clearcollNagiosHostgroupMemberships());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosHostgroupMemberships($overrideExisting = true)
	{
		if (null !== $this->collNagiosHostgroupMemberships && !$overrideExisting) {
			return;
		}
		$this->collNagiosHostgroupMemberships = new PropelObjectCollection();
		$this->collNagiosHostgroupMemberships->setModel('NagiosHostgroupMembership');
	}

	/**
	 * Gets an array of NagiosHostgroupMembership objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosHostgroup is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosHostgroupMembership[] List of NagiosHostgroupMembership objects
	 * @throws     PropelException
	 */
	public function getNagiosHostgroupMemberships($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosHostgroupMemberships || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosHostgroupMemberships) {
				// return empty collection
				$this->initNagiosHostgroupMemberships();
			} else {
				$collNagiosHostgroupMemberships = NagiosHostgroupMembershipQuery::create(null, $criteria)
					->filterByNagiosHostgroup($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosHostgroupMemberships;
				}
				$this->collNagiosHostgroupMemberships = $collNagiosHostgroupMemberships;
			}
		}
		return $this->collNagiosHostgroupMemberships;
	}

	/**
	 * Returns the number of related NagiosHostgroupMembership objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosHostgroupMembership objects.
	 * @throws     PropelException
	 */
	public function countNagiosHostgroupMemberships(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosHostgroupMemberships || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosHostgroupMemberships) {
				return 0;
			} else {
				$query = NagiosHostgroupMembershipQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosHostgroup($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosHostgroupMemberships);
		}
	}

	/**
	 * Method called to associate a NagiosHostgroupMembership object to this object
	 * through the NagiosHostgroupMembership foreign key attribute.
	 *
	 * @param      NagiosHostgroupMembership $l NagiosHostgroupMembership
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosHostgroupMembership(NagiosHostgroupMembership $l)
	{
		if ($this->collNagiosHostgroupMemberships === null) {
			$this->initNagiosHostgroupMemberships();
		}
		if (!$this->collNagiosHostgroupMemberships->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosHostgroupMemberships[]= $l;
			$l->setNagiosHostgroup($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHostgroup is new, it will return
	 * an empty collection; or if this NagiosHostgroup has previously
	 * been saved, it will retrieve related NagiosHostgroupMemberships from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHostgroup.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosHostgroupMembership[] List of NagiosHostgroupMembership objects
	 */
	public function getNagiosHostgroupMembershipsJoinNagiosHost($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosHostgroupMembershipQuery::create(null, $criteria);
		$query->joinWith('NagiosHost', $join_behavior);

		return $this->getNagiosHostgroupMemberships($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHostgroup is new, it will return
	 * an empty collection; or if this NagiosHostgroup has previously
	 * been saved, it will retrieve related NagiosHostgroupMemberships from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHostgroup.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosHostgroupMembership[] List of NagiosHostgroupMembership objects
	 */
	public function getNagiosHostgroupMembershipsJoinNagiosHostTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosHostgroupMembershipQuery::create(null, $criteria);
		$query->joinWith('NagiosHostTemplate', $join_behavior);

		return $this->getNagiosHostgroupMemberships($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->name = null;
		$this->alias = null;
		$this->notes = null;
		$this->notes_url = null;
		$this->action_url = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all references to other model objects or collections of model objects.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect
	 * objects with circular references (even in PHP 5.3). This is currently necessary
	 * when using Propel in certain daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all referrer objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
			if ($this->collNagiosServices) {
				foreach ($this->collNagiosServices as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosDependencys) {
				foreach ($this->collNagiosDependencys as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosDependencyTargets) {
				foreach ($this->collNagiosDependencyTargets as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosEscalations) {
				foreach ($this->collNagiosEscalations as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosHostgroupMemberships) {
				foreach ($this->collNagiosHostgroupMemberships as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collNagiosServices instanceof PropelCollection) {
			$this->collNagiosServices->clearIterator();
		}
		$this->collNagiosServices = null;
		if ($this->collNagiosDependencys instanceof PropelCollection) {
			$this->collNagiosDependencys->clearIterator();
		}
		$this->collNagiosDependencys = null;
		if ($this->collNagiosDependencyTargets instanceof PropelCollection) {
			$this->collNagiosDependencyTargets->clearIterator();
		}
		$this->collNagiosDependencyTargets = null;
		if ($this->collNagiosEscalations instanceof PropelCollection) {
			$this->collNagiosEscalations->clearIterator();
		}
		$this->collNagiosEscalations = null;
		if ($this->collNagiosHostgroupMemberships instanceof PropelCollection) {
			$this->collNagiosHostgroupMemberships->clearIterator();
		}
		$this->collNagiosHostgroupMemberships = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(NagiosHostgroupPeer::DEFAULT_STRING_FORMAT);
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		if (preg_match('/get(\w+)/', $name, $matches)) {
			$virtualColumn = $matches[1];
			if ($this->hasVirtualColumn($virtualColumn)) {
				return $this->getVirtualColumn($virtualColumn);
			}
			// no lcfirst in php<5.3...
			$virtualColumn[0] = strtolower($virtualColumn[0]);
			if ($this->hasVirtualColumn($virtualColumn)) {
				return $this->getVirtualColumn($virtualColumn);
			}
		}
		return parent::__call($name, $params);
	}

} // BaseNagiosHostgroup
