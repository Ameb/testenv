<?php
    require_once('../libs/mysql.inc.php');

    $query = "SELECT MIN(name) from users GROUP BY id HAVING id=" . $_GET['id'];
    dbQuery($query);
?>
