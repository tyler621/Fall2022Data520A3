<?php

if ( $_POST['act'] == "Clear" ) {
  header( "Content-type: text/plain" );
  $username = "tyler.franzen@undcsmysql";
  $database = "tyler_franzen";
  $password = "tyler8629";
  $host     = "undcsmysql.mysql.database.azure.com";
  $conn     = new mysqli( $host,  $username, $password, $database );

  if ($conn->connect_error) {
     die('Could not connect: '. $conn->connect_error);
  }

  $sql = "DELETE FROM book;";
  echo $sql . "\n";

  if($conn->query($sql)){
            echo "Table deleted successfully \n";
  } else {
            echo "ERROR!!!!";
  }


  $sql = "DELETE FROM author;";
  echo $sql . "\n";

  if($conn->query($sql)){
            echo "Table deleted successfully \n";
  } else {
            echo "ERROR!!!!";
  }

  $sql = "DELETE FROM register;";
  echo $sql . "\n";

  if($conn->query($sql)){
            echo "Table deleted successfully \n";
  } else {
            echo "ERROR!!!!";
  }



  $conn->close();

}
