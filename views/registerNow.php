<?php

if (count($_POST)) {
    /*
     * Covert POST into a Collection object
     * for better values handling
     */

    $input = new \ptejada\uFlex\Collection($_POST);

    $userInfo = $input;
    $input->filter('Username', 'Email', 'Password', 'lan', 'kommun');
    $user->register($input);

    //TODO: $userInfo->filter('');
}
else
{
  redirect('home');
}

?>


<h1>Klart!</h1>
<p>Kanonbra, nu är det färdigt!</p>

<?php
  redirect('home', 2);
?>