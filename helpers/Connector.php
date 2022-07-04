<?php

class Connector
{
    const severName= "localhost";
    const userName = "root";
    const password = "";
    const dbName = "t2108m";

    private static $_instance;

    private $_conn;

    private function __construct() {
        //connect db
        $this->_conn = new mysqli(self::severName, self::userName, self::password, self::dbName);

        //nếu có lỗi thì dừng luôn
        if($this->_conn->connect_error){
            die($this->_conn->connect_error);  //die() = break;
        }
    }

    public static function createInstance() {
        if (self::$_instance == null) {
            self::$_instance = new Connector();
        }
        return self::$_instance;
    }

    /**
     * @param $sql
     * @return mixed
     */
    public function createStatement($sql) {
        return $this->_conn->prepare($sql);
    }

    public function query($sql) {
        return $this->_conn->query($sql);
    }
}