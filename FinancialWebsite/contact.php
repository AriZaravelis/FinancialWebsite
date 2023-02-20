<!DOCTYPE html>
    <head>
        <title>Financial Website - Contact Me</title>
		<link href="images/logo.png" type="image" rel="shortcut icon" />
		<link href="navBarStyle.css" type="text/css" rel="stylesheet" />
		<link href="contactStyle.css" type="text/css" rel="stylesheet" />
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

    
    <body>
        <h2>Contact Form</h2>

        <div class="container">
            <form action="contactSubmitted.php" method="post">
                Feedback
                <textarea id="comment" name="comment" placeholder="Please enter some feedback regarding this site. It would be much appreciated." style="height:400px"></textarea>
                <input type="submit" value="Submit">
            </form>
        </div>
       
    </body>


</html>