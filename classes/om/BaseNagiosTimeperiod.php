<?php

/**
 * Base class that represents a row from the 'nagios_timeperiod' table.
 *
 * Nagios Timeperiods
 *
 * @package    .om
 */
abstract class BaseNagiosTimeperiod extends BaseObject  implements Persistent {


	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        NagiosTimeperiodPeer
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
	 * @var        array NagiosTimeperiodEntry[] Collection to store aggregation of NagiosTimeperiodEntry objects.
	 */
	protected $collNagiosTimeperiodEntrys;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosTimeperiodEntrys.
	 */
	private $lastNagiosTimeperiodEntryCriteria = null;

	/**
	 * @var        array NagiosTimeperiodExclude[] Collection to store aggregation of NagiosTimeperiodExclude objects.
	 */
	protected $collNagiosTimeperiodExcludesRelatedByTimeperiodId;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosTimeperiodExcludesRelatedByTimeperiodId.
	 */
	private $lastNagiosTimeperiodExcludeRelatedByTimeperiodIdCriteria = null;

	/**
	 * @var        array NagiosTimeperiodExclude[] Collection to store aggregation of NagiosTimeperiodExclude objects.
	 */
	protected $collNagiosTimeperiodExcludesRelatedByExcludedTimeperiod;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosTimeperiodExcludesRelatedByExcludedTimeperiod.
	 */
	private $lastNagiosTimeperiodExcludeRelatedByExcludedTimeperiodCriteria = null;

	/**
	 * @var        array NagiosContact[] Collection to store aggregation of NagiosContact objects.
	 */
	protected $collNagiosContactsRelatedByHostNotificationPeriod;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosContactsRelatedByHostNotificationPeriod.
	 */
	private $lastNagiosContactRelatedByHostNotificationPeriodCriteria = null;

	/**
	 * @var        array NagiosContact[] Collection to store aggregation of NagiosContact objects.
	 */
	protected $collNagiosContactsRelatedByServiceNotificationPeriod;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosContactsRelatedByServiceNotificationPeriod.
	 */
	private $lastNagiosContactRelatedByServiceNotificationPeriodCriteria = null;

	/**
	 * @var        array NagiosHostTemplate[] Collection to store aggregation of NagiosHostTemplate objects.
	 */
	protected $collNagiosHostTemplatesRelatedByCheckPeriod;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosHostTemplatesRelatedByCheckPeriod.
	 */
	private $lastNagiosHostTemplateRelatedByCheckPeriodCriteria = null;

	/**
	 * @var        array NagiosHostTemplate[] Collection to store aggregation of NagiosHostTemplate objects.
	 */
	protected $collNagiosHostTemplatesRelatedByNotificationPeriod;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosHostTemplatesRelatedByNotificationPeriod.
	 */
	private $lastNagiosHostTemplateRelatedByNotificationPeriodCriteria = null;

	/**
	 * @var        array NagiosHost[] Collection to store aggregation of NagiosHost objects.
	 */
	protected $collNagiosHostsRelatedByCheckPeriod;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosHostsRelatedByCheckPeriod.
	 */
	private $lastNagiosHostRelatedByCheckPeriodCriteria = null;

	/**
	 * @var        array NagiosHost[] Collection to store aggregation of NagiosHost objects.
	 */
	protected $collNagiosHostsRelatedByNotificationPeriod;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosHostsRelatedByNotificationPeriod.
	 */
	private $lastNagiosHostRelatedByNotificationPeriodCriteria = null;

	/**
	 * @var        array NagiosServiceTemplate[] Collection to store aggregation of NagiosServiceTemplate objects.
	 */
	protected $collNagiosServiceTemplatesRelatedByCheckPeriod;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosServiceTemplatesRelatedByCheckPeriod.
	 */
	private $lastNagiosServiceTemplateRelatedByCheckPeriodCriteria = null;

	/**
	 * @var        array NagiosServiceTemplate[] Collection to store aggregation of NagiosServiceTemplate objects.
	 */
	protected $collNagiosServiceTemplatesRelatedByNotificationPeriod;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosServiceTemplatesRelatedByNotificationPeriod.
	 */
	private $lastNagiosServiceTemplateRelatedByNotificationPeriodCriteria = null;

	/**
	 * @var        array NagiosService[] Collection to store aggregation of NagiosService objects.
	 */
	protected $collNagiosServicesRelatedByCheckPeriod;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosServicesRelatedByCheckPeriod.
	 */
	private $lastNagiosServiceRelatedByCheckPeriodCriteria = null;

	/**
	 * @var        array NagiosService[] Collection to store aggregation of NagiosService objects.
	 */
	protected $collNagiosServicesRelatedByNotificationPeriod;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosServicesRelatedByNotificationPeriod.
	 */
	private $lastNagiosServiceRelatedByNotificationPeriodCriteria = null;

	/**
	 * @var        array NagiosDependency[] Collection to store aggregation of NagiosDependency objects.
	 */
	protected $collNagiosDependencys;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosDependencys.
	 */
	private $lastNagiosDependencyCriteria = null;

	/**
	 * @var        array NagiosEscalation[] Collection to store aggregation of NagiosEscalation objects.
	 */
	protected $collNagiosEscalations;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosEscalations.
	 */
	private $lastNagiosEscalationCriteria = null;

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
	 * Initializes internal state of BaseNagiosTimeperiod object.
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
	 * Get the [alias] column value.
	 * 
	 * @return     string
	 */
	public function getAlias()
	{
		return $this->alias;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosTimeperiod The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = NagiosTimeperiodPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosTimeperiod The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = NagiosTimeperiodPeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Set the value of [alias] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosTimeperiod The current object (for fluent API support)
	 */
	public function setAlias($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->alias !== $v) {
			$this->alias = $v;
			$this->modifiedColumns[] = NagiosTimeperiodPeer::ALIAS;
		}

		return $this;
	} // setAlias()

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
			$this->alias = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 3; // 3 = NagiosTimeperiodPeer::NUM_COLUMNS - NagiosTimeperiodPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating NagiosTimeperiod object", $e);
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
			$con = Propel::getConnection(NagiosTimeperiodPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = NagiosTimeperiodPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->collNagiosTimeperiodEntrys = null;
			$this->lastNagiosTimeperiodEntryCriteria = null;

			$this->collNagiosTimeperiodExcludesRelatedByTimeperiodId = null;
			$this->lastNagiosTimeperiodExcludeRelatedByTimeperiodIdCriteria = null;

			$this->collNagiosTimeperiodExcludesRelatedByExcludedTimeperiod = null;
			$this->lastNagiosTimeperiodExcludeRelatedByExcludedTimeperiodCriteria = null;

			$this->collNagiosContactsRelatedByHostNotificationPeriod = null;
			$this->lastNagiosContactRelatedByHostNotificationPeriodCriteria = null;

			$this->collNagiosContactsRelatedByServiceNotificationPeriod = null;
			$this->lastNagiosContactRelatedByServiceNotificationPeriodCriteria = null;

			$this->collNagiosHostTemplatesRelatedByCheckPeriod = null;
			$this->lastNagiosHostTemplateRelatedByCheckPeriodCriteria = null;

			$this->collNagiosHostTemplatesRelatedByNotificationPeriod = null;
			$this->lastNagiosHostTemplateRelatedByNotificationPeriodCriteria = null;

			$this->collNagiosHostsRelatedByCheckPeriod = null;
			$this->lastNagiosHostRelatedByCheckPeriodCriteria = null;

			$this->collNagiosHostsRelatedByNotificationPeriod = null;
			$this->lastNagiosHostRelatedByNotificationPeriodCriteria = null;

			$this->collNagiosServiceTemplatesRelatedByCheckPeriod = null;
			$this->lastNagiosServiceTemplateRelatedByCheckPeriodCriteria = null;

			$this->collNagiosServiceTemplatesRelatedByNotificationPeriod = null;
			$this->lastNagiosServiceTemplateRelatedByNotificationPeriodCriteria = null;

			$this->collNagiosServicesRelatedByCheckPeriod = null;
			$this->lastNagiosServiceRelatedByCheckPeriodCriteria = null;

			$this->collNagiosServicesRelatedByNotificationPeriod = null;
			$this->lastNagiosServiceRelatedByNotificationPeriodCriteria = null;

			$this->collNagiosDependencys = null;
			$this->lastNagiosDependencyCriteria = null;

			$this->collNagiosEscalations = null;
			$this->lastNagiosEscalationCriteria = null;

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
			$con = Propel::getConnection(NagiosTimeperiodPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			NagiosTimeperiodPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(NagiosTimeperiodPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$affectedRows = $this->doSave($con);
			$con->commit();
			NagiosTimeperiodPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = NagiosTimeperiodPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = NagiosTimeperiodPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += NagiosTimeperiodPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collNagiosTimeperiodEntrys !== null) {
				foreach ($this->collNagiosTimeperiodEntrys as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosTimeperiodExcludesRelatedByTimeperiodId !== null) {
				foreach ($this->collNagiosTimeperiodExcludesRelatedByTimeperiodId as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosTimeperiodExcludesRelatedByExcludedTimeperiod !== null) {
				foreach ($this->collNagiosTimeperiodExcludesRelatedByExcludedTimeperiod as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosContactsRelatedByHostNotificationPeriod !== null) {
				foreach ($this->collNagiosContactsRelatedByHostNotificationPeriod as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosContactsRelatedByServiceNotificationPeriod !== null) {
				foreach ($this->collNagiosContactsRelatedByServiceNotificationPeriod as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosHostTemplatesRelatedByCheckPeriod !== null) {
				foreach ($this->collNagiosHostTemplatesRelatedByCheckPeriod as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosHostTemplatesRelatedByNotificationPeriod !== null) {
				foreach ($this->collNagiosHostTemplatesRelatedByNotificationPeriod as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosHostsRelatedByCheckPeriod !== null) {
				foreach ($this->collNagiosHostsRelatedByCheckPeriod as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosHostsRelatedByNotificationPeriod !== null) {
				foreach ($this->collNagiosHostsRelatedByNotificationPeriod as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosServiceTemplatesRelatedByCheckPeriod !== null) {
				foreach ($this->collNagiosServiceTemplatesRelatedByCheckPeriod as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosServiceTemplatesRelatedByNotificationPeriod !== null) {
				foreach ($this->collNagiosServiceTemplatesRelatedByNotificationPeriod as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosServicesRelatedByCheckPeriod !== null) {
				foreach ($this->collNagiosServicesRelatedByCheckPeriod as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosServicesRelatedByNotificationPeriod !== null) {
				foreach ($this->collNagiosServicesRelatedByNotificationPeriod as $referrerFK) {
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

			if ($this->collNagiosEscalations !== null) {
				foreach ($this->collNagiosEscalations as $referrerFK) {
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


			if (($retval = NagiosTimeperiodPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collNagiosTimeperiodEntrys !== null) {
					foreach ($this->collNagiosTimeperiodEntrys as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosTimeperiodExcludesRelatedByTimeperiodId !== null) {
					foreach ($this->collNagiosTimeperiodExcludesRelatedByTimeperiodId as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosTimeperiodExcludesRelatedByExcludedTimeperiod !== null) {
					foreach ($this->collNagiosTimeperiodExcludesRelatedByExcludedTimeperiod as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosContactsRelatedByHostNotificationPeriod !== null) {
					foreach ($this->collNagiosContactsRelatedByHostNotificationPeriod as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosContactsRelatedByServiceNotificationPeriod !== null) {
					foreach ($this->collNagiosContactsRelatedByServiceNotificationPeriod as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosHostTemplatesRelatedByCheckPeriod !== null) {
					foreach ($this->collNagiosHostTemplatesRelatedByCheckPeriod as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosHostTemplatesRelatedByNotificationPeriod !== null) {
					foreach ($this->collNagiosHostTemplatesRelatedByNotificationPeriod as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosHostsRelatedByCheckPeriod !== null) {
					foreach ($this->collNagiosHostsRelatedByCheckPeriod as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosHostsRelatedByNotificationPeriod !== null) {
					foreach ($this->collNagiosHostsRelatedByNotificationPeriod as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosServiceTemplatesRelatedByCheckPeriod !== null) {
					foreach ($this->collNagiosServiceTemplatesRelatedByCheckPeriod as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosServiceTemplatesRelatedByNotificationPeriod !== null) {
					foreach ($this->collNagiosServiceTemplatesRelatedByNotificationPeriod as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosServicesRelatedByCheckPeriod !== null) {
					foreach ($this->collNagiosServicesRelatedByCheckPeriod as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosServicesRelatedByNotificationPeriod !== null) {
					foreach ($this->collNagiosServicesRelatedByNotificationPeriod as $referrerFK) {
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

				if ($this->collNagiosEscalations !== null) {
					foreach ($this->collNagiosEscalations as $referrerFK) {
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
		$pos = NagiosTimeperiodPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
		$keys = NagiosTimeperiodPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
			$keys[2] => $this->getAlias(),
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
		$pos = NagiosTimeperiodPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
		$keys = NagiosTimeperiodPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setAlias($arr[$keys[2]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);

		if ($this->isColumnModified(NagiosTimeperiodPeer::ID)) $criteria->add(NagiosTimeperiodPeer::ID, $this->id);
		if ($this->isColumnModified(NagiosTimeperiodPeer::NAME)) $criteria->add(NagiosTimeperiodPeer::NAME, $this->name);
		if ($this->isColumnModified(NagiosTimeperiodPeer::ALIAS)) $criteria->add(NagiosTimeperiodPeer::ALIAS, $this->alias);

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
		$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);

		$criteria->add(NagiosTimeperiodPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of NagiosTimeperiod (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setName($this->name);

		$copyObj->setAlias($this->alias);


		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getNagiosTimeperiodEntrys() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosTimeperiodEntry($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosTimeperiodExcludesRelatedByTimeperiodId() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosTimeperiodExcludeRelatedByTimeperiodId($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosTimeperiodExcludesRelatedByExcludedTimeperiod() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosTimeperiodExcludeRelatedByExcludedTimeperiod($relObj->copy($deepCopy));
				}
			}

			/*foreach ($this->getNagiosContactsRelatedByHostNotificationPeriod() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					//$copyObj->addNagiosContactRelatedByHostNotificationPeriod($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosContactsRelatedByServiceNotificationPeriod() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					//$copyObj->addNagiosContactRelatedByServiceNotificationPeriod($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosHostTemplatesRelatedByCheckPeriod() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					//$copyObj->addNagiosHostTemplateRelatedByCheckPeriod($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosHostTemplatesRelatedByNotificationPeriod() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					//$copyObj->addNagiosHostTemplateRelatedByNotificationPeriod($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosHostsRelatedByCheckPeriod() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					//$copyObj->addNagiosHostRelatedByCheckPeriod($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosHostsRelatedByNotificationPeriod() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					//$copyObj->addNagiosHostRelatedByNotificationPeriod($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosServiceTemplatesRelatedByCheckPeriod() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					//$copyObj->addNagiosServiceTemplateRelatedByCheckPeriod($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosServiceTemplatesRelatedByNotificationPeriod() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					//$copyObj->addNagiosServiceTemplateRelatedByNotificationPeriod($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosServicesRelatedByCheckPeriod() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					//$copyObj->addNagiosServiceRelatedByCheckPeriod($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosServicesRelatedByNotificationPeriod() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					//$copyObj->addNagiosServiceRelatedByNotificationPeriod($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosDependencys() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					//$copyObj->addNagiosDependency($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosEscalations() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					//$copyObj->addNagiosEscalation($relObj->copy($deepCopy));
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
	 * @return     NagiosTimeperiod Clone of current object.
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
	 * @return     NagiosTimeperiodPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new NagiosTimeperiodPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears out the collNagiosTimeperiodEntrys collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosTimeperiodEntrys()
	 */
	public function clearNagiosTimeperiodEntrys()
	{
		$this->collNagiosTimeperiodEntrys = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosTimeperiodEntrys collection (array).
	 *
	 * By default this just sets the collNagiosTimeperiodEntrys collection to an empty array (like clearcollNagiosTimeperiodEntrys());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosTimeperiodEntrys()
	{
		$this->collNagiosTimeperiodEntrys = array();
	}

	/**
	 * Gets an array of NagiosTimeperiodEntry objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod has previously been saved, it will retrieve
	 * related NagiosTimeperiodEntrys from storage. If this NagiosTimeperiod is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosTimeperiodEntry[]
	 * @throws     PropelException
	 */
	public function getNagiosTimeperiodEntrys($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosTimeperiodEntrys === null) {
			if ($this->isNew()) {
			   $this->collNagiosTimeperiodEntrys = array();
			} else {

				$criteria->add(NagiosTimeperiodEntryPeer::TIMEPERIOD_ID, $this->id);

				NagiosTimeperiodEntryPeer::addSelectColumns($criteria);
				$this->collNagiosTimeperiodEntrys = NagiosTimeperiodEntryPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosTimeperiodEntryPeer::TIMEPERIOD_ID, $this->id);

				NagiosTimeperiodEntryPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosTimeperiodEntryCriteria) || !$this->lastNagiosTimeperiodEntryCriteria->equals($criteria)) {
					$this->collNagiosTimeperiodEntrys = NagiosTimeperiodEntryPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosTimeperiodEntryCriteria = $criteria;
		return $this->collNagiosTimeperiodEntrys;
	}

	/**
	 * Returns the number of related NagiosTimeperiodEntry objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosTimeperiodEntry objects.
	 * @throws     PropelException
	 */
	public function countNagiosTimeperiodEntrys(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosTimeperiodEntrys === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosTimeperiodEntryPeer::TIMEPERIOD_ID, $this->id);

				$count = NagiosTimeperiodEntryPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosTimeperiodEntryPeer::TIMEPERIOD_ID, $this->id);

				if (!isset($this->lastNagiosTimeperiodEntryCriteria) || !$this->lastNagiosTimeperiodEntryCriteria->equals($criteria)) {
					$count = NagiosTimeperiodEntryPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosTimeperiodEntrys);
				}
			} else {
				$count = count($this->collNagiosTimeperiodEntrys);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a NagiosTimeperiodEntry object to this object
	 * through the NagiosTimeperiodEntry foreign key attribute.
	 *
	 * @param      NagiosTimeperiodEntry $l NagiosTimeperiodEntry
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosTimeperiodEntry(NagiosTimeperiodEntry $l)
	{
		if ($this->collNagiosTimeperiodEntrys === null) {
			$this->initNagiosTimeperiodEntrys();
		}
		if (!in_array($l, $this->collNagiosTimeperiodEntrys, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosTimeperiodEntrys, $l);
			$l->setNagiosTimeperiod($this);
		}
	}

	/**
	 * Clears out the collNagiosTimeperiodExcludesRelatedByTimeperiodId collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosTimeperiodExcludesRelatedByTimeperiodId()
	 */
	public function clearNagiosTimeperiodExcludesRelatedByTimeperiodId()
	{
		$this->collNagiosTimeperiodExcludesRelatedByTimeperiodId = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosTimeperiodExcludesRelatedByTimeperiodId collection (array).
	 *
	 * By default this just sets the collNagiosTimeperiodExcludesRelatedByTimeperiodId collection to an empty array (like clearcollNagiosTimeperiodExcludesRelatedByTimeperiodId());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosTimeperiodExcludesRelatedByTimeperiodId()
	{
		$this->collNagiosTimeperiodExcludesRelatedByTimeperiodId = array();
	}

	/**
	 * Gets an array of NagiosTimeperiodExclude objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod has previously been saved, it will retrieve
	 * related NagiosTimeperiodExcludesRelatedByTimeperiodId from storage. If this NagiosTimeperiod is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosTimeperiodExclude[]
	 * @throws     PropelException
	 */
	public function getNagiosTimeperiodExcludesRelatedByTimeperiodId($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosTimeperiodExcludesRelatedByTimeperiodId === null) {
			if ($this->isNew()) {
			   $this->collNagiosTimeperiodExcludesRelatedByTimeperiodId = array();
			} else {

				$criteria->add(NagiosTimeperiodExcludePeer::TIMEPERIOD_ID, $this->id);

				NagiosTimeperiodExcludePeer::addSelectColumns($criteria);
				$this->collNagiosTimeperiodExcludesRelatedByTimeperiodId = NagiosTimeperiodExcludePeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosTimeperiodExcludePeer::TIMEPERIOD_ID, $this->id);

				NagiosTimeperiodExcludePeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosTimeperiodExcludeRelatedByTimeperiodIdCriteria) || !$this->lastNagiosTimeperiodExcludeRelatedByTimeperiodIdCriteria->equals($criteria)) {
					$this->collNagiosTimeperiodExcludesRelatedByTimeperiodId = NagiosTimeperiodExcludePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosTimeperiodExcludeRelatedByTimeperiodIdCriteria = $criteria;
		return $this->collNagiosTimeperiodExcludesRelatedByTimeperiodId;
	}

	/**
	 * Returns the number of related NagiosTimeperiodExclude objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosTimeperiodExclude objects.
	 * @throws     PropelException
	 */
	public function countNagiosTimeperiodExcludesRelatedByTimeperiodId(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosTimeperiodExcludesRelatedByTimeperiodId === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosTimeperiodExcludePeer::TIMEPERIOD_ID, $this->id);

				$count = NagiosTimeperiodExcludePeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosTimeperiodExcludePeer::TIMEPERIOD_ID, $this->id);

				if (!isset($this->lastNagiosTimeperiodExcludeRelatedByTimeperiodIdCriteria) || !$this->lastNagiosTimeperiodExcludeRelatedByTimeperiodIdCriteria->equals($criteria)) {
					$count = NagiosTimeperiodExcludePeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosTimeperiodExcludesRelatedByTimeperiodId);
				}
			} else {
				$count = count($this->collNagiosTimeperiodExcludesRelatedByTimeperiodId);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a NagiosTimeperiodExclude object to this object
	 * through the NagiosTimeperiodExclude foreign key attribute.
	 *
	 * @param      NagiosTimeperiodExclude $l NagiosTimeperiodExclude
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosTimeperiodExcludeRelatedByTimeperiodId(NagiosTimeperiodExclude $l)
	{
		if ($this->collNagiosTimeperiodExcludesRelatedByTimeperiodId === null) {
			$this->initNagiosTimeperiodExcludesRelatedByTimeperiodId();
		}
		if (!in_array($l, $this->collNagiosTimeperiodExcludesRelatedByTimeperiodId, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosTimeperiodExcludesRelatedByTimeperiodId, $l);
			$l->setNagiosTimeperiodRelatedByTimeperiodId($this);
		}
	}

	/**
	 * Clears out the collNagiosTimeperiodExcludesRelatedByExcludedTimeperiod collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosTimeperiodExcludesRelatedByExcludedTimeperiod()
	 */
	public function clearNagiosTimeperiodExcludesRelatedByExcludedTimeperiod()
	{
		$this->collNagiosTimeperiodExcludesRelatedByExcludedTimeperiod = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosTimeperiodExcludesRelatedByExcludedTimeperiod collection (array).
	 *
	 * By default this just sets the collNagiosTimeperiodExcludesRelatedByExcludedTimeperiod collection to an empty array (like clearcollNagiosTimeperiodExcludesRelatedByExcludedTimeperiod());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosTimeperiodExcludesRelatedByExcludedTimeperiod()
	{
		$this->collNagiosTimeperiodExcludesRelatedByExcludedTimeperiod = array();
	}

	/**
	 * Gets an array of NagiosTimeperiodExclude objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod has previously been saved, it will retrieve
	 * related NagiosTimeperiodExcludesRelatedByExcludedTimeperiod from storage. If this NagiosTimeperiod is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosTimeperiodExclude[]
	 * @throws     PropelException
	 */
	public function getNagiosTimeperiodExcludesRelatedByExcludedTimeperiod($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosTimeperiodExcludesRelatedByExcludedTimeperiod === null) {
			if ($this->isNew()) {
			   $this->collNagiosTimeperiodExcludesRelatedByExcludedTimeperiod = array();
			} else {

				$criteria->add(NagiosTimeperiodExcludePeer::EXCLUDED_TIMEPERIOD, $this->id);

				NagiosTimeperiodExcludePeer::addSelectColumns($criteria);
				$this->collNagiosTimeperiodExcludesRelatedByExcludedTimeperiod = NagiosTimeperiodExcludePeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosTimeperiodExcludePeer::EXCLUDED_TIMEPERIOD, $this->id);

				NagiosTimeperiodExcludePeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosTimeperiodExcludeRelatedByExcludedTimeperiodCriteria) || !$this->lastNagiosTimeperiodExcludeRelatedByExcludedTimeperiodCriteria->equals($criteria)) {
					$this->collNagiosTimeperiodExcludesRelatedByExcludedTimeperiod = NagiosTimeperiodExcludePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosTimeperiodExcludeRelatedByExcludedTimeperiodCriteria = $criteria;
		return $this->collNagiosTimeperiodExcludesRelatedByExcludedTimeperiod;
	}

	/**
	 * Returns the number of related NagiosTimeperiodExclude objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosTimeperiodExclude objects.
	 * @throws     PropelException
	 */
	public function countNagiosTimeperiodExcludesRelatedByExcludedTimeperiod(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosTimeperiodExcludesRelatedByExcludedTimeperiod === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosTimeperiodExcludePeer::EXCLUDED_TIMEPERIOD, $this->id);

				$count = NagiosTimeperiodExcludePeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosTimeperiodExcludePeer::EXCLUDED_TIMEPERIOD, $this->id);

				if (!isset($this->lastNagiosTimeperiodExcludeRelatedByExcludedTimeperiodCriteria) || !$this->lastNagiosTimeperiodExcludeRelatedByExcludedTimeperiodCriteria->equals($criteria)) {
					$count = NagiosTimeperiodExcludePeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosTimeperiodExcludesRelatedByExcludedTimeperiod);
				}
			} else {
				$count = count($this->collNagiosTimeperiodExcludesRelatedByExcludedTimeperiod);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a NagiosTimeperiodExclude object to this object
	 * through the NagiosTimeperiodExclude foreign key attribute.
	 *
	 * @param      NagiosTimeperiodExclude $l NagiosTimeperiodExclude
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosTimeperiodExcludeRelatedByExcludedTimeperiod(NagiosTimeperiodExclude $l)
	{
		if ($this->collNagiosTimeperiodExcludesRelatedByExcludedTimeperiod === null) {
			$this->initNagiosTimeperiodExcludesRelatedByExcludedTimeperiod();
		}
		if (!in_array($l, $this->collNagiosTimeperiodExcludesRelatedByExcludedTimeperiod, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosTimeperiodExcludesRelatedByExcludedTimeperiod, $l);
			$l->setNagiosTimeperiodRelatedByExcludedTimeperiod($this);
		}
	}

	/**
	 * Clears out the collNagiosContactsRelatedByHostNotificationPeriod collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosContactsRelatedByHostNotificationPeriod()
	 */
	public function clearNagiosContactsRelatedByHostNotificationPeriod()
	{
		$this->collNagiosContactsRelatedByHostNotificationPeriod = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosContactsRelatedByHostNotificationPeriod collection (array).
	 *
	 * By default this just sets the collNagiosContactsRelatedByHostNotificationPeriod collection to an empty array (like clearcollNagiosContactsRelatedByHostNotificationPeriod());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosContactsRelatedByHostNotificationPeriod()
	{
		$this->collNagiosContactsRelatedByHostNotificationPeriod = array();
	}

	/**
	 * Gets an array of NagiosContact objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod has previously been saved, it will retrieve
	 * related NagiosContactsRelatedByHostNotificationPeriod from storage. If this NagiosTimeperiod is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosContact[]
	 * @throws     PropelException
	 */
	public function getNagiosContactsRelatedByHostNotificationPeriod($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosContactsRelatedByHostNotificationPeriod === null) {
			if ($this->isNew()) {
			   $this->collNagiosContactsRelatedByHostNotificationPeriod = array();
			} else {

				$criteria->add(NagiosContactPeer::HOST_NOTIFICATION_PERIOD, $this->id);

				NagiosContactPeer::addSelectColumns($criteria);
				$this->collNagiosContactsRelatedByHostNotificationPeriod = NagiosContactPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosContactPeer::HOST_NOTIFICATION_PERIOD, $this->id);

				NagiosContactPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosContactRelatedByHostNotificationPeriodCriteria) || !$this->lastNagiosContactRelatedByHostNotificationPeriodCriteria->equals($criteria)) {
					$this->collNagiosContactsRelatedByHostNotificationPeriod = NagiosContactPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosContactRelatedByHostNotificationPeriodCriteria = $criteria;
		return $this->collNagiosContactsRelatedByHostNotificationPeriod;
	}

	/**
	 * Returns the number of related NagiosContact objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosContact objects.
	 * @throws     PropelException
	 */
	public function countNagiosContactsRelatedByHostNotificationPeriod(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosContactsRelatedByHostNotificationPeriod === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosContactPeer::HOST_NOTIFICATION_PERIOD, $this->id);

				$count = NagiosContactPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosContactPeer::HOST_NOTIFICATION_PERIOD, $this->id);

				if (!isset($this->lastNagiosContactRelatedByHostNotificationPeriodCriteria) || !$this->lastNagiosContactRelatedByHostNotificationPeriodCriteria->equals($criteria)) {
					$count = NagiosContactPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosContactsRelatedByHostNotificationPeriod);
				}
			} else {
				$count = count($this->collNagiosContactsRelatedByHostNotificationPeriod);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a NagiosContact object to this object
	 * through the NagiosContact foreign key attribute.
	 *
	 * @param      NagiosContact $l NagiosContact
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosContactRelatedByHostNotificationPeriod(NagiosContact $l)
	{
		if ($this->collNagiosContactsRelatedByHostNotificationPeriod === null) {
			$this->initNagiosContactsRelatedByHostNotificationPeriod();
		}
		if (!in_array($l, $this->collNagiosContactsRelatedByHostNotificationPeriod, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosContactsRelatedByHostNotificationPeriod, $l);
			$l->setNagiosTimeperiodRelatedByHostNotificationPeriod($this);
		}
	}

	/**
	 * Clears out the collNagiosContactsRelatedByServiceNotificationPeriod collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosContactsRelatedByServiceNotificationPeriod()
	 */
	public function clearNagiosContactsRelatedByServiceNotificationPeriod()
	{
		$this->collNagiosContactsRelatedByServiceNotificationPeriod = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosContactsRelatedByServiceNotificationPeriod collection (array).
	 *
	 * By default this just sets the collNagiosContactsRelatedByServiceNotificationPeriod collection to an empty array (like clearcollNagiosContactsRelatedByServiceNotificationPeriod());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosContactsRelatedByServiceNotificationPeriod()
	{
		$this->collNagiosContactsRelatedByServiceNotificationPeriod = array();
	}

	/**
	 * Gets an array of NagiosContact objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod has previously been saved, it will retrieve
	 * related NagiosContactsRelatedByServiceNotificationPeriod from storage. If this NagiosTimeperiod is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosContact[]
	 * @throws     PropelException
	 */
	public function getNagiosContactsRelatedByServiceNotificationPeriod($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosContactsRelatedByServiceNotificationPeriod === null) {
			if ($this->isNew()) {
			   $this->collNagiosContactsRelatedByServiceNotificationPeriod = array();
			} else {

				$criteria->add(NagiosContactPeer::SERVICE_NOTIFICATION_PERIOD, $this->id);

				NagiosContactPeer::addSelectColumns($criteria);
				$this->collNagiosContactsRelatedByServiceNotificationPeriod = NagiosContactPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosContactPeer::SERVICE_NOTIFICATION_PERIOD, $this->id);

				NagiosContactPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosContactRelatedByServiceNotificationPeriodCriteria) || !$this->lastNagiosContactRelatedByServiceNotificationPeriodCriteria->equals($criteria)) {
					$this->collNagiosContactsRelatedByServiceNotificationPeriod = NagiosContactPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosContactRelatedByServiceNotificationPeriodCriteria = $criteria;
		return $this->collNagiosContactsRelatedByServiceNotificationPeriod;
	}

	/**
	 * Returns the number of related NagiosContact objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosContact objects.
	 * @throws     PropelException
	 */
	public function countNagiosContactsRelatedByServiceNotificationPeriod(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosContactsRelatedByServiceNotificationPeriod === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosContactPeer::SERVICE_NOTIFICATION_PERIOD, $this->id);

				$count = NagiosContactPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosContactPeer::SERVICE_NOTIFICATION_PERIOD, $this->id);

				if (!isset($this->lastNagiosContactRelatedByServiceNotificationPeriodCriteria) || !$this->lastNagiosContactRelatedByServiceNotificationPeriodCriteria->equals($criteria)) {
					$count = NagiosContactPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosContactsRelatedByServiceNotificationPeriod);
				}
			} else {
				$count = count($this->collNagiosContactsRelatedByServiceNotificationPeriod);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a NagiosContact object to this object
	 * through the NagiosContact foreign key attribute.
	 *
	 * @param      NagiosContact $l NagiosContact
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosContactRelatedByServiceNotificationPeriod(NagiosContact $l)
	{
		if ($this->collNagiosContactsRelatedByServiceNotificationPeriod === null) {
			$this->initNagiosContactsRelatedByServiceNotificationPeriod();
		}
		if (!in_array($l, $this->collNagiosContactsRelatedByServiceNotificationPeriod, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosContactsRelatedByServiceNotificationPeriod, $l);
			$l->setNagiosTimeperiodRelatedByServiceNotificationPeriod($this);
		}
	}

	/**
	 * Clears out the collNagiosHostTemplatesRelatedByCheckPeriod collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosHostTemplatesRelatedByCheckPeriod()
	 */
	public function clearNagiosHostTemplatesRelatedByCheckPeriod()
	{
		$this->collNagiosHostTemplatesRelatedByCheckPeriod = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosHostTemplatesRelatedByCheckPeriod collection (array).
	 *
	 * By default this just sets the collNagiosHostTemplatesRelatedByCheckPeriod collection to an empty array (like clearcollNagiosHostTemplatesRelatedByCheckPeriod());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosHostTemplatesRelatedByCheckPeriod()
	{
		$this->collNagiosHostTemplatesRelatedByCheckPeriod = array();
	}

	/**
	 * Gets an array of NagiosHostTemplate objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod has previously been saved, it will retrieve
	 * related NagiosHostTemplatesRelatedByCheckPeriod from storage. If this NagiosTimeperiod is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosHostTemplate[]
	 * @throws     PropelException
	 */
	public function getNagiosHostTemplatesRelatedByCheckPeriod($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostTemplatesRelatedByCheckPeriod === null) {
			if ($this->isNew()) {
			   $this->collNagiosHostTemplatesRelatedByCheckPeriod = array();
			} else {

				$criteria->add(NagiosHostTemplatePeer::CHECK_PERIOD, $this->id);

				NagiosHostTemplatePeer::addSelectColumns($criteria);
				$this->collNagiosHostTemplatesRelatedByCheckPeriod = NagiosHostTemplatePeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosHostTemplatePeer::CHECK_PERIOD, $this->id);

				NagiosHostTemplatePeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosHostTemplateRelatedByCheckPeriodCriteria) || !$this->lastNagiosHostTemplateRelatedByCheckPeriodCriteria->equals($criteria)) {
					$this->collNagiosHostTemplatesRelatedByCheckPeriod = NagiosHostTemplatePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosHostTemplateRelatedByCheckPeriodCriteria = $criteria;
		return $this->collNagiosHostTemplatesRelatedByCheckPeriod;
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
	public function countNagiosHostTemplatesRelatedByCheckPeriod(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosHostTemplatesRelatedByCheckPeriod === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosHostTemplatePeer::CHECK_PERIOD, $this->id);

				$count = NagiosHostTemplatePeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosHostTemplatePeer::CHECK_PERIOD, $this->id);

				if (!isset($this->lastNagiosHostTemplateRelatedByCheckPeriodCriteria) || !$this->lastNagiosHostTemplateRelatedByCheckPeriodCriteria->equals($criteria)) {
					$count = NagiosHostTemplatePeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosHostTemplatesRelatedByCheckPeriod);
				}
			} else {
				$count = count($this->collNagiosHostTemplatesRelatedByCheckPeriod);
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
	public function addNagiosHostTemplateRelatedByCheckPeriod(NagiosHostTemplate $l)
	{
		if ($this->collNagiosHostTemplatesRelatedByCheckPeriod === null) {
			$this->initNagiosHostTemplatesRelatedByCheckPeriod();
		}
		if (!in_array($l, $this->collNagiosHostTemplatesRelatedByCheckPeriod, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosHostTemplatesRelatedByCheckPeriod, $l);
			$l->setNagiosTimeperiodRelatedByCheckPeriod($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosHostTemplatesRelatedByCheckPeriod from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosHostTemplatesRelatedByCheckPeriodJoinNagiosCommandRelatedByCheckCommand($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostTemplatesRelatedByCheckPeriod === null) {
			if ($this->isNew()) {
				$this->collNagiosHostTemplatesRelatedByCheckPeriod = array();
			} else {

				$criteria->add(NagiosHostTemplatePeer::CHECK_PERIOD, $this->id);

				$this->collNagiosHostTemplatesRelatedByCheckPeriod = NagiosHostTemplatePeer::doSelectJoinNagiosCommandRelatedByCheckCommand($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosHostTemplatePeer::CHECK_PERIOD, $this->id);

			if (!isset($this->lastNagiosHostTemplateRelatedByCheckPeriodCriteria) || !$this->lastNagiosHostTemplateRelatedByCheckPeriodCriteria->equals($criteria)) {
				$this->collNagiosHostTemplatesRelatedByCheckPeriod = NagiosHostTemplatePeer::doSelectJoinNagiosCommandRelatedByCheckCommand($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosHostTemplateRelatedByCheckPeriodCriteria = $criteria;

		return $this->collNagiosHostTemplatesRelatedByCheckPeriod;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosHostTemplatesRelatedByCheckPeriod from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosHostTemplatesRelatedByCheckPeriodJoinNagiosCommandRelatedByEventHandler($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostTemplatesRelatedByCheckPeriod === null) {
			if ($this->isNew()) {
				$this->collNagiosHostTemplatesRelatedByCheckPeriod = array();
			} else {

				$criteria->add(NagiosHostTemplatePeer::CHECK_PERIOD, $this->id);

				$this->collNagiosHostTemplatesRelatedByCheckPeriod = NagiosHostTemplatePeer::doSelectJoinNagiosCommandRelatedByEventHandler($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosHostTemplatePeer::CHECK_PERIOD, $this->id);

			if (!isset($this->lastNagiosHostTemplateRelatedByCheckPeriodCriteria) || !$this->lastNagiosHostTemplateRelatedByCheckPeriodCriteria->equals($criteria)) {
				$this->collNagiosHostTemplatesRelatedByCheckPeriod = NagiosHostTemplatePeer::doSelectJoinNagiosCommandRelatedByEventHandler($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosHostTemplateRelatedByCheckPeriodCriteria = $criteria;

		return $this->collNagiosHostTemplatesRelatedByCheckPeriod;
	}

	/**
	 * Clears out the collNagiosHostTemplatesRelatedByNotificationPeriod collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosHostTemplatesRelatedByNotificationPeriod()
	 */
	public function clearNagiosHostTemplatesRelatedByNotificationPeriod()
	{
		$this->collNagiosHostTemplatesRelatedByNotificationPeriod = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosHostTemplatesRelatedByNotificationPeriod collection (array).
	 *
	 * By default this just sets the collNagiosHostTemplatesRelatedByNotificationPeriod collection to an empty array (like clearcollNagiosHostTemplatesRelatedByNotificationPeriod());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosHostTemplatesRelatedByNotificationPeriod()
	{
		$this->collNagiosHostTemplatesRelatedByNotificationPeriod = array();
	}

	/**
	 * Gets an array of NagiosHostTemplate objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod has previously been saved, it will retrieve
	 * related NagiosHostTemplatesRelatedByNotificationPeriod from storage. If this NagiosTimeperiod is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosHostTemplate[]
	 * @throws     PropelException
	 */
	public function getNagiosHostTemplatesRelatedByNotificationPeriod($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostTemplatesRelatedByNotificationPeriod === null) {
			if ($this->isNew()) {
			   $this->collNagiosHostTemplatesRelatedByNotificationPeriod = array();
			} else {

				$criteria->add(NagiosHostTemplatePeer::NOTIFICATION_PERIOD, $this->id);

				NagiosHostTemplatePeer::addSelectColumns($criteria);
				$this->collNagiosHostTemplatesRelatedByNotificationPeriod = NagiosHostTemplatePeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosHostTemplatePeer::NOTIFICATION_PERIOD, $this->id);

				NagiosHostTemplatePeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosHostTemplateRelatedByNotificationPeriodCriteria) || !$this->lastNagiosHostTemplateRelatedByNotificationPeriodCriteria->equals($criteria)) {
					$this->collNagiosHostTemplatesRelatedByNotificationPeriod = NagiosHostTemplatePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosHostTemplateRelatedByNotificationPeriodCriteria = $criteria;
		return $this->collNagiosHostTemplatesRelatedByNotificationPeriod;
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
	public function countNagiosHostTemplatesRelatedByNotificationPeriod(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosHostTemplatesRelatedByNotificationPeriod === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosHostTemplatePeer::NOTIFICATION_PERIOD, $this->id);

				$count = NagiosHostTemplatePeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosHostTemplatePeer::NOTIFICATION_PERIOD, $this->id);

				if (!isset($this->lastNagiosHostTemplateRelatedByNotificationPeriodCriteria) || !$this->lastNagiosHostTemplateRelatedByNotificationPeriodCriteria->equals($criteria)) {
					$count = NagiosHostTemplatePeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosHostTemplatesRelatedByNotificationPeriod);
				}
			} else {
				$count = count($this->collNagiosHostTemplatesRelatedByNotificationPeriod);
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
	public function addNagiosHostTemplateRelatedByNotificationPeriod(NagiosHostTemplate $l)
	{
		if ($this->collNagiosHostTemplatesRelatedByNotificationPeriod === null) {
			$this->initNagiosHostTemplatesRelatedByNotificationPeriod();
		}
		if (!in_array($l, $this->collNagiosHostTemplatesRelatedByNotificationPeriod, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosHostTemplatesRelatedByNotificationPeriod, $l);
			$l->setNagiosTimeperiodRelatedByNotificationPeriod($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosHostTemplatesRelatedByNotificationPeriod from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosHostTemplatesRelatedByNotificationPeriodJoinNagiosCommandRelatedByCheckCommand($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostTemplatesRelatedByNotificationPeriod === null) {
			if ($this->isNew()) {
				$this->collNagiosHostTemplatesRelatedByNotificationPeriod = array();
			} else {

				$criteria->add(NagiosHostTemplatePeer::NOTIFICATION_PERIOD, $this->id);

				$this->collNagiosHostTemplatesRelatedByNotificationPeriod = NagiosHostTemplatePeer::doSelectJoinNagiosCommandRelatedByCheckCommand($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosHostTemplatePeer::NOTIFICATION_PERIOD, $this->id);

			if (!isset($this->lastNagiosHostTemplateRelatedByNotificationPeriodCriteria) || !$this->lastNagiosHostTemplateRelatedByNotificationPeriodCriteria->equals($criteria)) {
				$this->collNagiosHostTemplatesRelatedByNotificationPeriod = NagiosHostTemplatePeer::doSelectJoinNagiosCommandRelatedByCheckCommand($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosHostTemplateRelatedByNotificationPeriodCriteria = $criteria;

		return $this->collNagiosHostTemplatesRelatedByNotificationPeriod;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosHostTemplatesRelatedByNotificationPeriod from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosHostTemplatesRelatedByNotificationPeriodJoinNagiosCommandRelatedByEventHandler($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostTemplatesRelatedByNotificationPeriod === null) {
			if ($this->isNew()) {
				$this->collNagiosHostTemplatesRelatedByNotificationPeriod = array();
			} else {

				$criteria->add(NagiosHostTemplatePeer::NOTIFICATION_PERIOD, $this->id);

				$this->collNagiosHostTemplatesRelatedByNotificationPeriod = NagiosHostTemplatePeer::doSelectJoinNagiosCommandRelatedByEventHandler($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosHostTemplatePeer::NOTIFICATION_PERIOD, $this->id);

			if (!isset($this->lastNagiosHostTemplateRelatedByNotificationPeriodCriteria) || !$this->lastNagiosHostTemplateRelatedByNotificationPeriodCriteria->equals($criteria)) {
				$this->collNagiosHostTemplatesRelatedByNotificationPeriod = NagiosHostTemplatePeer::doSelectJoinNagiosCommandRelatedByEventHandler($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosHostTemplateRelatedByNotificationPeriodCriteria = $criteria;

		return $this->collNagiosHostTemplatesRelatedByNotificationPeriod;
	}

	/**
	 * Clears out the collNagiosHostsRelatedByCheckPeriod collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosHostsRelatedByCheckPeriod()
	 */
	public function clearNagiosHostsRelatedByCheckPeriod()
	{
		$this->collNagiosHostsRelatedByCheckPeriod = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosHostsRelatedByCheckPeriod collection (array).
	 *
	 * By default this just sets the collNagiosHostsRelatedByCheckPeriod collection to an empty array (like clearcollNagiosHostsRelatedByCheckPeriod());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosHostsRelatedByCheckPeriod()
	{
		$this->collNagiosHostsRelatedByCheckPeriod = array();
	}

	/**
	 * Gets an array of NagiosHost objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod has previously been saved, it will retrieve
	 * related NagiosHostsRelatedByCheckPeriod from storage. If this NagiosTimeperiod is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosHost[]
	 * @throws     PropelException
	 */
	public function getNagiosHostsRelatedByCheckPeriod($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostsRelatedByCheckPeriod === null) {
			if ($this->isNew()) {
			   $this->collNagiosHostsRelatedByCheckPeriod = array();
			} else {

				$criteria->add(NagiosHostPeer::CHECK_PERIOD, $this->id);

				NagiosHostPeer::addSelectColumns($criteria);
				$this->collNagiosHostsRelatedByCheckPeriod = NagiosHostPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosHostPeer::CHECK_PERIOD, $this->id);

				NagiosHostPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosHostRelatedByCheckPeriodCriteria) || !$this->lastNagiosHostRelatedByCheckPeriodCriteria->equals($criteria)) {
					$this->collNagiosHostsRelatedByCheckPeriod = NagiosHostPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosHostRelatedByCheckPeriodCriteria = $criteria;
		return $this->collNagiosHostsRelatedByCheckPeriod;
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
	public function countNagiosHostsRelatedByCheckPeriod(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosHostsRelatedByCheckPeriod === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosHostPeer::CHECK_PERIOD, $this->id);

				$count = NagiosHostPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosHostPeer::CHECK_PERIOD, $this->id);

				if (!isset($this->lastNagiosHostRelatedByCheckPeriodCriteria) || !$this->lastNagiosHostRelatedByCheckPeriodCriteria->equals($criteria)) {
					$count = NagiosHostPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosHostsRelatedByCheckPeriod);
				}
			} else {
				$count = count($this->collNagiosHostsRelatedByCheckPeriod);
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
	public function addNagiosHostRelatedByCheckPeriod(NagiosHost $l)
	{
		if ($this->collNagiosHostsRelatedByCheckPeriod === null) {
			$this->initNagiosHostsRelatedByCheckPeriod();
		}
		if (!in_array($l, $this->collNagiosHostsRelatedByCheckPeriod, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosHostsRelatedByCheckPeriod, $l);
			$l->setNagiosTimeperiodRelatedByCheckPeriod($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosHostsRelatedByCheckPeriod from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosHostsRelatedByCheckPeriodJoinNagiosCommandRelatedByCheckCommand($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostsRelatedByCheckPeriod === null) {
			if ($this->isNew()) {
				$this->collNagiosHostsRelatedByCheckPeriod = array();
			} else {

				$criteria->add(NagiosHostPeer::CHECK_PERIOD, $this->id);

				$this->collNagiosHostsRelatedByCheckPeriod = NagiosHostPeer::doSelectJoinNagiosCommandRelatedByCheckCommand($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosHostPeer::CHECK_PERIOD, $this->id);

			if (!isset($this->lastNagiosHostRelatedByCheckPeriodCriteria) || !$this->lastNagiosHostRelatedByCheckPeriodCriteria->equals($criteria)) {
				$this->collNagiosHostsRelatedByCheckPeriod = NagiosHostPeer::doSelectJoinNagiosCommandRelatedByCheckCommand($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosHostRelatedByCheckPeriodCriteria = $criteria;

		return $this->collNagiosHostsRelatedByCheckPeriod;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosHostsRelatedByCheckPeriod from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosHostsRelatedByCheckPeriodJoinNagiosCommandRelatedByEventHandler($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostsRelatedByCheckPeriod === null) {
			if ($this->isNew()) {
				$this->collNagiosHostsRelatedByCheckPeriod = array();
			} else {

				$criteria->add(NagiosHostPeer::CHECK_PERIOD, $this->id);

				$this->collNagiosHostsRelatedByCheckPeriod = NagiosHostPeer::doSelectJoinNagiosCommandRelatedByEventHandler($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosHostPeer::CHECK_PERIOD, $this->id);

			if (!isset($this->lastNagiosHostRelatedByCheckPeriodCriteria) || !$this->lastNagiosHostRelatedByCheckPeriodCriteria->equals($criteria)) {
				$this->collNagiosHostsRelatedByCheckPeriod = NagiosHostPeer::doSelectJoinNagiosCommandRelatedByEventHandler($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosHostRelatedByCheckPeriodCriteria = $criteria;

		return $this->collNagiosHostsRelatedByCheckPeriod;
	}

	/**
	 * Clears out the collNagiosHostsRelatedByNotificationPeriod collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosHostsRelatedByNotificationPeriod()
	 */
	public function clearNagiosHostsRelatedByNotificationPeriod()
	{
		$this->collNagiosHostsRelatedByNotificationPeriod = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosHostsRelatedByNotificationPeriod collection (array).
	 *
	 * By default this just sets the collNagiosHostsRelatedByNotificationPeriod collection to an empty array (like clearcollNagiosHostsRelatedByNotificationPeriod());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosHostsRelatedByNotificationPeriod()
	{
		$this->collNagiosHostsRelatedByNotificationPeriod = array();
	}

	/**
	 * Gets an array of NagiosHost objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod has previously been saved, it will retrieve
	 * related NagiosHostsRelatedByNotificationPeriod from storage. If this NagiosTimeperiod is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosHost[]
	 * @throws     PropelException
	 */
	public function getNagiosHostsRelatedByNotificationPeriod($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostsRelatedByNotificationPeriod === null) {
			if ($this->isNew()) {
			   $this->collNagiosHostsRelatedByNotificationPeriod = array();
			} else {

				$criteria->add(NagiosHostPeer::NOTIFICATION_PERIOD, $this->id);

				NagiosHostPeer::addSelectColumns($criteria);
				$this->collNagiosHostsRelatedByNotificationPeriod = NagiosHostPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosHostPeer::NOTIFICATION_PERIOD, $this->id);

				NagiosHostPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosHostRelatedByNotificationPeriodCriteria) || !$this->lastNagiosHostRelatedByNotificationPeriodCriteria->equals($criteria)) {
					$this->collNagiosHostsRelatedByNotificationPeriod = NagiosHostPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosHostRelatedByNotificationPeriodCriteria = $criteria;
		return $this->collNagiosHostsRelatedByNotificationPeriod;
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
	public function countNagiosHostsRelatedByNotificationPeriod(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosHostsRelatedByNotificationPeriod === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosHostPeer::NOTIFICATION_PERIOD, $this->id);

				$count = NagiosHostPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosHostPeer::NOTIFICATION_PERIOD, $this->id);

				if (!isset($this->lastNagiosHostRelatedByNotificationPeriodCriteria) || !$this->lastNagiosHostRelatedByNotificationPeriodCriteria->equals($criteria)) {
					$count = NagiosHostPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosHostsRelatedByNotificationPeriod);
				}
			} else {
				$count = count($this->collNagiosHostsRelatedByNotificationPeriod);
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
	public function addNagiosHostRelatedByNotificationPeriod(NagiosHost $l)
	{
		if ($this->collNagiosHostsRelatedByNotificationPeriod === null) {
			$this->initNagiosHostsRelatedByNotificationPeriod();
		}
		if (!in_array($l, $this->collNagiosHostsRelatedByNotificationPeriod, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosHostsRelatedByNotificationPeriod, $l);
			$l->setNagiosTimeperiodRelatedByNotificationPeriod($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosHostsRelatedByNotificationPeriod from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosHostsRelatedByNotificationPeriodJoinNagiosCommandRelatedByCheckCommand($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostsRelatedByNotificationPeriod === null) {
			if ($this->isNew()) {
				$this->collNagiosHostsRelatedByNotificationPeriod = array();
			} else {

				$criteria->add(NagiosHostPeer::NOTIFICATION_PERIOD, $this->id);

				$this->collNagiosHostsRelatedByNotificationPeriod = NagiosHostPeer::doSelectJoinNagiosCommandRelatedByCheckCommand($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosHostPeer::NOTIFICATION_PERIOD, $this->id);

			if (!isset($this->lastNagiosHostRelatedByNotificationPeriodCriteria) || !$this->lastNagiosHostRelatedByNotificationPeriodCriteria->equals($criteria)) {
				$this->collNagiosHostsRelatedByNotificationPeriod = NagiosHostPeer::doSelectJoinNagiosCommandRelatedByCheckCommand($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosHostRelatedByNotificationPeriodCriteria = $criteria;

		return $this->collNagiosHostsRelatedByNotificationPeriod;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosHostsRelatedByNotificationPeriod from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosHostsRelatedByNotificationPeriodJoinNagiosCommandRelatedByEventHandler($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostsRelatedByNotificationPeriod === null) {
			if ($this->isNew()) {
				$this->collNagiosHostsRelatedByNotificationPeriod = array();
			} else {

				$criteria->add(NagiosHostPeer::NOTIFICATION_PERIOD, $this->id);

				$this->collNagiosHostsRelatedByNotificationPeriod = NagiosHostPeer::doSelectJoinNagiosCommandRelatedByEventHandler($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosHostPeer::NOTIFICATION_PERIOD, $this->id);

			if (!isset($this->lastNagiosHostRelatedByNotificationPeriodCriteria) || !$this->lastNagiosHostRelatedByNotificationPeriodCriteria->equals($criteria)) {
				$this->collNagiosHostsRelatedByNotificationPeriod = NagiosHostPeer::doSelectJoinNagiosCommandRelatedByEventHandler($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosHostRelatedByNotificationPeriodCriteria = $criteria;

		return $this->collNagiosHostsRelatedByNotificationPeriod;
	}

	/**
	 * Clears out the collNagiosServiceTemplatesRelatedByCheckPeriod collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosServiceTemplatesRelatedByCheckPeriod()
	 */
	public function clearNagiosServiceTemplatesRelatedByCheckPeriod()
	{
		$this->collNagiosServiceTemplatesRelatedByCheckPeriod = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosServiceTemplatesRelatedByCheckPeriod collection (array).
	 *
	 * By default this just sets the collNagiosServiceTemplatesRelatedByCheckPeriod collection to an empty array (like clearcollNagiosServiceTemplatesRelatedByCheckPeriod());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosServiceTemplatesRelatedByCheckPeriod()
	{
		$this->collNagiosServiceTemplatesRelatedByCheckPeriod = array();
	}

	/**
	 * Gets an array of NagiosServiceTemplate objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod has previously been saved, it will retrieve
	 * related NagiosServiceTemplatesRelatedByCheckPeriod from storage. If this NagiosTimeperiod is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosServiceTemplate[]
	 * @throws     PropelException
	 */
	public function getNagiosServiceTemplatesRelatedByCheckPeriod($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServiceTemplatesRelatedByCheckPeriod === null) {
			if ($this->isNew()) {
			   $this->collNagiosServiceTemplatesRelatedByCheckPeriod = array();
			} else {

				$criteria->add(NagiosServiceTemplatePeer::CHECK_PERIOD, $this->id);

				NagiosServiceTemplatePeer::addSelectColumns($criteria);
				$this->collNagiosServiceTemplatesRelatedByCheckPeriod = NagiosServiceTemplatePeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosServiceTemplatePeer::CHECK_PERIOD, $this->id);

				NagiosServiceTemplatePeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosServiceTemplateRelatedByCheckPeriodCriteria) || !$this->lastNagiosServiceTemplateRelatedByCheckPeriodCriteria->equals($criteria)) {
					$this->collNagiosServiceTemplatesRelatedByCheckPeriod = NagiosServiceTemplatePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosServiceTemplateRelatedByCheckPeriodCriteria = $criteria;
		return $this->collNagiosServiceTemplatesRelatedByCheckPeriod;
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
	public function countNagiosServiceTemplatesRelatedByCheckPeriod(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosServiceTemplatesRelatedByCheckPeriod === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosServiceTemplatePeer::CHECK_PERIOD, $this->id);

				$count = NagiosServiceTemplatePeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosServiceTemplatePeer::CHECK_PERIOD, $this->id);

				if (!isset($this->lastNagiosServiceTemplateRelatedByCheckPeriodCriteria) || !$this->lastNagiosServiceTemplateRelatedByCheckPeriodCriteria->equals($criteria)) {
					$count = NagiosServiceTemplatePeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosServiceTemplatesRelatedByCheckPeriod);
				}
			} else {
				$count = count($this->collNagiosServiceTemplatesRelatedByCheckPeriod);
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
	public function addNagiosServiceTemplateRelatedByCheckPeriod(NagiosServiceTemplate $l)
	{
		if ($this->collNagiosServiceTemplatesRelatedByCheckPeriod === null) {
			$this->initNagiosServiceTemplatesRelatedByCheckPeriod();
		}
		if (!in_array($l, $this->collNagiosServiceTemplatesRelatedByCheckPeriod, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosServiceTemplatesRelatedByCheckPeriod, $l);
			$l->setNagiosTimeperiodRelatedByCheckPeriod($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosServiceTemplatesRelatedByCheckPeriod from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosServiceTemplatesRelatedByCheckPeriodJoinNagiosCommandRelatedByCheckCommand($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServiceTemplatesRelatedByCheckPeriod === null) {
			if ($this->isNew()) {
				$this->collNagiosServiceTemplatesRelatedByCheckPeriod = array();
			} else {

				$criteria->add(NagiosServiceTemplatePeer::CHECK_PERIOD, $this->id);

				$this->collNagiosServiceTemplatesRelatedByCheckPeriod = NagiosServiceTemplatePeer::doSelectJoinNagiosCommandRelatedByCheckCommand($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServiceTemplatePeer::CHECK_PERIOD, $this->id);

			if (!isset($this->lastNagiosServiceTemplateRelatedByCheckPeriodCriteria) || !$this->lastNagiosServiceTemplateRelatedByCheckPeriodCriteria->equals($criteria)) {
				$this->collNagiosServiceTemplatesRelatedByCheckPeriod = NagiosServiceTemplatePeer::doSelectJoinNagiosCommandRelatedByCheckCommand($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceTemplateRelatedByCheckPeriodCriteria = $criteria;

		return $this->collNagiosServiceTemplatesRelatedByCheckPeriod;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosServiceTemplatesRelatedByCheckPeriod from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosServiceTemplatesRelatedByCheckPeriodJoinNagiosCommandRelatedByEventHandler($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServiceTemplatesRelatedByCheckPeriod === null) {
			if ($this->isNew()) {
				$this->collNagiosServiceTemplatesRelatedByCheckPeriod = array();
			} else {

				$criteria->add(NagiosServiceTemplatePeer::CHECK_PERIOD, $this->id);

				$this->collNagiosServiceTemplatesRelatedByCheckPeriod = NagiosServiceTemplatePeer::doSelectJoinNagiosCommandRelatedByEventHandler($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServiceTemplatePeer::CHECK_PERIOD, $this->id);

			if (!isset($this->lastNagiosServiceTemplateRelatedByCheckPeriodCriteria) || !$this->lastNagiosServiceTemplateRelatedByCheckPeriodCriteria->equals($criteria)) {
				$this->collNagiosServiceTemplatesRelatedByCheckPeriod = NagiosServiceTemplatePeer::doSelectJoinNagiosCommandRelatedByEventHandler($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceTemplateRelatedByCheckPeriodCriteria = $criteria;

		return $this->collNagiosServiceTemplatesRelatedByCheckPeriod;
	}

	/**
	 * Clears out the collNagiosServiceTemplatesRelatedByNotificationPeriod collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosServiceTemplatesRelatedByNotificationPeriod()
	 */
	public function clearNagiosServiceTemplatesRelatedByNotificationPeriod()
	{
		$this->collNagiosServiceTemplatesRelatedByNotificationPeriod = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosServiceTemplatesRelatedByNotificationPeriod collection (array).
	 *
	 * By default this just sets the collNagiosServiceTemplatesRelatedByNotificationPeriod collection to an empty array (like clearcollNagiosServiceTemplatesRelatedByNotificationPeriod());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosServiceTemplatesRelatedByNotificationPeriod()
	{
		$this->collNagiosServiceTemplatesRelatedByNotificationPeriod = array();
	}

	/**
	 * Gets an array of NagiosServiceTemplate objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod has previously been saved, it will retrieve
	 * related NagiosServiceTemplatesRelatedByNotificationPeriod from storage. If this NagiosTimeperiod is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosServiceTemplate[]
	 * @throws     PropelException
	 */
	public function getNagiosServiceTemplatesRelatedByNotificationPeriod($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServiceTemplatesRelatedByNotificationPeriod === null) {
			if ($this->isNew()) {
			   $this->collNagiosServiceTemplatesRelatedByNotificationPeriod = array();
			} else {

				$criteria->add(NagiosServiceTemplatePeer::NOTIFICATION_PERIOD, $this->id);

				NagiosServiceTemplatePeer::addSelectColumns($criteria);
				$this->collNagiosServiceTemplatesRelatedByNotificationPeriod = NagiosServiceTemplatePeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosServiceTemplatePeer::NOTIFICATION_PERIOD, $this->id);

				NagiosServiceTemplatePeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosServiceTemplateRelatedByNotificationPeriodCriteria) || !$this->lastNagiosServiceTemplateRelatedByNotificationPeriodCriteria->equals($criteria)) {
					$this->collNagiosServiceTemplatesRelatedByNotificationPeriod = NagiosServiceTemplatePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosServiceTemplateRelatedByNotificationPeriodCriteria = $criteria;
		return $this->collNagiosServiceTemplatesRelatedByNotificationPeriod;
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
	public function countNagiosServiceTemplatesRelatedByNotificationPeriod(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosServiceTemplatesRelatedByNotificationPeriod === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosServiceTemplatePeer::NOTIFICATION_PERIOD, $this->id);

				$count = NagiosServiceTemplatePeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosServiceTemplatePeer::NOTIFICATION_PERIOD, $this->id);

				if (!isset($this->lastNagiosServiceTemplateRelatedByNotificationPeriodCriteria) || !$this->lastNagiosServiceTemplateRelatedByNotificationPeriodCriteria->equals($criteria)) {
					$count = NagiosServiceTemplatePeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosServiceTemplatesRelatedByNotificationPeriod);
				}
			} else {
				$count = count($this->collNagiosServiceTemplatesRelatedByNotificationPeriod);
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
	public function addNagiosServiceTemplateRelatedByNotificationPeriod(NagiosServiceTemplate $l)
	{
		if ($this->collNagiosServiceTemplatesRelatedByNotificationPeriod === null) {
			$this->initNagiosServiceTemplatesRelatedByNotificationPeriod();
		}
		if (!in_array($l, $this->collNagiosServiceTemplatesRelatedByNotificationPeriod, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosServiceTemplatesRelatedByNotificationPeriod, $l);
			$l->setNagiosTimeperiodRelatedByNotificationPeriod($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosServiceTemplatesRelatedByNotificationPeriod from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosServiceTemplatesRelatedByNotificationPeriodJoinNagiosCommandRelatedByCheckCommand($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServiceTemplatesRelatedByNotificationPeriod === null) {
			if ($this->isNew()) {
				$this->collNagiosServiceTemplatesRelatedByNotificationPeriod = array();
			} else {

				$criteria->add(NagiosServiceTemplatePeer::NOTIFICATION_PERIOD, $this->id);

				$this->collNagiosServiceTemplatesRelatedByNotificationPeriod = NagiosServiceTemplatePeer::doSelectJoinNagiosCommandRelatedByCheckCommand($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServiceTemplatePeer::NOTIFICATION_PERIOD, $this->id);

			if (!isset($this->lastNagiosServiceTemplateRelatedByNotificationPeriodCriteria) || !$this->lastNagiosServiceTemplateRelatedByNotificationPeriodCriteria->equals($criteria)) {
				$this->collNagiosServiceTemplatesRelatedByNotificationPeriod = NagiosServiceTemplatePeer::doSelectJoinNagiosCommandRelatedByCheckCommand($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceTemplateRelatedByNotificationPeriodCriteria = $criteria;

		return $this->collNagiosServiceTemplatesRelatedByNotificationPeriod;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosServiceTemplatesRelatedByNotificationPeriod from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosServiceTemplatesRelatedByNotificationPeriodJoinNagiosCommandRelatedByEventHandler($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServiceTemplatesRelatedByNotificationPeriod === null) {
			if ($this->isNew()) {
				$this->collNagiosServiceTemplatesRelatedByNotificationPeriod = array();
			} else {

				$criteria->add(NagiosServiceTemplatePeer::NOTIFICATION_PERIOD, $this->id);

				$this->collNagiosServiceTemplatesRelatedByNotificationPeriod = NagiosServiceTemplatePeer::doSelectJoinNagiosCommandRelatedByEventHandler($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServiceTemplatePeer::NOTIFICATION_PERIOD, $this->id);

			if (!isset($this->lastNagiosServiceTemplateRelatedByNotificationPeriodCriteria) || !$this->lastNagiosServiceTemplateRelatedByNotificationPeriodCriteria->equals($criteria)) {
				$this->collNagiosServiceTemplatesRelatedByNotificationPeriod = NagiosServiceTemplatePeer::doSelectJoinNagiosCommandRelatedByEventHandler($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceTemplateRelatedByNotificationPeriodCriteria = $criteria;

		return $this->collNagiosServiceTemplatesRelatedByNotificationPeriod;
	}

	/**
	 * Clears out the collNagiosServicesRelatedByCheckPeriod collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosServicesRelatedByCheckPeriod()
	 */
	public function clearNagiosServicesRelatedByCheckPeriod()
	{
		$this->collNagiosServicesRelatedByCheckPeriod = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosServicesRelatedByCheckPeriod collection (array).
	 *
	 * By default this just sets the collNagiosServicesRelatedByCheckPeriod collection to an empty array (like clearcollNagiosServicesRelatedByCheckPeriod());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosServicesRelatedByCheckPeriod()
	{
		$this->collNagiosServicesRelatedByCheckPeriod = array();
	}

	/**
	 * Gets an array of NagiosService objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod has previously been saved, it will retrieve
	 * related NagiosServicesRelatedByCheckPeriod from storage. If this NagiosTimeperiod is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosService[]
	 * @throws     PropelException
	 */
	public function getNagiosServicesRelatedByCheckPeriod($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServicesRelatedByCheckPeriod === null) {
			if ($this->isNew()) {
			   $this->collNagiosServicesRelatedByCheckPeriod = array();
			} else {

				$criteria->add(NagiosServicePeer::CHECK_PERIOD, $this->id);

				NagiosServicePeer::addSelectColumns($criteria);
				$this->collNagiosServicesRelatedByCheckPeriod = NagiosServicePeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosServicePeer::CHECK_PERIOD, $this->id);

				NagiosServicePeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosServiceRelatedByCheckPeriodCriteria) || !$this->lastNagiosServiceRelatedByCheckPeriodCriteria->equals($criteria)) {
					$this->collNagiosServicesRelatedByCheckPeriod = NagiosServicePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosServiceRelatedByCheckPeriodCriteria = $criteria;
		return $this->collNagiosServicesRelatedByCheckPeriod;
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
	public function countNagiosServicesRelatedByCheckPeriod(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosServicesRelatedByCheckPeriod === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosServicePeer::CHECK_PERIOD, $this->id);

				$count = NagiosServicePeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosServicePeer::CHECK_PERIOD, $this->id);

				if (!isset($this->lastNagiosServiceRelatedByCheckPeriodCriteria) || !$this->lastNagiosServiceRelatedByCheckPeriodCriteria->equals($criteria)) {
					$count = NagiosServicePeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosServicesRelatedByCheckPeriod);
				}
			} else {
				$count = count($this->collNagiosServicesRelatedByCheckPeriod);
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
	public function addNagiosServiceRelatedByCheckPeriod(NagiosService $l)
	{
		if ($this->collNagiosServicesRelatedByCheckPeriod === null) {
			$this->initNagiosServicesRelatedByCheckPeriod();
		}
		if (!in_array($l, $this->collNagiosServicesRelatedByCheckPeriod, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosServicesRelatedByCheckPeriod, $l);
			$l->setNagiosTimeperiodRelatedByCheckPeriod($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosServicesRelatedByCheckPeriod from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosServicesRelatedByCheckPeriodJoinNagiosHost($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServicesRelatedByCheckPeriod === null) {
			if ($this->isNew()) {
				$this->collNagiosServicesRelatedByCheckPeriod = array();
			} else {

				$criteria->add(NagiosServicePeer::CHECK_PERIOD, $this->id);

				$this->collNagiosServicesRelatedByCheckPeriod = NagiosServicePeer::doSelectJoinNagiosHost($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServicePeer::CHECK_PERIOD, $this->id);

			if (!isset($this->lastNagiosServiceRelatedByCheckPeriodCriteria) || !$this->lastNagiosServiceRelatedByCheckPeriodCriteria->equals($criteria)) {
				$this->collNagiosServicesRelatedByCheckPeriod = NagiosServicePeer::doSelectJoinNagiosHost($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceRelatedByCheckPeriodCriteria = $criteria;

		return $this->collNagiosServicesRelatedByCheckPeriod;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosServicesRelatedByCheckPeriod from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosServicesRelatedByCheckPeriodJoinNagiosHostTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServicesRelatedByCheckPeriod === null) {
			if ($this->isNew()) {
				$this->collNagiosServicesRelatedByCheckPeriod = array();
			} else {

				$criteria->add(NagiosServicePeer::CHECK_PERIOD, $this->id);

				$this->collNagiosServicesRelatedByCheckPeriod = NagiosServicePeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServicePeer::CHECK_PERIOD, $this->id);

			if (!isset($this->lastNagiosServiceRelatedByCheckPeriodCriteria) || !$this->lastNagiosServiceRelatedByCheckPeriodCriteria->equals($criteria)) {
				$this->collNagiosServicesRelatedByCheckPeriod = NagiosServicePeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceRelatedByCheckPeriodCriteria = $criteria;

		return $this->collNagiosServicesRelatedByCheckPeriod;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosServicesRelatedByCheckPeriod from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosServicesRelatedByCheckPeriodJoinNagiosHostgroup($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServicesRelatedByCheckPeriod === null) {
			if ($this->isNew()) {
				$this->collNagiosServicesRelatedByCheckPeriod = array();
			} else {

				$criteria->add(NagiosServicePeer::CHECK_PERIOD, $this->id);

				$this->collNagiosServicesRelatedByCheckPeriod = NagiosServicePeer::doSelectJoinNagiosHostgroup($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServicePeer::CHECK_PERIOD, $this->id);

			if (!isset($this->lastNagiosServiceRelatedByCheckPeriodCriteria) || !$this->lastNagiosServiceRelatedByCheckPeriodCriteria->equals($criteria)) {
				$this->collNagiosServicesRelatedByCheckPeriod = NagiosServicePeer::doSelectJoinNagiosHostgroup($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceRelatedByCheckPeriodCriteria = $criteria;

		return $this->collNagiosServicesRelatedByCheckPeriod;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosServicesRelatedByCheckPeriod from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosServicesRelatedByCheckPeriodJoinNagiosCommandRelatedByCheckCommand($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServicesRelatedByCheckPeriod === null) {
			if ($this->isNew()) {
				$this->collNagiosServicesRelatedByCheckPeriod = array();
			} else {

				$criteria->add(NagiosServicePeer::CHECK_PERIOD, $this->id);

				$this->collNagiosServicesRelatedByCheckPeriod = NagiosServicePeer::doSelectJoinNagiosCommandRelatedByCheckCommand($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServicePeer::CHECK_PERIOD, $this->id);

			if (!isset($this->lastNagiosServiceRelatedByCheckPeriodCriteria) || !$this->lastNagiosServiceRelatedByCheckPeriodCriteria->equals($criteria)) {
				$this->collNagiosServicesRelatedByCheckPeriod = NagiosServicePeer::doSelectJoinNagiosCommandRelatedByCheckCommand($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceRelatedByCheckPeriodCriteria = $criteria;

		return $this->collNagiosServicesRelatedByCheckPeriod;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosServicesRelatedByCheckPeriod from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosServicesRelatedByCheckPeriodJoinNagiosCommandRelatedByEventHandler($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServicesRelatedByCheckPeriod === null) {
			if ($this->isNew()) {
				$this->collNagiosServicesRelatedByCheckPeriod = array();
			} else {

				$criteria->add(NagiosServicePeer::CHECK_PERIOD, $this->id);

				$this->collNagiosServicesRelatedByCheckPeriod = NagiosServicePeer::doSelectJoinNagiosCommandRelatedByEventHandler($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServicePeer::CHECK_PERIOD, $this->id);

			if (!isset($this->lastNagiosServiceRelatedByCheckPeriodCriteria) || !$this->lastNagiosServiceRelatedByCheckPeriodCriteria->equals($criteria)) {
				$this->collNagiosServicesRelatedByCheckPeriod = NagiosServicePeer::doSelectJoinNagiosCommandRelatedByEventHandler($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceRelatedByCheckPeriodCriteria = $criteria;

		return $this->collNagiosServicesRelatedByCheckPeriod;
	}

	/**
	 * Clears out the collNagiosServicesRelatedByNotificationPeriod collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosServicesRelatedByNotificationPeriod()
	 */
	public function clearNagiosServicesRelatedByNotificationPeriod()
	{
		$this->collNagiosServicesRelatedByNotificationPeriod = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosServicesRelatedByNotificationPeriod collection (array).
	 *
	 * By default this just sets the collNagiosServicesRelatedByNotificationPeriod collection to an empty array (like clearcollNagiosServicesRelatedByNotificationPeriod());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosServicesRelatedByNotificationPeriod()
	{
		$this->collNagiosServicesRelatedByNotificationPeriod = array();
	}

	/**
	 * Gets an array of NagiosService objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod has previously been saved, it will retrieve
	 * related NagiosServicesRelatedByNotificationPeriod from storage. If this NagiosTimeperiod is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosService[]
	 * @throws     PropelException
	 */
	public function getNagiosServicesRelatedByNotificationPeriod($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServicesRelatedByNotificationPeriod === null) {
			if ($this->isNew()) {
			   $this->collNagiosServicesRelatedByNotificationPeriod = array();
			} else {

				$criteria->add(NagiosServicePeer::NOTIFICATION_PERIOD, $this->id);

				NagiosServicePeer::addSelectColumns($criteria);
				$this->collNagiosServicesRelatedByNotificationPeriod = NagiosServicePeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosServicePeer::NOTIFICATION_PERIOD, $this->id);

				NagiosServicePeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosServiceRelatedByNotificationPeriodCriteria) || !$this->lastNagiosServiceRelatedByNotificationPeriodCriteria->equals($criteria)) {
					$this->collNagiosServicesRelatedByNotificationPeriod = NagiosServicePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosServiceRelatedByNotificationPeriodCriteria = $criteria;
		return $this->collNagiosServicesRelatedByNotificationPeriod;
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
	public function countNagiosServicesRelatedByNotificationPeriod(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosServicesRelatedByNotificationPeriod === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosServicePeer::NOTIFICATION_PERIOD, $this->id);

				$count = NagiosServicePeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosServicePeer::NOTIFICATION_PERIOD, $this->id);

				if (!isset($this->lastNagiosServiceRelatedByNotificationPeriodCriteria) || !$this->lastNagiosServiceRelatedByNotificationPeriodCriteria->equals($criteria)) {
					$count = NagiosServicePeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosServicesRelatedByNotificationPeriod);
				}
			} else {
				$count = count($this->collNagiosServicesRelatedByNotificationPeriod);
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
	public function addNagiosServiceRelatedByNotificationPeriod(NagiosService $l)
	{
		if ($this->collNagiosServicesRelatedByNotificationPeriod === null) {
			$this->initNagiosServicesRelatedByNotificationPeriod();
		}
		if (!in_array($l, $this->collNagiosServicesRelatedByNotificationPeriod, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosServicesRelatedByNotificationPeriod, $l);
			$l->setNagiosTimeperiodRelatedByNotificationPeriod($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosServicesRelatedByNotificationPeriod from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosServicesRelatedByNotificationPeriodJoinNagiosHost($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServicesRelatedByNotificationPeriod === null) {
			if ($this->isNew()) {
				$this->collNagiosServicesRelatedByNotificationPeriod = array();
			} else {

				$criteria->add(NagiosServicePeer::NOTIFICATION_PERIOD, $this->id);

				$this->collNagiosServicesRelatedByNotificationPeriod = NagiosServicePeer::doSelectJoinNagiosHost($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServicePeer::NOTIFICATION_PERIOD, $this->id);

			if (!isset($this->lastNagiosServiceRelatedByNotificationPeriodCriteria) || !$this->lastNagiosServiceRelatedByNotificationPeriodCriteria->equals($criteria)) {
				$this->collNagiosServicesRelatedByNotificationPeriod = NagiosServicePeer::doSelectJoinNagiosHost($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceRelatedByNotificationPeriodCriteria = $criteria;

		return $this->collNagiosServicesRelatedByNotificationPeriod;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosServicesRelatedByNotificationPeriod from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosServicesRelatedByNotificationPeriodJoinNagiosHostTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServicesRelatedByNotificationPeriod === null) {
			if ($this->isNew()) {
				$this->collNagiosServicesRelatedByNotificationPeriod = array();
			} else {

				$criteria->add(NagiosServicePeer::NOTIFICATION_PERIOD, $this->id);

				$this->collNagiosServicesRelatedByNotificationPeriod = NagiosServicePeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServicePeer::NOTIFICATION_PERIOD, $this->id);

			if (!isset($this->lastNagiosServiceRelatedByNotificationPeriodCriteria) || !$this->lastNagiosServiceRelatedByNotificationPeriodCriteria->equals($criteria)) {
				$this->collNagiosServicesRelatedByNotificationPeriod = NagiosServicePeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceRelatedByNotificationPeriodCriteria = $criteria;

		return $this->collNagiosServicesRelatedByNotificationPeriod;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosServicesRelatedByNotificationPeriod from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosServicesRelatedByNotificationPeriodJoinNagiosHostgroup($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServicesRelatedByNotificationPeriod === null) {
			if ($this->isNew()) {
				$this->collNagiosServicesRelatedByNotificationPeriod = array();
			} else {

				$criteria->add(NagiosServicePeer::NOTIFICATION_PERIOD, $this->id);

				$this->collNagiosServicesRelatedByNotificationPeriod = NagiosServicePeer::doSelectJoinNagiosHostgroup($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServicePeer::NOTIFICATION_PERIOD, $this->id);

			if (!isset($this->lastNagiosServiceRelatedByNotificationPeriodCriteria) || !$this->lastNagiosServiceRelatedByNotificationPeriodCriteria->equals($criteria)) {
				$this->collNagiosServicesRelatedByNotificationPeriod = NagiosServicePeer::doSelectJoinNagiosHostgroup($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceRelatedByNotificationPeriodCriteria = $criteria;

		return $this->collNagiosServicesRelatedByNotificationPeriod;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosServicesRelatedByNotificationPeriod from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosServicesRelatedByNotificationPeriodJoinNagiosCommandRelatedByCheckCommand($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServicesRelatedByNotificationPeriod === null) {
			if ($this->isNew()) {
				$this->collNagiosServicesRelatedByNotificationPeriod = array();
			} else {

				$criteria->add(NagiosServicePeer::NOTIFICATION_PERIOD, $this->id);

				$this->collNagiosServicesRelatedByNotificationPeriod = NagiosServicePeer::doSelectJoinNagiosCommandRelatedByCheckCommand($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServicePeer::NOTIFICATION_PERIOD, $this->id);

			if (!isset($this->lastNagiosServiceRelatedByNotificationPeriodCriteria) || !$this->lastNagiosServiceRelatedByNotificationPeriodCriteria->equals($criteria)) {
				$this->collNagiosServicesRelatedByNotificationPeriod = NagiosServicePeer::doSelectJoinNagiosCommandRelatedByCheckCommand($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceRelatedByNotificationPeriodCriteria = $criteria;

		return $this->collNagiosServicesRelatedByNotificationPeriod;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosServicesRelatedByNotificationPeriod from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosServicesRelatedByNotificationPeriodJoinNagiosCommandRelatedByEventHandler($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServicesRelatedByNotificationPeriod === null) {
			if ($this->isNew()) {
				$this->collNagiosServicesRelatedByNotificationPeriod = array();
			} else {

				$criteria->add(NagiosServicePeer::NOTIFICATION_PERIOD, $this->id);

				$this->collNagiosServicesRelatedByNotificationPeriod = NagiosServicePeer::doSelectJoinNagiosCommandRelatedByEventHandler($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServicePeer::NOTIFICATION_PERIOD, $this->id);

			if (!isset($this->lastNagiosServiceRelatedByNotificationPeriodCriteria) || !$this->lastNagiosServiceRelatedByNotificationPeriodCriteria->equals($criteria)) {
				$this->collNagiosServicesRelatedByNotificationPeriod = NagiosServicePeer::doSelectJoinNagiosCommandRelatedByEventHandler($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceRelatedByNotificationPeriodCriteria = $criteria;

		return $this->collNagiosServicesRelatedByNotificationPeriod;
	}

	/**
	 * Clears out the collNagiosDependencys collection (array).
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
	 * Initializes the collNagiosDependencys collection (array).
	 *
	 * By default this just sets the collNagiosDependencys collection to an empty array (like clearcollNagiosDependencys());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosDependencys()
	{
		$this->collNagiosDependencys = array();
	}

	/**
	 * Gets an array of NagiosDependency objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod has previously been saved, it will retrieve
	 * related NagiosDependencys from storage. If this NagiosTimeperiod is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosDependency[]
	 * @throws     PropelException
	 */
	public function getNagiosDependencys($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosDependencys === null) {
			if ($this->isNew()) {
			   $this->collNagiosDependencys = array();
			} else {

				$criteria->add(NagiosDependencyPeer::DEPENDENCY_PERIOD, $this->id);

				NagiosDependencyPeer::addSelectColumns($criteria);
				$this->collNagiosDependencys = NagiosDependencyPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosDependencyPeer::DEPENDENCY_PERIOD, $this->id);

				NagiosDependencyPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosDependencyCriteria) || !$this->lastNagiosDependencyCriteria->equals($criteria)) {
					$this->collNagiosDependencys = NagiosDependencyPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosDependencyCriteria = $criteria;
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
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosDependencys === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosDependencyPeer::DEPENDENCY_PERIOD, $this->id);

				$count = NagiosDependencyPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosDependencyPeer::DEPENDENCY_PERIOD, $this->id);

				if (!isset($this->lastNagiosDependencyCriteria) || !$this->lastNagiosDependencyCriteria->equals($criteria)) {
					$count = NagiosDependencyPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosDependencys);
				}
			} else {
				$count = count($this->collNagiosDependencys);
			}
		}
		return $count;
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
		if (!in_array($l, $this->collNagiosDependencys, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosDependencys, $l);
			$l->setNagiosTimeperiod($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosDependencys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosDependencysJoinNagiosHostTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosDependencys === null) {
			if ($this->isNew()) {
				$this->collNagiosDependencys = array();
			} else {

				$criteria->add(NagiosDependencyPeer::DEPENDENCY_PERIOD, $this->id);

				$this->collNagiosDependencys = NagiosDependencyPeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosDependencyPeer::DEPENDENCY_PERIOD, $this->id);

			if (!isset($this->lastNagiosDependencyCriteria) || !$this->lastNagiosDependencyCriteria->equals($criteria)) {
				$this->collNagiosDependencys = NagiosDependencyPeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosDependencyCriteria = $criteria;

		return $this->collNagiosDependencys;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosDependencys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosDependencysJoinNagiosHost($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosDependencys === null) {
			if ($this->isNew()) {
				$this->collNagiosDependencys = array();
			} else {

				$criteria->add(NagiosDependencyPeer::DEPENDENCY_PERIOD, $this->id);

				$this->collNagiosDependencys = NagiosDependencyPeer::doSelectJoinNagiosHost($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosDependencyPeer::DEPENDENCY_PERIOD, $this->id);

			if (!isset($this->lastNagiosDependencyCriteria) || !$this->lastNagiosDependencyCriteria->equals($criteria)) {
				$this->collNagiosDependencys = NagiosDependencyPeer::doSelectJoinNagiosHost($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosDependencyCriteria = $criteria;

		return $this->collNagiosDependencys;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosDependencys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosDependencysJoinNagiosServiceTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosDependencys === null) {
			if ($this->isNew()) {
				$this->collNagiosDependencys = array();
			} else {

				$criteria->add(NagiosDependencyPeer::DEPENDENCY_PERIOD, $this->id);

				$this->collNagiosDependencys = NagiosDependencyPeer::doSelectJoinNagiosServiceTemplate($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosDependencyPeer::DEPENDENCY_PERIOD, $this->id);

			if (!isset($this->lastNagiosDependencyCriteria) || !$this->lastNagiosDependencyCriteria->equals($criteria)) {
				$this->collNagiosDependencys = NagiosDependencyPeer::doSelectJoinNagiosServiceTemplate($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosDependencyCriteria = $criteria;

		return $this->collNagiosDependencys;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosDependencys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosDependencysJoinNagiosService($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosDependencys === null) {
			if ($this->isNew()) {
				$this->collNagiosDependencys = array();
			} else {

				$criteria->add(NagiosDependencyPeer::DEPENDENCY_PERIOD, $this->id);

				$this->collNagiosDependencys = NagiosDependencyPeer::doSelectJoinNagiosService($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosDependencyPeer::DEPENDENCY_PERIOD, $this->id);

			if (!isset($this->lastNagiosDependencyCriteria) || !$this->lastNagiosDependencyCriteria->equals($criteria)) {
				$this->collNagiosDependencys = NagiosDependencyPeer::doSelectJoinNagiosService($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosDependencyCriteria = $criteria;

		return $this->collNagiosDependencys;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosDependencys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosDependencysJoinNagiosHostgroup($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosDependencys === null) {
			if ($this->isNew()) {
				$this->collNagiosDependencys = array();
			} else {

				$criteria->add(NagiosDependencyPeer::DEPENDENCY_PERIOD, $this->id);

				$this->collNagiosDependencys = NagiosDependencyPeer::doSelectJoinNagiosHostgroup($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosDependencyPeer::DEPENDENCY_PERIOD, $this->id);

			if (!isset($this->lastNagiosDependencyCriteria) || !$this->lastNagiosDependencyCriteria->equals($criteria)) {
				$this->collNagiosDependencys = NagiosDependencyPeer::doSelectJoinNagiosHostgroup($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosDependencyCriteria = $criteria;

		return $this->collNagiosDependencys;
	}

	/**
	 * Clears out the collNagiosEscalations collection (array).
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
	 * Initializes the collNagiosEscalations collection (array).
	 *
	 * By default this just sets the collNagiosEscalations collection to an empty array (like clearcollNagiosEscalations());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosEscalations()
	{
		$this->collNagiosEscalations = array();
	}

	/**
	 * Gets an array of NagiosEscalation objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod has previously been saved, it will retrieve
	 * related NagiosEscalations from storage. If this NagiosTimeperiod is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosEscalation[]
	 * @throws     PropelException
	 */
	public function getNagiosEscalations($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosEscalations === null) {
			if ($this->isNew()) {
			   $this->collNagiosEscalations = array();
			} else {

				$criteria->add(NagiosEscalationPeer::ESCALATION_PERIOD, $this->id);

				NagiosEscalationPeer::addSelectColumns($criteria);
				$this->collNagiosEscalations = NagiosEscalationPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosEscalationPeer::ESCALATION_PERIOD, $this->id);

				NagiosEscalationPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosEscalationCriteria) || !$this->lastNagiosEscalationCriteria->equals($criteria)) {
					$this->collNagiosEscalations = NagiosEscalationPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosEscalationCriteria = $criteria;
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
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosEscalations === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosEscalationPeer::ESCALATION_PERIOD, $this->id);

				$count = NagiosEscalationPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosEscalationPeer::ESCALATION_PERIOD, $this->id);

				if (!isset($this->lastNagiosEscalationCriteria) || !$this->lastNagiosEscalationCriteria->equals($criteria)) {
					$count = NagiosEscalationPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosEscalations);
				}
			} else {
				$count = count($this->collNagiosEscalations);
			}
		}
		return $count;
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
		if (!in_array($l, $this->collNagiosEscalations, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosEscalations, $l);
			$l->setNagiosTimeperiod($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosEscalations from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosEscalationsJoinNagiosHostTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosEscalations === null) {
			if ($this->isNew()) {
				$this->collNagiosEscalations = array();
			} else {

				$criteria->add(NagiosEscalationPeer::ESCALATION_PERIOD, $this->id);

				$this->collNagiosEscalations = NagiosEscalationPeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosEscalationPeer::ESCALATION_PERIOD, $this->id);

			if (!isset($this->lastNagiosEscalationCriteria) || !$this->lastNagiosEscalationCriteria->equals($criteria)) {
				$this->collNagiosEscalations = NagiosEscalationPeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosEscalationCriteria = $criteria;

		return $this->collNagiosEscalations;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosEscalations from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosEscalationsJoinNagiosHost($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosEscalations === null) {
			if ($this->isNew()) {
				$this->collNagiosEscalations = array();
			} else {

				$criteria->add(NagiosEscalationPeer::ESCALATION_PERIOD, $this->id);

				$this->collNagiosEscalations = NagiosEscalationPeer::doSelectJoinNagiosHost($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosEscalationPeer::ESCALATION_PERIOD, $this->id);

			if (!isset($this->lastNagiosEscalationCriteria) || !$this->lastNagiosEscalationCriteria->equals($criteria)) {
				$this->collNagiosEscalations = NagiosEscalationPeer::doSelectJoinNagiosHost($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosEscalationCriteria = $criteria;

		return $this->collNagiosEscalations;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosEscalations from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosEscalationsJoinNagiosServiceTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosEscalations === null) {
			if ($this->isNew()) {
				$this->collNagiosEscalations = array();
			} else {

				$criteria->add(NagiosEscalationPeer::ESCALATION_PERIOD, $this->id);

				$this->collNagiosEscalations = NagiosEscalationPeer::doSelectJoinNagiosServiceTemplate($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosEscalationPeer::ESCALATION_PERIOD, $this->id);

			if (!isset($this->lastNagiosEscalationCriteria) || !$this->lastNagiosEscalationCriteria->equals($criteria)) {
				$this->collNagiosEscalations = NagiosEscalationPeer::doSelectJoinNagiosServiceTemplate($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosEscalationCriteria = $criteria;

		return $this->collNagiosEscalations;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosEscalations from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosEscalationsJoinNagiosService($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosEscalations === null) {
			if ($this->isNew()) {
				$this->collNagiosEscalations = array();
			} else {

				$criteria->add(NagiosEscalationPeer::ESCALATION_PERIOD, $this->id);

				$this->collNagiosEscalations = NagiosEscalationPeer::doSelectJoinNagiosService($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosEscalationPeer::ESCALATION_PERIOD, $this->id);

			if (!isset($this->lastNagiosEscalationCriteria) || !$this->lastNagiosEscalationCriteria->equals($criteria)) {
				$this->collNagiosEscalations = NagiosEscalationPeer::doSelectJoinNagiosService($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosEscalationCriteria = $criteria;

		return $this->collNagiosEscalations;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosTimeperiod is new, it will return
	 * an empty collection; or if this NagiosTimeperiod has previously
	 * been saved, it will retrieve related NagiosEscalations from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosTimeperiod.
	 */
	public function getNagiosEscalationsJoinNagiosHostgroup($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosEscalations === null) {
			if ($this->isNew()) {
				$this->collNagiosEscalations = array();
			} else {

				$criteria->add(NagiosEscalationPeer::ESCALATION_PERIOD, $this->id);

				$this->collNagiosEscalations = NagiosEscalationPeer::doSelectJoinNagiosHostgroup($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosEscalationPeer::ESCALATION_PERIOD, $this->id);

			if (!isset($this->lastNagiosEscalationCriteria) || !$this->lastNagiosEscalationCriteria->equals($criteria)) {
				$this->collNagiosEscalations = NagiosEscalationPeer::doSelectJoinNagiosHostgroup($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosEscalationCriteria = $criteria;

		return $this->collNagiosEscalations;
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
			if ($this->collNagiosTimeperiodEntrys) {
				foreach ((array) $this->collNagiosTimeperiodEntrys as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosTimeperiodExcludesRelatedByTimeperiodId) {
				foreach ((array) $this->collNagiosTimeperiodExcludesRelatedByTimeperiodId as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosTimeperiodExcludesRelatedByExcludedTimeperiod) {
				foreach ((array) $this->collNagiosTimeperiodExcludesRelatedByExcludedTimeperiod as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosContactsRelatedByHostNotificationPeriod) {
				foreach ((array) $this->collNagiosContactsRelatedByHostNotificationPeriod as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosContactsRelatedByServiceNotificationPeriod) {
				foreach ((array) $this->collNagiosContactsRelatedByServiceNotificationPeriod as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosHostTemplatesRelatedByCheckPeriod) {
				foreach ((array) $this->collNagiosHostTemplatesRelatedByCheckPeriod as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosHostTemplatesRelatedByNotificationPeriod) {
				foreach ((array) $this->collNagiosHostTemplatesRelatedByNotificationPeriod as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosHostsRelatedByCheckPeriod) {
				foreach ((array) $this->collNagiosHostsRelatedByCheckPeriod as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosHostsRelatedByNotificationPeriod) {
				foreach ((array) $this->collNagiosHostsRelatedByNotificationPeriod as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosServiceTemplatesRelatedByCheckPeriod) {
				foreach ((array) $this->collNagiosServiceTemplatesRelatedByCheckPeriod as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosServiceTemplatesRelatedByNotificationPeriod) {
				foreach ((array) $this->collNagiosServiceTemplatesRelatedByNotificationPeriod as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosServicesRelatedByCheckPeriod) {
				foreach ((array) $this->collNagiosServicesRelatedByCheckPeriod as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosServicesRelatedByNotificationPeriod) {
				foreach ((array) $this->collNagiosServicesRelatedByNotificationPeriod as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosDependencys) {
				foreach ((array) $this->collNagiosDependencys as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosEscalations) {
				foreach ((array) $this->collNagiosEscalations as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collNagiosTimeperiodEntrys = null;
		$this->collNagiosTimeperiodExcludesRelatedByTimeperiodId = null;
		$this->collNagiosTimeperiodExcludesRelatedByExcludedTimeperiod = null;
		$this->collNagiosContactsRelatedByHostNotificationPeriod = null;
		$this->collNagiosContactsRelatedByServiceNotificationPeriod = null;
		$this->collNagiosHostTemplatesRelatedByCheckPeriod = null;
		$this->collNagiosHostTemplatesRelatedByNotificationPeriod = null;
		$this->collNagiosHostsRelatedByCheckPeriod = null;
		$this->collNagiosHostsRelatedByNotificationPeriod = null;
		$this->collNagiosServiceTemplatesRelatedByCheckPeriod = null;
		$this->collNagiosServiceTemplatesRelatedByNotificationPeriod = null;
		$this->collNagiosServicesRelatedByCheckPeriod = null;
		$this->collNagiosServicesRelatedByNotificationPeriod = null;
		$this->collNagiosDependencys = null;
		$this->collNagiosEscalations = null;
	}

} // BaseNagiosTimeperiod
