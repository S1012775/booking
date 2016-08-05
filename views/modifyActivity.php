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
</head>

<body>
    <header id="" class="header">
        <div class="text-vertical-center">
           <button class="seebutton" onclick="window.location.href='manage'" style="vertical-align:middle"><span>回管理頁面</span>
        </div>
    </header>
     <?php  foreach ($data as $value){  ?>
<form id="contact-form" method="POST" name="ContactForm">
    
    
    <p class="inputfield"><label>活動編號 :<?php echo $value[0] ?></label></p> 
    <p class="inputfield"><label>活動名稱</label></p> 
    <input type="text" class="form-control" name="activity_name" value="<?php echo $value[1] ?>">
    
    <p class="inputfield"><label>活動報名開始時間:<?php echo $value[2] ?>
    <input type="datetime-local" class="form-control" name="starttime" value="<?php echo $value[2] ?>"></label></p> 
    <p class="inputfield"><label>活動報名結束時間:<?php echo $value[3] ?>
    <input type="datetime-local" class="form-control" name="endtime" value="<?php echo $value[3] ?>"> </label></p> 
    		
    <p class="inputfield"><label>活動地點</label></p> 
    <input type="text" class="form-control" name="location"value="<?php echo $value[4] ?>">
    			 
    <p class="inputfield"><label>是否可攜伴參加:<?php echo $value[5] ?>	</label></p>
  	
  	<input type="radio" name="partner" value="可攜伴"> 是<br>
  	<input type="radio" name="partner" value="不可攜伴"> 否<br>
  	
  	<p class="inputfield"><label>詳細內容</label></p> 
    <textarea name="content"><?php echo $value[6] ?></textarea>
    			 
    <p class="inputfield"><label>人數限制:</label></p>
    <input type="number" class="form-control" name="limit_person"value="<?php echo $value[7] ?>" min="1" max="50">	
    <p>	
   
    <span class="pull-right">
    <button type="submit" class="addbutton" name="addActivity">確定修改活動</button>
    </span>
	</p>
	<?php } ?>
	 </form>
     
</body>

</html>
