<!DOCTYPE html>

    
<?php 
session_start();
if(!isset($_SESSION["role"]) || (!isset($_SESSION["id"])))

	{
		header("location: ../login.php");
	}
else{
    
}?>






<!doctype html>
<html lang="en">
  <head>
    <title>Fox University - Free Bootstrap 4 Template by Colorlib</title>
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
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item"><a href="index.html" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item active"><a href="about.html" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="videoList.html" class="nav-link">Videos</a></li>
	        	<li class="nav-item"><a href="teacher.html" class="nav-link">Staff</a></li>
	        	<li class="nav-item"><a href="expertForm.html" class="nav-link">Upload</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	        </ul>
            <ul class="navbar-nav ml-auto">
      <li class="nav-item mr-2">
	 <div id="google_translate_element" style="float:right"></div>
      </li>
    </ul>
	      </div>
	    </div>
	  </nav>
  <hr>
    <div class="container">
        <div class="card mx-5">
            <div class="card-header text-center">Create Video</div>
            <form action="expertUpload.php" method="post">
                <div class="row">
                    <div class="col-8 offset-2">
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label ">Video Title</label>
                            <input id="title" type="text" class="form-control" name="title" value=""
                                autocomplete="title" required>
                        </div>

                        <div class="form-group row">
                            <label for="url" class="col-md-4 col-form-label ">Video URL</label>
                            <input class="form-control" type="text" name="url" id="url" required>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label ">Description</label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="5"
                                required></textarea>
                        </div>
                        <div class="form-group row">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">languages</label>
                                </div>
                                <select class="custom-select" name="lang" id="inputGroupSelect01" required >
                                    <option selected>Choose language</option>
                                    <option value="hindi">Hindi</option>
                                    <option value="english">English</option>
                                    <option value="bengali">Bengali</option>
                                    <option value="marathi">Marathi</option>
                                    <option value="tamil">Tamil</option>
                                    <option value="urdu">Urdu</option>
                                    <option value="gujarati">Gujarati</option>
                                    <option value="odia">Odia</option>
                                    <option value="malayalam">Malayalam</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keywords" class="col-md-4 col-form-label" >Keywords</label>
                            <input id="keywords" type="text" class="form-control" name="keywords" value=""  required placeholder="Please seperate keywords by ,">
                        </div>
                        <div class="form-group row">
                            <button class="btn btn-primary" type="submit">Post</button>
                        </div>
                    </div>
                </div>

            </form>

        </div>




    </div>


    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>