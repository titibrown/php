<?php
require 'Session.php';
Session::Auth(new FakeUsers());
?>
<form method="post">
    <input type="text" name="username">
    <input type="password" name="password">
    <button type="submit">Valider</button>
</form>
<?=Session::getError(); ?>
