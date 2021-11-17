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
        <div class="col-md-12 col-lg-12 col-sm-12 badge-warning" style="min-height: 500px">
            <div class="card">
                <div class="card-header bg-primary">
                    <center>
                        <h1 style="color:red;font-size:40px;">SIGN UP HERE</h1>
                    </center>
                </div>
                <a href="insert(2).php">Profile</a>
                <a target="_blank" href="house.php">SELECT HOUSE</a>
                <div class="card-body badge-warning">
                    <div class="scrolling-wrapper">
                        <form action="insert(2).php" method="post">
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
                                            Date of Birth
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
                                        <td>
                                            Address
                                        </td>
                                        <td>
                                            <input required class="form-control" name="address" id="address" placeholder="Enter your address">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Postal code
                                        </td>
                                        <td>
                                            <input required class="form-control" name="postalcode" id="postalcode" placeholder="Enter your postal code">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <input class="btn btn-priamary" name="submitButton" type="submit" value="SUBMIT">
                                        </td>
                                    </tr>
                                </table>

                            </center>
                        </form>
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