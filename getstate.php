<?php

require_once("dbconnect.php");
$dropdown=new DBController();
//if(!empty($_POST["countryid"])){
    
    $query="SELECT * FROM states WHERE countryid=1";
    $results=$dropdown->runQuery($query);
    
    ?>

    <option value="">Select state</option>

    <?php

    foreach($results as $state) {
echo $state['state_name'];

     ?>

     <option value="<?php echo $state["stateid"];?>"><?php echo $state["statename"];?></option>

     <?php
 }



?>