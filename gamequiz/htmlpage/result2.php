<?php

$conn=mysqli_connect('localhost','root');
mysqli_select_db($conn,'game');
?>







<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
	<style type="text/css">
		div.result{
          border-style:dotted;
          border-radius: 10px;			
		}
	</style>
</head>
<body style="text-align: center;">
<div class="result">
<h2>Result of the Quiz..</h2>
<form>
<?php
if(isset($_POST['submit'])){
 
  if(!empty($_POST['quizcheck'])){
         
        $count = count($_POST['quizcheck']);

          echo "out of 5, you have select ".$count."options";

         $result=0;
          $i=1;
          $selected=$_POST['quizcheck'];
           // print_r($selected);
          $q="select * from questions2";
          $query = mysqli_query($conn,$q);

          while($rows=mysqli_fetch_array($query)){
               
          $checked = $rows['ans_id'] == $selected[$i] ;
                   // print_r($rows['ans_id']);
                   // echo"<pre>";
                    //print_r($selected);die;

          if($checked){
            $result++;
          }

          $i++;

  }
  echo "<br> ur total score is ".$count;
}
}
?>


</form>
</div>
</body>
</html> 