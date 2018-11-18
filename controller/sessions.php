<?php
class session{
    public function __construct(){
        session_start();
    }

    public function checkUpdaterSession(){

        if(isset($_SESSION['updater'])){

            return true;

        }else{

            return false;

        }

    }

    public function checkAdminSession(){

        if(!isset($_SESSION['autho']) || $_SESSION['autho'] != "whiter"){

            return false;

        }else{

            return true;

        }

    }

    public function setAdminSession(){

        $_SESSION["autho"] = "whiter";
        return;

    }

    /* Message notifications alert reserved for bootstrap style */

    //ENGLISH

    public function messageSuccess($message){
        if (isset($_SESSION["message"])){
            $output = "<div class='alert alert-success text-center' id='closeAlert' role='alert'><strong>Success! </strong>";
            $output .= $message;
            $output .= "</div>";
            $_SESSION["message"] = null;
            return $output;
        }
    }
    // message information
    public function messageInformation($message){
        if (isset($_SESSION["message"])){
            $output = "<div class='alert alert-info text-center' id='closeAlert' role='alert'><strong>Information! </strong>";
            $output .= $message;
            $output .= "</div>";
            $_SESSION["message"] = null;
            return $output;
        }
    }
    // message warning
    public function messageWarning($message){
        if (isset($_SESSION["message"])){
            $output = "<div class='alert alert-warning text-center' id='closeAlert' role='alert'><strong>Warning! </strong>";
            $output .= $message;
            $output .= "</div>";
            $_SESSION["message"] = null;
            return $output;
        }
    }
    // message error
    public function messageError($message){
        if (isset($_SESSION["message"])){
            $output = "<div class='alert alert-danger text-center' id='closeAlert' role='alert'><strong>Error! </strong>";
            $output .= $message;
            $output .= "</div>";
            $_SESSION["message"] = null;
            return $output;
        }
    }

    //PERSIAN

    // message success
    public function message_success($message){
        if (isset($_SESSION["message"])){
            $output = "<div class='alert alert-success' role='alert'><strong>تبریک! </strong>";
            $output .= $message;
            $output .= "</div>";
            $_SESSION["message"] = null;
            return $output;
        }
    }
    // message information
    public function message_information($message){
        if (isset($_SESSION["message"])){
            $output = "<div class='alert alert-info' role='alert'><strong>اطلاعیه! </strong>";
            $output .= $message;
            $output .= "</div>";
            $_SESSION["message"] = null;
            return $output;
        }
    }
    // message warning
    public function message_warning($message){
        if (isset($_SESSION["message"])){
            $output = "<div class='alert alert-warning' role='alert'><strong>هشدار! </strong>";
            $output .= $message;
            $output .= "</div>";
            $_SESSION["message"] = null;
            return $output;
        }
    }
    // message error
    public function message_error($message){
        if (isset($_SESSION["message"])){
            $output = "<div class='alert alert-danger' role='alert'><strong>اخطار! </strong>";
            $output .= $message;
            $output .= "</div>";
            $_SESSION["message"] = null;
            return $output;
        }
    }
}
$session = new session();