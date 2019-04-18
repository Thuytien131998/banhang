<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Juno</title>
    <link rel="stylesheet" href="./js/bootstrap.min.css">
  <script src="./js/jquery-3.3.1.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <link rel="stylesheet" href="css/master.css">

</head>
<body>
    <div class="container-fluid"><!--phan dau trang-->
    <div class="top">
     <div class="row">
         <div class="col-sm-3">
          <div class="top-logo-center">
            <a href="">
              <img src="img/juno.png"  style="padding:2px;height: 90px;width:90%;margin-left: 50px; margin-top:-15px;">
            </a>
          </div>
         </div>
         <div class="col-sm-4">
         <form class="example" action="" style="margin:auto;max-width:300px">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit">
              <i class="fa fa-search"></i>
            </button>
          </form>
         </div>
         <div class="col-sm-3">
           <div class="phone">
             <i class="fa fa-phone" style="font-size:25px;color:black"></i>
             <span> 11109287
             </span>
           </div>  
         </div>
         <div class="col-sm-2">
          <div class="cart">
            <i class="fa fa-shopping-bag" style="font-size:25px;"></i>
            <span></span>
            <span>sản phẩm</span>
          </div>
         </div>
       </div>
       <div class="row" style="background-color:rgb(243, 241, 241);  padding: 20px;">
            <div class="col-sm-2" >
              <i class="fa fa-star" style="font-size:25px;margin-left:120px;margin-top:-5px;"></i>
              <span style="display: block;font-size:10px;margin-left:110px;">Polka Dot</span>
            </div> 
            <div class="col-sm-1">
              <img src="./img/xangdan.png" style="height:50px;margin-top:-20px;">
              <span style="display: block;font-size:10px;margin-top:-11px;">Giày xăng đan</span>
            </div> 
            <div class="col-sm-1">
              <img src="./img/giay bup be.png" style="height:50px;margin-top:-20px;">
              <span style="display: block;font-size:10px;margin-top:-11px;">Giày búp bê</span>
            </div> 
            <div class="col-sm-1">
              <img src="./img/caogot.png" style="height:50px;margin-top:-20px;">
              <span style="display: block;font-size:10px;margin-top:-11px;">Giày cao gót</span>
            </div> 
            <div class="col-sm-1">
              <img src="./img/boot.png" style="height:37px;margin-top:-13px;">
              <span style="display: block;font-size:10px;margin-top:-4px;">Giày boot</span>
            </div> 
            <div class="col-sm-1"> 
              <i class="fa fa-suitcase" style="font-size:41px;-left:120px;margin-top:-15px;"></i>
              <span style="display: block;font-size:10px;margin-top:-5px;">Túi sách</span>
            </div> 
            <div class="col-sm-1">
              <img src="./img/giay.png" style="height:50px;margin-top:-20px;">
              <span style="display: block;font-size:10px;margin-top:-11px;">Giày thể thao</span>
            </div> 
            <div class="col-sm-1">
              <img src="./img/dep.png" style="height:45px;margin-top:-20px;">
              <span style="display: block;font-size:10px;margin-top:-5px;">Dép Guốc</span>
            </div> 
            <div class="col-sm-1">
              <i class="fas fa-gem" style="font-size:35px;margin-top:-15px;"></i>
              <span style="display: block;font-size:10px;">Membership</span>
            </div> 
            <div class="col-sm-1">
              <i class="fa fa-credit-card" style="font-size:35px;margin-top:-15px;"></i>
              <span style="display: block;font-size:10px;">Voucher</span>
            </div> 
          </div>
      </div>
    </div>

    <div class="content"><!--phan noi dung-->
      <div class="bangchuyen">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="./img/bia10.png" style="height:250px;margin-left:300px;" >
            </div>

            <div class="item">
              <img src="./img/bia1.png" style="height:250px;margin-left:300px;" >
            </div>

            <div class="item">
              <img src="./img/bia12.png" style="height:250px;margin-left:300px;" >
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </div>

    <div class="footer"><!--cuoi trang-->
    </div>
</body>
</html>