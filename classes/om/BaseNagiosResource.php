<?php

/**
 * Base class that represents a row from the 'nagios_resource' table.
 *
 * Nagios Resource
 *
 * @package    .om
 */
abstract class BaseNagiosResource extends BaseObject  implements Persistent {


	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        NagiosResourcePeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the user1 field.
	 * @var        string
	 */
	protected $user1;

	/**
	 * The value for the user2 field.
	 * @var        string
	 */
	protected $user2;

	/**
	 * The value for the user3 field.
	 * @var        string
	 */
	protected $user3;

	/**
	 * The value for the user4 field.
	 * @var        string
	 */
	protected $user4;

	/**
	 * The value for the user5 field.
	 * @var        string
	 */
	protected $user5;

	/**
	 * The value for the user6 field.
	 * @var        string
	 */
	protected $user6;

	/**
	 * The value for the user7 field.
	 * @var        string
	 */
	protected $user7;

	/**
	 * The value for the user8 field.
	 * @var        string
	 */
	protected $user8;

	/**
	 * The value for the user9 field.
	 * @var        string
	 */
	protected $user9;

	/**
	 * The value for the user10 field.
	 * @var        string
	 */
	protected $user10;

	/**
	 * The value for the user11 field.
	 * @var        string
	 */
	protected $user11;

	/**
	 * The value for the user12 field.
	 * @var        string
	 */
	protected $user12;

	/**
	 * The value for the user13 field.
	 * @var        string
	 */
	protected $user13;

	/**
	 * The value for the user14 field.
	 * @var        string
	 */
	protected $user14;

	/**
	 * The value for the user15 field.
	 * @var        string
	 */
	protected $user15;

	/**
	 * The value for the user16 field.
	 * @var        string
	 */
	protected $user16;

	/**
	 * The value for the user17 field.
	 * @var        string
	 */
	protected $user17;

	/**
	 * The value for the user18 field.
	 * @var        string
	 */
	protected $user18;

	/**
	 * The value for the user19 field.
	 * @var        string
	 */
	protected $user19;

	/**
	 * The value for the user20 field.
	 * @var        string
	 */
	protected $user20;

	/**
	 * The value for the user21 field.
	 * @var        string
	 */
	protected $user21;

	/**
	 * The value for the user22 field.
	 * @var        string
	 */
	protected $user22;

	/**
	 * The value for the user23 field.
	 * @var        string
	 */
	protected $user23;

	/**
	 * The value for the user24 field.
	 * @var        string
	 */
	protected $user24;

	/**
	 * The value for the user25 field.
	 * @var        string
	 */
	protected $user25;

	/**
	 * The value for the user26 field.
	 * @var        string
	 */
	protected $user26;

	/**
	 * The value for the user27 field.
	 * @var        string
	 */
	protected $user27;

	/**
	 * The value for the user28 field.
	 * @var        string
	 */
	protected $user28;

	/**
	 * The value for the user29 field.
	 * @var        string
	 */
	protected $user29;

	/**
	 * The value for the user30 field.
	 * @var        string
	 */
	protected $user30;

	/**
	 * The value for the user31 field.
	 * @var        string
	 */
	protected $user31;

	/**
	 * The value for the user32 field.
	 * @var        string
	 */
	protected $user32;

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
	 * Initializes internal state of BaseNagiosResource object.
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
	 * Get the [user1] column value.
	 * 
	 * @return     string
	 */
	public function getUser1()
	{
		return $this->user1;
	}

	/**
	 * Get the [user2] column value.
	 * 
	 * @return     string
	 */
	public function getUser2()
	{
		return $this->user2;
	}

	/**
	 * Get the [user3] column value.
	 * 
	 * @return     string
	 */
	public function getUser3()
	{
		return $this->user3;
	}

	/**
	 * Get the [user4] column value.
	 * 
	 * @return     string
	 */
	public function getUser4()
	{
		return $this->user4;
	}

	/**
	 * Get the [user5] column value.
	 * 
	 * @return     string
	 */
	public function getUser5()
	{
		return $this->user5;
	}

	/**
	 * Get the [user6] column value.
	 * 
	 * @return     string
	 */
	public function getUser6()
	{
		return $this->user6;
	}

	/**
	 * Get the [user7] column value.
	 * 
	 * @return     string
	 */
	public function getUser7()
	{
		return $this->user7;
	}

	/**
	 * Get the [user8] column value.
	 * 
	 * @return     string
	 */
	public function getUser8()
	{
		return $this->user8;
	}

	/**
	 * Get the [user9] column value.
	 * 
	 * @return     string
	 */
	public function getUser9()
	{
		return $this->user9;
	}

	/**
	 * Get the [user10] column value.
	 * 
	 * @return     string
	 */
	public function getUser10()
	{
		return $this->user10;
	}

	/**
	 * Get the [user11] column value.
	 * 
	 * @return     string
	 */
	public function getUser11()
	{
		return $this->user11;
	}

	/**
	 * Get the [user12] column value.
	 * 
	 * @return     string
	 */
	public function getUser12()
	{
		return $this->user12;
	}

	/**
	 * Get the [user13] column value.
	 * 
	 * @return     string
	 */
	public function getUser13()
	{
		return $this->user13;
	}

	/**
	 * Get the [user14] column value.
	 * 
	 * @return     string
	 */
	public function getUser14()
	{
		return $this->user14;
	}

	/**
	 * Get the [user15] column value.
	 * 
	 * @return     string
	 */
	public function getUser15()
	{
		return $this->user15;
	}

	/**
	 * Get the [user16] column value.
	 * 
	 * @return     string
	 */
	public function getUser16()
	{
		return $this->user16;
	}

	/**
	 * Get the [user17] column value.
	 * 
	 * @return     string
	 */
	public function getUser17()
	{
		return $this->user17;
	}

	/**
	 * Get the [user18] column value.
	 * 
	 * @return     string
	 */
	public function getUser18()
	{
		return $this->user18;
	}

	/**
	 * Get the [user19] column value.
	 * 
	 * @return     string
	 */
	public function getUser19()
	{
		return $this->user19;
	}

	/**
	 * Get the [user20] column value.
	 * 
	 * @return     string
	 */
	public function getUser20()
	{
		return $this->user20;
	}

	/**
	 * Get the [user21] column value.
	 * 
	 * @return     string
	 */
	public function getUser21()
	{
		return $this->user21;
	}

	/**
	 * Get the [user22] column value.
	 * 
	 * @return     string
	 */
	public function getUser22()
	{
		return $this->user22;
	}

	/**
	 * Get the [user23] column value.
	 * 
	 * @return     string
	 */
	public function getUser23()
	{
		return $this->user23;
	}

	/**
	 * Get the [user24] column value.
	 * 
	 * @return     string
	 */
	public function getUser24()
	{
		return $this->user24;
	}

	/**
	 * Get the [user25] column value.
	 * 
	 * @return     string
	 */
	public function getUser25()
	{
		return $this->user25;
	}

	/**
	 * Get the [user26] column value.
	 * 
	 * @return     string
	 */
	public function getUser26()
	{
		return $this->user26;
	}

	/**
	 * Get the [user27] column value.
	 * 
	 * @return     string
	 */
	public function getUser27()
	{
		return $this->user27;
	}

	/**
	 * Get the [user28] column value.
	 * 
	 * @return     string
	 */
	public function getUser28()
	{
		return $this->user28;
	}

	/**
	 * Get the [user29] column value.
	 * 
	 * @return     string
	 */
	public function getUser29()
	{
		return $this->user29;
	}

	/**
	 * Get the [user30] column value.
	 * 
	 * @return     string
	 */
	public function getUser30()
	{
		return $this->user30;
	}

	/**
	 * Get the [user31] column value.
	 * 
	 * @return     string
	 */
	public function getUser31()
	{
		return $this->user31;
	}

	/**
	 * Get the [user32] column value.
	 * 
	 * @return     string
	 */
	public function getUser32()
	{
		return $this->user32;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [user1] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser1($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user1 !== $v) {
			$this->user1 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER1;
		}

		return $this;
	} // setUser1()

	/**
	 * Set the value of [user2] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser2($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user2 !== $v) {
			$this->user2 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER2;
		}

		return $this;
	} // setUser2()

	/**
	 * Set the value of [user3] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser3($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user3 !== $v) {
			$this->user3 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER3;
		}

		return $this;
	} // setUser3()

	/**
	 * Set the value of [user4] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser4($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user4 !== $v) {
			$this->user4 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER4;
		}

		return $this;
	} // setUser4()

	/**
	 * Set the value of [user5] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser5($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user5 !== $v) {
			$this->user5 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER5;
		}

		return $this;
	} // setUser5()

	/**
	 * Set the value of [user6] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser6($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user6 !== $v) {
			$this->user6 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER6;
		}

		return $this;
	} // setUser6()

	/**
	 * Set the value of [user7] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser7($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user7 !== $v) {
			$this->user7 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER7;
		}

		return $this;
	} // setUser7()

	/**
	 * Set the value of [user8] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser8($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user8 !== $v) {
			$this->user8 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER8;
		}

		return $this;
	} // setUser8()

	/**
	 * Set the value of [user9] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser9($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user9 !== $v) {
			$this->user9 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER9;
		}

		return $this;
	} // setUser9()

	/**
	 * Set the value of [user10] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser10($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user10 !== $v) {
			$this->user10 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER10;
		}

		return $this;
	} // setUser10()

	/**
	 * Set the value of [user11] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser11($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user11 !== $v) {
			$this->user11 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER11;
		}

		return $this;
	} // setUser11()

	/**
	 * Set the value of [user12] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser12($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user12 !== $v) {
			$this->user12 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER12;
		}

		return $this;
	} // setUser12()

	/**
	 * Set the value of [user13] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser13($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user13 !== $v) {
			$this->user13 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER13;
		}

		return $this;
	} // setUser13()

	/**
	 * Set the value of [user14] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser14($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user14 !== $v) {
			$this->user14 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER14;
		}

		return $this;
	} // setUser14()

	/**
	 * Set the value of [user15] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser15($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user15 !== $v) {
			$this->user15 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER15;
		}

		return $this;
	} // setUser15()

	/**
	 * Set the value of [user16] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser16($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user16 !== $v) {
			$this->user16 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER16;
		}

		return $this;
	} // setUser16()

	/**
	 * Set the value of [user17] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser17($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user17 !== $v) {
			$this->user17 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER17;
		}

		return $this;
	} // setUser17()

	/**
	 * Set the value of [user18] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser18($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user18 !== $v) {
			$this->user18 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER18;
		}

		return $this;
	} // setUser18()

	/**
	 * Set the value of [user19] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser19($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user19 !== $v) {
			$this->user19 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER19;
		}

		return $this;
	} // setUser19()

	/**
	 * Set the value of [user20] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser20($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user20 !== $v) {
			$this->user20 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER20;
		}

		return $this;
	} // setUser20()

	/**
	 * Set the value of [user21] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser21($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user21 !== $v) {
			$this->user21 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER21;
		}

		return $this;
	} // setUser21()

	/**
	 * Set the value of [user22] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser22($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user22 !== $v) {
			$this->user22 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER22;
		}

		return $this;
	} // setUser22()

	/**
	 * Set the value of [user23] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser23($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user23 !== $v) {
			$this->user23 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER23;
		}

		return $this;
	} // setUser23()

	/**
	 * Set the value of [user24] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser24($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user24 !== $v) {
			$this->user24 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER24;
		}

		return $this;
	} // setUser24()

	/**
	 * Set the value of [user25] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser25($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user25 !== $v) {
			$this->user25 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER25;
		}

		return $this;
	} // setUser25()

	/**
	 * Set the value of [user26] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser26($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user26 !== $v) {
			$this->user26 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER26;
		}

		return $this;
	} // setUser26()

	/**
	 * Set the value of [user27] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser27($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user27 !== $v) {
			$this->user27 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER27;
		}

		return $this;
	} // setUser27()

	/**
	 * Set the value of [user28] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser28($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user28 !== $v) {
			$this->user28 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER28;
		}

		return $this;
	} // setUser28()

	/**
	 * Set the value of [user29] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser29($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user29 !== $v) {
			$this->user29 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER29;
		}

		return $this;
	} // setUser29()

	/**
	 * Set the value of [user30] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser30($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user30 !== $v) {
			$this->user30 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER30;
		}

		return $this;
	} // setUser30()

	/**
	 * Set the value of [user31] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser31($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user31 !== $v) {
			$this->user31 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER31;
		}

		return $this;
	} // setUser31()

	/**
	 * Set the value of [user32] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosResource The current object (for fluent API support)
	 */
	public function setUser32($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->user32 !== $v) {
			$this->user32 = $v;
			$this->modifiedColumns[] = NagiosResourcePeer::USER32;
		}

		return $this;
	} // setUser32()

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
			$this->user1 = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->user2 = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->user3 = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->user4 = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->user5 = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->user6 = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->user7 = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->user8 = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->user9 = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->user10 = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->user11 = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->user12 = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->user13 = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->user14 = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->user15 = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->user16 = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
			$this->user17 = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
			$this->user18 = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
			$this->user19 = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
			$this->user20 = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
			$this->user21 = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
			$this->user22 = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
			$this->user23 = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
			$this->user24 = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
			$this->user25 = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
			$this->user26 = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
			$this->user27 = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
			$this->user28 = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
			$this->user29 = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
			$this->user30 = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
			$this->user31 = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
			$this->user32 = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 33; // 33 = NagiosResourcePeer::NUM_COLUMNS - NagiosResourcePeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating NagiosResource object", $e);
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
			$con = Propel::getConnection(NagiosResourcePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = NagiosResourcePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

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
			$con = Propel::getConnection(NagiosResourcePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			NagiosResourcePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(NagiosResourcePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$affectedRows = $this->doSave($con);
			$con->commit();
			NagiosResourcePeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = NagiosResourcePeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = NagiosResourcePeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += NagiosResourcePeer::doUpdate($this, $con);
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


			if (($retval = NagiosResourcePeer::doValidate($this, $columns)) !== true) {
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
		$pos = NagiosResourcePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getUser1();
				break;
			case 2:
				return $this->getUser2();
				break;
			case 3:
				return $this->getUser3();
				break;
			case 4:
				return $this->getUser4();
				break;
			case 5:
				return $this->getUser5();
				break;
			case 6:
				return $this->getUser6();
				break;
			case 7:
				return $this->getUser7();
				break;
			case 8:
				return $this->getUser8();
				break;
			case 9:
				return $this->getUser9();
				break;
			case 10:
				return $this->getUser10();
				break;
			case 11:
				return $this->getUser11();
				break;
			case 12:
				return $this->getUser12();
				break;
			case 13:
				return $this->getUser13();
				break;
			case 14:
				return $this->getUser14();
				break;
			case 15:
				return $this->getUser15();
				break;
			case 16:
				return $this->getUser16();
				break;
			case 17:
				return $this->getUser17();
				break;
			case 18:
				return $this->getUser18();
				break;
			case 19:
				return $this->getUser19();
				break;
			case 20:
				return $this->getUser20();
				break;
			case 21:
				return $this->getUser21();
				break;
			case 22:
				return $this->getUser22();
				break;
			case 23:
				return $this->getUser23();
				break;
			case 24:
				return $this->getUser24();
				break;
			case 25:
				return $this->getUser25();
				break;
			case 26:
				return $this->getUser26();
				break;
			case 27:
				return $this->getUser27();
				break;
			case 28:
				return $this->getUser28();
				break;
			case 29:
				return $this->getUser29();
				break;
			case 30:
				return $this->getUser30();
				break;
			case 31:
				return $this->getUser31();
				break;
			case 32:
				return $this->getUser32();
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
		$keys = NagiosResourcePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getUser1(),
			$keys[2] => $this->getUser2(),
			$keys[3] => $this->getUser3(),
			$keys[4] => $this->getUser4(),
			$keys[5] => $this->getUser5(),
			$keys[6] => $this->getUser6(),
			$keys[7] => $this->getUser7(),
			$keys[8] => $this->getUser8(),
			$keys[9] => $this->getUser9(),
			$keys[10] => $this->getUser10(),
			$keys[11] => $this->getUser11(),
			$keys[12] => $this->getUser12(),
			$keys[13] => $this->getUser13(),
			$keys[14] => $this->getUser14(),
			$keys[15] => $this->getUser15(),
			$keys[16] => $this->getUser16(),
			$keys[17] => $this->getUser17(),
			$keys[18] => $this->getUser18(),
			$keys[19] => $this->getUser19(),
			$keys[20] => $this->getUser20(),
			$keys[21] => $this->getUser21(),
			$keys[22] => $this->getUser22(),
			$keys[23] => $this->getUser23(),
			$keys[24] => $this->getUser24(),
			$keys[25] => $this->getUser25(),
			$keys[26] => $this->getUser26(),
			$keys[27] => $this->getUser27(),
			$keys[28] => $this->getUser28(),
			$keys[29] => $this->getUser29(),
			$keys[30] => $this->getUser30(),
			$keys[31] => $this->getUser31(),
			$keys[32] => $this->getUser32(),
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
		$pos = NagiosResourcePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setUser1($value);
				break;
			case 2:
				$this->setUser2($value);
				break;
			case 3:
				$this->setUser3($value);
				break;
			case 4:
				$this->setUser4($value);
				break;
			case 5:
				$this->setUser5($value);
				break;
			case 6:
				$this->setUser6($value);
				break;
			case 7:
				$this->setUser7($value);
				break;
			case 8:
				$this->setUser8($value);
				break;
			case 9:
				$this->setUser9($value);
				break;
			case 10:
				$this->setUser10($value);
				break;
			case 11:
				$this->setUser11($value);
				break;
			case 12:
				$this->setUser12($value);
				break;
			case 13:
				$this->setUser13($value);
				break;
			case 14:
				$this->setUser14($value);
				break;
			case 15:
				$this->setUser15($value);
				break;
			case 16:
				$this->setUser16($value);
				break;
			case 17:
				$this->setUser17($value);
				break;
			case 18:
				$this->setUser18($value);
				break;
			case 19:
				$this->setUser19($value);
				break;
			case 20:
				$this->setUser20($value);
				break;
			case 21:
				$this->setUser21($value);
				break;
			case 22:
				$this->setUser22($value);
				break;
			case 23:
				$this->setUser23($value);
				break;
			case 24:
				$this->setUser24($value);
				break;
			case 25:
				$this->setUser25($value);
				break;
			case 26:
				$this->setUser26($value);
				break;
			case 27:
				$this->setUser27($value);
				break;
			case 28:
				$this->setUser28($value);
				break;
			case 29:
				$this->setUser29($value);
				break;
			case 30:
				$this->setUser30($value);
				break;
			case 31:
				$this->setUser31($value);
				break;
			case 32:
				$this->setUser32($value);
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
		$keys = NagiosResourcePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setUser1($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setUser2($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setUser3($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setUser4($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setUser5($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setUser6($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setUser7($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setUser8($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setUser9($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setUser10($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setUser11($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setUser12($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setUser13($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setUser14($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setUser15($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setUser16($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setUser17($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setUser18($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setUser19($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setUser20($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setUser21($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setUser22($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setUser23($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setUser24($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setUser25($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setUser26($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setUser27($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setUser28($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setUser29($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setUser30($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setUser31($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setUser32($arr[$keys[32]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(NagiosResourcePeer::DATABASE_NAME);

		if ($this->isColumnModified(NagiosResourcePeer::ID)) $criteria->add(NagiosResourcePeer::ID, $this->id);
		if ($this->isColumnModified(NagiosResourcePeer::USER1)) $criteria->add(NagiosResourcePeer::USER1, $this->user1);
		if ($this->isColumnModified(NagiosResourcePeer::USER2)) $criteria->add(NagiosResourcePeer::USER2, $this->user2);
		if ($this->isColumnModified(NagiosResourcePeer::USER3)) $criteria->add(NagiosResourcePeer::USER3, $this->user3);
		if ($this->isColumnModified(NagiosResourcePeer::USER4)) $criteria->add(NagiosResourcePeer::USER4, $this->user4);
		if ($this->isColumnModified(NagiosResourcePeer::USER5)) $criteria->add(NagiosResourcePeer::USER5, $this->user5);
		if ($this->isColumnModified(NagiosResourcePeer::USER6)) $criteria->add(NagiosResourcePeer::USER6, $this->user6);
		if ($this->isColumnModified(NagiosResourcePeer::USER7)) $criteria->add(NagiosResourcePeer::USER7, $this->user7);
		if ($this->isColumnModified(NagiosResourcePeer::USER8)) $criteria->add(NagiosResourcePeer::USER8, $this->user8);
		if ($this->isColumnModified(NagiosResourcePeer::USER9)) $criteria->add(NagiosResourcePeer::USER9, $this->user9);
		if ($this->isColumnModified(NagiosResourcePeer::USER10)) $criteria->add(NagiosResourcePeer::USER10, $this->user10);
		if ($this->isColumnModified(NagiosResourcePeer::USER11)) $criteria->add(NagiosResourcePeer::USER11, $this->user11);
		if ($this->isColumnModified(NagiosResourcePeer::USER12)) $criteria->add(NagiosResourcePeer::USER12, $this->user12);
		if ($this->isColumnModified(NagiosResourcePeer::USER13)) $criteria->add(NagiosResourcePeer::USER13, $this->user13);
		if ($this->isColumnModified(NagiosResourcePeer::USER14)) $criteria->add(NagiosResourcePeer::USER14, $this->user14);
		if ($this->isColumnModified(NagiosResourcePeer::USER15)) $criteria->add(NagiosResourcePeer::USER15, $this->user15);
		if ($this->isColumnModified(NagiosResourcePeer::USER16)) $criteria->add(NagiosResourcePeer::USER16, $this->user16);
		if ($this->isColumnModified(NagiosResourcePeer::USER17)) $criteria->add(NagiosResourcePeer::USER17, $this->user17);
		if ($this->isColumnModified(NagiosResourcePeer::USER18)) $criteria->add(NagiosResourcePeer::USER18, $this->user18);
		if ($this->isColumnModified(NagiosResourcePeer::USER19)) $criteria->add(NagiosResourcePeer::USER19, $this->user19);
		if ($this->isColumnModified(NagiosResourcePeer::USER20)) $criteria->add(NagiosResourcePeer::USER20, $this->user20);
		if ($this->isColumnModified(NagiosResourcePeer::USER21)) $criteria->add(NagiosResourcePeer::USER21, $this->user21);
		if ($this->isColumnModified(NagiosResourcePeer::USER22)) $criteria->add(NagiosResourcePeer::USER22, $this->user22);
		if ($this->isColumnModified(NagiosResourcePeer::USER23)) $criteria->add(NagiosResourcePeer::USER23, $this->user23);
		if ($this->isColumnModified(NagiosResourcePeer::USER24)) $criteria->add(NagiosResourcePeer::USER24, $this->user24);
		if ($this->isColumnModified(NagiosResourcePeer::USER25)) $criteria->add(NagiosResourcePeer::USER25, $this->user25);
		if ($this->isColumnModified(NagiosResourcePeer::USER26)) $criteria->add(NagiosResourcePeer::USER26, $this->user26);
		if ($this->isColumnModified(NagiosResourcePeer::USER27)) $criteria->add(NagiosResourcePeer::USER27, $this->user27);
		if ($this->isColumnModified(NagiosResourcePeer::USER28)) $criteria->add(NagiosResourcePeer::USER28, $this->user28);
		if ($this->isColumnModified(NagiosResourcePeer::USER29)) $criteria->add(NagiosResourcePeer::USER29, $this->user29);
		if ($this->isColumnModified(NagiosResourcePeer::USER30)) $criteria->add(NagiosResourcePeer::USER30, $this->user30);
		if ($this->isColumnModified(NagiosResourcePeer::USER31)) $criteria->add(NagiosResourcePeer::USER31, $this->user31);
		if ($this->isColumnModified(NagiosResourcePeer::USER32)) $criteria->add(NagiosResourcePeer::USER32, $this->user32);

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
		$criteria = new Criteria(NagiosResourcePeer::DATABASE_NAME);

		$criteria->add(NagiosResourcePeer::ID, $this->id);

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
	 * @param      object $copyObj An object of NagiosResource (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setUser1($this->user1);

		$copyObj->setUser2($this->user2);

		$copyObj->setUser3($this->user3);

		$copyObj->setUser4($this->user4);

		$copyObj->setUser5($this->user5);

		$copyObj->setUser6($this->user6);

		$copyObj->setUser7($this->user7);

		$copyObj->setUser8($this->user8);

		$copyObj->setUser9($this->user9);

		$copyObj->setUser10($this->user10);

		$copyObj->setUser11($this->user11);

		$copyObj->setUser12($this->user12);

		$copyObj->setUser13($this->user13);

		$copyObj->setUser14($this->user14);

		$copyObj->setUser15($this->user15);

		$copyObj->setUser16($this->user16);

		$copyObj->setUser17($this->user17);

		$copyObj->setUser18($this->user18);

		$copyObj->setUser19($this->user19);

		$copyObj->setUser20($this->user20);

		$copyObj->setUser21($this->user21);

		$copyObj->setUser22($this->user22);

		$copyObj->setUser23($this->user23);

		$copyObj->setUser24($this->user24);

		$copyObj->setUser25($this->user25);

		$copyObj->setUser26($this->user26);

		$copyObj->setUser27($this->user27);

		$copyObj->setUser28($this->user28);

		$copyObj->setUser29($this->user29);

		$copyObj->setUser30($this->user30);

		$copyObj->setUser31($this->user31);

		$copyObj->setUser32($this->user32);


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
	 * @return     NagiosResource Clone of current object.
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
	 * @return     NagiosResourcePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new NagiosResourcePeer();
		}
		return self::$peer;
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

	}

} // BaseNagiosResource
