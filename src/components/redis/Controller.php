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
        $this->connection->set("article:$id", $views);

        return true;
                
    }
    
    /**
     * 
     * @param string $id
     * @return int
     *      */
    public function getRecord(string $id)
    {
        return $this->connection->get("article:$id");
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
    
    /**
     * @param array $ids Articles were sorted by topic
     * @param int $numbTop
     * @return array
     */
    public function getSortedViewsByIds(array $ids, int $numbTop)
    {
        $views = [];
        $top = [];
        
        foreach ($ids[0] as $id){
            $views[$id] = $this->getRecord($id);
        }
        arsort($views);
        //var_dump($views);
        $top = array_slice($views, 0, $numbTop, true);
        //var_dump($top);
        return $top;
        
    }
}
