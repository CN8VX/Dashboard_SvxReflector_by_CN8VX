<?php

// Chemin vers le fichier de configuration
$configFile = '/etc/svxlink/svxlink.conf';

// Lire le fichier de configuration
$config = [];
$currentSection = '';

if (file_exists($configFile)) {
    $lines = file($configFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        $line = trim($line);

        // Ignorer les commentaires
        if (strpos($line, ';') === 0) {
            continue;
        }

        // Détecter les sections
        if (strpos($line, '[') === 0) {
            $currentSection = trim($line, '[]');
            $config[$currentSection] = [];
        } elseif ($currentSection && strpos($line, '=') !== false) {
            list($key, $value) = explode('=', $line, 2);
            $config[$currentSection][trim($key)] = trim($value);
        }
    }
} else {
    die("Le fichier de configuration $configFile n'existe pas.");
}

// Vérifier la valeur de LOGICS dans la section GLOBAL
if (isset($config['GLOBAL']['LOGICS'])) {
    $logics = explode(',', $config['GLOBAL']['LOGICS']);
    $activeLogic = '';
    $CALLSIGN = '';

    foreach ($logics as $logic) {
        $logic = trim($logic);
        if ($logic === 'SimplexLogic' && isset($config['SimplexLogic']['CALLSIGN'])) {
            $activeLogic = 'SimplexLogic';
            $CALLSIGN = $config['SimplexLogic']['CALLSIGN'];
            break;
        } elseif ($logic === 'RepeaterLogic' && isset($config['RepeaterLogic']['CALLSIGN'])) {
            $activeLogic = 'RepeaterLogic';
            $CALLSIGN = $config['RepeaterLogic']['CALLSIGN'];
            break;
        }
    }

    if (empty($activeLogic) || empty($CALLSIGN)) {
        echo "Aucune logique active trouvée ou CALLSIGN non défini.";
        $CALLSIGN = 'CALLSIGN';
        $LOGICS = 'LOGICS';
    } else {
        $LOGICS = $activeLogic;
    }
} else {
    echo "La valeur de LOGICS n'est pas définie dans la section GLOBAL.";
    $CALLSIGN = 'CALLSIGN';
    $LOGICS = 'LOGICS';
}
?>
