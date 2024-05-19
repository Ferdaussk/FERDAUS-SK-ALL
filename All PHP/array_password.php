<?php
//$name_one = array(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$);
$name = 'Ferdaus';
$name_one = [$name => ['One', 'Two', 'Three']];
print_r($name_one);

?>
<form method="POST">
	<input type="password" placeholder="Password" name="password">
	<input type="submit" value="Submit">
</form>
<?php
if('name' === $_POST['password']):
echo 'Start From Here Success';
else:
echo 'Nothing';
endif;