<?php
    require_once '../../../../lib/session.php';
    Session::checkSession();
    // important
	require_once '../../../../config/config.php';
    require_once '../../../../lib/database.php';
    require_once '../../../../helpers/format.php';
?>

<?php

    if(isset($_POST["fileName"])){
        $db = new Database();
        $result = $db->restoreData($_POST["fileName"]);
    
        echo $result;
    }

    echo "Chưa truyền dữ liệu để khôi phục";

?>