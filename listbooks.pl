#!/usr/bin/perl -w

use CGI;
print( "Content-type: text/html\n\n" );
$query = new CGI;
$act   = $query->param( 'act' );
$name  = $query->url_param( 'name' );

if ( $act eq "List Books" ) {
  # Print HTML.
    print ( "Content-type: text/html\n\n" );

# Use "here-doc" syntax.
    print <<EndofHTML;
  <html>
   <body>
    <table width="100%" height="80%">
     <tr>
      <td align="center">
       <font size="+1"><b>
EndofHTML

  # Remove leading and trailing spacing.
  $name =~ s/^\s*(\S*)\s*$/$1/;
  # For security, remove some Unix metacharacters.
  $name =~ s/;|>|>>|<|\*|\?|\&|\|//g;

  # Compose a Java command.
  $cmd = "/usr/bin/java -Djava.security.egd=file:/dev/./urandom listbooks ";

  print( $cmd );    system( $cmd );

print <<EndofHTML;
        <form>
         <input type="button" value=" Back " onclick="history.go(-1);return false;" />
        </form>
       </b></font>
      </td>
     </tr>
    </table>
   </body>
  </html>
EndofHTML
system( "cat yes.html" );
}
elsif ( $act eq "Main" ) {
    print ( "Content-type: text/html\n\n" );
    system( "cat updatelist.html" );
}
elsif( $act eq "Help" ) {
    print ( "Content-type: text/html\n\n" );
    system( "cat help.html" );
}
else {
    print( "<br /><br /><br /><center><h2>Error! No such action: <em>$act</em></h2></center>" );
}
