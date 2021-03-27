<html>
<title>My Addition</title>
<h1>sum of two numbers</h1>
<form name="add" method="post">
number1: <input type="text" name="num1" value="0"/> <br>
number2: <input type="text" name="num2" value="0"/> <br>
<input type="submit" name="add" value="add"/>
</form>
<?php
if(isset($_POST['add']))
{
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $sum = $num1+$sum2;
      echo "sum of two numbers: ".$sum;
}
$servername="localhost";
$mysql_db="ini";
$username="teamv";
$password="passw0rd123";

$conn = new mysqli($servername,$username,$password,$mysql_db);
if($conn -> connect_error)
{
     die("connection failed:"$conn ->conncet_error);
}
$query = "insert into addition values(".$num1.",".$num2.",".$sum.")";
echo $query
$conn->query($query);
$conn->close();
?>
</html>
