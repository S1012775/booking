<?php

class activity_manage extends Connect {
    //檢視活動列表
    function show_activity(){
        $select = $this->db->query("SELECT * FROM `add_activity`");
        $data = $select->fetchAll(PDO::FETCH_ASSOC);
        foreach($data as $row){
            $id=$row['id'];
            $name=$row['activity_name'];
            $limit_person=$row['limit_person'];
            $partner=$row['partner'];
            $arraylist[]=array("$id","$name","$limit_person","$partner");
        }
        return  $arraylist;
    }
    //新增活動
    function add_activity(){
         if (isset($_POST["addActivity"])){
            $name=$_POST['activity_name'];
            $starttime=$_POST['starttime'];
            $endtime=$_POST['endtime'];
            $location=$_POST['location'];
            $partner=$_POST['partner'];
            $content=$_POST['content'];
            $limit_person=$_POST['limit_person'];
        if($_POST['activity_name']!="" ){
            $this->db->query("INSERT INTO `add_activity` (`activity_name`,`starttime`,`endtime`,`location`,`partner`,`content`,`limit_person`,`quotapeople`)VALUES('$name','$starttime','$endtime','$location','$partner','$content','$limit_person','$limit_person')");
            return "<script>alert('資料送出');</script>";
            header("location:manage");
        }else{
            return "<script>alert('不可有空白');</script>";
        	}
        }  
    }
    //檢視修改活動
    function modifyshow_activity($selectid){
        $select = $this->db->query("SELECT * FROM `add_activity` WHERE `id`='$selectid '");
        $data = $select->fetchAll(PDO::FETCH_ASSOC);
        foreach($data as $row){
            $id=$row['id'];
            $name=$row['activity_name'];
            $starttime=$row['starttime'];
            $endtime=$row['endtime'];
            $location=$row['location'];
            $partner=$row['partner'];
            $content=$row['content'];
            $limit_person=$row['limit_person'];
            $quotapeople=$row['quotapeople'];
            $arraybrowse[]=array("$id","$name","$starttime","$endtime","$location","$partner","$content","$limit_person","$quotapeople");
        }
        return  $arraybrowse;
        
    }
    //修改活動
    function modify_activity($selectid){
       if (isset($_POST["addActivity"])){
            $name=$_POST['activity_name'];
            $starttime=$_POST['starttime'];
            $endtime=$_POST['endtime'];
            $location=$_POST['location'];
            $partner=$_POST['partner'];
            $content=$_POST['content'];
            $limit_person=$_POST['limit_person'];
        if($_POST['activity_name']!="" ){
            $this->db->query("UPDATE `add_activity` SET `activity_name`='$name' ,`starttime`='$starttime',`endtime`='$endtime',`location`='$location',`partner`='$partner',`content`='$content',`limit_person`='$limit_person',`quotapeople`='$limit_person' WHERE id='$selectid'");
            return "<script>alert('資料送出');</script>";
            
        }else{
            return "<script>alert('不可有空白');</script>";
        	}
        }   
    }
    //刪除活動
    function delete_activity($deleteid){
    $this->db->query("DELETE FROM `add_activity` WHERE `id`='$deleteid'");
    if($deleteid){  
        header("location:manage");
    }
}
    //員工列表
    function show_memberList($browseid){
        $select = $this->db->query("SELECT * FROM `member_list`WHERE `joinid`='$browseid '");
        $data = $select->fetchAll(PDO::FETCH_ASSOC);
        foreach($data as $row){
            $id=$row['id'];
            $employeeID=$row['employeeID'];
            $employeeIDName=$row['employeeIDName'];
            $sgin=$row['sign'];
            $partner=$row['partner'];
            $arraymember[]=array("$id","$employeeID","$employeeIDName","$sgin","$partner");
        }
        return  $arraymember;
    }
    //新增員工
    function add_memberList($browseid){
        if (isset($_POST["addmember"])){
            $employeeID=$_POST['employeeID'];
            $employeeIDName=$_POST['employeeIDName'];
            if($_POST['employeeID']!="" && $_POST['employeeIDName']!=""){
                $this->db->query("INSERT INTO `member_list` (`employeeID`,`employeeIDName`,`joinid`,`sign`,`partner`)VALUES('$employeeID','$employeeIDName','$browseid','未參加','0')");
                return "<script>alert('資料送出');</script>";
            }else{
                return "<script>alert('不可有空白');</script>";
            	}
        }  
    }
    //瀏覽活動
    function browse_activity($browseid){
        $select = $this->db->query("SELECT * FROM `add_activity` WHERE `id`='$browseid '");
        $data = $select->fetchAll(PDO::FETCH_ASSOC);
        foreach($data as $row){
            $id=$row['id'];
            $name=$row['activity_name'];
            $starttime=$row['starttime'];
            $endtime=$row['endtime'];
            $location=$row['location'];
            $partner=$row['partner'];
            $content=$row['content'];
            $limit_person=$row['limit_person'];
            $whocanSign=$row['whocanSign'];
            $quotapeople=$row['quotapeople'];
            $arraybrowse[]=array("$id","$name","$starttime","$endtime","$location","$partner","$content","$limit_person","$quotapeople");
        }
        return  $arraybrowse;
        
    }



}

?>