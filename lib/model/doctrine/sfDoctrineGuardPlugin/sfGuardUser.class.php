<?php

/**
 * sfGuardUser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    simde
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class sfGuardUser extends PluginsfGuardUser
{

  /**
   * Returns an array containing all permissions, including groups permissions
   * and single permissions.
   *
   * @return array
   */
  public function getAllPermissions()
  {
    if(!$this->_allPermissions)
    {
      $this->_allPermissions = parent::getAllPermissions();
      foreach($this->getAssoMember() as $asso_member)
      {
        $this->_allPermissions[$asso_member->getAsso()->getLogin()] = $asso_member;
      }
    }
    
    return $this->_allPermissions;
  }
  
  public function getPermissionValue($name)
  {
    return $this->_allPermissions[$name];
  }
  
  public function getName(){
    return $this->getFirstName().' '.$this->getLastName();
  }
  
  /**
   * @param type $asso
   * @param type $droit 
   *  0x01 - modification de l'asso
   *  0x02 - gestion des membres
   *  0x04 - gestion des articles
   *  0x08 - gestion des events
   *  0x10 - gestion des roles
   *  0x20 - changement de pres
   * @return type 
   */
  public function hasAccess($asso,$droit)
  {
    if(!$this->hasPermission($asso))
      return false;
    return $this->getPermissionValue($asso)->getRole()->getDroits() & $droit;
  }
  
}
