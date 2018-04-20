
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>free-educational-responsive-web-template-webEdu</title>
	<link rel="favicon" href="images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css"> 
	<link rel="stylesheet" href="css/bootstrap-theme.css" media="screen"> 
	<link rel="stylesheet" href="css/style.css">
    <link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'> 
    <script type="text/javascript" src="js/jquery.min.js"></script>

</head>
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index">
					<img src="images/logo.png" alt="Techro HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li><a href="/">Home</a></li>
					<li><a href="about">About</a></li>
					<li><a href="courses">Courses</a></li>
					<li><a href="price">Price</a></li>
					<li><a href="videos">Videos</a></li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Add Item <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebarright">Right Sidebar</a></li>
							<li><a href="class">Class</a></li>
							<li><a href="subject">Subject</a></li>
							<li><a href="content">Content</a></li>
							<li><a href="post">Add Post</a></li>
						</ul>
					</li>
					<li><a href="contact">Contact</a></li>

					@if(Auth::user())
					<li>
						<a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
					@else
					<li><a href="login">Login</a></li>
					@endif
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>