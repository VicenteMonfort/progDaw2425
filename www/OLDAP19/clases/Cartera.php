<?php

class Cartera
{
    private $clients = [];
    private $fichero;
    public function __construct($fichero)
    {
        $this->fichero = $fichero;
        $this->loadData($fichero);
    }
    private function loadData($fichero)
    {
        $gestor = fopen($fichero, "r");
        while (($element = fgetcsv($gestor)) !== false) {
            array_push(
                $this->clients,
                new Empresa(...$element)
            );
        }
        fclose($gestor);
    }

    public function drawList()
    {
        $output = "";
        foreach ($this->clients as $client) {
            $output .= "<tr>";
            $output .= "    <td>" . $client->getId() . "</td>";
            $output .= "    <td" . (($client->isVIP()) ? " class='vip'" : "") . ">" . $client->getCompany() . "</td>";
            $output .= "    <td>" . number_format(intval($client->getInvestment()), 2, "'", ".") . " €</td>";
            $output .= "    <td>" . date("F d, Y", strtotime($client->getDate())) . "</td>";
            $output .= "    <td>";
            $output .= ($client->getActive()) ?
                "<img src='img/img05.gif'>" :
                "<img src='img/img06.gif'>";
            $output .= "    </td>";
            $output .=     "<td><a href='delete.php?id=" . $client->getId() . "'><img src='img/del_icon.png' width='25'></a></td>";
            $output .=     "<td><a href='edit.php?id=" . $client->getId() . "'><img src='img/edit_icon.png' width='25'></a></td>";
            $output .= "</tr>";
        }
        return $output;
    }

    function getClient($id)
    {
        foreach ($this->clients as $client) {
            if ($client->getId() == $id)
                return $client;
        }
        return new Empresa(null, null, null, null, null);
    }

    public function insert($datos)
    {

        $id = $datos["id"];
        $company = $datos["company"];
        $investment = $datos["investment"];
        $date = $datos["date"];
        $active = isset($datos["active"]);

        $newClient = new Empresa($id, $company, $investment, $date, $active);

        array_push($this->clients, $newClient);
        $this->persist();
        return true;
    }

    public function update($datos)
    {
        foreach ($this->clients as $client) {
            if ($client->getId() == $datos["id"]) {
                $client->setCompany($datos["company"]);
                $client->setInvestment($datos["investment"]);
                $client->setDate($datos["date"]);
                $client->setActive(isset($datos["active"]));
            }
        }
        $this->persist();
        return true;
    }

    public function delete($id)
    {
        foreach ($this->clients as $key => $client) {
            if ($client->getId() == $id) array_splice($this->clients, $key, 1);
        }
        $this->persist();
        return true;
    }

    private function persist()
    {
        $gestor = fopen($this->fichero, "w");
        foreach ($this->clients as $client) {
            fputcsv($gestor, [
                $client->getId(),
                $client->getCompany(),
                $client->getInvestment(),
                $client->getDate(),
                (($client->getActive()) ? 'true' : 'false')
            ]);
        }
        fclose($gestor);
    }
}
