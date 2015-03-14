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

    echo json_encode(
        array(
            'error'   => $user->log->getErrors(),
            'confirm' => 'User Registered Successfully. You may login now!',
            'form'    => $user->log->getFormErrors(),
        )
    );
    //mail ( $input->get('Email') , "Varsko" , "gratz duude", "From: webmaster@varsko.se");
    //TODO: $userInfo->filter('');
}
else
{
  redirect('home');
}

?>
