<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"><!--form 创建收集数据的表单 action将所收集到的表单返回到指定脚本中 $_SERVER['PHP_SELF']返回当前脚本名称-->
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//返回传参类型
  // collect value of input field
  $name = $_REQUEST['fname'];//_REQUEST返回的是一个数组
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

</body>
</html>