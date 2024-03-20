<?php

?>

<?php include "./Layout/Header.php"; ?>
 
  <div class="conteiner">
    <div class= mt-3 d-flex justify-constant-between>
        <div>
            <h4>Adicionar Usuário</h4>
        </div>
        <div>
            <a href= "index.php class=" btn btn-secondary">Voutar</a>
        </div>

    </div>
  <form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
</form>

  </div>

<?php include "./Layout/Footer.php"; ?>
 