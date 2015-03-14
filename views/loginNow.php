<?php

//Process Login
if(count($_POST)){
    /*
     * Covert POST into a Collection object
     * for better value handling
     */
    $input = new \ptejada\uFlex\Collection($_POST);

  $user->login($input->Username, $input->Password, $input->auto);

  $errMsg = '';

  if($user->log->hasError()){
    $errMsg = $user->log->getErrors();
    $errMsg = $errMsg[0];
    redirect("login");
  }
}
else
{
  redirect("");
}


?>

<div class="row">
  Du är nu inloggad
</div>

<?php redirect("myinfo", 3);