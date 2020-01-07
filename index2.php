<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="./public/bootstrapv4/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="./public/myStyle.css">
</head>
<body>
<header>
<!--    <nav class="navbar navbar-expand-lg navbar-light bg-light">-->
<!--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">-->
<!--            <span class="navbar-toggler-icon"></span>-->
<!--        </button>-->
<!--        <a class="navbar-brand" href="#">Navbar</a>-->
<!---->
<!--        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">-->
<!--            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">-->
<!--                <li class="nav-item active">-->
<!--                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="#">Link</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>-->
<!--                </li>-->
<!--            </ul>-->
<!--            <form class="form-inline my-2 my-lg-0">-->
<!--                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
<!--                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
<!--            </form>-->
<!--        </div>-->
<!--    </nav>-->

 <nav id="header-menu" class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="">
                <img src="./public/image/logo2.png" width="207" height="50" class="d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample07">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href=""><small>Trang Chủ</small><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=""><small>Ban Tổng Giám Đốc</small></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=""><small>Bộ Phận Nhân Sự</small></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <small>Người Dùng</small>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="">Người Dùng</a>
                            <a class="dropdown-item" href="">Đổi mật khẩu</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="">Thoát 登出</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href=""><small>Đăng Nhập</small></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

</header>
<div class="container">
 <div class="row thutxuong">
     <div  class="col-lg-3">

         <div class="card">

             <div class="card-body">
                 <h5 class="card-title canhgiua">Login</h5>
                 <form>
                     <div class="form-group">
                         <label for="exampleInputEmail1">Email address: </label>
                         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                     </div>
                     <div class="form-group">
                         <label for="exampleInputPassword1">Password: </label>
                         <input type="password" class="form-control" id="exampleInputPassword1">
                     </div>
                     <button type="submit" class="btn btn-primary canhgiua">Login</button>
                     <button type="button" class="btn btn-primary canhgiua">Register</button>
                 </form>

                 <h3> Welcome Tí</h3>

                 <button type="submit" class="btn btn-primary canhgiua">Logout</button>
             </div>
         </div>
          <ul class="list-group thutxuong">
             <li class="list-group-item d-flex justify-content-between align-items-center">
                 Cras justo odio
                 <span class="badge badge-primary badge-pill">14</span>
             </li>
             <li class="list-group-item d-flex justify-content-between align-items-center">
                 Dapibus ac facilisis in
                 <span class="badge badge-primary badge-pill">2</span>
             </li>
             <li class="list-group-item d-flex justify-content-between align-items-center">
                 Morbi leo risus
                 <span class="badge badge-primary badge-pill">1</span>
             </li>
         </ul>


     </div>

     <div class="col-lg-9">

     </div>

</div>




    <div id="row" class="thutxuong">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./public/image/b1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./public/image/b2.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>

    </div>
</div>

<footer>
      <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm">
                        <small>&copy; 2017-2019 by Jiahsin Co.,Ltd.</small>
                    </div>

                    <div class="col-sm text-right">
                        <small>Portal Version 1.0 - Developed by Jia Hsin IT.</small>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>



<script type="text/javascript"  src="./public/jquery/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript"  src="./public/bootstrapv4/js/bootstrap.min.js"></script>
</body>
</html>