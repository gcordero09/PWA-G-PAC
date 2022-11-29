<?php

if(!empty($_POST['name'])){
    require('./models/m_message.php');

    $con = new Mensaje;
    $con->setMessage();
}
require('./views/enterprise/v_contacto.php');

?>