<?php

if ( $_POST['act'] == "Show" ) {

  header( "Content-type: text/html" );
  $username = "tyler.franzen@undcsmysql";
  $database = "tyler_franzen";
  $password = "tyler8629";
  $host     = "undcsmysql.mysql.database.azure.com";
  $conn     = new mysqli( $host,  $username, $password, $database );

  if ($conn->connect_error) {
     die('Could not connect: '. $conn->connect_error);
  }

  $sql = "SELECT * FROM book";
  $sql2 = "SELECT * FROM author";
  $sql3 = "SELECT * FROM register";



  $sql = "SELECT * FROM book";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    echo "Start of all book information: " . "<br>";
    while($row = $result->fetch_assoc()) {
      echo "ID: " . $row["bookID"] . " - Title: " . $row["title"] . " - ISBN: " . $row["isbn"] . " - Book price: " . $row["bookprice"] . " - Royalty: " . $row["royalty"] . " - Authors: " . $row["authors"] . "<br>";
    }
    echo "<br>";
  } else {
    echo "0 results";
  }

  $sql2 = "SELECT * FROM author";
  $output = $conn->query($sql2);

  if ($output->num_rows > 0) {
    // output data of each row
    echo "\n\n";
    echo "Start of all author information: " . "<br>";
    while($row = $output->fetch_assoc()) {
      echo "ID: " . $row["authorID"] . " - Name: " . $row["name"] . " - Royalties: " . $row["royalties"] . "<br>";
    }
    echo "<br>";
  } else {
    echo "0 results";
  }



  $sql3 = "SELECT * FROM register";
  $k = $conn->query($sql3);

  if ($k->num_rows > 0) {
    // output data of each row
    echo "\n\n";
    echo "Start of all registration information: " . "<br>"; 
    while($row = $k->fetch_assoc()) {
      echo "ID: " . $row["registerID"] . " - Name: " . $row["email"] . "<br>";
    }
    echo "<br>";
  } else {
    echo "0 results";
  }



  if($conn->query($sql3)){
            echo " ";
  } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
  }


  $conn->close();

}

?>