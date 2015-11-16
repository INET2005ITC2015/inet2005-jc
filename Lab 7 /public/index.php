<?php

require_once '../controller/ActorController.php';

$actorController = new ActorController();

if(isset($_GET['idUpdate']))
{
    $actorController->updateAction($_GET['idUpdate']);
}
elseif (isset($_POST['UpdateBtn']))
{
    $actorController->commitUpdateAction($_POST['editActorId'],$_POST['firstName'],$_POST['lastName']);
}
elseif(isset($_GET['idDel']))
{
    $actorController->deleteAction($_GET['idDel']);
}
elseif(isset($_GET['idAdd']))
{
    $actorController->addAction($_POST['firstName'],$_POST['lastName']);
}
elseif (isset($_POST['AddBtn']))
{
    $actorController->commitAddAction($_POST['firstName'],$_POST['lastName']);
}
elseif (isset($_POST['Submit']))
{
    $actorController->searchAction($_POST['search']);
}
else
{
    $actorController->displayAction();
}

?>