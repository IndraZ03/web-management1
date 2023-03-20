<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="https://epengawasan.bmkg.go.id/apip/images/favicon.ico" type="ico">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <title>Registrasi Akun</title>>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
                            </div>
                            <form class="user" action = "" method="post">
                            <div class="input-group mb-3">
                            <select class="custom-select" id="inputGroupSelect01" style = "width: 100%;
                                    height: calc(1.5em + .75rem + 2px);
                                    padding: .375rem .75rem;
                                    font-size: 1rem;
                                    font-weight: 400;
                                    line-height: 1.5;
                                    color: #6e707e;
                                    background-color: #fff;
                                    background-clip: padding-box;
                                    border: 1px solid #d1d3e2;
                                    border-radius: .35rem;
                                    margin-bottom: 1rem;" name ="stasiun">
                                <option selected>Pilih Stasiun</option>
                                <option value="1">Staklim Ponbet</option>
                                <option value="2">Staklim Ponbet</option>
                                <option value="3">Staklim Ponbet</option>
                            </select>
                           <!-- <a class="btn btn-secondary dropdown-toggle" style = "width: 100%;
                                    height: calc(1.5em + .75rem + 2px);
                                    padding: .375rem .75rem;
                                    font-size: 1rem;
                                    font-weight: 400;
                                    line-height: 1.5;
                                    color: #6e707e;
                                    background-color: #fff;
                                    background-clip: padding-box;
                                    border: 1px solid #d1d3e2;
                                    border-radius: .35rem;
                                    margin-bottom: 1rem;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pilih Stasiun
                            </a>-->

                            <!--<div class="dropdown-menu overflow-auto" aria-labelledby="dropdownMenuButton" style = "width: 100%;
                                    padding: .375rem .75rem;
                                    font-size: 1rem;
                                    font-weight: 400;
                                    color: #6e707e;
                                    background-color: #fff;
                                    border: 1px solid #d1d3e2;
                                    border-radius: .35rem;
                                    max-height: 200px;">
                                <a class="dropdown-item" href="#">Staklim Ponbet</a>
                                <a class="dropdown-item" href="#">Staklim Ponbet</a>
                                <a class="dropdown-item" href="#">Staklim Ponbet</a>
                                <a class="dropdown-item" href="#">Staklim Ponbet</a>
                                <a class="dropdown-item" href="#">Staklim Ponbet</a>
                                <a class="dropdown-item" href="#">Staklim Ponbet</a>
                                <a class="dropdown-item" href="#">Staklim Ponbet</a>
                                <a class="dropdown-item" href="#">Staklim Ponbet</a>
                                <a class="dropdown-item" href="#">Staklim Ponbet</a>
                                <a class="dropdown-item" href="#">Staklim Ponbet</a>
                                <a class="dropdown-item" href="#">Staklim Ponbet</a>
                                <a class="dropdown-item" href="#">Staklim Ponbet</a>
                                <a class="dropdown-item" href="#">Staklim Ponbet</a>
                            </div> -->
                            </div>
                                <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="username" id="username"
                                            placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="email" id="email"
                                        placeholder="Alamat Email">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="password" name="password" placeholder="password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="repeat-password" name="repeat-password" placeholder="Ulangi Password">
                                    </div>
                                </div>
                                <a href="login.php" class="btn btn-primary btn-user btn-block" name="register">
                                    Registrasi Akun
                                </a>
                            </form>
                            <hr>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot.php">Lupa Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Sudah Punya Akun? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>