<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CADASTRO NOVOS COLABORADORES</title>

    <!-- W3.CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Fonte Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="w3-blue-grey">

    <div class="w3-container w3-white w3-border w3-border-dark-grey" style="width: 550px; margin: 30px auto; text-align: left; padding: 20px;">
        
        <h1 style="text-align: center;"><b>CADASTRO NOVOS COLABORADORES</b></h1>
        <br>

        <?php
        echo "Nome Completo: ".$_POST['nome']."<br>"."<br>";
        echo "Idade: ".$_POST['idade']."<br>"."<br>";
        echo "Profissão: ".$_POST['profissao']."<br>"."<br>";
        echo "Salário pretentido: ".$_POST['salario']."<br>"."<br>";
        echo "Experiência anterior: ".$_POST['experiencia']."."."<br>"."<br>";
        echo $_POST['nome'].", recebemos as informações e vimos seu interesse em trabalhar como ".$_POST['profissao']."."."<br>"."<br>";
        echo "A descrição de sua experiência:"."<br>";
        echo $_POST['experiencia']."."."<br>"."<br>";
        echo "Agradecemos seu interesse e entraremos em contato caso haja uma oportunidade."."<br>"."<br>";
        ?>
        
        <div style="text-align: center;">
            <a href="cadastro.html" class="w3-button w3-blue-grey">Voltar ao formulário</a>
        </div>
        <br>
        
    </div>

</body>
</html>