<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Forum</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Les questions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="publish.php">Publier une question</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="my_question.php">Mes questions</a>
        </li>
        <?php 
         
            ?>
            
            <li class="nav-item">
              <?php if(isset($_SESSION['auth'])){
                ?>
                <li class="nav-item">
              <a class="nav-link" href="profile.php?id=<?=$_SESSION['id']?>">Mon profile</a>
                </li>
                  <a class="nav-link" href="Actions/users/logout.php">Déconnexion</a>
                <?php
              }else{
                ?>
                <?= "<a class='nav-link' href='login.php'>Connexion</a>";
              }
              ?>
            </li>
      </ul>
    </div>
  </div>
</nav>