<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    <table>
        <tr>
            <td></td>
            <td>Name:</td>
        </tr>
        <tr>
            <td></td>
            <td><input type="text" name="name" id="name"/></td>
        </tr>
        <tr>
            <td></td>
            <td>Comment:</td>
        </tr>
        <tr>
            <td></td>
            <td><textarea cols="35" rows="6" id="comment_entered"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Comment" onclick="submitcomment();"/></td>
        </tr>
    </table>
</form>
<br><br>
<div id="showcomments"></div>
<?php 
$name_entered= $_POST['name_entered'];
$comment_entered= $_POST['comment'];
$table= $_POST['webpage'];
$date= date("m-d-Y");
$user = "root";
$password = "";
$host = "localhost";
$dbase = "comment_make";

$connection= mysql_connect ($host, $user, $password);
if (!$connection){
    die ('Could not connect:' . mysql_error());
}
mysql_select_db($dbase, $connection);
$val = mysql_query("select 1 from $table");
if($val !== FALSE){
    if ((!empty($name_entered)) && (!empty($comment_entered))){
        mysql_query("INSERT INTO $table (name, date, comments)
        VALUES ('$name_entered', '$date', '$comment_entered')");
    }
    $result= mysql_query( "SELECT * FROM $table ORDER BY ID DESC" ) or die("SELECT Error: ".mysql_error());
    while ($row = mysql_fetch_array($result)){ 
        $name_field= $row['name'];
        $date_field= $row['date'];
        $comment_field= $row['comments'];
        echo "$name_field wrote: ($date_field) <br>";
        echo "$comment_field";
        echo "<br><hr><br>";
    }
} else{
    $createtable= "CREATE TABLE $table
    ( ".
    "ID INT NOT NULL AUTO_INCREMENT, ".
    "name VARCHAR(50) NOT NULL, ".
    "date VARCHAR(50) NOT NULL, ".
    "comments VARCHAR(60000) NOT NULL, ".
    "PRIMARY KEY (ID)
    );
    ";
    $create= mysql_query($createtable, $connection);
    if ($create){
        if ((!empty($name_entered)) && (!empty($comment_entered))){
            mysql_query("INSERT INTO $table (name, date, comments)
            VALUES ('$name_entered', '$date', '$comment_entered')");
        }
        $result= mysql_query( "SELECT * FROM $table ORDER BY ID DESC" ) 
        or die("SELECT Error: ".mysql_error()); 
        while ($row = mysql_fetch_array($result)){ 
            $name_field= $row['name'];
            $date_field= $row['date'];
            $comment_field= $row['comments'];
            echo "$name_field wrote: ($date_field) <br>";
            echo "$comment_field";
            echo "<br><hr><br>";
        }
    }
}
?> 
<script>
function submitcomment() {
    var request;
    try {
        request= new XMLHttpRequest();
    }
    catch (tryMicrosoft) {
        try {
            request= new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch (otherMicrosoft){
            try {
                request= new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch (failed) {
                request= null;
            }
        }
    }
    var webpage= location.href;
    position= webpage.lastIndexOf("/"); 
    var lastpart= webpage.substring(position + 1);
    var period= lastpart.indexOf(".");
    var complete= lastpart.substring(0, period);
    complete= complete.replace(/-/g, "_");
    var url= "usercomments.php";
    var username= document.getElementById("name").value;
    var usercomment= document.getElementById("comment_entered").value;
    var vars= "name="+username+"&comment="+usercomment+"&webpage="+complete;
    request.open("POST", url, true);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    request.onreadystatechange= function() {
        if (request.readyState == 4 && request.status == 200) {
            var return_data=  request.responseText;
            document.getElementById("showcomments").innerHTML= return_data;
        }
    }
    request.send(vars);
}
</script>
</body>
</html>