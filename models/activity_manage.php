<?php

class activity_manage extends Connect {
    function add_activity(){
         if (isset($_POST["addActivity"])){
            $name=$row['activity_name'];
            $starttime=$row['starttime'];
            $endtime=$row['endtime'];
            $location=$row['location'];
            $partner=$row['partner'];
            $content=$row['content'];
            $limit_person=$row['limit_person'];
        //判斷是否為空值
        if($_POST['add_activity']!="" && $_POST['starttime']!=""&& $_POST['endtime']!=""&& $_POST['location']!=""&& $_POST['partner']!=""&& $_POST['content']!=""&& $_POST['limit_person']!=""){
        //將新增的品項寫進資料庫   
            $this->db->query("INSERT INTO `add_activity` (`activity_name`,`starttime`,`endtime`,`location`,`partner`,`content`,`limit_person`)VALUES('$name','$starttime','$endtime','$location','$partner','$content','$limit_person')");
            return "<script>alert('資料送出');</script>";
        }else{
            return "<script>alert('不可有空白');</script>";
        	}
    }  
    }
    function show_activity(){
        $select = $this->db->query("SELECT * FROM `add_activity`");
        $data = $select->fetchAll(PDO::FETCH_ASSOC);
        foreach($data as $row){
            $id=$row['id'];
            $name=$row['activity_name'];
            $limit_person=$row['limit_person'];
            $arraymoive[]=array("$id","$name","$limit_person");
        }
        return  $arraymoive;
        }
}

?>