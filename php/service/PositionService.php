<?php
 
include_once  '../dao/IDao.php';
include_once  '../classes/Position.php';
include_once   '../connexion/Connexion.php';

class PositionService implements IDao {
      
    private $listPosition = array();
    private $connexion;
    private $position;

    public function __construct() {
        $this->connexion = new Connexion();
        $this->position = new Position("", "", "", "", "");
    }

    public function create($position) {
        $query = "INSERT INTO position (latitude, longitude, date, imei) VALUES ("
                . $position->getLatitude() . "," . $position->getLongitude() . ",'" . $position->getDate() . "','" . $position->getImei() . "')";
      $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('SQL');
    }
      public function creates() {
         
        $query = "INSERT INTO test (name) VALUES ('"
                . $this->hahaha ."')";
        $req = $this->connexion->getConnextion()->prepare($query);
        $req->execute() or die('SQL');
    }
    

    public function delete($obj) {
        
    }

    public function getAll() {
        /* $etds = array();
        $query = "select * from position ";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etds[] = new Position($e->id, $e->latitude, $e->longitude, $e->date, $e->imei );
        }
        return $etds;
       */
          $query = "select * from position";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($obj) {
        
    }

    public function update($obj) {
        
    }

}
