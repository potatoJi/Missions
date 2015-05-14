<?php

    $name=$_POST['name'];
    
    $password=$_POST['password'];
    
    $n=strlen($name);
    
    $p=strlen($password);
    
    if($n==0){
        
        echo "请输入用户名";
        
    }elseif(!($n>=5 && $n<=16)){
        
        echo "用户名长度为5-16位";
        
    }elseif($p==0){
        
        echo "请输入密码";
        
    }elseif(!($p>=5 && $p<=16)){
        
        echo "密码长度为5-16位";
        
    }else{
        $conn=mysql_connect("localhost","root","123456") or die("数据库连接失败");
        mysql_select_db("user");
        mysql_query("set names utf8")；
        $sql="insert into guest_table(name,password)values('{$name}','{$password}')";
        
        mysql_query($sql);
        
        $row=mysql_affected_rows($conn);
        
        if($row>0)
            
        {
            
            echo "注册成功";
            
        }else{
            
            echo "注册失败";
            
        }
        
    }
    
    ?>