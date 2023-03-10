  <!DOCTYPE html>
<html>
    <head>
        <title>Número de Jogos necessário:</title>
        
    </head>
    <body>
        <form action="" method="POST">
            <table align="center">
                
                <tr>
                    <td>Pontos Abdul:</td>
                    <td><input type="text" name="pontos_abdul"></td>
                </tr>                
                <tr>
                    <td>Pontos Lebron:</td>
                    <td><input type="text" name="pontos_lebron"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="enviar" value="Enviar"></td>
                </tr>
            </table>
        </form>
        
    </body>
</html>

<?php

if (isset($_POST["enviar"]))
{    

    $pontos_lebron = $_POST["pontos_lebron"];    
    $pontos_abdul = $_POST["pontos_abdul"]; 
    $media =($pontos_abdul-$pontos_lebron)/30*1000;
    $media=number_format($media,2,".");

    

    
   


    echo "<br>Lebron precisará de ".$media." partidas.";   

   
}
?>