#!/usr/bin/perl -w

use CGI;
print( "Content-type: text/html\n\n" );
$query = new CGI;
$act   = $query->param( "act" );
$type  = $query->param( "type" ); 
$name  = $query->url_param( 'name' );

if ( $act eq "Update" ) {
    system( "cat updatelist.html" );
}
elsif ( $act eq "List all" and $type eq "book" ) {
    system( "cat 51.html" );
    print ( $name ); 
    system( "cat 52.html" );
} 
elsif( $act eq "Help" ) {
    print ( "Content-type: text/html\n\n" );
    system( "/bin/cat help.html" );
}
else {
    print( "<br /><br /><br /><center><h2>Error! No such action: <em>$act</em></h2></center>" );
}
