<?php
    require_once '../../../../lib/session.php';
    Session::checkSession();
    // important
	require_once '../../../../config/config.php';
    require_once '../../../../lib/database.php';
    require_once '../../../../helpers/format.php';

    // controllers
    require_once '../../../../controllers/revenue.php';
?>

<?php

    $revenue = new Revenue();
    $result['AllSourceRevenues'] = $revenue->getAllSourceRevenues();

    echo json_encode($result);

?>