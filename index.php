<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Star Foods</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Knewave&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
		
        .main {
            position: relative;
            background: url('dataimg/Abc.png') no-repeat center center;
            background-size: cover;
            height: 100vh;
            color: white;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            position: relative;
            z-index: 1;
        }
        .header .logo {
            font-size: 24px;
            font-weight: bold;
        }
        .header .log-reg a {
            color: white;
            margin-left: 20px;
            text-decoration: none;
        }
        .site-title {
            text-align: center;
            margin-top: 5%;
            position:relative;
            z-index: 1;
        }
        .site-title h1 {
            font-family: 'Knewave', cursive;
            font-size: 60px;
        }
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
			height: 10%;
            text-align: center;
            padding: 10px 0;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="overlay"></div>
        <div class="header">
            <div class="logo">
				<h1 style="font-size:large;"></h1>
			</div>
            <div class="log-reg">
                <?php if (isset($_SESSION['uid'])) { ?>
                    <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true">&nbsp;</i>Logout</a>
                    <a href="ulogin/account.php"><i class="fa fa-user" aria-hidden="true">&nbsp;</i><?php echo $data['name']; ?></a>
                <?php } else { ?>
                    <button class="btn btn-primary" style="background-color: olivedrab;">
					<a href="login.php" style="font-weight: 100;">Login</a>
					</button>
                <?php } ?>
            </div>
			
        </div>
        <div class="site-title">
            <h1>Welcome to Star Foods</h1>
            <p style="font-size: 18px; font-style: italic;">Promo Weekend Special 12.12</p>
            <p style="font-size: 18px; font-style: italic;">Open from 9:00am - 11:00pm</p>
            <p style="font-size: 18px; font-style: italic;">Location: 123 Kandy Road, Kurunagala</p>
        </div>
        <div class="footer" style="background-color: olivedrab;">
            <p>&copy; 2024 Star Foods. All Rights Reserved.</p>
        </div>
    </div>
    <script src="bootstrap/jss/jquery.min.js"></script>
    <script src="bootstrap/jss/popper.min.js"></script>
    <script src="bootstrap/jss/bootstrap.min.js"></script>
</body>
</html>
