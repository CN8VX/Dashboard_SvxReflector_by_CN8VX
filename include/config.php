<?php

// Define the default time zone used.
// You would find the time zones in this site: https://www.php.net/manual/en/timezones.php.
date_default_timezone_set('Africa/Casablanca');

// Display the title of the page.
// Afficher le titre de la page.
$page_title = ("SVXReflector Dashboard by CN8VX");

// Define the logo path.
// Définir le chemin du logo.
define("LOGO_PATH", "img/logo.png");

//Define the favicon path.
//Définir le chemin du favicon.
$favicon_path = ("img/favicon.png");

/* Full path to the log file, 'file2', 'file3', 'file4' ....
The default path is: '/var/log/svxreflector' */
/* Chemin complet vers le fichier journal, 'file2', 'file3', 'file4' ....
Le chemin par default est : '/var/log/svxreflector' */
$LOGFILES = array( '/var/log/svxreflector' );

/* Define the language and display of the legend: FR for Français, FR-I for Français avec indication ou EN for Anglais.
If define("LEGEND", "") the legend is not displayed. */
define("LEGEND", "FR");

// Define to "SHOW" so that the lines of the log file will be displayed in the "Logfile" part.
// Définir sur "SHOW" pour que les lignes du fichier du journal s'afficheront la partie "Logfile".
define("LOGFILETABLE", "SHOW");

// Define the number of lines to display in the "Logfile" part.
// Définir le nombre de lignes à afficher dans la partie "Logfile".
define("LOGLINECOUNT", "30");

/*Define to "SHOW" or "SHOWNO" to display or not display the IP addresses
of the repeaters that are connected in the table.*/
/*Définir sur "SHOW" ou sur "SHOWNO" pour afficher ou ne pas afficher
les adresses IP des répéteurs qui sont connecte dans le tableau.*/
define("IPLIST", "SHOWNO");

// Define to SHOW to see the refresh time status line.
// Définir sur SHOW pour voir la ligne d'état de l'heure de rafraîchissement.
define("REFRESHSTATUS", "SHOW");

/* Définir sur "YES" pour enregistrer les données du client et les récupérer après la rotation du journal dans
le répertoire de base à partir de ... www/svxrdb/recover_data_xxxxxx.
Pour l'utilisateur de la carte SD c’est déconseillé de récupérer les données a cosse de la taille qui est trop grande. */
define("RECOVER", "NO");

/* Utilisez "EAR" pour marquer avec l'icône de la dernière transmission.
utilisez "TOP" comme mot-clé pour voir la dernière transmission en premier lieu dans la liste (EAR n'est plus vu automatiquement)
changez-le au moment de l'exécution en cliquant sur l'en-tête de table "Callsign client" ou "state" */
// EAR or TOP
$LASTHEARD = "TOP";

// Define the display of the monitoring talkgroup (MonitorTG) to yes (SHOW) or no (SHOWNO).
// Définir l'affichage du groupe de discussion (MonitorTG) de surveillance oui (SHOW) ou non (SHOWNO).
define("MON", "SHOW");

// Define the display of the discussion group (TG) to yes (SHOW) or no (SHOWNO).
// Définir l'affichage du groupe de discussion (TG) oui (SHOW) ou non (SHOWNO).
define("TG", "SHOW");

?>
