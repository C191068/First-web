<html>
<head>
    <title>insert</title>
</head>
<body bgcolor="green">
<?php
$customername=$_POST['customername'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$members=$_POST['members'];
$dateofBirth=$_POST['dateofBirth'];
$picture=$_POST['picture'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];
$postalcode=$_POST['postalcode'];
$serverName='localhost';
$userName='root';
$password='';
$database='Project';
$connection=new mysqli($serverName,$userName,$password,$database);
$insert_query="INSERT INTO signup(customername,mobile,gender,members,dateofBirth,picture,email,password,address,postalcode) values('$customername','$mobile','$gender','$members','$dateofBirth','$picture','$email','$password','$address','$postalcode')";
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
<div class="col-md-12 col-lg-12 col-sm-12 badge-warning" style="min-height: 500px">
    <div class="card">
<center>
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
            Password
        </td>
        <td>
            Gender
        </td>
        <td>
            Number of members(including you)
        </td>
        <td>
            Date of Birth
        </td>
        <td>
            Profile photo
        </td>
        <td>
            Address
        </td>
        <td>
            Postal code
        </td>
        <td>
            DELETE
        </td>
        <td>
            UPDATE
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
                <?php echo $row['password']?>
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
            <td>
                <?php echo $row['address']?>
            </td>
            <td>
                <?php echo $row['postalcode']?>
            </td>
            <td>
                <a onclick="confirm('Do you want to remove it??')" class="btn btn-primary" href="delete(2).php?sl=<?php echo $row['sl']?>">DELETE</a>
            </td>
            <td>
                <a onclick="confirm('Do you want to update it??')" class="btn btn-primary" href="update(2).php?sl=<?php echo $row['sl']?>">UPDATE</a>
            </td>
        </tr>


        <?php
    }
    ?>
</table>
    </center>
        </div>
    </div>
</body>
</html>