<?php

include("fusioncharts.php");
?>
<html>

<head>
    <title>FusionCharts | My First Chart</title>

    // Include FusionCharts core file
    <script src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>

    // Include FusionCharts Theme File
    <script src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
</head>

<body>
    <?php

    $hostdb = "localhost";  // MySQl host
    $userdb = "root";  // MySQL username
    $passdb = "";  // MySQL password
    $namedb = "fcfg";  // MySQL database name
    $dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb);
    $sqlQuery = "SELECT DISTINCT revenue,month FROM farmer; ";

    $result = $dbhandle->query($sqlQuery);
    if ($result) {

        $arrData = array(
            "chart" => array(
                "caption" => "Monthwise Revenue [2019-20]",
                "xAxisName" => "Months",
                "yAxisName" => "Revenue"

            )
        );
    }
    $arrData["data"] = array();

    while ($row = mysqli_fetch_array($result)) {
        array_push($arrData["data"], array(
            "label" => $row["month"],
            "value" => $row["revenue"]
        ));
    }



    $jsonData = json_encode($arrData);
    $arrChartConfig = array(
        "chart" => array(
            "caption" => "Monthwise revenue [2019-20]",
            "subCaption" => "revenue analysis",
            "xAxisName" => "Months",
            "yAxisName" => "Revenue",
            "numberSuffix" => "K",
            "theme" => "fusion"
        )
    );
    $Chart = new FusionCharts("column2d", "MyFirstChart", "700", "400", "chart-container", "json", $jsonData);

    $Chart->render();

    ?>

    <center>
        <div id="chart-container">Chart will render here!</div>
    </center>
</body>

</html>