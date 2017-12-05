<?php
$results ="";
require_once("dbconnect.php");
$dropdown=new DBController();
$query="SELECT * FROM countries";
$results=$dropdown->runQuery($query);
?>






<html>
<head>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
   
   populateSelect();
   $(function() {

      $('#cat').change(function(){
        populateSelect();
    });
    
});

   function populateSelect(){
   	 cat=$('#cat').val();
    $('#item').html('');
    
    if(cat=='india'){

    	<?php
    	require_once("dbconnect.php");
        $dropdown=new DBController();
        $query="SELECT * FROM states WHERE countryid=1";
        $resultstate1=$dropdown->runQuery($query);

        ?>
         resultstate1.forEach(function(t) { 
            $('#item').append('<option>'+t+'</option>');
        });
    }

    if(cat=='America'){

    	<?php
    	require_once("dbconnect.php");
        $dropdown=new DBController();
        $query="SELECT * FROM states WHERE countryid=2";
        $resultstate2=$dropdown->runQuery($query);
        ?>
         resultstate2.forEach(function(t) { 
            $('#item').append('<option>'+t+'</option>');
        });
    }
}
</script>
</head>

<body>
<script type="text/javascript"></script>
<label>Country:</label>
<select id="cat" name="countryoptions">
<?php
foreach($results as $country){
	?>

	<option value="<?php echo $country['countryname'];?>"
     <?php
     $a=$_POST['countryoptions'];
     if(!empty($a)){
     	if(in_array($country['countryname'],$a)){
     		echo "selected=selected";
     	}
     }
     ?>
     ><?php echo $country['countryname'];?></option>
     <?php
 }
 ?>
</select><br><br>

<label>State:</label>


<select id="item">

	
  
</select>

</body>
</html>