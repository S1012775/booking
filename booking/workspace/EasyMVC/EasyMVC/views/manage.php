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
      
</head>

<body>
    <header id="" class="header">
        <div class="text-vertical-center">
        	<button class="seebutton" onclick="window.location.href='addActivity'" style="vertical-align:middle"><span>建立活動報名</span></button>
        </div>
    </header>
     
 <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
      	<th><span>編號</span></th>
        <th><span>活動名稱</span></th>
        <th><span>人數限制</span></th>
        <th><span>可否攜伴</span></th>
        <th><span>瀏覽</span></th>
        <th><span>修改</span></th>
        <th><span>設定</span></th>
      </tr>
    </thead>
     <?php  foreach ($data as $value){  ?>
    <tbody>
      <tr>
        <td class="lalign"><?php echo $value[0] ?></td>
        <td><?php echo $value[1] ?></td>
        <td><?php echo $value[2] ?></td>
        <td><?php echo $value[3] ?></td>
        <td><a href="browse_activity?id=<?php echo $value[0] ?>">GO</td>
        <td><a href="modify_activity?id=<?php echo $value[0] ?>">修改</td>
       <td><a href="delete_activity?id=<?php echo $value[0] ?>">刪除</td>
      </tr>
     <?php }?>
    </tbody>
  </table>
  <span class="pull-right">
<button class="addbutton" onclick="window.location.href='../Home/select'" style="vertical-align:middle"><span>回選單</span></button>  
   </sapn>

   


   
  

  

</body>

</html>
