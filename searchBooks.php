<?php
	$query = "SELECT DISTINCT BGenre FROM `book genre`";
    $result = mysqli_query($conn,$query);

    if ($result->num_rows > 0) {
    // output data of each row
    	echo '<form action="search.php" method="post">';

        echo '<table><th>';
        while($row = $result->fetch_assoc()) {  
            echo '<tr><td><input type="checkbox" name="genre_list[]" value="'.$row["BGenre"]. '""><label> &nbsp'.$row["BGenre"].'</label> </td></tr>';
        }
        echo '</table><br><input type="submit" name="submit" value="Submit"/> </form>';
    } else {
        echo "No Books Found";
    }

  
    if(isset($_POST['submit'])){
		if(!empty($_POST['genre_list'])){
			$num = 0;
			$string = "";
			foreach($_POST['genre_list'] as $selected){
				if (count($_POST['genre_list']) - 1 == $num ){
					$string .= " bg.BGenre = " ."'" .$selected."'";
				}else{
					$string .= " bg.BGenre = " . "'" .$selected ."' OR ";
					$num++;
				}
			}
			$query2 = "SELECT bn.BName, a.AName, bn.BID FROM `book name` bn, `book genre` bg, `authors` a, `writes` w WHERE bn.BISBN = bg.BISBN AND w.BID = bn.BID AND a.AID = w.AID AND (" . $string.")";
			$result2 = mysqli_query($conn,$query2);

		    if ($result2->num_rows > 0) {
		    // output data of each row
		    	echo '<form action="buy.php" method="post">';
		    	echo '<table border= "1">';
				echo '<tr>
				<th>Book Name</th>
				<th>Author</th>
				<th>Purchase</th>
				</tr>';
		        while($row2 = $result2->fetch_assoc()) {  
		            echo "<tr><th>". $row2["BName"]. "</th><th>". $row2["AName"].
		            "</th><th><button type='submit' name='buy' value='". $row2["BID"]."' >Buy</button></tr>";
		        }
		        echo "</form>";
		    } else {
		        echo "No Books Found ";
		    }

		}
		
	}
?>