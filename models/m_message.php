<?php

class Mensaje{
    private $con;

    public function __construct(){
        require('./db/db_main.php');
    }

    public function setMessage(){
        $name = $_POST['name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $this->con->query("INSERT INTO messages(name, last_name, email, message) VALUES('$name', '$last_name', '$email', '$message')");
    
        header('location: ?contacto');
    }

    public function getMessages(){
        $query = $this->con->query("SELECT * FROM messages");

        $retorno = [];

        $i = 0;
        while($fila = $query->fetch_assoc()){
            $retorno[$i] = $fila;
            $i++;
        }
        return $retorno;
    }
}

?>