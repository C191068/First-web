<html>
<head>
    <title>
        IIUC Library
    </title>
</head>
<body bgcolor="green">
<form action="" method="post">
    <center>
        <img src="ISLAM1.jpeg" alt="Picture one" style="width:200px;height:90px;">
        <img src="welc.png" alt="Picture two" style="width:900px;height:90px;">
        <img src="ISLAM2.jpeg" alt="Picture three" style="width:200px;height:90px;">
    </center>
    <center>
        <h1 style="color:red;font-size:40px;">LIBRARY REGISTRATION FORM</h1>
    </center>
    <center>
        <img class src="in.jpeg" alt="Picture four" style="width:400px;height:200px;">
        <img class src="library.jpeg" alt="Picture five" style="width:400px;height:200px;">
        <img class src="out.jpeg" alt="Picture six" style="width:400px;height:200px;">
    </center>
    <center>
        <table>
            <tr>
                <td>
                    Student Name
                </td>
                <td>
                    <input name="studentname" id="studentname" placeholder="Enter your name">
                </td>
            </tr>
            <tr>
                <td>
                    Student ID
                </td>
                <td>
                    <input name="studentid" id="studentid" placeholder="Enter your ID ">
                </td>
            </tr>
            <tr>
                <td>
                    Semester
                </td>
                <td>
                    <select name="semester" id="semester">
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
                    <select name="gender" id="gender">
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
                    <select name="department" id="department">
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
                    <input name="submitButton" type="submit" value="SUBMIT">
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
</body>
</html>





