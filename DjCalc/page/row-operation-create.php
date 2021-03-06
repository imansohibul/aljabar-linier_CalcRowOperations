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
        <li><a href="form-update.php" >Determinant</a></li>
        <li><a href="form-delete.php">Invers</a></li>
    </ul>
</div>


<div class="create-matrix">
    <form class="form-basic" method="post" action="row-operation-input.php">
        <div class="form-title-row">
            <h1>Create Matrics</h1>
        </div>

        <table  align="center">
          <tr>
              <td align="center">
                    <div class="form-row">
                        <label>
                            <span>Row</span>
                            <select name="numb_row">
                              <?php for ($i=2; $i <= 22 ; $i++):?>
                              <option value="<?php echo $i;?>"><?php echo $i;?></option>
                              <?php endfor;?>
                            </select>
                        </label>
                    </div>
                </td>
                <td align="center">
                        <div class="form-row">
                            <label>
                                <span>Column</span>
                                <select name="numb_column">
                                    <?php for ($i=2; $i <= 6; $i++):?>
                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                    <?php endfor;?>
                                </select>
                            </label>
                        </div>
                </td>
      </tr>
      </table>
      <div align="center">
      	<button type="submit">Create</button>
      </div>
    </form>
</div>

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
