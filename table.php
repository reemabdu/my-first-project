<?php
include_once("index/header.php");
?>
<div class="bolck_head">جدول الحصص</div>
<div class="bolck_body">
<?php   
$query=mysqli_query($connectdb,"select * from schedule ");
while ($row= mysqli_fetch_array( $query))
{
    echo '
    
    
    <div class="all_news">
        
      <h3><a href="r_schedule.php?id='.$row['id'].'">'.$row['name'].'</h3>
      
      
  
      
    </div>   
    ';
     
}

?>    

    
    
</div>

 <?php
include_once("index/footer.php");
?>       