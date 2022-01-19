
<!--Nama : Adriel Rianson-->
<!--NRP  : 1972040-->
<?php 
include_once '../../entity/Attendance.php';
include_once '../../entity/Matakuliah.php';
include_once '../../dao/CatatDaoImpl.php';
include_once '../../util/PDOUtil.php';

header('content-type:application/json');

$DAO=new CatatDaoImpl();
$list=$DAO->fetch();

echo json_encode($list);