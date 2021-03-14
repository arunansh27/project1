<!DOCTYPE html>
<html>
<head>
	<title>Quiz</title>
	<style type="text/css">
		div.container{
		   border-style: solid;
		   text-align: center;
           border-width: 5px
           margin-left: 500px;
           margin-top: 50px;
           margin-right: 10px;
           margin-bottom: 100px;
           background-color: #fff0ed;
           padding: 100px;
		}
		div.low{border-style: groove;
		   border-width: 5px
           margin-left: 200px;
           margin-top: 50px;
           margin-right: 50px;
           background-color: #cccccc;
       }
		div.medium{border-style: groove;
		border-width: 5px
           margin-left: 200px;
           margin-top: 100px;
           margin-right: 50px;
           background-color: #cccccc;
       }
		div.hard{border-style: groove;
		border-width: 5px
           margin-left: 200px;
           margin-top: 100px;
           margin-right: 50px;
           background-color: #cccccc;
       }
	</style>
</head>
<body >
<div class="container">
	<h2 style="text-align: center;">Welcome My Quiz Challenge</h2>
	<form action='/low.php' method="post">
		<table>
		<div class="low">
		   <h3><a href="htmlpage/low.php"><b>Low Level</b></a></h3>
		</div>
		<div class="medium">
         <h3><a href="htmlpage/medium.php"><b>Medium Level</b></a></h3>
		</div>	
		<div class="hard">
		<h3><a href="htmlpage/hard.php"><b>Hard Level</b></a><h3>
		</div>
		</table>
	</form>
</div>
</body>
</html>