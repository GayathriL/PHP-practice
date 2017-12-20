<?php

namespace Compassite\controller;

use Compassite\model\DBConnection;
use Compassite\model\Admin;

class AdminController
{
    public function loginadmin()
    {
        
        
        $login = new DBConnection();
        
        if (isset($_POST['submit'])) {
            
            $username = $_POST['name'];
            $password = md5($_POST['pass']);
            
            if (!empty($username) && !empty($password)) {
                
                $query   = "SELECT * FROM admin WHERE adusername='$username' AND password='$password'";
                $results = $login->runQuery($query);
                
                while ($row = mysqli_fetch_assoc($results)) {
                    
                    if ($row['adusername'] == $username && $row['password'] == $password) {
                        $_SESSION['adusername'] = $_POST['name'];
                        header('Location: index.php?action=view');
                        
                    } else {
                        echo "login as user";
                    }
                }
            }
            
            else {
                echo "Fields empty";
            }
            
            
        }
        require "/var/www/html/PHP-practice/ModelViewController/application/view/Adminview/Loginadmin.php";
        
    }
    
    
    public function adminviewpage()
    {
        
        $username = $_SESSION['adusername'];
        $password = $_SESSION['password'];
        echo "Login successfully" . "<br><br>";
        echo "Welcome ";
        echo $username . "<br><br>";
        require "/var/www/html/PHP-practice/ModelViewController/application/view/Adminview/adminviewpage.php";
    }
    
    
    public function listusers()
    {
        
        $list    = new DBConnection();
        $query   = "SELECT firstname,lastname,email,qualification,city,state,userid FROM user";
        $results = $list->runQuery($query);
        require "/var/www/html/PHP-practice/ModelViewController/application/view/Adminview/listusers.php";
    }

    public function edituser()
    {

        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $password=md5($_POST['password']);
        $email=$_POST['email'];
        $qualification=$_POST['qualification'];
        $city=$_POST['city'];
        $state=$_POST['state'];

        $edituser=new Admin($firstname,$lastname,$password,$email,$qualification,$city,$state,$STATUS);


        $edituser->editUser($edituser);

        require "/var/www/html/PHP-practice/ModelViewController/application/view/Adminview/Edituser.php";

    }



    public function deleteuser()
    {

        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $userid=$_POST['userid'];

        $deleteuser=new Admin($firstname,$lastname,$userid);

        $deleteuser->DeleteUser($deleteuser);
        require "/var/www/html/PHP-practice/ModelViewController/application/view/Adminview/deleteuser.php";
    }

    public function status()
    {
        $userid = $_GET['userid'];

        $admin = new Admin();

        if(isset($_REQUEST['disablesubmit']))
        {
            extract($_REQUEST);
            $disable = $admin->Status_Disable($_POST['disableuser']);
        }
        if(isset($_REQUEST['enablesubmit']))
        {
            extract($_REQUEST);
            $enable = $admin->Status_Enable($_POST['enableuser']);
        }

        require "/var/www/html/PHP-practice/ModelViewController/application/view/Adminview/listusers.php";
    }

    

    
}
