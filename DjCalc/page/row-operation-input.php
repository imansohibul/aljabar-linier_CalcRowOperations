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
    <style>
    body{background-color: #efefef;}
    </style>

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

<?php if(isset($_POST['numb_row'])){ session_start(); $_SESSION['row'] = $_POST['numb_row'];}
      if(isset($_POST['numb_column'])) {$_SESSION['column']= $_POST['numb_column'];}
?>

<div class="container">
<div class="card text-xs-center">
  <div class="card-header">
    Row Operations 
  </div>
  <div class="card-block">
    <h4 class="card-title">Input Matrics</h4>
    <p class="card-text">		
		<form class="form-inline" method="post" action="row-operation-result.php">
        <table class="matrix" align="center">
          <?php for ($i=0; $i < $_SESSION['row']; $i++):?>
            <tr>
                <?php for ($j=0; $j < $_SESSION['column']; $j++) :?>
                  <td>
					<div class="form-group">
						
							<input type="textbox" name="matrix[<?php echo $i;?>][<?php echo $j;?>]" placeholder="0">
	
					</div>
                  </td>
                <?php endfor;?>
            </tr>
          <?php endfor;?>
        </table>

      <div align="center">
      	<button  class="btn-primary" type="submit">Go !</button>
      </div>
    </form>		
	</p>
  </div>
</div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<div class="row-operation">
    
</div>
<script type="text/javascript">
              $(document).ready(function() {
              var $inputs = $('.resizing-input');

              // Resize based on text if text.length > 0
              // Otherwise resize based on the placeholder
              function resizeForText(text) {
                var $this = $(this);
                if (!text.trim()) {
                  text = $this.attr('placeholder').trim();
                }
                var $span = $this.parent().find('span');
                $span.text(text);
                var $inputSize = $span.width();
                $this.css("width", $inputSize);
              }

              $inputs.find('input').keypress(function(e) {
                if (e.which && e.charCode) {
                  var c = String.fromCharCode(e.keyCode | e.charCode);
                  var $this = $(this);
                  resizeForText.call($this, $this.val() + c);
                }
              });

              // Backspace event only fires for keyup
              $inputs.find('input').keyup(function(e) {
                if (e.keyCode === 8 || e.keyCode === 46) {
                  resizeForText.call($(this), $(this).val());
                }
              });

              $inputs.find('input').each(function() {
                var $this = $(this);
                resizeForText.call($this, $this.val())
              });
            });
    </script>


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
    <script src="../js/row-operation.js"></script>

</body>
</html>
