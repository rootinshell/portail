[<?php
$result = array();
$i=0;
foreach ($assos as $asso) 
{
  if($i!=0) { echo ","; } else { $i++; }
  $arr = array(
    "id" => ($asso->getId()),
    "name" => ($asso->getName()), 
    "login" => ($asso->getLogin()),
    "description" => ($asso->getDescription()),
    "pole" => array(
      "id" => $asso->getPoleId(),
      "name" => $asso->getPoleName()
    )
  );
  echo json_encode($arr);
}
?>]
