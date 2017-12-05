<?php

require_once("dbconnect.php");
$dropdown=new DBController();
if(!empty($_POST['countryid'])){
    
    $query="SELECT * FROM states WHERE countryid = '"  .$_POST["countryid"]. "' ";
    $results=$dropdown->runQuery($query);

    ?>

    <option value="">Select state</option>

    <?php

    foreach($results as $state){

     ?>

     <option value="<?php echo $state["stateid"];?>"><?php echo $state["statename"];?></option>

     <?php
 }


}
?>