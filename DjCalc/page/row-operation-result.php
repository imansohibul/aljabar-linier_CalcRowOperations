<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dj Calc | Liniear Algebra Toolkit</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/bootstrap-flex.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/form-basic.css" rel="stylesheet">


    <?php include '../lib/RowOperation.php'; ?>

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="../images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">
    <style> body{background-color: #efefef;}</style>
</head><!--/head-->
<body>


    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="../images/logo.png" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="contact-us.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->
<div class="row-operation">
    <ul>
        <li><a href="index.html" class="active">Linier Equations</a></li>
        <li><a href="form-update.php">Determinant</a></li>
        <li><a href="form-delete.php">Invers</a></li>
    </ul>
</div>

<?php
            session_start();
          if(isset($_POST['matrix'])) {
            $input = $_POST['matrix'];
          }
         $matrix = new RowOperation($_SESSION['row'],$_SESSION['column'],0);
         $matrix->setMatrix($input);
         $matrix->startGaussJordan();
        $step=$matrix->getStepOperation() ;
?>

<div class="card-size" id="result">
  <div class="card">
      <div class="card-header">
          <h5 class="card-title text-sm-center"> RESULTS </h5>
      </div>
      <div class="card-block">
        <div class="row">
          <div class="col-xs">
          <table width="100%">
            <tr>
              <td  style="padding:1%;"><?php $matrix->printMatrix($matrix->getInitMatrix());?> </td>
              <td  width="20%"  class="text-sm-center"><img src="../images/feature/arrow-right.png" width="32%" height="8%" style="opacity: 0.5;"></img></td>
              <td  style="padding:1%;"><?php $matrix->showMatrix();?></td>
            </tr>
          </table>
        </div>
        </div>
    </div>
</div>
</div>


<?php for($i=0; $i < count($step); $i++):?>
<div class="card-size" id="result">
  <div class="card">
      <div class="card-header">
          <h5 class="card-title text-sm-center"><?php $counter=$i+1;echo 'STEP '.$counter ;?></h5>
      </div>
      <div class="card-block">
        <div class="card-title text-sm-center">
            <strong><?php echo $step[$i]->toString();?></strong>
        </div>
        <div class="row">
            <div class="col-xs">
            <table width="100%">
              <tr>
                <td  style="padding:1%;"><?php $step[$i]->showBfMatrix();?> </td>
                <td  width="20%"  class="text-sm-center"><img src="../images/feature/arrow-right.png" width="32%" height="8%" style="opacity: 0.5;"></img></td>
                <td  style="padding:1%;"><?php $step[$i]->showAfMatrix();?></td>
              </tr>
            </table>
           </div>
        </div>
        </div>
    </div>
</div>
<?php endfor;?>



    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2016. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
