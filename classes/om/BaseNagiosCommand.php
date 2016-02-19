<?php

/**
 * Base class that represents a row from the 'nagios_command' table.
 *
 * Nagios Command
 *
 * @package    .om
 */
abstract class BaseNagiosCommand extends BaseObject  implements Persistent {


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
	 * @var        Criteria The criteria used to select the current contents of collNagiosContactNotificationCommands.
	 */
	private $lastNagiosContactNotificationCommandCriteria = null;

	/**
	 * @var        array NagiosHostTemplate[] Collection to store aggregation of NagiosHostTemplate objects.
	 */
	protected $collNagiosHostTemplatesRelatedByCheckCommand;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosHostTemplatesRelatedByCheckCommand.
	 */
	private $lastNagiosHostTemplateRelatedByCheckCommandCriteria = null;

	/**
	 * @var        array NagiosHostTemplate[] Collection to store aggregation of NagiosHostTemplate objects.
	 */
	protected $collNagiosHostTemplatesRelatedByEventHandler;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosHostTemplatesRelatedByEventHandler.
	 */
	private $lastNagiosHostTemplateRelatedByEventHandlerCriteria = null;

	/**
	 * @var        array NagiosHost[] Collection to store aggregation of NagiosHost objects.
	 */
	protected $collNagiosHostsRelatedByCheckCommand;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosHostsRelatedByCheckCommand.
	 */
	private $lastNagiosHostRelatedByCheckCommandCriteria = null;

	/**
	 * @var        array NagiosHost[] Collection to store aggregation of NagiosHost objects.
	 */
	protected $collNagiosHostsRelatedByEventHandler;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosHostsRelatedByEventHandler.
	 */
	private $lastNagiosHostRelatedByEventHandlerCriteria = null;

	/**
	 * @var        array NagiosServiceTemplate[] Collection to store aggregation of NagiosServiceTemplate objects.
	 */
	protected $collNagiosServiceTemplatesRelatedByCheckCommand;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosServiceTemplatesRelatedByCheckCommand.
	 */
	private $lastNagiosServiceTemplateRelatedByCheckCommandCriteria = null;

	/**
	 * @var        array NagiosServiceTemplate[] Collection to store aggregation of NagiosServiceTemplate objects.
	 */
	protected $collNagiosServiceTemplatesRelatedByEventHandler;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosServiceTemplatesRelatedByEventHandler.
	 */
	private $lastNagiosServiceTemplateRelatedByEventHandlerCriteria = null;

	/**
	 * @var        array NagiosService[] Collection to store aggregation of NagiosService objects.
	 */
	protected $collNagiosServicesRelatedByCheckCommand;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosServicesRelatedByCheckCommand.
	 */
	private $lastNagiosServiceRelatedByCheckCommandCriteria = null;

	/**
	 * @var        array NagiosService[] Collection to store aggregation of NagiosService objects.
	 */
	protected $collNagiosServicesRelatedByEventHandler;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosServicesRelatedByEventHandler.
	 */
	private $lastNagiosServiceRelatedByEventHandlerCriteria = null;

	/**
	 * @var        array NagiosMainConfiguration[] Collection to store aggregation of NagiosMainConfiguration objects.
	 */
	protected $collNagiosMainConfigurationsRelatedByOcspCommand;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosMainConfigurationsRelatedByOcspCommand.
	 */
	private $lastNagiosMainConfigurationRelatedByOcspCommandCriteria = null;

	/**
	 * @var        array NagiosMainConfiguration[] Collection to store aggregation of NagiosMainConfiguration objects.
	 */
	protected $collNagiosMainConfigurationsRelatedByOchpCommand;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosMainConfigurationsRelatedByOchpCommand.
	 */
	private $lastNagiosMainConfigurationRelatedByOchpCommandCriteria = null;

	/**
	 * @var        array NagiosMainConfiguration[] Collection to store aggregation of NagiosMainConfiguration objects.
	 */
	protected $collNagiosMainConfigurationsRelatedByHostPerfdataCommand;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosMainConfigurationsRelatedByHostPerfdataCommand.
	 */
	private $lastNagiosMainConfigurationRelatedByHostPerfdataCommandCriteria = null;

	/**
	 * @var        array NagiosMainConfiguration[] Collection to store aggregation of NagiosMainConfiguration objects.
	 */
	protected $collNagiosMainConfigurationsRelatedByServicePerfdataCommand;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosMainConfigurationsRelatedByServicePerfdataCommand.
	 */
	private $lastNagiosMainConfigurationRelatedByServicePerfdataCommandCriteria = null;

	/**
	 * @var        array NagiosMainConfiguration[] Collection to store aggregation of NagiosMainConfiguration objects.
	 */
	protected $collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand.
	 */
	private $lastNagiosMainConfigurationRelatedByHostPerfdataFileProcessingCommandCriteria = null;

	/**
	 * @var        array NagiosMainConfiguration[] Collection to store aggregation of NagiosMainConfiguration objects.
	 */
	protected $collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand.
	 */
	private $lastNagiosMainConfigurationRelatedByServicePerfdataFileProcessingCommandCriteria = null;

	/**
	 * @var        array NagiosMainConfiguration[] Collection to store aggregation of NagiosMainConfiguration objects.
	 */
	protected $collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler.
	 */
	private $lastNagiosMainConfigurationRelatedByGlobalServiceEventHandlerCriteria = null;

	/**
	 * @var        array NagiosMainConfiguration[] Collection to store aggregation of NagiosMainConfiguration objects.
	 */
	protected $collNagiosMainConfigurationsRelatedByGlobalHostEventHandler;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosMainConfigurationsRelatedByGlobalHostEventHandler.
	 */
	private $lastNagiosMainConfigurationRelatedByGlobalHostEventHandlerCriteria = null;

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
	 * Initializes internal state of BaseNagiosCommand object.
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
			$this->line = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->description = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 4; // 4 = NagiosCommandPeer::NUM_COLUMNS - NagiosCommandPeer::NUM_LAZY_LOAD_COLUMNS).

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
			$this->lastNagiosContactNotificationCommandCriteria = null;

			$this->collNagiosHostTemplatesRelatedByCheckCommand = null;
			$this->lastNagiosHostTemplateRelatedByCheckCommandCriteria = null;

			$this->collNagiosHostTemplatesRelatedByEventHandler = null;
			$this->lastNagiosHostTemplateRelatedByEventHandlerCriteria = null;

			$this->collNagiosHostsRelatedByCheckCommand = null;
			$this->lastNagiosHostRelatedByCheckCommandCriteria = null;

			$this->collNagiosHostsRelatedByEventHandler = null;
			$this->lastNagiosHostRelatedByEventHandlerCriteria = null;

			$this->collNagiosServiceTemplatesRelatedByCheckCommand = null;
			$this->lastNagiosServiceTemplateRelatedByCheckCommandCriteria = null;

			$this->collNagiosServiceTemplatesRelatedByEventHandler = null;
			$this->lastNagiosServiceTemplateRelatedByEventHandlerCriteria = null;

			$this->collNagiosServicesRelatedByCheckCommand = null;
			$this->lastNagiosServiceRelatedByCheckCommandCriteria = null;

			$this->collNagiosServicesRelatedByEventHandler = null;
			$this->lastNagiosServiceRelatedByEventHandlerCriteria = null;

			$this->collNagiosMainConfigurationsRelatedByOcspCommand = null;
			$this->lastNagiosMainConfigurationRelatedByOcspCommandCriteria = null;

			$this->collNagiosMainConfigurationsRelatedByOchpCommand = null;
			$this->lastNagiosMainConfigurationRelatedByOchpCommandCriteria = null;

			$this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand = null;
			$this->lastNagiosMainConfigurationRelatedByHostPerfdataCommandCriteria = null;

			$this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand = null;
			$this->lastNagiosMainConfigurationRelatedByServicePerfdataCommandCriteria = null;

			$this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand = null;
			$this->lastNagiosMainConfigurationRelatedByHostPerfdataFileProcessingCommandCriteria = null;

			$this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand = null;
			$this->lastNagiosMainConfigurationRelatedByServicePerfdataFileProcessingCommandCriteria = null;

			$this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler = null;
			$this->lastNagiosMainConfigurationRelatedByGlobalServiceEventHandlerCriteria = null;

			$this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler = null;
			$this->lastNagiosMainConfigurationRelatedByGlobalHostEventHandlerCriteria = null;

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
			NagiosCommandPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(NagiosCommandPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$affectedRows = $this->doSave($con);
			$con->commit();
			NagiosCommandPeer::addInstanceToPool($this);
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
					$pk = NagiosCommandPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += NagiosCommandPeer::doUpdate($this, $con);
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
	 * @param      string $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                        BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. Defaults to BasePeer::TYPE_PHPNAME.
	 * @param      boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns.  Defaults to TRUE.
	 * @return     an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true)
	{
		$keys = NagiosCommandPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
			$keys[2] => $this->getLine(),
			$keys[3] => $this->getDescription(),
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
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of NagiosCommand (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setName($this->name);

		$copyObj->setLine($this->line);

		$copyObj->setDescription($this->description);


		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getNagiosContactNotificationCommands() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosContactNotificationCommand($relObj->copy($deepCopy));
				}
			}

			/*foreach ($this->getNagiosHostTemplatesRelatedByCheckCommand() as $relObj) {
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
			}*/

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
	 * Clears out the collNagiosContactNotificationCommands collection (array).
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
	 * Initializes the collNagiosContactNotificationCommands collection (array).
	 *
	 * By default this just sets the collNagiosContactNotificationCommands collection to an empty array (like clearcollNagiosContactNotificationCommands());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosContactNotificationCommands()
	{
		$this->collNagiosContactNotificationCommands = array();
	}

	/**
	 * Gets an array of NagiosContactNotificationCommand objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosCommand has previously been saved, it will retrieve
	 * related NagiosContactNotificationCommands from storage. If this NagiosCommand is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosContactNotificationCommand[]
	 * @throws     PropelException
	 */
	public function getNagiosContactNotificationCommands($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosContactNotificationCommands === null) {
			if ($this->isNew()) {
			   $this->collNagiosContactNotificationCommands = array();
			} else {

				$criteria->add(NagiosContactNotificationCommandPeer::COMMAND, $this->id);

				NagiosContactNotificationCommandPeer::addSelectColumns($criteria);
				$this->collNagiosContactNotificationCommands = NagiosContactNotificationCommandPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosContactNotificationCommandPeer::COMMAND, $this->id);

				NagiosContactNotificationCommandPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosContactNotificationCommandCriteria) || !$this->lastNagiosContactNotificationCommandCriteria->equals($criteria)) {
					$this->collNagiosContactNotificationCommands = NagiosContactNotificationCommandPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosContactNotificationCommandCriteria = $criteria;
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
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosContactNotificationCommands === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosContactNotificationCommandPeer::COMMAND, $this->id);

				$count = NagiosContactNotificationCommandPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosContactNotificationCommandPeer::COMMAND, $this->id);

				if (!isset($this->lastNagiosContactNotificationCommandCriteria) || !$this->lastNagiosContactNotificationCommandCriteria->equals($criteria)) {
					$count = NagiosContactNotificationCommandPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosContactNotificationCommands);
				}
			} else {
				$count = count($this->collNagiosContactNotificationCommands);
			}
		}
		return $count;
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
		if (!in_array($l, $this->collNagiosContactNotificationCommands, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosContactNotificationCommands, $l);
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
	 */
	public function getNagiosContactNotificationCommandsJoinNagiosContact($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosContactNotificationCommands === null) {
			if ($this->isNew()) {
				$this->collNagiosContactNotificationCommands = array();
			} else {

				$criteria->add(NagiosContactNotificationCommandPeer::COMMAND, $this->id);

				$this->collNagiosContactNotificationCommands = NagiosContactNotificationCommandPeer::doSelectJoinNagiosContact($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosContactNotificationCommandPeer::COMMAND, $this->id);

			if (!isset($this->lastNagiosContactNotificationCommandCriteria) || !$this->lastNagiosContactNotificationCommandCriteria->equals($criteria)) {
				$this->collNagiosContactNotificationCommands = NagiosContactNotificationCommandPeer::doSelectJoinNagiosContact($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosContactNotificationCommandCriteria = $criteria;

		return $this->collNagiosContactNotificationCommands;
	}

	/**
	 * Clears out the collNagiosHostTemplatesRelatedByCheckCommand collection (array).
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
	 * Initializes the collNagiosHostTemplatesRelatedByCheckCommand collection (array).
	 *
	 * By default this just sets the collNagiosHostTemplatesRelatedByCheckCommand collection to an empty array (like clearcollNagiosHostTemplatesRelatedByCheckCommand());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosHostTemplatesRelatedByCheckCommand()
	{
		$this->collNagiosHostTemplatesRelatedByCheckCommand = array();
	}

	/**
	 * Gets an array of NagiosHostTemplate objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosCommand has previously been saved, it will retrieve
	 * related NagiosHostTemplatesRelatedByCheckCommand from storage. If this NagiosCommand is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosHostTemplate[]
	 * @throws     PropelException
	 */
	public function getNagiosHostTemplatesRelatedByCheckCommand($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostTemplatesRelatedByCheckCommand === null) {
			if ($this->isNew()) {
			   $this->collNagiosHostTemplatesRelatedByCheckCommand = array();
			} else {

				$criteria->add(NagiosHostTemplatePeer::CHECK_COMMAND, $this->id);

				NagiosHostTemplatePeer::addSelectColumns($criteria);
				$this->collNagiosHostTemplatesRelatedByCheckCommand = NagiosHostTemplatePeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosHostTemplatePeer::CHECK_COMMAND, $this->id);

				NagiosHostTemplatePeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosHostTemplateRelatedByCheckCommandCriteria) || !$this->lastNagiosHostTemplateRelatedByCheckCommandCriteria->equals($criteria)) {
					$this->collNagiosHostTemplatesRelatedByCheckCommand = NagiosHostTemplatePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosHostTemplateRelatedByCheckCommandCriteria = $criteria;
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
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosHostTemplatesRelatedByCheckCommand === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosHostTemplatePeer::CHECK_COMMAND, $this->id);

				$count = NagiosHostTemplatePeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosHostTemplatePeer::CHECK_COMMAND, $this->id);

				if (!isset($this->lastNagiosHostTemplateRelatedByCheckCommandCriteria) || !$this->lastNagiosHostTemplateRelatedByCheckCommandCriteria->equals($criteria)) {
					$count = NagiosHostTemplatePeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosHostTemplatesRelatedByCheckCommand);
				}
			} else {
				$count = count($this->collNagiosHostTemplatesRelatedByCheckCommand);
			}
		}
		return $count;
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
		if (!in_array($l, $this->collNagiosHostTemplatesRelatedByCheckCommand, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosHostTemplatesRelatedByCheckCommand, $l);
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
	 */
	public function getNagiosHostTemplatesRelatedByCheckCommandJoinNagiosTimeperiodRelatedByCheckPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostTemplatesRelatedByCheckCommand === null) {
			if ($this->isNew()) {
				$this->collNagiosHostTemplatesRelatedByCheckCommand = array();
			} else {

				$criteria->add(NagiosHostTemplatePeer::CHECK_COMMAND, $this->id);

				$this->collNagiosHostTemplatesRelatedByCheckCommand = NagiosHostTemplatePeer::doSelectJoinNagiosTimeperiodRelatedByCheckPeriod($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosHostTemplatePeer::CHECK_COMMAND, $this->id);

			if (!isset($this->lastNagiosHostTemplateRelatedByCheckCommandCriteria) || !$this->lastNagiosHostTemplateRelatedByCheckCommandCriteria->equals($criteria)) {
				$this->collNagiosHostTemplatesRelatedByCheckCommand = NagiosHostTemplatePeer::doSelectJoinNagiosTimeperiodRelatedByCheckPeriod($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosHostTemplateRelatedByCheckCommandCriteria = $criteria;

		return $this->collNagiosHostTemplatesRelatedByCheckCommand;
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
	 */
	public function getNagiosHostTemplatesRelatedByCheckCommandJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostTemplatesRelatedByCheckCommand === null) {
			if ($this->isNew()) {
				$this->collNagiosHostTemplatesRelatedByCheckCommand = array();
			} else {

				$criteria->add(NagiosHostTemplatePeer::CHECK_COMMAND, $this->id);

				$this->collNagiosHostTemplatesRelatedByCheckCommand = NagiosHostTemplatePeer::doSelectJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosHostTemplatePeer::CHECK_COMMAND, $this->id);

			if (!isset($this->lastNagiosHostTemplateRelatedByCheckCommandCriteria) || !$this->lastNagiosHostTemplateRelatedByCheckCommandCriteria->equals($criteria)) {
				$this->collNagiosHostTemplatesRelatedByCheckCommand = NagiosHostTemplatePeer::doSelectJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosHostTemplateRelatedByCheckCommandCriteria = $criteria;

		return $this->collNagiosHostTemplatesRelatedByCheckCommand;
	}

	/**
	 * Clears out the collNagiosHostTemplatesRelatedByEventHandler collection (array).
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
	 * Initializes the collNagiosHostTemplatesRelatedByEventHandler collection (array).
	 *
	 * By default this just sets the collNagiosHostTemplatesRelatedByEventHandler collection to an empty array (like clearcollNagiosHostTemplatesRelatedByEventHandler());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosHostTemplatesRelatedByEventHandler()
	{
		$this->collNagiosHostTemplatesRelatedByEventHandler = array();
	}

	/**
	 * Gets an array of NagiosHostTemplate objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosCommand has previously been saved, it will retrieve
	 * related NagiosHostTemplatesRelatedByEventHandler from storage. If this NagiosCommand is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosHostTemplate[]
	 * @throws     PropelException
	 */
	public function getNagiosHostTemplatesRelatedByEventHandler($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostTemplatesRelatedByEventHandler === null) {
			if ($this->isNew()) {
			   $this->collNagiosHostTemplatesRelatedByEventHandler = array();
			} else {

				$criteria->add(NagiosHostTemplatePeer::EVENT_HANDLER, $this->id);

				NagiosHostTemplatePeer::addSelectColumns($criteria);
				$this->collNagiosHostTemplatesRelatedByEventHandler = NagiosHostTemplatePeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosHostTemplatePeer::EVENT_HANDLER, $this->id);

				NagiosHostTemplatePeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosHostTemplateRelatedByEventHandlerCriteria) || !$this->lastNagiosHostTemplateRelatedByEventHandlerCriteria->equals($criteria)) {
					$this->collNagiosHostTemplatesRelatedByEventHandler = NagiosHostTemplatePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosHostTemplateRelatedByEventHandlerCriteria = $criteria;
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
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosHostTemplatesRelatedByEventHandler === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosHostTemplatePeer::EVENT_HANDLER, $this->id);

				$count = NagiosHostTemplatePeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosHostTemplatePeer::EVENT_HANDLER, $this->id);

				if (!isset($this->lastNagiosHostTemplateRelatedByEventHandlerCriteria) || !$this->lastNagiosHostTemplateRelatedByEventHandlerCriteria->equals($criteria)) {
					$count = NagiosHostTemplatePeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosHostTemplatesRelatedByEventHandler);
				}
			} else {
				$count = count($this->collNagiosHostTemplatesRelatedByEventHandler);
			}
		}
		return $count;
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
		if (!in_array($l, $this->collNagiosHostTemplatesRelatedByEventHandler, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosHostTemplatesRelatedByEventHandler, $l);
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
	 */
	public function getNagiosHostTemplatesRelatedByEventHandlerJoinNagiosTimeperiodRelatedByCheckPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostTemplatesRelatedByEventHandler === null) {
			if ($this->isNew()) {
				$this->collNagiosHostTemplatesRelatedByEventHandler = array();
			} else {

				$criteria->add(NagiosHostTemplatePeer::EVENT_HANDLER, $this->id);

				$this->collNagiosHostTemplatesRelatedByEventHandler = NagiosHostTemplatePeer::doSelectJoinNagiosTimeperiodRelatedByCheckPeriod($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosHostTemplatePeer::EVENT_HANDLER, $this->id);

			if (!isset($this->lastNagiosHostTemplateRelatedByEventHandlerCriteria) || !$this->lastNagiosHostTemplateRelatedByEventHandlerCriteria->equals($criteria)) {
				$this->collNagiosHostTemplatesRelatedByEventHandler = NagiosHostTemplatePeer::doSelectJoinNagiosTimeperiodRelatedByCheckPeriod($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosHostTemplateRelatedByEventHandlerCriteria = $criteria;

		return $this->collNagiosHostTemplatesRelatedByEventHandler;
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
	 */
	public function getNagiosHostTemplatesRelatedByEventHandlerJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostTemplatesRelatedByEventHandler === null) {
			if ($this->isNew()) {
				$this->collNagiosHostTemplatesRelatedByEventHandler = array();
			} else {

				$criteria->add(NagiosHostTemplatePeer::EVENT_HANDLER, $this->id);

				$this->collNagiosHostTemplatesRelatedByEventHandler = NagiosHostTemplatePeer::doSelectJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosHostTemplatePeer::EVENT_HANDLER, $this->id);

			if (!isset($this->lastNagiosHostTemplateRelatedByEventHandlerCriteria) || !$this->lastNagiosHostTemplateRelatedByEventHandlerCriteria->equals($criteria)) {
				$this->collNagiosHostTemplatesRelatedByEventHandler = NagiosHostTemplatePeer::doSelectJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosHostTemplateRelatedByEventHandlerCriteria = $criteria;

		return $this->collNagiosHostTemplatesRelatedByEventHandler;
	}

	/**
	 * Clears out the collNagiosHostsRelatedByCheckCommand collection (array).
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
	 * Initializes the collNagiosHostsRelatedByCheckCommand collection (array).
	 *
	 * By default this just sets the collNagiosHostsRelatedByCheckCommand collection to an empty array (like clearcollNagiosHostsRelatedByCheckCommand());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosHostsRelatedByCheckCommand()
	{
		$this->collNagiosHostsRelatedByCheckCommand = array();
	}

	/**
	 * Gets an array of NagiosHost objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosCommand has previously been saved, it will retrieve
	 * related NagiosHostsRelatedByCheckCommand from storage. If this NagiosCommand is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosHost[]
	 * @throws     PropelException
	 */
	public function getNagiosHostsRelatedByCheckCommand($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostsRelatedByCheckCommand === null) {
			if ($this->isNew()) {
			   $this->collNagiosHostsRelatedByCheckCommand = array();
			} else {

				$criteria->add(NagiosHostPeer::CHECK_COMMAND, $this->id);

				NagiosHostPeer::addSelectColumns($criteria);
				$this->collNagiosHostsRelatedByCheckCommand = NagiosHostPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosHostPeer::CHECK_COMMAND, $this->id);

				NagiosHostPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosHostRelatedByCheckCommandCriteria) || !$this->lastNagiosHostRelatedByCheckCommandCriteria->equals($criteria)) {
					$this->collNagiosHostsRelatedByCheckCommand = NagiosHostPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosHostRelatedByCheckCommandCriteria = $criteria;
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
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosHostsRelatedByCheckCommand === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosHostPeer::CHECK_COMMAND, $this->id);

				$count = NagiosHostPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosHostPeer::CHECK_COMMAND, $this->id);

				if (!isset($this->lastNagiosHostRelatedByCheckCommandCriteria) || !$this->lastNagiosHostRelatedByCheckCommandCriteria->equals($criteria)) {
					$count = NagiosHostPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosHostsRelatedByCheckCommand);
				}
			} else {
				$count = count($this->collNagiosHostsRelatedByCheckCommand);
			}
		}
		return $count;
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
		if (!in_array($l, $this->collNagiosHostsRelatedByCheckCommand, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosHostsRelatedByCheckCommand, $l);
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
	 */
	public function getNagiosHostsRelatedByCheckCommandJoinNagiosTimeperiodRelatedByCheckPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostsRelatedByCheckCommand === null) {
			if ($this->isNew()) {
				$this->collNagiosHostsRelatedByCheckCommand = array();
			} else {

				$criteria->add(NagiosHostPeer::CHECK_COMMAND, $this->id);

				$this->collNagiosHostsRelatedByCheckCommand = NagiosHostPeer::doSelectJoinNagiosTimeperiodRelatedByCheckPeriod($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosHostPeer::CHECK_COMMAND, $this->id);

			if (!isset($this->lastNagiosHostRelatedByCheckCommandCriteria) || !$this->lastNagiosHostRelatedByCheckCommandCriteria->equals($criteria)) {
				$this->collNagiosHostsRelatedByCheckCommand = NagiosHostPeer::doSelectJoinNagiosTimeperiodRelatedByCheckPeriod($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosHostRelatedByCheckCommandCriteria = $criteria;

		return $this->collNagiosHostsRelatedByCheckCommand;
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
	 */
	public function getNagiosHostsRelatedByCheckCommandJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostsRelatedByCheckCommand === null) {
			if ($this->isNew()) {
				$this->collNagiosHostsRelatedByCheckCommand = array();
			} else {

				$criteria->add(NagiosHostPeer::CHECK_COMMAND, $this->id);

				$this->collNagiosHostsRelatedByCheckCommand = NagiosHostPeer::doSelectJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosHostPeer::CHECK_COMMAND, $this->id);

			if (!isset($this->lastNagiosHostRelatedByCheckCommandCriteria) || !$this->lastNagiosHostRelatedByCheckCommandCriteria->equals($criteria)) {
				$this->collNagiosHostsRelatedByCheckCommand = NagiosHostPeer::doSelectJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosHostRelatedByCheckCommandCriteria = $criteria;

		return $this->collNagiosHostsRelatedByCheckCommand;
	}

	/**
	 * Clears out the collNagiosHostsRelatedByEventHandler collection (array).
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
	 * Initializes the collNagiosHostsRelatedByEventHandler collection (array).
	 *
	 * By default this just sets the collNagiosHostsRelatedByEventHandler collection to an empty array (like clearcollNagiosHostsRelatedByEventHandler());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosHostsRelatedByEventHandler()
	{
		$this->collNagiosHostsRelatedByEventHandler = array();
	}

	/**
	 * Gets an array of NagiosHost objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosCommand has previously been saved, it will retrieve
	 * related NagiosHostsRelatedByEventHandler from storage. If this NagiosCommand is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosHost[]
	 * @throws     PropelException
	 */
	public function getNagiosHostsRelatedByEventHandler($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostsRelatedByEventHandler === null) {
			if ($this->isNew()) {
			   $this->collNagiosHostsRelatedByEventHandler = array();
			} else {

				$criteria->add(NagiosHostPeer::EVENT_HANDLER, $this->id);

				NagiosHostPeer::addSelectColumns($criteria);
				$this->collNagiosHostsRelatedByEventHandler = NagiosHostPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosHostPeer::EVENT_HANDLER, $this->id);

				NagiosHostPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosHostRelatedByEventHandlerCriteria) || !$this->lastNagiosHostRelatedByEventHandlerCriteria->equals($criteria)) {
					$this->collNagiosHostsRelatedByEventHandler = NagiosHostPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosHostRelatedByEventHandlerCriteria = $criteria;
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
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosHostsRelatedByEventHandler === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosHostPeer::EVENT_HANDLER, $this->id);

				$count = NagiosHostPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosHostPeer::EVENT_HANDLER, $this->id);

				if (!isset($this->lastNagiosHostRelatedByEventHandlerCriteria) || !$this->lastNagiosHostRelatedByEventHandlerCriteria->equals($criteria)) {
					$count = NagiosHostPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosHostsRelatedByEventHandler);
				}
			} else {
				$count = count($this->collNagiosHostsRelatedByEventHandler);
			}
		}
		return $count;
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
		if (!in_array($l, $this->collNagiosHostsRelatedByEventHandler, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosHostsRelatedByEventHandler, $l);
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
	 */
	public function getNagiosHostsRelatedByEventHandlerJoinNagiosTimeperiodRelatedByCheckPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostsRelatedByEventHandler === null) {
			if ($this->isNew()) {
				$this->collNagiosHostsRelatedByEventHandler = array();
			} else {

				$criteria->add(NagiosHostPeer::EVENT_HANDLER, $this->id);

				$this->collNagiosHostsRelatedByEventHandler = NagiosHostPeer::doSelectJoinNagiosTimeperiodRelatedByCheckPeriod($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosHostPeer::EVENT_HANDLER, $this->id);

			if (!isset($this->lastNagiosHostRelatedByEventHandlerCriteria) || !$this->lastNagiosHostRelatedByEventHandlerCriteria->equals($criteria)) {
				$this->collNagiosHostsRelatedByEventHandler = NagiosHostPeer::doSelectJoinNagiosTimeperiodRelatedByCheckPeriod($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosHostRelatedByEventHandlerCriteria = $criteria;

		return $this->collNagiosHostsRelatedByEventHandler;
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
	 */
	public function getNagiosHostsRelatedByEventHandlerJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostsRelatedByEventHandler === null) {
			if ($this->isNew()) {
				$this->collNagiosHostsRelatedByEventHandler = array();
			} else {

				$criteria->add(NagiosHostPeer::EVENT_HANDLER, $this->id);

				$this->collNagiosHostsRelatedByEventHandler = NagiosHostPeer::doSelectJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosHostPeer::EVENT_HANDLER, $this->id);

			if (!isset($this->lastNagiosHostRelatedByEventHandlerCriteria) || !$this->lastNagiosHostRelatedByEventHandlerCriteria->equals($criteria)) {
				$this->collNagiosHostsRelatedByEventHandler = NagiosHostPeer::doSelectJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosHostRelatedByEventHandlerCriteria = $criteria;

		return $this->collNagiosHostsRelatedByEventHandler;
	}

	/**
	 * Clears out the collNagiosServiceTemplatesRelatedByCheckCommand collection (array).
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
	 * Initializes the collNagiosServiceTemplatesRelatedByCheckCommand collection (array).
	 *
	 * By default this just sets the collNagiosServiceTemplatesRelatedByCheckCommand collection to an empty array (like clearcollNagiosServiceTemplatesRelatedByCheckCommand());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosServiceTemplatesRelatedByCheckCommand()
	{
		$this->collNagiosServiceTemplatesRelatedByCheckCommand = array();
	}

	/**
	 * Gets an array of NagiosServiceTemplate objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosCommand has previously been saved, it will retrieve
	 * related NagiosServiceTemplatesRelatedByCheckCommand from storage. If this NagiosCommand is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosServiceTemplate[]
	 * @throws     PropelException
	 */
	public function getNagiosServiceTemplatesRelatedByCheckCommand($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServiceTemplatesRelatedByCheckCommand === null) {
			if ($this->isNew()) {
			   $this->collNagiosServiceTemplatesRelatedByCheckCommand = array();
			} else {

				$criteria->add(NagiosServiceTemplatePeer::CHECK_COMMAND, $this->id);

				NagiosServiceTemplatePeer::addSelectColumns($criteria);
				$this->collNagiosServiceTemplatesRelatedByCheckCommand = NagiosServiceTemplatePeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosServiceTemplatePeer::CHECK_COMMAND, $this->id);

				NagiosServiceTemplatePeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosServiceTemplateRelatedByCheckCommandCriteria) || !$this->lastNagiosServiceTemplateRelatedByCheckCommandCriteria->equals($criteria)) {
					$this->collNagiosServiceTemplatesRelatedByCheckCommand = NagiosServiceTemplatePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosServiceTemplateRelatedByCheckCommandCriteria = $criteria;
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
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosServiceTemplatesRelatedByCheckCommand === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosServiceTemplatePeer::CHECK_COMMAND, $this->id);

				$count = NagiosServiceTemplatePeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosServiceTemplatePeer::CHECK_COMMAND, $this->id);

				if (!isset($this->lastNagiosServiceTemplateRelatedByCheckCommandCriteria) || !$this->lastNagiosServiceTemplateRelatedByCheckCommandCriteria->equals($criteria)) {
					$count = NagiosServiceTemplatePeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosServiceTemplatesRelatedByCheckCommand);
				}
			} else {
				$count = count($this->collNagiosServiceTemplatesRelatedByCheckCommand);
			}
		}
		return $count;
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
		if (!in_array($l, $this->collNagiosServiceTemplatesRelatedByCheckCommand, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosServiceTemplatesRelatedByCheckCommand, $l);
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
	 */
	public function getNagiosServiceTemplatesRelatedByCheckCommandJoinNagiosTimeperiodRelatedByCheckPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServiceTemplatesRelatedByCheckCommand === null) {
			if ($this->isNew()) {
				$this->collNagiosServiceTemplatesRelatedByCheckCommand = array();
			} else {

				$criteria->add(NagiosServiceTemplatePeer::CHECK_COMMAND, $this->id);

				$this->collNagiosServiceTemplatesRelatedByCheckCommand = NagiosServiceTemplatePeer::doSelectJoinNagiosTimeperiodRelatedByCheckPeriod($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServiceTemplatePeer::CHECK_COMMAND, $this->id);

			if (!isset($this->lastNagiosServiceTemplateRelatedByCheckCommandCriteria) || !$this->lastNagiosServiceTemplateRelatedByCheckCommandCriteria->equals($criteria)) {
				$this->collNagiosServiceTemplatesRelatedByCheckCommand = NagiosServiceTemplatePeer::doSelectJoinNagiosTimeperiodRelatedByCheckPeriod($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceTemplateRelatedByCheckCommandCriteria = $criteria;

		return $this->collNagiosServiceTemplatesRelatedByCheckCommand;
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
	 */
	public function getNagiosServiceTemplatesRelatedByCheckCommandJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServiceTemplatesRelatedByCheckCommand === null) {
			if ($this->isNew()) {
				$this->collNagiosServiceTemplatesRelatedByCheckCommand = array();
			} else {

				$criteria->add(NagiosServiceTemplatePeer::CHECK_COMMAND, $this->id);

				$this->collNagiosServiceTemplatesRelatedByCheckCommand = NagiosServiceTemplatePeer::doSelectJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServiceTemplatePeer::CHECK_COMMAND, $this->id);

			if (!isset($this->lastNagiosServiceTemplateRelatedByCheckCommandCriteria) || !$this->lastNagiosServiceTemplateRelatedByCheckCommandCriteria->equals($criteria)) {
				$this->collNagiosServiceTemplatesRelatedByCheckCommand = NagiosServiceTemplatePeer::doSelectJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceTemplateRelatedByCheckCommandCriteria = $criteria;

		return $this->collNagiosServiceTemplatesRelatedByCheckCommand;
	}

	/**
	 * Clears out the collNagiosServiceTemplatesRelatedByEventHandler collection (array).
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
	 * Initializes the collNagiosServiceTemplatesRelatedByEventHandler collection (array).
	 *
	 * By default this just sets the collNagiosServiceTemplatesRelatedByEventHandler collection to an empty array (like clearcollNagiosServiceTemplatesRelatedByEventHandler());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosServiceTemplatesRelatedByEventHandler()
	{
		$this->collNagiosServiceTemplatesRelatedByEventHandler = array();
	}

	/**
	 * Gets an array of NagiosServiceTemplate objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosCommand has previously been saved, it will retrieve
	 * related NagiosServiceTemplatesRelatedByEventHandler from storage. If this NagiosCommand is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosServiceTemplate[]
	 * @throws     PropelException
	 */
	public function getNagiosServiceTemplatesRelatedByEventHandler($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServiceTemplatesRelatedByEventHandler === null) {
			if ($this->isNew()) {
			   $this->collNagiosServiceTemplatesRelatedByEventHandler = array();
			} else {

				$criteria->add(NagiosServiceTemplatePeer::EVENT_HANDLER, $this->id);

				NagiosServiceTemplatePeer::addSelectColumns($criteria);
				$this->collNagiosServiceTemplatesRelatedByEventHandler = NagiosServiceTemplatePeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosServiceTemplatePeer::EVENT_HANDLER, $this->id);

				NagiosServiceTemplatePeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosServiceTemplateRelatedByEventHandlerCriteria) || !$this->lastNagiosServiceTemplateRelatedByEventHandlerCriteria->equals($criteria)) {
					$this->collNagiosServiceTemplatesRelatedByEventHandler = NagiosServiceTemplatePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosServiceTemplateRelatedByEventHandlerCriteria = $criteria;
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
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosServiceTemplatesRelatedByEventHandler === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosServiceTemplatePeer::EVENT_HANDLER, $this->id);

				$count = NagiosServiceTemplatePeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosServiceTemplatePeer::EVENT_HANDLER, $this->id);

				if (!isset($this->lastNagiosServiceTemplateRelatedByEventHandlerCriteria) || !$this->lastNagiosServiceTemplateRelatedByEventHandlerCriteria->equals($criteria)) {
					$count = NagiosServiceTemplatePeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosServiceTemplatesRelatedByEventHandler);
				}
			} else {
				$count = count($this->collNagiosServiceTemplatesRelatedByEventHandler);
			}
		}
		return $count;
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
		if (!in_array($l, $this->collNagiosServiceTemplatesRelatedByEventHandler, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosServiceTemplatesRelatedByEventHandler, $l);
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
	 */
	public function getNagiosServiceTemplatesRelatedByEventHandlerJoinNagiosTimeperiodRelatedByCheckPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServiceTemplatesRelatedByEventHandler === null) {
			if ($this->isNew()) {
				$this->collNagiosServiceTemplatesRelatedByEventHandler = array();
			} else {

				$criteria->add(NagiosServiceTemplatePeer::EVENT_HANDLER, $this->id);

				$this->collNagiosServiceTemplatesRelatedByEventHandler = NagiosServiceTemplatePeer::doSelectJoinNagiosTimeperiodRelatedByCheckPeriod($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServiceTemplatePeer::EVENT_HANDLER, $this->id);

			if (!isset($this->lastNagiosServiceTemplateRelatedByEventHandlerCriteria) || !$this->lastNagiosServiceTemplateRelatedByEventHandlerCriteria->equals($criteria)) {
				$this->collNagiosServiceTemplatesRelatedByEventHandler = NagiosServiceTemplatePeer::doSelectJoinNagiosTimeperiodRelatedByCheckPeriod($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceTemplateRelatedByEventHandlerCriteria = $criteria;

		return $this->collNagiosServiceTemplatesRelatedByEventHandler;
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
	 */
	public function getNagiosServiceTemplatesRelatedByEventHandlerJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServiceTemplatesRelatedByEventHandler === null) {
			if ($this->isNew()) {
				$this->collNagiosServiceTemplatesRelatedByEventHandler = array();
			} else {

				$criteria->add(NagiosServiceTemplatePeer::EVENT_HANDLER, $this->id);

				$this->collNagiosServiceTemplatesRelatedByEventHandler = NagiosServiceTemplatePeer::doSelectJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServiceTemplatePeer::EVENT_HANDLER, $this->id);

			if (!isset($this->lastNagiosServiceTemplateRelatedByEventHandlerCriteria) || !$this->lastNagiosServiceTemplateRelatedByEventHandlerCriteria->equals($criteria)) {
				$this->collNagiosServiceTemplatesRelatedByEventHandler = NagiosServiceTemplatePeer::doSelectJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceTemplateRelatedByEventHandlerCriteria = $criteria;

		return $this->collNagiosServiceTemplatesRelatedByEventHandler;
	}

	/**
	 * Clears out the collNagiosServicesRelatedByCheckCommand collection (array).
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
	 * Initializes the collNagiosServicesRelatedByCheckCommand collection (array).
	 *
	 * By default this just sets the collNagiosServicesRelatedByCheckCommand collection to an empty array (like clearcollNagiosServicesRelatedByCheckCommand());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosServicesRelatedByCheckCommand()
	{
		$this->collNagiosServicesRelatedByCheckCommand = array();
	}

	/**
	 * Gets an array of NagiosService objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosCommand has previously been saved, it will retrieve
	 * related NagiosServicesRelatedByCheckCommand from storage. If this NagiosCommand is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosService[]
	 * @throws     PropelException
	 */
	public function getNagiosServicesRelatedByCheckCommand($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServicesRelatedByCheckCommand === null) {
			if ($this->isNew()) {
			   $this->collNagiosServicesRelatedByCheckCommand = array();
			} else {

				$criteria->add(NagiosServicePeer::CHECK_COMMAND, $this->id);

				NagiosServicePeer::addSelectColumns($criteria);
				$this->collNagiosServicesRelatedByCheckCommand = NagiosServicePeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosServicePeer::CHECK_COMMAND, $this->id);

				NagiosServicePeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosServiceRelatedByCheckCommandCriteria) || !$this->lastNagiosServiceRelatedByCheckCommandCriteria->equals($criteria)) {
					$this->collNagiosServicesRelatedByCheckCommand = NagiosServicePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosServiceRelatedByCheckCommandCriteria = $criteria;
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
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosServicesRelatedByCheckCommand === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosServicePeer::CHECK_COMMAND, $this->id);

				$count = NagiosServicePeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosServicePeer::CHECK_COMMAND, $this->id);

				if (!isset($this->lastNagiosServiceRelatedByCheckCommandCriteria) || !$this->lastNagiosServiceRelatedByCheckCommandCriteria->equals($criteria)) {
					$count = NagiosServicePeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosServicesRelatedByCheckCommand);
				}
			} else {
				$count = count($this->collNagiosServicesRelatedByCheckCommand);
			}
		}
		return $count;
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
		if (!in_array($l, $this->collNagiosServicesRelatedByCheckCommand, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosServicesRelatedByCheckCommand, $l);
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
	 */
	public function getNagiosServicesRelatedByCheckCommandJoinNagiosHost($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServicesRelatedByCheckCommand === null) {
			if ($this->isNew()) {
				$this->collNagiosServicesRelatedByCheckCommand = array();
			} else {

				$criteria->add(NagiosServicePeer::CHECK_COMMAND, $this->id);

				$this->collNagiosServicesRelatedByCheckCommand = NagiosServicePeer::doSelectJoinNagiosHost($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServicePeer::CHECK_COMMAND, $this->id);

			if (!isset($this->lastNagiosServiceRelatedByCheckCommandCriteria) || !$this->lastNagiosServiceRelatedByCheckCommandCriteria->equals($criteria)) {
				$this->collNagiosServicesRelatedByCheckCommand = NagiosServicePeer::doSelectJoinNagiosHost($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceRelatedByCheckCommandCriteria = $criteria;

		return $this->collNagiosServicesRelatedByCheckCommand;
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
	 */
	public function getNagiosServicesRelatedByCheckCommandJoinNagiosHostTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServicesRelatedByCheckCommand === null) {
			if ($this->isNew()) {
				$this->collNagiosServicesRelatedByCheckCommand = array();
			} else {

				$criteria->add(NagiosServicePeer::CHECK_COMMAND, $this->id);

				$this->collNagiosServicesRelatedByCheckCommand = NagiosServicePeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServicePeer::CHECK_COMMAND, $this->id);

			if (!isset($this->lastNagiosServiceRelatedByCheckCommandCriteria) || !$this->lastNagiosServiceRelatedByCheckCommandCriteria->equals($criteria)) {
				$this->collNagiosServicesRelatedByCheckCommand = NagiosServicePeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceRelatedByCheckCommandCriteria = $criteria;

		return $this->collNagiosServicesRelatedByCheckCommand;
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
	 */
	public function getNagiosServicesRelatedByCheckCommandJoinNagiosHostgroup($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServicesRelatedByCheckCommand === null) {
			if ($this->isNew()) {
				$this->collNagiosServicesRelatedByCheckCommand = array();
			} else {

				$criteria->add(NagiosServicePeer::CHECK_COMMAND, $this->id);

				$this->collNagiosServicesRelatedByCheckCommand = NagiosServicePeer::doSelectJoinNagiosHostgroup($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServicePeer::CHECK_COMMAND, $this->id);

			if (!isset($this->lastNagiosServiceRelatedByCheckCommandCriteria) || !$this->lastNagiosServiceRelatedByCheckCommandCriteria->equals($criteria)) {
				$this->collNagiosServicesRelatedByCheckCommand = NagiosServicePeer::doSelectJoinNagiosHostgroup($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceRelatedByCheckCommandCriteria = $criteria;

		return $this->collNagiosServicesRelatedByCheckCommand;
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
	 */
	public function getNagiosServicesRelatedByCheckCommandJoinNagiosTimeperiodRelatedByCheckPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServicesRelatedByCheckCommand === null) {
			if ($this->isNew()) {
				$this->collNagiosServicesRelatedByCheckCommand = array();
			} else {

				$criteria->add(NagiosServicePeer::CHECK_COMMAND, $this->id);

				$this->collNagiosServicesRelatedByCheckCommand = NagiosServicePeer::doSelectJoinNagiosTimeperiodRelatedByCheckPeriod($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServicePeer::CHECK_COMMAND, $this->id);

			if (!isset($this->lastNagiosServiceRelatedByCheckCommandCriteria) || !$this->lastNagiosServiceRelatedByCheckCommandCriteria->equals($criteria)) {
				$this->collNagiosServicesRelatedByCheckCommand = NagiosServicePeer::doSelectJoinNagiosTimeperiodRelatedByCheckPeriod($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceRelatedByCheckCommandCriteria = $criteria;

		return $this->collNagiosServicesRelatedByCheckCommand;
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
	 */
	public function getNagiosServicesRelatedByCheckCommandJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServicesRelatedByCheckCommand === null) {
			if ($this->isNew()) {
				$this->collNagiosServicesRelatedByCheckCommand = array();
			} else {

				$criteria->add(NagiosServicePeer::CHECK_COMMAND, $this->id);

				$this->collNagiosServicesRelatedByCheckCommand = NagiosServicePeer::doSelectJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServicePeer::CHECK_COMMAND, $this->id);

			if (!isset($this->lastNagiosServiceRelatedByCheckCommandCriteria) || !$this->lastNagiosServiceRelatedByCheckCommandCriteria->equals($criteria)) {
				$this->collNagiosServicesRelatedByCheckCommand = NagiosServicePeer::doSelectJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceRelatedByCheckCommandCriteria = $criteria;

		return $this->collNagiosServicesRelatedByCheckCommand;
	}

	/**
	 * Clears out the collNagiosServicesRelatedByEventHandler collection (array).
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
	 * Initializes the collNagiosServicesRelatedByEventHandler collection (array).
	 *
	 * By default this just sets the collNagiosServicesRelatedByEventHandler collection to an empty array (like clearcollNagiosServicesRelatedByEventHandler());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosServicesRelatedByEventHandler()
	{
		$this->collNagiosServicesRelatedByEventHandler = array();
	}

	/**
	 * Gets an array of NagiosService objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosCommand has previously been saved, it will retrieve
	 * related NagiosServicesRelatedByEventHandler from storage. If this NagiosCommand is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosService[]
	 * @throws     PropelException
	 */
	public function getNagiosServicesRelatedByEventHandler($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServicesRelatedByEventHandler === null) {
			if ($this->isNew()) {
			   $this->collNagiosServicesRelatedByEventHandler = array();
			} else {

				$criteria->add(NagiosServicePeer::EVENT_HANDLER, $this->id);

				NagiosServicePeer::addSelectColumns($criteria);
				$this->collNagiosServicesRelatedByEventHandler = NagiosServicePeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosServicePeer::EVENT_HANDLER, $this->id);

				NagiosServicePeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosServiceRelatedByEventHandlerCriteria) || !$this->lastNagiosServiceRelatedByEventHandlerCriteria->equals($criteria)) {
					$this->collNagiosServicesRelatedByEventHandler = NagiosServicePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosServiceRelatedByEventHandlerCriteria = $criteria;
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
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosServicesRelatedByEventHandler === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosServicePeer::EVENT_HANDLER, $this->id);

				$count = NagiosServicePeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosServicePeer::EVENT_HANDLER, $this->id);

				if (!isset($this->lastNagiosServiceRelatedByEventHandlerCriteria) || !$this->lastNagiosServiceRelatedByEventHandlerCriteria->equals($criteria)) {
					$count = NagiosServicePeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosServicesRelatedByEventHandler);
				}
			} else {
				$count = count($this->collNagiosServicesRelatedByEventHandler);
			}
		}
		return $count;
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
		if (!in_array($l, $this->collNagiosServicesRelatedByEventHandler, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosServicesRelatedByEventHandler, $l);
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
	 */
	public function getNagiosServicesRelatedByEventHandlerJoinNagiosHost($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServicesRelatedByEventHandler === null) {
			if ($this->isNew()) {
				$this->collNagiosServicesRelatedByEventHandler = array();
			} else {

				$criteria->add(NagiosServicePeer::EVENT_HANDLER, $this->id);

				$this->collNagiosServicesRelatedByEventHandler = NagiosServicePeer::doSelectJoinNagiosHost($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServicePeer::EVENT_HANDLER, $this->id);

			if (!isset($this->lastNagiosServiceRelatedByEventHandlerCriteria) || !$this->lastNagiosServiceRelatedByEventHandlerCriteria->equals($criteria)) {
				$this->collNagiosServicesRelatedByEventHandler = NagiosServicePeer::doSelectJoinNagiosHost($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceRelatedByEventHandlerCriteria = $criteria;

		return $this->collNagiosServicesRelatedByEventHandler;
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
	 */
	public function getNagiosServicesRelatedByEventHandlerJoinNagiosHostTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServicesRelatedByEventHandler === null) {
			if ($this->isNew()) {
				$this->collNagiosServicesRelatedByEventHandler = array();
			} else {

				$criteria->add(NagiosServicePeer::EVENT_HANDLER, $this->id);

				$this->collNagiosServicesRelatedByEventHandler = NagiosServicePeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServicePeer::EVENT_HANDLER, $this->id);

			if (!isset($this->lastNagiosServiceRelatedByEventHandlerCriteria) || !$this->lastNagiosServiceRelatedByEventHandlerCriteria->equals($criteria)) {
				$this->collNagiosServicesRelatedByEventHandler = NagiosServicePeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceRelatedByEventHandlerCriteria = $criteria;

		return $this->collNagiosServicesRelatedByEventHandler;
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
	 */
	public function getNagiosServicesRelatedByEventHandlerJoinNagiosHostgroup($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServicesRelatedByEventHandler === null) {
			if ($this->isNew()) {
				$this->collNagiosServicesRelatedByEventHandler = array();
			} else {

				$criteria->add(NagiosServicePeer::EVENT_HANDLER, $this->id);

				$this->collNagiosServicesRelatedByEventHandler = NagiosServicePeer::doSelectJoinNagiosHostgroup($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServicePeer::EVENT_HANDLER, $this->id);

			if (!isset($this->lastNagiosServiceRelatedByEventHandlerCriteria) || !$this->lastNagiosServiceRelatedByEventHandlerCriteria->equals($criteria)) {
				$this->collNagiosServicesRelatedByEventHandler = NagiosServicePeer::doSelectJoinNagiosHostgroup($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceRelatedByEventHandlerCriteria = $criteria;

		return $this->collNagiosServicesRelatedByEventHandler;
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
	 */
	public function getNagiosServicesRelatedByEventHandlerJoinNagiosTimeperiodRelatedByCheckPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServicesRelatedByEventHandler === null) {
			if ($this->isNew()) {
				$this->collNagiosServicesRelatedByEventHandler = array();
			} else {

				$criteria->add(NagiosServicePeer::EVENT_HANDLER, $this->id);

				$this->collNagiosServicesRelatedByEventHandler = NagiosServicePeer::doSelectJoinNagiosTimeperiodRelatedByCheckPeriod($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServicePeer::EVENT_HANDLER, $this->id);

			if (!isset($this->lastNagiosServiceRelatedByEventHandlerCriteria) || !$this->lastNagiosServiceRelatedByEventHandlerCriteria->equals($criteria)) {
				$this->collNagiosServicesRelatedByEventHandler = NagiosServicePeer::doSelectJoinNagiosTimeperiodRelatedByCheckPeriod($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceRelatedByEventHandlerCriteria = $criteria;

		return $this->collNagiosServicesRelatedByEventHandler;
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
	 */
	public function getNagiosServicesRelatedByEventHandlerJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServicesRelatedByEventHandler === null) {
			if ($this->isNew()) {
				$this->collNagiosServicesRelatedByEventHandler = array();
			} else {

				$criteria->add(NagiosServicePeer::EVENT_HANDLER, $this->id);

				$this->collNagiosServicesRelatedByEventHandler = NagiosServicePeer::doSelectJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServicePeer::EVENT_HANDLER, $this->id);

			if (!isset($this->lastNagiosServiceRelatedByEventHandlerCriteria) || !$this->lastNagiosServiceRelatedByEventHandlerCriteria->equals($criteria)) {
				$this->collNagiosServicesRelatedByEventHandler = NagiosServicePeer::doSelectJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceRelatedByEventHandlerCriteria = $criteria;

		return $this->collNagiosServicesRelatedByEventHandler;
	}

	/**
	 * Clears out the collNagiosMainConfigurationsRelatedByOcspCommand collection (array).
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
	 * Initializes the collNagiosMainConfigurationsRelatedByOcspCommand collection (array).
	 *
	 * By default this just sets the collNagiosMainConfigurationsRelatedByOcspCommand collection to an empty array (like clearcollNagiosMainConfigurationsRelatedByOcspCommand());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosMainConfigurationsRelatedByOcspCommand()
	{
		$this->collNagiosMainConfigurationsRelatedByOcspCommand = array();
	}

	/**
	 * Gets an array of NagiosMainConfiguration objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosCommand has previously been saved, it will retrieve
	 * related NagiosMainConfigurationsRelatedByOcspCommand from storage. If this NagiosCommand is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosMainConfiguration[]
	 * @throws     PropelException
	 */
	public function getNagiosMainConfigurationsRelatedByOcspCommand($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosMainConfigurationsRelatedByOcspCommand === null) {
			if ($this->isNew()) {
			   $this->collNagiosMainConfigurationsRelatedByOcspCommand = array();
			} else {

				$criteria->add(NagiosMainConfigurationPeer::OCSP_COMMAND, $this->id);

				NagiosMainConfigurationPeer::addSelectColumns($criteria);
				$this->collNagiosMainConfigurationsRelatedByOcspCommand = NagiosMainConfigurationPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosMainConfigurationPeer::OCSP_COMMAND, $this->id);

				NagiosMainConfigurationPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosMainConfigurationRelatedByOcspCommandCriteria) || !$this->lastNagiosMainConfigurationRelatedByOcspCommandCriteria->equals($criteria)) {
					$this->collNagiosMainConfigurationsRelatedByOcspCommand = NagiosMainConfigurationPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosMainConfigurationRelatedByOcspCommandCriteria = $criteria;
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
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosMainConfigurationsRelatedByOcspCommand === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosMainConfigurationPeer::OCSP_COMMAND, $this->id);

				$count = NagiosMainConfigurationPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosMainConfigurationPeer::OCSP_COMMAND, $this->id);

				if (!isset($this->lastNagiosMainConfigurationRelatedByOcspCommandCriteria) || !$this->lastNagiosMainConfigurationRelatedByOcspCommandCriteria->equals($criteria)) {
					$count = NagiosMainConfigurationPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosMainConfigurationsRelatedByOcspCommand);
				}
			} else {
				$count = count($this->collNagiosMainConfigurationsRelatedByOcspCommand);
			}
		}
		return $count;
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
		if (!in_array($l, $this->collNagiosMainConfigurationsRelatedByOcspCommand, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosMainConfigurationsRelatedByOcspCommand, $l);
			$l->setNagiosCommandRelatedByOcspCommand($this);
		}
	}

	/**
	 * Clears out the collNagiosMainConfigurationsRelatedByOchpCommand collection (array).
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
	 * Initializes the collNagiosMainConfigurationsRelatedByOchpCommand collection (array).
	 *
	 * By default this just sets the collNagiosMainConfigurationsRelatedByOchpCommand collection to an empty array (like clearcollNagiosMainConfigurationsRelatedByOchpCommand());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosMainConfigurationsRelatedByOchpCommand()
	{
		$this->collNagiosMainConfigurationsRelatedByOchpCommand = array();
	}

	/**
	 * Gets an array of NagiosMainConfiguration objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosCommand has previously been saved, it will retrieve
	 * related NagiosMainConfigurationsRelatedByOchpCommand from storage. If this NagiosCommand is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosMainConfiguration[]
	 * @throws     PropelException
	 */
	public function getNagiosMainConfigurationsRelatedByOchpCommand($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosMainConfigurationsRelatedByOchpCommand === null) {
			if ($this->isNew()) {
			   $this->collNagiosMainConfigurationsRelatedByOchpCommand = array();
			} else {

				$criteria->add(NagiosMainConfigurationPeer::OCHP_COMMAND, $this->id);

				NagiosMainConfigurationPeer::addSelectColumns($criteria);
				$this->collNagiosMainConfigurationsRelatedByOchpCommand = NagiosMainConfigurationPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosMainConfigurationPeer::OCHP_COMMAND, $this->id);

				NagiosMainConfigurationPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosMainConfigurationRelatedByOchpCommandCriteria) || !$this->lastNagiosMainConfigurationRelatedByOchpCommandCriteria->equals($criteria)) {
					$this->collNagiosMainConfigurationsRelatedByOchpCommand = NagiosMainConfigurationPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosMainConfigurationRelatedByOchpCommandCriteria = $criteria;
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
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosMainConfigurationsRelatedByOchpCommand === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosMainConfigurationPeer::OCHP_COMMAND, $this->id);

				$count = NagiosMainConfigurationPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosMainConfigurationPeer::OCHP_COMMAND, $this->id);

				if (!isset($this->lastNagiosMainConfigurationRelatedByOchpCommandCriteria) || !$this->lastNagiosMainConfigurationRelatedByOchpCommandCriteria->equals($criteria)) {
					$count = NagiosMainConfigurationPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosMainConfigurationsRelatedByOchpCommand);
				}
			} else {
				$count = count($this->collNagiosMainConfigurationsRelatedByOchpCommand);
			}
		}
		return $count;
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
		if (!in_array($l, $this->collNagiosMainConfigurationsRelatedByOchpCommand, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosMainConfigurationsRelatedByOchpCommand, $l);
			$l->setNagiosCommandRelatedByOchpCommand($this);
		}
	}

	/**
	 * Clears out the collNagiosMainConfigurationsRelatedByHostPerfdataCommand collection (array).
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
	 * Initializes the collNagiosMainConfigurationsRelatedByHostPerfdataCommand collection (array).
	 *
	 * By default this just sets the collNagiosMainConfigurationsRelatedByHostPerfdataCommand collection to an empty array (like clearcollNagiosMainConfigurationsRelatedByHostPerfdataCommand());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosMainConfigurationsRelatedByHostPerfdataCommand()
	{
		$this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand = array();
	}

	/**
	 * Gets an array of NagiosMainConfiguration objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosCommand has previously been saved, it will retrieve
	 * related NagiosMainConfigurationsRelatedByHostPerfdataCommand from storage. If this NagiosCommand is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosMainConfiguration[]
	 * @throws     PropelException
	 */
	public function getNagiosMainConfigurationsRelatedByHostPerfdataCommand($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand === null) {
			if ($this->isNew()) {
			   $this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand = array();
			} else {

				$criteria->add(NagiosMainConfigurationPeer::HOST_PERFDATA_COMMAND, $this->id);

				NagiosMainConfigurationPeer::addSelectColumns($criteria);
				$this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand = NagiosMainConfigurationPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosMainConfigurationPeer::HOST_PERFDATA_COMMAND, $this->id);

				NagiosMainConfigurationPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosMainConfigurationRelatedByHostPerfdataCommandCriteria) || !$this->lastNagiosMainConfigurationRelatedByHostPerfdataCommandCriteria->equals($criteria)) {
					$this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand = NagiosMainConfigurationPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosMainConfigurationRelatedByHostPerfdataCommandCriteria = $criteria;
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
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosMainConfigurationPeer::HOST_PERFDATA_COMMAND, $this->id);

				$count = NagiosMainConfigurationPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosMainConfigurationPeer::HOST_PERFDATA_COMMAND, $this->id);

				if (!isset($this->lastNagiosMainConfigurationRelatedByHostPerfdataCommandCriteria) || !$this->lastNagiosMainConfigurationRelatedByHostPerfdataCommandCriteria->equals($criteria)) {
					$count = NagiosMainConfigurationPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand);
				}
			} else {
				$count = count($this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand);
			}
		}
		return $count;
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
		if (!in_array($l, $this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand, $l);
			$l->setNagiosCommandRelatedByHostPerfdataCommand($this);
		}
	}

	/**
	 * Clears out the collNagiosMainConfigurationsRelatedByServicePerfdataCommand collection (array).
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
	 * Initializes the collNagiosMainConfigurationsRelatedByServicePerfdataCommand collection (array).
	 *
	 * By default this just sets the collNagiosMainConfigurationsRelatedByServicePerfdataCommand collection to an empty array (like clearcollNagiosMainConfigurationsRelatedByServicePerfdataCommand());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosMainConfigurationsRelatedByServicePerfdataCommand()
	{
		$this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand = array();
	}

	/**
	 * Gets an array of NagiosMainConfiguration objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosCommand has previously been saved, it will retrieve
	 * related NagiosMainConfigurationsRelatedByServicePerfdataCommand from storage. If this NagiosCommand is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosMainConfiguration[]
	 * @throws     PropelException
	 */
	public function getNagiosMainConfigurationsRelatedByServicePerfdataCommand($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand === null) {
			if ($this->isNew()) {
			   $this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand = array();
			} else {

				$criteria->add(NagiosMainConfigurationPeer::SERVICE_PERFDATA_COMMAND, $this->id);

				NagiosMainConfigurationPeer::addSelectColumns($criteria);
				$this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand = NagiosMainConfigurationPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosMainConfigurationPeer::SERVICE_PERFDATA_COMMAND, $this->id);

				NagiosMainConfigurationPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosMainConfigurationRelatedByServicePerfdataCommandCriteria) || !$this->lastNagiosMainConfigurationRelatedByServicePerfdataCommandCriteria->equals($criteria)) {
					$this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand = NagiosMainConfigurationPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosMainConfigurationRelatedByServicePerfdataCommandCriteria = $criteria;
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
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosMainConfigurationPeer::SERVICE_PERFDATA_COMMAND, $this->id);

				$count = NagiosMainConfigurationPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosMainConfigurationPeer::SERVICE_PERFDATA_COMMAND, $this->id);

				if (!isset($this->lastNagiosMainConfigurationRelatedByServicePerfdataCommandCriteria) || !$this->lastNagiosMainConfigurationRelatedByServicePerfdataCommandCriteria->equals($criteria)) {
					$count = NagiosMainConfigurationPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand);
				}
			} else {
				$count = count($this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand);
			}
		}
		return $count;
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
		if (!in_array($l, $this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand, $l);
			$l->setNagiosCommandRelatedByServicePerfdataCommand($this);
		}
	}

	/**
	 * Clears out the collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand collection (array).
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
	 * Initializes the collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand collection (array).
	 *
	 * By default this just sets the collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand collection to an empty array (like clearcollNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand()
	{
		$this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand = array();
	}

	/**
	 * Gets an array of NagiosMainConfiguration objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosCommand has previously been saved, it will retrieve
	 * related NagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand from storage. If this NagiosCommand is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosMainConfiguration[]
	 * @throws     PropelException
	 */
	public function getNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand === null) {
			if ($this->isNew()) {
			   $this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand = array();
			} else {

				$criteria->add(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_PROCESSING_COMMAND, $this->id);

				NagiosMainConfigurationPeer::addSelectColumns($criteria);
				$this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand = NagiosMainConfigurationPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_PROCESSING_COMMAND, $this->id);

				NagiosMainConfigurationPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosMainConfigurationRelatedByHostPerfdataFileProcessingCommandCriteria) || !$this->lastNagiosMainConfigurationRelatedByHostPerfdataFileProcessingCommandCriteria->equals($criteria)) {
					$this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand = NagiosMainConfigurationPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosMainConfigurationRelatedByHostPerfdataFileProcessingCommandCriteria = $criteria;
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
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_PROCESSING_COMMAND, $this->id);

				$count = NagiosMainConfigurationPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_PROCESSING_COMMAND, $this->id);

				if (!isset($this->lastNagiosMainConfigurationRelatedByHostPerfdataFileProcessingCommandCriteria) || !$this->lastNagiosMainConfigurationRelatedByHostPerfdataFileProcessingCommandCriteria->equals($criteria)) {
					$count = NagiosMainConfigurationPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand);
				}
			} else {
				$count = count($this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand);
			}
		}
		return $count;
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
		if (!in_array($l, $this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand, $l);
			$l->setNagiosCommandRelatedByHostPerfdataFileProcessingCommand($this);
		}
	}

	/**
	 * Clears out the collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand collection (array).
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
	 * Initializes the collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand collection (array).
	 *
	 * By default this just sets the collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand collection to an empty array (like clearcollNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand()
	{
		$this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand = array();
	}

	/**
	 * Gets an array of NagiosMainConfiguration objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosCommand has previously been saved, it will retrieve
	 * related NagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand from storage. If this NagiosCommand is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosMainConfiguration[]
	 * @throws     PropelException
	 */
	public function getNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand === null) {
			if ($this->isNew()) {
			   $this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand = array();
			} else {

				$criteria->add(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_PROCESSING_COMMAND, $this->id);

				NagiosMainConfigurationPeer::addSelectColumns($criteria);
				$this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand = NagiosMainConfigurationPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_PROCESSING_COMMAND, $this->id);

				NagiosMainConfigurationPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosMainConfigurationRelatedByServicePerfdataFileProcessingCommandCriteria) || !$this->lastNagiosMainConfigurationRelatedByServicePerfdataFileProcessingCommandCriteria->equals($criteria)) {
					$this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand = NagiosMainConfigurationPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosMainConfigurationRelatedByServicePerfdataFileProcessingCommandCriteria = $criteria;
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
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_PROCESSING_COMMAND, $this->id);

				$count = NagiosMainConfigurationPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_PROCESSING_COMMAND, $this->id);

				if (!isset($this->lastNagiosMainConfigurationRelatedByServicePerfdataFileProcessingCommandCriteria) || !$this->lastNagiosMainConfigurationRelatedByServicePerfdataFileProcessingCommandCriteria->equals($criteria)) {
					$count = NagiosMainConfigurationPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand);
				}
			} else {
				$count = count($this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand);
			}
		}
		return $count;
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
		if (!in_array($l, $this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand, $l);
			$l->setNagiosCommandRelatedByServicePerfdataFileProcessingCommand($this);
		}
	}

	/**
	 * Clears out the collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler collection (array).
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
	 * Initializes the collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler collection (array).
	 *
	 * By default this just sets the collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler collection to an empty array (like clearcollNagiosMainConfigurationsRelatedByGlobalServiceEventHandler());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosMainConfigurationsRelatedByGlobalServiceEventHandler()
	{
		$this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler = array();
	}

	/**
	 * Gets an array of NagiosMainConfiguration objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosCommand has previously been saved, it will retrieve
	 * related NagiosMainConfigurationsRelatedByGlobalServiceEventHandler from storage. If this NagiosCommand is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosMainConfiguration[]
	 * @throws     PropelException
	 */
	public function getNagiosMainConfigurationsRelatedByGlobalServiceEventHandler($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler === null) {
			if ($this->isNew()) {
			   $this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler = array();
			} else {

				$criteria->add(NagiosMainConfigurationPeer::GLOBAL_SERVICE_EVENT_HANDLER, $this->id);

				NagiosMainConfigurationPeer::addSelectColumns($criteria);
				$this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler = NagiosMainConfigurationPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosMainConfigurationPeer::GLOBAL_SERVICE_EVENT_HANDLER, $this->id);

				NagiosMainConfigurationPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosMainConfigurationRelatedByGlobalServiceEventHandlerCriteria) || !$this->lastNagiosMainConfigurationRelatedByGlobalServiceEventHandlerCriteria->equals($criteria)) {
					$this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler = NagiosMainConfigurationPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosMainConfigurationRelatedByGlobalServiceEventHandlerCriteria = $criteria;
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
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosMainConfigurationPeer::GLOBAL_SERVICE_EVENT_HANDLER, $this->id);

				$count = NagiosMainConfigurationPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosMainConfigurationPeer::GLOBAL_SERVICE_EVENT_HANDLER, $this->id);

				if (!isset($this->lastNagiosMainConfigurationRelatedByGlobalServiceEventHandlerCriteria) || !$this->lastNagiosMainConfigurationRelatedByGlobalServiceEventHandlerCriteria->equals($criteria)) {
					$count = NagiosMainConfigurationPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler);
				}
			} else {
				$count = count($this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler);
			}
		}
		return $count;
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
		if (!in_array($l, $this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler, $l);
			$l->setNagiosCommandRelatedByGlobalServiceEventHandler($this);
		}
	}

	/**
	 * Clears out the collNagiosMainConfigurationsRelatedByGlobalHostEventHandler collection (array).
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
	 * Initializes the collNagiosMainConfigurationsRelatedByGlobalHostEventHandler collection (array).
	 *
	 * By default this just sets the collNagiosMainConfigurationsRelatedByGlobalHostEventHandler collection to an empty array (like clearcollNagiosMainConfigurationsRelatedByGlobalHostEventHandler());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosMainConfigurationsRelatedByGlobalHostEventHandler()
	{
		$this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler = array();
	}

	/**
	 * Gets an array of NagiosMainConfiguration objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosCommand has previously been saved, it will retrieve
	 * related NagiosMainConfigurationsRelatedByGlobalHostEventHandler from storage. If this NagiosCommand is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosMainConfiguration[]
	 * @throws     PropelException
	 */
	public function getNagiosMainConfigurationsRelatedByGlobalHostEventHandler($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler === null) {
			if ($this->isNew()) {
			   $this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler = array();
			} else {

				$criteria->add(NagiosMainConfigurationPeer::GLOBAL_HOST_EVENT_HANDLER, $this->id);

				NagiosMainConfigurationPeer::addSelectColumns($criteria);
				$this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler = NagiosMainConfigurationPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosMainConfigurationPeer::GLOBAL_HOST_EVENT_HANDLER, $this->id);

				NagiosMainConfigurationPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosMainConfigurationRelatedByGlobalHostEventHandlerCriteria) || !$this->lastNagiosMainConfigurationRelatedByGlobalHostEventHandlerCriteria->equals($criteria)) {
					$this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler = NagiosMainConfigurationPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosMainConfigurationRelatedByGlobalHostEventHandlerCriteria = $criteria;
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
		if ($criteria === null) {
			$criteria = new Criteria(NagiosCommandPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosMainConfigurationPeer::GLOBAL_HOST_EVENT_HANDLER, $this->id);

				$count = NagiosMainConfigurationPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosMainConfigurationPeer::GLOBAL_HOST_EVENT_HANDLER, $this->id);

				if (!isset($this->lastNagiosMainConfigurationRelatedByGlobalHostEventHandlerCriteria) || !$this->lastNagiosMainConfigurationRelatedByGlobalHostEventHandlerCriteria->equals($criteria)) {
					$count = NagiosMainConfigurationPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler);
				}
			} else {
				$count = count($this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler);
			}
		}
		return $count;
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
		if (!in_array($l, $this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler, $l);
			$l->setNagiosCommandRelatedByGlobalHostEventHandler($this);
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
			if ($this->collNagiosContactNotificationCommands) {
				foreach ((array) $this->collNagiosContactNotificationCommands as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosHostTemplatesRelatedByCheckCommand) {
				foreach ((array) $this->collNagiosHostTemplatesRelatedByCheckCommand as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosHostTemplatesRelatedByEventHandler) {
				foreach ((array) $this->collNagiosHostTemplatesRelatedByEventHandler as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosHostsRelatedByCheckCommand) {
				foreach ((array) $this->collNagiosHostsRelatedByCheckCommand as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosHostsRelatedByEventHandler) {
				foreach ((array) $this->collNagiosHostsRelatedByEventHandler as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosServiceTemplatesRelatedByCheckCommand) {
				foreach ((array) $this->collNagiosServiceTemplatesRelatedByCheckCommand as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosServiceTemplatesRelatedByEventHandler) {
				foreach ((array) $this->collNagiosServiceTemplatesRelatedByEventHandler as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosServicesRelatedByCheckCommand) {
				foreach ((array) $this->collNagiosServicesRelatedByCheckCommand as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosServicesRelatedByEventHandler) {
				foreach ((array) $this->collNagiosServicesRelatedByEventHandler as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosMainConfigurationsRelatedByOcspCommand) {
				foreach ((array) $this->collNagiosMainConfigurationsRelatedByOcspCommand as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosMainConfigurationsRelatedByOchpCommand) {
				foreach ((array) $this->collNagiosMainConfigurationsRelatedByOchpCommand as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand) {
				foreach ((array) $this->collNagiosMainConfigurationsRelatedByHostPerfdataCommand as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand) {
				foreach ((array) $this->collNagiosMainConfigurationsRelatedByServicePerfdataCommand as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand) {
				foreach ((array) $this->collNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand) {
				foreach ((array) $this->collNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler) {
				foreach ((array) $this->collNagiosMainConfigurationsRelatedByGlobalServiceEventHandler as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler) {
				foreach ((array) $this->collNagiosMainConfigurationsRelatedByGlobalHostEventHandler as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

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
	}

} // BaseNagiosCommand
