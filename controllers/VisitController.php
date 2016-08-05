<?php

class VisitController extends Controller {
    
    function visit() {
        // $manage= $this->view("visit");
         $addactivity = $this->model("activity_visit");
        $result=$addactivity->show_activity();
        $manage= $this->view("visit",$result);
    }
    function browse_activity(){
        if(isset($_GET['id'])){
        //檢視員工列表
        $browseid = $_GET['id']; 
        $browseactivity = $this->model("activity_visit");
        $browse=$browseactivity->browse_activity($browseid);
        $show=$browseactivity->show_memberList($browseid);
        $data[]= $browse;
        $data[]= $show;
        $manage= $this->view("sign_activity",$data);
        $add=$browseactivity->add_memberList($browseid);
        $this->view("alert",$add);
        
        }
    }
    function ajax($browseid){
         $browseactivity = $this->model("activity_visit");
         $browse=$browseactivity->browse_activity($browseid);
         $this->view("alert",$browse[0][8]);
    }
    
    
    
    
}

?>
