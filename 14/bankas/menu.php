<div>
<a style="padding: 10px; color: blue;" href="?action=add-account">Atidaryti banko sąskaitą</a>

<a style="padding: 10px; color: blue;" href = "http://localhost/barsukas/14/bankas">Home</a>

<a style="padding: 10px; color: blue;" href = "http://localhost/barsukas/14/bankas/member.php">Members</a>

<?php if (!isset($_SESSION['logged'])) : ?>
<a style="padding: 10px; color: blue;" href = "http://localhost/barsukas/14/bankas/login.php">Login</a>

<?php else : ?>
    <a style="padding: 10px; color: blue;" href = "http://localhost/barsukas/14/bankas/login.php?logout">Logout</a>

</div>
<?php endif ?>




