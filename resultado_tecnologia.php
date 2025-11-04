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
            "q1" => "b", 
            "q2" => "c",
            "q3" => "b",
            "q4" => "b", 
            "q5" => "c" 
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
        <a href="quiz_tecnologia.php">Tentar Novamente</a>
        <a href="quiz.php">Escolher outro Quiz</a>
</body>
</html>