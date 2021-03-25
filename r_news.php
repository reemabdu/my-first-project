<?php
include_once("index/header.php");


$id_news=$_REQUEST['id'];
if(intval($id_news)==0)
    
    {
    header("location:index.php");
    
    }
 else 
{
 $query=mysqli_query($connectdb,"select * from news  where id=".$id_news);
$row= mysqli_fetch_array( $query)  ; 

echo ''
. '

<div class="bolck_head">الاخبار </div>

<div class="news_body">
    <h3>'.$row['title'].'</h3>
    <h5>'.date("Y/m/d",$row['date']).'</h5>
    <img src="'.$row['pic'].'" width="250px" height="200px">
    
    <p>
    '.$row['news'].'
    </p>
 
    
</div>
';
}


?>



 <?php
include_once("index/footer.php");
?>       
<a href="result.php"></a>