<?php
$conn=mysqli_connect('localhost','root');
mysqli_select_db($conn,'game');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Low</title>

<style type="text/css">
	
	div.1{
		background-color: #f2f2f2;

	}
</style>
</head>
<body style="text-align: auto;">
	<form action="result.php" method="post">
		 <h3 style="text-align: center">Low level type of question</h3>
	<!-- <h3 style="text-align: center">Low level type of question</h3>
	<div class="1">
	<p>1.The average of first 50 natural number is.... </p>
	
	<input type="radio" id='1' name="1" value="13">
	<label for="">25.5</label><br>
    <input type="radio"  id="2" name="1" value="14">
    <label for="">25.30</label><br>
    <input type="radio" id='3' name="1" value="15">
	<label for="">25.00</label><br>
    <input type="radio"  id="4" name="1" value="16">
    <label for="">12.25</label><br>
   
 </div>
<div class="1">
  <p>2.The number of 3 digit numbers divisible by 6,is...... </p>
	<input type="radio" id='1' name="2" value="17">
	<label for="">150</label><br>
    <input type="radio"  id="2" name="2" value="18">
    <label for="">166</label><br>
    <input type="radio" id='3' name="2" value="19">
	<label for="">149</label><br>
    <input type="radio"  id="4" name="2" value="20">
    <label for="">151</label><br>

   </div>
  <div class="1"> 
<p>3.What is 1004 divided by 2? </p>

	
	<input type="radio" id='1' name="3" value="1">
	<label for="">502</label><br>
    <input type="radio"  id="2" name="3" value="2">
    <label for="">52</label><br>
    <input type="radio" id='3' name="3" value="3">
	<label for="">520</label><br>
    <input type="radio"  id="4" name="3" value="4">
    <label for="">5002</label><br>

 </div>
 <div class="1">
<p>4.106*106-94*94=?.. </p>
	
	<input type="radio" id='1' name="4" value="5">
	<label for="">2400</label><br>
    <input type="radio"  id="2" name="4" value="6">
    <label for="">2004</label><br>
    <input type="radio" id='3' name="4" value="7">
	<label for="">1904</label><br>
    <input type="radio"  id="4" name="4" value="8">
    <label for="">1906</label><br>
   
 </div>
 	<div class="1">
<p>5.The simplest form of 1.5:2.5 is...</p>
    
	<input type="radio" id='1' name="5" value="9">
	<label for="">15:25</label><br>
    <input type="radio"  id="2" name="5" value="10">
    <label for="">6:15</label><br>
    <input type="radio" id='3' name="5" value="11">
	<label for="">0.75:1.25</label><br>
    <input type="radio"  id="4" name="5" value="12">
    <label for="">3:5</label><br>

    </div>
<br> -->

<?php
$quizcheck=0;
for($i=1;$i<6;$i++){
$q="select * from questions where id = $i";
$query=mysqli_query($conn,$q);
while($row = mysqli_fetch_array($query)){
?>


<div class="card">
	<h4><?php echo $row['id'].'-'.$row['question']; ?>  </h4>
	
<?php
$q="select * from low where ans_id=$i";
$query1 = mysqli_query($conn,$q);

while($rows = mysqli_fetch_array($query1)){
	?>
    
     <div class="card-body">

     	<input type="radio" name="quizcheck[<?php echo $rows['ans_id'];  ?>]" value="<?php echo $rows['id']; ?> ">
     	<?php echo $rows['answer']; ?>
     	
     </div>




<?php 
}
}
}
?>

<br>

<input type="submit" name="submit" value="submit">
</form>
</div>
</body>
</html>