<?php

require "../models/connectionDatabase.php";

extract($_REQUEST);

$objConnection = Connect();

$sql = "INSERT INTO vehicles(mark,model,bodywork,manufacturing,enrollment,license,paint,cylinder,transmission,motor,suspension,service) VALUES ('$_REQUEST[mark]','$_REQUEST[model]','$_REQUEST[bodywork]','$_REQUEST[manufacturing]','$_REQUEST[enrollment]','$_REQUEST[license_plate]','$_REQUEST[paint]','$_REQUEST[cylinder]','$_REQUEST[transmission]','$_REQUEST[motor]','$_REQUEST[suspension]','$_REQUEST[service]')";
$result = $objConnection->query($sql);

if ($result) {
    echo "Vehicle Added Successfully";
} else {
    echo "Unregistered Vehicle, Try Again";
}
