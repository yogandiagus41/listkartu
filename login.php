<!DOCTYPE html>
<html lang="en">

<head>
    <title>List Tiket</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
    .sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        padding-top: 60px;
        transition: 0.5s;

    }

    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    .sidenav a:hover {
        color: #f1f1f1;
    }

    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }

    #main {
        transition: margin-left .5s;

    }


    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }

        .sidenav a {
            font-size: 18px;
        }
    }
    </style>
</head>

<body class="bg-primary">
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="home.php">Tiket</a>

    </div>




    <div id="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="card m-5">

                        <div class="card-body">
                            <center>
                                <img src="images/logo.png" alt="" class="rounded m-2" width="40%">
                            </center>

                            <form action="proseslogin.php" method="post" class="mt-4">

                                <div class="form-group">
                                    <Label>Username</Label>
                                    <input type="text" class="form-control" id="username" name="username">
                                </div>

                                <div class="form-group">
                                    <Label>Password</Label>

                                    <input type="password" class="form-control" id="password" name="password">

                                </div>
                                <div class="form-group">
                                    <Label>Imei</Label>

                                    <input type="text" class="form-control" id="imei" name="imei">

                                </div>

                                <button type="submit" class="btn btn-primary btn-block">Login</button>

                            </form>
                        </div>

                    </div>
                </div>
                <div class="col-3"></div>
            </div>

        </div>

    </div>


    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("mySidenav").style.marginTop = "0px";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
        document.body.style.backgroundColor = "white";
    }
    </script>

</body>

</html>