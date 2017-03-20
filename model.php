<?php

class DbConnection
{
	private $conn;
	
	function dbConnect()
	{
		$servername = "localhost";
		$username = "4x4sport";
		$password = "4x4sportpw";
		$dbname = "wordpress";
		
		// Create connection
		$this->conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($this->conn->connect_error) {
			die("Connection failed: " . $this->conn->connect_error);
		}
	}
	
	
	/* Name: db_get_events
	 * Desc: Get list of events
	 * Out : Name 
	 */
	function dbGetEvents()
	{
		//$sql = "SELECT idEvents,NameEnglish, DateStart, DateEnd, countries.Country, Website FROM events inner join countries on events.Countries_idCountries = countries.idCountries ORDER BY DateStart";
		
		$sql = "SELECT p.id as idEvents, p.post_title as NameEnglish, ".
				" e.post_id, e.country as Country, e.start as DateStart, e.end as DateEnd, e.contact_url as Website".
				" from wordpress.wp_posts p inner join wordpress.wp_ai1ec_events e on ( p.id = e.post_id)".
				" where post_type = \"ai1ec_event\" and post_status=\"publish\" order by DateStart;";
		$result = $this->conn->query($sql);
		return $result;
	}
	
	function dbGetEventDescription($id)
	{
		$sql = "SELECT p.id as idEvents, p.post_title as NameEnglish, ".
				" e.post_id, e.country as Country, e.start as DateStart, e.end as DateEnd, e.contact_url as Website".
				" from wordpress.wp_posts p inner join wordpress.wp_ai1ec_events e on ( p.id = e.post_id)".
				" where p.id=".$id;
		//$sql = "SELECT idEvents,NameEnglish, DateStart, DateEnd, countries.Country, Website FROM events inner join countries on events.Countries_idCountries = countries.idCountries WHERE idEvents=".$id;
		$result = $this->conn->query($sql);
		return $result;
	}
	
	
	function dbClose()
	{
		$this->conn->close();
	}
}
?>