<?php
$conn=mysqli_connect('localhost','root');
mysqli_select_db($conn,'game');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Low</title>
</head>
<body >
    <form action="result2.php" method="post">
	<h3 style="text-align: center">Hard level type of question</h3>

<?php

$quizcheck=0;
for($i=1;$i<6;$i++){
$q="select * from questions2 where id = $i";
$query=mysqli_query($conn,$q);
while($row = mysqli_fetch_array($query)){
?>


<div class="card">
    <h4><?php echo $row['id'].'-'.$row['question']; ?>  </h4>
    
<?php
$q="select * from hard where ans_id=$i";
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