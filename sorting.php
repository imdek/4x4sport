<link href="sheet.css" rel="stylesheet">

<div id="sorting">
	<br>
	<center>
		<img src="img/sorting.png">
		<h2>Sorting</h2>
		I want to see:<br>
		<h4><input type="checkbox" name="Rally" value="rally"> Rally</h4>
		<h4><input type="checkbox" name="Trophy" value="trophy"> Trophy</h4>
		<h4><input type="checkbox" name="Trial" value="trial"> Trial</h4>
		<h4><input type="checkbox" name="Meeting" value="meeting"> Meeting</h4>
		<button id="sortbutton">Find</button>
	</center>
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