<?php
include "init.php";
include "connect.php";
include "functions.php";
?>


<!DOCTYPE html>

<html>

    <head>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,700|Slabo+27px' rel='stylesheet' type='text/css'>
        <script src="js/jquery.js"></script>
        <script src ="js/main.js"></script>
        
    </head>
    
    <body>
        
        <div id="landingpage">
                <div class="section">
                    <div class="video_contain">
                        <video autoplay loop poster="polina.jpg" id="bgvid">
                        <source src="vid/vid.mp4" type="video/mp4">
                        </video>
                        
                        
                        <div id='aankomende-matches'>
                            <h1 id="aankomende-matches-h1">aankomende matches</h1>
                            <div class ='matchblock' id="match1">
                                <h2 class = 'match-datum'>wo, 19 juni</h2>
                                <div class='matches-team border'> <img src="img/vitesse-logo.png"></div>
                                <div class='matches-team'> <img src="img/teams/feyenoord.png" ></div>
                            </div>
                            
                            <div class ='matchblock' id="match1">
                                <h2 class = 'match-datum'>wo, 19 juni</h2>
                                <div class='matches-team border'> <img src="img/vitesse-logo.png"></div>
                                <div class='matches-team'> <img src="img/vitesse-logo.png" ></div>
                            </div>
                            
                            <div class ='matchblock' id="match1">
                                <h2 class = 'match-datum'>wo, 19 juni</h2>
                                <div class='matches-team border'> <img src="img/vitesse-logo.png"></div>
                                <div class='matches-team'> <img src="img/vitesse-logo.png" ></div>
                            </div>
                            
                            <div class ='matchblock' id="match1">
                                <h2 class = 'match-datum'>wo, 19 juni</h2>
                                <div class='matches-team border'> <img src="img/vitesse-logo.png"></div>
                                <div class='matches-team'> <img src="img/vitesse-logo.png" ></div>
                            </div>
                            
                             <div class ='matchblock' id="match1">
                                <h2 class = 'match-datum'>wo, 19 juni</h2>
                                <div class='matches-team border'> <img src="img/vitesse-logo.png"></div>
                                <div class='matches-team'> <img src="img/vitesse-logo.png" ></div>
                            </div>
                            
                            
                        </div>
                        
                        
                        <div id='recente-matches'>
                            <h1 id="recente-matches-h1">Recente<br> matches</h1>
                            <div class ='matchblock' id="match1">
                                <h2 class = 'match-datum'>wo, 19 juni</h2>
                                <div class='matches-team border'> <img src="img/vitesse-logo.png"></div>
                                <div class='matches-team'> <img src="img/vitesse-logo.png" ></div>
                            </div>
                            
                            <div class ='matchblock' id="match1">
                                <h2 class = 'match-datum'>wo, 19 juni</h2>
                                <div class='matches-team border'> <img src="img/vitesse-logo.png"></div>
                                <div class='matches-team'> <img src="img/vitesse-logo.png" ></div>
                            </div>
                            
                            <div class ='matchblock' id="match1">
                                <h2 class = 'match-datum'>wo, 19 juni</h2>
                                <div class='matches-team border'> <img src="img/vitesse-logo.png"></div>
                                <div class='matches-team'> <img src="img/vitesse-logo.png" ></div>
                            </div>
                            
                            <div class ='matchblock' id="match1">
                                <h2 class = 'match-datum'>wo, 19 juni</h2>
                                <div class='matches-team border'> <img src="img/vitesse-logo.png"></div>
                                <div class='matches-team'> <img src="img/vitesse-logo.png" ></div>
                            </div>
                            
                             <div class ='matchblock' id="match1">
                                <h2 class = 'match-datum'>wo, 19 juni</h2>
                                <div class='matches-team border'> <img src="img/vitesse-logo.png"></div>
                                <div class='matches-team'> <img src="img/vitesse-logo.png" ></div>
                            </div>
                            
                            
                        </div>
                        
                    </div>
                </div>
            <div id='scrollknop-container' ><img id='scrollknop' src='img/down.png'></div>
        </div>
        
            
        <div id="logo"></div>
        
        <nav>
            <ul id="nav-ul">
                <li>home</li>
                <li>wedstrijden</li>
                <li>over Vitesse</li>
                <li>inloggen</li>
            </ul>
        </nav>
        <img src="img/vitesse-logo.png" id= 'nav-img' alt="logo">

        
        <div id ="artikel-container">
                <h1 class="container-divider">Recent nieuws</h1>
            <div class="artikel">
                <h1>Vitesse wint alweer</h1>
                <img class="artikel-image" src="img/aidstest+.png">
            
                <p>
                Henk Fraser is officieel de nieuwe trainer van Vitesse. Dat bevestigt de voetbalclub uit Arnhem. De oud-international komt over van ADO Den Haag en treedt voor twee jaar in dienst bij Vitesse. Maandagmiddag zal Fraser gepresenteerd worden in Arnhem waar hij de opvolger wordt van Rob Maas, die aan het einde van het seizoen na het mislopen van de nacompetitie opstapte.Tweede trainer van ADO<br><br>Onder leiding van Fraser eindigde ADO afgelopen seizoenen als negende, dertiende en elfde in de competitie. Het is de tweede keer dat Vitesse een trainer wegkaapt bij ADO Den Haag. In 2011 peuterden de Arnhemmers John van den Brom los in Den Haag.
                </p>
            
            </div>
            
             <div class="artikel">
                <h1>Vitesse wint alweer</h1>
                <img class="artikel-image" src="img/aidstest+.png">
            
                <p>
                Henk Fraser is officieel de nieuwe trainer van Vitesse. Dat bevestigt de voetbalclub uit Arnhem. De oud-international komt over van ADO Den Haag en treedt voor twee jaar in dienst bij Vitesse. Maandagmiddag zal Fraser gepresenteerd worden in Arnhem waar hij de opvolger wordt van Rob Maas, die aan het einde van het seizoen na het mislopen van de nacompetitie opstapte.Tweede trainer van ADO<br><br>Onder leiding van Fraser eindigde ADO afgelopen seizoenen als negende, dertiende en elfde in de competitie. Het is de tweede keer dat Vitesse een trainer wegkaapt bij ADO Den Haag. In 2011 peuterden de Arnhemmers John van den Brom los in Den Haag.
                </p>
            
            </div>
            
             <div class="artikel">
                <h1>Vitesse wint alweer</h1>
                <img class="artikel-image" src="img/aidstest+.png">
            
                <p>
                Henk Fraser is officieel de nieuwe trainer van Vitesse. Dat bevestigt de voetbalclub uit Arnhem. De oud-international komt over van ADO Den Haag en treedt voor twee jaar in dienst bij Vitesse. Maandagmiddag zal Fraser gepresenteerd worden in Arnhem waar hij de opvolger wordt van Rob Maas, die aan het einde van het seizoen na het mislopen van de nacompetitie opstapte.Tweede trainer van ADO<br><br>Onder leiding van Fraser eindigde ADO afgelopen seizoenen als negende, dertiende en elfde in de competitie. Het is de tweede keer dat Vitesse een trainer wegkaapt bij ADO Den Haag. In 2011 peuterden de Arnhemmers John van den Brom los in Den Haag.
                </p>
            
            </div>
            
             <div class="artikel">
                <h1>Vitesse wint alweer</h1>
                <img class="artikel-image" src="img/aidstest+.png">
            
                <p>
                Henk Fraser is officieel de nieuwe trainer van Vitesse. Dat bevestigt de voetbalclub uit Arnhem. De oud-international komt over van ADO Den Haag en treedt voor twee jaar in dienst bij Vitesse. Maandagmiddag zal Fraser gepresenteerd worden in Arnhem waar hij de opvolger wordt van Rob Maas, die aan het einde van het seizoen na het mislopen van de nacompetitie opstapte.Tweede trainer van ADO<br><br>Onder leiding van Fraser eindigde ADO afgelopen seizoenen als negende, dertiende en elfde in de competitie. Het is de tweede keer dat Vitesse een trainer wegkaapt bij ADO Den Haag. In 2011 peuterden de Arnhemmers John van den Brom los in Den Haag.
                </p>
            
            </div>
        
           
            
        </div>
        
        </body>
    
    
    <footer>
    </footer>

</html>