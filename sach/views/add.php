<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./style.css">
</head>
<body>
	<div class="container add">
		<div class="title">	
			<center ><h2>Thêm sinh viên</h2></center>
		</div>
		
		<form action="?page=<?php if(!isset($dataStudentByID) ) echo "doAdd"; else echo "doEdit" ?>" method="post">
			<div class="form-item">
				<label>Ma sinh vien : </label>
				<input type="text" name="msv" id="" value="<?php if(isset($dataStudentByID) ) echo $dataStudentByID['msv'] ?>">
			</div>

			<div class="form-item">
				<label>Tên : </label>
				<input type="text" name="ten" id="" value="<?php if(isset($dataStudentByID) ) echo $dataStudentByID['ten'] ?>">
			</div>


			<div class="form-item">
				<label>Tuổi : </label>
				<input type="number" name="tuoi" id="" min="18" max="70" value="<?php if(isset($dataStudentByID) ) echo $dataStudentByID['tuoi'] ?>">
			</div>

			<div class="form-item">
				<label>Quê quán : </label>
				<input type="text" name="quequan" id="" value="<?php if(isset($dataStudentByID) ) echo $dataStudentByID['quequan'] ?>">
			</div>

			<div class="form-item">
				<label>Giới tính : </label>
				<select name="gt">
					<option value="0" <?php if(isset($dataStudentByID) ) if($dataStudentByID['gt'] == 0 ) echo "selected" ?> >Nữ</option>
					<option value="1" <?php if(isset($dataStudentByID) ) if($dataStudentByID['gt'] == 1 ) echo "selected" ?> >Nam</option>
				</select>	
			</div>

			
			

			<?php if(!isset($dataStudentByID) ) : ?>
				<input type="submit" value="Them" name="btnAdd">
			<?php endif; ?>

			<?php if(isset($dataStudentByID) ) : ?>
				<input type="submit" value="sua" name="btnAdd">
			<?php endif; ?>



			<a href="?page=home"><input type="button" value="Huy"></a>


		</form>
		
	</div>
</body>
</html>
