<?php
$con = mysqli_connect('localhost','root');
if($con){
    echo "Connection successful";
}else{
    echo "no connection" ;
}
mysqli_select_db($con, 'nayauserdata');
$user = $_POST['user'];
$email = $POST['email'];
$mobile = $POST['mobile'];
$comment = $POST['comment'];

$query = "insert into userinfodata (user,email,mobile,comment)
values ('$user','$email','$mobile','$comment')";

mysqli_query($con,$query);

echo "$query"
mysqli_querry($con , $querry);

header('location:index.php')

?>