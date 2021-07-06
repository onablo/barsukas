<?php require DIR.'views/top.php' ?>

<form action ="<?= URL ?> create-account" method="post"> 
        
        <br>
        <input style ="color:blue;" type="text" name ="id" value ="<?='LT98730001007276'. rand(1000, 9999) ?>"><br>
        <input type="text" name ="name">Vardas<br>
        <input type="text" name ="surname">Pavardė<br>
        <input type="text" name ="personID">Asmens kodas<br>
       
        <button style="padding: 10px, 0; margin: 10px; background-color: violet; color: blue; border-radius: 7px;" >Atidaryti sąskaitą</button><br> 
</form>

<?php require DIR.'views/bottom.php' ?>

