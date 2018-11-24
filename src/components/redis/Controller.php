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
     * @param string $id
     * @param int $views
     * @return bool
     * 
     *      */
    public function addRecord(string $id, int $views) : bool
    {
        $this->connection->set($id, $views);

        return true;
                
    }
    
    /**
     * 
     * @param string $id
     * @return int
     *      */
    public function getRecord(string $id) : int
    {
        return $this->connection->get($id);
    }
    
    /**
     * 
     * @param string $id
     * 
     */
    public function incrementRecord(string $id)
    {
        $this->connection->incr($id);
        return true;
    }
}
