<?php

//Establishes a connection with my database named financcialdb.
$conn = mysqli_connect('localhost', 'root', 'password123', "financialdb");

//Check to see if the keywords were provided.
if(isset($_GET['k']) && $_GET['k'] != '') {

    //Save the keywords from the url.
    $k = trim($_GET['k']);

    //Create a base query and words string.
    $queryString = "SELECT * FROM company WHERE ";
    $displayWords = "";

    //Seperate each of the keywords.
    $keywords = explode(' ', $k);
    foreach($keywords as $word){
        $queryString .= "keywords LIKE '%".$word."%' OR ";
        $displayWords .= $word." ";
    }
    $queryString = substr($queryString, 0, strlen($queryString) - 3); //This cuts out the OR at the end.

    $query = mysqli_query($conn, $queryString);
    $result_count = mysqli_num_rows($query);

    //Check to see if any results were returned.
    if($result_count > 0) {

        //Display search result count to user.
        echo '<div class="right"><b><u>'.$result_count.'</u></b> results found</div>';
        echo 'Your search for <i>'.$displayWords.'</i><hr />';
        
        echo '<table class="search">';

        //Display all the search results to user.
        while($row = mysqli_fetch_assoc($query)) {
            echo '<tr>
                <td><a href="' . 'companyFinancialStatements' . '.php?id=' . $row['id'] .'">' . $row['name'] .'</td>
            </tr>';
        }

        echo '</table>';
    }
    else {
        echo 'No results found. Please search another company name.';
    }
}
else {
    echo '';
}


?>
