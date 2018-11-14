
<?php
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
        $query2 = "SELECT bn.BName, a.AName FROM `book name` bn, `book genre` bg, `authors` a, `writes` w WHERE bn.BISBN = bg.BISBN AND w.BID = bn.BID AND a.AID = w.AID AND (" . $string.")";
        $result2 = mysqli_query($conn,$query2);
        $final = "";
        if ($result2->num_rows > 0) {
            // output data of each row
            $final .= '<table class="table table-bordered table-hover">';
            $final .= '<tr>
				<th>Book Name</th>
				<th>Author</th>
				</tr>';
            while($row2 = $result2->fetch_assoc()) {  
                $final .= "<tr> <td>". $row2["BName"]. "</td><td>". $row2["AName"]. "</td></tr> ";
            }
            $final .= "</table>";
        } else {
            $final .= "No Books Found ";
        }

    }

}
?>

