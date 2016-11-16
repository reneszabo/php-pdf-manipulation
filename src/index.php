<?php require_once __DIR__.'/receipt.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Rene Ramirez - PHP Image</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style type="text/css">
    body > header{
      min-height: 75px;
    }
    iframe{
      width: 100%;
    }
  </style>
</head>
<body>
<header>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          Rene Ramirez - PHP PDF Assignment
        </a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li>
        <a href="php-receipt.php" target="_blank" >DOWNLOAD INVOCE</a>
        </li>
      </ul>
    </div>
  </nav>
</header>
<div class="container">
  <legend>Data for the Invoice</legend>
  <pre><?php print_r ($invoice); ?></pre>
  <legend>Template for the Invoice</legend>
  <div>
    <b>Template thanks to : </b><a href="https://github.com/sohelamin/invoice.pdf">https://github.com/sohelamin/invoice.pdf</a>
  </div>
  <br>
  <div class="iframe-wrapper">
  <iframe src="template.php" frameborder="0" scrolling="no" onload="resizeIframe(this)">
  </iframe>
  </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" >
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
</script>
</body>
</html>