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


<form action="C191068(Propject3N).php" method="post">

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


