<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title><?= $title;?></title>
</head>
<body>
<?php require __DIR__ . '/../parts/nav.template.php';?>
<div class="container">
    <div class="row">
        <div class="col-lg-3">

        </div>
        <div class="col-lg-6">
            <form action="/user/registration" method="POST">
                <div class="form-group">
                    <h1>User registration form</h1>
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo isset($_SESSION['data']['name']) ? $_SESSION['data']['name'] : '' ;?>">
                    <span style="color:red;font-size: 14px;"><?= error('name'); ?></span>
                </div>
                <div class="form-group">
                    <label>Email address</label>
                    <input type="text" class="form-control" name="email" value="<?php echo isset($_SESSION['data']['email']) ? $_SESSION['data']['email'] : '' ;?>">
                    <span style="color:red;font-size: 14px;"><?= error('email'); ?></span>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" value="<?php echo isset($_SESSION['data']['password']) ? $_SESSION['data']['password'] : '' ;?>">
                    <span style="color:red;font-size: 14px;"><?= error('password'); ?></span>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-lg-3">

        </div>
    </div>
</div>

</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
</body>
</html>