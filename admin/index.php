<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>เข้าสู่ระบบ</title>
    <link rel="stylesheet" href="./../template/vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./../template/vendor/twbs/bootstrap/dist/css/signin.css">
    <script src="./../template/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- no additional media querie or css is required -->
<div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align:center;">ADMIN CONTROL PANAL</h1>
                <div class="card">
                    <div class="card-body">
                        <form action="check_login.php" autocomplete="off" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="txtUsername" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="txtPassword" placeholder="Password">
                            </div>
                            <button type="submit" id="sendlogin" class="btn btn-primary btn-block">เข้าสู่ระบบ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>