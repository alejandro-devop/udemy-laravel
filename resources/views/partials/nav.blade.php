<nav>
	<ul>
		<li class="{{ setActive('home') }}"><a href="{{ route('home') }}">Home</a></li>
		<li class="{{ setActive('about') }}"><a href="{{ route('about') }}">About</a></li>
		<li class="{{ setActive('portfolio.*') }}"><a href="{{ route('portfolio.index') }}">Portfolio</a></li>
		<li class="{{ request()->routeIs('contact')? "active" : "" }}"><a href="{{ route('contact') }}">Contact</a></li>		
		@guest
			<li><a href="{{ route('login') }}">Login</a></li>
		@else
			<li>
				<a class="dropdown-item" href="{{ route('logout') }}"
	               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
	                {{ __('Logout') }}
	            </a>
			</li>
        	<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            	@csrf
        	</form>
		@endguest
	</ul>
</nav>