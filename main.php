<?php
$url = parse_url(getenv("mysql://bfd39004aef134:61010c09@us-cdbr-east-04.cleardb.com/heroku_84b361474e9d5e6?reconnect=true"));
//mysql --host=us-cdbr-east.cleardb.com --user=b5xxxxx7 --password=37d8faad --reconnect heroku_xxxxxx < my_dump_file.sql
$server = $url["host"]; //us-cdbr-east-04.cleardb.com
$username = $url["user"]; //bfd39004aef134
$password = $url["pass"]; //61010c09
$db = substr($url["path"], 1); //heroku_84b361474e9d5e6
//CLEARDB_DATABASE_URL => mysql://[username]:[password]@[host]/[database name]?reconnect=true
$conn = new mysqli($server, $username, $password, $db);
if (!$conn) {
    die("Error! Connection unsuccessfull");
}

//  /postgres://ssglulucvcplbh:9a052ad5a205cef40eaec2ad77a98435ed5d353b823596c5ac6c9273da70dc40@ec2-52-86-25-51.compute-1.amazonaws.com:5432/d7fonfn23lp3qs
/*
DB_CONNECTION: pgsql
DB_HOST: ec2-52-86-25-51.compute-1.amazonaws.com
DB_PORT: 5432
DB_DATABASE: d7fonfn23lp3qs
DB_USERNAME: ssglulucvcplbh
DB_PASSWORD: 9a052ad5a205cef40eaec2ad77a98435ed5d353b823596c5ac6c9273da70dc40


/*$sql="UPDATE loginform SET UserID=CONCAT('U00000',id)";

if(mysqli_query($conn, $sql)){
    echo "Table Updated";
}
else{
    echo "Error". mysqli_error($conn);
}*/
