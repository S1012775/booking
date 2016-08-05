<?php

class ManageController extends Controller {
    //管理頁面
    function manage() {
        $addactivity = $this->model("activity_manage");
        $result=$addactivity->show_activity();
        $manage= $this->view("manage",$result);
    }
    function addActivity() {
        $addactivity = $this->model("activity_manage");
        $add=$addactivity->add_activity();
        $manage= $this->view("addActivity");
        $this->view("alert",$add);
    }
    function modify_activity() {
        if(isset($_GET['id'])){
        $selectid = $_GET['id']; 
        $activity = $this->model("activity_manage");
        $modify=$activity->modifyshow_activity($selectid);
        $manage= $this->view("modifyActivity",$modify);
        $add=$activity->modify_activity($selectid);
        $this->view("alert",$add);
        }
    }
    function delete_activity() {
        if(isset($_GET['id'])){
        $deleteid = $_GET['id']; 
        $deleteactivity = $this->model("activity_manage");
        $modify=$deleteactivity->delete_activity($deleteid);
        }
    }
    function browse_activity(){
        if(isset($_GET['id'])){
        //檢視員工列表
        $browseid = $_GET['id']; 
        $browseactivity = $this->model("activity_manage");
        $browse=$browseactivity->browse_activity($browseid);
        $show=$browseactivity->show_memberList($browseid);
        $data[]= $browse;
        $data[]= $show;
        $manage= $this->view("browseActivity",$data);
        //新增名單
        $addmember= $this->model("activity_manage");
        $add=$addmember->add_memberList($browseid);
        $this->view("alert",$add);
        //檢視名單
        
        }
    }
}

?>
