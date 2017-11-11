<!DOCTYPE html>
<html>
	<head>
		<title>Dipper Songs</title>	
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
		
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

<body>

	<header id="header" style="background-color:#ADD8E6;">
		<h2 class="left">Dipper Songs</h2>
		<div class="right">
			
			<input type="search" id = "name" name="search" placeholder="Search songs">
			<button type="button" onclick = run() class="btn btn-info">
          <span class="glyphicon glyphicon-search"></span> Search
        </button>
        

		</div>
	</header>

	<div class="clear"></div>
	
	<div class="jumbotron"> 
		<h3>Welcome to Dipper Songs,world of song is here!!!!</h3>
		<p>Your result of song searched is  shown here...</p>
	<div id="demo" style="margin-left:100px"></div>

<footer>www.dippersongs.com</footer>
	</div>

</body>

</html>

<script type="text/javascript">
	function run(){
		var text = document.getElementById("name").value;
		var xhttp = new XMLHttpRequest();
    
    console.log("https://itunes.apple.com/search?term="+text+"&limit=5");
		xhttp.open("GET", "https://itunes.apple.com/search?term="+text+"&limit=5", true);
	xhttp.send();

		xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

        	var response = JSON.parse(this.responseText);
        	console.log(response);
        	
        	for(i=0;i<response.resultCount;i++){
            
            document.getElementById("demo").innerHTML += response.results[i].artistName +"<br>"+
            												"<audio controls src='"+response.results[i].previewUrl+"'>"
            												+ "Link" +"</audio><hr>";
            
            }
       }
    };
	}
</script>