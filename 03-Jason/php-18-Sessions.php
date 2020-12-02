<?php

/* 
    session_name(test) setcookie(test)
    session_regenerate_id(true)
    session_id()
    session_start()
    session_destroy()
    session_unset()
    ###################################

    if(!session_id()){

    session_start();
    session_unset();
    session_destroy();
    session_write_close();
    setcookie(session name ),'',0,null,false,true);
    session_regenerate_id(true);
    ####################################
}   */


?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Cours PHP</title>

</head>
<body>

        <h1>Sessions en PHP</h1>


        <p>Bonjour <?= htmlspecialchars($_SESSION['username']) ?></p>

        </body>
        </html>