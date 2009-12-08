<?php

/**
 * BaseCar
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $brand
 * @property Doctrine_Collection $Users
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6698 2009-11-10 17:58:02Z jwage $
 */
abstract class BaseCar extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('car');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('brand', 'string', 300, array(
             'type' => 'string',
             'length' => '300',
             ));

        $this->option('type', 'INNODB');
        $this->option('collate', 'utf8_general_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('User as Users', array(
             'local' => 'id',
             'foreign' => 'car_id'));
    }
}