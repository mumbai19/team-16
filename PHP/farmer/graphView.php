<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Jaljeevika</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="ftco-navbar" >
	    <div class="container d-flex align-items-center px-4">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-au">
            <li class="nav-item "><a href="index.php" class="nav-link pl-0">Home</a></li>
        <li class="nav-item "><a href="videoFarmerList.php" class="nav-link pl-0">Videos</a></li>
        <li class="nav-item "><a href="UploadFarmerAssets.php" class="nav-link pl-0">Sell</a></li>
        <li class="nav-item "><a href="checkVendorAssets.php" class="nav-link pl-0">Buy</a></li>
        <li class="nav-item "><a href="graphView.php" class="nav-link">Analysis</a></li>

            <li class="nav-item active"><a href="about.html" class="nav-link">About</a></li>
            <li class="nav-item "><a href="contact.html" class="nav-link">Contact Us</a></li>

          </ul>
           <ul class="navbar-nav ml-auto">
      <li class="nav-item mr-2">
	 <div id="google_translate_element" style="float:right"></div>
      </li>
    </ul>
	      </div>
	    </div>
	  </nav>
<?php

include("fusioncharts.php");
?>
<html>

<head>
    <title>FusionCharts | My First Chart</title>

    <script src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>

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
    $sqlQuery1 = "SELECT DISTINCT revenue,month,amt_seed FROM farmer; ";

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
        <br>
        <div class="container">
        <div class="card mx-5">
            <div class="card-header text-center">Create Video</div>
                <div class="row">
                    <div class="col-8 offset-2">
                    <div id="chart-container">Chart will render here!</div>
<br>
<iframe width="800" height="600" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQScYwgV0Wplcb67MpM_NJadUHtG7o-KAwEbdqM-RfYbryvcH75snt52TqtS4GuUg3KNhEOvvwgzg-a/pubchart?oid=900208045&amp;format=interactive"></iframe>

                    </div>
                </div>

            </form>

        </div>




    </div>
    </center>
</body>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
 
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>


