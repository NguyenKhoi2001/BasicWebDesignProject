<?php
    session_start();
    if(session_destroy()){
    echo 'Logging you out';
    header('Refresh: 2; URL = login.php');
    } 
?>