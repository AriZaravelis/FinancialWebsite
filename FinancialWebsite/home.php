<!DOCTYPE html>
<html>
	
	<head>
		<title>Financial Website - Home</title>
		<link href="images/logo.png" type="image" rel="shortcut icon" />
		<link href="navBarStyle.css" type="text/css" rel="stylesheet" />
		<link href="homeStyle.css" type="text/css" rel="stylesheet" />
		
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
        <div class="homeBody">
			<div class="heading">
            	<h1> This website delivers essential information so you can make decisions with conviction! </h1>
			</div>
			<div class="content">
				<p> 
					This website is designed for the average person that is interested in viewing the most important details in a company's financial
					statements. When building the website, I decided to build my own database using some relavant data from the SEC, S&P Global Market 
					Intelligence, and much more. It is my hope that this website will serve as an archive for historical financial statements of some of 
					the bigest companies in the world. You, as the user, will be able to look at income statements, balance sheets, and cash flow statements 
					from the past 5 years.
				</p>

                <img src = "images/decision.jpg"/>
			</div>
		</div>
    </body>
</html>