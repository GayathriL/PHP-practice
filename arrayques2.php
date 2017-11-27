<html>

<body>

	<?php
      
      $age=array("Gayathri"=>"22","Preeti"=>"21","Poonam"=>"22","vaishnavi"=>"23");

      echo "Gayathri is " .$age['Gayathri']. "years old."; 


      echo "<br>";

      echo '<table border="1">';

      echo '<tr><th>Name</th><th>Age</th></tr>';

      for($row=0;$row<count($age);$row++)
      {
        echo '<tr>';
        for($column=0;$column<count($age[$row]);$column++)
        {
          

           echo('<td>' .$age[$row][$column]. '</td>');
        }
        echo '</tr>';
      }

      echo '</table>';


	?>

</body>
</html>



<!-- echo '<table border="1">';
echo '<tr><th>Movies</th><th>Genre</th><th>Director</th></tr>';
foreach( $movies as $movie )
{
    echo '<tr>';
    foreach( $movie as $key )
    {
        echo '<td>'.$key.'</td>';
    }
    echo '</tr>';
}
echo '</table>';
?> -->







<!-- echo "<ul>";
for($r=0;$r<count($marks1);$r++)
{
  echo "<li>";
  foreach($marks1[$r] as $key=>$value)
  {
    echo $key." = ".$value."  ";
  }
  echo "</li>";
  echo "<br><br>";
}
echo "</ul>"; -->