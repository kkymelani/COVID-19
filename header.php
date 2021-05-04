<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Forum</title>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="A short description." />
    <meta name="keywords" content="put, keywords, here" />
    <title>Forum</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <?php
    session_start();
    $error = false;
    if($error = false)
        {
            // the beautifully styled content, everything looks good
            echo '<div id="content">some text</div>';
        }
        else
        {
            // bad looking, unstyled error :-( 
        } 
    ?>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<div class="container">
<nav class="navbar navbar-light" style="background-color: #DED4FF ;">
        <a class="navbar-brand" style="font-weight: bold;">COVID-19</a>
      <form class="form-inline">
        <a class="nav-item nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link active" href="berita.html">News <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link active" href="aboutus.html">About Us<span class="sr-only">(current)</span></a>
        <!-- <a class="nav-item nav-link active" href="Logout.php">Logout <span class="sr-only">(current)</span></a> -->
      </form>
    </nav>
    <h1>My Forum</h1>
    <div id="menu">
        <a class="item" href="index_forum.php">Home</a> -
        <a class="item" href="create_topic.php">Create a topic</a> -
        <a class="item" href="create_cat.php">Create a category</a>
         
        <div id="userbar">
        <?php
                if($_SESSION['signed_in'])
                {
                    echo 'Hello ' . $_SESSION['user_name'] . '. Not you? <a href="Logout.php">Sign out</a>';
                }
                else
                {
                    echo '<a href="signin_forum.php">Sign in</a> or <a href="signup_forum.php">create an account</a>.';
                }
        ?>
    </div>
</div>


</body>
</html>