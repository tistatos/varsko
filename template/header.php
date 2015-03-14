<html>
<head>

  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Varsko</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title>Varsko - Bitch I'll warn ya</title>
</head>
<body>
<header>
  <div class="logo">
    <a href="index.php"><img src="img/logo_w.png" alt=""></a>

  </div>
  <div class="menu pull-right white">
    <a href="<?php echo $base; ?>" class="white"> Start</a> |
    <?php if($user->isSigned()) { ?>
      <a href="<?php echo $base.'/updateUser'; ?>" class="white"> Uppdatera mina uppgifter</a> |
      <a href="<?php echo $base.'/logout'; ?>" class="white"> Logga ut</a>
    <?php } else { ?>
      <a href="<?php echo $base.'/login'; ?>" class="white"> Logga in</a> |
      <a href="<?php echo $base.'/signup'; ?>" class="white"> Registera nytt konto</a>

    <?php } ?>
  </div>
</header>
<div class="container-fluid">
<div class="row">