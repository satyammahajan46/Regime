<?php
	$query = "SELECT DISTINCT BGenre FROM `book genre`";
    $result = mysqli_query($conn,$query);

    if ($result->num_rows > 0) {
    // output data of each row
    	echo '<form action="search.php" method="post">';

        while($row = $result->fetch_assoc()) {  
            echo '<input type="checkbox" name="genre_list[]" value='.$row["BGenre"]. '><label> &nbsp'.$row["BGenre"].'</label> ';
        }
        echo '<br><input type="submit" name="submit" value="Submit"/> </form>';
    } else {
        echo "No Books Found";
    }

  
    if(isset($_POST['submit'])){
		if(!empty($_POST['genre_list'])){
			$num = 0;
			$string = "";
			foreach($_POST['genre_list'] as $selected){
				if (count($_POST['genre_list']) - 1 == $num ){
					$string .= " BGenre = " ."'" .$selected."'";
				}else{
					$string .= " BGenre = " . "'" .$selected ."' OR ";
					$num++;
				}
			}
			$query2 = "SELECT BISBN FROM `book genre` WHERE" . $string;
			$result2 = mysqli_query($conn,$query2);

		    if ($result2->num_rows > 0) {
		    // output data of each row
		    	echo '<table align="center" border= "1">';
				echo '<tr>
				<th>BISBN</th>
				</tr>';
		        while($row2 = $result2->fetch_assoc()) {  
		            echo "<tr> <th>". $row2["BISBN"]. "</th> </tr> ";
		        }
		    } else {
		        echo "No Books Found ";
		    }

		}
		
	}


?>