<?php
$sl=$_REQUEST['sl'];
$serverName='localhost';
$userName='root';
$password='';
$database='khatami';
$connection=new mysqli($serverName,$userName,$password,$database);
$delete_query="DELETE FROM tableone WHERE sl='$sl'";
if(mysqli_query($connection,$delete_query))
{
    echo"Deleted Successfully";
} else
{
    echo"Fail to Delete";
}