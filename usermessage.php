
<?php
    session_start();
    
?>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<center><h1>My Messages </h1></center><hr>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
.row
    {
        border: 2px solid black;
    }
.ntf
    {
        color:red;
        position: absolute;
        top:0px;
        
    }
.msg
    {
        color:blue;
    }
.cont
    {
        width:100%;
    }
.cont-head
    {
        width:100%;
         font-weight: bolder;
        
    }
td
    {
        width:15%;
    }
.badge {
  position: absolute;
  top: 5px;
  left:20px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  color: white;
}
</style>


<?php

$i=0;
if($_SERVER['REQUEST_METHOD']=="GET"){
$localhost = "localhost:3307";
$usernamew = "root";
$passwordw = "";
$db = "expdb";
$conn = mysqli_connect($localhost,$usernamew,$passwordw,$db);
if(!$conn){
echo "Connection error";
}
else{
echo "";

    
    
 
    
    
    
    
    
    
    
    
    
$fname=$_SESSION["username"];
$result=mysqli_query($conn,"select * from contacttable where fullname='$fname'")
				or die("FAILED!!".mysql_error());
	        $i=0;
echo "<table class='cont-head'>";
echo "<tr >";
echo "<td>Sr</td><td>Subject</td><td>Message</td><td>Time of Review</td>"; 
echo "</td>";
echo "</tr>";
echo "</table><hr>";
echo "<table class='cont table table-hover table-dark'>";
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)){
    $i++;
    echo "<tr>";
     echo  "<td>".$i."</td> <td>".$row['subject']."</td><td>".$row['message']."</td><td>".$row['time']."</td>";
    echo "</tr>";
    


}
echo "</table>";
echo "<span class='badge'>$i</span>";
}
else{

echo "<table  class='cont table table-hover table-dark'><tr><td style='text-align:center;'>Yet to send a Message</td></tr></table>";
}
}
}
?>