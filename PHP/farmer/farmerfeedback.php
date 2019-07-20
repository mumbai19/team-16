<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>JalJeevika</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">

    <?php
    $server="localhost";
    $user="root";
    $pass1="";
    $dbname="";


        $conn=mysqli_connect($server,$user,$pass1,$dbname);
        //echo "<script type='text/javascript'>alert('Connection Done');</script>";
    

    if(isset($_POST['submit']))
    {
        $month=$_POST['month'];
        $year=$_POST['year'];
        $cost=$_POST['cost'];
        $revenue=$_POST['revenue'];
        $seed=$_POST['seed'];
        $fish=$_POST['fish'];


        
            
                $sql2="INSERT INTO datamin VALUES('$month','$year','$cost','$revenue','$seed','$fish)";
                $res2=mysqli_query($conn,$sql2);
                
    }
        
 ?>
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Submit Feedback</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="" >
                        <div class="form-row">
                            <div class="name">Month</div>
                            <div class="value">
                                
                                <input class="input--style-5" type="text" name="month">
                                            
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Year</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="year">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Cost Incurred</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="cost">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Revenue</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="revenue">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Seed sold</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="seed">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Fish sold</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="fish">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="form-row p-t-20">
                            <label class="label label--block">Are you an existing customer?</label>
                            <div class="p-t-15">
                                <label class="radio-container m-r-55">Yes
                                    <input type="radio" checked="checked" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div> -->
                        <div>
                            <button class="btn btn--radius-2 btn--red text-center" type="submit" name="submit" >Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->