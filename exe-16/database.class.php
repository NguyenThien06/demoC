<?php
    class Dasabase{
        protected $connect;
        protected $table;
        protected $database;
        protected $resultQuery;
        public function __construct($param){
            $link = mysqli_connect($param['server'],$param['username'],$param['password']);
            if($link == false){
                die("erro disconnect");
            }
            $this->connect = $link;
            $this->table = $param['table'];
            $this->database = $param['database'];
            $this->setDatabase();
            $this->Query("set names 'uft-8'");
            $this->Query("set charater set 'uft-8'");
        }
        public function setDatabase($database = null){
            if($database == null){
                $database = $this->database;
            }
            mysqli_select_db($this->connect,$this->database);
        }
        
        public function Query($sql ){
             $this->resultQuery = mysqli_query($this->connect, $sql);
            
            return $this->resultQuery;
        }
        public function SingleRecord($resultQuery = null){
            $result = array();
            $resultQuery = ($resultQuery == null) ? $this->resultQuery : $resultQuery;
            if($row = mysqli_fetch_assoc($resultQuery)){
                $result = $row;
            }
            mysqli_free_result($resultQuery);
            return $result;
        }
    }