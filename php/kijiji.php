<?php
	require('db_connect.php');
?>

<?php 
	// echo 'Thank you '. $_POST . ' ' . $_POST . ', says the PHP file';
	foreach ($_POST as $key => $value) {
		echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars(json_decode($value, true))."<br>";
		$ad = json_decode($value, true);

		foreach($ad as $key => $value){
			echo $key . " : " . $value;
		}

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>
	<script src="../js/kijiji-scraper/bundle.js"></script>
</head>
<body>
	Hello
</body>
</html>

<!-- <html>
<head>
<script>
function ajax_post(){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "../inventory.php";
    var fn = document.getElementById("first_name").value;
    var ln = document.getElementById("last_name").value;
    var vars = "firstname="+fn+"&lastname="+ln;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
			document.getElementById("status").innerHTML = return_data;
	    }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "processing...";
}
</script>
</head>
<body>
<h2>Ajax Post to PHP and Get Return Data</h2>
First Name: <input id="first_name" name="first_name" type="text">  <br><br>
Last Name: <input id="last_name" name="last_name" type="text"> <br><br>
<input name="myBtn" type="submit" value="Submit Data" onclick="ajax_post();"> <br><br>
<div id="status"></div>
</body>
</html> -->