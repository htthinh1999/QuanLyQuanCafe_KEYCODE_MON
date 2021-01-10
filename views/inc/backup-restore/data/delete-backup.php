<?php
    require_once '../../../../lib/session.php';
    Session::checkSession();
    // important
	require_once '../../../../config/config.php';
    require_once '../../../../lib/database.php';
?>

<?php

    $dir = "backup";
    foreach(scandir($dir) as $file) {
        if ('.' === $file || '..' === $file) continue;
        if (is_dir("$dir/$file")) rmdir_recursive("$dir/$file");
        else unlink("$dir/$file");
    }
    $result = rmdir($dir);

    // $result = unlink($_POST["filePath"]);

    if($result){
        echo "Xoá các file backup thành công!";
    }else{
        echo "Xoá các file backup <b>KHÔNG</b> thành công!";
    }

?>