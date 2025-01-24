<?php require "../config/Config.php"; ?>
<?php

    class App {


        public $host = HOST;
        public $dbname = DBNAME;
        public $user = USER;
        public $pass = PASS;

        public $link;

        public function __construct(){
            $this->link = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname."", $this->user,$this->pass);

            if($this->link){
                echo "db connection is working";
            }
        }

        // select all 
        public function selectAll($query){

            $rows = $this->link->query($query);
            $rows->execute();

            $allRows = $rows->fetchAll(PDO::FETCH_OBJ);

            if($allRows){

                return $allRows;
            } else {

                return false;
            }

        }

        // select one row  
        public function selectOne($query){

            $row = $this->link->query($query);
            $row->execute();

            $singleRow = $row->fetch(PDO::FETCH_OBJ);

            if($singleRow){

                return $singleRow;
            } else {

                return false;
            }

        }
        
        // insert 
        public function insert($query, $arr, $path){
            if($this->validate($arr) == "empty"){
                echo "<script>alert('one or more inputs are empty')</script>";
            } else {
                $insert_record = $this->link->prepare(query);
                $insert_record->execute($arr);

                header("location: ".$path."");
            }
        }

        // update 
        public function update($query, $arr , $path){

            if($this->validate($arr) == "empty"){

                echo "<script>alert('one or more inputs are empty')</script>";

            } else {

                $update_record = $this->link->prepare($query);
                $update_record->execute($arr);

                header("location: ".$path."");
            }
        }
        // delete 
        public function delete($query, $path){
            

                $delete_record = $this->link->prepare($query);
                $delete_record->execute();

                header("location: ".$path."");
            
        }


        
        public function validate($arr){
            if(in_array("",$arr)){
                echo "empty";
            }
        }

    // register 
    public function register($query, $arr, $path){
        if($this->validate($arr) == "empty"){
            echo "<script>alert('one or more inputs are empty')</script>";
        } else {
            $register_user = $this->link->prepare($query);
            $register_user->execute($arr);

            header("location: ".$path."");
        }
    }

    
    // login
    public function login($query, $data, $path){
        // email validation    
        
        $login_user = $this->link->prepare(query);
        $login_user->execute($arr);
        $fetch = $login_user->fetch(PDO::FETCH_OBJ);

        if($login_user->rowCount()){
            //password
            if(password_verify($data['password'], $fetch['password'])){
                // start sesion vars
                
                header("location: ".$path."");

            }
        }
    }

    // startingsession 
    public function startingSession(){
        session_start();
    }

    //validating sessions
    public function validateSession($path){
        if(isset($_SESSION['id'])){
            header("location: ".$path."");
        }
    }




}

?>