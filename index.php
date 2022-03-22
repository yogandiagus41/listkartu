<?php include("koneksi.php"); 
session_start();
if($_SESSION['status']!="sudah_login"){

header("location:login.php"); 
}?>
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

<body>

    <div class="modal" id="myModal">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">


                <div class="modal-header" style="background-color: #E8F0F2;">
                    <h4 class="modal-title">Ticket - Penugasan Support CC</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>


                <div class="modal-body">




                    <form action="prosestambahdata.php" method="POST">

                        <div class="form-group">
                            <Label>No Laporan</Label>
                            <input type="text" class="form-control" placeholder="Generate By System" disabled>
                        </div>
                        <?php $waktu = date('m/d/y h:i:s'); ?>
                        <div class="form-group">
                            <Label>Tanggal Laporan</Label>

                            <input type="text" class="form-control" placeholder="<?php echo $waktu; ?>" disabled>

                        </div>
                        <div class="form-group">
                            <Label>Jenis gangguan</Label>
                            <select class="form-control" id="jenisGangguan" name="jenisGangguan">
                                <option>Komunikasi Selular</option>
                                <option>SARPEN</option>
                                <option>ROIP</option>

                            </select>

                        </div>
                        <div class="form-group">
                            <Label>Sub Jenis Gangguan</Label>
                            <select class="form-control" id="subjenisGangguan" name="subjenisGangguan">
                                <option>Pulsa</option>
                                <option>CCTV</option>
                                <option>Ponsel</option>
                                <option>ROIP Command Center</option>
                                <option>Panel Main</option>


                            </select>

                        </div>
                        <button type="submit" name="submit" class="btn btn-success">Submit</button>
                        <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <center>
            <img src="images/logo.png" width="70%" alt="">
        </center>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Ticket
            </a>
            <div class="dropdown-menu" style="background-color: #111;">
                <a href="index.php" style="background-color: #111;">Ticket Support</a>

            </div>
        </li>

    </div>




    <div id="main">
        <div class="clearfix bg-dark pb-2 pt-2">
            <div class="container-fluid">
                <span class="float-left" onclick="openNav()" style="color: #f1f1f1;"><img src="images/menu.png"
                        style="width: 5%;" alt=""></span>
                <span class="float-right" style="color: #f1f1f1;"><img src="images/user.png" class="float-right"
                        id="navbardrop" data-toggle="dropdown" style="width: 5%;" alt="">

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Change Password</a>
                        <a class="dropdown-item" href="login.php">Logout</a>
                    </div>
                </span>
            </div>
        </div>



        <div class="container-fluid mt-4">
            <div class="shadow-sm p-2 mb-2 rounded-lg" style="background-color: #E8F0F2;">Ticket Support CC</div>
            <br>
            <br>
            <button type="button" class="btn btn-success float-right" data-toggle="modal"
                data-target="#myModal">add</button>
            <br>
            <br>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Laporan</th>
                        <th>Tgl Laporan</th>
                        <th>Jenis</th>
                        <th>Sub Jenis</th>
                        <th>Petugas</th>
                        <th>Permasalahan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                                $sql = "SELECT * FROM listkartu";
                                $query = mysqli_query($db, $sql);
                                $i=0;
                                while($user_data = mysqli_fetch_array($query)){ $i++;
                                     
                                    ?>
                    <tr>
                        <td><?php echo $i; ; ?></td>
                        <td><?php echo($user_data['noLaporan']); ?></td>
                        <td><?php echo($user_data['waktuLaporan']); ?></td>
                        <td><?php echo($user_data['jenisGangguan']); ?></td>
                        <td><?php echo($user_data['subjenisGangguan']); ?></td>
                        <td><?php echo($user_data['petugas']); ?></td>
                        <td><?php echo($user_data['permasalahan']); ?></td>
                        <td><?php echo($user_data['status']); ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>




    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("mySidenav").style.marginTop = "0px";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "white";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
        document.body.style.backgroundColor = "white";
    }
    </script>

</body>

</html>