<style>
    *{
        padding: 0;
        font-family: Arial;
    }
    .prueba{
        display: flex;
        justify-content: center;
        allign-items: center;
        
    }

    h2{
        font-family: Times New Roman;
        font-weight: 10;
        color: #04AA6D;
        font-size: 40px;
        letter-spacing: 5px;
    }

    p{
        color: black;
    }

    table, td{
        cellspacing: 0px;
        border: 4px solid;
        border-collapse: collapse;
        padding: 10px;
        background-color: #04AA6D;
        color: white;
        font-weight: bold;
    }
    
    t:nth-child(even){
        background-color: #f2f2f2
    }

    tr:hover{
        background-color: pink;
    }

</style>

<h2>BATALLA NAVAL</h2>

<table class = "default">
    <?php
    $n = 10;
    $m = 7;
    $aux = 0;

        echo "<p>Welcome to \"<i>Batalla Naval</i>\".<br></p>";
        
        $N = 10;
        for($i-1; $i <= $n+1; $i++) { 
            echo "<tr>"; 
            for ($j = $aux; $j < $m + $aux; $j++) {
                echo "<td>" . $j ."</td>";
            }
            $aux++;
            echo "</tr>";
        }

        ?>
</table>