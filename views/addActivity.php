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
           
        </div>
    </header>
<form id="contact-form" method="POST" action="processForm.php" name="ContactForm">
    <h2> 新增活動</h2>
    <p class="inputfield"><label for="subject">活動名稱</label></p> 
    <input type="text" class="form-control" name="add_activity" value="">
    
    <p class="inputfield"><label for="message">活動開始時間-結束</label></p> 
    <input type="datetime-local" class="form-control" name="starttime" value="">
    <input type="datetime-local" class="form-control" name="endtime" value=""> 
    		
    <p class="inputfield"><label for="name">活動地點</label></p> 
    <input type="text" class="form-control" name="location"value="">
    			 
    <p class="inputfield"><label for="email">是否可攜伴參加</label></p>
    <input type="radio" name="partner" value="yes"> 是<br>
  	<input type="radio" name="partner" value="no"> 否<br>
  					
  	<p class="inputfield"><label for="email">詳細內容</label></p> 
    <textarea name="content"></textarea>
    			 
    <p class="inputfield"><label for="email">人數限制</label></p> 
    <input type="text" class="form-control" name="limit_person"value="">			 
    			
    <input type="reset" class="addbutton" value="重新填寫表單"><span class="pull-right">
    <button type="button" class="addbutton" name="addActivity">確定新增活動</button></span>
	 </form>
     
</body>

</html>
