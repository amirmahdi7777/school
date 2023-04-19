<!doctype html>
<html>
<head>
    <meta charest="utf-8">
    <title>edit</title>
    <link href="css/style.css" rel="stylesheet"/>
</head>

<body>
<?php
include "connection.php";
if (isset($_GET['id']) && isset($_GET['page'])) {
    $id = $_GET['id'];
    $page = $_GET['page'];
    switch ($page) {
        case 1:
            include "connection.php";
            $query = "DELETE FROM class WHERE class_id=" . $id;
            $result = $db->prepare($query);
            $result->execute();
            $row = $result->fetch(PDO::FETCH_ASSOC);
            if (isset($_POST['submit'])) {

                $class_name = $_POST['txt_class'];
                $query = "UPDATE class SET class_name='" . $class_name . "' WHERE class_id=" . id;
                $del = $dp->prepare($query);
                $del->execute();
                header("location:index.php");
            }
    }
}
echo ' div'

