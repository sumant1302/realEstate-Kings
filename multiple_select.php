<?php
$conn=mysqli_connect("localhost","root","","aromafeeds");

if(!$conn){
    die("Database not connected");
}



?>

<form action="">
Select State:
<select name="state" id="state" onchange="showCity(this.value)">
<option value="select" selected>Choose..</option>
<?php
$state="";

$sql="SELECT DISTINCT States FROM cities";
$result=mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        echo "<option>". $row['States']. "</option>";
    }
}
?>
</select>

Select City:
<select name="city" id="city">
  <option value="selected" selected>Choose..</option>

</select>

</form>

<script>
    
function showCity(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("city").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("city").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "prepare_city.php?q="+str, true);
  xhttp.send();
}

</script>