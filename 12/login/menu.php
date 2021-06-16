<div>
<a href = "http://localhost/barsukas/12/">Home</a>
<a href = "http://localhost/barsukas/12/login/member.php">Members</a>
<?php if (!isset($_SESSION['logged'])) : ?>
<a href = "http://localhost/barsukas/12/login/login.php">Login</a>
<?php else : ?>
    <a href = "http://localhost/barsukas/12/login/login.php?logout">Logout</a>
</div>
<?php endif ?>