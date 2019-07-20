    
<?php 
session_start();
if(!isset($_SESSION["role"]) && (!isset($_SESSION["id"])))

	{
		header("location: index.php");
	}
else{
    header("location: ../login.php");
}?>






<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
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