<?php

class reservationComponents extends sfComponents
{

  public function executeCalendarMenu()
  {
  }
  
  public function executeListeSalles()
  {
    //$this->salles = SalleTable::getInstance()->getAllSalles()->execute();
    $this->salles = SalleTable::getInstance()->createQuery()->execute();
  }
  
}

