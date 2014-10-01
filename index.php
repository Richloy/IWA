<html>

	<head>

 	 <meta charset="utf-8">
 	 <title>Login Form IWA Lab1</title>
 	 <script src="http://code.jquery.com/jquery-1.10.2.js"></script>

	</head>



	<form>

 	   Username: <input type="text" name="username" id="username"></input><br>
	    Password: <input type="password" name="pw" id="pw"> </input><br>

 	   <button onclick="getValuesFromData();">Test</button>

	</form>


	<script>

		function getValuesFromData(){

		var username = document.getElementById('username').value;
		var password = document.getElementById('pw').value;

  		  $.post( "pageb.php", { username: username, password: password }).done(function( data ) {
  		    	alert( "Data Loaded: " + data );
   		  });
		}

	</script>
	<h1>Hello</h1>

</html>
