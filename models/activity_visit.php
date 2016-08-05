<?php

class activity_visit extends Connect {
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
    //員工報名
    function add_memberList($browseid){
        if (isset($_POST["sign_activity"])){
            //判斷是否可報名
            $employeeID=$_POST['employeeID'];
            $employeeIDName=$_POST['employeeIDName'];
            $partner=$_POST['partner'];
            $select=$this->db->query("SELECT * FROM `member_list` WHERE `joinid`='$browseid' &&`employeeID`='$employeeID' ");
            $data = $select->rowCount();
            if( $data!=0 &&$_POST['employeeID']!="" && $_POST['employeeIDName']!=""  ){
                $true=$this->db->query("UPDATE`member_list` SET`sign`='已參加',`partner`='$partner' WHERE `employeeID`='$employeeID' && `joinid`='$browseid'");
                // return "<script>alert('資料送出');</script>";
            }else{
                // return "<script>alert('不可有空白或沒有權限參加此活動喔!');</script>";
            	}
        //判斷剩餘名額    	
        try{
        
        $pdo->beginTransaction();
        $sql="SELECT * FROM `add_activity` WHERE id = :id FOR UPDATE";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $_POST['id']);
        $stmt->execute();
        $quotapeople = $stmt->fetch();
        
        sleep(5);
        if($quotapeople['quotapeople'] >= $_POST['partner']+1 ){
            $sql="UPDATE `add_activity` SET `quotapeople` = quotapeople - (:partner+1) WHERE id = :id" ; 
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $_POST['id']);
            $stmt->bindParam(':buyAmount', $_POST['partner'], PDO::PARAM_INT);
            $updateCount = $stmt->execute();
            
            if($updateCount > 0){
                $msg = '報名成功';
            }else{
                $msg = '報名失敗';
            }
        }else{
           throw new Exception("人數已滿");
        }
        
        
        
        $pdo->commit();
        
    }catch (Exception $err){
        $pdo->rollBack();
        $msg = $err->getMessage();
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