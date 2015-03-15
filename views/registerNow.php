<?php

if (count($_POST)) {
    /*
     * Covert POST into a Collection object
     * for better values handling
     */
    var_dump($_POST);

    $input = new \ptejada\uFlex\Collection($_POST);

    $userInfo = $input;
    $input->filter('Username', 'Email', 'Password', 'lan', 'kommun');
    $user->register($input);

    //mail ( $input->get('Email') , "Varsko" , "gratz duude", "From: webmaster@varsko.se");
    //TODO: $userInfo->filter('');
}
else
{
  redirect('home');
}

?>


<h1>Klart!</h1>
<p>Kanonbra, nu är det färdigt!</p>