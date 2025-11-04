<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Quiz</title>
    <link rel="stylesheet" href="style_categoria2.css">
</head>
<body>
    <h1>Resultado do Quiz</h1>
    
    <?php
        $gabarito = [
            "q1" => "c", //Resposta é "o ceu não é azul"
            "q2" => "a", //Resposta é "Falsa"
            "q3" => "d", //Resposta é "Que horas são"
            "q4" => "c", //Resposta é Falsa
            "q5" => "b" //Resposta é Verdadeira(V)
        ];

        $pontos=0;

        foreach($gabarito as $pergunta => $pergunta_armazenada){
            if (isset($_POST[$pergunta]) && $_POST[$pergunta] === $pergunta_armazenada) {
                $pontos++;
            }
        }

        echo("<p>Você acertou<strong> $pontos</strong> de " . count($gabarito) . " perguntas.</p>");

        if ($pontos == 5){
            echo("<p>Parabéns você é muito bom</p>");
        } elseif ($pontos >= 3){
            echo("<p>Parabéns você é bom</p>");
        } else{
            echo("<p>Talvez se tentar novamente.</p>");
        };

        ?>
        <a href="quiz_matematica.php">Tentar Novamente</a>
        <a href="quiz.php">Escolher outro Quiz</a>
</body>
</html>