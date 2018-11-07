<?php
	$query = "SELECT DISTINCT BGenre FROM `book genre`";
    $result = mysqli_query($conn,$query);

    if ($result) {
    // output data of each row
    	echo '<form action="search.php" method="post">';

        while($row = $result->fetch_assoc()) {  
            echo '<input type="checkbox" name="genre_list[]" value='.$row["BGenre"]. '><label> &nbsp'.$row["BGenre"].'</label> ';
        }
        echo '<br><input type="submit" name="submit" value="Submit"/> </form>';
    } else {
        echo "No Books Found";
    }


?>