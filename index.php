<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Search List Test</title>
<script language="Javascript">
function searchMethod() {
    var searchTerm = document.getElementById("searchQry");
	var searchBounds = document.getElementById("nameList");
	var unlucky_me = true;
	for(var i=0; i< searchBounds.length; i++){
		if(searchBounds[i].value==searchTerm.value){
			alert('Found one!');
			unlucky_me=false
			break;
		}
	}
	if(unlucky_me) alert('Too bad');
}
</script>
</head>
<body>
<center>
<form>
	<input type="button" value="Search" name="btnSearch" onclick="searchMethod()" />
	<input type="text" id="searchQry" /> <br/>
	<select id="nameList">
		<option>Dean</option>
		<option>Avril</option>
		<option>Terence</option>
		<option>Chris</option>
		<option>Shane</option>
		<option>Herman</option>
		<option>Michael</option>
		<option>Ryan</option>
		<option>Angela</option>
		<option>Jill</option>
		<option>Clive</option>
	</select>
</form>
</center>
</body>
</html>