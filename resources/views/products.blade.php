<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/products.css')}}">
    <title>La Molisana - Prodotti</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  </head>
  <body>
    @include('common/header')

		<main class="product-main flex">
			<h2 class="product-title">{{$pastaArray[$productId - 1]['titolo']}}</h2>

			<div class="pasta-view">
				<img src="{{$pastaArray[$productId - 1]['src-h']}}" alt="pasta" />
			</div>

			<div class="package-view">
				<img src="{{$pastaArray[$productId - 1]['src-p']}}" alt="package" />
			</div>

			<div class="product-description"> {!! $pastaArray[$productId - 1]['descrizione'] !!}</div>
		</main>

		@include('common/footer')
	</body>
</html>
