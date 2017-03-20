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
			echo "<tr><td>".$this->prepEvent($id,$row["NameEnglish"]). "</a> </td><td> " .$mysqldatestart. "</td><td>" .$mysqldateend. "</td><td>".$row["Country"]."</td></tr>";
		}
	}

	function prepCountry($country)
	{
	return $country;
	}


	
}


class ViewEvent
{

	function viewEventDescription($result)
	{
		$row = $result->fetch_assoc();
		$mysqldatestart = date("Y-m-d", $row["DateStart"] );
		$mysqldateend = date( 'Y-m-d', $row["DateEnd"] );
		
	
		echo " <table class=\"table table-striped\"><tbody>";
		echo "<tr><td><h1>".$row["NameEnglish"]."</h1></td>";
		echo "<td><div id=\"map\" style=\"width:400px;height:400px\"></div></td>";
		echo "</tr>";
		echo "<tr><td>From ".$mysqldatestart."</td>";
		echo "<td>To ".$mysqldateend." </td></tr>";
		

		/*
		while($row = $result->fetch_assoc()) {
			$id = $row["idEvents"];
			$phpdatestart = strtotime( $row["DateStart"] );
			$mysqldatestart = date( 'Y-m-d', $phpdatestart );
			$phpdateend = strtotime( $row["DateEnd"] );
			$mysqldateend = date( 'Y-m-d', $phpdateend );
			echo "<tr><td>".$this->prepEvent($id,$row["NameEnglish"]). "</a> </td><td> " .$mysqldatestart. "</td><td>" .$mysqldateend. "</td><td>".$row["Country"]."</td></tr>";
		}*/
		echo "</tbody></table>";
	}

}

?>