<?php
include("config.php");
	$query = $_POST['find']; 
	
	
	$min_length = 3;
	
	
	if(strlen($query) >= $min_length){ 
		
		$query = htmlspecialchars($query); 
		// changes characters used in html to their equivalents, for example: < to &gt;
		
		// $query = mysql_real_escape_string($query);
		// makes sure nobody uses SQL injection

		$query1="SELECT * FROM contact
			WHERE (`name` LIKE '%".$query."%') OR (`text` LIKE '%".$query."%')";


		$raw_results = mysqli_query($con,$query1);
			
		// * means that it selects all fields, you can also write: `id`, `title`, `text`
		
		
		// '%$query%' is what we're looking for, % means anything, for example if $query is Hello
		// it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
		// or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
		
		if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
			
            echo "<table border=1 color='blue'>";

            echo "<tr><td>";
                echo "ID";
                echo "</td><td>";
                echo "NAME";
                echo "</td><td>";
                echo "PHONE";
                echo "</td><td>";
                echo "EMAIL";
                echo "</td><td>";
                echo "TEXT";
                echo "</td></tr>";

			while($results = mysqli_fetch_array($raw_results)){
			// $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
			
				//echo "<p><h3>".$results['title']."</h3>".$results['text']."</p>";
				// posts results gotten from database(title and text) you can also show id ($results['id'])

                
                
                
                    echo "<tr><td>";
                    echo "$results[0]";
                    echo "</td><td>";
                    echo "$results[1]";
                    echo "</td><td>";
                    echo "$results[2]";
                    echo "</td><td>";
                    echo "$results[3]";
                    echo "</td><td>";
                    echo "$results[4]";
                    echo "</td><tr>";



			}
            echo"</table>";
			
		}
		else{ // if there is no matching rows do following
			echo "No results";
		}
		
	}
	else{ // if query length is less than minimum
		echo "Minimum length is ".$min_length;
	}


?>
