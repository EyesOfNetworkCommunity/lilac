<?php

/**
 * Base class that represents a row from the 'nagios_host_template_autodiscovery_service' table.
 *
 * 
 *
 * @package    .om
 */
abstract class BaseNagiosHostTemplateAutodiscoveryService extends BaseObject  implements Persistent {


	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        NagiosHostTemplateAutodiscoveryServicePeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the host_template field.
	 * @var        int
	 */
	protected $host_template;

	/**
	 * The value for the name field.
	 * @var        string
	 */
	protected $name;

	/**
	 * The value for the protocol field.
	 * @var        string
	 */
	protected $protocol;

	/**
	 * The value for the port field.
	 * @var        string
	 */
	protected $port;

	/**
	 * The value for the product field.
	 * @var        string
	 */
	protected $product;

	/**
	 * The value for the version field.
	 * @var        string
	 */
	protected $version;

	/**
	 * The value for the extra_information field.
	 * @var        string
	 */
	protected $extra_information;

	/**
	 * @var        NagiosHostTemplate
	 */
	protected $aNagiosHostTemplate;

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
	 * Initializes internal state of BaseNagiosHostTemplateAutodiscoveryService object.
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
	 * Get the [host_template] column value.
	 * 
	 * @return     int
	 */
	public function getHostTemplate()
	{
		return $this->host_template;
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
	 * Get the [protocol] column value.
	 * 
	 * @return     string
	 */
	public function getProtocol()
	{
		return $this->protocol;
	}

	/**
	 * Get the [port] column value.
	 * 
	 * @return     string
	 */
	public function getPort()
	{
		return $this->port;
	}

	/**
	 * Get the [product] column value.
	 * 
	 * @return     string
	 */
	public function getProduct()
	{
		return $this->product;
	}

	/**
	 * Get the [version] column value.
	 * 
	 * @return     string
	 */
	public function getVersion()
	{
		return $this->version;
	}

	/**
	 * Get the [extra_information] column value.
	 * 
	 * @return     string
	 */
	public function getExtraInformation()
	{
		return $this->extra_information;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosHostTemplateAutodiscoveryService The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = NagiosHostTemplateAutodiscoveryServicePeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [host_template] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosHostTemplateAutodiscoveryService The current object (for fluent API support)
	 */
	public function setHostTemplate($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->host_template !== $v) {
			$this->host_template = $v;
			$this->modifiedColumns[] = NagiosHostTemplateAutodiscoveryServicePeer::HOST_TEMPLATE;
		}

		if ($this->aNagiosHostTemplate !== null && $this->aNagiosHostTemplate->getId() !== $v) {
			$this->aNagiosHostTemplate = null;
		}

		return $this;
	} // setHostTemplate()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosHostTemplateAutodiscoveryService The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = NagiosHostTemplateAutodiscoveryServicePeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Set the value of [protocol] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosHostTemplateAutodiscoveryService The current object (for fluent API support)
	 */
	public function setProtocol($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->protocol !== $v) {
			$this->protocol = $v;
			$this->modifiedColumns[] = NagiosHostTemplateAutodiscoveryServicePeer::PROTOCOL;
		}

		return $this;
	} // setProtocol()

	/**
	 * Set the value of [port] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosHostTemplateAutodiscoveryService The current object (for fluent API support)
	 */
	public function setPort($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->port !== $v) {
			$this->port = $v;
			$this->modifiedColumns[] = NagiosHostTemplateAutodiscoveryServicePeer::PORT;
		}

		return $this;
	} // setPort()

	/**
	 * Set the value of [product] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosHostTemplateAutodiscoveryService The current object (for fluent API support)
	 */
	public function setProduct($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->product !== $v) {
			$this->product = $v;
			$this->modifiedColumns[] = NagiosHostTemplateAutodiscoveryServicePeer::PRODUCT;
		}

		return $this;
	} // setProduct()

	/**
	 * Set the value of [version] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosHostTemplateAutodiscoveryService The current object (for fluent API support)
	 */
	public function setVersion($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->version !== $v) {
			$this->version = $v;
			$this->modifiedColumns[] = NagiosHostTemplateAutodiscoveryServicePeer::VERSION;
		}

		return $this;
	} // setVersion()

	/**
	 * Set the value of [extra_information] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosHostTemplateAutodiscoveryService The current object (for fluent API support)
	 */
	public function setExtraInformation($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->extra_information !== $v) {
			$this->extra_information = $v;
			$this->modifiedColumns[] = NagiosHostTemplateAutodiscoveryServicePeer::EXTRA_INFORMATION;
		}

		return $this;
	} // setExtraInformation()

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
			$this->host_template = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->protocol = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->port = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->product = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->version = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->extra_information = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 8; // 8 = NagiosHostTemplateAutodiscoveryServicePeer::NUM_COLUMNS - NagiosHostTemplateAutodiscoveryServicePeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating NagiosHostTemplateAutodiscoveryService object", $e);
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

		if ($this->aNagiosHostTemplate !== null && $this->host_template !== $this->aNagiosHostTemplate->getId()) {
			$this->aNagiosHostTemplate = null;
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
			$con = Propel::getConnection(NagiosHostTemplateAutodiscoveryServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = NagiosHostTemplateAutodiscoveryServicePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aNagiosHostTemplate = null;
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
			$con = Propel::getConnection(NagiosHostTemplateAutodiscoveryServicePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			NagiosHostTemplateAutodiscoveryServicePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(NagiosHostTemplateAutodiscoveryServicePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$affectedRows = $this->doSave($con);
			$con->commit();
			NagiosHostTemplateAutodiscoveryServicePeer::addInstanceToPool($this);
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

			if ($this->aNagiosHostTemplate !== null) {
				if ($this->aNagiosHostTemplate->isModified() || $this->aNagiosHostTemplate->isNew()) {
					$affectedRows += $this->aNagiosHostTemplate->save($con);
				}
				$this->setNagiosHostTemplate($this->aNagiosHostTemplate);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = NagiosHostTemplateAutodiscoveryServicePeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = NagiosHostTemplateAutodiscoveryServicePeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += NagiosHostTemplateAutodiscoveryServicePeer::doUpdate($this, $con);
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

			if ($this->aNagiosHostTemplate !== null) {
				if (!$this->aNagiosHostTemplate->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosHostTemplate->getValidationFailures());
				}
			}


			if (($retval = NagiosHostTemplateAutodiscoveryServicePeer::doValidate($this, $columns)) !== true) {
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
		$pos = NagiosHostTemplateAutodiscoveryServicePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getHostTemplate();
				break;
			case 2:
				return $this->getName();
				break;
			case 3:
				return $this->getProtocol();
				break;
			case 4:
				return $this->getPort();
				break;
			case 5:
				return $this->getProduct();
				break;
			case 6:
				return $this->getVersion();
				break;
			case 7:
				return $this->getExtraInformation();
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
		$keys = NagiosHostTemplateAutodiscoveryServicePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getHostTemplate(),
			$keys[2] => $this->getName(),
			$keys[3] => $this->getProtocol(),
			$keys[4] => $this->getPort(),
			$keys[5] => $this->getProduct(),
			$keys[6] => $this->getVersion(),
			$keys[7] => $this->getExtraInformation(),
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
		$pos = NagiosHostTemplateAutodiscoveryServicePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setHostTemplate($value);
				break;
			case 2:
				$this->setName($value);
				break;
			case 3:
				$this->setProtocol($value);
				break;
			case 4:
				$this->setPort($value);
				break;
			case 5:
				$this->setProduct($value);
				break;
			case 6:
				$this->setVersion($value);
				break;
			case 7:
				$this->setExtraInformation($value);
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
		$keys = NagiosHostTemplateAutodiscoveryServicePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setHostTemplate($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setProtocol($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setPort($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setProduct($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setVersion($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setExtraInformation($arr[$keys[7]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(NagiosHostTemplateAutodiscoveryServicePeer::DATABASE_NAME);

		if ($this->isColumnModified(NagiosHostTemplateAutodiscoveryServicePeer::ID)) $criteria->add(NagiosHostTemplateAutodiscoveryServicePeer::ID, $this->id);
		if ($this->isColumnModified(NagiosHostTemplateAutodiscoveryServicePeer::HOST_TEMPLATE)) $criteria->add(NagiosHostTemplateAutodiscoveryServicePeer::HOST_TEMPLATE, $this->host_template);
		if ($this->isColumnModified(NagiosHostTemplateAutodiscoveryServicePeer::NAME)) $criteria->add(NagiosHostTemplateAutodiscoveryServicePeer::NAME, $this->name);
		if ($this->isColumnModified(NagiosHostTemplateAutodiscoveryServicePeer::PROTOCOL)) $criteria->add(NagiosHostTemplateAutodiscoveryServicePeer::PROTOCOL, $this->protocol);
		if ($this->isColumnModified(NagiosHostTemplateAutodiscoveryServicePeer::PORT)) $criteria->add(NagiosHostTemplateAutodiscoveryServicePeer::PORT, $this->port);
		if ($this->isColumnModified(NagiosHostTemplateAutodiscoveryServicePeer::PRODUCT)) $criteria->add(NagiosHostTemplateAutodiscoveryServicePeer::PRODUCT, $this->product);
		if ($this->isColumnModified(NagiosHostTemplateAutodiscoveryServicePeer::VERSION)) $criteria->add(NagiosHostTemplateAutodiscoveryServicePeer::VERSION, $this->version);
		if ($this->isColumnModified(NagiosHostTemplateAutodiscoveryServicePeer::EXTRA_INFORMATION)) $criteria->add(NagiosHostTemplateAutodiscoveryServicePeer::EXTRA_INFORMATION, $this->extra_information);

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
		$criteria = new Criteria(NagiosHostTemplateAutodiscoveryServicePeer::DATABASE_NAME);

		$criteria->add(NagiosHostTemplateAutodiscoveryServicePeer::ID, $this->id);

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
	 * @param      object $copyObj An object of NagiosHostTemplateAutodiscoveryService (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setHostTemplate($this->host_template);

		$copyObj->setName($this->name);

		$copyObj->setProtocol($this->protocol);

		$copyObj->setPort($this->port);

		$copyObj->setProduct($this->product);

		$copyObj->setVersion($this->version);

		$copyObj->setExtraInformation($this->extra_information);


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
	 * @return     NagiosHostTemplateAutodiscoveryService Clone of current object.
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
	 * @return     NagiosHostTemplateAutodiscoveryServicePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new NagiosHostTemplateAutodiscoveryServicePeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a NagiosHostTemplate object.
	 *
	 * @param      NagiosHostTemplate $v
	 * @return     NagiosHostTemplateAutodiscoveryService The current object (for fluent API support)
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
			$v->addNagiosHostTemplateAutodiscoveryService($this);
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
			$c = new Criteria(NagiosHostTemplatePeer::DATABASE_NAME);
			$c->add(NagiosHostTemplatePeer::ID, $this->host_template);
			$this->aNagiosHostTemplate = NagiosHostTemplatePeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aNagiosHostTemplate->addNagiosHostTemplateAutodiscoveryServices($this);
			 */
		}
		return $this->aNagiosHostTemplate;
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

			$this->aNagiosHostTemplate = null;
	}

} // BaseNagiosHostTemplateAutodiscoveryService
