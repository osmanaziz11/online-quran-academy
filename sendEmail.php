<?php 
if(!defined('ACCESS')) {header("Location: http://hashnetlinks.com/404.php");}
else
{
<?php 

if(isset($_POST['first_name']))
{
    $to="hashnetlink@gmail.com";
$subject='Testing Email';
$message="Email Receieved.";
$from="hashnetlinks.support@hashnetlinks.com";
$headers="From: $from";
if(mail($to,$subject,$message,$headers))
{
    echo 1;
}else{
    echo 0;
}
}


?>
}

?>