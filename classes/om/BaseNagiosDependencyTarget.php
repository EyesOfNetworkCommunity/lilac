<?php


/**
 * Base class that represents a row from the 'nagios_dependency_target' table.
 *
 * Targets for a Dependency
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosDependencyTarget extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'NagiosDependencyTargetPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        NagiosDependencyTargetPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the dependency field.
	 * @var        int
	 */
	protected $dependency;

	/**
	 * The value for the target_host field.
	 * @var        int
	 */
	protected $target_host;

	/**
	 * The value for the target_service field.
	 * @var        int
	 */
	protected $target_service;

	/**
	 * The value for the target_hostgroup field.
	 * @var        int
	 */
	protected $target_hostgroup;

	/**
	 * @var        NagiosDependency
	 */
	protected $aNagiosDependency;

	/**
	 * @var        NagiosHost
	 */
	protected $aNagiosHost;

	/**
	 * @var        NagiosService
	 */
	protected $aNagiosService;

	/**
	 * @var        NagiosHostgroup
	 */
	protected $aNagiosHostgroup;

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
	 * Get the [dependency] column value.
	 * 
	 * @return     int
	 */
	public function getDependency()
	{
		return $this->dependency;
	}

	/**
	 * Get the [target_host] column value.
	 * 
	 * @return     int
	 */
	public function getTargetHost()
	{
		return $this->target_host;
	}

	/**
	 * Get the [target_service] column value.
	 * 
	 * @return     int
	 */
	public function getTargetService()
	{
		return $this->target_service;
	}

	/**
	 * Get the [target_hostgroup] column value.
	 * 
	 * @return     int
	 */
	public function getTargetHostgroup()
	{
		return $this->target_hostgroup;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosDependencyTarget The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = NagiosDependencyTargetPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [dependency] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosDependencyTarget The current object (for fluent API support)
	 */
	public function setDependency($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->dependency !== $v) {
			$this->dependency = $v;
			$this->modifiedColumns[] = NagiosDependencyTargetPeer::DEPENDENCY;
		}

		if ($this->aNagiosDependency !== null && $this->aNagiosDependency->getId() !== $v) {
			$this->aNagiosDependency = null;
		}

		return $this;
	} // setDependency()

	/**
	 * Set the value of [target_host] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosDependencyTarget The current object (for fluent API support)
	 */
	public function setTargetHost($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->target_host !== $v) {
			$this->target_host = $v;
			$this->modifiedColumns[] = NagiosDependencyTargetPeer::TARGET_HOST;
		}

		if ($this->aNagiosHost !== null && $this->aNagiosHost->getId() !== $v) {
			$this->aNagiosHost = null;
		}

		return $this;
	} // setTargetHost()

	/**
	 * Set the value of [target_service] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosDependencyTarget The current object (for fluent API support)
	 */
	public function setTargetService($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->target_service !== $v) {
			$this->target_service = $v;
			$this->modifiedColumns[] = NagiosDependencyTargetPeer::TARGET_SERVICE;
		}

		if ($this->aNagiosService !== null && $this->aNagiosService->getId() !== $v) {
			$this->aNagiosService = null;
		}

		return $this;
	} // setTargetService()

	/**
	 * Set the value of [target_hostgroup] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosDependencyTarget The current object (for fluent API support)
	 */
	public function setTargetHostgroup($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->target_hostgroup !== $v) {
			$this->target_hostgroup = $v;
			$this->modifiedColumns[] = NagiosDependencyTargetPeer::TARGET_HOSTGROUP;
		}

		if ($this->aNagiosHostgroup !== null && $this->aNagiosHostgroup->getId() !== $v) {
			$this->aNagiosHostgroup = null;
		}

		return $this;
	} // setTargetHostgroup()

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
			$this->dependency = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->target_host = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->target_service = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->target_hostgroup = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 5; // 5 = NagiosDependencyTargetPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating NagiosDependencyTarget object", $e);
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

		if ($this->aNagiosDependency !== null && $this->dependency !== $this->aNagiosDependency->getId()) {
			$this->aNagiosDependency = null;
		}
		if ($this->aNagiosHost !== null && $this->target_host !== $this->aNagiosHost->getId()) {
			$this->aNagiosHost = null;
		}
		if ($this->aNagiosService !== null && $this->target_service !== $this->aNagiosService->getId()) {
			$this->aNagiosService = null;
		}
		if ($this->aNagiosHostgroup !== null && $this->target_hostgroup !== $this->aNagiosHostgroup->getId()) {
			$this->aNagiosHostgroup = null;
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
			$con = Propel::getConnection(NagiosDependencyTargetPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = NagiosDependencyTargetPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aNagiosDependency = null;
			$this->aNagiosHost = null;
			$this->aNagiosService = null;
			$this->aNagiosHostgroup = null;
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
			$con = Propel::getConnection(NagiosDependencyTargetPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				NagiosDependencyTargetQuery::create()
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
			$con = Propel::getConnection(NagiosDependencyTargetPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				NagiosDependencyTargetPeer::addInstanceToPool($this);
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

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aNagiosDependency !== null) {
				if ($this->aNagiosDependency->isModified() || $this->aNagiosDependency->isNew()) {
					$affectedRows += $this->aNagiosDependency->save($con);
				}
				$this->setNagiosDependency($this->aNagiosDependency);
			}

			if ($this->aNagiosHost !== null) {
				if ($this->aNagiosHost->isModified() || $this->aNagiosHost->isNew()) {
					$affectedRows += $this->aNagiosHost->save($con);
				}
				$this->setNagiosHost($this->aNagiosHost);
			}

			if ($this->aNagiosService !== null) {
				if ($this->aNagiosService->isModified() || $this->aNagiosService->isNew()) {
					$affectedRows += $this->aNagiosService->save($con);
				}
				$this->setNagiosService($this->aNagiosService);
			}

			if ($this->aNagiosHostgroup !== null) {
				if ($this->aNagiosHostgroup->isModified() || $this->aNagiosHostgroup->isNew()) {
					$affectedRows += $this->aNagiosHostgroup->save($con);
				}
				$this->setNagiosHostgroup($this->aNagiosHostgroup);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = NagiosDependencyTargetPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(NagiosDependencyTargetPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.NagiosDependencyTargetPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += NagiosDependencyTargetPeer::doUpdate($this, $con);
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

			if ($this->aNagiosDependency !== null) {
				if (!$this->aNagiosDependency->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosDependency->getValidationFailures());
				}
			}

			if ($this->aNagiosHost !== null) {
				if (!$this->aNagiosHost->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosHost->getValidationFailures());
				}
			}

			if ($this->aNagiosService !== null) {
				if (!$this->aNagiosService->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosService->getValidationFailures());
				}
			}

			if ($this->aNagiosHostgroup !== null) {
				if (!$this->aNagiosHostgroup->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosHostgroup->getValidationFailures());
				}
			}


			if (($retval = NagiosDependencyTargetPeer::doValidate($this, $columns)) !== true) {
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
		$pos = NagiosDependencyTargetPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getDependency();
				break;
			case 2:
				return $this->getTargetHost();
				break;
			case 3:
				return $this->getTargetService();
				break;
			case 4:
				return $this->getTargetHostgroup();
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
		if (isset($alreadyDumpedObjects['NagiosDependencyTarget'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['NagiosDependencyTarget'][$this->getPrimaryKey()] = true;
		$keys = NagiosDependencyTargetPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDependency(),
			$keys[2] => $this->getTargetHost(),
			$keys[3] => $this->getTargetService(),
			$keys[4] => $this->getTargetHostgroup(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aNagiosDependency) {
				$result['NagiosDependency'] = $this->aNagiosDependency->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aNagiosHost) {
				$result['NagiosHost'] = $this->aNagiosHost->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aNagiosService) {
				$result['NagiosService'] = $this->aNagiosService->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aNagiosHostgroup) {
				$result['NagiosHostgroup'] = $this->aNagiosHostgroup->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
		$pos = NagiosDependencyTargetPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setDependency($value);
				break;
			case 2:
				$this->setTargetHost($value);
				break;
			case 3:
				$this->setTargetService($value);
				break;
			case 4:
				$this->setTargetHostgroup($value);
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
		$keys = NagiosDependencyTargetPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDependency($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setTargetHost($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTargetService($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setTargetHostgroup($arr[$keys[4]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(NagiosDependencyTargetPeer::DATABASE_NAME);

		if ($this->isColumnModified(NagiosDependencyTargetPeer::ID)) $criteria->add(NagiosDependencyTargetPeer::ID, $this->id);
		if ($this->isColumnModified(NagiosDependencyTargetPeer::DEPENDENCY)) $criteria->add(NagiosDependencyTargetPeer::DEPENDENCY, $this->dependency);
		if ($this->isColumnModified(NagiosDependencyTargetPeer::TARGET_HOST)) $criteria->add(NagiosDependencyTargetPeer::TARGET_HOST, $this->target_host);
		if ($this->isColumnModified(NagiosDependencyTargetPeer::TARGET_SERVICE)) $criteria->add(NagiosDependencyTargetPeer::TARGET_SERVICE, $this->target_service);
		if ($this->isColumnModified(NagiosDependencyTargetPeer::TARGET_HOSTGROUP)) $criteria->add(NagiosDependencyTargetPeer::TARGET_HOSTGROUP, $this->target_hostgroup);

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
		$criteria = new Criteria(NagiosDependencyTargetPeer::DATABASE_NAME);
		$criteria->add(NagiosDependencyTargetPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of NagiosDependencyTarget (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setDependency($this->getDependency());
		$copyObj->setTargetHost($this->getTargetHost());
		$copyObj->setTargetService($this->getTargetService());
		$copyObj->setTargetHostgroup($this->getTargetHostgroup());
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
	 * @return     NagiosDependencyTarget Clone of current object.
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
	 * @return     NagiosDependencyTargetPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new NagiosDependencyTargetPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a NagiosDependency object.
	 *
	 * @param      NagiosDependency $v
	 * @return     NagiosDependencyTarget The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosDependency(NagiosDependency $v = null)
	{
		if ($v === null) {
			$this->setDependency(NULL);
		} else {
			$this->setDependency($v->getId());
		}

		$this->aNagiosDependency = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosDependency object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosDependencyTarget($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosDependency object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosDependency The associated NagiosDependency object.
	 * @throws     PropelException
	 */
	public function getNagiosDependency(PropelPDO $con = null)
	{
		if ($this->aNagiosDependency === null && ($this->dependency !== null)) {
			$this->aNagiosDependency = NagiosDependencyQuery::create()->findPk($this->dependency, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aNagiosDependency->addNagiosDependencyTargets($this);
			 */
		}
		return $this->aNagiosDependency;
	}

	/**
	 * Declares an association between this object and a NagiosHost object.
	 *
	 * @param      NagiosHost $v
	 * @return     NagiosDependencyTarget The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosHost(NagiosHost $v = null)
	{
		if ($v === null) {
			$this->setTargetHost(NULL);
		} else {
			$this->setTargetHost($v->getId());
		}

		$this->aNagiosHost = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosHost object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosDependencyTarget($this);
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
		if ($this->aNagiosHost === null && ($this->target_host !== null)) {
			$this->aNagiosHost = NagiosHostQuery::create()->findPk($this->target_host, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aNagiosHost->addNagiosDependencyTargets($this);
			 */
		}
		return $this->aNagiosHost;
	}

	/**
	 * Declares an association between this object and a NagiosService object.
	 *
	 * @param      NagiosService $v
	 * @return     NagiosDependencyTarget The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosService(NagiosService $v = null)
	{
		if ($v === null) {
			$this->setTargetService(NULL);
		} else {
			$this->setTargetService($v->getId());
		}

		$this->aNagiosService = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosService object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosDependencyTarget($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosService object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosService The associated NagiosService object.
	 * @throws     PropelException
	 */
	public function getNagiosService(PropelPDO $con = null)
	{
		if ($this->aNagiosService === null && ($this->target_service !== null)) {
			$this->aNagiosService = NagiosServiceQuery::create()->findPk($this->target_service, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aNagiosService->addNagiosDependencyTargets($this);
			 */
		}
		return $this->aNagiosService;
	}

	/**
	 * Declares an association between this object and a NagiosHostgroup object.
	 *
	 * @param      NagiosHostgroup $v
	 * @return     NagiosDependencyTarget The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosHostgroup(NagiosHostgroup $v = null)
	{
		if ($v === null) {
			$this->setTargetHostgroup(NULL);
		} else {
			$this->setTargetHostgroup($v->getId());
		}

		$this->aNagiosHostgroup = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosHostgroup object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosDependencyTarget($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosHostgroup object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosHostgroup The associated NagiosHostgroup object.
	 * @throws     PropelException
	 */
	public function getNagiosHostgroup(PropelPDO $con = null)
	{
		if ($this->aNagiosHostgroup === null && ($this->target_hostgroup !== null)) {
			$this->aNagiosHostgroup = NagiosHostgroupQuery::create()->findPk($this->target_hostgroup, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aNagiosHostgroup->addNagiosDependencyTargets($this);
			 */
		}
		return $this->aNagiosHostgroup;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->dependency = null;
		$this->target_host = null;
		$this->target_service = null;
		$this->target_hostgroup = null;
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
		} // if ($deep)

		$this->aNagiosDependency = null;
		$this->aNagiosHost = null;
		$this->aNagiosService = null;
		$this->aNagiosHostgroup = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(NagiosDependencyTargetPeer::DEFAULT_STRING_FORMAT);
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

} // BaseNagiosDependencyTarget
