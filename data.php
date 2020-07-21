<?php
include 'contact.html';
include 'connection.php';
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$country = $_POST['country'];
$subject = $_POST['subject'];

$sql = "INSERT INTO `contact` (`firstname`,`lastname`,`country`,`subject`) VALUES('$firstname','$lastname','$country','$subject')";

$result = mysqli_query($conn,$sql);
  
if ($result== TRUE){
    echo ( "<script type='text/javascript'>alert('Thank You for Contacting Us..');
    windows.history.log(-1);
    
     </script>");}



?>