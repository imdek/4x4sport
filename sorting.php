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
		<button onClick="find()" id="sortbutton">Find</button>
	</center>
</div>
<script>
	function find() {
		var text="We will now only show you events with the tags ";
		if(document.querySelector('input[name=Rally]').checked){
			text+="\'Rally\' "
		}
		if(document.querySelector('input[name=Trophy]').checked){
			text+="\'Trophy\' "
		}
		if(document.querySelector('input[name=Trial]').checked){
			text+="\'Trial\' "
		}
		if(document.querySelector('input[name=Meeting]').checked){
			text+="\'Meeting\'"
		}
		text+=".";
		alert(text);
	}
</script>