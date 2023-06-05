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


  $username =  "select email from register";
  $psw = "select psw from register";

  

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



<div id="body">
 <table width='100%' height='80%'>
  <tr>
   <td align='center' valign='middle'>

<table width="75%" cellspacing="0" cellpadding="15" border="0" class="shadow">
 <form method="post" action="http://undcemcs02.und.edu/~tyler.franzen/cgi-bin/A2520/login.pl">
 <tr bgcolor="black">
  <th id="header" align="left" colspan="3">
   <font face="Verdana, Arial, Helvetica" color="orange" size="4"> &nbsp; Tyler's Bookstore</font>
  </th>
 </tr>
 <tr bgcolor="grey">
  <td width="100%" valign="middle">
   <font face="Verdana, Arial, Helvetica" size="2">
   <font size="0"><br /></font>
   &nbsp; &nbsp; &nbsp; Username:
   <input type="text" name="name" size="32" value="Tyler">

   <br /><font size="0"><br /></font>
   &nbsp; &nbsp; &nbsp; Password:
   <input type="password" name="password" size="12" maxlength="12" value="tylerschoice">
   </font>
   <p align="center">
   <input type="submit" name="act" value="Register">
   &nbsp; &nbsp; &nbsp; &nbsp;
   <input type="submit" name="act" value="Enter">
   &nbsp; &nbsp; &nbsp; &nbsp;
   <input type="submit" name="act" value="Clear system">
   &nbsp; &nbsp; &nbsp; &nbsp;
   <input type="submit" name="act" value="Sign up">
   &nbsp; &nbsp; &nbsp; &nbsp;
   <input type="submit" name="act" value="Help">
   <br /><font size="0"><br /></font>
   </p>
  </td>
 </tr>
 </form>
