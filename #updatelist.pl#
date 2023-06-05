#!/usr/bin/perl -w

use CGI;
print( "Content-type: text/html\n\n" );
$query = new CGI;
$act   = $query->param( "act" );
$name  = $query->url_param( 'name' );

if ( $act eq "Enter" ) {
    print ( "Content-type: text/html\n\n" );
    system( "cat updatelist.html" );
}
elsif ( $act eq "List" ) {
    print ( "Content-type: text/html\n\n" );
    system( "cat listbooks.html" );
    print ( $name );
}
elsif ( $act eq "Main" ) {
    print ( "Content-type: text/html\n\n" );
    system( "cat enterlist.html" ); 
}
elsif( $act eq "Help" ) {
    print ( "Content-type: text/html\n\n" );
    system( "cat help.html" );
}
else {
    print( "<br /><br /><br /><center><h2>Error! No such action: <em>$act</em></h2></center>" );
}
