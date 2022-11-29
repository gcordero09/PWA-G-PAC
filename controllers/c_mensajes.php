<?php

require('./models/m_message.php');

$con = new Mensaje;
$row = $con->getMessages();

require('./views/enterprise/v_mensajes.php');

?>