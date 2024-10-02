<link rel="stylesheet" href="style.css">

<!-- Barra Principal -->
<nav class="navbar navbar-expand-sm bg-body-tertiary">
  <div class="container-fluid my-container-barra">

    <!-- Parte principal da barra -->
    <a class="navbar-brand" href="#">Matemática</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Parte secundaria da barra -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <!-- Parte "Home" da barra -->
        <li class="nav-item">
          <?php if($pg_atual == 'home'): ?>
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          <?php else: ?>
            <a class="nav-link" href="#">Home</a>
          <?php endif; ?>
        </li>
        
        <!-- Parte "Soma" da barra -->
        <li class="nav-item">
          <?php if($pg_atual == 'soma'): ?>
            <a class="nav-link active" aria-current="page" href="#">Soma</a>
          <?php else: ?>
            <a class="nav-link" href="recebe_numeros_soma.php">Soma</a>
          <?php endif; ?>
        </li>
        
        <!-- Parte "Subtração" da barra -->
        <li class="nav-item">
          <?php if($pg_atual == 'sub'): ?>
            <a class="nav-link active" aria-current="page" href="#">Subtração</a>
          <?php else: ?>
            <a class="nav-link" href="recebe_numeros_sub.php">Subtração</a>
          <?php endif; ?>
        </li>
          
        <!-- Parte "Multiplicação" da barra -->
        <li class="nav-item">
          <?php if($pg_atual == 'mult'): ?>
            <a class="nav-link active" aria-current="page" href="#">Multiplicação</a>
          <?php else: ?>
            <a class="nav-link" href="recebe_numeros_mult.php">Multiplicação</a>
          <?php endif; ?>
        </li>

        <!-- Parte "Divisão" da barra -->
        <li class="nav-item">
          <?php if($pg_atual == 'div'): ?>
            <a class="nav-link active" aria-current="page" href="#">Divisão</a>
          <?php else: ?>
            <a class="nav-link" href="recebe_numeros_div.php">Divisão</a>
          <?php endif; ?>
        </li>
        
        <!-- Parte "Resultado" da barra -->
        <li class="nav-item">
          <?php if($pg_atual == 'resultado'): ?>
            <a class="nav-link active" aria-current="page" href="#">Resultado</a>
          <?php else: ?>
            <a class="nav-link" href="#">Resultado</a>
          <?php endif; ?>
        </li>

      </ul>
    </div>
  </div>
</nav>