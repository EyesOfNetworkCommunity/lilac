<?php


/**
 * Base class that represents a row from the 'autodiscovery_device' table.
 *
 * AutoDiscovery Found Device
 *
 * @package    propel.generator..om
 */
abstract class BaseAutodiscoveryDevice extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'AutodiscoveryDevicePeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        AutodiscoveryDevicePeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the job_id field.
	 * @var        int
	 */
	protected $job_id;

	/**
	 * The value for the address field.
	 * @var        string
	 */
	protected $address;

	/**
	 * The value for the name field.
	 * @var        string
	 */
	protected $name;

	/**
	 * The value for the hostname field.
	 * @var        string
	 */
	protected $hostname;

	/**
	 * The value for the description field.
	 * @var        string
	 */
	protected $description;

	/**
	 * The value for the osvendor field.
	 * @var        string
	 */
	protected $osvendor;

	/**
	 * The value for the osfamily field.
	 * @var        string
	 */
	protected $osfamily;

	/**
	 * The value for the osgen field.
	 * @var        string
	 */
	protected $osgen;

	/**
	 * The value for the host_template field.
	 * @var        int
	 */
	protected $host_template;

	/**
	 * The value for the proposed_parent field.
	 * @var        int
	 */
	protected $proposed_parent;

	/**
	 * @var        AutodiscoveryJob
	 */
	protected $aAutodiscoveryJob;

	/**
	 * @var        NagiosHostTemplate
	 */
	protected $aNagiosHostTemplate;

	/**
	 * @var        NagiosHost
	 */
	protected $aNagiosHost;

	/**
	 * @var        array AutodiscoveryDeviceService[] Collection to store aggregation of AutodiscoveryDeviceService objects.
	 */
	protected $collAutodiscoveryDeviceServices;

	/**
	 * @var        array AutodiscoveryDeviceTemplateMatch[] Collection to store aggregation of AutodiscoveryDeviceTemplateMatch objects.
	 */
	protected $collAutodiscoveryDeviceTemplateMatchs;

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
	 * Get the [job_id] column value.
	 * 
	 * @return     int
	 */
	public function getJobId()
	{
		return $this->job_id;
	}

	/**
	 * Get the [address] column value.
	 * 
	 * @return     string
	 */
	public function getAddress()
	{
		return $this->address;
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
	 * Get the [hostname] column value.
	 * 
	 * @return     string
	 */
	public function getHostname()
	{
		return $this->hostname;
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
	 * Get the [osvendor] column value.
	 * 
	 * @return     string
	 */
	public function getOsvendor()
	{
		return $this->osvendor;
	}

	/**
	 * Get the [osfamily] column value.
	 * 
	 * @return     string
	 */
	public function getOsfamily()
	{
		return $this->osfamily;
	}

	/**
	 * Get the [osgen] column value.
	 * 
	 * @return     string
	 */
	public function getOsgen()
	{
		return $this->osgen;
	}

	/**
	 * Get the [host_template] column value.
	 * 
	 * @return     int
	 */
	public function getHostTemplate()
	{
		return $this->host_template;
	}

	/**
	 * Get the [proposed_parent] column value.
	 * 
	 * @return     int
	 */
	public function getProposedParent()
	{
		return $this->proposed_parent;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     AutodiscoveryDevice The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = AutodiscoveryDevicePeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [job_id] column.
	 * 
	 * @param      int $v new value
	 * @return     AutodiscoveryDevice The current object (for fluent API support)
	 */
	public function setJobId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->job_id !== $v) {
			$this->job_id = $v;
			$this->modifiedColumns[] = AutodiscoveryDevicePeer::JOB_ID;
		}

		if ($this->aAutodiscoveryJob !== null && $this->aAutodiscoveryJob->getId() !== $v) {
			$this->aAutodiscoveryJob = null;
		}

		return $this;
	} // setJobId()

	/**
	 * Set the value of [address] column.
	 * 
	 * @param      string $v new value
	 * @return     AutodiscoveryDevice The current object (for fluent API support)
	 */
	public function setAddress($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->address !== $v) {
			$this->address = $v;
			$this->modifiedColumns[] = AutodiscoveryDevicePeer::ADDRESS;
		}

		return $this;
	} // setAddress()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     AutodiscoveryDevice The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = AutodiscoveryDevicePeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Set the value of [hostname] column.
	 * 
	 * @param      string $v new value
	 * @return     AutodiscoveryDevice The current object (for fluent API support)
	 */
	public function setHostname($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->hostname !== $v) {
			$this->hostname = $v;
			$this->modifiedColumns[] = AutodiscoveryDevicePeer::HOSTNAME;
		}

		return $this;
	} // setHostname()

	/**
	 * Set the value of [description] column.
	 * 
	 * @param      string $v new value
	 * @return     AutodiscoveryDevice The current object (for fluent API support)
	 */
	public function setDescription($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = AutodiscoveryDevicePeer::DESCRIPTION;
		}

		return $this;
	} // setDescription()

	/**
	 * Set the value of [osvendor] column.
	 * 
	 * @param      string $v new value
	 * @return     AutodiscoveryDevice The current object (for fluent API support)
	 */
	public function setOsvendor($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->osvendor !== $v) {
			$this->osvendor = $v;
			$this->modifiedColumns[] = AutodiscoveryDevicePeer::OSVENDOR;
		}

		return $this;
	} // setOsvendor()

	/**
	 * Set the value of [osfamily] column.
	 * 
	 * @param      string $v new value
	 * @return     AutodiscoveryDevice The current object (for fluent API support)
	 */
	public function setOsfamily($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->osfamily !== $v) {
			$this->osfamily = $v;
			$this->modifiedColumns[] = AutodiscoveryDevicePeer::OSFAMILY;
		}

		return $this;
	} // setOsfamily()

	/**
	 * Set the value of [osgen] column.
	 * 
	 * @param      string $v new value
	 * @return     AutodiscoveryDevice The current object (for fluent API support)
	 */
	public function setOsgen($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->osgen !== $v) {
			$this->osgen = $v;
			$this->modifiedColumns[] = AutodiscoveryDevicePeer::OSGEN;
		}

		return $this;
	} // setOsgen()

	/**
	 * Set the value of [host_template] column.
	 * 
	 * @param      int $v new value
	 * @return     AutodiscoveryDevice The current object (for fluent API support)
	 */
	public function setHostTemplate($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->host_template !== $v) {
			$this->host_template = $v;
			$this->modifiedColumns[] = AutodiscoveryDevicePeer::HOST_TEMPLATE;
		}

		if ($this->aNagiosHostTemplate !== null && $this->aNagiosHostTemplate->getId() !== $v) {
			$this->aNagiosHostTemplate = null;
		}

		return $this;
	} // setHostTemplate()

	/**
	 * Set the value of [proposed_parent] column.
	 * 
	 * @param      int $v new value
	 * @return     AutodiscoveryDevice The current object (for fluent API support)
	 */
	public function setProposedParent($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->proposed_parent !== $v) {
			$this->proposed_parent = $v;
			$this->modifiedColumns[] = AutodiscoveryDevicePeer::PROPOSED_PARENT;
		}

		if ($this->aNagiosHost !== null && $this->aNagiosHost->getId() !== $v) {
			$this->aNagiosHost = null;
		}

		return $this;
	} // setProposedParent()

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
			$this->job_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->address = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->name = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->hostname = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->description = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->osvendor = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->osfamily = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->osgen = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->host_template = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->proposed_parent = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 11; // 11 = AutodiscoveryDevicePeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating AutodiscoveryDevice object", $e);
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

		if ($this->aAutodiscoveryJob !== null && $this->job_id !== $this->aAutodiscoveryJob->getId()) {
			$this->aAutodiscoveryJob = null;
		}
		if ($this->aNagiosHostTemplate !== null && $this->host_template !== $this->aNagiosHostTemplate->getId()) {
			$this->aNagiosHostTemplate = null;
		}
		if ($this->aNagiosHost !== null && $this->proposed_parent !== $this->aNagiosHost->getId()) {
			$this->aNagiosHost = null;
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
			$con = Propel::getConnection(AutodiscoveryDevicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = AutodiscoveryDevicePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aAutodiscoveryJob = null;
			$this->aNagiosHostTemplate = null;
			$this->aNagiosHost = null;
			$this->collAutodiscoveryDeviceServices = null;

			$this->collAutodiscoveryDeviceTemplateMatchs = null;

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
			$con = Propel::getConnection(AutodiscoveryDevicePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				AutodiscoveryDeviceQuery::create()
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
			$con = Propel::getConnection(AutodiscoveryDevicePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				AutodiscoveryDevicePeer::addInstanceToPool($this);
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

			if ($this->aAutodiscoveryJob !== null) {
				if ($this->aAutodiscoveryJob->isModified() || $this->aAutodiscoveryJob->isNew()) {
					$affectedRows += $this->aAutodiscoveryJob->save($con);
				}
				$this->setAutodiscoveryJob($this->aAutodiscoveryJob);
			}

			if ($this->aNagiosHostTemplate !== null) {
				if ($this->aNagiosHostTemplate->isModified() || $this->aNagiosHostTemplate->isNew()) {
					$affectedRows += $this->aNagiosHostTemplate->save($con);
				}
				$this->setNagiosHostTemplate($this->aNagiosHostTemplate);
			}

			if ($this->aNagiosHost !== null) {
				if ($this->aNagiosHost->isModified() || $this->aNagiosHost->isNew()) {
					$affectedRows += $this->aNagiosHost->save($con);
				}
				$this->setNagiosHost($this->aNagiosHost);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = AutodiscoveryDevicePeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(AutodiscoveryDevicePeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.AutodiscoveryDevicePeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += AutodiscoveryDevicePeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collAutodiscoveryDeviceServices !== null) {
				foreach ($this->collAutodiscoveryDeviceServices as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collAutodiscoveryDeviceTemplateMatchs !== null) {
				foreach ($this->collAutodiscoveryDeviceTemplateMatchs as $referrerFK) {
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

			if ($this->aAutodiscoveryJob !== null) {
				if (!$this->aAutodiscoveryJob->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aAutodiscoveryJob->getValidationFailures());
				}
			}

			if ($this->aNagiosHostTemplate !== null) {
				if (!$this->aNagiosHostTemplate->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosHostTemplate->getValidationFailures());
				}
			}

			if ($this->aNagiosHost !== null) {
				if (!$this->aNagiosHost->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosHost->getValidationFailures());
				}
			}


			if (($retval = AutodiscoveryDevicePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collAutodiscoveryDeviceServices !== null) {
					foreach ($this->collAutodiscoveryDeviceServices as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collAutodiscoveryDeviceTemplateMatchs !== null) {
					foreach ($this->collAutodiscoveryDeviceTemplateMatchs as $referrerFK) {
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
		$pos = AutodiscoveryDevicePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getJobId();
				break;
			case 2:
				return $this->getAddress();
				break;
			case 3:
				return $this->getName();
				break;
			case 4:
				return $this->getHostname();
				break;
			case 5:
				return $this->getDescription();
				break;
			case 6:
				return $this->getOsvendor();
				break;
			case 7:
				return $this->getOsfamily();
				break;
			case 8:
				return $this->getOsgen();
				break;
			case 9:
				return $this->getHostTemplate();
				break;
			case 10:
				return $this->getProposedParent();
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
		if (isset($alreadyDumpedObjects['AutodiscoveryDevice'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['AutodiscoveryDevice'][$this->getPrimaryKey()] = true;
		$keys = AutodiscoveryDevicePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getJobId(),
			$keys[2] => $this->getAddress(),
			$keys[3] => $this->getName(),
			$keys[4] => $this->getHostname(),
			$keys[5] => $this->getDescription(),
			$keys[6] => $this->getOsvendor(),
			$keys[7] => $this->getOsfamily(),
			$keys[8] => $this->getOsgen(),
			$keys[9] => $this->getHostTemplate(),
			$keys[10] => $this->getProposedParent(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aAutodiscoveryJob) {
				$result['AutodiscoveryJob'] = $this->aAutodiscoveryJob->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aNagiosHostTemplate) {
				$result['NagiosHostTemplate'] = $this->aNagiosHostTemplate->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aNagiosHost) {
				$result['NagiosHost'] = $this->aNagiosHost->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->collAutodiscoveryDeviceServices) {
				$result['AutodiscoveryDeviceServices'] = $this->collAutodiscoveryDeviceServices->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collAutodiscoveryDeviceTemplateMatchs) {
				$result['AutodiscoveryDeviceTemplateMatchs'] = $this->collAutodiscoveryDeviceTemplateMatchs->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
		$pos = AutodiscoveryDevicePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setJobId($value);
				break;
			case 2:
				$this->setAddress($value);
				break;
			case 3:
				$this->setName($value);
				break;
			case 4:
				$this->setHostname($value);
				break;
			case 5:
				$this->setDescription($value);
				break;
			case 6:
				$this->setOsvendor($value);
				break;
			case 7:
				$this->setOsfamily($value);
				break;
			case 8:
				$this->setOsgen($value);
				break;
			case 9:
				$this->setHostTemplate($value);
				break;
			case 10:
				$this->setProposedParent($value);
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
		$keys = AutodiscoveryDevicePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setJobId($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setAddress($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setName($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setHostname($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDescription($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setOsvendor($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setOsfamily($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setOsgen($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setHostTemplate($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setProposedParent($arr[$keys[10]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(AutodiscoveryDevicePeer::DATABASE_NAME);

		if ($this->isColumnModified(AutodiscoveryDevicePeer::ID)) $criteria->add(AutodiscoveryDevicePeer::ID, $this->id);
		if ($this->isColumnModified(AutodiscoveryDevicePeer::JOB_ID)) $criteria->add(AutodiscoveryDevicePeer::JOB_ID, $this->job_id);
		if ($this->isColumnModified(AutodiscoveryDevicePeer::ADDRESS)) $criteria->add(AutodiscoveryDevicePeer::ADDRESS, $this->address);
		if ($this->isColumnModified(AutodiscoveryDevicePeer::NAME)) $criteria->add(AutodiscoveryDevicePeer::NAME, $this->name);
		if ($this->isColumnModified(AutodiscoveryDevicePeer::HOSTNAME)) $criteria->add(AutodiscoveryDevicePeer::HOSTNAME, $this->hostname);
		if ($this->isColumnModified(AutodiscoveryDevicePeer::DESCRIPTION)) $criteria->add(AutodiscoveryDevicePeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(AutodiscoveryDevicePeer::OSVENDOR)) $criteria->add(AutodiscoveryDevicePeer::OSVENDOR, $this->osvendor);
		if ($this->isColumnModified(AutodiscoveryDevicePeer::OSFAMILY)) $criteria->add(AutodiscoveryDevicePeer::OSFAMILY, $this->osfamily);
		if ($this->isColumnModified(AutodiscoveryDevicePeer::OSGEN)) $criteria->add(AutodiscoveryDevicePeer::OSGEN, $this->osgen);
		if ($this->isColumnModified(AutodiscoveryDevicePeer::HOST_TEMPLATE)) $criteria->add(AutodiscoveryDevicePeer::HOST_TEMPLATE, $this->host_template);
		if ($this->isColumnModified(AutodiscoveryDevicePeer::PROPOSED_PARENT)) $criteria->add(AutodiscoveryDevicePeer::PROPOSED_PARENT, $this->proposed_parent);

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
		$criteria = new Criteria(AutodiscoveryDevicePeer::DATABASE_NAME);
		$criteria->add(AutodiscoveryDevicePeer::ID, $this->id);

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
	 * @param      object $copyObj An object of AutodiscoveryDevice (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setJobId($this->getJobId());
		$copyObj->setAddress($this->getAddress());
		$copyObj->setName($this->getName());
		$copyObj->setHostname($this->getHostname());
		$copyObj->setDescription($this->getDescription());
		$copyObj->setOsvendor($this->getOsvendor());
		$copyObj->setOsfamily($this->getOsfamily());
		$copyObj->setOsgen($this->getOsgen());
		$copyObj->setHostTemplate($this->getHostTemplate());
		$copyObj->setProposedParent($this->getProposedParent());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getAutodiscoveryDeviceServices() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addAutodiscoveryDeviceService($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getAutodiscoveryDeviceTemplateMatchs() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addAutodiscoveryDeviceTemplateMatch($relObj->copy($deepCopy));
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
	 * @return     AutodiscoveryDevice Clone of current object.
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
	 * @return     AutodiscoveryDevicePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new AutodiscoveryDevicePeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a AutodiscoveryJob object.
	 *
	 * @param      AutodiscoveryJob $v
	 * @return     AutodiscoveryDevice The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setAutodiscoveryJob(AutodiscoveryJob $v = null)
	{
		if ($v === null) {
			$this->setJobId(NULL);
		} else {
			$this->setJobId($v->getId());
		}

		$this->aAutodiscoveryJob = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the AutodiscoveryJob object, it will not be re-added.
		if ($v !== null) {
			$v->addAutodiscoveryDevice($this);
		}

		return $this;
	}


	/**
	 * Get the associated AutodiscoveryJob object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     AutodiscoveryJob The associated AutodiscoveryJob object.
	 * @throws     PropelException
	 */
	public function getAutodiscoveryJob(PropelPDO $con = null)
	{
		if ($this->aAutodiscoveryJob === null && ($this->job_id !== null)) {
			$this->aAutodiscoveryJob = AutodiscoveryJobQuery::create()->findPk($this->job_id, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aAutodiscoveryJob->addAutodiscoveryDevices($this);
			 */
		}
		return $this->aAutodiscoveryJob;
	}

	/**
	 * Declares an association between this object and a NagiosHostTemplate object.
	 *
	 * @param      NagiosHostTemplate $v
	 * @return     AutodiscoveryDevice The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosHostTemplate(NagiosHostTemplate $v = null)
	{
		if ($v === null) {
			$this->setHostTemplate(NULL);
		} else {
			$this->setHostTemplate($v->getId());
		}

		$this->aNagiosHostTemplate = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosHostTemplate object, it will not be re-added.
		if ($v !== null) {
			$v->addAutodiscoveryDevice($this);
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
	public function getNagiosHostTemplate(PropelPDO $con = null)
	{
		if ($this->aNagiosHostTemplate === null && ($this->host_template !== null)) {
			$this->aNagiosHostTemplate = NagiosHostTemplateQuery::create()->findPk($this->host_template, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aNagiosHostTemplate->addAutodiscoveryDevices($this);
			 */
		}
		return $this->aNagiosHostTemplate;
	}

	/**
	 * Declares an association between this object and a NagiosHost object.
	 *
	 * @param      NagiosHost $v
	 * @return     AutodiscoveryDevice The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosHost(NagiosHost $v = null)
	{
		if ($v === null) {
			$this->setProposedParent(NULL);
		} else {
			$this->setProposedParent($v->getId());
		}

		$this->aNagiosHost = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosHost object, it will not be re-added.
		if ($v !== null) {
			$v->addAutodiscoveryDevice($this);
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
		if ($this->aNagiosHost === null && ($this->proposed_parent !== null)) {
			$this->aNagiosHost = NagiosHostQuery::create()->findPk($this->proposed_parent, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aNagiosHost->addAutodiscoveryDevices($this);
			 */
		}
		return $this->aNagiosHost;
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
		if ('AutodiscoveryDeviceService' == $relationName) {
			return $this->initAutodiscoveryDeviceServices();
		}
		if ('AutodiscoveryDeviceTemplateMatch' == $relationName) {
			return $this->initAutodiscoveryDeviceTemplateMatchs();
		}
	}

	/**
	 * Clears out the collAutodiscoveryDeviceServices collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addAutodiscoveryDeviceServices()
	 */
	public function clearAutodiscoveryDeviceServices()
	{
		$this->collAutodiscoveryDeviceServices = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collAutodiscoveryDeviceServices collection.
	 *
	 * By default this just sets the collAutodiscoveryDeviceServices collection to an empty array (like clearcollAutodiscoveryDeviceServices());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initAutodiscoveryDeviceServices($overrideExisting = true)
	{
		if (null !== $this->collAutodiscoveryDeviceServices && !$overrideExisting) {
			return;
		}
		$this->collAutodiscoveryDeviceServices = new PropelObjectCollection();
		$this->collAutodiscoveryDeviceServices->setModel('AutodiscoveryDeviceService');
	}

	/**
	 * Gets an array of AutodiscoveryDeviceService objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this AutodiscoveryDevice is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array AutodiscoveryDeviceService[] List of AutodiscoveryDeviceService objects
	 * @throws     PropelException
	 */
	public function getAutodiscoveryDeviceServices($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collAutodiscoveryDeviceServices || null !== $criteria) {
			if ($this->isNew() && null === $this->collAutodiscoveryDeviceServices) {
				// return empty collection
				$this->initAutodiscoveryDeviceServices();
			} else {
				$collAutodiscoveryDeviceServices = AutodiscoveryDeviceServiceQuery::create(null, $criteria)
					->filterByAutodiscoveryDevice($this)
					->find($con);
				if (null !== $criteria) {
					return $collAutodiscoveryDeviceServices;
				}
				$this->collAutodiscoveryDeviceServices = $collAutodiscoveryDeviceServices;
			}
		}
		return $this->collAutodiscoveryDeviceServices;
	}

	/**
	 * Returns the number of related AutodiscoveryDeviceService objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related AutodiscoveryDeviceService objects.
	 * @throws     PropelException
	 */
	public function countAutodiscoveryDeviceServices(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collAutodiscoveryDeviceServices || null !== $criteria) {
			if ($this->isNew() && null === $this->collAutodiscoveryDeviceServices) {
				return 0;
			} else {
				$query = AutodiscoveryDeviceServiceQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByAutodiscoveryDevice($this)
					->count($con);
			}
		} else {
			return count($this->collAutodiscoveryDeviceServices);
		}
	}

	/**
	 * Method called to associate a AutodiscoveryDeviceService object to this object
	 * through the AutodiscoveryDeviceService foreign key attribute.
	 *
	 * @param      AutodiscoveryDeviceService $l AutodiscoveryDeviceService
	 * @return     void
	 * @throws     PropelException
	 */
	public function addAutodiscoveryDeviceService(AutodiscoveryDeviceService $l)
	{
		if ($this->collAutodiscoveryDeviceServices === null) {
			$this->initAutodiscoveryDeviceServices();
		}
		if (!$this->collAutodiscoveryDeviceServices->contains($l)) { // only add it if the **same** object is not already associated
			$this->collAutodiscoveryDeviceServices[]= $l;
			$l->setAutodiscoveryDevice($this);
		}
	}

	/**
	 * Clears out the collAutodiscoveryDeviceTemplateMatchs collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addAutodiscoveryDeviceTemplateMatchs()
	 */
	public function clearAutodiscoveryDeviceTemplateMatchs()
	{
		$this->collAutodiscoveryDeviceTemplateMatchs = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collAutodiscoveryDeviceTemplateMatchs collection.
	 *
	 * By default this just sets the collAutodiscoveryDeviceTemplateMatchs collection to an empty array (like clearcollAutodiscoveryDeviceTemplateMatchs());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initAutodiscoveryDeviceTemplateMatchs($overrideExisting = true)
	{
		if (null !== $this->collAutodiscoveryDeviceTemplateMatchs && !$overrideExisting) {
			return;
		}
		$this->collAutodiscoveryDeviceTemplateMatchs = new PropelObjectCollection();
		$this->collAutodiscoveryDeviceTemplateMatchs->setModel('AutodiscoveryDeviceTemplateMatch');
	}

	/**
	 * Gets an array of AutodiscoveryDeviceTemplateMatch objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this AutodiscoveryDevice is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array AutodiscoveryDeviceTemplateMatch[] List of AutodiscoveryDeviceTemplateMatch objects
	 * @throws     PropelException
	 */
	public function getAutodiscoveryDeviceTemplateMatchs($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collAutodiscoveryDeviceTemplateMatchs || null !== $criteria) {
			if ($this->isNew() && null === $this->collAutodiscoveryDeviceTemplateMatchs) {
				// return empty collection
				$this->initAutodiscoveryDeviceTemplateMatchs();
			} else {
				$collAutodiscoveryDeviceTemplateMatchs = AutodiscoveryDeviceTemplateMatchQuery::create(null, $criteria)
					->filterByAutodiscoveryDevice($this)
					->find($con);
				if (null !== $criteria) {
					return $collAutodiscoveryDeviceTemplateMatchs;
				}
				$this->collAutodiscoveryDeviceTemplateMatchs = $collAutodiscoveryDeviceTemplateMatchs;
			}
		}
		return $this->collAutodiscoveryDeviceTemplateMatchs;
	}

	/**
	 * Returns the number of related AutodiscoveryDeviceTemplateMatch objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related AutodiscoveryDeviceTemplateMatch objects.
	 * @throws     PropelException
	 */
	public function countAutodiscoveryDeviceTemplateMatchs(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collAutodiscoveryDeviceTemplateMatchs || null !== $criteria) {
			if ($this->isNew() && null === $this->collAutodiscoveryDeviceTemplateMatchs) {
				return 0;
			} else {
				$query = AutodiscoveryDeviceTemplateMatchQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByAutodiscoveryDevice($this)
					->count($con);
			}
		} else {
			return count($this->collAutodiscoveryDeviceTemplateMatchs);
		}
	}

	/**
	 * Method called to associate a AutodiscoveryDeviceTemplateMatch object to this object
	 * through the AutodiscoveryDeviceTemplateMatch foreign key attribute.
	 *
	 * @param      AutodiscoveryDeviceTemplateMatch $l AutodiscoveryDeviceTemplateMatch
	 * @return     void
	 * @throws     PropelException
	 */
	public function addAutodiscoveryDeviceTemplateMatch(AutodiscoveryDeviceTemplateMatch $l)
	{
		if ($this->collAutodiscoveryDeviceTemplateMatchs === null) {
			$this->initAutodiscoveryDeviceTemplateMatchs();
		}
		if (!$this->collAutodiscoveryDeviceTemplateMatchs->contains($l)) { // only add it if the **same** object is not already associated
			$this->collAutodiscoveryDeviceTemplateMatchs[]= $l;
			$l->setAutodiscoveryDevice($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this AutodiscoveryDevice is new, it will return
	 * an empty collection; or if this AutodiscoveryDevice has previously
	 * been saved, it will retrieve related AutodiscoveryDeviceTemplateMatchs from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in AutodiscoveryDevice.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array AutodiscoveryDeviceTemplateMatch[] List of AutodiscoveryDeviceTemplateMatch objects
	 */
	public function getAutodiscoveryDeviceTemplateMatchsJoinNagiosHostTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = AutodiscoveryDeviceTemplateMatchQuery::create(null, $criteria);
		$query->joinWith('NagiosHostTemplate', $join_behavior);

		return $this->getAutodiscoveryDeviceTemplateMatchs($query, $con);
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->job_id = null;
		$this->address = null;
		$this->name = null;
		$this->hostname = null;
		$this->description = null;
		$this->osvendor = null;
		$this->osfamily = null;
		$this->osgen = null;
		$this->host_template = null;
		$this->proposed_parent = null;
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
			if ($this->collAutodiscoveryDeviceServices) {
				foreach ($this->collAutodiscoveryDeviceServices as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collAutodiscoveryDeviceTemplateMatchs) {
				foreach ($this->collAutodiscoveryDeviceTemplateMatchs as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collAutodiscoveryDeviceServices instanceof PropelCollection) {
			$this->collAutodiscoveryDeviceServices->clearIterator();
		}
		$this->collAutodiscoveryDeviceServices = null;
		if ($this->collAutodiscoveryDeviceTemplateMatchs instanceof PropelCollection) {
			$this->collAutodiscoveryDeviceTemplateMatchs->clearIterator();
		}
		$this->collAutodiscoveryDeviceTemplateMatchs = null;
		$this->aAutodiscoveryJob = null;
		$this->aNagiosHostTemplate = null;
		$this->aNagiosHost = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(AutodiscoveryDevicePeer::DEFAULT_STRING_FORMAT);
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

} // BaseAutodiscoveryDevice
