<?php
<<<<<<< HEAD
include "validateLogin.php";
?>
<html>
    <head>
        <title>Login</title>
        <?php
        include "mainHeader.php";
        ?>
        <title>Welcome</title>
    </head>
    <body>
        <div class="container">
            <?php
            include "connection.php";
            include "printTable.php";
            ?>
        </div>
        <footer style="padding-top:50px">
            <section class="copyright-w3-agileits">
                <?php
                include "footer.php";
                ?>
            </section>
        </footer>
    </body>
</html>
=======
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
		    	echo $query2;
		    	echo '<form action="search.php" method="post">';
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
		        echo "</table></form>";

		    } else {
		        echo "No Books Found ";
		    }

		}
		
	}

	if(isset($_POST['buy'])){
		$UEmail = $_SESSION["UEmail"];
		$BID = $_POST['buy'];
		$query = "INSERT INTO buys VALUES ((SELECT UID FROM `user login` WHERE UEmail = '".$UEmail."'),".$BID.")";
		mysqli_query($conn,$query);

		$query2 ="SELECT BName FROM `book name` WHERE BID =".$BID;
		$result = mysqli_query($conn,$query2);
		$string = $result->fetch_assoc();
		echo "Thank you for buying ".$string["BName"];
	}
?>
>>>>>>> 40f1a03107466022cb1e33ef3bed6289d4e8c93b
