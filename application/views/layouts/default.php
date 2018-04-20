<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title; ?></title>
    <link href="/public/styles/bootstrap.css" rel="stylesheet">
    <link href="/public/styles/style.css" rel="stylesheet">
    <script src="/public/scripts/jquery.js"></script>
    <script src="/public/scripts/bootstrap.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="/">Main</a>
        <button class="navbar-toggler navbar-toggler-icon" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="weather">Weather</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/feedbackview">Feedback list </a>
                </li>
                <?php
                if(isset($_SESSION['authorize'])){
                    echo '
                           <form method="post">
                                 <input type="submit" class="btn btn-outline-dark" name="logout"  value="logout" /><br/>                           
                          </form>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav> <br><br><br>
<?php echo $content; ?>
<hr>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">

                <p class="copyright text-muted">&copy;</p>
            </div>
        </div>
    </div>
</footer>
<script src="/public/scripts/validator.js"></script>
<!--<script src="/public/scripts/form.js"></script>-->
</body>
</html>