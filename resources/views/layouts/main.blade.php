<!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
         @include('partials.head')
   </head>
  <body>
  
		@include('partials.navbar')

    <div class="w-full">
			@yield('container')
		</div>

		@include('partials.footer')
  
  </body>
</html>