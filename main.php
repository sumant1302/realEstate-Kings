<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"], 1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

//CLEARDB_DATABASE_URL => mysql://[username]:[password]@[host]/[database name]?reconnect=true
if (!$conn) {
    die("Error! Connection unsuccessfull");
}
//cleardb- mysql://b7bd04fe9ff077:fc90d0d5@us-cdbr-east-04.cleardb.com/heroku_40a387f3062e7d1?reconnect=true
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
