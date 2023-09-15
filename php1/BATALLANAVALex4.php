<style>
    *{
        padding: 0;
        font-family: 'Saira Extra Condensed', sans-serif;
    }

    body{ background: lightblue url("https://images.alphacoders.com/457/457522.jpg") no-repeat fixed center; }

    .all{
        weight: 100%;
        height: 113%;
        background-color: rgba(255, 255, 255, 0.5);
    }
    
    h2{ 
        display: flex;
        justify-content: center;
        color: #911212;
        font-size: 60px;
        font-family: 'Anton', sans-serif;
        text-shadow: 1px 2px black;
    }

    p{
        color: black;
        font-size: 23px;
    }

    .avaliable{
        line-height: 30px;
        display: flex;
        justify-content: center;
        color: black;
    }

    .table{
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    table, th{
        cellspacing: 0px;
        border: 4px solid;
        border-collapse: collapse;
        padding: 10px;
        background-color: #c33434;
        color: white;
        font-size: 21px;
        font-weight: bold;
        margin: 70 70 70 70;
    }
    
    td:nth-child(even){
        background-color: #ffeeee;
    }
    td:nth-child(even):hover{
        background-color: #ffd5d5;
    }

    td:nth-child(odd){
        background-color: #ffff;
    }
    
    td:nth-child(odd):hover{
        background-color: #f4f4f4;
    }


</style>

<html>
    <head>
        <meta author = "Claudia Moyano Herrerias, 2n DAW"/>
        <title>Battleship Online</title>
        <link rel="shortcut icon" href="https://tse2.mm.bing.net/th?id=OIP.y4wQgEk0pYclV98LXWRjtgHaGh&pid=Api" />
        <!-- ANTON. -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

        <!-- SAIRA -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Saira+Extra+Condensed&display=swap" rel="stylesheet">
    </head>
    
    <body>
        <div class = "all">   
            <div class = "title">
                <h2>BATTLESHIP ONLINE</h2>
            </div>
            
            <div class = "table">    
                <table>
                    
                    <?php
                        $n = 10;
                        $m = 10;

                        for ($i = 0; $i < $n + 1; $i++) {
                            echo "<tr>";
                            if ($i == 0) {
                                for ($j = 0; $j < $m + 1; $j++) {
                                    echo ($j == 0
                                    ? "<td> </td>"
                                    : "<th>".$j."</th>");
                                }
                            }
                            
                            else {
                                for ($j = 0; $j < $m + 1; $j++) {
                                    echo ($j == 0
                                        ? "<th>".chr(($i-1)+65)."</th>"
                                        : "<td></td>");
                                }
                            }
                            echo "</tr>";
                        }

                        # ARRAYS.
                        # "Array" inicialitzat amb quatre elements.
                        $vaixells = array(
                            "Frigate" => "avaliable" || "not avaliable", 
                            "Submarine" => "disponible" || "not avaliable", 
                            "Destructor" => "avaliable" || "not avaliable", 
                            "Aircraft carrier " => "avaliable" || "not avaliable");
                        
                        foreach ($vaixells as $vaixell => $disponibilitat)
                        {
                            echo "<p class = 'avaliable'><br>· $vaixell is currently $disponibilitat.</div";
                        };

                    ?>
                    </table>
                </div>
            </div>
        </body>
<html>