<html>
<body>
<form name='test' action='#' method='post'>
Name: <input type='text' name='name'>
Age: <input type='text' name='age'>
<input type='submit'>
</form>
</body>
<?php
$age=$_POST['age'];
if($age<21)
echo "Invalid age.";
else
echo "Valid age.";
?>
</html>
