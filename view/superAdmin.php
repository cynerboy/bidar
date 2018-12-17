<?php

require_once(dirname(__DIR__). "/controller/sessions.php");

class ViewSuperAdmin{

    public function successDeleteWorkRow(){

        global $session;

        $_SESSION['message'] = "Your item deleted!";

        return $session->messageSuccess($_SESSION['message']);

    }

    public function errorInsertDeleteWorkForReport(){

        global $session;

        $_SESSION['message'] = "Website can't report your action, If you give again this message please contact with programmer";

        return $session->messageWarning($_SESSION['message']);

    }

    public function errorDeleteWork(){

        global $session;

        $_SESSION['message'] = "You can't delete this item in Work part! please contact with programmer";

        return $session->messageError($_SESSION['message']);

    }

    public function showAllWork($arr){

        $output = "";

        foreach ($arr as $item){

            if($item['description'] == 0){ $description ="ندارد"; }else{ $description = "دارد"; }

            $output .= "<tr><td>" . $item['name'] ."</td><td>" . $item['textSms'] . "</td>" . "<td>" . $description ."</td>" . "<td><a class='btn btn-danger btn3d' data-toggle='modal' data-target='#exampleModal" . $item['id'] . "' href='#' role='button'><i class='fas fa-trash-alt'></i></a></td></tr><div class='modal fade' id='exampleModal" . $item['id'] . "' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'> <div class='modal-dialog' role='document'> <div class='modal-content'> <div class='modal-header'> <h5 class='modal-title' id='exampleModalLabel'>Are you want delete this item?</h5> <button type='button' class='close' data-dismiss='modal' aria-label='Close'> <span aria-hidden='true'>&times;</span> </button> </div> <div dir='rtl' class='modal-body text-right'><strong>نام کار:</strong> " . $item['name'] . "<br><strong>متن اس ام اس: </strong>" . $item['textSms'] . "<br><strong>توضیحات: </strong>" . $description . " </div> <div class='modal-footer'> <form method='post'><input type='text' name='id' value='" . $item['id'] . "' hidden><button type='submit' name='deleteWork' class='btn btn-danger btn-block btn3d btn-lg'>Yes</button></form><button type='button' class='btn btn-block btn3d btn-success btn-lg mr-auto' data-dismiss='modal'>No</button> </div> </div> </div></div>";

        }

        return $output;

    }

    public function successInserttWork(){

        global $session;

        $_SESSION['message'] = "New work inserted!";

        return $session->messageSuccess($_SESSION['message']);

    }

    public function errorInsertReportWork(){

        global $session;

        $_SESSION['message'] = "You can't report insert Work part! please contact with programmer";

        return $session->messageWarning($_SESSION['message']);

    }

    public function errorInsertWork(){

        global $session;

        $_SESSION['message'] = "You can't insert into Work part! please contact with programmer";

        return $session->messageError($_SESSION['message']);

    }

    public function errorReportNews(){

        global $session;

        $_SESSION['message'] = "You can't report update News! please contact with programmer";

        return $session->messageWarning($_SESSION['message']);

    }

    public function errorUpdateNews(){

        global $session;

        $_SESSION['message'] = "You can't update News part! please contact with programmer";

        return $session->messageError($_SESSION['message']);

    }

    public function successUpdateNews(){

        global $session;

        $_SESSION['message'] = "News Updated!";

        return $session->messageSuccess($_SESSION['message']);

    }

    public function wrongUsernameOrPassword(){

        global $session;

        $_SESSION['message'] = "You entered incorrect username or password! please try again";

        return $session->messageError($_SESSION['message']);

    }

}

$viewSuperAdmin = new ViewSuperAdmin();