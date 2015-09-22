<?php

$activeIfRoute = function ($item) use (&$route) {
	return $route['_name'] === $item ? 'class="active"' : '';
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My cars</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="/web/css/style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li <?php echo $activeIfRoute('home') ?>><a href="<?php //echo $getRoute('home')?>">Home</a></li>
                <li <?php echo $activeIfRoute('add_post') ?>><a href="/post/add<?php //echo $getRoute('add_post')?>">Add Post</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if (is_null($user)) { ?>
                    <li <?php echo $activeIfRoute('signin') ?>><a href="<?php //echo $getRoute('signin')?>">Sign in</a></li>
                    <li <?php echo $activeIfRoute('login') ?>><a href="<?php //echo $getRoute('login')?>">Login</a></li>
                <?php } else { ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-user"></i>
                            <?php echo 'Hello, '.$user->email ?> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li <?php echo $activeIfRoute('profile') ?>><a href="<?php //echo $getRoute('profile')?>">Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php //echo $getRoute('logout')?>">Logout</a></li>
                        </ul>
                    </li>

                <?php } ?>
            </ul>
        </div>
    </div>

	<!-- header -->
	<div class="row">
		<div class="col-lg-12 header"></div>
	</div>

	<!--menu-->
	<div class="row">
		<div class="col-lg-12">
            <?php //echo $menu; ?>
			<ul class="header-menu">
				<li class="header-menu__item"><a href="/" class="header-menu__link">Home</a></li>
				<li class="header-menu__item"><a href="/about" class="header-menu__link">About</a></li>
				<li class="header-menu__item"><a href="/portfolio" class="header-menu__link">Portfolio</a></li>
				<li class="header-menu__item"><a href="/contacts" class="header-menu__link">Contacts</a></li>
			</ul>
		</div>
	</div>

	<div class="row">
		<!-- categories -->
		<div class="col-lg-3 categories">
			<?php echo $categories; ?>
		</div>

		<!-- content -->
		<div class="col-lg-9">
			<?php echo $posts; ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 text-center">
			<p>© 2015 MaxHub, Inc</p>
		</div>
	</div>
</div> <!-- end container -->
</body>
</html>