<?php

require '../models/connectionDatabase.php';

$id = $_POST["id"];
$mark = $_POST["mark"];
$model = $_POST["model"];
$bodywork = $_POST["bodywork"];
$manufacturing = $_POST["manufacturing"];
$enrollment = $_POST["enrollment"];
$license = $_POST["license"];
$paint = $_POST["paint"];
$cylinder = $_POST["cylinder"];
$transmission = $_POST["transmission"];
$motor = $_POST["motor"];
$suspension = $_POST["suspension"];
$service = $_POST["service"];
$settlement = $_POST["settlement"];

$update_query = "UPDATE vehicles SET mark=$mark',model='$model',bodywork='$bodywork',manufacturing='$manufacturing',enrollment='$enrollment',license='$license',paint='$paint',cylinder='$cylinder',transmission='$transmission',motor='$motor',suspension='$suspension',service='$service',settlement='$settlement' WHERE id_vehicle='$id' ";

$result = mysqli_query($connection,$update_query);

if ($result) {
    echo "<script>alert('Vehicle Updated Successfully');
    window.location='../views/dashboard.html'</script>";
} else {
    echo "<script>alert('Vehicle Not Updated, Try Again');
    window.history.go(-1)</script>";
}

mysqli_close($connection);
?>
