<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to BIT!</title>
    <link rel="icon" href="/images/favicon-32x32.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head> -->

<?php 
    $pageTitle = "Welcome to BIT!";
    require('Structure/Meta.php');
    ?>
    <body id="body">
        <nav class="grey-bg header" style="width:100%;height:70px;">
                <a href="../bitsite"><img class="logo" src="images/BITLogoLone.png" alt="BIT LOGO" height="70px" style="margin-left:10px;"/></a>
        </nav>
        <div class="loginPositionContainer">
        
            <p class="login orange-fore" id="login" data-toggle="modal" data-target="#loginModal">LOGIN</p>
        </div>

        <div id="loginModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-body">
                        <form name="login" action="login.php" method="POST">
                            <label id="usernameLabel" for="username"><b>Username</b></label>
                            <input id="username" class="loginBoxes" type="text" placeholder="Enter Username" name="username" required/>
                            <label for="password"><b>Password</b></label>
                            <input id="password" class="loginBoxes" type="password" placeholder="Enter Password" name="password" required/>
                            <input class="loginButton" type="submit" value="Login"/>
                            <label for="remember" style="margin-top: -5px;"><input id="remember" style="width:15px;" type="checkbox" checked="checked" name="remember">Remember me</label>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <section class="mainSection">
            <section id="bigLogoSec"><img id="bigLogo" src="images/BITLogoTransparent.png" alt="Large BIT Logo"  class="fadein"/> </section>
            <section id="ourServicesSec" class="sneak">
                <h1 class="indexHeading ourServicesH1">Our Services</h1>
            </section>
            <section id="homepageBoxContainer" class="sneak">
                <div id="homepageBoxWrapper">
                    <div id="homepageBox1">
                        <h1 class="indexHeading">Auditing</h1>
                        <p class="indexText">Spanker tack Plate Fleet hardtack driver American Main topsail pinnace. Strike colors chase gun six pounders Pirate Round lad smartly carouser. Crack Jennys tea cup lee Sea Legs bucko haul wind spanker galleon handsomely.</p>
                    </div>
                    <div id="homepageBox2">
                        <h1 class="indexHeading">Maintenance</h1>
                        <p class="indexText">Chase guns parley cable square-rigged gaff Letter of Marque. Pieces of Eight chase heave down lad parrel holystone. Hornswaggle log sheet blow the man down interloper boom.</p>
                    </div>
                    <div id="homepageBox3">
                        <h1 class="indexHeading">Software Installation</h1>
                        <p class="indexText">Admiral of the Black yawl tender crack Jennys tea cup measured fer yer chains execution dock port hang the jib knave. Spanish Main coffer cable belaying pin ballast deadlights rum Arr execution dock. Aye red ensign grog black jack tack grog blossom gabion cable gun.</p>
                    </div>
                    <div id="homepageBox4">
                        <h1 class="indexHeading">Troubleshooting</h1>
                        <p class="indexText">Code of conduct barque boom tack reef hulk scallywag belay lee. Walk the plank bilged on her anchor Yellow Jack carouser draught lugger loot parley bucko. Gun starboard execution dock swing the lead lugger grog blossom driver cutlass weigh anchor.</p>
                    </div>
                </div>
                <p id="andMore">and more...</p>
            </section>
            <img alt="stockImage" src="images/fourPeople.jpg" class="fourPeopleImage sneak"/>
            <div id="homePageContact" class="sneak">
                <h1>Join us</h1>
                <h2>and our 2500 clients around Australia<br>to experience our top quality service</h2>
            </div>
        </section>
<?php require('Structure/footer.html') ?>