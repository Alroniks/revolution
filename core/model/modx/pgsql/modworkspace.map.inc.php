<?php
/**
 * @package modx
 * @subpackage pgsql
 */
$xpdo_meta_map['modWorkspace']= array (
  'package' => 'modx',
  'version' => '1.1',
  'table' => 'workspaces',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'name' => '',
    'path' => '',
    'created' => NULL,
    'active' => 0,
    'attributes' => NULL,
  ),
  'fieldMeta' => 
  array (
    'name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
      'index' => 'index',
    ),
    'path' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
      'index' => 'unique',
    ),
    'created' => 
    array (
      'dbtype' => 'timestamp',
      'phptype' => 'timestamp',
    ),
    'active' => 
    array (
      'dbtype' => 'smallint',
      'phptype' => 'boolean',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'attributes' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'array',
    ),
  ),
  'indexes' => 
  array (
    'name' => 
    array (
      'alias' => 'name',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'name' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'path' => 
    array (
      'alias' => 'path',
      'primary' => false,
      'unique' => true,
      'type' => 'BTREE',
      'columns' => 
      array (
        'path' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'active' => 
    array (
      'alias' => 'active',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'active' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
  'composites' => 
  array (
    'Packages' => 
    array (
      'class' => 'transport.modTransportPackage',
      'local' => 'id',
      'foreign' => 'workspace',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
);
