<?php require('config.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Registration Form</title>
</head>
<body>
    <div class="form-control">
        <div class="jumbotron h-25"><h2 class="text-center">User Login Page</h2></div>
        <div class="col-6">
            <form name="frm" method="post">
                <div class="form-group">
                    <label for="uname">Enter name</label>
                    <input type="text" name="uname" id="uname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="uemail">Enter email</label>
                    <input type="text" name="uemail" id="uemail" class="form-control">
                
                <div class="form-group">
                    <label for="upass">Enter password</label>
                    <input type="password" name="upass" id="upass" class="form-control">
                </div>
                <div class="form-group">
                    <label for="ugender">Select gender</label>
                    <input type="radio" name="ugender" id="ugender" value="Male">Male
                    <input type="radio" name="ugender" id="ugender" value="Female">Female
                </div>
                <div class="form-group">
                    <label for="ulang">Select laguage</label>
                    <input type="checkbox" name="ulang" id="ulang" value="C">C
                    <input type="checkbox" name="ulang" id="ulang" value="C++">C++
                    <input type="checkbox" name="ulang" id="ulang" value="Python">Python
                    <input type="checkbox" name="ulang" id="ulang" value="PHP">PHP
                </div>
                <div class="form-group">
                    <label for="uadd">Enter address</label>
                    <textarea name="uadd" id="uadd" class="form-control" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="ucity">Select City</label>
                    <select name="ucity" id="ucity" class="form-control">
                        <option value="">-Select City-</option>
                        <option value="Kolkata">Kolkata</option>
                        <option value="Mumbai">Mumbai</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Balurghat">Balurghat</option>
                    </select>
                </div>
                <input type="submit" name="ok" value="Register" class="btn btn-primary">
            </form>
            <?php
                if(isset($_POST['ok'])){
                    $uname=$_POST['uname'];
                    $uemail=$_POST['uemail'];
                    $upass=$_POST['upass'];
                    $ugender=$_POST['ugender'];
                    $ulang=$_POST['ulang'];
                    $ucity=$_POST['ucity'];
                    $uadd=$_POST['uadd'];
                    $sql = "INSERT INTO user (uname, uemail, upass, ugender, ulang, uadd, ucity) VALUES ('$uname','$uemail','$upass','$ugender','$ulang','$uadd','$ucity')";
                    $res = mysqli_query($con, $sql) or die(mysqli_error($con));

                    if ($res==1){
                        ?>
                        <div class="alert alert-success">
                            Your registration is successfull
                        </div>
                        <?php
                    }
                    else{
                        ?>
                        <div class="alert alert-danger">
                            Your registration is unsuccessfull
                        </div>
                        <?php
                    }
                }
            ?>
        </div>
        </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>