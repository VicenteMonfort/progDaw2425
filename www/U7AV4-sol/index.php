<?php

class Cartera
{
    private $clients = [];
    public function __construct($data)
    {
        $this->loadData($data);
    }
    private function loadData($data)
    {
        foreach ($data as $element) {
            array_push(
                $this->clients,
                new Empresa(
                    $element["id"],
                    $element["company"],
                    $element["investment"],
                    $element["date"],
                    $element["active"]
                )
            );
        }
    }

    public function drawList()
    {
        $output = "";
        foreach ($this->clients as $client) {
            $output .= "<tr>";
            $output .= "    <td>" . $client->getId() . "</td>";
            $output .= "    <td" . (($client->isVIP()) ? " class='vip'" : "") . ">" . $client->getCompany() . "</td>";
            $output .= "    <td>" . number_format(intval($client->getInvestment()), 2,"'",".") . " €</td>";
            $output .= "    <td>" . date("F d, Y", strtotime($client->getDate())) . "</td>";
            $output .= "    <td>";
            $output .= ($client->getActive()) ?
                "<img src='img/img05.gif'>" :
                "<img src='img/img06.gif'>";
            $output .= "    </td>";
            $output .= "</tr>";
        }
        return $output;
    }
}

class Empresa
{
    protected $id;
    protected $company;
    protected $investment;
    protected $date;
    protected $active;

    public function __construct($id, $company, $investment, $date, $active)
    {
        $this->id = $id;
        $this->company = $company;
        $this->investment = $investment;
        $this->date = $date;
        $this->active = $active;
    }
    public function isVIP()
    {
        return $this->investment >= 1000000;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCompany()
    {
        return $this->company;
    }

    public function getInvestment()
    {
        return $this->investment;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getActive()
    {
        return $this->active;
    }
}

$data = [
    [
        "id" => "BBX28AIL5SZ",
        "company" => "In Aliquet Corp.",
        "investment" => "4472729",
        "date" => "2020-07-09",
        "active" => true
    ],
    [
        "id" => "SBV55WFC5MV",
        "company" => "Integer Vulputate Risus Institute",
        "investment" => "4471554",
        "date" => "2019-12-27",
        "active" => false
    ],
    [
        "id" => "TEF51NBI7QF",
        "company" => "Vivamus Nibh LLC",
        "investment" => "8919033",
        "date" => "2018-05-28",
        "active" => false
    ],
    [
        "id" => "CBM81YFY6XR",
        "company" => "Eu LLP",
        "investment" => "8811172",
        "date" => "2020-06-06",
        "active" => false
    ],
    [
        "id" => "PTH79SXU5CW",
        "company" => "Urna Vivamus Associates",
        "investment" => "8397876",
        "date" => "2020-01-12",
        "active" => false
    ],
    [
        "id" => "JDW43DAH5CD",
        "company" => "Varius Orci In LLP",
        "investment" => "8835239",
        "date" => "2017-12-14",
        "active" => false
    ],
    [
        "id" => "HJL62XCJ5KX",
        "company" => "Dolor Limited",
        "investment" => "797550",
        "date" => "2019-07-06",
        "active" => false
    ],
    [
        "id" => "BEG74SPW6JD",
        "company" => "Suspendisse Eleifend Cras Corporation",
        "investment" => "261822",
        "date" => "2018-07-06",
        "active" => false
    ],
    [
        "id" => "KIC32QXK5PF",
        "company" => "Suscipit Nonummy Ltd",
        "investment" => "1668744",
        "date" => "2019-12-05",
        "active" => true
    ],
    [
        "id" => "RBX62ZFB3GH",
        "company" => "Ligula Incorporated",
        "investment" => "9669887",
        "date" => "2019-07-28",
        "active" => true
    ],
    [
        "id" => "SSQ55BYQ3SU",
        "company" => "In Scelerisque Associates",
        "investment" => "4982932",
        "date" => "2020-04-21",
        "active" => true
    ],
    [
        "id" => "UXF17XKT9WD",
        "company" => "Turpis Nec Ltd",
        "investment" => "2281779",
        "date" => "2018-09-23",
        "active" => false
    ],
    [
        "id" => "UDP44RHT1EP",
        "company" => "Mollis Nec Cursus LLP",
        "investment" => "988034",
        "date" => "2018-09-09",
        "active" => true
    ],
    [
        "id" => "BDB43DDW3RX",
        "company" => "Diam At Associates",
        "investment" => "5884557",
        "date" => "2019-06-26",
        "active" => true
    ],
    [
        "id" => "HUR75PZN3YB",
        "company" => "Lacus Cras Industries",
        "investment" => "4838613",
        "date" => "2017-12-20",
        "active" => true
    ],
    [
        "id" => "HRA25DQF5QT",
        "company" => "Mollis Lectus company",
        "investment" => "4639909",
        "date" => "2018-08-15",
        "active" => true
    ],
    [
        "id" => "ZXT62QWY5NC",
        "company" => "Quam Dignissim Incorporated",
        "investment" => "7037731",
        "date" => "2018-06-18",
        "active" => true
    ],
    [
        "id" => "XGO44WXW3EC",
        "company" => "Interdum Libero Dui LLC",
        "investment" => "2886694",
        "date" => "2019-03-10",
        "active" => false
    ],
    [
        "id" => "ITE69NTR1AX",
        "company" => "Ipsum Ac Foundation",
        "investment" => "9156702",
        "date" => "2018-09-17",
        "active" => true
    ],
    [
        "id" => "GCQ53TEH8BN",
        "company" => "Vitae Aliquam PC",
        "investment" => "6904158",
        "date" => "2019-07-04",
        "active" => false
    ]
];

$cartera = new Cartera($data);

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
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="5">
                    </div>
                </td>
            </tr>
        </tfoot>
        <tbody>
            <?= $cartera->drawList() ?>
        </tbody>
    </table>
</body>

</html>