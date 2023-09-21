<h1>Login<h1>

<form>
    <input type = "text" name = "user" placeholder = "user">
    <br>
    <input type = "password" name = "pass">
    <br><br>
    <input type = "submit">
</form>

<?php

    $array = ["user" => "Claudia", "Diego", "Natalia"];
    $array = ["passwords" => "123", "321"];
    

    if(isset($_GET["user"])) in $array {
        echo "Usuari ".$_GET["user"]."<br>\n";
    } else {
        echo "Aquest usuari no es troba a la base de dades."
        
    }

?>