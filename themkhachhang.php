<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script src="jquery/jquery.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript" ></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/style.css">
</head>
<body>
	<header>
		<div class="container-fluid" style="padding: 0;">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li style="padding: 0;"><a href="index.php">Trang Chủ</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Khách hàng <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="themkhachhang.php">Thêm KH</a></li>
									<li class="divider"></li>
									<li><a href="danhsachkhachhang.php">Danh sách KH</a></li>
									<li class="divider"></li>
									<li><a href="#">Tạo user KH</a></li>
								</ul>
							</li>
							<li><a href="#">Kho</a></li>
							<li><a href="#">Dịch vụ</a></li>
							<li><a href="#">Thống kê</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Quản lý <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Quản lý nhân viên</a></li>
									<li class="divider"></li>
									<li><a href="#">Quản lý kho</a></li>
									<li class="divider"></li>
									<li><a href="khachhangdangnhap.php">Vào Trang của Khách Hàng</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#">Welcome Admin!</a></li>
							<li><a href="#">Đăng xuất</a></li>
						</ul>	
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</div>
	</header>
	<div class="container">
		<div class="col-md-12 text-center">
			<h3 style="margin: 5px 0 30px 0; color:#bd0103;">THÊM KHÁCH HÀNG</h3>
		</div>
		<div class="col-md-6 col-md-offset-3">
			<div class="alert alert-warning" role="alert">
				Số điện thoại này đã được đăng ký!, vui lòng chuyển qua trang khám bệnh
				<a href="khambenh.php">tại đây</a>
			</div>
			<div class="form-group">
				<label>Số điện thoại</label>
				<input id="sodienthoai" type="text" class="form-control"  name='sodt' required >
			</div>
			<div id="form-info">
				<div class="form-group">
					<label>Họ và tên</label>
					<input type="text" class="form-control"  name="hovaten" required>
				</div>
				<div class="form-group">
					<label>Ngày sinh</label>
					<input type="text" class="form-control" placeholder="dd/mm/yyy" name="ngaysinh" required>
				</div>
				<div class="form-group">
					<label>Giới tính</label>
					<select class="form-control" name="gioitinh" style="width: 35%;">
						<option value="">Nam</option>
						<option value="">Nữ</option>
					</select>
				</div>
				<div class="form-group">
					<label>Số CMND</label>
					<input type="text" class="form-control"  name="socmnd" required>
				</div>
			</div>
			<button type="submit" class="center-block btn btn-success">Thêm khách hàng</button>
		</div>
	</div>
</body>
	
	
