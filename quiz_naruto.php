<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Projeto - Quiz</title>
    <link rel="stylesheet" href="style_categoria2.css">
</head>
<body>
    <h1>Quiz de Naruto</h1>
        <form action="resultado_naruto.php" method="POST">
            <h3>1. Qual é a classificação ninja de Naruto Uzumaki no início da série?</h3>
            <input type="radio" name="q1" value="a">Hokage <br>
            <input type="radio" name="q1" value="b">Chunin <br>
            <input type="radio" name="q1" value="c">Genin <br>
            <input type="radio" name="q1" value="d">Jonin <br>

            <h3>2. Qual é o nome da técnica ocular (Dojutsu) de Kakashi Hatake?</h3>
            <input type="radio" name="q2" value="a">Sharingan <br>
            <input type="radio" name="q2" value="b">Tenseigan <br>
            <input type="radio" name="q2" value="c">Rinnegan <br>
            <input type="radio" name="q2" value="d">Byakugan <br>

            <h3>3. Quem é o irmão mais velho de Sasuke Uchiha?</h3>
            <input type="radio" name="q3" value="a">Itachi Uchicha <br>
            <input type="radio" name="q3" value="b">Obito Uchiha <br>
            <input type="radio" name="q3" value="c">Madara Uchiha <br>
            <input type="radio" name="q3" value="d">Shisui Uchiha <br>

            <h3>4. Qual dos seguintes é um dos Sannin Lendários de Konoha?</h3>
            <input type="radio" name="q4" value="a">Jiraiya <br>
            <input type="radio" name="q4" value="b">Gaara <br>
            <input type="radio" name="q4" value="c">Minato Namikaze <br>
            <input type="radio" name="q4" value="d">Rock Lee <br>

            <h3>5. Qual é o nome do demônio de nove caudas selado dentro de Naruto?</h3>
            <input type="radio" name="q5" value="a">Kurama <br>
            <input type="radio" name="q5" value="b">Matabi <br>
            <input type="radio" name="q5" value="c">Gyuki <br>
            <input type="radio" name="q5" value="d">Shukaku <br>

            <br>
                <div class="btn">
                <button type="submit">Enviar Respostas</button>
            </div>  
        </form>
    </body>
</html>