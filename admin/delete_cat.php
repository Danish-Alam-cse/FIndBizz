<?php

include_once('../include/connect.php');

session_start();
if(!isset($_SESSION['admin_log'])){
    redirect('login');
}

if(isset($_GET['del'])){
    $del = $_GET['del'];
    $result = runQuery("DELETE FROM categories WHERE cat_id='$del'");
    
    
    if($result)
    {
        redirect('category');
    }
    else{
        echo "fail";
    }
}
?>