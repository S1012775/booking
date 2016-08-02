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
    <link rel="stylesheet"	href="../views/css/seeActivity.css" />
       <!----------------↓彈出對話視窗JS------------------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!----------------↑彈出對話視窗JS------------------->
</head>

<body>
    <header id="" class="header">
        <div class="text-vertical-center">
        	<button class="seebutton" onclick="window.location.href='addActivity'" style="vertical-align:middle"><span>建立活動報名</span></button>
            <!--<a href="#addActivity" class="seebutton" style="vertical-align:middle" data-toggle="modal">建立活動報名</a>-->
            <!--<a href="#myModal" class="seebutton" style="vertical-align:middle" data-toggle="modal">報名人員清單</a>-->
        </div>
    </header>
     <!-----------------------↓彈出對話視窗表單------------------------------>
        <div id="addActivity" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="bs-example col-md-9 ">
                <form method="post">
                    <div class="table-title"><h3>新增活動</h3></div>
                    <div class="form-group">
                        <label >活動名稱</label>
                        <input type="text" class="form-control" name="add_activity" value="">
                    </div>
                    <div class="form-group">
                        <label >活動開始時間-結束</label>
                        <input type="datetime-local" class="form-control" name="starttime" value="">
                        <input type="datetime-local" class="form-control" name="endtime" value="">
                    </div>
                    <div class="form-group">
                        <label >活動地點</label>
                        <input type="text" class="form-control" name="location"value="">
                    </div>
                    <div class="form-group">
                        <label>是否可攜伴參加:</label><br>
                    <input type="radio" name="partner" value="yes"> 是<br>
  					<input type="radio" name="partner" value="no"> 否<br>
                     </div>
                     <div class="form-group">
                        <label>詳細內容</label><br />
                        <textarea name="content"></textarea>
                    </div>
                    <div class="form-group">
                        <label>人數限制</label><br />
                        <input type="text" class="form-control" name="limit_person"value="">
                    </div>
                    <input type="reset" class="addbutton" value="重新填寫表單">
                    <span class="pull-right">
                    <button type="button" class="addbutton" name="addActivity">確定新增活動</button></span>
                </form>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
        </div>
         <!-----------------------↑彈出對話視窗表單------------------------------>
 <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
      	<th><span>編號</span></th>
        <th><span>活動名稱</span></th>
        <th><span>人數設定</span></th>
        <th><span>瀏覽</span></th>
        <th><span>設定</span></th>
      </tr>
    </thead>
     <?php  foreach ($data as $value){  ?>
    <tbody>
      <tr>
        <td class="lalign"><?php echo $value[0] ?></td>
        <td><?php echo $value[1] ?></td>
        <td><?php echo $value[2] ?></td>
        <td>GO</td>
       <td>刪除</td>
      </tr>
     <?php }?>
    </tbody>
  </table>
   

   


   
  

  

</body>

</html>
