<html>
<head>
</head>
<body>
<?php
if(isset($_POST['button']))
{
    $username=$_POST['username'];
    $pwd=$_POST['pwd'];
    mysql_connect('127.0.0.1','root','goodid') or die(mysql_error());
    mysql_select_db('wk_im');
    $sql="select * from wk_account_info where staruid='$username' and pw='$pwd' ;";
    $res=mysql_query($sql);
    if (mysql_num_rows($res)==1)
    {
        echo "登录成功";die;
    }else
    {
        echo "登录失败";die;
    }
}  
?>
<form name="login" method="post" action="">
    <table width="500" border="1" align="center">
        <tr>
            <th colspan="2">用户登录</th>
        </tr>
        <tr>
            <td>用户名：</td>
            <td><input type="text" name="username" id="username"></td>
        </tr>
        <tr>
            <td>密码：</td>
            <td><input type="password" name="pwd" id="pwd" value=""></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="button" id="button" value="提交"></td>
        </tr>
    </table>
</form>

</body>
</html>
