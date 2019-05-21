<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2019
 *
 * Generated from /var/www/d7civi47latest/sites/default/files/civicrm/ext/com.joineryhq.eventbrite/xml/schema/CRM/Eventbrite/EventbriteLink.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:cdbbcfb5f57d4fe606917feaf33d0cac)
 */

/**
 * Database access object for the EventbriteLink entity.
 */
class CRM_Eventbrite_DAO_EventbriteLink extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_eventbrite_link';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  static $_log = TRUE;

  /**
   * Unique EventbriteLink ID
   *
   * @var int unsigned
   */
  public $id;

  /**
   * Type of CiviCRM entity
   *
   * @var string
   */
  public $civicrm_entity_type;

  /**
   * ID of CiviCRM entity
   *
   * @var int unsigned
   */
  public $civicrm_entity_id;

  /**
   * Type of Eventbrite entity
   *
   * @var string
   */
  public $eb_entity_type;

  /**
   * ID of Eventbrite entity
   *
   * @var string
   */
  public $eb_entity_id;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_eventbrite_link';
    parent::__construct();
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => ts('Unique EventbriteLink ID'),
          'required' => TRUE,
          'table_name' => 'civicrm_eventbrite_link',
          'entity' => 'EventbriteLink',
          'bao' => 'CRM_Eventbrite_DAO_EventbriteLink',
          'localizable' => 0,
        ],
        'civicrm_entity_type' => [
          'name' => 'civicrm_entity_type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Civicrm Entity Type'),
          'description' => ts('Type of CiviCRM entity'),
          'required' => TRUE,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_eventbrite_link',
          'entity' => 'EventbriteLink',
          'bao' => 'CRM_Eventbrite_DAO_EventbriteLink',
          'localizable' => 0,
        ],
        'civicrm_entity_id' => [
          'name' => 'civicrm_entity_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => ts('ID of CiviCRM entity'),
          'required' => TRUE,
          'table_name' => 'civicrm_eventbrite_link',
          'entity' => 'EventbriteLink',
          'bao' => 'CRM_Eventbrite_DAO_EventbriteLink',
          'localizable' => 0,
        ],
        'eb_entity_type' => [
          'name' => 'eb_entity_type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Eb Entity Type'),
          'description' => ts('Type of Eventbrite entity'),
          'required' => TRUE,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_eventbrite_link',
          'entity' => 'EventbriteLink',
          'bao' => 'CRM_Eventbrite_DAO_EventbriteLink',
          'localizable' => 0,
        ],
        'eb_entity_id' => [
          'name' => 'eb_entity_id',
          'type' => CRM_Utils_Type::T_STRING,
          'description' => ts('ID of Eventbrite entity'),
          'required' => TRUE,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_eventbrite_link',
          'entity' => 'EventbriteLink',
          'bao' => 'CRM_Eventbrite_DAO_EventbriteLink',
          'localizable' => 0,
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'eventbrite_link', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'eventbrite_link', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
