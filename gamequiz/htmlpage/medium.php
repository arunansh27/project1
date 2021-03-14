<?php
$conn=mysqli_connect('localhost','root');
mysqli_select_db($conn,'game');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Medium</title>
</head>
<body >
    <form action="result1.php" method="post">
	<h3 style="text-align: center">Medium level type of question</h3>
	<!-- <p>1. Find the average of numbers 87, 84, 86, 90, 82, 88, 78. </p>
    
	<input type="radio" id='1'b name="" value="">
	<label for="">84</label><br>
    <input type="radio"  id="2" name="" value="">
    <label for="">85</label><br>
    <input type="radio" id='3' name="" value="">
	<label for="">87</label><br>
    <input type="radio"  id="4" name="" value="">
    <label for="">86</label><br>

  <p>2. Identify the type(s) of average in maths. </p>

    
	<input type="radio" id='1' name="" value="">
	<label for="">arithmetic mean</label><br>
    <input type="radio"  id="2" name="" value="">
    <label for="">all the above</label><br>
    <input type="radio" id='3' name="" value="">
	<label for="">Harmonic mean</label><br>
    <input type="radio"  id="4" name="" value="">
    <label for="">geometric mean</label><br>

<p>3.What is the geometric mean of 4 and 25. </p>

	<input type="radio" id='1' name="" value="">
	<label for="">15</label><br>
    <input type="radio"  id="2" name="" value="">
    <label for="">10</label><br>
    <input type="radio" id='3' name="" value="">
	<label for="">16</label><br>
    <input type="radio"  id="4" name="" value="">
    <label for="">18</label><br>
<p>4.Choose the odd one. </p>
    
	<input type="radio" id='1' name="" value="">
	<label for="">Mean</label><br>
    <input type="radio"  id="2" name="" value="">
    <label for=""> Index number</label><br>
    <input type="radio" id='3' name="" value="">
	<label for="">Median</label><br>
    <input type="radio"  id="4" name="" value="">
    <label for="">Mode</label><br>
<p>5.The arithmetic mean of the first n natural numbers is </p>

	<input type="radio" id='1' name="" value="">
	<label for="">(n-1)/2</label><br>
    <input type="radio"  id="2" name="" value="">
    <label for="">(n+1)/2</label><br>
    <input type="radio" id='3' name="" value="">
	<label for="">n/2</label><br>
    <input type="radio"  id="4" name="" value="">
    <label for="">None of these</label><br>
<br><br> -->


<?php

$quizcheck=0;
for($i=1;$i<6;$i++){
$q="select * from questions1 where id = $i";
$query=mysqli_query($conn,$q);
while($row = mysqli_fetch_array($query)){
?>


<div class="card">
    <h4><?php echo $row['id'].'-'.$row['question']; ?>  </h4>
    
<?php
$q="select * from medium where ans_id=$i";
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

<input type="submit" name="submit">
</form>
</body>
</html>