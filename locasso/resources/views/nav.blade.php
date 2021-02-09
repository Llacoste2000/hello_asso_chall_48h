<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="pl-3"><img src="{{ asset('images/Logo.svg')}}"></div>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarColor01">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item {{ Route::current()->getName() == 'accueil.index' ? 'active' : '' }}">
				<a class="nav-link"  href="{{ route('accueil.index') }}">{{ __('Accueil') }}</a>
			</li>
			<li class="nav-item {{ Route::current()->getName() == 'search.index' ? 'active' : '' }}">
				<a class="nav-link"  href="{{ route('search.index') }}">{{ __('Recherche') }}</a>
			</li>
			<li class="nav-item {{ Route::current()->getName() == 'apropo.index' ? 'active' : '' }}">
				<a class="nav-link" href="{{ route('apropo.index') }}">{{ __('A propos') }}</a>
			</li>
		@guest
			<li class="nav-item {{ Route::current()->getName() == 'register' ? 'active' : '' }}">
				<button class="btn-primary"><a class="nav-link text-white" href="{{ route('register') }}">{{ __('Inscription') }}</a></button>
			</li>
			<li class="nav-item {{ Route::current()->getName() == 'login.index' ? 'active' : '' }}">
				 <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
			</li>
		@else
			<li class="nav-item {{ Route::current()->getName() == 'reversation.index' ? 'active' : '' }}">
				<a class="nav-link" href="{{ route('reversation.index') }}">{{ __('Mes réservations') }}</a>
			</li>
			<li class="nav-item {{ Route::current()->getName() == 'etablissement.index' ? 'active' : '' }}">
				<a class="nav-link" href="{{ route('etablissement.index') }}">{{ __('Mon établissement') }}</a>
			</li>
			<li class="nav-item {{ Route::current()->getName() == 'profil.index' ? 'active' : '' }}">
				<a class="nav-link" href="{{ route('profil.index') }}">{{ __('Mon profil') }}</a>
			</li>
			<li class="nav-item dropdown">
				<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
					{{ Auth::user()->name }} <span class="caret"></span>
				</a>

				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="{{ route('logout') }}"
						onclick="event.preventDefault();
										document.getElementById('logout-form').submit();">
						{{ __('Deconnexion') }}
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>	
				</div>
			</li>
		</ul>
		@endguest
	</div>
</nav>