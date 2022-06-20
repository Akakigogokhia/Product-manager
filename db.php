<?php

namespace Classes;

define('host', "localhost");
define('user', "id18967441_root");
define('password', "*Saiaa888888");
define('dbName', "id18967441_product_list");

$db = new Database();

function validate($conn, $input)
{
    return mysqli_real_escape_string($conn, $input);
}
