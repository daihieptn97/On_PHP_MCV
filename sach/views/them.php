<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm sách</title>
</head>
<body>
	<div class="container-info">
		<form action="?page=<?php if(isset($sach)) echo "suas"; else echo "thems" ?>" method="post">
			<input type="hidden" name="id" value="<?php if(isset($sach)) echo $sach['id'] ?>">
			<div class="form-item">
				<label >Tên sách</label>
				<input type="text" name="ten" value="<?php if(isset($sach)) echo $sach['name'] ?>">
			</div>

			<div class="form-item">
				<label >Giá sách</label>
				<input type="number" name="gia" min="0" value="<?php if(isset($sach)) echo $sach['giasach'] ?>">
			</div>

			<div class="form-item">
				<label >Nhà xuất bản sách</label>
				<input type="text" name="nxb" value="<?php if(isset($sach)) echo $sach['nxb'] ?>">
			</div>
			
			<div class="form-item">
				<input type="submit" value="<?php if(isset($sach)) echo "Sửa thông tin sách"; else echo "Thêm sách" ?>"> |
				<a href="?page=index">Quay lại</a>
			</div>

		</form>
	</div>
</body>
</html>