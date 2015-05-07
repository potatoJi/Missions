<?php
    $link = mysql_connect('localhost', 'root', '123456');
    if (!$link)
    {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("user");
    if (!empty($_POST['name']))
    {
        if (!empty($_POST['password']))
        {
            $name=($_POST['name']);
            $password=($_POST['password']);
            $quer="select name,password from user where name='$name'";
            $result=mysql_query($quer);
            $num_rows = mysql_num_rows($result);
            $row = mysql_fetch_array($result, MYSQL_ASSOC);
            if ($num_rows>0)
            {
                $password1=$row["password"];
                if ($password==$password1)
                {
                    echo "<script language=\"JavaScript\">\r\n";
                    echo " alert(\"登陆成功\");\r\n";
                    echo " location.replace(\"hello.html\");\r\n";
                    echo "</script>";
                    exit;
                }
                else
                {
                    echo "<script language=\"JavaScript\">\r\n";
                    echo " alert(\"您输入的密码不正确！请重新输入！\");\r\n";
                    echo " history.back();\r\n";
                    echo "</script>";
                    exit;
                }
            }
            else
            {
                echo "<script language=\"JavaScript\">\r\n";
                echo " alert(\"您还没有注册，请先注册！\");\r\n";
                echo " history.back();\r\n";
                echo "</script>";
                exit;
            }
        }
        else
        {
            echo "<script language=\"JavaScript\">\r\n";
            echo " alert(\"您没有输入密码，请重新输入！\");\r\n"; 
            echo " history.back();\r\n"; 
            echo "</script>"; 
            exit; 
        }
        
    }
    else 
    {
        echo "<script language=\"JavaScript\">\r\n"; 
        echo " alert(\"您没有输入姓名，请重新输入！\");\r\n"; 
        echo " history.back();\r\n"; 
        echo "</script>"; 
        exit;  
        
    }
    ?>