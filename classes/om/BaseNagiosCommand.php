<?php


/**
 * Base class that represents a row from the 'nagios_command' table.
 *
 * Nagios Command
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosCommand extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'NagiosCommandPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        NagiosCommandPeer
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
	 * The value for the line field.
	 * @var        string
	 */
	protected $line;

	/**
	 * The value for the description field.
	 * @var        string
	 */
	protected $description;

	/**
	 * @var        array NagiosContactNotificationCommand[] Collection to store aggregation of NagiosContactNotificationCommand objects.
	 */
	protected $collNagiosContactNotificationCommands;

	/**
	 * @var        array NagiosHostTemplate[] Collection to store aggregation of NagiosHostTemplate objects.
	 */
	protected $collNagiosHostTemplatesRelatedByCheckCommand;

	/**
	 * @var        array NagiosHostTemplate[] Collection to store aggregation of NagiosHostTemplate objects.
	 */
	protected $collNagiosHostTemplatesRelatedByEventHandler;

	/**
	 * @var        array NagiosHost[] Collection to store aggregation of NagiosHost objects.
	 */
	protected $collNagiosHostsRelatedByCheckCommand;

	/**
	 * @var        array NagiosHost[] Collection to store aggregation of NagiosHost objects.
	 */
	protected $collNagiosHostsRelatedByEventHandler;

	/**
	 * @var        array NagiosServiceTemplate[] Collection to store aggregation of NagiosServiceTemplate objects.
	 */
	protected $collNagiosServiceTemplatesRelatedByCheckCommand;

	/**
	 * @var        array NagiosServiceTemplate[] Collection to store aggregation of NagiosServiceTemplate objects.
	 */
	protected $collNagiosServiceTemplatesRelatedByEventHandler;

	/**
	 * @var        array NagiosService[] Collection to store aggregation of NagiosService objects.
	 */
	protected $collNagiosServicesRelatedByCheckCommand;

	/**
	 * @var        array NagiosService[] Collection to store aggregation of NagiosService objects.
	 */
	protected $collNagiosServicesRelatedByEventHandler;

	/**
	 * @var        array NagiosMainConfiguration[] Collection to store aggregation of NagiosMainConfiguration objects.
	 */
	protected $collNagiosMainConfigurationsRelatedByOcspCommand;

	/**
	 * @var        array NagiosMainConfiguration[] Collection to store aggregation of NagiosMainConfiguration objects.
	 */
	protected $collNagiosMainConfigurationsRelatedByOchpCommand;

	/**
	 * @var        array NagiosMainConfiguration[] Collection to store aggregation of NagiosMainConfiguration objects.
	 */
	protected $collNagiosMainConfigurationsRelatedByHostPerfdataCommand;

	/**
	 * @var        array NagiosMainConfiguration[] Collection to store aggregation of NagiosMainConfiguration objects.
	 */
	protected $collNagiosMainConfigurationsRelatedByServicePerfdataCommand;

	/**
	 * @var        array NagiosMainConfiguration[] Collection to store aggregation of NagiosMainConfiguration objects.
	 */
	protected $collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand;

	/**
	 * @var        array NagiosMainConfiguration[] Collection to store aggregation of NagiosMainConfiguration objects.
	 */
	protected $collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand;

	/**
	 * @var        array NagiosMainConfiguration[] Collection to store aggregation of NagiosMainConfiguration objects.
	 */
	protected $collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler;

	/**
	 * @var        array NagiosMainConfiguration[] Collection to store aggregation of NagiosMainConfiguration objects.
	 */
	protected $collNagiosMainConfigurationsRelatedByGlobalHostEventHandler;

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
	 * Get the [line] column value.
	 * 
	 * @return     string
	 */
	public function getLine()
	{
		return $this->line;
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
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosCommand The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = NagiosCommandPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosCommand The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = NagiosCommandPeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Set the value of [line] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosCommand The current object (for fluent API support)
	 */
	public function setLine($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->line !== $v) {
			$this->line = $v;
			$this->modifiedColumns[] = NagiosCommandPeer::LINE;
		}

		return $this;
	} // setLine()

	/**
	 * Set the value of [description] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosCommand The current object (for fluent API support)
	 */
	public function setDescription($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = NagiosCommandPeer::DESCRIPTION;
		}

		return $this;
	} // setDescription()

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
			$this->line = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->description = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 4; // 4 = NagiosCommandPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating NagiosCommand object", $e);
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
			$con = Propel::getConnection(NagiosCommandPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = NagiosCommandPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->collNagiosContactNotificationCommands = null;

			$this->collNagiosHostTemplatesRelatedByCheckCommand = null;

			$this->collNagiosHostTemplatesRelatedByEventHandler = null;

			$this->collNagiosHostsRelatedByCheckCommand = null;

			$this->collNagiosHostsRelatedByEventHandler = null;

			$this->collNagiosServiceTemplatesRelatedByCheckCommand = null;

			$this->collNagiosServiceTemplatesRelatedByEventHandler = null;

			$this->collNagiosServicesRelatedByCheckCommand = null;

			$this->collNagiosServicesRelatedByEventHandler = null;

			$this->collNagiosMainConfigurationsRelatedByOcspCommand = null;

			$this->collNagiosMainConfigurationsRelatedByOchpCommand = null;

			$this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand = null;

			$this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand = null;

			$this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand = null;

			$this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand = null;

			$this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler = null;

			$this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler = null;

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
			$con = Propel::getConnection(NagiosCommandPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				NagiosCommandQuery::create()
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
			$con = Propel::getConnection(NagiosCommandPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				NagiosCommandPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = NagiosCommandPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(NagiosCommandPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.NagiosCommandPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = NagiosCommandPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collNagiosContactNotificationCommands !== null) {
				foreach ($this->collNagiosContactNotificationCommands as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosHostTemplatesRelatedByCheckCommand !== null) {
				foreach ($this->collNagiosHostTemplatesRelatedByCheckCommand as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosHostTemplatesRelatedByEventHandler !== null) {
				foreach ($this->collNagiosHostTemplatesRelatedByEventHandler as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosHostsRelatedByCheckCommand !== null) {
				foreach ($this->collNagiosHostsRelatedByCheckCommand as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosHostsRelatedByEventHandler !== null) {
				foreach ($this->collNagiosHostsRelatedByEventHandler as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosServiceTemplatesRelatedByCheckCommand !== null) {
				foreach ($this->collNagiosServiceTemplatesRelatedByCheckCommand as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosServiceTemplatesRelatedByEventHandler !== null) {
				foreach ($this->collNagiosServiceTemplatesRelatedByEventHandler as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosServicesRelatedByCheckCommand !== null) {
				foreach ($this->collNagiosServicesRelatedByCheckCommand as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosServicesRelatedByEventHandler !== null) {
				foreach ($this->collNagiosServicesRelatedByEventHandler as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosMainConfigurationsRelatedByOcspCommand !== null) {
				foreach ($this->collNagiosMainConfigurationsRelatedByOcspCommand as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosMainConfigurationsRelatedByOchpCommand !== null) {
				foreach ($this->collNagiosMainConfigurationsRelatedByOchpCommand as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand !== null) {
				foreach ($this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand !== null) {
				foreach ($this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand !== null) {
				foreach ($this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand !== null) {
				foreach ($this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler !== null) {
				foreach ($this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler !== null) {
				foreach ($this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler as $referrerFK) {
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


			if (($retval = NagiosCommandPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collNagiosContactNotificationCommands !== null) {
					foreach ($this->collNagiosContactNotificationCommands as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosHostTemplatesRelatedByCheckCommand !== null) {
					foreach ($this->collNagiosHostTemplatesRelatedByCheckCommand as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosHostTemplatesRelatedByEventHandler !== null) {
					foreach ($this->collNagiosHostTemplatesRelatedByEventHandler as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosHostsRelatedByCheckCommand !== null) {
					foreach ($this->collNagiosHostsRelatedByCheckCommand as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosHostsRelatedByEventHandler !== null) {
					foreach ($this->collNagiosHostsRelatedByEventHandler as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosServiceTemplatesRelatedByCheckCommand !== null) {
					foreach ($this->collNagiosServiceTemplatesRelatedByCheckCommand as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosServiceTemplatesRelatedByEventHandler !== null) {
					foreach ($this->collNagiosServiceTemplatesRelatedByEventHandler as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosServicesRelatedByCheckCommand !== null) {
					foreach ($this->collNagiosServicesRelatedByCheckCommand as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosServicesRelatedByEventHandler !== null) {
					foreach ($this->collNagiosServicesRelatedByEventHandler as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosMainConfigurationsRelatedByOcspCommand !== null) {
					foreach ($this->collNagiosMainConfigurationsRelatedByOcspCommand as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosMainConfigurationsRelatedByOchpCommand !== null) {
					foreach ($this->collNagiosMainConfigurationsRelatedByOchpCommand as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand !== null) {
					foreach ($this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand !== null) {
					foreach ($this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand !== null) {
					foreach ($this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand !== null) {
					foreach ($this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler !== null) {
					foreach ($this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler !== null) {
					foreach ($this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler as $referrerFK) {
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
		$pos = NagiosCommandPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getLine();
				break;
			case 3:
				return $this->getDescription();
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
		if (isset($alreadyDumpedObjects['NagiosCommand'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['NagiosCommand'][$this->getPrimaryKey()] = true;
		$keys = NagiosCommandPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
			$keys[2] => $this->getLine(),
			$keys[3] => $this->getDescription(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->collNagiosContactNotificationCommands) {
				$result['NagiosContactNotificationCommands'] = $this->collNagiosContactNotificationCommands->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosHostTemplatesRelatedByCheckCommand) {
				$result['NagiosHostTemplatesRelatedByCheckCommand'] = $this->collNagiosHostTemplatesRelatedByCheckCommand->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosHostTemplatesRelatedByEventHandler) {
				$result['NagiosHostTemplatesRelatedByEventHandler'] = $this->collNagiosHostTemplatesRelatedByEventHandler->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosHostsRelatedByCheckCommand) {
				$result['NagiosHostsRelatedByCheckCommand'] = $this->collNagiosHostsRelatedByCheckCommand->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosHostsRelatedByEventHandler) {
				$result['NagiosHostsRelatedByEventHandler'] = $this->collNagiosHostsRelatedByEventHandler->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosServiceTemplatesRelatedByCheckCommand) {
				$result['NagiosServiceTemplatesRelatedByCheckCommand'] = $this->collNagiosServiceTemplatesRelatedByCheckCommand->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosServiceTemplatesRelatedByEventHandler) {
				$result['NagiosServiceTemplatesRelatedByEventHandler'] = $this->collNagiosServiceTemplatesRelatedByEventHandler->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosServicesRelatedByCheckCommand) {
				$result['NagiosServicesRelatedByCheckCommand'] = $this->collNagiosServicesRelatedByCheckCommand->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosServicesRelatedByEventHandler) {
				$result['NagiosServicesRelatedByEventHandler'] = $this->collNagiosServicesRelatedByEventHandler->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosMainConfigurationsRelatedByOcspCommand) {
				$result['NagiosMainConfigurationsRelatedByOcspCommand'] = $this->collNagiosMainConfigurationsRelatedByOcspCommand->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosMainConfigurationsRelatedByOchpCommand) {
				$result['NagiosMainConfigurationsRelatedByOchpCommand'] = $this->collNagiosMainConfigurationsRelatedByOchpCommand->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand) {
				$result['NagiosMainConfigurationsRelatedByHostPerfdataCommand'] = $this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand) {
				$result['NagiosMainConfigurationsRelatedByServicePerfdataCommand'] = $this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand) {
				$result['NagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand'] = $this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand) {
				$result['NagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand'] = $this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler) {
				$result['NagiosMainConfigurationsRelatedByGlobalServiceEventHandler'] = $this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler) {
				$result['NagiosMainConfigurationsRelatedByGlobalHostEventHandler'] = $this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
		$pos = NagiosCommandPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setLine($value);
				break;
			case 3:
				$this->setDescription($value);
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
		$keys = NagiosCommandPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setLine($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDescription($arr[$keys[3]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);

		if ($this->isColumnModified(NagiosCommandPeer::ID)) $criteria->add(NagiosCommandPeer::ID, $this->id);
		if ($this->isColumnModified(NagiosCommandPeer::NAME)) $criteria->add(NagiosCommandPeer::NAME, $this->name);
		if ($this->isColumnModified(NagiosCommandPeer::LINE)) $criteria->add(NagiosCommandPeer::LINE, $this->line);
		if ($this->isColumnModified(NagiosCommandPeer::DESCRIPTION)) $criteria->add(NagiosCommandPeer::DESCRIPTION, $this->description);

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
		$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		$criteria->add(NagiosCommandPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of NagiosCommand (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setName($this->getName());
		$copyObj->setLine($this->getLine());
		$copyObj->setDescription($this->getDescription());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getNagiosContactNotificationCommands() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosContactNotificationCommand($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosHostTemplatesRelatedByCheckCommand() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosHostTemplateRelatedByCheckCommand($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosHostTemplatesRelatedByEventHandler() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosHostTemplateRelatedByEventHandler($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosHostsRelatedByCheckCommand() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosHostRelatedByCheckCommand($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosHostsRelatedByEventHandler() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosHostRelatedByEventHandler($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosServiceTemplatesRelatedByCheckCommand() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosServiceTemplateRelatedByCheckCommand($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosServiceTemplatesRelatedByEventHandler() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosServiceTemplateRelatedByEventHandler($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosServicesRelatedByCheckCommand() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosServiceRelatedByCheckCommand($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosServicesRelatedByEventHandler() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosServiceRelatedByEventHandler($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosMainConfigurationsRelatedByOcspCommand() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosMainConfigurationRelatedByOcspCommand($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosMainConfigurationsRelatedByOchpCommand() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosMainConfigurationRelatedByOchpCommand($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosMainConfigurationsRelatedByHostPerfdataCommand() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosMainConfigurationRelatedByHostPerfdataCommand($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosMainConfigurationsRelatedByServicePerfdataCommand() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosMainConfigurationRelatedByServicePerfdataCommand($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosMainConfigurationRelatedByHostPerfdataFileProcessingCommand($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosMainConfigurationRelatedByServicePerfdataFileProcessingCommand($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosMainConfigurationsRelatedByGlobalServiceEventHandler() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosMainConfigurationRelatedByGlobalServiceEventHandler($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosMainConfigurationsRelatedByGlobalHostEventHandler() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosMainConfigurationRelatedByGlobalHostEventHandler($relObj->copy($deepCopy));
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
	 * @return     NagiosCommand Clone of current object.
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
	 * @return     NagiosCommandPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new NagiosCommandPeer();
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
		if ('NagiosContactNotificationCommand' == $relationName) {
			return $this->initNagiosContactNotificationCommands();
		}
		if ('NagiosHostTemplateRelatedByCheckCommand' == $relationName) {
			return $this->initNagiosHostTemplatesRelatedByCheckCommand();
		}
		if ('NagiosHostTemplateRelatedByEventHandler' == $relationName) {
			return $this->initNagiosHostTemplatesRelatedByEventHandler();
		}
		if ('NagiosHostRelatedByCheckCommand' == $relationName) {
			return $this->initNagiosHostsRelatedByCheckCommand();
		}
		if ('NagiosHostRelatedByEventHandler' == $relationName) {
			return $this->initNagiosHostsRelatedByEventHandler();
		}
		if ('NagiosServiceTemplateRelatedByCheckCommand' == $relationName) {
			return $this->initNagiosServiceTemplatesRelatedByCheckCommand();
		}
		if ('NagiosServiceTemplateRelatedByEventHandler' == $relationName) {
			return $this->initNagiosServiceTemplatesRelatedByEventHandler();
		}
		if ('NagiosServiceRelatedByCheckCommand' == $relationName) {
			return $this->initNagiosServicesRelatedByCheckCommand();
		}
		if ('NagiosServiceRelatedByEventHandler' == $relationName) {
			return $this->initNagiosServicesRelatedByEventHandler();
		}
		if ('NagiosMainConfigurationRelatedByOcspCommand' == $relationName) {
			return $this->initNagiosMainConfigurationsRelatedByOcspCommand();
		}
		if ('NagiosMainConfigurationRelatedByOchpCommand' == $relationName) {
			return $this->initNagiosMainConfigurationsRelatedByOchpCommand();
		}
		if ('NagiosMainConfigurationRelatedByHostPerfdataCommand' == $relationName) {
			return $this->initNagiosMainConfigurationsRelatedByHostPerfdataCommand();
		}
		if ('NagiosMainConfigurationRelatedByServicePerfdataCommand' == $relationName) {
			return $this->initNagiosMainConfigurationsRelatedByServicePerfdataCommand();
		}
		if ('NagiosMainConfigurationRelatedByHostPerfdataFileProcessingCommand' == $relationName) {
			return $this->initNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand();
		}
		if ('NagiosMainConfigurationRelatedByServicePerfdataFileProcessingCommand' == $relationName) {
			return $this->initNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand();
		}
		if ('NagiosMainConfigurationRelatedByGlobalServiceEventHandler' == $relationName) {
			return $this->initNagiosMainConfigurationsRelatedByGlobalServiceEventHandler();
		}
		if ('NagiosMainConfigurationRelatedByGlobalHostEventHandler' == $relationName) {
			return $this->initNagiosMainConfigurationsRelatedByGlobalHostEventHandler();
		}
	}

	/**
	 * Clears out the collNagiosContactNotificationCommands collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosContactNotificationCommands()
	 */
	public function clearNagiosContactNotificationCommands()
	{
		$this->collNagiosContactNotificationCommands = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosContactNotificationCommands collection.
	 *
	 * By default this just sets the collNagiosContactNotificationCommands collection to an empty array (like clearcollNagiosContactNotificationCommands());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosContactNotificationCommands($overrideExisting = true)
	{
		if (null !== $this->collNagiosContactNotificationCommands && !$overrideExisting) {
			return;
		}
		$this->collNagiosContactNotificationCommands = new PropelObjectCollection();
		$this->collNagiosContactNotificationCommands->setModel('NagiosContactNotificationCommand');
	}

	/**
	 * Gets an array of NagiosContactNotificationCommand objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosCommand is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosContactNotificationCommand[] List of NagiosContactNotificationCommand objects
	 * @throws     PropelException
	 */
	public function getNagiosContactNotificationCommands($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosContactNotificationCommands || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosContactNotificationCommands) {
				// return empty collection
				$this->initNagiosContactNotificationCommands();
			} else {
				$collNagiosContactNotificationCommands = NagiosContactNotificationCommandQuery::create(null, $criteria)
					->filterByNagiosCommand($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosContactNotificationCommands;
				}
				$this->collNagiosContactNotificationCommands = $collNagiosContactNotificationCommands;
			}
		}
		return $this->collNagiosContactNotificationCommands;
	}

	/**
	 * Returns the number of related NagiosContactNotificationCommand objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosContactNotificationCommand objects.
	 * @throws     PropelException
	 */
	public function countNagiosContactNotificationCommands(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosContactNotificationCommands || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosContactNotificationCommands) {
				return 0;
			} else {
				$query = NagiosContactNotificationCommandQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosCommand($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosContactNotificationCommands);
		}
	}

	/**
	 * Method called to associate a NagiosContactNotificationCommand object to this object
	 * through the NagiosContactNotificationCommand foreign key attribute.
	 *
	 * @param      NagiosContactNotificationCommand $l NagiosContactNotificationCommand
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosContactNotificationCommand(NagiosContactNotificationCommand $l)
	{
		if ($this->collNagiosContactNotificationCommands === null) {
			$this->initNagiosContactNotificationCommands();
		}
		if (!$this->collNagiosContactNotificationCommands->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosContactNotificationCommands[]= $l;
			$l->setNagiosCommand($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosCommand is new, it will return
	 * an empty collection; or if this NagiosCommand has previously
	 * been saved, it will retrieve related NagiosContactNotificationCommands from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosCommand.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosContactNotificationCommand[] List of NagiosContactNotificationCommand objects
	 */
	public function getNagiosContactNotificationCommandsJoinNagiosContact($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosContactNotificationCommandQuery::create(null, $criteria);
		$query->joinWith('NagiosContact', $join_behavior);

		return $this->getNagiosContactNotificationCommands($query, $con);
	}

	/**
	 * Clears out the collNagiosHostTemplatesRelatedByCheckCommand collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosHostTemplatesRelatedByCheckCommand()
	 */
	public function clearNagiosHostTemplatesRelatedByCheckCommand()
	{
		$this->collNagiosHostTemplatesRelatedByCheckCommand = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosHostTemplatesRelatedByCheckCommand collection.
	 *
	 * By default this just sets the collNagiosHostTemplatesRelatedByCheckCommand collection to an empty array (like clearcollNagiosHostTemplatesRelatedByCheckCommand());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosHostTemplatesRelatedByCheckCommand($overrideExisting = true)
	{
		if (null !== $this->collNagiosHostTemplatesRelatedByCheckCommand && !$overrideExisting) {
			return;
		}
		$this->collNagiosHostTemplatesRelatedByCheckCommand = new PropelObjectCollection();
		$this->collNagiosHostTemplatesRelatedByCheckCommand->setModel('NagiosHostTemplate');
	}

	/**
	 * Gets an array of NagiosHostTemplate objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosCommand is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosHostTemplate[] List of NagiosHostTemplate objects
	 * @throws     PropelException
	 */
	public function getNagiosHostTemplatesRelatedByCheckCommand($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosHostTemplatesRelatedByCheckCommand || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosHostTemplatesRelatedByCheckCommand) {
				// return empty collection
				$this->initNagiosHostTemplatesRelatedByCheckCommand();
			} else {
				$collNagiosHostTemplatesRelatedByCheckCommand = NagiosHostTemplateQuery::create(null, $criteria)
					->filterByNagiosCommandRelatedByCheckCommand($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosHostTemplatesRelatedByCheckCommand;
				}
				$this->collNagiosHostTemplatesRelatedByCheckCommand = $collNagiosHostTemplatesRelatedByCheckCommand;
			}
		}
		return $this->collNagiosHostTemplatesRelatedByCheckCommand;
	}

	/**
	 * Returns the number of related NagiosHostTemplate objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosHostTemplate objects.
	 * @throws     PropelException
	 */
	public function countNagiosHostTemplatesRelatedByCheckCommand(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosHostTemplatesRelatedByCheckCommand || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosHostTemplatesRelatedByCheckCommand) {
				return 0;
			} else {
				$query = NagiosHostTemplateQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosCommandRelatedByCheckCommand($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosHostTemplatesRelatedByCheckCommand);
		}
	}

	/**
	 * Method called to associate a NagiosHostTemplate object to this object
	 * through the NagiosHostTemplate foreign key attribute.
	 *
	 * @param      NagiosHostTemplate $l NagiosHostTemplate
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosHostTemplateRelatedByCheckCommand(NagiosHostTemplate $l)
	{
		if ($this->collNagiosHostTemplatesRelatedByCheckCommand === null) {
			$this->initNagiosHostTemplatesRelatedByCheckCommand();
		}
		if (!$this->collNagiosHostTemplatesRelatedByCheckCommand->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosHostTemplatesRelatedByCheckCommand[]= $l;
			$l->setNagiosCommandRelatedByCheckCommand($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosCommand is new, it will return
	 * an empty collection; or if this NagiosCommand has previously
	 * been saved, it will retrieve related NagiosHostTemplatesRelatedByCheckCommand from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosCommand.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosHostTemplate[] List of NagiosHostTemplate objects
	 */
	public function getNagiosHostTemplatesRelatedByCheckCommandJoinNagiosTimeperiodRelatedByCheckPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosHostTemplateQuery::create(null, $criteria);
		$query->joinWith('NagiosTimeperiodRelatedByCheckPeriod', $join_behavior);

		return $this->getNagiosHostTemplatesRelatedByCheckCommand($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosCommand is new, it will return
	 * an empty collection; or if this NagiosCommand has previously
	 * been saved, it will retrieve related NagiosHostTemplatesRelatedByCheckCommand from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosCommand.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosHostTemplate[] List of NagiosHostTemplate objects
	 */
	public function getNagiosHostTemplatesRelatedByCheckCommandJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosHostTemplateQuery::create(null, $criteria);
		$query->joinWith('NagiosTimeperiodRelatedByNotificationPeriod', $join_behavior);

		return $this->getNagiosHostTemplatesRelatedByCheckCommand($query, $con);
	}

	/**
	 * Clears out the collNagiosHostTemplatesRelatedByEventHandler collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosHostTemplatesRelatedByEventHandler()
	 */
	public function clearNagiosHostTemplatesRelatedByEventHandler()
	{
		$this->collNagiosHostTemplatesRelatedByEventHandler = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosHostTemplatesRelatedByEventHandler collection.
	 *
	 * By default this just sets the collNagiosHostTemplatesRelatedByEventHandler collection to an empty array (like clearcollNagiosHostTemplatesRelatedByEventHandler());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosHostTemplatesRelatedByEventHandler($overrideExisting = true)
	{
		if (null !== $this->collNagiosHostTemplatesRelatedByEventHandler && !$overrideExisting) {
			return;
		}
		$this->collNagiosHostTemplatesRelatedByEventHandler = new PropelObjectCollection();
		$this->collNagiosHostTemplatesRelatedByEventHandler->setModel('NagiosHostTemplate');
	}

	/**
	 * Gets an array of NagiosHostTemplate objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosCommand is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosHostTemplate[] List of NagiosHostTemplate objects
	 * @throws     PropelException
	 */
	public function getNagiosHostTemplatesRelatedByEventHandler($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosHostTemplatesRelatedByEventHandler || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosHostTemplatesRelatedByEventHandler) {
				// return empty collection
				$this->initNagiosHostTemplatesRelatedByEventHandler();
			} else {
				$collNagiosHostTemplatesRelatedByEventHandler = NagiosHostTemplateQuery::create(null, $criteria)
					->filterByNagiosCommandRelatedByEventHandler($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosHostTemplatesRelatedByEventHandler;
				}
				$this->collNagiosHostTemplatesRelatedByEventHandler = $collNagiosHostTemplatesRelatedByEventHandler;
			}
		}
		return $this->collNagiosHostTemplatesRelatedByEventHandler;
	}

	/**
	 * Returns the number of related NagiosHostTemplate objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosHostTemplate objects.
	 * @throws     PropelException
	 */
	public function countNagiosHostTemplatesRelatedByEventHandler(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosHostTemplatesRelatedByEventHandler || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosHostTemplatesRelatedByEventHandler) {
				return 0;
			} else {
				$query = NagiosHostTemplateQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosCommandRelatedByEventHandler($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosHostTemplatesRelatedByEventHandler);
		}
	}

	/**
	 * Method called to associate a NagiosHostTemplate object to this object
	 * through the NagiosHostTemplate foreign key attribute.
	 *
	 * @param      NagiosHostTemplate $l NagiosHostTemplate
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosHostTemplateRelatedByEventHandler(NagiosHostTemplate $l)
	{
		if ($this->collNagiosHostTemplatesRelatedByEventHandler === null) {
			$this->initNagiosHostTemplatesRelatedByEventHandler();
		}
		if (!$this->collNagiosHostTemplatesRelatedByEventHandler->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosHostTemplatesRelatedByEventHandler[]= $l;
			$l->setNagiosCommandRelatedByEventHandler($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosCommand is new, it will return
	 * an empty collection; or if this NagiosCommand has previously
	 * been saved, it will retrieve related NagiosHostTemplatesRelatedByEventHandler from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosCommand.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosHostTemplate[] List of NagiosHostTemplate objects
	 */
	public function getNagiosHostTemplatesRelatedByEventHandlerJoinNagiosTimeperiodRelatedByCheckPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosHostTemplateQuery::create(null, $criteria);
		$query->joinWith('NagiosTimeperiodRelatedByCheckPeriod', $join_behavior);

		return $this->getNagiosHostTemplatesRelatedByEventHandler($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosCommand is new, it will return
	 * an empty collection; or if this NagiosCommand has previously
	 * been saved, it will retrieve related NagiosHostTemplatesRelatedByEventHandler from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosCommand.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosHostTemplate[] List of NagiosHostTemplate objects
	 */
	public function getNagiosHostTemplatesRelatedByEventHandlerJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosHostTemplateQuery::create(null, $criteria);
		$query->joinWith('NagiosTimeperiodRelatedByNotificationPeriod', $join_behavior);

		return $this->getNagiosHostTemplatesRelatedByEventHandler($query, $con);
	}

	/**
	 * Clears out the collNagiosHostsRelatedByCheckCommand collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosHostsRelatedByCheckCommand()
	 */
	public function clearNagiosHostsRelatedByCheckCommand()
	{
		$this->collNagiosHostsRelatedByCheckCommand = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosHostsRelatedByCheckCommand collection.
	 *
	 * By default this just sets the collNagiosHostsRelatedByCheckCommand collection to an empty array (like clearcollNagiosHostsRelatedByCheckCommand());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosHostsRelatedByCheckCommand($overrideExisting = true)
	{
		if (null !== $this->collNagiosHostsRelatedByCheckCommand && !$overrideExisting) {
			return;
		}
		$this->collNagiosHostsRelatedByCheckCommand = new PropelObjectCollection();
		$this->collNagiosHostsRelatedByCheckCommand->setModel('NagiosHost');
	}

	/**
	 * Gets an array of NagiosHost objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosCommand is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosHost[] List of NagiosHost objects
	 * @throws     PropelException
	 */
	public function getNagiosHostsRelatedByCheckCommand($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosHostsRelatedByCheckCommand || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosHostsRelatedByCheckCommand) {
				// return empty collection
				$this->initNagiosHostsRelatedByCheckCommand();
			} else {
				$collNagiosHostsRelatedByCheckCommand = NagiosHostQuery::create(null, $criteria)
					->filterByNagiosCommandRelatedByCheckCommand($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosHostsRelatedByCheckCommand;
				}
				$this->collNagiosHostsRelatedByCheckCommand = $collNagiosHostsRelatedByCheckCommand;
			}
		}
		return $this->collNagiosHostsRelatedByCheckCommand;
	}

	/**
	 * Returns the number of related NagiosHost objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosHost objects.
	 * @throws     PropelException
	 */
	public function countNagiosHostsRelatedByCheckCommand(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosHostsRelatedByCheckCommand || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosHostsRelatedByCheckCommand) {
				return 0;
			} else {
				$query = NagiosHostQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosCommandRelatedByCheckCommand($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosHostsRelatedByCheckCommand);
		}
	}

	/**
	 * Method called to associate a NagiosHost object to this object
	 * through the NagiosHost foreign key attribute.
	 *
	 * @param      NagiosHost $l NagiosHost
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosHostRelatedByCheckCommand(NagiosHost $l)
	{
		if ($this->collNagiosHostsRelatedByCheckCommand === null) {
			$this->initNagiosHostsRelatedByCheckCommand();
		}
		if (!$this->collNagiosHostsRelatedByCheckCommand->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosHostsRelatedByCheckCommand[]= $l;
			$l->setNagiosCommandRelatedByCheckCommand($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosCommand is new, it will return
	 * an empty collection; or if this NagiosCommand has previously
	 * been saved, it will retrieve related NagiosHostsRelatedByCheckCommand from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosCommand.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosHost[] List of NagiosHost objects
	 */
	public function getNagiosHostsRelatedByCheckCommandJoinNagiosTimeperiodRelatedByCheckPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosHostQuery::create(null, $criteria);
		$query->joinWith('NagiosTimeperiodRelatedByCheckPeriod', $join_behavior);

		return $this->getNagiosHostsRelatedByCheckCommand($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosCommand is new, it will return
	 * an empty collection; or if this NagiosCommand has previously
	 * been saved, it will retrieve related NagiosHostsRelatedByCheckCommand from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosCommand.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosHost[] List of NagiosHost objects
	 */
	public function getNagiosHostsRelatedByCheckCommandJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosHostQuery::create(null, $criteria);
		$query->joinWith('NagiosTimeperiodRelatedByNotificationPeriod', $join_behavior);

		return $this->getNagiosHostsRelatedByCheckCommand($query, $con);
	}

	/**
	 * Clears out the collNagiosHostsRelatedByEventHandler collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosHostsRelatedByEventHandler()
	 */
	public function clearNagiosHostsRelatedByEventHandler()
	{
		$this->collNagiosHostsRelatedByEventHandler = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosHostsRelatedByEventHandler collection.
	 *
	 * By default this just sets the collNagiosHostsRelatedByEventHandler collection to an empty array (like clearcollNagiosHostsRelatedByEventHandler());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosHostsRelatedByEventHandler($overrideExisting = true)
	{
		if (null !== $this->collNagiosHostsRelatedByEventHandler && !$overrideExisting) {
			return;
		}
		$this->collNagiosHostsRelatedByEventHandler = new PropelObjectCollection();
		$this->collNagiosHostsRelatedByEventHandler->setModel('NagiosHost');
	}

	/**
	 * Gets an array of NagiosHost objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosCommand is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosHost[] List of NagiosHost objects
	 * @throws     PropelException
	 */
	public function getNagiosHostsRelatedByEventHandler($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosHostsRelatedByEventHandler || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosHostsRelatedByEventHandler) {
				// return empty collection
				$this->initNagiosHostsRelatedByEventHandler();
			} else {
				$collNagiosHostsRelatedByEventHandler = NagiosHostQuery::create(null, $criteria)
					->filterByNagiosCommandRelatedByEventHandler($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosHostsRelatedByEventHandler;
				}
				$this->collNagiosHostsRelatedByEventHandler = $collNagiosHostsRelatedByEventHandler;
			}
		}
		return $this->collNagiosHostsRelatedByEventHandler;
	}

	/**
	 * Returns the number of related NagiosHost objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosHost objects.
	 * @throws     PropelException
	 */
	public function countNagiosHostsRelatedByEventHandler(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosHostsRelatedByEventHandler || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosHostsRelatedByEventHandler) {
				return 0;
			} else {
				$query = NagiosHostQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosCommandRelatedByEventHandler($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosHostsRelatedByEventHandler);
		}
	}

	/**
	 * Method called to associate a NagiosHost object to this object
	 * through the NagiosHost foreign key attribute.
	 *
	 * @param      NagiosHost $l NagiosHost
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosHostRelatedByEventHandler(NagiosHost $l)
	{
		if ($this->collNagiosHostsRelatedByEventHandler === null) {
			$this->initNagiosHostsRelatedByEventHandler();
		}
		if (!$this->collNagiosHostsRelatedByEventHandler->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosHostsRelatedByEventHandler[]= $l;
			$l->setNagiosCommandRelatedByEventHandler($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosCommand is new, it will return
	 * an empty collection; or if this NagiosCommand has previously
	 * been saved, it will retrieve related NagiosHostsRelatedByEventHandler from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosCommand.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosHost[] List of NagiosHost objects
	 */
	public function getNagiosHostsRelatedByEventHandlerJoinNagiosTimeperiodRelatedByCheckPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosHostQuery::create(null, $criteria);
		$query->joinWith('NagiosTimeperiodRelatedByCheckPeriod', $join_behavior);

		return $this->getNagiosHostsRelatedByEventHandler($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosCommand is new, it will return
	 * an empty collection; or if this NagiosCommand has previously
	 * been saved, it will retrieve related NagiosHostsRelatedByEventHandler from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosCommand.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosHost[] List of NagiosHost objects
	 */
	public function getNagiosHostsRelatedByEventHandlerJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosHostQuery::create(null, $criteria);
		$query->joinWith('NagiosTimeperiodRelatedByNotificationPeriod', $join_behavior);

		return $this->getNagiosHostsRelatedByEventHandler($query, $con);
	}

	/**
	 * Clears out the collNagiosServiceTemplatesRelatedByCheckCommand collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosServiceTemplatesRelatedByCheckCommand()
	 */
	public function clearNagiosServiceTemplatesRelatedByCheckCommand()
	{
		$this->collNagiosServiceTemplatesRelatedByCheckCommand = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosServiceTemplatesRelatedByCheckCommand collection.
	 *
	 * By default this just sets the collNagiosServiceTemplatesRelatedByCheckCommand collection to an empty array (like clearcollNagiosServiceTemplatesRelatedByCheckCommand());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosServiceTemplatesRelatedByCheckCommand($overrideExisting = true)
	{
		if (null !== $this->collNagiosServiceTemplatesRelatedByCheckCommand && !$overrideExisting) {
			return;
		}
		$this->collNagiosServiceTemplatesRelatedByCheckCommand = new PropelObjectCollection();
		$this->collNagiosServiceTemplatesRelatedByCheckCommand->setModel('NagiosServiceTemplate');
	}

	/**
	 * Gets an array of NagiosServiceTemplate objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosCommand is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosServiceTemplate[] List of NagiosServiceTemplate objects
	 * @throws     PropelException
	 */
	public function getNagiosServiceTemplatesRelatedByCheckCommand($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosServiceTemplatesRelatedByCheckCommand || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosServiceTemplatesRelatedByCheckCommand) {
				// return empty collection
				$this->initNagiosServiceTemplatesRelatedByCheckCommand();
			} else {
				$collNagiosServiceTemplatesRelatedByCheckCommand = NagiosServiceTemplateQuery::create(null, $criteria)
					->filterByNagiosCommandRelatedByCheckCommand($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosServiceTemplatesRelatedByCheckCommand;
				}
				$this->collNagiosServiceTemplatesRelatedByCheckCommand = $collNagiosServiceTemplatesRelatedByCheckCommand;
			}
		}
		return $this->collNagiosServiceTemplatesRelatedByCheckCommand;
	}

	/**
	 * Returns the number of related NagiosServiceTemplate objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosServiceTemplate objects.
	 * @throws     PropelException
	 */
	public function countNagiosServiceTemplatesRelatedByCheckCommand(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosServiceTemplatesRelatedByCheckCommand || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosServiceTemplatesRelatedByCheckCommand) {
				return 0;
			} else {
				$query = NagiosServiceTemplateQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosCommandRelatedByCheckCommand($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosServiceTemplatesRelatedByCheckCommand);
		}
	}

	/**
	 * Method called to associate a NagiosServiceTemplate object to this object
	 * through the NagiosServiceTemplate foreign key attribute.
	 *
	 * @param      NagiosServiceTemplate $l NagiosServiceTemplate
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosServiceTemplateRelatedByCheckCommand(NagiosServiceTemplate $l)
	{
		if ($this->collNagiosServiceTemplatesRelatedByCheckCommand === null) {
			$this->initNagiosServiceTemplatesRelatedByCheckCommand();
		}
		if (!$this->collNagiosServiceTemplatesRelatedByCheckCommand->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosServiceTemplatesRelatedByCheckCommand[]= $l;
			$l->setNagiosCommandRelatedByCheckCommand($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosCommand is new, it will return
	 * an empty collection; or if this NagiosCommand has previously
	 * been saved, it will retrieve related NagiosServiceTemplatesRelatedByCheckCommand from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosCommand.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosServiceTemplate[] List of NagiosServiceTemplate objects
	 */
	public function getNagiosServiceTemplatesRelatedByCheckCommandJoinNagiosTimeperiodRelatedByCheckPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceTemplateQuery::create(null, $criteria);
		$query->joinWith('NagiosTimeperiodRelatedByCheckPeriod', $join_behavior);

		return $this->getNagiosServiceTemplatesRelatedByCheckCommand($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosCommand is new, it will return
	 * an empty collection; or if this NagiosCommand has previously
	 * been saved, it will retrieve related NagiosServiceTemplatesRelatedByCheckCommand from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosCommand.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosServiceTemplate[] List of NagiosServiceTemplate objects
	 */
	public function getNagiosServiceTemplatesRelatedByCheckCommandJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceTemplateQuery::create(null, $criteria);
		$query->joinWith('NagiosTimeperiodRelatedByNotificationPeriod', $join_behavior);

		return $this->getNagiosServiceTemplatesRelatedByCheckCommand($query, $con);
	}

	/**
	 * Clears out the collNagiosServiceTemplatesRelatedByEventHandler collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosServiceTemplatesRelatedByEventHandler()
	 */
	public function clearNagiosServiceTemplatesRelatedByEventHandler()
	{
		$this->collNagiosServiceTemplatesRelatedByEventHandler = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosServiceTemplatesRelatedByEventHandler collection.
	 *
	 * By default this just sets the collNagiosServiceTemplatesRelatedByEventHandler collection to an empty array (like clearcollNagiosServiceTemplatesRelatedByEventHandler());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosServiceTemplatesRelatedByEventHandler($overrideExisting = true)
	{
		if (null !== $this->collNagiosServiceTemplatesRelatedByEventHandler && !$overrideExisting) {
			return;
		}
		$this->collNagiosServiceTemplatesRelatedByEventHandler = new PropelObjectCollection();
		$this->collNagiosServiceTemplatesRelatedByEventHandler->setModel('NagiosServiceTemplate');
	}

	/**
	 * Gets an array of NagiosServiceTemplate objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosCommand is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosServiceTemplate[] List of NagiosServiceTemplate objects
	 * @throws     PropelException
	 */
	public function getNagiosServiceTemplatesRelatedByEventHandler($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosServiceTemplatesRelatedByEventHandler || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosServiceTemplatesRelatedByEventHandler) {
				// return empty collection
				$this->initNagiosServiceTemplatesRelatedByEventHandler();
			} else {
				$collNagiosServiceTemplatesRelatedByEventHandler = NagiosServiceTemplateQuery::create(null, $criteria)
					->filterByNagiosCommandRelatedByEventHandler($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosServiceTemplatesRelatedByEventHandler;
				}
				$this->collNagiosServiceTemplatesRelatedByEventHandler = $collNagiosServiceTemplatesRelatedByEventHandler;
			}
		}
		return $this->collNagiosServiceTemplatesRelatedByEventHandler;
	}

	/**
	 * Returns the number of related NagiosServiceTemplate objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosServiceTemplate objects.
	 * @throws     PropelException
	 */
	public function countNagiosServiceTemplatesRelatedByEventHandler(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosServiceTemplatesRelatedByEventHandler || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosServiceTemplatesRelatedByEventHandler) {
				return 0;
			} else {
				$query = NagiosServiceTemplateQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosCommandRelatedByEventHandler($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosServiceTemplatesRelatedByEventHandler);
		}
	}

	/**
	 * Method called to associate a NagiosServiceTemplate object to this object
	 * through the NagiosServiceTemplate foreign key attribute.
	 *
	 * @param      NagiosServiceTemplate $l NagiosServiceTemplate
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosServiceTemplateRelatedByEventHandler(NagiosServiceTemplate $l)
	{
		if ($this->collNagiosServiceTemplatesRelatedByEventHandler === null) {
			$this->initNagiosServiceTemplatesRelatedByEventHandler();
		}
		if (!$this->collNagiosServiceTemplatesRelatedByEventHandler->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosServiceTemplatesRelatedByEventHandler[]= $l;
			$l->setNagiosCommandRelatedByEventHandler($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosCommand is new, it will return
	 * an empty collection; or if this NagiosCommand has previously
	 * been saved, it will retrieve related NagiosServiceTemplatesRelatedByEventHandler from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosCommand.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosServiceTemplate[] List of NagiosServiceTemplate objects
	 */
	public function getNagiosServiceTemplatesRelatedByEventHandlerJoinNagiosTimeperiodRelatedByCheckPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceTemplateQuery::create(null, $criteria);
		$query->joinWith('NagiosTimeperiodRelatedByCheckPeriod', $join_behavior);

		return $this->getNagiosServiceTemplatesRelatedByEventHandler($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosCommand is new, it will return
	 * an empty collection; or if this NagiosCommand has previously
	 * been saved, it will retrieve related NagiosServiceTemplatesRelatedByEventHandler from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosCommand.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosServiceTemplate[] List of NagiosServiceTemplate objects
	 */
	public function getNagiosServiceTemplatesRelatedByEventHandlerJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceTemplateQuery::create(null, $criteria);
		$query->joinWith('NagiosTimeperiodRelatedByNotificationPeriod', $join_behavior);

		return $this->getNagiosServiceTemplatesRelatedByEventHandler($query, $con);
	}

	/**
	 * Clears out the collNagiosServicesRelatedByCheckCommand collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosServicesRelatedByCheckCommand()
	 */
	public function clearNagiosServicesRelatedByCheckCommand()
	{
		$this->collNagiosServicesRelatedByCheckCommand = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosServicesRelatedByCheckCommand collection.
	 *
	 * By default this just sets the collNagiosServicesRelatedByCheckCommand collection to an empty array (like clearcollNagiosServicesRelatedByCheckCommand());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosServicesRelatedByCheckCommand($overrideExisting = true)
	{
		if (null !== $this->collNagiosServicesRelatedByCheckCommand && !$overrideExisting) {
			return;
		}
		$this->collNagiosServicesRelatedByCheckCommand = new PropelObjectCollection();
		$this->collNagiosServicesRelatedByCheckCommand->setModel('NagiosService');
	}

	/**
	 * Gets an array of NagiosService objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosCommand is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosService[] List of NagiosService objects
	 * @throws     PropelException
	 */
	public function getNagiosServicesRelatedByCheckCommand($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosServicesRelatedByCheckCommand || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosServicesRelatedByCheckCommand) {
				// return empty collection
				$this->initNagiosServicesRelatedByCheckCommand();
			} else {
				$collNagiosServicesRelatedByCheckCommand = NagiosServiceQuery::create(null, $criteria)
					->filterByNagiosCommandRelatedByCheckCommand($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosServicesRelatedByCheckCommand;
				}
				$this->collNagiosServicesRelatedByCheckCommand = $collNagiosServicesRelatedByCheckCommand;
			}
		}
		return $this->collNagiosServicesRelatedByCheckCommand;
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
	public function countNagiosServicesRelatedByCheckCommand(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosServicesRelatedByCheckCommand || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosServicesRelatedByCheckCommand) {
				return 0;
			} else {
				$query = NagiosServiceQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosCommandRelatedByCheckCommand($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosServicesRelatedByCheckCommand);
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
	public function addNagiosServiceRelatedByCheckCommand(NagiosService $l)
	{
		if ($this->collNagiosServicesRelatedByCheckCommand === null) {
			$this->initNagiosServicesRelatedByCheckCommand();
		}
		if (!$this->collNagiosServicesRelatedByCheckCommand->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosServicesRelatedByCheckCommand[]= $l;
			$l->setNagiosCommandRelatedByCheckCommand($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosCommand is new, it will return
	 * an empty collection; or if this NagiosCommand has previously
	 * been saved, it will retrieve related NagiosServicesRelatedByCheckCommand from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosCommand.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosService[] List of NagiosService objects
	 */
	public function getNagiosServicesRelatedByCheckCommandJoinNagiosHost($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceQuery::create(null, $criteria);
		$query->joinWith('NagiosHost', $join_behavior);

		return $this->getNagiosServicesRelatedByCheckCommand($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosCommand is new, it will return
	 * an empty collection; or if this NagiosCommand has previously
	 * been saved, it will retrieve related NagiosServicesRelatedByCheckCommand from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosCommand.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosService[] List of NagiosService objects
	 */
	public function getNagiosServicesRelatedByCheckCommandJoinNagiosHostTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceQuery::create(null, $criteria);
		$query->joinWith('NagiosHostTemplate', $join_behavior);

		return $this->getNagiosServicesRelatedByCheckCommand($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosCommand is new, it will return
	 * an empty collection; or if this NagiosCommand has previously
	 * been saved, it will retrieve related NagiosServicesRelatedByCheckCommand from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosCommand.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosService[] List of NagiosService objects
	 */
	public function getNagiosServicesRelatedByCheckCommandJoinNagiosHostgroup($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceQuery::create(null, $criteria);
		$query->joinWith('NagiosHostgroup', $join_behavior);

		return $this->getNagiosServicesRelatedByCheckCommand($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosCommand is new, it will return
	 * an empty collection; or if this NagiosCommand has previously
	 * been saved, it will retrieve related NagiosServicesRelatedByCheckCommand from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosCommand.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosService[] List of NagiosService objects
	 */
	public function getNagiosServicesRelatedByCheckCommandJoinNagiosTimeperiodRelatedByCheckPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceQuery::create(null, $criteria);
		$query->joinWith('NagiosTimeperiodRelatedByCheckPeriod', $join_behavior);

		return $this->getNagiosServicesRelatedByCheckCommand($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosCommand is new, it will return
	 * an empty collection; or if this NagiosCommand has previously
	 * been saved, it will retrieve related NagiosServicesRelatedByCheckCommand from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosCommand.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosService[] List of NagiosService objects
	 */
	public function getNagiosServicesRelatedByCheckCommandJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceQuery::create(null, $criteria);
		$query->joinWith('NagiosTimeperiodRelatedByNotificationPeriod', $join_behavior);

		return $this->getNagiosServicesRelatedByCheckCommand($query, $con);
	}

	/**
	 * Clears out the collNagiosServicesRelatedByEventHandler collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosServicesRelatedByEventHandler()
	 */
	public function clearNagiosServicesRelatedByEventHandler()
	{
		$this->collNagiosServicesRelatedByEventHandler = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosServicesRelatedByEventHandler collection.
	 *
	 * By default this just sets the collNagiosServicesRelatedByEventHandler collection to an empty array (like clearcollNagiosServicesRelatedByEventHandler());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosServicesRelatedByEventHandler($overrideExisting = true)
	{
		if (null !== $this->collNagiosServicesRelatedByEventHandler && !$overrideExisting) {
			return;
		}
		$this->collNagiosServicesRelatedByEventHandler = new PropelObjectCollection();
		$this->collNagiosServicesRelatedByEventHandler->setModel('NagiosService');
	}

	/**
	 * Gets an array of NagiosService objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosCommand is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosService[] List of NagiosService objects
	 * @throws     PropelException
	 */
	public function getNagiosServicesRelatedByEventHandler($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosServicesRelatedByEventHandler || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosServicesRelatedByEventHandler) {
				// return empty collection
				$this->initNagiosServicesRelatedByEventHandler();
			} else {
				$collNagiosServicesRelatedByEventHandler = NagiosServiceQuery::create(null, $criteria)
					->filterByNagiosCommandRelatedByEventHandler($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosServicesRelatedByEventHandler;
				}
				$this->collNagiosServicesRelatedByEventHandler = $collNagiosServicesRelatedByEventHandler;
			}
		}
		return $this->collNagiosServicesRelatedByEventHandler;
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
	public function countNagiosServicesRelatedByEventHandler(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosServicesRelatedByEventHandler || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosServicesRelatedByEventHandler) {
				return 0;
			} else {
				$query = NagiosServiceQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosCommandRelatedByEventHandler($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosServicesRelatedByEventHandler);
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
	public function addNagiosServiceRelatedByEventHandler(NagiosService $l)
	{
		if ($this->collNagiosServicesRelatedByEventHandler === null) {
			$this->initNagiosServicesRelatedByEventHandler();
		}
		if (!$this->collNagiosServicesRelatedByEventHandler->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosServicesRelatedByEventHandler[]= $l;
			$l->setNagiosCommandRelatedByEventHandler($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosCommand is new, it will return
	 * an empty collection; or if this NagiosCommand has previously
	 * been saved, it will retrieve related NagiosServicesRelatedByEventHandler from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosCommand.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosService[] List of NagiosService objects
	 */
	public function getNagiosServicesRelatedByEventHandlerJoinNagiosHost($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceQuery::create(null, $criteria);
		$query->joinWith('NagiosHost', $join_behavior);

		return $this->getNagiosServicesRelatedByEventHandler($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosCommand is new, it will return
	 * an empty collection; or if this NagiosCommand has previously
	 * been saved, it will retrieve related NagiosServicesRelatedByEventHandler from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosCommand.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosService[] List of NagiosService objects
	 */
	public function getNagiosServicesRelatedByEventHandlerJoinNagiosHostTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceQuery::create(null, $criteria);
		$query->joinWith('NagiosHostTemplate', $join_behavior);

		return $this->getNagiosServicesRelatedByEventHandler($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosCommand is new, it will return
	 * an empty collection; or if this NagiosCommand has previously
	 * been saved, it will retrieve related NagiosServicesRelatedByEventHandler from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosCommand.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosService[] List of NagiosService objects
	 */
	public function getNagiosServicesRelatedByEventHandlerJoinNagiosHostgroup($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceQuery::create(null, $criteria);
		$query->joinWith('NagiosHostgroup', $join_behavior);

		return $this->getNagiosServicesRelatedByEventHandler($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosCommand is new, it will return
	 * an empty collection; or if this NagiosCommand has previously
	 * been saved, it will retrieve related NagiosServicesRelatedByEventHandler from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosCommand.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosService[] List of NagiosService objects
	 */
	public function getNagiosServicesRelatedByEventHandlerJoinNagiosTimeperiodRelatedByCheckPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceQuery::create(null, $criteria);
		$query->joinWith('NagiosTimeperiodRelatedByCheckPeriod', $join_behavior);

		return $this->getNagiosServicesRelatedByEventHandler($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosCommand is new, it will return
	 * an empty collection; or if this NagiosCommand has previously
	 * been saved, it will retrieve related NagiosServicesRelatedByEventHandler from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosCommand.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosService[] List of NagiosService objects
	 */
	public function getNagiosServicesRelatedByEventHandlerJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceQuery::create(null, $criteria);
		$query->joinWith('NagiosTimeperiodRelatedByNotificationPeriod', $join_behavior);

		return $this->getNagiosServicesRelatedByEventHandler($query, $con);
	}

	/**
	 * Clears out the collNagiosMainConfigurationsRelatedByOcspCommand collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosMainConfigurationsRelatedByOcspCommand()
	 */
	public function clearNagiosMainConfigurationsRelatedByOcspCommand()
	{
		$this->collNagiosMainConfigurationsRelatedByOcspCommand = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosMainConfigurationsRelatedByOcspCommand collection.
	 *
	 * By default this just sets the collNagiosMainConfigurationsRelatedByOcspCommand collection to an empty array (like clearcollNagiosMainConfigurationsRelatedByOcspCommand());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosMainConfigurationsRelatedByOcspCommand($overrideExisting = true)
	{
		if (null !== $this->collNagiosMainConfigurationsRelatedByOcspCommand && !$overrideExisting) {
			return;
		}
		$this->collNagiosMainConfigurationsRelatedByOcspCommand = new PropelObjectCollection();
		$this->collNagiosMainConfigurationsRelatedByOcspCommand->setModel('NagiosMainConfiguration');
	}

	/**
	 * Gets an array of NagiosMainConfiguration objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosCommand is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosMainConfiguration[] List of NagiosMainConfiguration objects
	 * @throws     PropelException
	 */
	public function getNagiosMainConfigurationsRelatedByOcspCommand($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosMainConfigurationsRelatedByOcspCommand || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosMainConfigurationsRelatedByOcspCommand) {
				// return empty collection
				$this->initNagiosMainConfigurationsRelatedByOcspCommand();
			} else {
				$collNagiosMainConfigurationsRelatedByOcspCommand = NagiosMainConfigurationQuery::create(null, $criteria)
					->filterByNagiosCommandRelatedByOcspCommand($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosMainConfigurationsRelatedByOcspCommand;
				}
				$this->collNagiosMainConfigurationsRelatedByOcspCommand = $collNagiosMainConfigurationsRelatedByOcspCommand;
			}
		}
		return $this->collNagiosMainConfigurationsRelatedByOcspCommand;
	}

	/**
	 * Returns the number of related NagiosMainConfiguration objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosMainConfiguration objects.
	 * @throws     PropelException
	 */
	public function countNagiosMainConfigurationsRelatedByOcspCommand(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosMainConfigurationsRelatedByOcspCommand || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosMainConfigurationsRelatedByOcspCommand) {
				return 0;
			} else {
				$query = NagiosMainConfigurationQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosCommandRelatedByOcspCommand($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosMainConfigurationsRelatedByOcspCommand);
		}
	}

	/**
	 * Method called to associate a NagiosMainConfiguration object to this object
	 * through the NagiosMainConfiguration foreign key attribute.
	 *
	 * @param      NagiosMainConfiguration $l NagiosMainConfiguration
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosMainConfigurationRelatedByOcspCommand(NagiosMainConfiguration $l)
	{
		if ($this->collNagiosMainConfigurationsRelatedByOcspCommand === null) {
			$this->initNagiosMainConfigurationsRelatedByOcspCommand();
		}
		if (!$this->collNagiosMainConfigurationsRelatedByOcspCommand->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosMainConfigurationsRelatedByOcspCommand[]= $l;
			$l->setNagiosCommandRelatedByOcspCommand($this);
		}
	}

	/**
	 * Clears out the collNagiosMainConfigurationsRelatedByOchpCommand collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosMainConfigurationsRelatedByOchpCommand()
	 */
	public function clearNagiosMainConfigurationsRelatedByOchpCommand()
	{
		$this->collNagiosMainConfigurationsRelatedByOchpCommand = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosMainConfigurationsRelatedByOchpCommand collection.
	 *
	 * By default this just sets the collNagiosMainConfigurationsRelatedByOchpCommand collection to an empty array (like clearcollNagiosMainConfigurationsRelatedByOchpCommand());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosMainConfigurationsRelatedByOchpCommand($overrideExisting = true)
	{
		if (null !== $this->collNagiosMainConfigurationsRelatedByOchpCommand && !$overrideExisting) {
			return;
		}
		$this->collNagiosMainConfigurationsRelatedByOchpCommand = new PropelObjectCollection();
		$this->collNagiosMainConfigurationsRelatedByOchpCommand->setModel('NagiosMainConfiguration');
	}

	/**
	 * Gets an array of NagiosMainConfiguration objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosCommand is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosMainConfiguration[] List of NagiosMainConfiguration objects
	 * @throws     PropelException
	 */
	public function getNagiosMainConfigurationsRelatedByOchpCommand($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosMainConfigurationsRelatedByOchpCommand || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosMainConfigurationsRelatedByOchpCommand) {
				// return empty collection
				$this->initNagiosMainConfigurationsRelatedByOchpCommand();
			} else {
				$collNagiosMainConfigurationsRelatedByOchpCommand = NagiosMainConfigurationQuery::create(null, $criteria)
					->filterByNagiosCommandRelatedByOchpCommand($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosMainConfigurationsRelatedByOchpCommand;
				}
				$this->collNagiosMainConfigurationsRelatedByOchpCommand = $collNagiosMainConfigurationsRelatedByOchpCommand;
			}
		}
		return $this->collNagiosMainConfigurationsRelatedByOchpCommand;
	}

	/**
	 * Returns the number of related NagiosMainConfiguration objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosMainConfiguration objects.
	 * @throws     PropelException
	 */
	public function countNagiosMainConfigurationsRelatedByOchpCommand(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosMainConfigurationsRelatedByOchpCommand || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosMainConfigurationsRelatedByOchpCommand) {
				return 0;
			} else {
				$query = NagiosMainConfigurationQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosCommandRelatedByOchpCommand($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosMainConfigurationsRelatedByOchpCommand);
		}
	}

	/**
	 * Method called to associate a NagiosMainConfiguration object to this object
	 * through the NagiosMainConfiguration foreign key attribute.
	 *
	 * @param      NagiosMainConfiguration $l NagiosMainConfiguration
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosMainConfigurationRelatedByOchpCommand(NagiosMainConfiguration $l)
	{
		if ($this->collNagiosMainConfigurationsRelatedByOchpCommand === null) {
			$this->initNagiosMainConfigurationsRelatedByOchpCommand();
		}
		if (!$this->collNagiosMainConfigurationsRelatedByOchpCommand->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosMainConfigurationsRelatedByOchpCommand[]= $l;
			$l->setNagiosCommandRelatedByOchpCommand($this);
		}
	}

	/**
	 * Clears out the collNagiosMainConfigurationsRelatedByHostPerfdataCommand collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosMainConfigurationsRelatedByHostPerfdataCommand()
	 */
	public function clearNagiosMainConfigurationsRelatedByHostPerfdataCommand()
	{
		$this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosMainConfigurationsRelatedByHostPerfdataCommand collection.
	 *
	 * By default this just sets the collNagiosMainConfigurationsRelatedByHostPerfdataCommand collection to an empty array (like clearcollNagiosMainConfigurationsRelatedByHostPerfdataCommand());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosMainConfigurationsRelatedByHostPerfdataCommand($overrideExisting = true)
	{
		if (null !== $this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand && !$overrideExisting) {
			return;
		}
		$this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand = new PropelObjectCollection();
		$this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand->setModel('NagiosMainConfiguration');
	}

	/**
	 * Gets an array of NagiosMainConfiguration objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosCommand is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosMainConfiguration[] List of NagiosMainConfiguration objects
	 * @throws     PropelException
	 */
	public function getNagiosMainConfigurationsRelatedByHostPerfdataCommand($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand) {
				// return empty collection
				$this->initNagiosMainConfigurationsRelatedByHostPerfdataCommand();
			} else {
				$collNagiosMainConfigurationsRelatedByHostPerfdataCommand = NagiosMainConfigurationQuery::create(null, $criteria)
					->filterByNagiosCommandRelatedByHostPerfdataCommand($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosMainConfigurationsRelatedByHostPerfdataCommand;
				}
				$this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand = $collNagiosMainConfigurationsRelatedByHostPerfdataCommand;
			}
		}
		return $this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand;
	}

	/**
	 * Returns the number of related NagiosMainConfiguration objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosMainConfiguration objects.
	 * @throws     PropelException
	 */
	public function countNagiosMainConfigurationsRelatedByHostPerfdataCommand(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand) {
				return 0;
			} else {
				$query = NagiosMainConfigurationQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosCommandRelatedByHostPerfdataCommand($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand);
		}
	}

	/**
	 * Method called to associate a NagiosMainConfiguration object to this object
	 * through the NagiosMainConfiguration foreign key attribute.
	 *
	 * @param      NagiosMainConfiguration $l NagiosMainConfiguration
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosMainConfigurationRelatedByHostPerfdataCommand(NagiosMainConfiguration $l)
	{
		if ($this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand === null) {
			$this->initNagiosMainConfigurationsRelatedByHostPerfdataCommand();
		}
		if (!$this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand[]= $l;
			$l->setNagiosCommandRelatedByHostPerfdataCommand($this);
		}
	}

	/**
	 * Clears out the collNagiosMainConfigurationsRelatedByServicePerfdataCommand collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosMainConfigurationsRelatedByServicePerfdataCommand()
	 */
	public function clearNagiosMainConfigurationsRelatedByServicePerfdataCommand()
	{
		$this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosMainConfigurationsRelatedByServicePerfdataCommand collection.
	 *
	 * By default this just sets the collNagiosMainConfigurationsRelatedByServicePerfdataCommand collection to an empty array (like clearcollNagiosMainConfigurationsRelatedByServicePerfdataCommand());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosMainConfigurationsRelatedByServicePerfdataCommand($overrideExisting = true)
	{
		if (null !== $this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand && !$overrideExisting) {
			return;
		}
		$this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand = new PropelObjectCollection();
		$this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand->setModel('NagiosMainConfiguration');
	}

	/**
	 * Gets an array of NagiosMainConfiguration objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosCommand is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosMainConfiguration[] List of NagiosMainConfiguration objects
	 * @throws     PropelException
	 */
	public function getNagiosMainConfigurationsRelatedByServicePerfdataCommand($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand) {
				// return empty collection
				$this->initNagiosMainConfigurationsRelatedByServicePerfdataCommand();
			} else {
				$collNagiosMainConfigurationsRelatedByServicePerfdataCommand = NagiosMainConfigurationQuery::create(null, $criteria)
					->filterByNagiosCommandRelatedByServicePerfdataCommand($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosMainConfigurationsRelatedByServicePerfdataCommand;
				}
				$this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand = $collNagiosMainConfigurationsRelatedByServicePerfdataCommand;
			}
		}
		return $this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand;
	}

	/**
	 * Returns the number of related NagiosMainConfiguration objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosMainConfiguration objects.
	 * @throws     PropelException
	 */
	public function countNagiosMainConfigurationsRelatedByServicePerfdataCommand(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand) {
				return 0;
			} else {
				$query = NagiosMainConfigurationQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosCommandRelatedByServicePerfdataCommand($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand);
		}
	}

	/**
	 * Method called to associate a NagiosMainConfiguration object to this object
	 * through the NagiosMainConfiguration foreign key attribute.
	 *
	 * @param      NagiosMainConfiguration $l NagiosMainConfiguration
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosMainConfigurationRelatedByServicePerfdataCommand(NagiosMainConfiguration $l)
	{
		if ($this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand === null) {
			$this->initNagiosMainConfigurationsRelatedByServicePerfdataCommand();
		}
		if (!$this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand[]= $l;
			$l->setNagiosCommandRelatedByServicePerfdataCommand($this);
		}
	}

	/**
	 * Clears out the collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand()
	 */
	public function clearNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand()
	{
		$this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand collection.
	 *
	 * By default this just sets the collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand collection to an empty array (like clearcollNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand($overrideExisting = true)
	{
		if (null !== $this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand && !$overrideExisting) {
			return;
		}
		$this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand = new PropelObjectCollection();
		$this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand->setModel('NagiosMainConfiguration');
	}

	/**
	 * Gets an array of NagiosMainConfiguration objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosCommand is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosMainConfiguration[] List of NagiosMainConfiguration objects
	 * @throws     PropelException
	 */
	public function getNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand) {
				// return empty collection
				$this->initNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand();
			} else {
				$collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand = NagiosMainConfigurationQuery::create(null, $criteria)
					->filterByNagiosCommandRelatedByHostPerfdataFileProcessingCommand($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand;
				}
				$this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand = $collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand;
			}
		}
		return $this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand;
	}

	/**
	 * Returns the number of related NagiosMainConfiguration objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosMainConfiguration objects.
	 * @throws     PropelException
	 */
	public function countNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand) {
				return 0;
			} else {
				$query = NagiosMainConfigurationQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosCommandRelatedByHostPerfdataFileProcessingCommand($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand);
		}
	}

	/**
	 * Method called to associate a NagiosMainConfiguration object to this object
	 * through the NagiosMainConfiguration foreign key attribute.
	 *
	 * @param      NagiosMainConfiguration $l NagiosMainConfiguration
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosMainConfigurationRelatedByHostPerfdataFileProcessingCommand(NagiosMainConfiguration $l)
	{
		if ($this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand === null) {
			$this->initNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand();
		}
		if (!$this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand[]= $l;
			$l->setNagiosCommandRelatedByHostPerfdataFileProcessingCommand($this);
		}
	}

	/**
	 * Clears out the collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand()
	 */
	public function clearNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand()
	{
		$this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand collection.
	 *
	 * By default this just sets the collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand collection to an empty array (like clearcollNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand($overrideExisting = true)
	{
		if (null !== $this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand && !$overrideExisting) {
			return;
		}
		$this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand = new PropelObjectCollection();
		$this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand->setModel('NagiosMainConfiguration');
	}

	/**
	 * Gets an array of NagiosMainConfiguration objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosCommand is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosMainConfiguration[] List of NagiosMainConfiguration objects
	 * @throws     PropelException
	 */
	public function getNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand) {
				// return empty collection
				$this->initNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand();
			} else {
				$collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand = NagiosMainConfigurationQuery::create(null, $criteria)
					->filterByNagiosCommandRelatedByServicePerfdataFileProcessingCommand($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand;
				}
				$this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand = $collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand;
			}
		}
		return $this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand;
	}

	/**
	 * Returns the number of related NagiosMainConfiguration objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosMainConfiguration objects.
	 * @throws     PropelException
	 */
	public function countNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand) {
				return 0;
			} else {
				$query = NagiosMainConfigurationQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosCommandRelatedByServicePerfdataFileProcessingCommand($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand);
		}
	}

	/**
	 * Method called to associate a NagiosMainConfiguration object to this object
	 * through the NagiosMainConfiguration foreign key attribute.
	 *
	 * @param      NagiosMainConfiguration $l NagiosMainConfiguration
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosMainConfigurationRelatedByServicePerfdataFileProcessingCommand(NagiosMainConfiguration $l)
	{
		if ($this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand === null) {
			$this->initNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand();
		}
		if (!$this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand[]= $l;
			$l->setNagiosCommandRelatedByServicePerfdataFileProcessingCommand($this);
		}
	}

	/**
	 * Clears out the collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosMainConfigurationsRelatedByGlobalServiceEventHandler()
	 */
	public function clearNagiosMainConfigurationsRelatedByGlobalServiceEventHandler()
	{
		$this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler collection.
	 *
	 * By default this just sets the collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler collection to an empty array (like clearcollNagiosMainConfigurationsRelatedByGlobalServiceEventHandler());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosMainConfigurationsRelatedByGlobalServiceEventHandler($overrideExisting = true)
	{
		if (null !== $this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler && !$overrideExisting) {
			return;
		}
		$this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler = new PropelObjectCollection();
		$this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler->setModel('NagiosMainConfiguration');
	}

	/**
	 * Gets an array of NagiosMainConfiguration objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosCommand is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosMainConfiguration[] List of NagiosMainConfiguration objects
	 * @throws     PropelException
	 */
	public function getNagiosMainConfigurationsRelatedByGlobalServiceEventHandler($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler) {
				// return empty collection
				$this->initNagiosMainConfigurationsRelatedByGlobalServiceEventHandler();
			} else {
				$collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler = NagiosMainConfigurationQuery::create(null, $criteria)
					->filterByNagiosCommandRelatedByGlobalServiceEventHandler($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler;
				}
				$this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler = $collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler;
			}
		}
		return $this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler;
	}

	/**
	 * Returns the number of related NagiosMainConfiguration objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosMainConfiguration objects.
	 * @throws     PropelException
	 */
	public function countNagiosMainConfigurationsRelatedByGlobalServiceEventHandler(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler) {
				return 0;
			} else {
				$query = NagiosMainConfigurationQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosCommandRelatedByGlobalServiceEventHandler($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler);
		}
	}

	/**
	 * Method called to associate a NagiosMainConfiguration object to this object
	 * through the NagiosMainConfiguration foreign key attribute.
	 *
	 * @param      NagiosMainConfiguration $l NagiosMainConfiguration
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosMainConfigurationRelatedByGlobalServiceEventHandler(NagiosMainConfiguration $l)
	{
		if ($this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler === null) {
			$this->initNagiosMainConfigurationsRelatedByGlobalServiceEventHandler();
		}
		if (!$this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler[]= $l;
			$l->setNagiosCommandRelatedByGlobalServiceEventHandler($this);
		}
	}

	/**
	 * Clears out the collNagiosMainConfigurationsRelatedByGlobalHostEventHandler collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosMainConfigurationsRelatedByGlobalHostEventHandler()
	 */
	public function clearNagiosMainConfigurationsRelatedByGlobalHostEventHandler()
	{
		$this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosMainConfigurationsRelatedByGlobalHostEventHandler collection.
	 *
	 * By default this just sets the collNagiosMainConfigurationsRelatedByGlobalHostEventHandler collection to an empty array (like clearcollNagiosMainConfigurationsRelatedByGlobalHostEventHandler());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosMainConfigurationsRelatedByGlobalHostEventHandler($overrideExisting = true)
	{
		if (null !== $this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler && !$overrideExisting) {
			return;
		}
		$this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler = new PropelObjectCollection();
		$this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler->setModel('NagiosMainConfiguration');
	}

	/**
	 * Gets an array of NagiosMainConfiguration objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosCommand is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosMainConfiguration[] List of NagiosMainConfiguration objects
	 * @throws     PropelException
	 */
	public function getNagiosMainConfigurationsRelatedByGlobalHostEventHandler($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler) {
				// return empty collection
				$this->initNagiosMainConfigurationsRelatedByGlobalHostEventHandler();
			} else {
				$collNagiosMainConfigurationsRelatedByGlobalHostEventHandler = NagiosMainConfigurationQuery::create(null, $criteria)
					->filterByNagiosCommandRelatedByGlobalHostEventHandler($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosMainConfigurationsRelatedByGlobalHostEventHandler;
				}
				$this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler = $collNagiosMainConfigurationsRelatedByGlobalHostEventHandler;
			}
		}
		return $this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler;
	}

	/**
	 * Returns the number of related NagiosMainConfiguration objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosMainConfiguration objects.
	 * @throws     PropelException
	 */
	public function countNagiosMainConfigurationsRelatedByGlobalHostEventHandler(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler) {
				return 0;
			} else {
				$query = NagiosMainConfigurationQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosCommandRelatedByGlobalHostEventHandler($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler);
		}
	}

	/**
	 * Method called to associate a NagiosMainConfiguration object to this object
	 * through the NagiosMainConfiguration foreign key attribute.
	 *
	 * @param      NagiosMainConfiguration $l NagiosMainConfiguration
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosMainConfigurationRelatedByGlobalHostEventHandler(NagiosMainConfiguration $l)
	{
		if ($this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler === null) {
			$this->initNagiosMainConfigurationsRelatedByGlobalHostEventHandler();
		}
		if (!$this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler[]= $l;
			$l->setNagiosCommandRelatedByGlobalHostEventHandler($this);
		}
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->name = null;
		$this->line = null;
		$this->description = null;
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
			if ($this->collNagiosContactNotificationCommands) {
				foreach ($this->collNagiosContactNotificationCommands as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosHostTemplatesRelatedByCheckCommand) {
				foreach ($this->collNagiosHostTemplatesRelatedByCheckCommand as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosHostTemplatesRelatedByEventHandler) {
				foreach ($this->collNagiosHostTemplatesRelatedByEventHandler as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosHostsRelatedByCheckCommand) {
				foreach ($this->collNagiosHostsRelatedByCheckCommand as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosHostsRelatedByEventHandler) {
				foreach ($this->collNagiosHostsRelatedByEventHandler as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosServiceTemplatesRelatedByCheckCommand) {
				foreach ($this->collNagiosServiceTemplatesRelatedByCheckCommand as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosServiceTemplatesRelatedByEventHandler) {
				foreach ($this->collNagiosServiceTemplatesRelatedByEventHandler as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosServicesRelatedByCheckCommand) {
				foreach ($this->collNagiosServicesRelatedByCheckCommand as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosServicesRelatedByEventHandler) {
				foreach ($this->collNagiosServicesRelatedByEventHandler as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosMainConfigurationsRelatedByOcspCommand) {
				foreach ($this->collNagiosMainConfigurationsRelatedByOcspCommand as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosMainConfigurationsRelatedByOchpCommand) {
				foreach ($this->collNagiosMainConfigurationsRelatedByOchpCommand as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand) {
				foreach ($this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand) {
				foreach ($this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand) {
				foreach ($this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand) {
				foreach ($this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler) {
				foreach ($this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler) {
				foreach ($this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collNagiosContactNotificationCommands instanceof PropelCollection) {
			$this->collNagiosContactNotificationCommands->clearIterator();
		}
		$this->collNagiosContactNotificationCommands = null;
		if ($this->collNagiosHostTemplatesRelatedByCheckCommand instanceof PropelCollection) {
			$this->collNagiosHostTemplatesRelatedByCheckCommand->clearIterator();
		}
		$this->collNagiosHostTemplatesRelatedByCheckCommand = null;
		if ($this->collNagiosHostTemplatesRelatedByEventHandler instanceof PropelCollection) {
			$this->collNagiosHostTemplatesRelatedByEventHandler->clearIterator();
		}
		$this->collNagiosHostTemplatesRelatedByEventHandler = null;
		if ($this->collNagiosHostsRelatedByCheckCommand instanceof PropelCollection) {
			$this->collNagiosHostsRelatedByCheckCommand->clearIterator();
		}
		$this->collNagiosHostsRelatedByCheckCommand = null;
		if ($this->collNagiosHostsRelatedByEventHandler instanceof PropelCollection) {
			$this->collNagiosHostsRelatedByEventHandler->clearIterator();
		}
		$this->collNagiosHostsRelatedByEventHandler = null;
		if ($this->collNagiosServiceTemplatesRelatedByCheckCommand instanceof PropelCollection) {
			$this->collNagiosServiceTemplatesRelatedByCheckCommand->clearIterator();
		}
		$this->collNagiosServiceTemplatesRelatedByCheckCommand = null;
		if ($this->collNagiosServiceTemplatesRelatedByEventHandler instanceof PropelCollection) {
			$this->collNagiosServiceTemplatesRelatedByEventHandler->clearIterator();
		}
		$this->collNagiosServiceTemplatesRelatedByEventHandler = null;
		if ($this->collNagiosServicesRelatedByCheckCommand instanceof PropelCollection) {
			$this->collNagiosServicesRelatedByCheckCommand->clearIterator();
		}
		$this->collNagiosServicesRelatedByCheckCommand = null;
		if ($this->collNagiosServicesRelatedByEventHandler instanceof PropelCollection) {
			$this->collNagiosServicesRelatedByEventHandler->clearIterator();
		}
		$this->collNagiosServicesRelatedByEventHandler = null;
		if ($this->collNagiosMainConfigurationsRelatedByOcspCommand instanceof PropelCollection) {
			$this->collNagiosMainConfigurationsRelatedByOcspCommand->clearIterator();
		}
		$this->collNagiosMainConfigurationsRelatedByOcspCommand = null;
		if ($this->collNagiosMainConfigurationsRelatedByOchpCommand instanceof PropelCollection) {
			$this->collNagiosMainConfigurationsRelatedByOchpCommand->clearIterator();
		}
		$this->collNagiosMainConfigurationsRelatedByOchpCommand = null;
		if ($this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand instanceof PropelCollection) {
			$this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand->clearIterator();
		}
		$this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand = null;
		if ($this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand instanceof PropelCollection) {
			$this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand->clearIterator();
		}
		$this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand = null;
		if ($this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand instanceof PropelCollection) {
			$this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand->clearIterator();
		}
		$this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand = null;
		if ($this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand instanceof PropelCollection) {
			$this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand->clearIterator();
		}
		$this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand = null;
		if ($this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler instanceof PropelCollection) {
			$this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler->clearIterator();
		}
		$this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler = null;
		if ($this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler instanceof PropelCollection) {
			$this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler->clearIterator();
		}
		$this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(NagiosCommandPeer::DEFAULT_STRING_FORMAT);
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

} // BaseNagiosCommand
