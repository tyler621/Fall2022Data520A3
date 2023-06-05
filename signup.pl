#!/usr/bin/perl -w

use CGI;
print( "Content-type: text/html\n\n" );
$query = new CGI;
$act   = $query->param( "act" );
$name  = $query->param( "name" );

if ($act eq "Submit") {
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
  $cmd = "/usr/bin/java -Djava.security.egd=file:/dev/./urandom signup ";

  print( $cmd );    system( $cmd );    
}
