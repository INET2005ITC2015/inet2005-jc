<?php

require_once '../model/Actor.php';
//require_once '../model/data/MySQLiActorDataModel.php';
require_once '../model/data/PDOMySQLActorDataModel.php';

class ActorModel
{
    private $m_DataAccess;
    
    public function __construct()
    {
        //$this->m_DataAccess = new MySQLiCustomerDataModel();
        $this->m_DataAccess = new PDOMySQLActorDataModel();
    }
    
    public function __destruct()
    {
        // not doing anything at the moment
    }
            
    public function getAllActors($search)
    {
        $this->m_DataAccess->connectToDB();
        
        $arrayOfActorObjects = array();
        
        $this->m_DataAccess->selectActors($search);
        
        while($row =  $this->m_DataAccess->fetchActor())
        {

            $currentActor = new Actor($this->m_DataAccess->fetchActorID($row),
                    $this->m_DataAccess->fetchActorFirstName($row),
                    $this->m_DataAccess->fetchActorLastName($row),
                    $this->m_DataAccess->fetchLastUpdate($row));
            
            $arrayOfActorObjects[] = $currentActor;
        }
        
        $this->m_DataAccess->closeDB();
        
        return $arrayOfActorObjects;
    }

    public function getActor($actorID)
    {
        $this->m_DataAccess->connectToDB();
        
        $this->m_DataAccess->selectActorById($actorID);
        
        $record =  $this->m_DataAccess->fetchActor();
        

         $fetchedActor = new Actor($this->m_DataAccess->fetchActorID($record),
             $this->m_DataAccess->fetchActorFirstName($record),
             $this->m_DataAccess->fetchActorLastName($record),
             $this->m_DataAccess->fetchLastUpdate($record));

        $this->m_DataAccess->closeDB();
        
        return $fetchedActor;
    }
    
     public function updateActor($actorToUpdate)
    {
        $this->m_DataAccess->connectToDB();
        
        $recordsAffected = $this->m_DataAccess->updateActor($actorToUpdate->getID(),
                $actorToUpdate->getFirstName(),
                $actorToUpdate->getLastName());
        $this->m_DataAccess->closeDB();
        return "$recordsAffected record(s) updated succesfully!";
    }

    public function deleteActor($actorToDelete)
    {
        $this->m_DataAccess->connectToDB();

        $recordsAffected = $this->m_DataAccess->deleteActor($actorToDelete->getID());

        $this->m_DataAccess->closeDB();

        return "$recordsAffected record(s) updated succesfully!";
    }

    public function AddActor($firstName, $lastName)
    {
        $this->m_DataAccess->connectToDB();
        $this->m_DataAccess->AddActor($firstName, $lastName);
        $this->m_DataAccess->closeDB();
    }

    public function searchActor($search)
    {
        $this->m_DataAccess->connectToDB();
        $this->m_DataAccess->searchActor($search);
        $this->m_DataAccess->closeDB();
    }



}

?>
