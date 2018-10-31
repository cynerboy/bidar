<?php

class ViewSuperAdmin{

    public function wrongUsernameOrPassword(){

        return "<div class='alert alert-danger text-center' role='alert'><strong>Error! </strong>You entered incorrect username or password! please try again.</div>";

    }

}

$viewSuperAdmin = new ViewSuperAdmin();