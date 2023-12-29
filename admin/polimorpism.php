<?php
    

    class User {
        private $password;
        protected $conn;

        public $username;

        public $email;
        public $alamat;

        public function __construct($password, $conn, $username, $email, $alamat){
            $this->password = $password;
            $this->conn = $conn;
            $this->username = $username;
            $this->email = $email;
            $this->alamat = $alamat;
        }
        public function login(){
            $query="INSERT INTO tb_kapal VALUES ('$this->username', '$this->password', '$this->email', '$this->alamat')";
            $sql=mysqli_query($this->conn, $query);
            return $sql;
        }
    }

    class profile extends User {
        private $telpon;

        public function __construct($telpon, $username, $email, $alamat){
            parent::__construct($telpon, $username, $email, $alamat);
            $query="INSERT INTO tb_kapal VALUES ('$this->telpon', '$this->username')";
            $sql=mysqli_query($this->conn, $query);
            return $sql;   
        }
    }

$user= new User(); 

if (isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    if($_POST['login']=='admin'){
        $result = $this->user.login();
    }{
        $result = $this->user.login();
    }

}

?>