

       <?php
       

$connectdb= mysqli_connect('localhost','root','') or die("could not connect");

if ($connectdb) {
    echo "ok !!!!!!!!";
    
}
  $selectdb=mysqli_select_db($connectdb,'school') or die("could not connect");
  
  


  ?>