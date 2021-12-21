<!DOCTYPE html>
<html lang="en">


@include('frontend.partials.head')


<body class="home">
	@include('frontend.partials.header')

@yield('content')

		@include('frontend.partials.footer')

		@include('frontend.partials.scripts')

</body>
</html>