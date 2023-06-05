<html>
<body>
   <form action="" method="post" enctype="multipart/form-data">  
   <div style="width:200px;border-radius:6px;margin:0px auto">  
<table border="1">  
   <tr>  
      <td colspan="2">Selection:</td>  
   </tr>  
   <tr>  
      <td>Purchase</td>  
      <td><input type="checkbox" name="purchase" value="Purchase Titles"></td>  
   </tr>  
   <tr>  
      <td colspan="2" align="center"><input type="submit" value="Purchase" name="sub" onclick="history.go(-1);return false;"></td> 
</table>  
</div>  
</form>
<?php

if(isset($_POST['sub']))  
{  
  header( "Content-type: text/plain" );
  $username = "tyler.franzen@undcsmysql";
  $database = "tyler_franzen";
  $password = "tyler8629";
  $host     = "undcsmysql.mysql.database.azure.com";
  $conn     = new mysqli( $host,  $username, $password, $database );

  if ($conn->connect_error) {
     die('Could not connect: '. $conn->connect_error);
  }

      $sql = "SELECT * FROM book";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          echo "Start of all book information: " . "<br>";
          while($row = $result->fetch_assoc()) {

            echo "ID: " . $row["bookID"] . " - Title: " . $row["title"] . " - ISBN: " . $row["isbn"] . " - Book pri\
ce: " . $row["bookprice"] . " - Royalty: " . $row["royalty"] . " - Authors: " . $row["authors"] . "<br>";
          }
          echo "<br>";
      } else {
        echo "0 results";
      }
}

    


?>

</body>
</html>
