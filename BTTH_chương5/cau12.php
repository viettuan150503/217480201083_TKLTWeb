<html>
   
   <head>
      <title>Vẽ bàn cờ bằng PHP</title>
   </head>
   <body>
   
      <table width="400px" cellspacing="0px" cellpadding="0px" border="1px">  
      
	  <!-- Ô có độ rộng 270px (8 cột x 60px) -->  
      <?php  
      for($row=1; $row <= 8; $row++)  
      {  
          echo "<tr>";  
          for($col=1; $col <=8; $col++)  
          {  
            $total=$row + $col;  
            if($total%2 == 0)  
            {  
              echo "<td height=50px width=50px bgcolor=#FFFFFF></td>";  
            }  
            else  
            {  
              echo "<td height=50px width=50px bgcolor=#000000></td>";  
            }  
          }  
          echo "</tr>";  
      }  
      ?>  
     </table>
       
   </body>
</html>