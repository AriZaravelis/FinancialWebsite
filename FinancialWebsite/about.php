<!DOCTYPE html>
    <head>
        <title>Financial Website - About Us</title>
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
        <div class="aboutBody">
            <center><h1>My Resume</h1></center>
            
            <div class="resume">
            
                <hr>If you are a hiring manager I would request you to kindly review my Resume and see if my profile is a fit for the position you are currently looking for. You can also download and send my resume to others if you know someone who might have a challenging role for me.</hr>
                <p><a href="Resume.pdf" target="_blank"><img src="Images/downloadResume.png" alt="downloadResume" class="downloadResume"></a></p>
                
                <hr></hr>
                
                <h2>Education</h2>
                <div class="education">
                    <h5><em> High School Diploma</em></h5>
                    <p>Pelham Memorial High School - Pelham, NY</p>
                    <p> Graduated in 2018 (GPA: 3.7)</p>
                    
                    <br></br>
                    
                    <h5><em>Bachelor of Science in Computer Science</em></h5>
                    <p>Manhattan College - Riverdale, NY</p>
                    <p>Expected to Graduate in 2022</p>
                </div>
                
                <br></br>
                <hr></hr>
                
                <h2>Hobbies and Interests</h2>
                <div class="hobbies">
                
                    <div class="hobbyChess">
                        <h5><center>Chess</center></h5>
                        <center><img src="Images/hobbyChess.jpg" alt="hobbyChessImage" class="hobbyChessImage"></center>
                    </div>
                    
                    <div class="hobbySoccer">
                        <h5><center>Soccer</center></h5>
                        <center><img src="Images/hobbySoccer.webp" alt="hobbySoccerImage" class="hobbySoccerImage"></center>
                    </div>
                    
                    <div class="hobbyPhilosophy">
                        <h5><center>Philosophy</center></h5>
                        <center><img src="Images/hobbyPhilosophy.webp" alt="hobbyPhilosophyImage" class="hobbyPhilosophyImage"></center>
                    </div>
                    
                    <div class="hobbyMusic">
                        <h5><center>Music</center></h5>
                        <center><img src="Images/hobbyMusic.jpg" alt="hobbyMusicImage" class="hobbyMusicImage"></center>
                    </div>
                    
                    <div class="hobbyProgramming">
                        <h5><center>Programming</center></h5>
                        <center><img src="Images/hobbyProgramming.jpg" alt="hobbyProgrammingImage" class="hobbyProgrammingImage"></center>
                    </div>
                    
                </div>
                
                <br></br>
                <hr></hr>
                
                <h2>Technical Skills</h2>
                <p>Computer: C, C++, Java, Python, HTML, CSS, JavaScript, MySQL</p>
                <p>Languages: English native language, Fluent in Albanian, Basic knowledge of Spanish</p>
            
            
            </div>
        </div>
        
        
        <hr><center>© 2021 Ari Zaravelis. All rights reserved.</center></hr>
        

    </body>


</html>