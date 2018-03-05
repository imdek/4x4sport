<link href="sheet.css" rel="stylesheet">

<div id="sorting">
	<center>
		<img src="img/sorting.png">
		<h3>Sorting</h3>
		I want to see:<br>
	</center>
	<form action="index.php" method="get">
		<input type="checkbox" name="Rally">Rally<br />
		<input type="checkbox" name="Trophy">Trophy<br />
		<input type="checkbox" name="Meeting">Meeting<br />
		<input type="checkbox" name="Trial">Trial<br />
		<input type="Submit" value="Absenden" />
	</form>
	
</div>
<script>
	function find (){
		var xhr = new XMLHttpRequest();
		xhr.open('POST', 'index.php', true);
		xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		xhr.onload = function () {
			console.log(xhr.responsetext);
		};
		xhr.send('Rally=rally&Trophy=trophy&Trial=trial&Meeting=meeting');
	}
</script>