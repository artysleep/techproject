
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
    <form role="form" method="POST" action="">
        <div class="form-group">
        	<label for="name">Name</label>
        	<input name=name  class="form-control" type="name" id="name"  placeholder="Введите имя">
        </div>
        <div class="form-group">
        	<label for="name">Text</label>
        	<input name=text  class="form-control" type="text" id="text"  placeholder="Введите текст">
        </div>
        <div class="checkbox">
  		<label><input type="checkbox"> Чекбокс</label>
 		</div>
 		<button type="submit" class="btn btn-success">Отправить</button>
    	</form>
    </div>
    <?php
    	include 'functions.php';	
		mysql_upload ($_POST[name],$_POST[text]);
	?>
	
	
    

</body>
</html>