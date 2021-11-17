<html>
<head>
    <title>
        HOUSE SELECTION FOR RENT
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
        <div class="col-md-12 col-lg-12 col-sm-12 badge-warning" style="min-height: 500px">
            <div class="card">
                <div class="card-header bg-primary">
                    <center>
                        <h1 style="color:red;font-size:40px;">UPDATE HERE</h1>
                    </center>
                </div>
                <div class="card-body badge-warning">
                    <div class="scrolling-wrapper">
                        <?php
                        $sl=$_REQUEST['sl'];
                        $serverName='localhost';
                        $userName='root';
                        $password='';
                        $database='Project';
                        $connection=new mysqli($serverName,$userName,$password,$database);
                        $edit_query="SELECT * FROM signup WHERE sl='$sl'";
                        $result=mysqli_query($connection,$edit_query);
                        $row=mysqli_fetch_array($result);
                        ?>

                        <center>
                            <form action="insert(2).php" method="post">


                                <table>
                                    <tr>
                                        <td>Customer Name</td>
                                        <td><input required type="text" name="customername" value="<?php echo $row['customername'] ?>" placeholder="Enter your name"></td>
                                    </tr>
                                    <tr>
                                        <td>Customer mobile number</td>
                                        <td><input required type="text" name="mobile" value="<?php echo $row['mobile'] ?>" placeholder="Enter your number"></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><input required type="email" name="email" value="<?php echo $row['email'] ?>" placeholder="Enter your email"></td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td><input required type="password" name="password" value="<?php echo $row['password'] ?>" placeholder="Enter your password"></td>
                                    </tr>
                                    <tr>
                                        <td>Gender</td>
                                        <td><select required name="gender" value="<?php echo $row['gender'] ?>">
                                                <option>MALE</option>
                                                <option>FEMALE</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Number of members(including you)</td>
                                        <td><select required name="members" value="<?php echo $row['members'] ?>">
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
                                        <td>Date of Birth</td>
                                        <td><input required type="text" name="dateofBirth" value="<?php echo $row['dateofBirth'] ?>" placeholder="Enter your birth date"></td>
                                    </tr>
                                    <tr>
                                        <td>Profile photo</td>
                                        <td><input required type="file" name="picture" value="<?php echo $row['picture'] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td><input required type="text" name="address" value="<?php echo $row['address'] ?>" placeholder="Enter your address"></td>
                                    </tr>
                                    <tr>
                                        <td>Postal code</td>
                                        <td><input required type="text" name="postalcode" value="<?php echo $row['postalcode'] ?>" placeholder="Enter your postal code"></td>
                                    </tr>


                                    <input type="submit" name="UPDATE" value="UPDATE">

                                </table>

                            </form>
                        </center>
                    </div>
                </div>
            </div>

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