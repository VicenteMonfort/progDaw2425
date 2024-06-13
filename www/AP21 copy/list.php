<?php

require_once "autoload.php";

$cartera = new Cartera('data.csv');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="listStyle.css" media="all">
</head>

<body>
    <table class="redTable">
        <thead>
            <tr>
                <th>Id</th>
                <th>Company</th>
                <th>Investment</th>
                <th>Date</th>
                <th>Active</th>
                <th colspan="2">Actions</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="7">
                    <div> <a href="new.php">New Client</a> </div>
                </td>
            </tr>
        </tfoot>
        <tbody>
            <?= $cartera->drawList() ?>
        </tbody>
    </table>
</body>

</html>