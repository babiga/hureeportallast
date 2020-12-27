<?php include 'config.php'; ?>
<?php 

    class DATABASE {
        private $host = DB_HOST;
        private $user = DB_USER;
        private $pass = DB_PASS;
        private $db_name = DB_NAME;
        public $connect;
        public $error;
   
    function __construct(){
        $this->database_connect();
    }

    public function database_connect(){
        $this->connect = new Mysqli($this->host,$this->user,$this->pass,$this->db_name);
        
    }

    public function data_print($query){
    $data = $this->connect->query($query);
    if($data->num_rows>0){return $data;} else {return false;}
    }

    public function data_insert($query){
        $this->connect->query($query);
    }

}

?>