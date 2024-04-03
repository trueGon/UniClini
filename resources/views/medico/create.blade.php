<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médico</title>
    <link rel="stylesheet" href="../../css/formularios-css/funPacMed.css">
</head>
<body>
<!--CABEÇALHO -->
<header>
    <h1>Med Software</h1>
    <nav class="menu">
        <a href="#">Início</a>
        <a href="#">Configurações</a>
    </nav>
</header>
<!--CABEÇALHO -->


<!--PRINCIPAL -->
<main>
<div class="login-container">
<div class="form-container">
    <h2>Cadastro de Médico</h2>
    <p class="subtitle">Por favor, adicione as informações do profissional.</p>
    <br>

    <form class="form" action="{{route('registrar_medico')}}" method="post">
           @csrf <!--SEPARANDO OS CAMPOS DO BOTAO DE ENVIAR DADOS-->
            <div class="container-extra">
                <!--NOME-->
                <div>
                    <p>Nome completo:</p>
                    <input type="text" name="nome" id="nome" placeholder="Nome completo" required>
                </div>
                <!--CPF-->
                <div>
                    <p>CPF</p>
                    <input type="tel" name="cpf" id="cpf" placeholder="CPF" required >
                </div>
                <!-- GÊNERO -->
                <div>
                    <P>Senha:</P>
                    <input type="password" name="senha" id="senha" placeholder="Senha" required>
                </div>
                <!---ENDEREÇO-->
                <div>
                    <p>Especialidade:</p>
                    <input type="text"  name="especialidade" id="especialidade"  placeholder="Especialidade médica" required>
                </div>
            </div>
        <!--botão-->
        <input type="submit" name="submit" class="submit" id="submit" value="Enviar"></input>
    </form>

</div>

</div>
</main>
<!--PRINCIPAL -->

<!--RODAPÉ -->
<footer>
<h2>Med Software</h2>
<p>©️2024 Galerinha Corporation</p>
</footer>
<!--RODAPÉ -->

</body>
</html>
