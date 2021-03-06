<?php
  if($user->isSigned()) redirect("home");
?>
<div class="row">
  <div class="col-sm-6 col-sm-offset-3">
    <h2>Logga in</h2>

    <hr/>

    <form method="post" action="loginNow" data-success="<?php echo $base?>">
      <div class="form-group">
        <label>Telefonnummer eller mail:</label>
        <input name="Username" type="text" class="form-control" required autofocus>
      </div>

      <div class="form-group">
        <label>PIN-kod:</label>
        <input name="Password" type="password" class="form-control" required>
      </div>

      <div class="form-group text-center">
        <button type="submit" class="btn btn-success">Logga in</button>
        <br/><br/>
        <a href="register">Registrera ett nytt konto</a>
      </div>
    </form>

  </div>
</div>