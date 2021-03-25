<?php
include_once("index/header.php");
?>

<div class="bolck_head">المعلمين </div>
<div class="bolck_body">
    
    <table width="90%" border="0" align="center" class="table_teachers" dir="rtl">
          <tr>
        
         <?php 
          $r_table='';
         $nu=0;
        $query_teachers=mysqli_query($connectdb,"select * from teachers ");
      while( $row_teachers=mysqli_fetch_array($query_teachers))
      {
          $nu++;
          if($nu==4)
       
          {
               $r_table.="</tr><tr>";
               $nu=1;
          }
          
          $r_table .= '
          
          <td valign="top">
          <h3><a href="r_teachers.php?id='.$row_teachers['id'].'">'.$row_teachers['name'].'</a></h3>
            <img src="'.$row_teachers['pic'].'" width="100px" height="100px">
            <p>'. mb_substr($row_teachers['information'],0,50,"utf-8").'</p>
          <h4>'.$row_teachers['email'].'</h4>
         </td>';
      }
      
      
      while ($nu<3)
          
      {
         $r_table.="<td><img src='image/school.jpg' width='100px' height='100px'></td>";  
         $nu++;
      }
      
      echo $r_table; 
        ?>
       
     
            
            </tr>
             
       
    </table>  
    
</div>









  <?php
include_once("index/footer.php");
?>     