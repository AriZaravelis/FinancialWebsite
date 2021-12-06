<!DOCTYPE html>
    <head>
        <title>Financial Website</title>
        <link rel="stylesheet" href="./instant-search/css/instant-search.css"> <!-- Link CSS file. -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!-- Google material icons that are free to use. -->
    </head>

    <body>
        <form action="" method="GET" name="">
            <div id="searchCompanies" class="instant-search">
                <div class="instant-search__input-container"> <!--Holds a container for the input as well as the magnifying glass icon. -->
                    <input class="instant-search__input" type="text" name="k" placeholder="Search Company" autocomplete="off" spellcheck="false">
                    <i class="material-icons instant-search__icon">search</i> <!--This is the search icon from the Google material icons that are free to use. -->
                </div>
            </div>
        </form>


        <?php
        include("db.php");
        ?>



        
        <!-- Open XAMPP, start Apache and then type http://localhost/FinancialWebsite/index.php in web browser. -->
        





    </body>


</html>