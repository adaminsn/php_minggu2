<?php
require_once 'Domain_object/node_role.php';


$obj_role = [];

$obj_role[] = new Role(1, "Kasir", "Dibuat untuk kasir", 1);
$obj_role[] = new Role(2, "Admin", "Dibnuat untuk admin", 1);
$obj_role[] = new Role(3, "Owner", "Dibuat untuk yang punya", 0);
$obj_role[] = new Role(4, "Customer", "Dibuat untuk pelanggan", 1);


include 'views/role_list.php';
?>
