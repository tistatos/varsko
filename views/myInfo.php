<?php
//If user is not signed in redirect
if (!$user->isSigned()) {
    redirect("login");
}
    //Process Update
if(count($_POST))
{
    /*
    * Covert POST into a Collection object
    * for better value handling
    */
    $input = new \ptejada\uFlex\Collection($_POST);

    /*
     * Updates queue
     */
    foreach($input->toArray() as $name=>$val){
        if (is_null($user->getProperty($name))) {
            /*
             * If the field is not part of the user properties
             * then reject the update
             */
            unset($input->$name);
        }
        else
        {
            /*
             * If the value is the same as the tha value stored
             * on the user properties then reject the update
             */
            if ($user->$name == $val) {
                unset($input->$name);
            }

        }
    }

    if( ! $input->isEmpty() )
    {
        //Update info
        $user->update($input->toArray());
    }
}

?>
<div class="row">
    <div class="col-sm-6 col-sm-offset-3">
        <form method="post" action="<?php echo $base ?>/myInfo" data-success="<?php echo $base?>/account">
            <div class="form-group">
                <label>Telefonnummer:</label>
                <input disabled name="Username" type="text" value="<?php echo $user->Username?>" class="form-control">
            </div>

            <div class="form-group">
                <label>Mail: </label>
                <input name="Email" type="text" required value="<?php echo $user->Email?>" class="form-control">
            </div>

            <div class="form-group">
                <label>Län: </label>
                <input name="lan" type="text" value="<?php echo $user->lan?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Kommun: </label>
                <input name="kommun" type="text" value="<?php echo $user->kommun?>" class="form-control">
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Uppdatera</button>
            </div>
        </form>

    </div>
</div>
