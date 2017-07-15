
<?php session_start(); 






?>
<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="icon" href="slike/1.png">
        <title>Kamen, škarje, papir, kušlar, Spock</title>
    </head>
    
    <body>
        
        <?php
        
       
            
        
        
        
        // 1=kamen 2=škarje 3=papir 4=kuščar 5=spock
            $r = rand(1,5);
            $player ="";
            if(isset($_POST["player"])) {
                $player = $_POST["player"];
            }  
            $rezultat = "";
            function rps($a, $b) {
                global $rezultat;
                if($a == $b) {
                    echo "Neodločeno";
                    return $rezultat = "neodloceno";
                }
                elseif($a == 1 && $b == 2) {
                    echo "Zmaga! <br> <br> Kamen uniči škarje.";
                    return $rezultat = "zmaga";
                }
                elseif($a == 1 && $b == 3) {
                    echo "Poraz! <br> <br> Papir prekrije kamen.";
                    return $rezultat = "poraz";
                }
                elseif($a == 1 && $b == 4) {
                    echo "Zmaga! <br> <br> Kamen ubije kuščarja.";
                    return $rezultat = "zmaga";
                }
                elseif($a == 1 && $b == 5) {
                    echo "Poraz! <br> <br> Spock upepeli kamen.";
                    return $rezultat = "poraz";
                }
                elseif($a == 2 && $b == 1) {
                    echo "Poraz! <br> <br> Kamen uniči škarje.";
                    return $rezultat = "poraz";
                }
                elseif($a == 2 && $b == 3) {
                    echo "Zmaga! <br> <br> Škarje razrežejo papir.";
                    return $rezultat = "zmaga";
                }
                 elseif($a == 2 && $b == 4) {
                    echo "Zmaga! <br> <br> Škarje obglavijo kuščarja.";
                    return $rezultat = "zmaga";
                }
                 elseif($a == 2 && $b == 5) {
                    echo "Poraz! <br> <br> Spock zdrobi škarje.";
                    return $rezultat = "poraz";
                }
                elseif($a == 3 && $b == 1) {
                    echo "Zmaga! <br> <br> Papir prekrije kamen.";
                    return $rezultat = "zmaga";
                }
                elseif($a == 3 && $b == 2) {
                    echo "Poraz! <br> <br> Škarje razrežejo papir.";
                    return $rezultat = "poraz";
                }
                 elseif($a == 3 && $b == 4) {
                    echo "Poraz! <br> <br> Kuščar poje papir.";
                    return $rezultat = "poraz";
                }
                elseif($a == 3 && $b == 5) {
                    echo "Zmaga! <br> <br> Papir ovrže Spocka.";
                    return $rezultat = "zmaga";
                }
                elseif($a == 4 && $b == 1) {
                    echo "Poraz! <br> <br> Kamen ubije kuščarja.";
                    return $rezultat = "poraz";
                }
                elseif($a == 4 && $b == 2) {
                    echo "Poraz! <br> <br> Škarje obglavijo kuščarja.";
                    return $rezultat = "poraz";
                }
                elseif($a == 4 && $b == 3) {
                    echo "Zmaga! <br> <br> Kuščar poje papir.";
                    return $rezultat = "zmaga";
                }
                elseif($a == 4 && $b == 5) {
                    echo "Zmaga! <br> <br> Kuščar zastrupi Spocka.";
                    return $rezultat = "zmaga";
                }
                elseif($a == 5 && $b == 1) {
                    echo "Zmaga! <br> <br> Spock upepeli kamen.";
                    return $rezultat = "zmaga";
                }
                elseif($a == 5 && $b == 2) {
                    echo "Zmaga! <br> <br> Spock zdrobi škarje.";
                    return $rezultat = "zmaga";
                }
                elseif($a == 5 && $b == 3) {
                    echo "Poraz! <br> <br> Papir ovrže Spocka.";
                    return $rezultat = "zmaga";
                }
                elseif($a == 5 && $b == 4) {
                    echo "Poraz! <br> <br> Kuščar zastrupi Spocka.";
                    return $rezultat = "zmaga";
                }
              
            }
        
            function beseda($vrednost) {
                switch($vrednost) {
                    case 1:
                        return "kamen";
                        break;
                    case 2:
                        return "škarje";
                        break;
                    case 3:
                        return "papir";
                        break;
                    case 4:
                        return "kuščar";
                        break;
                    case 5:
                        return "Spock";
                        break;
                }
            }
            
            function zgodovina($a, $b) {        
                if(isset($_POST["player"])) {
                    
                    $prva = beseda($a);
                    $druga = beseda($b);   
                }  
                    /* foreach($_SESSION["zgodovina"] as $value) {
                        echo "<br>";
                        echo "$value";
                    }
                    */ 
                if(isset($_POST["player"])) {
                    array_push($_SESSION["zgodovina"], "$prva - $druga");
                }
                $length = count($_SESSION["zgodovina"]);
                if($length <= 6) {    
                    for($x = $length - 2; $x >= 0; $x--) {
                        echo "<br>";
                        echo $x+1 ." ";
                        echo $_SESSION["zgodovina"][$x];
                    }      
                }
                elseif($length > 6) {
                    for ($x = $length -2; $x > $length - 7; $x--) {
                        echo "<br>";
                        echo $x+1 ." ";
                        echo $_SESSION["zgodovina"][$x];
                    }
                }
                
            }
            
        
        
        ?>
        <div class="container">
            <div class="row header">
                <h1>KAMEN, ŠKARJE, PAPIR, KUŠČAR, SPOCK</h1>
            </div>
            <div class="row main">
                
                <div class="col-md-3 levi">
                    <form method="post">
                        <input type="radio" name="player" value="1" id="playerRockRadio" <?php if($player == 1) { echo "checked"; } ?> > <img src="slike/1.png" id="playerRock"><br>
                        <input type="radio" name="player" value="2" id="playerScissorsRadio" <?php if($player == 2) { echo "checked"; } ?> > <img src="slike/2.png" id="playerScissors"><br>
                        <input type="radio" name="player" value="3" id="playerPaperRadio" <?php if($player == 3) { echo "checked"; } ?> > <img src="slike/3.png" id="playerPaper"><br>
                        <input type="radio" name="player" value="4" id="playerLizardRadio" <?php if($player == 4) { echo "checked"; } ?> > <img src="slike/4.png" id="playerLizard"><br>
                        <input type="radio" name="player" value="5" id="playerSpockRadio" <?php if($player == 5) { echo "checked"; } ?> > <img src="slike/5.png" id="playerSpock"><br>
                        <input type="submit" value="Igraj!" id="poslji">
                    </form>
                </div>
                
                <div class="col-md-6 sredinski">
                    <div class="rezultat">
                    <?php
                        if(isset($_POST["player"])) {
                            echo "<img src=slike/$player.png>";
                            
                            echo "PROTI";
                            
                            echo "<img src=slike/$r.png>";
                           ?> 
                    </div>     
                    <div class="sporocilo">    
                    <?php
                            echo "<br>";
                            echo "<h2>";
                            rps($player, $r);
                            echo "</h2>";
                        } elseif (!isset($_POST["player"])) {
                            echo "<br>";
                            echo "<h2>";
                            echo "Prosim, izberi kamen, škarje, papir, kuščarja ali Spocka.";
                            echo "</h2>";
                        }
                        

                    ?>
                    </div>
                    
                </div>
                
                <div class="col-md-3 desni">
                    <form>
                       <img src="slike/1.png"> <input type="radio" name="player" value="1" <?php if(isset($_POST["player"]) && $r == 1) { echo "checked"; } ?> disabled > <br>
                       <img src="slike/2.png"> <input type="radio" name="player" value="2" <?php if(isset($_POST["player"]) && $r == 2) { echo "checked"; } ?> disabled > <br>
                       <img src="slike/3.png"> <input type="radio" name="player" value="3" <?php if(isset($_POST["player"]) && $r == 3) { echo "checked"; } ?> disabled > <br>
                       <img src="slike/4.png"> <input type="radio" name="player" value="4" <?php if(isset($_POST["player"]) && $r == 4) { echo "checked"; } ?> disabled > <br>
                       <img src="slike/5.png"> <input type="radio" name="player" value="5" <?php if(isset($_POST["player"]) && $r == 5) { echo "checked"; } ?> disabled > <br>
                    </form>
                </div>
            </div>
            
            <div class="row bottom">
                <div class="col-md-3 statistika">
            <?php
                if(isset($_POST["ponastavi"])) {
                    unset($_SESSION["neodloceno"]);
                    unset($_SESSION["porazi"]);
                    unset($_SESSION["zmage"]);
                    unset($_SESSION["igre"]);
                    unset($_SESSION["zgodovina"]);
                }
                
                if(!isset($_SESSION["neodloceno"])) {
                $_SESSION["neodloceno"] = 0;
                }

                if(!isset($_SESSION["porazi"])) {
                    $_SESSION["porazi"] = 0;
                }

                if(!isset($_SESSION["igre"])) {
                    $_SESSION["igre"] = 0;
                }

                if(!isset($_SESSION["zmage"])) {
                    $_SESSION["zmage"] = 0;
                }
                
                if (isset($_POST["player"])) {
                ++$_SESSION["igre"];
                }
                
                if ($rezultat == "neodloceno") {
                    ++$_SESSION["neodloceno"];
                }
                
                if ($rezultat == "poraz") {
                    ++$_SESSION["porazi"];
                }
                
                
                if ($rezultat == "zmaga") {
                    ++$_SESSION["zmage"];
                }
                
                 if(!isset($_SESSION["zgodovina"])) {
                 $_SESSION["zgodovina"] = array();
                 }
                
                echo "<br>";
                echo "Št. iger ";
                echo $_SESSION["igre"];
                echo "<br>Zmage ";
                echo $_SESSION["zmage"];
                echo "<br>Porazi ";
                echo $_SESSION["porazi"];
                echo "<br>Neodločeno ";
                echo $_SESSION["neodloceno"];
                
               
                
                
                
            ?>
                <form method="post">
                    <input type="submit" value="Ponastavi" name="ponastavi">
                </form>
            </div>
            <div class="col-md-3 arhiv">
                <?php
                    
                    echo "Arhiv";
                    zgodovina ($player, $r);
                ?>
                </div>
            </div>
       
           
        </div>
        
        <script type="text/javascript">
        
        document.getElementById("playerRock").onclick = function() {
            
            document.getElementById("playerRockRadio").checked = true;
            
        }
        
        document.getElementById("playerScissors").onclick = function() {
            
            document.getElementById("playerScissorsRadio").checked = true;
            
        }
        
        document.getElementById("playerPaper").onclick = function() {
            
            document.getElementById("playerPaperRadio").checked = true;
            
        }
        
        document.getElementById("playerLizard").onclick = function() {
            
            document.getElementById("playerLizardRadio").checked = true;
            
        }
        
        document.getElementById("playerSpock").onclick = function() {
            
            document.getElementById("playerSpockRadio").checked = true;
            
        }
        
        </script>
        
    </body>