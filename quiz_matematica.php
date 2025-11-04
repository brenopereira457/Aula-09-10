<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Projeto - Quiz</title>
    <link rel="stylesheet" href="style_categoria2.css">
</head>
<body>
    <h1>Quiz de Matemática</h1>
        <form action="resultado_matematica.php" method="POST">
            <h3>1. Qual é a negação da frase:"O céu é azul"? </h3>
            <input type="radio" name="q1" value="a">O azul não é céu<br>
            <input type="radio" name="q1" value="b">O azul é o céu<br>
            <input type="radio" name="q1" value="c">O céu não é azul<br>
            <input type="radio" name="q1" value="d">O azul é azul<br>

            <h3>2. A afirmação "2 + 2 = 5" é uma preposição Verdadeira ou falsa?</h3>
            <input type="radio" name="q2" value="a">Falsa<br>
            <input type="radio" name="q2" value="b">Verdadeira<br>

            <h3>3. Quak das opções a seguir NÃO considerada uma proposição lógica (algo que pode ser v ou F)?</h3>
            <input type="radio" name="q3" value="a">A Terra é redonda.<br>
            <input type="radio" name="q3" value="b">O número 7 é impar.<br>
            <input type="radio" name="q3" value="c">Todo cachorro late.<br>
            <input type="radio" name="q3" value="d">Que horas são<br>

            <h3>4. Se uma afirmação é Verdadeira(V), qual é o valor lógico da sua negação</h3>
            <input type="radio" name="q4" value="a">Pode ser Verdadeira e Falsa<br>
            <input type="radio" name="q4" value="b">Verdadeira(V)<br>
            <input type="radio" name="q4" value="c">Falsa(F)<br>

            <h3>5. Considere a proposição P:"É um dia ensolarado". A negação de P(egP) seria: "Não é um dia ensolarado". Se P for Falsa, qual é o valor lógico egP?</h3>
            <input type="radio" name="q5" value="a">Falsa(F) <br>
            <input type="radio" name="q5" value="b">Verdadeira(V) <br>

            <br>
                <div class="btn">
                <button type="submit">Enviar Respostas</button>
            </div>  
        </form>
    </body>
</html>