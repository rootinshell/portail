<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('AssoMember', 'doctrine');

/**
 * BaseAssoMember
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $user_id
 * @property integer $asso_id
 * @property integer $role_id
 * @property integer $semestre_id
 * @property Asso $Asso
 * @property Role $Role
 * @property sfGuardUser $User
 * @property Semestre $Semestre
 * 
 * @method integer     getUserId()      Returns the current record's "user_id" value
 * @method integer     getAssoId()      Returns the current record's "asso_id" value
 * @method integer     getRoleId()      Returns the current record's "role_id" value
 * @method integer     getSemestreId()  Returns the current record's "semestre_id" value
 * @method Asso        getAsso()        Returns the current record's "Asso" value
 * @method Role        getRole()        Returns the current record's "Role" value
 * @method sfGuardUser getUser()        Returns the current record's "User" value
 * @method Semestre    getSemestre()    Returns the current record's "Semestre" value
 * @method AssoMember  setUserId()      Sets the current record's "user_id" value
 * @method AssoMember  setAssoId()      Sets the current record's "asso_id" value
 * @method AssoMember  setRoleId()      Sets the current record's "role_id" value
 * @method AssoMember  setSemestreId()  Sets the current record's "semestre_id" value
 * @method AssoMember  setAsso()        Sets the current record's "Asso" value
 * @method AssoMember  setRole()        Sets the current record's "Role" value
 * @method AssoMember  setUser()        Sets the current record's "User" value
 * @method AssoMember  setSemestre()    Sets the current record's "Semestre" value
 * 
 * @package    simde
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAssoMember extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('asso_member');
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('asso_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('role_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('semestre_id', 'integer', null, array(
             'type' => 'integer',
             ));

        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Asso', array(
             'local' => 'asso_id',
             'foreign' => 'id'));

        $this->hasOne('Role', array(
             'local' => 'role_id',
             'foreign' => 'id'));

        $this->hasOne('sfGuardUser as User', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $this->hasOne('Semestre', array(
             'local' => 'semestre_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}