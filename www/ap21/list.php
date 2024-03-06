<?php

require_once "autoload.php";
$connection = new Connection();
$conn = $connection->getConn();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
</head>

<body>
    <table class="redTable">
        <thead>
            <tr>
                <td colspan="7">
                    <div> <a href="new.php">New Client</a> </div>
                </td>
            </tr>
        </thead>
        <tbody>
        <?php
        
                
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $query = 'SELECT * From investment';

        $result = $conn->query($query);

        //cálculos paginación
 
        $numRows = $result->num_rows;
        $rowsPag = 10;
        $numPag = ceil ($numRows / $rowsPag);

        $pagActive = (isset($_GET["page"])) ? $_GET["page"] : 1;
        $firstRow = ($pagActive -1) * $rowsPag;

        $lastRow = $firstRow + $rowsPag -1;
        $lastRow = ($lastRow > $numRows) ? $numRows-1 : $lastRow;

        echo "pagina activa $pagActive";
        echo " primera fila $firstRow";
        echo " última fila $lastRow";
        
        echo '<table class="table table-striped">';
        echo '<tr>
                <th>Id</th>
                <th>Company</th>
                <th>Investment</th>
                <th>Date</th>
                <th>Active</th>
                <th colspan="2">Actions</th>
            </tr>';
        //while ($value = $result->fetch_array(MYSQLI_ASSOC)){
            for ($i = $firstRow; $i <= $lastRow; $i++){
                $result->data_seek($i);
                $value = $result->fetch_array(MYSQLI_ASSOC);
                echo '<tr>';
                echo '<td>' . $value["id"] . '</td>';
                echo '<td>' . $value["company"] . '</td>';
                echo '<td>' . $value["investment"] . '</td>';
                echo '<td>' . $value["date"] . '</td>';
                echo '<td>' . $value["active"] . '</td>';
                echo "<td><a href='delete.php?id=" . $value["id"] . "'><img src='img/del_icon.png' width='25'></a></td>";
                echo "<td><a href='edit.php?id=" . $value["id"] . "'><img src='img/edit_icon.png' width='25'></a></td>";
                echo '</tr>';
            }
        //} 
        echo '</table>';

        for ($i=1; $i <= $numPag; $i++){
            if($i==$pagActive){
                echo " <strong>$i</strong> ";
            }else{
                echo " <a href='list.php?page=$i'>$i</a> ";
            }
        }

        $result->close();

        ?>
        </tbody>
    </table>
</body>

</html>