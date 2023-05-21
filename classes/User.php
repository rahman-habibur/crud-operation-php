<?php

    class User{
        public function __construct(){
            define("HOSTNAME", "localhost");
            define("USERNAME", "root");
            define("PASSWORD", "");
            define("DBNAME", "crud-practice");

            $fire = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);

            if($fire){
                echo "Agun Lagse";
            }
        }
    }

?>