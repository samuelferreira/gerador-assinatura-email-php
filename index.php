<html>
<head>
<!-- Criado por Marlon -->
<link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,500,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/material.teal-red.min.css" />
<link rel="stylesheet" href="css/style.css" />
<script src="js/material.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=ansi" />
<title>Gerador de Assinaturas</title>
</head>

<body>
<div class="mdl-layout mdl-js-layout mdl-color--grey-100">
    <main class="mdl-layout__content">
        <div class="mdl-card mdl-shadow--6dp">
            <div class="mdl-card__title mdl-color--primary mdl-color-text--white">
            <h2 class="mdl-card__title-text">Gerador de Assinaturas</h2>
            </div>
            <div class="mdl-card__supporting-text">
                <form action="assinatura.php" method="post">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <label class="mdl-textfield__label">Nome: </label> 
                      <input class="mdl-textfield__input" pattern"^[a-zA-Z][a-zA-Z-_\.]$" name="nome" id="nome" type="text" value="" size=""/> 
                    <br/ >
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <label class="mdl-textfield__label">Setor: </label> 
                      <input  class="mdl-textfield__input" pattern"^[a-zA-Z][a-zA-Z-_\.]$" name="setor" type="text" value="" size=""/> 
                    <br/ >
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <label class="mdl-textfield__label">Ramal: </label> 
                      <input class="mdl-textfield__input"  name="ramal" type="text" value="" size=""/> 
                    </div>
                      <input class="mdl-button mdl-button--raised mdl-button--colored" type="submit" value="Criar Assinatura" />
                </form>
            </div>
        </div>
    </main>
</div>
</body>
</html>

