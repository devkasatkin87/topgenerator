<?php

namespace src\components\redis;

use src\components\redis\Connection;

class Controller {
    
    public $connection;
    
    public function __construct() {
        $this->connection = Connection::getConnection();
    }
    
    /**
     * 
     * @param int $id
     * @param int $views
     * @return bool
     * 
     *      */
    public function addRecord(int $id, int $views) : bool
    {
        $this->connection->set($id, $views);

        return true;
                
    }
    
    /**
     * 
     * @param int $id
     * @return int
     *      */
    public function getRecord($id) : int
    {
        return $this->connection->get($id);
    }
}
