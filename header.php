<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php
        if (empty($title)){
            $title = 'shop online';
        }
        ?> </title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" >
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div id="col-md-12 col-md-offset-0" >
    <ul class="nav nav-tabs" id="color1" style="color: white;">
        <li role="presentation" ><a href="sold.php" id="lic1">Home</a></li>
        <li role="presentation"><a href="register.php" id="lic2">New account</a></li>
        <li role="presentation" class="active"><a href="product.php" id="lic3" >Add product</a></li>

        <div class="btn-group " style="float:right;" >
            <button type="button" class="btn-link dropdown-toggle"id='dp' data-toggle="dropdown"><?php echo $_SESSION['username']; ?><span class="caret red"></span></button>
            <ul class="dropdown-menu pull-right" role="menu">
                <li><a href="#">Your profile</a></li>
                <li><a href="outofstock.php">Items out of stock <span class="badge"><?php print $_SESSION['count']; ?></span></a></li>
                <li><a href="profits.php">Profit</a></li>

                <li class="divider"></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </ul>
    <?php if ($title == 'Home page ')
    {
        include 'search.php';
    } ?>
</div>