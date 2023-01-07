<style type="text/css">
    .even-row{
        background-color: white;
    }
    .odd-row{
        background-color: gray;
    }
</style>
<table>
    <tr>
        <th>
            Quantity;
        </th>
        <th>
            Ingredient;
        </th>
    </tr>
<?php
?>
</table>
$dsn = 'mysql:dbname=demo;host=localhost;port=3306';

$username = 'root';

$password = 'password_here';

try {

 $db = new PDO($dsn, $username, $password); // also allows an extra parameter of configuration

} catch(PDOException $e) {

 die('Could not connect to the database:<br/>' . $e);

}
//pdo函数的作用可以用于链接数据库 报错需要搭配try和catch来使用