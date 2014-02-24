<?php
    require './Includes/DataAccess.php';

    try {
        $obj = new DataAccess(false);
        echo 'Instantiated. <br />';
        $obj->connect('aq01-app-2k12.authiq.org', 'tent', 'tent_production', 'TentP@ssw0rd');
        echo 'Connected. <br />';
        print_r($obj->getProduct(1));
    } catch(Exception $e) {
        print_r($e);
    }
?>


