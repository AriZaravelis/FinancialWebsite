<!DOCTYPE html>
    <head>
        <title>Financial Website - Contact Me</title>
		<link href="images/logo.png" type="image" rel="shortcut icon" />
		<link href="navBarStyle.css" type="text/css" rel="stylesheet" />
		<link href="contactSubmittedStyle.css" type="text/css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!-- Google material icons that are free to use. -->
    </head>
    
    
    <header>
        <div class="results">
            <div class="resultsContent">
                <form action="" method="GET" name="">
                    <div class="instantSearch">
                        <div class="instantSearchInputContainer"> <!--Holds a container for the input as well as the magnifying glass icon. -->
                            <input class="instantSearchInput" type="text" name="k" placeholder="Search Company" autocomplete="off" spellcheck="false">
                            <i class="material-icons instant-search__icon">search</i> <!--This is the search icon from the Google material icons that are free to use. -->
                        </div>
                    </div>
                </form>
                <?php
                include("searchResults.php");
                ?>
            </div>
        </div>
        
        <div class="topMenu">
            <div class="menuItems">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="contact.php">Contact Me</a></li>
					<li><a href="index.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </header>

    <?php
    $comment = $_POST["comment"];
    
    $db = mysqli_connect("localhost","root","7698frza","financialdb");
    $query = "INSERT INTO comments (comment) VALUES ('$comment')";
    mysqli_query($db, $query);
    ?>

    
    <body>
        <h1>Thank you for your feedback!</h1>
        <img src = "images/confetti.gif"/>
        <img src = "images/confetti.gif"/>
        <img src = "images/confetti.gif"/>
    </body>


</html>