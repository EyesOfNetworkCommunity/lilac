<?php


/**
 * Base class that represents a row from the 'export_job' table.
 *
 * Export Job Information
 *
 * @package    propel.generator..om
 */
abstract class BaseExportJob extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'ExportJobPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        ExportJobPeer
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
	 * The value for the description field.
	 * @var        string
	 */
	protected $description;

	/**
	 * The value for the config field.
	 * @var        string
	 */
	protected $config;

	/**
	 * The value for the start_time field.
	 * @var        string
	 */
	protected $start_time;

	/**
	 * The value for the end_time field.
	 * @var        string
	 */
	protected $end_time;

	/**
	 * The value for the status field.
	 * @var        string
	 */
	protected $status;

	/**
	 * The value for the status_code field.
	 * @var        int
	 */
	protected $status_code;

	/**
	 * The value for the status_change_time field.
	 * @var        string
	 */
	protected $status_change_time;

	/**
	 * The value for the stats field.
	 * @var        string
	 */
	protected $stats;

	/**
	 * The value for the cmd field.
	 * @var        string
	 */
	protected $cmd;

	/**
	 * @var        array ExportLogEntry[] Collection to store aggregation of ExportLogEntry objects.
	 */
	protected $collExportLogEntrys;

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
	 * Get the [description] column value.
	 * 
	 * @return     string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * Get the [config] column value.
	 * 
	 * @return     string
	 */
	public function getConfig()
	{
		return $this->config;
	}

	/**
	 * Get the [optionally formatted] temporal [start_time] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getStartTime($format = 'Y-m-d H:i:s')
	{
		if ($this->start_time === null) {
			return null;
		}


		if ($this->start_time === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->start_time);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->start_time, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [optionally formatted] temporal [end_time] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getEndTime($format = 'Y-m-d H:i:s')
	{
		if ($this->end_time === null) {
			return null;
		}


		if ($this->end_time === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->end_time);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->end_time, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [status] column value.
	 * 
	 * @return     string
	 */
	public function getStatus()
	{
		return $this->status;
	}

	/**
	 * Get the [status_code] column value.
	 * 
	 * @return     int
	 */
	public function getStatusCode()
	{
		return $this->status_code;
	}

	/**
	 * Get the [optionally formatted] temporal [status_change_time] column value.
	 * 
	 *
	 * @param      string $format The date/time format string (either date()-style or strftime()-style).
	 *							If format is NULL, then the raw DateTime object will be returned.
	 * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
	 * @throws     PropelException - if unable to parse/validate the date/time value.
	 */
	public function getStatusChangeTime($format = 'Y-m-d H:i:s')
	{
		if ($this->status_change_time === null) {
			return null;
		}


		if ($this->status_change_time === '0000-00-00 00:00:00') {
			// while technically this is not a default value of NULL,
			// this seems to be closest in meaning.
			return null;
		} else {
			try {
				$dt = new DateTime($this->status_change_time);
			} catch (Exception $x) {
				throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->status_change_time, true), $x);
			}
		}

		if ($format === null) {
			// Because propel.useDateTimeClass is TRUE, we return a DateTime object.
			return $dt;
		} elseif (strpos($format, '%') !== false) {
			return strftime($format, $dt->format('U'));
		} else {
			return $dt->format($format);
		}
	}

	/**
	 * Get the [stats] column value.
	 * 
	 * @return     string
	 */
	public function getStats()
	{
		return $this->stats;
	}

	/**
	 * Get the [cmd] column value.
	 * 
	 * @return     string
	 */
	public function getCmd()
	{
		return $this->cmd;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     ExportJob The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = ExportJobPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     ExportJob The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = ExportJobPeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Set the value of [description] column.
	 * 
	 * @param      string $v new value
	 * @return     ExportJob The current object (for fluent API support)
	 */
	public function setDescription($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = ExportJobPeer::DESCRIPTION;
		}

		return $this;
	} // setDescription()

	/**
	 * Set the value of [config] column.
	 * 
	 * @param      string $v new value
	 * @return     ExportJob The current object (for fluent API support)
	 */
	public function setConfig($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->config !== $v) {
			$this->config = $v;
			$this->modifiedColumns[] = ExportJobPeer::CONFIG;
		}

		return $this;
	} // setConfig()

	/**
	 * Sets the value of [start_time] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     ExportJob The current object (for fluent API support)
	 */
	public function setStartTime($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->start_time !== null || $dt !== null) {
			$currentDateAsString = ($this->start_time !== null && $tmpDt = new DateTime($this->start_time)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->start_time = $newDateAsString;
				$this->modifiedColumns[] = ExportJobPeer::START_TIME;
			}
		} // if either are not null

		return $this;
	} // setStartTime()

	/**
	 * Sets the value of [end_time] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     ExportJob The current object (for fluent API support)
	 */
	public function setEndTime($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->end_time !== null || $dt !== null) {
			$currentDateAsString = ($this->end_time !== null && $tmpDt = new DateTime($this->end_time)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->end_time = $newDateAsString;
				$this->modifiedColumns[] = ExportJobPeer::END_TIME;
			}
		} // if either are not null

		return $this;
	} // setEndTime()

	/**
	 * Set the value of [status] column.
	 * 
	 * @param      string $v new value
	 * @return     ExportJob The current object (for fluent API support)
	 */
	public function setStatus($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->status !== $v) {
			$this->status = $v;
			$this->modifiedColumns[] = ExportJobPeer::STATUS;
		}

		return $this;
	} // setStatus()

	/**
	 * Set the value of [status_code] column.
	 * 
	 * @param      int $v new value
	 * @return     ExportJob The current object (for fluent API support)
	 */
	public function setStatusCode($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->status_code !== $v) {
			$this->status_code = $v;
			$this->modifiedColumns[] = ExportJobPeer::STATUS_CODE;
		}

		return $this;
	} // setStatusCode()

	/**
	 * Sets the value of [status_change_time] column to a normalized version of the date/time value specified.
	 * 
	 * @param      mixed $v string, integer (timestamp), or DateTime value.
	 *               Empty strings are treated as NULL.
	 * @return     ExportJob The current object (for fluent API support)
	 */
	public function setStatusChangeTime($v)
	{
		$dt = PropelDateTime::newInstance($v, null, 'DateTime');
		if ($this->status_change_time !== null || $dt !== null) {
			$currentDateAsString = ($this->status_change_time !== null && $tmpDt = new DateTime($this->status_change_time)) ? $tmpDt->format('Y-m-d H:i:s') : null;
			$newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
			if ($currentDateAsString !== $newDateAsString) {
				$this->status_change_time = $newDateAsString;
				$this->modifiedColumns[] = ExportJobPeer::STATUS_CHANGE_TIME;
			}
		} // if either are not null

		return $this;
	} // setStatusChangeTime()

	/**
	 * Set the value of [stats] column.
	 * 
	 * @param      string $v new value
	 * @return     ExportJob The current object (for fluent API support)
	 */
	public function setStats($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->stats !== $v) {
			$this->stats = $v;
			$this->modifiedColumns[] = ExportJobPeer::STATS;
		}

		return $this;
	} // setStats()

	/**
	 * Set the value of [cmd] column.
	 * 
	 * @param      string $v new value
	 * @return     ExportJob The current object (for fluent API support)
	 */
	public function setCmd($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->cmd !== $v) {
			$this->cmd = $v;
			$this->modifiedColumns[] = ExportJobPeer::CMD;
		}

		return $this;
	} // setCmd()

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
			$this->description = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->config = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->start_time = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->end_time = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->status = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->status_code = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->status_change_time = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->stats = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->cmd = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 11; // 11 = ExportJobPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating ExportJob object", $e);
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
			$con = Propel::getConnection(ExportJobPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = ExportJobPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->collExportLogEntrys = null;

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
			$con = Propel::getConnection(ExportJobPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				ExportJobQuery::create()
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
			$con = Propel::getConnection(ExportJobPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				ExportJobPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = ExportJobPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(ExportJobPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.ExportJobPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = ExportJobPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collExportLogEntrys !== null) {
				foreach ($this->collExportLogEntrys as $referrerFK) {
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


			if (($retval = ExportJobPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collExportLogEntrys !== null) {
					foreach ($this->collExportLogEntrys as $referrerFK) {
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
		$pos = ExportJobPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getDescription();
				break;
			case 3:
				return $this->getConfig();
				break;
			case 4:
				return $this->getStartTime();
				break;
			case 5:
				return $this->getEndTime();
				break;
			case 6:
				return $this->getStatus();
				break;
			case 7:
				return $this->getStatusCode();
				break;
			case 8:
				return $this->getStatusChangeTime();
				break;
			case 9:
				return $this->getStats();
				break;
			case 10:
				return $this->getCmd();
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
		if (isset($alreadyDumpedObjects['ExportJob'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['ExportJob'][$this->getPrimaryKey()] = true;
		$keys = ExportJobPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
			$keys[2] => $this->getDescription(),
			$keys[3] => $this->getConfig(),
			$keys[4] => $this->getStartTime(),
			$keys[5] => $this->getEndTime(),
			$keys[6] => $this->getStatus(),
			$keys[7] => $this->getStatusCode(),
			$keys[8] => $this->getStatusChangeTime(),
			$keys[9] => $this->getStats(),
			$keys[10] => $this->getCmd(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->collExportLogEntrys) {
				$result['ExportLogEntrys'] = $this->collExportLogEntrys->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
		$pos = ExportJobPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setDescription($value);
				break;
			case 3:
				$this->setConfig($value);
				break;
			case 4:
				$this->setStartTime($value);
				break;
			case 5:
				$this->setEndTime($value);
				break;
			case 6:
				$this->setStatus($value);
				break;
			case 7:
				$this->setStatusCode($value);
				break;
			case 8:
				$this->setStatusChangeTime($value);
				break;
			case 9:
				$this->setStats($value);
				break;
			case 10:
				$this->setCmd($value);
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
		$keys = ExportJobPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDescription($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setConfig($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setStartTime($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setEndTime($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setStatus($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setStatusCode($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setStatusChangeTime($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setStats($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setCmd($arr[$keys[10]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(ExportJobPeer::DATABASE_NAME);

		if ($this->isColumnModified(ExportJobPeer::ID)) $criteria->add(ExportJobPeer::ID, $this->id);
		if ($this->isColumnModified(ExportJobPeer::NAME)) $criteria->add(ExportJobPeer::NAME, $this->name);
		if ($this->isColumnModified(ExportJobPeer::DESCRIPTION)) $criteria->add(ExportJobPeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(ExportJobPeer::CONFIG)) $criteria->add(ExportJobPeer::CONFIG, $this->config);
		if ($this->isColumnModified(ExportJobPeer::START_TIME)) $criteria->add(ExportJobPeer::START_TIME, $this->start_time);
		if ($this->isColumnModified(ExportJobPeer::END_TIME)) $criteria->add(ExportJobPeer::END_TIME, $this->end_time);
		if ($this->isColumnModified(ExportJobPeer::STATUS)) $criteria->add(ExportJobPeer::STATUS, $this->status);
		if ($this->isColumnModified(ExportJobPeer::STATUS_CODE)) $criteria->add(ExportJobPeer::STATUS_CODE, $this->status_code);
		if ($this->isColumnModified(ExportJobPeer::STATUS_CHANGE_TIME)) $criteria->add(ExportJobPeer::STATUS_CHANGE_TIME, $this->status_change_time);
		if ($this->isColumnModified(ExportJobPeer::STATS)) $criteria->add(ExportJobPeer::STATS, $this->stats);
		if ($this->isColumnModified(ExportJobPeer::CMD)) $criteria->add(ExportJobPeer::CMD, $this->cmd);

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
		$criteria = new Criteria(ExportJobPeer::DATABASE_NAME);
		$criteria->add(ExportJobPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of ExportJob (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setName($this->getName());
		$copyObj->setDescription($this->getDescription());
		$copyObj->setConfig($this->getConfig());
		$copyObj->setStartTime($this->getStartTime());
		$copyObj->setEndTime($this->getEndTime());
		$copyObj->setStatus($this->getStatus());
		$copyObj->setStatusCode($this->getStatusCode());
		$copyObj->setStatusChangeTime($this->getStatusChangeTime());
		$copyObj->setStats($this->getStats());
		$copyObj->setCmd($this->getCmd());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getExportLogEntrys() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addExportLogEntry($relObj->copy($deepCopy));
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
	 * @return     ExportJob Clone of current object.
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
	 * @return     ExportJobPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new ExportJobPeer();
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
		if ('ExportLogEntry' == $relationName) {
			return $this->initExportLogEntrys();
		}
	}

	/**
	 * Clears out the collExportLogEntrys collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addExportLogEntrys()
	 */
	public function clearExportLogEntrys()
	{
		$this->collExportLogEntrys = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collExportLogEntrys collection.
	 *
	 * By default this just sets the collExportLogEntrys collection to an empty array (like clearcollExportLogEntrys());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initExportLogEntrys($overrideExisting = true)
	{
		if (null !== $this->collExportLogEntrys && !$overrideExisting) {
			return;
		}
		$this->collExportLogEntrys = new PropelObjectCollection();
		$this->collExportLogEntrys->setModel('ExportLogEntry');
	}

	/**
	 * Gets an array of ExportLogEntry objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this ExportJob is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array ExportLogEntry[] List of ExportLogEntry objects
	 * @throws     PropelException
	 */
	public function getExportLogEntrys($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collExportLogEntrys || null !== $criteria) {
			if ($this->isNew() && null === $this->collExportLogEntrys) {
				// return empty collection
				$this->initExportLogEntrys();
			} else {
				$collExportLogEntrys = ExportLogEntryQuery::create(null, $criteria)
					->filterByExportJob($this)
					->find($con);
				if (null !== $criteria) {
					return $collExportLogEntrys;
				}
				$this->collExportLogEntrys = $collExportLogEntrys;
			}
		}
		return $this->collExportLogEntrys;
	}

	/**
	 * Returns the number of related ExportLogEntry objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related ExportLogEntry objects.
	 * @throws     PropelException
	 */
	public function countExportLogEntrys(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collExportLogEntrys || null !== $criteria) {
			if ($this->isNew() && null === $this->collExportLogEntrys) {
				return 0;
			} else {
				$query = ExportLogEntryQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByExportJob($this)
					->count($con);
			}
		} else {
			return count($this->collExportLogEntrys);
		}
	}

	/**
	 * Method called to associate a ExportLogEntry object to this object
	 * through the ExportLogEntry foreign key attribute.
	 *
	 * @param      ExportLogEntry $l ExportLogEntry
	 * @return     void
	 * @throws     PropelException
	 */
	public function addExportLogEntry(ExportLogEntry $l)
	{
		if ($this->collExportLogEntrys === null) {
			$this->initExportLogEntrys();
		}
		if (!$this->collExportLogEntrys->contains($l)) { // only add it if the **same** object is not already associated
			$this->collExportLogEntrys[]= $l;
			$l->setExportJob($this);
		}
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->name = null;
		$this->description = null;
		$this->config = null;
		$this->start_time = null;
		$this->end_time = null;
		$this->status = null;
		$this->status_code = null;
		$this->status_change_time = null;
		$this->stats = null;
		$this->cmd = null;
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
			if ($this->collExportLogEntrys) {
				foreach ($this->collExportLogEntrys as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collExportLogEntrys instanceof PropelCollection) {
			$this->collExportLogEntrys->clearIterator();
		}
		$this->collExportLogEntrys = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(ExportJobPeer::DEFAULT_STRING_FORMAT);
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

} // BaseExportJob
