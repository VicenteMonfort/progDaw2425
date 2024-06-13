<?php

require_once "autoload.php";

$cartera = new Cartera("data.csv");

?>
<!DOCTYPE html>
<html lang="en">

<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table.redTable {
            border: 2px solid #A40808;
            background-color: #EEE7DB;
            width: 100%;
            text-align: center;
            border-collapse: collapse;
        }

        table.redTable td,
        table.redTable th {
            border: 1px solid #AAAAAA;
            padding: 3px 2px;
        }

        table.redTable tbody td {
            font-size: 13px;
        }

        table.redTable tr:nth-child(even) {
            background: #F5C8BF;
        }

        table.redTable thead {
            background: #A40808;
        }

        table.redTable thead th {
            font-size: 19px;
            font-weight: bold;
            color: #FFFFFF;
            text-align: center;
            border-left: 2px solid #A40808;
        }

        table.redTable thead th:first-child {
            border-left: none;
        }

        table.redTable tfoot {
            font-size: 13px;
            font-weight: bold;
            color: #FFFFFF;
            background: #A40808;
        }

        table.redTable tfoot td {
            font-size: 13px;
        }

        table.redTable tfoot .links {
            text-align: right;
        }

        table.redTable tfoot .links a {
            display: inline-block;
            background: #FFFFFF;
            color: #A40808;
            padding: 2px 8px;
            border-radius: 5px;
        }

        .vip {
            font-weight: bolder;
            color: blue;
        }

        a:link, a:active, a:visited {
            color:white;
            font-weight: bold;
        }
        a:hover {
            color:lightblue;
            font-weight: bold;
        }
    </style>
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