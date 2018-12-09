<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang chủ</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<div class="title">
			<h4>Danh sách truyện</h4>
		</div>
		<a href="?page=them">Thêm</a>
		<table width="100%">
			<thead>
				<tr>
					<th>ID</th>
					<th>Tên truyện</th>
					<th>Giá truyện</th>
					<th>Tác giả</th>
					<th>năm xuất bản</th>
					<th>nhà xuất bản</th>
					<th>Thời gian tạo</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php while($r = $dataHome->fetch_assoc() ): ?>
					<tr>
						<td><?= $r["id"] ?></td>
						<td><?= $r["ten"] ?></td>
						<td><?= $r["gia"] ?></td>
						<td><?= $r["tacgia"] ?></td>
						<td><?= $r["nam"] ?></td>
						<td><?= $r["nxb"] ?></td>
						<td><?= date_format(new Datetime($r["time_create"]), 'd-m-Y') ?></td>
						<td>
							<a href="?page=sua&id=<?= $r['id'] ?>">Sửa</a>
							|
							<a href="?page=xoa&id=<?= $r['id'] ?>" onclick="return confirm('ban co muon xoa khong ?')">Xoá</a>
						</td>
					</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>
</body>
</html>