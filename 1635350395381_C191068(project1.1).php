<html>
<head>
    <title>
        HOUSE RENTAL SYSTEM
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link href="css/jquery-ui-themes-1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="js/jquery-ui-1.10.4/jquery-1.10.2.js"></script>
    <script src="js/jquery-ui-1.10.4/ui/jquery-ui.js"></script>
    <style>
        .scrolling-wrapper {
            overflow-x: scroll;
            overflow-y: hidden;
            white-space: nowrap;

        .card {
            display: inline-block;
        }
        }
    </style>
</head>
<body bgcolor="green">

<center>
    <img src="A2.jpeg" alt="Picture one" style="width:200px;height:90px;">
    <img src="A1.jpeg" alt="Picture two" style="width:900px;height:90px;">
    <img src="A3.jpeg" alt="Picture three" style="width:200px;height:90px;">
</center>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 col-lg-2 col-sm-12 bg-success" style="min-height: 500px">

        </div>
        <div class="col-md-8 col-lg-8 col-sm-12 badge-warning" style="min-height: 500px">
            <div class="card">
                <div class="card-header bg-primary">
                    <center>
                        <h1 style="color:red;font-size:40px;">SIGN UP HERE</h1>
                    </center>
                </div>
                <div class="card-body badge-warning">
                    <div class="scrolling-wrapper">
                    <form action="" method="post">
                        <center>
                            <table>
                                <tr>
                                    <td>
                                        Customer Name
                                    </td>
                                    <td>
                                        <input required class="form-control" name="customername" id="customername" placeholder="Enter your name">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Customer mobile number
                                    </td>
                                    <td>
                                        <input required class="form-control" name="mobile" id="mobile" placeholder="Enter your Number ">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Email
                                    </td>
                                    <td>
                                        <input required class="form-control" name="email" id="email" type="email" placeholder="Enter your email">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Password
                                    </td>
                                    <td>
                                        <input required class="form-control" name="password" id="password" type="password" placeholder="Enter your password">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        District
                                    </td>
                                    <td>
                                        <select required class="form-control" name="district" id="district">
                                            <option>Chattogram</option>
                                            <option>Dhaka</option>
                                            <option>Rajshahi</option>
                                            <option>Khulna</option>
                                            <option>Bogura</option>
                                            <option>Jessore</option>
                                            <option>Sylhet</option>
                                            <option>Comilla</option>
                                            <option>Barishal</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Gender
                                    </td>
                                    <td>
                                        <select required class="form-control" name="gender" id="gender">
                                            <option>MALE</option>
                                            <option>FEMALE</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Number of members(including you)
                                    </td>
                                    <td>
                                        <select required class="form-control" name="members" id="members">
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Date
                                    </td>
                                    <td>
                                        <input required class="form-control datepicker" name="dateofBirth" id="dateofBirth" type="text" placeholder="Enter your birthdate">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Profile photo
                                    </td>
                                    <td>
                                        <input required class="form-control" name="picture" id="picture" type="file">
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <input class="btn btn-priamary" name="submitButton" type="submit" value="SUBMIT">
                                    </td>
                                </tr>
                            </table>
                            <?php
                            $customername=$_POST['customername'];
                            $mobile=$_POST['mobile'];
                            $district=$_POST['district'];
                            $gender=$_POST['gender'];
                            $members=$_POST['members'];
                            $dateofBirth=$_POST['dateofBirth'];
                            $picture=$_POST['picture'];
                            $email=$_POST['email'];
                            $password=$_POST['password'];
                            $serverName='localhost';
                            $userName='root';
                            $password='';
                            $database='Project';
                            $connection=new mysqli($serverName,$userName,$password,$database);
                            $insert_query="INSERT INTO signup(customername,mobile,district,gender,members,dateofBirth,picture,email,password) values('$customername','$mobile','$district','$gender','$members','$dateofBirth','$picture','$email','$password')";
                            $result=mysqli_query($connection,$insert_query);
                            $serial=1;
                            if($result)
                            {
                                echo'SUCCESS';
                            }else{
                                echo'FAIL';
                            }
                            $select_query="SELECT * FROM signup";
                            $result=mysqli_query($connection,$select_query);
                            ?>
                            <table class="table table-bordered table-striped table-hover">
                                <tr>
                                    <td>#</td>
                                    <td>
                                        Customer Name
                                    </td>
                                    <td>
                                        Customer mobile number
                                    </td>
                                    <td>
                                        Email
                                    </td>
                                    <td>
                                        District
                                    </td>
                                    <td>
                                        Gender
                                    </td>
                                    <td>
                                        Number of members(including you)
                                    </td>
                                    <td>
                                        Date
                                    </td>
                                    <td>
                                        Profile photo
                                    </td>

                                </tr>
                                <?php
                            while($row=mysqli_fetch_array($result))
                            {
                                ?>
                                    <tr>
                                        <td>
                                            <?php echo $serial++;?>
                                        </td>


                                        <td>
                                            <?php echo $row['customername']?>
                                        </td>

                                        <td>
                                            <?php echo $row['mobile']?>
                                        </td>

                                        <td>
                                            <?php echo $row['email']?>
                                        </td>

                                        <td>
                                            <?php echo $row['district']?>
                                        </td>

                                        <td>
                                            <?php echo $row['gender']?>
                                        </td>

                                        <td>
                                            <?php echo $row['members']?>
                                        </td>

                                        <td>
                                            <?php echo $row['dateofBirth']?>
                                        </td>
                                        <td>
                                            <?php echo $row['picture']?>
                                        </td>
                                    </tr>


                                <?php
                            }
                            ?>
                            </table>
                        </center>
                    </form>
                </div>
            </div>
                </div>

        </div>
        <div class="col-md-2 col-lg-2 col-sm-12 bg-danger" style="min-height: 500px">

        </div>
    </div>
</div>
<center>
    <img src="A4.jpeg" alt="Picture two" style="width:100%;height:100px;">
</center>
<footer>
    <img class src="A5.jpeg" alt="Picture four" style="width:30%;height:200px;">
    <img class src="A6.jpeg" alt="Picture five" style="width:35%;height:200px;">
    <img class src="A7.jpeg" alt="Picture six" style="width:34%;height:200px;">
</footer>
<script>
    $(function() {
        $( "#dateofBirth" ).datepicker();
    });
</script>
</body>
</html>