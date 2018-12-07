<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="container-info">
		<form action="?page=thems" method="post">
			<div class="form-item">
				<label >Tên sách</label>
				<input type="text" name="ten">
			</div>

			<div class="form-item">
				<label >Giá sách</label>
				<input type="number" name="gia" min="0">
			</div>

			<div class="form-item">
				<label >Nhà xuất bản sách</label>
				<input type="text" name="nxb">
			</div>
			
			<div class="form-item">
				<input type="submit" value="Thêm sách"> |
				<a href="?page=index">Quay lại</a>
			</div>

		</form>
	</div>
</body>
</html>