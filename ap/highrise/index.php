<?php
include("push2Highrise.php");


$person=array('sFirstName'=>'Rama', 'sLastName'=>'Laxmi','staff_comment'=>'ritwiktest','sCompany'=>'ritwik', 'sEmail'=>'aaaaa@yopmail.com');



$p = new Push_Highrise();
echo $p->pushContact($person);

/*$person = new HighrisePerson($highrise);
$person->setFirstName("John");
$person->setLastName("Doe");
$person->addEmailAddress("johndoe@gmail.com");

$address = new HighriseAddress();
$address->setAddress("165 Test St.");
$address->setCity("Glasgow");
$address->setCountry("Scotland");
$address->setZip("GL1");
$person->addAddress($address);

$person->save();*/
//$p->pushTask($_REQUEST);
//$p->pushNote($_REQUEST);
//$p->pushDeal($_REQUEST);

?>