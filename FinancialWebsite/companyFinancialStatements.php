<!DOCTYPE html>
    <head>
        <title>Financial Website</title>
        <link rel="stylesheet" href="./instant-search/css/instant-search.css"> <!-- Link CSS file. -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!-- Google material icons that are free to use. -->
    </head>

    <body>
        <?php
        
        $id = intval($_GET['id']); //Retrieve id from URL and assigns to variable id.
       

        //Establishes a connection with my database named financcialdb.
        $conn = mysqli_connect('localhost', 'root', '7698frza', "financialdb");

        $query = mysqli_query($conn, "SELECT * FROM company WHERE id=$id");
        while($row = mysqli_fetch_array($query)){
            $id = $row['id'];
            $name = $row['name'];
            $description = $row['description'];
            $sector = $row['sector'];
            $industry = $row['industry'];
            $employees = $row['employees'];
            $dateFounded = $row['dateFounded'];
            $address = $row['address'];
            $phoneNum = $row['phoneNum'];
            $website = $row['website'];
 
 
 
 
            echo 'Company: ' . $id . ': ' . $name . '<br />';
            echo 'Description: ' . $description . '<br />';
            echo 'Sector: ' . $sector . '<br />';
            echo 'industry: ' . $industry . '<br />';
            echo 'employees: ' . $employees . '<br />';
            echo 'dateFounded: ' . $dateFounded . '<br />';
            echo 'address: ' . $address . '<br />';
            echo 'phoneNum: ' . $phoneNum . '<br />';
            echo 'website: ' . $website . '<br />';
            echo '<br \> <br \>';
        }


        ?>



    </body>


</html>