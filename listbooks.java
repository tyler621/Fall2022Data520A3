// Import the following packages and class to use JDBC.
import  java.sql.*;
import  java.io.*;
import  oracle.jdbc.*;
import  oracle.jdbc.pool.OracleDataSource;

class  listbooks {
    public static void  main( String args[ ] ) throws SQLException {
	String user     = "C##tyler.franzen";
	String password = "tyler6658";
	String database = "65.52.222.73:1521/cdb1";

	// Open an OracleDataSource and get a connection.
	OracleDataSource ods = new OracleDataSource( );
	ods.setURL     ( "jdbc:oracle:thin:@" + database );
	ods.setUser    ( user );
	ods.setPassword( password );
	Connection conn = ods.getConnection( );

	try {
	    Statement stmt = conn.createStatement( );
	   
	    String query = "SELECT * FROM author";
	    System.out.println("\nExecuting query: " + query);
	    ResultSet rset = stmt.executeQuery(query); 

            if ( !rset.next( ) )
                System.out.println( "No books are found!" );
            else
                do {
                    System.out.print  ( rset.getString(1) + ": " );
                    System.out.println( rset.getString(2) );
                } while ( rset.next( ) );

	    // Close the ResultSet and Statement.
	    rset.close( );
	    stmt.close( );
	}
	catch ( SQLException ex ) {
	    System.out.println( ex );
	}
	// Close the Connection.
	conn.close( );
    }
}
