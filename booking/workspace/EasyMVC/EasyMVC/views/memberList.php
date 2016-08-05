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
        	
        </div>
    </header>
 <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
      	<th><span>編號</span></th>
        <th><span>員工編號</span></th>
        <th><span>員工名稱</span></th>
      </tr>
    </thead>
     <?php  foreach ($data as $value){  ?>
    <tbody>
      <tr>
        <td class="lalign"><?php echo $value[0] ?></td>
        <td><?php echo $value[1] ?></td>
        <td><?php echo $value[2] ?></td>
        
      </tr>
     <?php }?>
    </tbody>
  </table>
    <div align="center">
        <form method="post">
            員工編號<input type="text" class="form-control" name="employeeID" value="">
            員工名稱<input type="text" class="form-control" name="employeeIDName" value="">
            <button type="submit" class="addbutton" name="addmember">新增</button>
        </form>
    </div>
   


   
  

  

</body>

</html>
