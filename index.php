<?php
 
  //Include Google Configuration File
  include('gconfig.php');
 
  if(!isset($_SESSION['access_token'])){
   //Create a URL to obtain user authorization
   $google_login_btn = '<a href="'.$google_client->createAuthUrl().'"><button type="submit" class="btn btn-danger">Login With Google</button></a>';
  }
  else{
    header("Location: dashboard.php");
  }
?>

<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>PHP Login With Google</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
   
 </head>
 <body>

    <div class="container" style="padding: 0px 350px 40px 350px;margin-top:100px">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>

        <br />
        <h2 align="center"></h2>
        <br />
        <div class="panel panel-default">
            <?php
                echo '<div align="center">'.$google_login_btn . '</div>';
            ?>
        </div>
    </div>
 </body>
</html>