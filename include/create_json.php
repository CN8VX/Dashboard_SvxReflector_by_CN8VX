<?php

require_once('include/config.php');
require_once('include/function.php');
require_once('include/logparse.php');
require_once('include/array_column.php');
require_once('include/userdb.php');

$logs = array();
if(count($LOGFILES,0) >0) {
    for($i=0; $i<count($LOGFILES,0); $i++) {
        // check if filename size greater as zero
        if(empty($LOGFILES[$i])) { } else {
            $lastdata=getdata($LOGFILES[$i]);
            if(count($lastdata) >0) {
                $logs=array_merge($logs, $lastdata);
                $logs[] = array ('CALL' => "NEWLOGFILEDATA");
            }
        }// END check filname size check
    }
} else { exit(0); }

/* loading userdb for mouse hover textinfo from userdb.php */
for ($i=0; $i<count($logs, 0); $i++) {
    if (isset($userdb_array[$logs[$i]['CALL']], $userdb_array)) {
       $logs[$i]['COMMENT'] = $userdb_array[$logs[$i]['CALL']];
    }
}
header("Content-type: application/json");
echo "{\"state\": \"success\", \"data\": ";
echo json_encode($logs);
echo "}";

?>
