<?php

// Définir le fuseau horaire par défaut utilisé.
// Vous trouveriez les fuseaux horaires dans ce site https://www.php.net/manual/en/timezones.php.
date_default_timezone_set('Africa/Casablanca');

// Afficher le titre de la page.
$page_title = ("SVXReflector Dashboard by CN8VX");

/* Chemin complet vers le fichier journal, 'file2', 'file3', 'file4' ....
Le chemin par default est : '/var/log/svxreflector' */
$LOGFILES = array( '/var/log/svxreflector' );

/* Définir la langue et l’affichage de la légende : FR pour Français, FR-I pour Français avec indication ou EN pour Anglais.
Définir ("LEGEND", "") la légende ne s'affiche pas. */
define("LEGEND", "FR");

// Définir sur "SHOW" pour que les lignes du fichier du journal s'afficheront la partie "Logfile".
define("LOGFILETABLE", "SHOW");

// Définir le nombre de lignes à afficher dans la partie "Logfile".
define("LOGLINECOUNT", "30");

// Définir "SHOW" les adresses IP des répéteurs qui sont connecte s'affiche dans le tableau.
// Définir "SHOWNO" les adresses IP des répéteurs qui sont connecte ne s'affiche pas dans le tableau.
define("IPLIST", "SHOWNO");

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

// Définir l'affichage du groupe de discussion (MonitorTG) de surveillance oui (SHOW) ou non (SHOWNO).
define("MON", "SHOW");

// Définir l'affichage du groupe de discussion (TG) oui (SHOW) ou non (SHOWNO).
define("TG", "SHOW");

?>
