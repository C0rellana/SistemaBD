<?php
    $username = 'SYSTEM';
    $password = '19951995';
    $connection_string = 'localhost/XE';

    //Connect to an Oracle database
    $connection = oci_connect(
        $username,
        $password,
        $connection_string
    );

    
