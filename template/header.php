<html>
<head>
  <title>Varsko - Bitch I'll warn ya</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
  <div class="logo">
    <img src="asd" alt="">
  </div>
  <div class="menu">
    <a href="<?php echo $base; ?>"> Start</a> |
    <?php if($user->isSigned()) { ?>
      <a href="<?php echo $base.'/updateUser'; ?>"> Uppdatera mina uppgifter</a> |
      <a href="<?php echo $base.'/logout'; ?>"> Logga ut</a>
    <?php } else { ?>
      <a href="<?php echo $base.'/login'; ?>"> Logga in</a> |
      <a href="<?php echo $base.'/signup'; ?>"> Registera nytt konto</a>
    <?php } ?>
  </div>
</header>