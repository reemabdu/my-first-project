<?php
include_once("index/header.php");


$id_article=$_REQUEST['id'];
if(intval($id_article)==0)
    
    {
    header("location:index.php");
    
    }
 else 
{
 $query=mysqli_query($connectdb,"select * from article  where id=".$id_article);
$row= mysqli_fetch_array( $query)  ; 

echo ''
. '

<div class="bolck_head"> المقالات الرئيسية </div>

<div class="news_body">
    <h3>'.$row['title'].'</h3>
  
    
    
    <p>
    '.$row['article'].'
    </p>
 
    
</div>
';
}


?>



 <?php
include_once("index/footer.php");
?>       