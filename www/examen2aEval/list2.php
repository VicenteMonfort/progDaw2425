<?php

require_once "autoload.php";

$agenda = new Agenda('data.csv');

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
                <th>PatientId</th>
                <th>Bill</th>   
                <th>Date</th>
                <th>Years</th>
                <th>Paid</th>
                <th colspan="2">Actions</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="7">
                    <div> <a href="new.php">New Date</a> </div>
                </td>
            </tr>
        </tfoot>
        <tbody>
            <?= $agenda->drawList() ?>
        </tbody>
    </table>
</body>

</html>