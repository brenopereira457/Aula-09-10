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
            "q1" => "c", //Resposta é Genin
            "q2" => "a", //Resposta é Sharingan
            "q3" => "a", //Resposta é Itachi Uchiha
            "q4" => "a", //Resposta é Jiraiya
            "q5" => "a" //Resposta é Kurama
        ];

        $pontos=0;

        foreach($gabarito as $pergunta => $pergunta_armazenada){
            if (isset($_POST[$pergunta]) && $_POST[$pergunta] === $pergunta_armazenada) {
                $pontos++;
            }
        }

        echo("<p>Você acertou<strong> $pontos</strong> de " . count($gabarito) . " perguntas.</p>");

        if ($pontos == 5){
            echo("<p>Parabéns você é um verdadeiro fã de Naruto</p>");
        } elseif ($pontos >= 3){
            echo("<p>Parabéns você ainda pode ser um fã de Naruto</p>");
        } else{
            echo("<p>Talvez você pode gostar de Dragon Ball.</p>");
        };

        ?>
        <a href="quiz_categoria2.php">Tentar Novamente</a>
</body>
</html>