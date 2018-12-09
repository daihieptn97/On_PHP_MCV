<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Them</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container-form">
		<div class="title">
			<h4>Danh sách truyện</h4>
		</div>
		<br>
		<form action="?page=<?php if(isset($dataTruyen)) echo "suas"; else echo "thems"; ?>" method="post">
			<input type="hidden" name="id" value="<?php if(isset($dataTruyen)) echo $dataTruyen['id'] ?>">
			<div class="form-item">
				<label >Tên truyện</label>
				<input type="text" name="ten" value="<?php if(isset($dataTruyen)) echo $dataTruyen['ten'] ?>" required>
			</div>

			<div class="form-item">
				<label >giá truyện</label>
				<input type="number" name="gia" min="0" value="<?php if(isset($dataTruyen)) echo $dataTruyen['gia'] ?>" required >
			</div>

			<div class="form-item">
				<label >tác giả truyện</label>
				<input type="text" name="tacgia" value="<?php if(isset($dataTruyen)) echo $dataTruyen['tacgia'] ?>">
			</div>

			<div class="form-item">
				<label >nhà xuát bản truyện</label>
				<input type="text" name="nxb" value="<?php if(isset($dataTruyen)) echo $dataTruyen['nxb'] ?>" required>
			</div>


			<div class="form-item">
				<label >năm xuất bản truyện</label>
				<input type="number" name="nam" min="1995" value="<?php if(isset($dataTruyen)) echo $dataTruyen['nam'] ?>" required>
			</div>


			<div class="form-item">
				<label >thời gian tạo</label>
				<input type="text" name="time_create" value="<?php if(isset($dataTruyen)) echo $dataTruyen['time_create']; else echo Date("Y-m-d");?>" readonly required>
			</div>


			<div class="form-item">
				<input type="submit" value="<?php if(isset($dataTruyen)) echo "Sửa thông tin truyện"; else echo "Thêm truyện";?>">
				|
				<a href="?page=index">Quay về</a>
			</div>
		</form>
	</div>
</body>
</html>