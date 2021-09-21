<html>
<head>
<title>登录验证</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
</head>
<body>
<?php
$conn=@mysql_connect("localhost",'root','0367b2e92659ab86') or die("数据库连接失败！");
mysql_select_db("sql_hhdxgd_cn",$conn) or die("您要选择的数据库不存在");
$name=$_POST['username'];
$pwd=$_POST['password'];
$sql="select * from users where username='$name' and password='$pwd'";
$query=mysql_query($sql);
$arr=mysql_fetch_array($query);
if(is_array($arr)){
    echo "<script> alert('sucess-Hello Administrator');parent.location.href='http://dino.hhdxgd.cn:88'; </script>";
}else{
    echo "<script> alert('Please login in first');parent.location.href='index.html'; </script>";
}
?>
</body>
</html> 