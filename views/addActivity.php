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
    <link rel="stylesheet"	href="../views/css/datetimepicker.css" />
    <link rel="stylesheet"	href="../views/css/datetimepicker.min.css" />
    <link rel="stylesheet"	href="../views/css/datetimepicker.css" />
    <link rel="stylesheet"	href="../views/css/datetimepicker.min.css" />
    <script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: "dd MM yyyy - hh:ii",
        autoclose: true,
        todayBtn: true,
        startDate: "2013-02-14 10:00",
        minuteStep: 10
    });
</script>    
</head>

<body>
    <header id="" class="header">
        <div class="text-vertical-center">
           <button class="seebutton" onclick="window.location.href='manage'" style="vertical-align:middle"><span>回管理頁面</span>
        </div>
    </header>
<form id="contact-form" method="POST" name="ContactForm">
    
    <p class="inputfield"><label>新增活動</label></p> 
    <p class="inputfield"><label for="subject">活動名稱</label></p> 
    <input type="text" class="form-control" name="activity_name" value="">
    
    <p class="inputfield"><label>活動報名開始時間
    <input type="datetime-local" class="form-control" name="starttime" value=""></label></p> 
    <p class="inputfield"><label>活動報名結束時間
    <input type="datetime-local" class="form-control" name="endtime" value=""> </label></p> 
    		
    <p class="inputfield"><label>活動報名地點</label></p> 
    <input type="text" class="form-control" name="location"value="">
    			 
    <p class="inputfield"><label >是否可攜伴參加</label></p>
    <input type="radio" name="partner" value="可攜伴"> 是<br>
  	<input type="radio" name="partner" value="不可攜伴"> 否<br>
  					
  	<p class="inputfield"><label >詳細內容</label></p> 
    <textarea name="content"></textarea>
    			 
    <p class="inputfield"><label>人數限制</label></p> 
    <input type="number" class="form-control" name="limit_person"value="" min="1" max="50">			 
    
    
    <input type="reset" class="addbutton" value="重新填寫表單">
    <span class="pull-right">
    <button type="submit" class="addbutton" name="addActivity">確定新增活動</button>
    </span>
	</p>
	 </form>
     
</body>

</html>
