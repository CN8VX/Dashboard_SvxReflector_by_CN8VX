<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="all" />
    <meta name="keywords" content="Dashboard SVXReflector, SvxLink, Svx Link Reflector, Svx, svx link, svx,  SvxLink par CN8VX, Dashboard SVXReflector by CN8VX " />
    <meta name="title" content="Dashboard SVXReflector by CN8VX" />
    <meta name="description" content="Dashboard SVXReflector by CN8VX for Moroccan Amteur Radio Repeaters Interco by CN8VX." />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="scripts/scrstyle.js"></script>
    <link rel="shortcut icon" href="img/favicon.png">
    <link id="stylefile" rel="stylesheet" href="css/style_normal.css">
</head>

<body>
    <div id="bannere">
        <table>
            <tbody>
                <tr>
                    <td class="entt"><a href="https://www.dmr-maroc.com/repeaters_simplex_svxlink.php" target="_blank"><img class="icm" src="./img/logo.png" alt="Logo"></a></td>
                    <td class="entt"><span class="logo-title">Dashboard SVXReflector by CN8VX</span></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Les boutons de changement de thème -->
    <div id="container">
        <button class="btntogl" id="toggleButton" onclick="toggleStyleSheet()">Dark Mode</button>
    </div>

    <br><br>

    <div class="txdefl">
        <!-- Texte défilant -->
        <div>Bienvenue sur le Dashboard SVXReflector by CN8VX et bon trafic. Welcome to the SVXReflector Dashboard by CN8VX and happy traffic.</div>
    </div>

    <br><br>

    <div id="container">
        <table>
            <div class="boxbt">
                <!-- Les boutons -->
                <a target="_blank" href="http://135.125.205.162:8080/"><button class="button btn01">Serveur FreeDMR-Maroc</button></a>
                <a target="_blank" href="http://135.125.205.162/supermon/link.php?nodes=492510,492511,58998,588891,590820"><button class="button btn01">Dashboard AllStarLink</button></a>
                <a target="_blank" href="http://6041.adn.systems/"><button class="button btn01">Serveur ADN-Maroc</button></a>
            </div>
            <tr>
                <td colspan="1">
                    <div class="iframe-container">
                        <div class="mrg01">
                            <span>
                                <p class="tex01">
                                    <b>- SvxReflector est 24/7. Si vous avez configuré un répéteur SVXLink, vous pouvez demander vos identifiants de connexion au sysop <a class="lien" target="_blank" href="https://www.qrz.com/db/CN8VX">CN8VX</a> via le mail: <a class="lien" target="_blank" href="mailto:cn8vx.ma@gmail.com">cn8vx.ma@gmail.com</a>.</b><br>
                                    <b>- SvxReflector est interconnecté avec le DMR sur le TG6041 du Serveur <a class="lien" target="_blank" href="http://135.125.205.162:8080/">FreeDMR Maroc</a>, le Serveur <a class="lien" target="_blank" href="http://6041.adn.systems/">ADN Maroc</a>, en Analogique sur <a class="lien" target="_blank" href="http://135.125.205.162/supermon/link.php?nodes=492510,492511,588891,590820">le Node 492510</a> AllStarLink et sur Echolink de CN8VX-R sur le Node 799775.</b><br>
                                </p>
                            </span>
                            <span>
                                <p class="tex01"><b>- Afin de garantir une communication fluide entre les différents serveurs qui facilite l'interconnexion des plateformes <u>FreeDMR Maroc</u>, <u>AllStarLink</u>, <u>SvxLink</u> et d'autres, 
                                    nous vous prions de respecter les règles de transmission suivantes :</b></p>
                            </span>
                            <span>
                                <p class="tex01">
                                    <b>- Votre temps de transmission doit être inférieur à 3 min pour ne pas être stoppé par l'Anti-bavard (TOT=180sec)</b><br>
                                    <b>- Veuillez laisser un blanc de 5 à 8 secs entre chaque passage</b><br>
                                    <b>- Veuillez vous présenter et vous annoncer durant les blancs</b><br>
                                    <b>- Veuillez respecter la règle d'annoncer votre indicatif et celui à qui vous aimeriez passer le micro</b><br>
                                    <b>- Veuillez rester à l'écoute entre chaque fin de QSO</b>
                                </p>
                            </span>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $("#create_html").load("create_html.php");
                            var refreshId = setInterval(function() {
                                $("#create_html").load('create_html.php?' + 1 * new Date());
                            }, 1000);
                        });
                    </script>
                    <div id="create_html"></div>
                </td>
            </tr>
        </table>
    </div>
</body>

<!-- Début du Footer -->
<?php
    include('include/footer.php');
?> 
<!-- Fin du Footer -->

</html>
