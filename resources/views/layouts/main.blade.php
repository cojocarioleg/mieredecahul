<!DOCTYPE html>
<html lang="ro">
@yield('head')
<body>
	<div id="wrapper">
		<section id="header-section">
			<div class="header">
				@yield('header-top')
				@yield('header')
			</div>
		</section>

    @yield('content')

@yield('footer')
