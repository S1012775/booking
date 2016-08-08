<?php

class activity_visit extends Connect {
    //檢視活動列表
    function show_activity(){
        $sql=("SELECT * FROM `add_activity`");
        $result = $this->db->prepare($sql);
        $result->execute();
        foreach($result as $row){
            $id=$row['id'];
            $name=$row['activity_name'];
            $limit_person=$row['limit_person'];
            $partner=$row['partner'];
            $arraylist[]=array("$id","$name","$limit_person","$partner");
        }
        return  $arraylist;
    }
     //瀏覽活動
    function browse_activity($browseid){
        $sql=("SELECT * FROM `add_activity` WHERE `id`='$browseid '");
        $result = $this->db->prepare($sql);
        $result->execute();
        foreach($result as $row){
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
    //員工列表
    function show_memberList($browseid){
        $sql=("SELECT * FROM `member_list`WHERE `joinid`='$browseid '");
        $result = $this->db->prepare($sql);
        $result->execute();
        foreach($result as $row){
            $id=$row['id'];
            $employeeID=$row['employeeID'];
            $employeeIDName=$row['employeeIDName'];
            $sgin=$row['sign'];
            $partner=$row['partner'];
            $arraymember[]=array("$id","$employeeID","$employeeIDName","$sgin","$partner");
        }
        return  $arraymember;
    }
    //員工報名
    function add_memberList($browseid,$employeeID,$partner){
          
        try{
        
        $this->db->beginTransaction();
        
        
        //搜尋可報名員工
        $employeeID=$_POST['employeeID'];
        $employeeIDName=$POST['employeeIDName'];
        $partner=$_POST['partner'];
        $sql=("SELECT * FROM `member_list` WHERE `joinid`='$browseid' && `employeeID`=':employeeID' && `sign`='未參加'");
        $result = $this->db->prepare($sql);
        $result->bindParam(':employeeID',$employeeID);
        $result->execute();
        $check= $result->rowCount();
        if($employeeID=="" && $employeeIDName=="" && $partner ==""){
            throw new Exception("不可有空白");
        }
        if ($check =0){
            throw new Exception("您沒有權限報名此活動");
        }
        
        
        sleep(3);
        //搜尋活動資訊
        $sql="SELECT * FROM `add_activity` WHERE `id` = $browseid FOR UPDATE";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        
        $people = $stmt->fetch();
        $quotapeople= $people['quotapeople'];
        $partner=$_POST['partner'];
        $employeeID=$_POST['employeeID'];
        
        //檢查剩餘人數
        if($quotapeople < 1  || (($quotapeople - ($partner+1))<0)){
            throw new Exception("超過可報名人數");
        }        
        
       
       //更新員工參加狀態
        $sql=("UPDATE`member_list` SET `sign`='已參加',`partner`=':partner' WHERE `employeeID`=':employeeID' && `joinid`='$browseid'  &&  `sign`='未參加'");
        $stmt =$this->db->prepare($sql);
        $stmt->bindParam(':partner',$partner);
        $stmt->bindParam(':employeeID',$employeeID);
        if (!$stmt->execute()){
            throw new Exception("不可重複報名");
        }
        
        //更新剩餘名額
        $sql="UPDATE `add_activity` SET `quotapeople` = quotapeople - (:partner+1) WHERE `id` = $browseid" ; 
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':partner', $partner);
        if(!$stmt->execute()){
            throw new Exception("報名失敗");
        }else{
            throw new Exception("報名成功");
        }
        
        $this->db->commit();
        
    }catch (Exception $err){
        $this->db->rollBack();
        $msg = $err->getMessage();
    } 
    return $msg;
    
            	
}  
   
 }
   

?>