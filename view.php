<?php
class ViewTable
{
	function prepEvent($id,$event)
	{
		return "<a href=event.php?event=".$id.">".$event."</a>";
	}
	
	function viewEventsTable($result)
	{
		while($row = $result->fetch_assoc()) {
			$id = $row["idEvents"];
			$mysqldatestart = date("Y-m-d", $row["DateStart"] );
			$mysqldateend = date( 'Y-m-d', $row["DateEnd"] );
			echo "<tr><td>".$this->prepEvent($id,$row["NameEnglish"]). "</a> </td><td> " .$mysqldatestart. "</td><td class=\"autohide\">" .$mysqldateend. "</td><td class=\"autohide\">".$row["Country"]."</td></tr>";
		}
	}

	function prepCountry($country)
	{
	return $country;
	}
}

class ViewEvent
{
	//$row = "";
	
	function __construct ($r){
		$this->row = $r;
	}
	
	function Name (){
		return "".$this->row["NameEnglish"];
	}
	function StartDate (){
		return "".date('d.m.Y', $this->row["DateStart"] )."";
	}
	function EndDate (){
		return "".date('d.m.Y', $this->row["DateEnd"] )."";
	}
	
	function viewEventWithMap()
	{
		viewEventDescription($this->row);

	}
	
	function viewEventDescription()
	{
		
		/*$mysqldatestart = date('d m Y', $this->row["DateStart"] );
		$mysqldateend = date( 'd m Y', $this->row["DateEnd"] );
		echo "<div class= \"col-md-8\">";
		echo "<h2>".$this->row["NameEnglish"]."</h2>";
		echo "<h4>From<br>";
		echo "<- ".$mysqldatestart." -><br>";
		echo "to<br>";
		echo "<- ".$mysqldateend." -></h4>\n";
		echo "</div>";*/

	}
	
	function viewEventMap()
	{
		
		echo "<div class=\"col-md-4\">";
		echo "<div id=\"map\" style=\"width:400px;height:400px\">";
		echo "<script>\nvar mapCanvas = document.getElementById(\"map\");\nvar mapOptions = {\ncenter: new google.maps.LatLng(";
		echo $this->row["latitude"];
		echo " , ";
		echo $this->row["longitude"];
		echo "), zoom: 5\n}\nvar map = new google.maps.Map(mapCanvas, mapOptions);\n";
		echo "var marker= new google.maps.Marker({ position: new google.maps.LatLng(";
		echo $this->row["latitude"];
		echo " , ";
		echo $row["longitude"];
		echo "), map: map, title: 'start'});";
		
		echo "</script>";
		echo "</div>";
		echo "</div>";
	}
	

}

?>