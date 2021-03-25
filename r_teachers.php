<?php
include_once("index/header.php");


$id_news=$_REQUEST['id'];
if(intval($id_news)==0)
    
    {
    header("location:index.php");
    
    } 
    else {
        $guery = mysqli_query($connectdb, "select * from teachers where id = ' $id_news'");
       $row = mysqli_fetch_array( $guery);
       echo '<div class="bolck_head">'.$row['name'].'</div>

<div class="news_body">
        <h3>'.$row['email'].'</h3>
        <img src="'.$row['pic'].'" width="200px"  height="200px">
    <p>'.$row['information'].' </p>

</div>';
       
        
}
    
    ?>
    

 <?php
include_once("index/footer.php");
?>   