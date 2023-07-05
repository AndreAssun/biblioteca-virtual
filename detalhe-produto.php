<?php
$id_livro = filter_input(INPUT_GET, "id_livro", FILTER_SANITIZE_NUMBER_INT);

include_once("connection.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="midia.css">
    <title>detalhe produto</title>
</head>
<body>



<header class="header">
    <div class="menu">
      <h1>
        <a href="index.php"  >
            <img id="logo" src="img/logo-site.png" alt=""/>
        </a>
      </h1>
      <nav class="menu-nav">
        <ul>
          <li><a href="#quem-somos">Quem somos</a></li>
          <li><a href="acervo.php">Nosso acervo</a></li>
          <li><a href="login/login.php">Login</a></li>
        </ul>
      </nav>
    </div>
  </header>
    <div class="container">
      
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>