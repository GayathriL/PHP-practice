<?php

namespace Compassite\controller;

use Compassite\model\DBController;

class AdminController
{
    public function getMyView()
    {

    session_start();
     
    $login = new DBController();



    if (isset($_POST['submit'])) {
        
        $username = $_POST['name'];
        $password = md5($_POST['pass']);
        
        if (!empty($username) && !empty($password)) {
            
            $query   = "SELECT * FROM admin WHERE adusername='$username' AND password='$password'";
            $results = $login->runQuery($query);
            //echo $login->numRows($query);
            
            while ($row = mysqli_fetch_assoc($results)) {
                
                //echo $row['adusername'];
                if ($row['adusername'] == $username && $row['password'] == $password) {
                    $_SESSION['adusername'] = $_POST['name'];
                    header('Location: index.php?action=view');
                    //echo "login as admin";
                    
                } else {
                    echo "login as user";
                }
            }
        }
        
        else 
        {
            echo "Fields empty";
        }
        
        
        }
         require "/var/www/html/PHP-practice/ModelViewController/application/view/Loginadmin.php";
   
    }

}


