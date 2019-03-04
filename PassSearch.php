<?php

//$name = $_POST['PassSearch'];
require 'system/Connection.php';
$conn = Connect();

//$sql = "SELECT * FROM advertistment WHERE name1 like '" . $name . "%'";
if (!isset($_POST['em'])) {
    $query = "select * from advertistment where ";

    if ($_POST['age'] != 'Age') {
        // $query .= " dob ='" . $_POST['age'] . "' and ";
        $query .= " (YEAR(NOW()) - YEAR(`dob`)) BETWEEN '" . $_POST['age'] . "' and ";
    }


    if ($_POST['job'] != 'Job') {
        $query .= " job ='" . $_POST['job'] . "' and ";
    }


    if ($_POST['religion'] != 'Religion') {
        $query .= " religion ='" . $_POST['religion'] . "' and ";
    }


    if ($_POST['sex'] != 'Gender') {
        $query .= " gender ='" . $_POST['sex'] . "' and ";
    }

    if ($_POST['Nationality'] != 'Nationality') {
        $query .= " language ='" . $_POST['Nationality'] . "'";
    }

//
//if (isset($_POST['religion'])) {
//    $query .= " age =" . $_POST['age'];
//}


    $sql = $query;
    //echo $query;


    $str = $query;
    $words = explode(" and ", $str);
    array_splice($words, -1);

    $q = implode(" ", $words);


    $result = mysqli_query($conn, $q);


    if (!empty($_POST['age']) || !empty($_POST['job']) || !empty($_POST['religion']) || !empty($_POST['sex']) || !empty($_POST['Nationality'])) {
        if (!empty($result)) {
            echo "<div align='center' class='w3-light-gray'><h3>MATCHING PARTNERS</h3></br>";

            echo '<table>';
            while ($row = mysqli_fetch_array($result)) {
                echo '<tr onclick="window.location=viewProfile.php?id=' . @$row['username'] . ';" style="background-color: white;box-shadow: rgba(0, 0, 0, 0.15) 0px 1px 2px;border-top: 1px solid #d4ded9;border-bottom: 1px solid #d4ded9;padding: 5px;" onmouseout="this.style.backgroundColor=\'white\'" onmouseover="this.style.backgroundColor=\'rgb(240, 240, 240)\';this.style.border=\'#999\' style=\'cursor: pointer;  background-color: white; box-shadow: rgba(0, 0, 0, 0.15) 0px 1px 2px; text-align: center; font-size: 16px; border: medium none rgb(153, 153, 153);">';

                $path = 'profiles/' . $row['username'].'.png';
                $error = 'this.src="img/intro.jpg"';
                echo "<a href=viewProfile.php?id=" . $row['username'] . ">";
                echo "<td width='500px' style=border-right: 1px solid rgba(230,167,86,.6);><img src='" . $path . "' onerror='" . $error . "'    style='max-width: 162px;' class='rounded-circle align-middle'></td>";
                echo '<td width="300px" style="border-right: 1px solid rgba(230,167,86,.6);">' . "<h2>" . $row['name1'] . ' ' . $row['name2'] . "</h2><br>" . ' </td>';
                echo '<td width="200px" >' . "<h4><i>Job:" . $row['job'] . "</i></h4></br>" . ' </td>';
                echo '<td width="100px" >' . "<a href=viewProfile.php?id=" . $row['username'] . ">View</a>" . ' </td>';
                echo "</a>";
                echo "</tr>";
            }
            echo '</table>';
        } else {
            echo '     <div class="container-fluid text-center">    
        <div class="row content">
            <div class="col-sm-2 sidenav">

            </div>
            
					<h3>Error !</h3>
					<p>Can not find a similar word!
					</p>
					<br>
					</div>
				</div>
			</div>';
        }
    } else {
        echo ' <div class="col-md-12">
				<div align="center">
					
					<h3 class="text-center">Error !</h3>
					<p class="text-center">Please Enter the Details!
					<br>
					 
					</p>
					<br>
					
				</div>
			</div>
';
    }
} else {
    $query = "select * from advertistment ";


    $sql = $query;
//echo $query;
    $result = mysqli_query($conn, $sql);

    echo '<table>';

    while ($row = mysqli_fetch_array($result)) {

        echo '<tr class=\'spaceUnder\' onclick="window.location=viewProfile.php?id=' . $row['username'] . ';" style="margin-bottom: 7px;
width: 100%;
margin-right: 316px;display: block;background-color: white;box-shadow: rgba(0, 0, 0, 0.15) 0px 1px 2px;" onmouseout="this.style.backgroundColor=\'white\'" onmouseover="this.style.backgroundColor=\'rgb(240, 240, 240)\';this.style.border=\'#999\' style=\'cursor: pointer;  background-color: white; box-shadow: rgba(0, 0, 0, 0.15) 0px 1px 2px; text-align: center; font-size: 16px; border: medium none rgb(153, 153, 153);">';

        echo "<a href=viewProfile.php?id=" . $row['username'] . ">";
        echo '<td width="500px" style="border-right: 1px solid rgba(230,167,86,.6);"><img src="profiles/' . $row['username'] . '.png" style="max-width: 162px;" class="rounded-circle align-middle" onerror="this.src=\'profiles/no.png\'" ></td>';
        echo '<td width="300px" style="border-right: 1px solid rgba(230,167,86,.6);">' . "<h2>" . $row['name1'] . ' ' . $row['name2'] . "</h2><br>" . ' </td>';
        echo '<td width="200px" >' . "<h4><i>Job:" . $row['job'] . "</i></h4></br>" . ' </td>';
        echo '<td width="100px" >' . "<a href=viewProfile.php?id=" . $row['username'] . ">View</a>" . ' </td>';
        echo "</a><br>";
        echo "</tr>";
    }

    echo '</table>';
}
?>
