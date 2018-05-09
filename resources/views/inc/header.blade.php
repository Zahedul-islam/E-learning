<!-- Fixed navbar -->
<div class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<!-- Button for smallest screens -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
			<a class="navbar-brand" href="/">
				<img src="/assets/images/logo.png" alt="Techro HTML5 template"></a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav pull-right mainNav">
				
				<li @if(Route::currentRouteName() == "home") class="active" @endif><a href="/">Home</a></li>

				<li @if(Route::currentRouteName() == "about") class="active" @endif><a href="/about">About</a></li>

				<li @if(Route::currentRouteName() == "courses") class="active" @endif><a href="/courses">Courses</a></li>

				<li @if(Route::currentRouteName() == "videos") class="active" @endif><a href="/videos">Videos</a></li>

				<li class="dropdown">
					<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Add Item <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="/class">Class</a></li>
						<li><a href="/subject">Subject</a></li>
						<li><a href="/content">Content</a></li>
						<li><a href="/post">Add Post</a></li>
					</ul>
				</li>

				<li @if(Route::currentRouteName() == "contact") class="active" @endif><a href="/contact">Contact</a></li>

				@if(Auth::check())
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
				<li><a href="/login">Login</a></li>
				@endif
			</ul>
		</div>
		<!--/.nav-collapse -->
	</div>
</div>