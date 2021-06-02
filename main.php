<?php
$url = parse_url(getenv("mysql://bfd39004aef134:61010c09@us-cdbr-east-04.cleardb.com/heroku_84b361474e9d5e6?reconnect=true"));
//mysql --host=us-cdbr-east.cleardb.com --user=b5xxxxx7 --password=37d8faad --reconnect heroku_xxxxxx < my_dump_file.sql
$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);
//CLEARDB_DATABASE_URL => mysql://[username]:[password]@[host]/[database name]?reconnect=true
$conn = new mysqli($server, $username, $password, $db);
if (!$conn) {
    die("Error! Connection unsuccessfull");
}

 

/*$sql="UPDATE loginform SET UserID=CONCAT('U00000',id)";

if(mysqli_query($conn, $sql)){
    echo "Table Updated";
}
else{
    echo "Error". mysqli_error($conn);
}*/
