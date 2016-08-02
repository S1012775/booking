<?php

class HomeController extends Controller {
    
    function manage() {
        
        $addactivity = $this->model("activity_manage");
        $add=$addactivity->add_activity();
        $result=$addactivity->show_activity();
        $manage= $this->view("manage",$result);
        $this->view("alert",$add);
    }
    function addActivity() {
        $addactivity = $this->model("activity_manage");
        $add=$addactivity->add_activity();
        $manage= $this->view("addActivity",$add);
    }
    function select() {
        $manage= $this->view("select");
    }
    function visit() {
        $manage= $this->view("visit");
    }
    
    
}

?>
