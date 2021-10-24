<html>
<head>
    <title>
        IIUC Library
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link href="css/jquery-ui-themes-1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="js/jquery-ui-1.10.4/jquery-1.10.2.js"></script>
    <script src="js/jquery-ui-1.10.4/ui/jquery-ui.js"></script>
</head>
<body bgcolor="green">
<center>
    <img src="ISLAM1.jpeg" alt="Picture one" style="width:200px;height:90px;">
    <img src="welc.png" alt="Picture two" style="width:900px;height:90px;">
    <img src="ISLAM2.jpeg" alt="Picture three" style="width:200px;height:90px;">
</center>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 col-lg-2 col-sm-12 bg-success" style="min-height: 500px">

        </div>
        <div class="col-md-8 col-lg-8 col-sm-12 badge-warning" style="min-height: 500px">
            <div class="card">
                <div class="card-header bg-primary">
                    <center>
                        <h1 style="color:red;font-size:40px;">LIBRARY REGISTRATION FORM</h1>
                    </center>
                </div>
                <div class="card-body badge-warning">
                    <form action="" method="post">
                        <center>
                            <table>
                                <tr>
                                    <td>
                                        Student Name
                                    </td>
                                    <td>
                                        <input required class="form-control" name="studentname" id="studentname" placeholder="Enter your name">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Student ID
                                    </td>
                                    <td>
                                        <input required class="form-control" name="studentid" id="studentid" placeholder="Enter your ID ">
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
                                        Semester
                                    </td>
                                    <td>
                                        <select required class="form-control" name="semester" id="semester">
                                            <option>1st semester</option>
                                            <option>2nd semester</option>
                                            <option>3rd semester</option>
                                            <option>4th semester</option>
                                            <option>5th semester</option>
                                            <option>6th semester</option>
                                            <option>7th semester</option>
                                            <option>8th semester</option>
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
                                        Department
                                    </td>
                                    <td>
                                        <select required class="form-control" name="department" id="department">
                                            <option>CSE</option>
                                            <option>EEE</option>
                                            <option>ETE</option>
                                            <option>CCE</option>
                                            <option>DBA</option>
                                            <option>ELL</option>
                                            <option>SHIS</option>
                                            <option>QSIS</option>
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
                            $studentname=$_POST['studentname'];
                            $studentid=$_POST['studentid'];
                            $semester=$_POST['semester'];
                            $gender=$_POST['gender'];
                            $department=$_POST['department'];
                            $dateofBirth=$_POST['dateofBirth'];
                            $picture=$_POST['picture'];
                            $email=$_POST['email'];
                            $password=$_POST['password'];
                            $serverName='localhost';
                            $userName='root';
                            $password='';
                            $database='khatami';
                            $connection=new mysqli($serverName,$userName,$password,$database);
                            $insert_query="INSERT INTO tableone(studentname,semester,gender) values('$studentname','$semester','$gender')";
                            $result=mysqli_query($connection,$insert_query);
                            if($result)
                            {
                                echo'Success';
                            }else{
                                echo 'Fail';
                            }
                            $select_query="SELECT * FROM tableone";
                            $result=mysqli_query($connection,$select_query);
                            $serial=1;
                            ?>
                            <table class="table table-bordered table- table-hover">
                                <tr>
                                    <td>#</td>
                                    <td>
                                        Student Name
                                    </td>
                                    <td>
                                        Semester
                                    </td>
                                    <td>
                                        Gender
                                    </td>
                                    <td>
                                        Delete
                                    </td>
                                </tr>
                                <?php
                                while($row=mysqli_fetch_array($result))
                                {
                                    ?>

                                    <tr>
                                        <td>
                                            <?php echo $serial++; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['studentname']?>
                                        </td>
                                        <td>
                                            <?php echo $row['semester']?>
                                        </td>
                                        <td>
                                            <?php echo $row['gender']?>
                                        </td>
                                        <td>
                                            <a onclick="confirm('Do you want to remove it??')" class="btn btn-primary" href="delete.php?sl=<?php echo $row['sl']?>">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Student ID
                                        </td>
                                        <td>
                                            <?php echo $studentid?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Email
                                        </td>
                                        <td>
                                            <?php echo $email?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Department
                                        </td>
                                        <td>
                                            <?php echo $department?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Date
                                        </td>
                                        <td>
                                            <?php echo $dateofBirth?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Profile photo
                                        </td>
                                        <td>
                                            <?php echo $picture?>
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
        <div class="col-md-2 col-lg-2 col-sm-12 bg-danger" style="min-height: 500px">

        </div>
    </div>
</div>
<center>
    <img src="image1-1628159479844.jpg" alt="Picture two" style="width:100%;height:100px;">
</center>
<footer>
    <img class src="in.jpeg" alt="Picture four" style="width:30%;height:200px;">
    <img class src="library.jpeg" alt="Picture five" style="width:35%;height:200px;">
    <img class src="out.jpeg" alt="Picture six" style="width:34%;height:200px;">
</footer>
<script>
    $(function() {
        $( "#dateofBirth" ).datepicker();
    });
</script>
</body>
</html>