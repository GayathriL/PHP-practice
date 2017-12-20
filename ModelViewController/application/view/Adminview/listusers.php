<?php


        echo "<table border='1' cellpadding='10'>";
        echo "<tr><th>Firstname</th> <th>Lastname</th> <th>Email</th> <th>Qualification</th> <th>City</th> <th>State</th> 
        <th>Userid</th>   <th>Edit</th> <th>Delete</th> </tr>";
        
        while ($userdetail = mysqli_fetch_array($results)) {
            
            echo "<tr>";
            
            echo '<td>' . $userdetail['firstname'] . '</td>';
            
            echo '<td>' . $userdetail['lastname'] . '</td>';
            
            echo '<td>' . $userdetail['email'] . '</td>';
            
            echo '<td>' . $userdetail['qualification'] . '</td>';
            
            echo '<td>' . $userdetail['city'] . '</td>';
            
            echo '<td>' . $userdetail['state'] . '</td>';
            
            echo '<td>' . $userdetail['userid'] . '</td>';
            
            echo '<td><a href="index.php?action=edit">Edit</a></td>';
            
            echo '<td><a href="index.php?action=delete">Delete</a></td>';

            if($userdetail['status'] == 1)
            {
            ?>

           

           <form action="index.php?action=status" method="post">
           <input type="hidden" name="disableuser" value="<?php echo $userdetail['userid'];?>">
           <td><input type="submit" name="disablesubmit" value="disable"></td>
         
           <?php
            }
            else
            {
            ?>
            <form action="index.php?action=status" method="post">
            <input type="hidden" name="enableuser" value="<?php echo $userdetail['userid'];?>">
            <td><input type="submit" name="enablesubmit" value="enable"></td>
            
            <?php    
            }
            
            echo "</tr>";
        }
        
        echo "</table>";
        ?>
