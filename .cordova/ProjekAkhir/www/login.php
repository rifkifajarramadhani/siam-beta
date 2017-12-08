<?php
if(isset($_POST['login']))
{
$nim=mysql_real_escape_string(htmlspecialchars(trim($_POST['nim'])));
$password=mysql_real_escape_string(htmlspecialchars(trim($_POST['password'])));
$login=mysql_num_rows(mysql_query("select * from siam_beta where nim='$nim' and password='$password'"));
if($login!=0)
{
echo "success";
}
else
{
echo "failed";
}
}
?>