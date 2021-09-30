<html>
<head>
    <title>
        IIUC Library
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
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
                <center>
                    <h1 style="color:red;font-size:40px;">LIBRARY REGISTRATION FORM</h1>
                </center>
                <form action="" method="post">
                    <center>
                        <table>
                            <tr>
                                <td>
                                    Student Name
                                </td>
                                <td>
                                    <input class="form-control" name="studentname" id="studentname" placeholder="Enter your name">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Student ID
                                </td>
                                <td>
                                    <input class="form-control" name="studentid" id="studentid" placeholder="Enter your ID ">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Semester
                                </td>
                                <td>
                                    <select class="form-control" name="semester" id="semester">
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
                                    <select class="form-control" name="gender" id="gender">
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
                                    <select class="form-control" name="department" id="department">
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
                        ?>
                        <table border="3">
                            <tr>
                                <td>
                                    Student Name
                                </td>
                                <td>
                                    <?php echo $studentname?>
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
                                    Semester
                                </td>
                                <td>
                                    <?php echo $semester?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Gender
                                </td>
                                <td>
                                    <?php echo $gender?>
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
                        </table>
                    </center>
                </form>

            </div>
            <div class="col-md-2 col-lg-2 col-sm-12 bg-danger" style="min-height: 500px">

            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <img src="image1-1628159479844.jpg" alt="Picture two" style="width:100%;height:100px;">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <img class src="in.jpeg" alt="Picture four" style="width:30%;height:200px;">
                <img class src="library.jpeg" alt="Picture five" style="width:30%;height:200px;">
                <img class src="out.jpeg" alt="Picture six" style="width:30%;height:200px;">
            </div>
        </div>
    </div>
</body>
</html>
