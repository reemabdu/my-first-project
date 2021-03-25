<?php
include_once("index/header.php");
?>
<div class="bolck_head">الاخبار </div>
<div class="bolck_body">
<?php   
$query=mysqli_query($connectdb,"select * from news order by id desc limit 20");
while ($row= mysqli_fetch_array( $query))
{
    echo '
    
    
    <div class="all_news">
        
      <h3><a href="r_news.php?id='.$row['id'].'">'.$row['title'].'</h3>
      <img src="'.$row['pic'].'"  width="90px" height="65px"></a>
      <p>'.mb_substr($row['short'],0,100,"UTF-8").'</p>
      
      <h4><a href="r_news.php?id='.$row['id'].'">المزيد....</a></h4>
      
      
      
    </div>   
    ';
     
}

?>    

    
    
</div>

 <?php
include_once("index/footer.php");
?>       