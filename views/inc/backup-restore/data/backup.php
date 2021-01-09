<?php
    require_once '../../../../lib/session.php';
    Session::checkSession();
    // important
	require_once '../../../../config/config.php';
    require_once '../../../../lib/database.php';
    require_once '../../../../helpers/format.php';
?>

<?php

    $db = new Database();
    $filename = $db->backupData();

    echo $filename;

?>