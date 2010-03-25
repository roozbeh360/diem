<?php

/**
 * BaseDmRememberKey
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $dm_user_id
 * @property string $remember_key
 * @property string $ip_address
 * @property DmUser $User
 * 
 * @method integer       getDmUserId()     Returns the current record's "dm_user_id" value
 * @method string        getRememberKey()  Returns the current record's "remember_key" value
 * @method string        getIpAddress()    Returns the current record's "ip_address" value
 * @method DmUser        getUser()         Returns the current record's "User" value
 * @method DmRememberKey setDmUserId()     Sets the current record's "dm_user_id" value
 * @method DmRememberKey setRememberKey()  Sets the current record's "remember_key" value
 * @method DmRememberKey setIpAddress()    Sets the current record's "ip_address" value
 * @method DmRememberKey setUser()         Sets the current record's "User" value
 * 
 * @package    retest
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7380 2010-03-15 21:07:50Z jwage $
 */
abstract class BaseDmRememberKey extends myDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('dm_remember_key');
        $this->hasColumn('dm_user_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('remember_key', 'string', 32, array(
             'type' => 'string',
             'length' => '32',
             ));
        $this->hasColumn('ip_address', 'string', 50, array(
             'type' => 'string',
             'primary' => true,
             'length' => '50',
             ));

        $this->option('symfony', array(
             'form' => false,
             'filter' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('DmUser as User', array(
             'local' => 'dm_user_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             'updated' => 
             array(
              'disabled' => true,
             ),
             ));
        $this->actAs($timestampable0);
    }
}