<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Projeto - Quiz</title>
    <link rel="stylesheet" href="style_categoria2.css">
</head>
<body>
    <h1>Quiz de Tecnologia</h1>
        <form action="resultado_tecnologia.php" method="POST">
            <h3>1. O que é um CPU (Unidade Central de Processamento) em um computador?</h3>
            <input type="radio" name="q1" value="a">Um dispositivo usado apenas para salvar arquivos na nuvem. <br>
            <input type="radio" name="q1" value="b">O "cérebro" do computador que executa todas as instruções e cálculos. <br>
            <input type="radio" name="q1" value="c">O monitor, responsável pela exibição de imagens. <br>
            <input type="radio" name="q1" value="d">O programa que permite navegar na internet. <br>

            <h3>2. Qual é o sistema operacional usado na maioria dos smartphones da Samsung?
</h3>
            <input type="radio" name="q2" value="a">iOS <br>
            <input type="radio" name="q2" value="b">Windows Phone <br>
            <input type="radio" name="q2" value="c">Android <br>
            <input type="radio" name="q2" value="d">HarmonyOS <br>

            <h3>3. O que é um “navegador de internet”?</h3>
            <input type="radio" name="q3" value="a">Um aplicativo para editar fotos <br>
            <input type="radio" name="q3" value="b">Um programa usado para acessar sites na web <br>
            <input type="radio" name="q3" value="c">Um antivírus <br>
            <input type="radio" name="q3" value="d">Um tipo de rede social <br>

            <h3>4. Qual dispositivo é usado para mover o cursor na tela do computador?</h3>
            <input type="radio" name="q4" value="a">Teclado <br>
            <input type="radio" name="q4" value="b">Mouse <br>
            <input type="radio" name="q4" value="c">Monitor  <br>
            <input type="radio" name="q4" value="d">Impressora <br>

            <h3>5. Como é chamado o armazenamento de arquivos pela internet, sem precisar de um pen drive ou HD externo?</h3>
            <input type="radio" name="q5" value="a">Banco de dados <br>
            <input type="radio" name="q5" value="b">Servidor local <br>
            <input type="radio" name="q5" value="c">Nuvem (Cloud Storage) <br>
            <input type="radio" name="q5" value="d">Backup físico <br>

            <br>
                <div class="btn">
                <button type="submit">Enviar Respostas</button>
            </div>  
        </form>
    </body>
</html>