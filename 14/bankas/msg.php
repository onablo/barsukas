<?php 

if ($msg = getMessage()) : ?>
<div style="margin:10;padding:10;border:1px solid black;color:red;"><br>
<?= $msg ?>
</div>
<?php endif ?>