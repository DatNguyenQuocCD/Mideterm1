
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Restaurant</title>
    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS Style -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../css/styles.css">
    <style>
        * {
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
}

html {
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

body {
    overflow-x: hidden;
}


/* -----------------HEARDER---------------------- */
header{
    background-color: #e3e3e3;
    padding: 10px 0px;
    margin-bottom: 5%;
}
.menu-icon {
    font-size: 300%;
    color: #302f2f;
    position: absolute;
    transform: translate(70%, 40%);
}

.main_menu {
    list-style: none;
    margin-top: 30px;
    margin-left: 50px;
    display: none;
}

.main_menu li a {
    text-decoration: none;
    /* color: #EDF5E1; */
    font-size: 150%;
    font-weight: 700;
    transition: border-bottom 0.5s;
    padding: 3px 0;
}

.main_menu li {
    display: inline-block;
    margin-right: 30px;
}

.main {
    height: 90px;
    margin-top: 30px;
    display: grid;
    grid-template-columns: 1fr 1fr 2fr;
    gap: 50px;
    margin-bottom: 20px;
}

.logo {
    width: 100px;
    margin-left: 100px;
    transition: 1s;
}

.search input {
    position: relative;
    width: 500px;
    height: 50px;
    margin: 30px;
    padding-left: 60px;
    font-size: 150%;
}

.search i {
    position: absolute;
    transform: translate(-1600%, 120%);
    font-size: 200%;
}
.Horizontal_ladder {
    background-color: #4F4F4F;
    height: 65px;
}

.Table_of_Contents a {
    text-decoration: none;
    font-size: 120%;
    font-weight: 700;
    color: #302f2f;
}

.menu {
    display: grid;
    grid-template-columns: 1.3fr 1fr 1fr 1fr;
    gap: 20px;
    margin-left: 300px;
    margin-right: 50px;
    font-size: 130%;
    margin-top: 10px;
}

.Table_of_Contents i {
    font-size: 150%;
    margin-bottom: 10px;
    margin-left: 45px;
    color: #302f2f;
    transition: 0.3s;
}

.Table_of_Contents p {
    text-align: center;
    transition: 0.5s;
}

.list-product{
        margin-top:5%;
        margin-bottom:5%;
    }

    .detail{
        margin-bottom: 5%;
    }

    .footer{
        width: 100%;
    }
    </style>
</head>
    <body>
        <header>
        <div class="main">
            <a class="logo" href="#"><img class="logo" src="http://at06.chonweb.vn/wp-content/uploads/2019/08/logo-demo.png" alt="Logo Shop"></a>
            <div class="search">
                <form>
                    <input type="text" placeholder="Tìm kiếm sản món ăn">
                    <i class="fas fa-search"></i>
                </form>
            </div>
            <div class="menu">
                <div class="Table_of_Contents">
                    <a href="#">
                        <i class="fa-solid fa-house-user"></i>
                        <p id="login1">Trang chủ</p>
                    </a>
                </div>
                <div class="Table_of_Contents">
                    <a href="#">
                        <i class="fas fa-store font"></i>
                        <p>Menu</p>
                    </a>
                </div>
                <div class="Table_of_Contents">
                    <a href="#">
                        <i class="fas fa-envelope font"></i>
                        <p>Liên hệ</p>
                    </a>
                </div>
                <div class="Table_of_Contents">
                    <a href="#">
                        <i class="fas fa-shopping-cart font position-relative" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <span id="quantity" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger text-white">
                                0
                        </span>
                        </i>
                        <p>Giỏ hàng</p>
                    </a>
                </div>
            </div>
        </div>
        </header>
        <div class="container">
        @yield("content")
        </div>
       <footer>
            <img class="footer" src="/images/Footer.PNG" alt="photo">
       </footer>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/cart.js"></script>
        <script type="text/javascript" src="/js/custom.js?ver=1.0.1"></script>

    </body>
</html>