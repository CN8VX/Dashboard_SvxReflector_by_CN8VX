<?php
require_once('include/config.php');
require_once('include/function.php');
require_once('include/logparse.php');
require_once('include/array_column.php');
require_once('include/userdb.php');
require_once('include/tgdb.php');

echo "<!DOCTYPE html>";
echo "<html lang=\"fr\"><head>\r\n";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>";
echo "<script src=\"scripts/tablesort.js\"></script>\r\n";
echo "<meta property=\"og:image\" content=\"51.210.47.236/img/Dashboard_SvxReflector_by_CN8VX.png\">\r\n";
echo "<meta property=\"og:url\" content=\"www.dmr-maroc.com/repeaters_simplex_svxlink.php\">\r\n";
echo "<title>$page_title</title>\n\r";

if(isset($_COOKIE["svxrdb"])) {
    $LASTHEARD = $_COOKIE["svxrdb"];
}

$logs = array();
if(count($LOGFILES,0) >0) {
    for($i=0; $i<count($LOGFILES,0); $i++) {
        /* vérifier si la taille du nom de fichier est supérieure à zéro */
        if(empty($LOGFILES[$i])) { } else {
            $lastdata=getdata($LOGFILES[$i]);
            if(count($lastdata) >0) {
                $logs=array_merge($logs, $lastdata);
                $logs[] = array ('CALL' => "NEWLOGFILEDATA");
            }
        }/* FIN vérifier le nom du film vérifier la taille */
    }
} else { exit(0); }

/* Texte d'information du survol de la souris depuis userdb.php */
for ($i=0; $i<count($logs, 0); $i++) {
    if (isset($userdb_array[$logs[$i]['CALL']], $userdb_array)) {
       $logs[$i]['COMMENT'] = $userdb_array[$logs[$i]['CALL']];
    }
}

if (count($logs) >= 0){
    echo "<main><div id=\"table-container\"><table id=\"logtable\">\n\r<tr>\n\r";
    echo "<th onclick=tabSort(\"EAR\")>Callsign client</th>\n\r";
    echo "<th>Connected since</th>\n\r";

    if( (IPLIST == "SHOW") OR (IPLIST == "SHOWLONG")) {
        echo "<th>Network address</th>\n\r";
    }

    echo '<th class="state">state</th>'."\n\r";
    
    if( (TG == "SHOW") ) {
    	echo "<th>TG</th>\n\r";
    }

    echo "<th>TX on</th>\n\r";
    echo "<th onclick=tabSort(\"TOP\")>TX off</th>\n\r";

    if( (MON == "SHOW") ) {
    	echo "<th>Monitor TG</th>\n\r";
    }

    for ($i=0; $i<count($logs, 0); $i++)
    {
        if( ($logs[$i]['CALL'] != "CALL") AND ($logs[$i]['CALL'] != '') ) {
            echo '<tr>';

            if($logs[$i]['CALL'] != 'NEWLOGFILEDATA') {

                if ( ($logs[$i]['STATUS'] === "ONLINE") OR ($logs[$i]['STATUS'] === "TX") ) {
                    echo '<td class="green"><div class="tooltip">'.$logs[$i]['CALL'].'<span class="tooltiptext">'.$logs[$i]['COMMENT'].'</span></div></td>';
                }
                if ($logs[$i]['STATUS'] === "OFFLINE") {
                    echo '<td class="darkgrey"><div class="tooltip">'.$logs[$i]['CALL'].'<span class="tooltiptext">'.$logs[$i]['COMMENT'].'</span></div></td>';
                }
                if ( ($logs[$i]['STATUS'] === "DOUBLE") OR ($logs[$i]['STATUS'] === "DENIED") ){
                    echo '<td class="red"><div class="tooltip">'.$logs[$i]['CALL'].'<span class="tooltiptext">'.$logs[$i]['COMMENT'].'</span></div></td>';
                }
                if ($logs[$i]['STATUS'] === "ALREADY") {
                    echo '<td class="yellow"><div class="tooltip">'.$logs[$i]['CALL'].'<span class="tooltiptext">'.$logs[$i]['COMMENT'].'</span></div></td>';
                }

                echo '<td class="grey">'.$logs[$i]['LOGINOUTTIME'].'</td>';

                if( IPLIST == "SHOW") {
                    echo '<td class="grey">'.explode(":",$logs[$i]['IP'])[0].'</td>';
                }
                if( IPLIST == "SHOWSHORT") {
                    echo '<td class="grey">'.substr($logs[$i]['IP'], 0, 10).'</td>';
                }

                if (preg_match('/TX/i',$logs[$i]['STATUS'])) {
                    echo '<td class=\'tx\'></td>';
                }
                if (preg_match('/OFFLINE/i',$logs[$i]['STATUS'])) {
                    echo '<td class="grey"></td>';
                }

                if (preg_match('/ONLINE/i',$logs[$i]['STATUS'])) {
                    if ((preg_match('/'.$logs[$i]['CALL'].'/i' , $lastheard_call)) AND (preg_match('/'.$LASTHEARD.'/i', 'EAR')) ) {
                        echo '<td class="ear"></td>';
                    } else {
                        echo '<td class="grey"></td>';
                    }
                }

                if (preg_match('/DOUBLE/i',$logs[$i]['STATUS'])) {
                    echo '<td class=\'double\'></td>';
                }

                if (preg_match('/DENIED/i',$logs[$i]['STATUS'])) {
                    echo '<td class=\'denied\'></td>';
                }

                if (preg_match('/ALREADY/i',$logs[$i]['STATUS'])) {
                    echo '<td class=\'grey\'></td>';
                }
		
    		if( (TG == "SHOW") ) {
                    if(preg_match('/TX/i',$logs[$i]['STATUS'])) {
			echo '<td class=\'red\'>'.$logs[$i]['TG'].' '.$tgdb_array[$logs[$i]['TG']].'</td>';
		    } else {
			echo '<td class=\'grey\'>'.$logs[$i]['TG'].'</td>';
		    }
		}

                if(preg_match('/TX/i',$logs[$i]['STATUS'])) {
                    echo '<td class="yellow">'.$logs[$i]['TX_S'].'</td>';
                    echo '<td class="yellow">'.$logs[$i]['TX_E'].'</td>';
                } else {
                    echo '<td class="grey">'.$logs[$i]['TX_S'].'</td>';
                    echo '<td class="grey">'.$logs[$i]['TX_E'].'</td>';
		}

    		if( (MON == "SHOW") ) {
		    echo '<td class="grey">'.$logs[$i]['MON'].'</td>';
		}
                echo "</tr>\n\r";
            } // FIN DU NOUVEAU FICHIER JOURNAL DONNÉES FAUX
 
            // C’est le séparateur entre le tableau "Callsign client" et "SVXReflector-Dashboard"
             //Début du séparateur
            if (preg_match('/NEWLOGFILEDATA/i', $logs[$i]['CALL'])) {
                echo "<tr><th class='logline' colspan='7'></th></tr>\n\r";
            }//Fin du séparateur
        }
    }

    if( preg_match('/'.REFRESHSTATUS.'/i', 'SHOW')) {
        echo "<tr><th colspan='7'>SVXReflector-Dashboard -=[ ".date("d-m-Y | H:i:s"." ]=-</th></tr>\n\r");
    }

    if( preg_match('/'.LOGFILETABLE.'/i', 'SHOW')) {
        $all_logs = array();
        if(count($LOGFILES,0) >=0) {
            for($i=0; $i<count($LOGFILES); $i++) {
                $lastlog=getlastlog($LOGFILES[$i], LOGLINECOUNT);
                $all_logs=array_merge($all_logs, $lastlog);
            }
        }
        echo "<tr><th colspan='7'>Logfile</th></tr>\n\r
        <td class='logshow'; colspan='7'><pre>".implode("",$all_logs)."</pre></td></tr>";
    }
	echo "</table></div></main>\n\r";
}

if( LEGEND == "FR") {
    echo '<table><tr><td><center><img src="/icon/tx.gif"></center></td><td>Station est actuellement en TX</td></tr>';
    echo '<tr><td><center><img src="./icon/ear.png"></center></td><td>Dernière station entendue</td></tr>';
	echo '<tr><td><center><img src="./icon/double.png"></center></td><td>Une autre station est déjà en émission</td></tr>';
	echo '<tr><td><center><img src="./icon/accden.png"></center></td><td>Accès non autorisé! Contactez le sysop</td></tr>';
    echo '<tr><td><center><img src="./icon/Nota_Bene.png" height="30" width="30"></center></td><td>Basculez le tri en cliquant sur "Callsign client" ou sur "TX off" en haut du tableau</td></tr></table>';
echo '<pre>
<br>';
}

if( LEGEND == "FR-I") {
    echo '<table><tr><td><center><img src="/icon/tx.gif"></center></td><td>Station est actuellement en TX</td></tr>';
    echo '<tr><td><center><img src="./icon/ear.png"></center></td><td>Dernière station entendue</td></tr>';
	echo '<tr><td><center><img src="./icon/double.png"></center></td><td>Une autre station est déjà en émission</td></tr>';
	echo '<tr><td><center><img src="./icon/accden.png"></center></td><td>Accès non autorisé! Contactez le sysop</td></tr>';
    echo '<tr><td><center><img src="./icon/Nota_Bene.png" height="30" width="30"></center></td><td>Basculez le tri en cliquant sur "Callsign client" ou sur "TX off" en haut du tableau</td></tr></table>';
echo '<pre>
9*#     ==> État du TalkGroup.
91#     ==> Sélectionnez le TalkGroup précédent.
91[TG]# ==> Sélectionne le Tallgroup (91+Numero du TG suivi par #).
92#     ==> QSY tous les participants actifs doivent passer au TalkGroup déterminé par le serveur.
92[TG]# ==> QSY de tous les participants actifs au TalkGroup (92+Numero du TG suivi par #).
93#     ==> Répéter le dernier QSY.
94[TG]# ==> Écouter temporairement Tallgroup (94+Numero du TG suivi par #).
</BR>';
}

if( LEGEND == "EN") {
    echo '<table><tr><td><center><img src="/icon/tx.gif"></center></td><td>Station is currently in TX</td></tr>';
    echo '<tr><td><center><img src="./icon/ear.png"></center></td><td>Last station heard</td></tr>';
	echo '<tr><td><center><img src="./icon/double.png"></center></td><td>Another station is already talking</td></tr>';
	echo '<tr><td><center><img src="./icon/accden.png"></center></td><td>Unauthorized access! Contact sysop</td></tr>';
    echo '<tr><td><center><img src="./icon/Nota_Bene.png" height="30" width="30"></center></td><td>Toggle sorting by clicking on "Callsign client" or "TX off" at the top of the table</td></tr></table>';
echo '<pre>
9*#     ==> TalkGroup status.
91#     ==> Select previous TalkGroup.
91[TG]# ==> Select Tallgroup (91+TG number followed by #).
92#     ==> QSY all active participants should switch to a TalkGroup determined by the server.
92[TG]# ==> QSY of all active participants to (92+TG number followed by #).
93#     ==> Repeat last QSY.
94[TG]# ==> Temporarily listen to (94+TG number followed by #).
</BR>';
}

?>
