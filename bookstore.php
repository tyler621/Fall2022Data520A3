<?php

if ( $_POST['act'] == "Enter" ) {

  header( "Content-type: text/plain" );
  $username = "tyler.franzen@undcsmysql";
  $database = "tyler_franzen";
  $password = "tyler8629";
  $host     = "undcsmysql.mysql.database.azure.com";
  $conn     = new mysqli( $host,  $username, $password, $database );

  if ($conn->connect_error) {
     die('Could not connect: '. $conn->connect_error);
  }

  $title =  $_REQUEST['title'];
  $ISBN = $_REQUEST['ISBN'];
  $price = $_REQUEST['price'];
  $royalty = $_REQUEST['royalty'];
  $authors = $_REQUEST['authors'];  

  $sql = "INSERT INTO book VALUES ('bookID', '$title','$ISBN','$price','$royalty','$authors')";


  if($conn->query($sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
  } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
  }


  $conn->close();

}

elseif ( $_POST['act'] == "Enter Author" ) {

  header( "Content-type: text/plain" );
  $username = "tyler.franzen@undcsmysql";
  $database = "tyler_franzen";
  $password = "tyler8629";
  $host     = "undcsmysql.mysql.database.azure.com";
  $conn     = new mysqli( $host,  $username, $password, $database );

  if ($conn->connect_error) {
     die('Could not connect: '. $conn->connect_error);
  }

  $name =  $_REQUEST['name'];
  $royalties = $_REQUEST['royalties'];

  $sql = "INSERT INTO author VALUES ('authorID', '$name','$royalties')";


  if($conn->query($sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
  } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
  }


  $conn->close();

}
else {
  header( "Content-type: text/html" );
  echo( "<html><body>" );
  echo( "<h3>No such option: " . $_POST["act"] . "</h3>" );
  echo( "</body></html>" );
}

?>
