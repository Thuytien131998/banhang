<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Juno</title>
    <link rel="stylesheet" href="./js/bootstrap.min.css">
  <script src="./js/jquery-3.3.1.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

</head>
<body>
    <div class="container-fluid"><!--phan dau trang-->
    <?php
     include "controller/menu.php";
    ?>
    </div>

    <div class="content"><!--phan noi dung-->
      <?php
       include "view/content.php";
       include "view/home.php";
      ?>
    </div>

    <div class="footer"><!--cuoi trang-->
      <?php 
       include "controller/footer.php";
      ?>
    </div>
</body>
</html>