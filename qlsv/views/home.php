<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
	
		<div class="title">	
			<center ><h2>Danh sách sinh viên</h2></center>
		</div>
		<div class="form-search">
			<form action="?page=search" method="post">
				<input type="search" name="search" id="" value="<?php if(isset($_POST['search'] ) ) echo $_POST['search'] ?>">
				<input type="submit" value="Tìm kiếm">
			</form>

			<a href="?page=add">
				<button>Thêm</button>
			</a>
			<a href="?page=home">
				<button>Home</button>
			</a>
		</div>

		<table >
			<thead>
				<tr>
					<th>STT</th>
					<th>MSV</th>
					<th>Tên</th>
					<th>Tuổi</th>
					<th>Quê quán</th>
					<th>Giới tính</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php $stt = 1 ?>
				<?php while($r = $dataHome->fetch_assoc() ): ?>
					<tr >
						<td><?= $stt ?></td>
						<td><?= $r['msv'] ?></td>
						<td><?= $r['ten'] ?></td>
						<td><?= $r['tuoi'] ?></td>
						<td><?= $r['quequan'] ?></td>
						<?php if($r['gt'] == 1) : ?>
							<td>Nam</td>
						<?php endif; ?>
						<?php if($r['gt'] == 0) : ?>
							<td>Nữ</td>
						<?php endif; ?>

						<td>
							<a href="?page=delete&id=<?= $r['msv'] ?>" onclick="return confirm('ban co muon xoa khong  ?')">xoa</a>
						</td>
						<td>
							<a href="?page=edit&id=<?= $r['msv'] ?>" >sua</a>
						</td>
					</tr>
					<?php $stt++; ?>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>
</body>
</html>

