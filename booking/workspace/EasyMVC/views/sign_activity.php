<?php 

?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Stylish Portfolio - Start Bootstrap Theme</title>
    <link href="../views/css/bootstrap.min.css" rel="stylesheet">
    <link href="../views/css/stylish-portfolio.css" rel="stylesheet">
    <link rel="stylesheet"	href="../views/css/selectButton.css" />
    <link rel="stylesheet"	href="../views/css/addActivity.css" />
    <link rel="stylesheet"	href="../views/css/seeActivity.css" />
</head>

<body>
    <header id="" class="header">
        <div class="text-vertical-center">
           <button class="seebutton" onclick="window.location.href='visit'" style="vertical-align:middle"><span>回活動列表</span>
        </div>
    </header>
    
     <?php  
     foreach ($data[0] as $value){
     ?>
<form id="contact-form" method="POST" name="ContactForm">
    
    
    <p class="inputfield"><label>活動編號 :<?php echo $value[0]?></label></p> 
    <p class="inputfield"><label>活動名稱 :<?php echo $value[1] ?></label></p>
    <p class="inputfield"><label>活動報名開始時間:<?php echo $value[2] ?>
    <p class="inputfield"><label></label>活動報名結束時間:<?php echo $value[3] ?>
    <p class="inputfield"><label>活動地點:<?php echo $value[4] ?></label></p>
    <p class="inputfield"><label>是否可攜伴參加:<?php echo $value[5] ?>	</label></p>
  	<p class="inputfield"><label>詳細內容:<?php echo $value[6] ?></label></p> 
    <p class="inputfield"><label>人數限制:<?php echo $value[7] ?></label></p>
    <p class="inputfield"><label>剩餘名額:<?php echo $value[8] ?></label></p>
	<?php } ?>
	
	
	 </form>
	<table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
      	<th><span>編號</span></th>
        <th><span>員工編號</span></th>
        <th><span>員工名稱</span></th>
        <th><span>參加狀態</span></th>
        <th><span>攜伴人數</span></th>
        
      </tr>
    </thead>
     <?php  foreach ($data[1] as $value){  ?>
    <tbody>
      <tr>
        <td class="lalign"><?php echo $value[0] ?></td>
        <td><?php echo $value[1] ?></td>
        <td><?php echo $value[2] ?></td>
        <td><?php echo $value[3] ?></td>
        <td><?php echo $value[4] ?></td>
      </tr>
     <?php }?>
    </tbody>
  </table>
  <div align="center">
        <form method="post">
            <h2>報名資料</h2>
            員工編號<input type="text" class="form-control" name="employeeID" value="">
            員工名稱<input type="text" class="form-control" name="employeeIDName" value="">
            <?php  foreach ($data[0] as $value){ 
                if($value[5]=="可攜伴"){?>
            攜伴人數:<input type="number" class="form-control" name="partner"value="" min="0" max="5">
  	        <?php }else{?>
  	         不可攜伴<input type="hidden" name="partner" value="0">
  	        <?php    
  	        
  	        }}?>
            <button type="submit" class="addbutton" name="sign_activity">報名</button>
        </form> 
    </div>  
</body>

</html>
