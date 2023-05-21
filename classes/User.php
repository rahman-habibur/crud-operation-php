<?php

    class User{
        private $con;
        public function __construct(){
            define("HOSTNAME", "localhost");
            define("USERNAME", "root");
            define("PASSWORD", "");
            define("DBNAME", "crud-practice");

            $this->con = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);
        }

        // Add User
        public function add_user($udata){
            print_r($udata);
        }
    }

?>