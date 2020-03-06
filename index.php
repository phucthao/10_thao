<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Phần mềm quản lý phòng khám</title>
	<script src="jquery/jquery.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript" ></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/style.css">
</head>
<body>
	<div class="container-fluid">
		<div class="col md-6 col-md-offset-4" style="background: red;">
			<div class="col-md-6" style="margin-top: 20%;">	
				<form role="form">
					<div class="form-group">
						<label for="Username">Tài khoản</label>
						<input type="username" class="form-control" id="" placeholder="">
					</div>
					<div class="form-group">
						<label for="">Mật khâu</label>
						<input type="password" class="form-control" id="" placeholder="">
					</div>
					<div class="form-group">
						<label>Quyền truy cập</label>
						<select class="form-control">
							<option>Quản trị viên</option>
							<option>Nhân viên</option>
						</select>
					</div>
					<button type="submit" class="btn btn-success">Đăng nhập</button>
				</form>	
			</div>
		</div>
	</div>
</body>
</html>