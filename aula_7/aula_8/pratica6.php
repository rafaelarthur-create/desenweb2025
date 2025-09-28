<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 6</title>
</head>
<body>
    <h3>Boletim Escolar</h3>
    <?php
        $registro = array(
                        array("Matemática",5,8.5),
                        array("Português",2,9),
                        array("Geografia",10,6),
                        array("Educação Física",2,8)
                    );
        echo 
            "<table border='2'>
                <tr>
                    <td width='150px'>Disciplina</td>
                    <td width='100px'>Faltas</td>
                    <td width='100px'>Média</td>
                </tr>";

            foreach ($registro as $linha) {
                echo "<tr>";
                foreach ($linha as $valor) {
                    echo "<td>$valor</td>";
                }
            }

        echo "</table>"; 
    ?>   
</body>
</html>