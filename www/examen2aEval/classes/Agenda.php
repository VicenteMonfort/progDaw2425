<?php
/**
 * Class to represent a agenda
 */
class Agenda
{
    private $visits = [];
    private $file;

    public function __construct($file)
    {
        $this->file = $file;
        $this->loadData($file);
    }
    /**
     * Return one visit (id, date, bill, paid)
     * @return array All the elements in 1 visit
     */
    public function getVisit($id)
    {
        foreach ($this->visits as $visit) {
            if ($visit->getId() == $id)
                return $visit;
        }
        return new Visit(null, null, null, null, null);
    }
    /**
     * Put the info in csv file into visits array
     * @param csvFile
     */
    private function loadData($file)
    {
        $gestor = fopen($file, "r");
        while (($element = fgetcsv($gestor)) !== false) {
            array_push(
                $this->visits,
                new Visit(...$element) //OJO: ... Spread Operator
            );
        }
        fclose($gestor);
    }

    public function delete($id)
    {
        foreach ($this->visits as $key => $visit) {
            if ($visit->getId() == $id) array_splice($this->visits, $key, 1);
        }
        $this->persist();
        return true;
    }

    public function update($datos)
    {
        foreach ($this->visits as $visit) {
            if ($visit->getId() == $datos["id"]) {
                $visit->setName($datos["name"]);
                $visit->setBill($datos["bill"]);
                $visit->setDate($datos["date"]);
                $visit->setPaid(isset($datos["paid"]));
            }
        }
        $this->persist();
        //return true;
    }
    /**
     * Put the info in visits array into csv file
     */
    private function persist()
    {
        $gestor = fopen($this->file, "w");
        foreach ($this->visits as $visit) {
            fputcsv($gestor, [
                $visit->getId(),
                $visit->getName(),
                $visit->getBill(),
                $visit->getDate(),
                (($visit->getPaid()) ? 'true' : 'false')
            ]);
        }
        fclose($gestor);
    }

   /* public function insert($datos)
    {

        $id = $datos["id"];
        $company = $datos["company"];
        $investment = $datos["investment"];
        $date = $datos["date"];
        $active = isset($datos["active"]);

        $newClient = new Empresa($id, $company, $investment, $date, $active);

        array_push($this->visits, $newClient);
        $this->persist();
        return true;
    }*/

    public function drawList()
    {
        $output = "";
        foreach ($this->visits as $visit) {
            $visitDate=date("F d, Y", strtotime($visit->getDate()));
            $output .= "<tr>";
            $output .= "    <td>" . $visit->getId() . "</td>";
            $output .= "    <td" . (($visit->isVIP()) ? " class='vip'" : "") . ">" . $visit->getName() . "</td>";
            $output .= "    <td>" . number_format(intval($visit->getBill()), 2,"'",".") . " €</td>";
            $output .= "    <td>" . $visitDate . "</td>";
            $output .= "    <td>" . number_format((strtotime(date("F d, Y"))-strtotime($visitDate))/3600/24/365, 0) . "</td>"; //days until today
            $output .= "    <td>";
            $output .= ($visit->getPaid()) ?
                "<img src='img/img05.gif'>" :
                "<img src='img/img06.gif'>";
            $output .= "    </td>";
            $output .=     "<td><a href='delete.php?id=" . $visit->getId() . "'><img src='img/del_icon.png' width='25'></a></td>";
            $output .=     "<td><a href='edit.php?id=" . $visit->getId() . "'><img src='img/edit_icon.png' width='25'></a></td>";
            $output .= "</tr>";
        }
        return $output;
    }
}
?>