<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template for an interactive web page</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    
</head>
<body>
<div class="container" style="margin-top:30px">
<header class="jumbotron text-center row" style="margin-bottom:2px; background:linear-gradient(white,#0073e6);padding:20px">
<?php include('header.php');?>
</header>
<body>
    <div class="row" style="padding-left:0px;">
    <nav class="col-sm-2">
    <ul class="nav nav-pills flex-column">
    <?php include ('nav.php') ?>
    </ul>
    </nav>
    <div class="col-sm-8">
    <h2 class="text-center">This a home page</h2>
    <p>The home page content.The home page content.The home page content.The home page content.
    The home page content.The home page content.
    <br>
    The home page content.The home page content.The home page content.The home page content.
    The home page content.The home page content.
    <br>
    The home page content.The home page content.The home page content.The home page content.
    The home page content.The home page content.
    </p>
    </div>
    <aside class="col-sm-2">
    <?php include('info-col.php'); ?>
    </aside>
    <footer class="jumbotron text-center row" style="padding-bottom:1px; padding-top:8px">
    <?php include ('footer.php')?>
    </footer>
    </div>

</body>




</div>
    
</body>
</html>