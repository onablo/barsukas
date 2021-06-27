

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atidaryti sąskaitą</title>
</head>                        
                                  

<!--//jei get metodas                   
sukurti kintamaji su banko saskaita
    $jsonSkaiciukas = "";//pasiemame skaiciuka is json failo skirto saugoti banko kintanti id 
    //ir ji padidine vienetu issaugom atgal
    $bankId = "LT98730001007276". $jsonSkaiciukas;
   // . $jsonSkaiciukas" disabled // ir ji paduoti i value su if    //name    -->         
<body>

    <?php include __DIR__ . '/menu.php' ?>

   <form action ="?action=add-account" method="post"> 
        
        <br>
         <input style ="color:blue;" type="text" name ="id" value ="<?='LT98730001007276'. rand(1000, 9999) ?>"><br>
        <input type="text" name ="name">Vardas<br>
        <input type="text" name ="surname">Pavardė<br>
        <input type="text" name ="personID">Asmens kodas<br>
       
        <button style="padding: 10px, 0; margin: 10px; background-color: violet; color: blue; border-radius: 7px;" >Atidaryti sąskaitą</button><br> 
    </form>

</body>
</html> 
