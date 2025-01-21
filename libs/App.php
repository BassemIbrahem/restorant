<?php require "../config/Config.php"; ?>
<?php

    class App {


        public $host = HOST;
        public $dbname = DBNAME;
        public $user = USER;
        public $pass = PASS;

        public $link;

        public function __construct(){
            $this->link = new PDO("mysql:host=".$this->host.";dbnmae=".$this->dbname."", $this->user,$this->pass);

            if($this->link){
                echo "db connection is working";
            }
        }

    }

    $obj = new App();
?>