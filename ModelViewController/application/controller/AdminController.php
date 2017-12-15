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
        require "/var/www/html/PHP-practice/ModelViewController/application/view/Loginadmin.php";
        
    }
    
    
    public function adminviewpage()
    {
        
        session_start();
        $username = $_SESSION['adusername'];
        $password = $_SESSION['password'];
        echo "Login successfully" . "<br><br>";
        echo "Welcome ";
        echo $username . "<br><br>";
        require "/var/www/html/PHP-practice/ModelViewController/application/view/adminviewpage.php";
    }
    
    
    public function listusers()
    {
        
        $list    = new DBController();
        $query   = "SELECT firstname,lastname,email,qualification,city,state,userid FROM user";
        $results = $list->runQuery($query);
        echo "<table border='1' cellpadding='10'>";
        echo "<tr><th>Firstname</th> <th>Lastname</th> <th>Email</th> <th>Qualification</th> <th>City</th> <th>State</th> 
        <th>Userid</th>   <th>Edit</th> <th>Delete</th> </tr>";
        
        while ($row = mysqli_fetch_array($results)) {
            
            echo "<tr>";
            
            echo '<td>' . $row['firstname'] . '</td>';
            
            echo '<td>' . $row['lastname'] . '</td>';
            
            echo '<td>' . $row['email'] . '</td>';
            
            echo '<td>' . $row['qualification'] . '</td>';
            
            echo '<td>' . $row['city'] . '</td>';
            
            echo '<td>' . $row['state'] . '</td>';
            
            echo '<td>' . $row['userid'] . '</td>';
            
            echo '<td><a href="index.php?action=edit">Edit</a></td>';
            
            echo '<td><a href="index.php?action=delete">Delete</a></td>';
            
            echo '<td>' . $row['status'] . '</td>';
            
            
            echo "</tr>";
        }
        
        echo "</table>";
    }
    
}