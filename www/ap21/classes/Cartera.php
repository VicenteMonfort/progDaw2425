<?php

class Cartera
{
    private $clients = [];


    public function getClient($id)
    {
        foreach ($this->clients as $client) {
            if ($client->getId() == $id)
                return $client;
        }
        return new Empresa(null, null, null, null, null);
    }

   

    public function delete($id)
    {
       
    }

    public function update($datos)
    {
        
        
    }

   

    public function insert($datos)
    {
        $conn = new mysqli('db', 'root', 'test', "ap21");
                
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $id=$datos["id"];
        $company=$datos["company"];
        $investment=$datos["investment"];
        $date=$datos["date"];
        $active=$datos["active"];
        $query = "INSERT INTO `investment`(`id`, `company`, `investment`, `date`, `active`)
                VALUES ('$id', '$company', '$investment', '$date', '$active')";
        $result = $conn->query($query);

       
        $conn->close();
       
    }

    public function drawList()
    {
        $conn = new mysqli('db', 'root', 'test', "ap21");
                
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $query = 'SELECT * From investment';
        $result = $conn->query($query);
        //$result = mysqli_query($conn, $query);

        echo '<table class="table table-striped">';
        echo '<tr>
                <th>Id</th>
                <th>Company</th>
                <th>Investment</th>
                <th>Date</th>
                <th>Active</th>
                <th colspan="2">Actions</th>
            </tr>';
        while($value = $result->fetch_array(MYSQLI_ASSOC)){
            echo '<tr>';
            foreach($value as $element){
                echo '<td>' . $element . '</td>';
            }
            echo '<td>' . "Del" . '</td>';
            echo '<td>' . "Upd" . '</td>';
            echo '</tr>';
        }
        echo '</table>';

        $result->close();
        $conn->close();
  
    }
}
?>