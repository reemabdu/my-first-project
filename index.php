<?php
include_once("index/header.php");
?>

    <div class="suled"> 
     <img src="image/school31.png " height="400px" width="100%">
    </div>
<?php

 $query_home=mysqli_query($connectdb,"select * from article  where home=1");
$row_home= mysqli_fetch_array( $query_home)  ; 

?>
<div class="bolck_head"> <?php echo $row_home['title']; ?></div>
  <div class="bolck_body">
      <p>
         <?php echo $row_home['article']; ?>
      </p>
  </div>
 <div class="bolck_body">
 <div class="bolck_head">اهم الاخبار </div>   
 <?php
 $query=mysqli_query($connectdb,"select * from news order by id desc limit 3");
while ($row= mysqli_fetch_array( $query))
{
    echo '
    
      <div class="b_news" >
     <h3><a href="r_news.php?id='.$row['id'].'">'.mb_substr($row['title'],0,50,"UTF-8").'</h3>
     <img src="'.$row['pic'].'" width="100px" height="100px">
         </a>
     <p>'.mb_substr($row['short'],0,100,"UTF-8").' ........
     </p>
     <h4><a href="r_news.php?id='.$row['id'].'"> المزيد......</a></h4>
     
     
 </div>  
    ';
     
}
 
 ?>
     
 </div>
    <?php
include_once("index/footer.php");
?>       