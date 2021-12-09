<!DOCTYPE html>
    <head>
        <title>Financial Website - Home</title>
        <link rel="stylesheet" href="instantSearch.css">
        <link rel="stylesheet" href="style.css">
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="about.php">About Me</a></li>
                </ul>
            </div>
        </div>
    </header>

    
    <body>

        <div class="homeBody">

            <h1> This Website delivers essential information so you can make decisions with conviction! </h1>

            <p> 
                This website is designed for the average person that is interested in viewing the most important details in a company's financial
                statements. When building the website, I decided to build my own database using some relavant data from the SEC, S&P Global Market 
                Intelligence, and much more. It is my hope that this website will serve as an archive for historical financial statements of some of 
                the bigest companies in the world. You, as the user, will be able to look at income statements, balance sheets, and cash flow statements 
                for any desired year. Currently, I am still updating my database, so it's not complete, however, there is still an abundance of 
                information available. I created this webpage for my Software Engineering class where I was tasked with developing a software project using the 
                fundamentals of software engineering activities. These activities were software specification, software design, software development, software 
                validation, and software evolution. Below are my specified activities and phases used for this project:
            </p>

            <ol>
                <li><b>User Functional Requirements</b></li>
                    <p> - A user shall be able to search a company by name in the search bar of the website and be provided with all the available financial statements of that company. </p>
                <li><b>User Non-functional Requirements</b></li>
                    <p> - The website shall be easy to use. </p>
                <li><b>System Functional Requirements</b></li>
                    <p> - When the user uses the search bar and incorrectly types a company’s name, the website shall give the user recommended search results. </p>
                    <p> - Once the user searches for the desired company, the user can choose the year of the financial statements that he/she would like to view. </p>
                    <p> - Once the user chooses the desired year, he/she shall have four options to choose from which are the four financial statements (Income Statement, Statement of Retained Earnings, Balance Sheet, and Cash Flow Statement). </p>
                    <p> - The site shall also analyze these financial statements for the year chosen and give a simple evaluation of that company. </p>
                <li><b>System Non-functional Requirements</b></li>
                    <p> - The text color and size shall be easy to read and not too overbearing. </p>
                    <p> - The overall user interface for the website shall be appealing to the user. </p>
                    <p> - Relevant charts and financial statements shall be big enough to read and easy to understand. </p>
            </ol>

        

            

        </div>


        
        <hr><center>© 2021 Ari Zaravelis. All rights reserved.</center></hr>

        <!-- Open XAMPP, start Apache and then type http://localhost/FinancialWebsite/index.php in web browser. -->
        

    </body>


</html>