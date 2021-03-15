<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/products.css')}}">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.1/css/all.css">
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
				<a href="
					@if(($productId - 1) === 0)
						{{count($pastaArray)}}
					@else
						{{($productId - 1)}}
					@endif
					">
					<div class="prev-product">
						<i class="fas fa-chevron-left"></i>
					</div>
				</a>

				<a href="
				@if(($productId - 1) === (count($pastaArray) - 1))
					{{1}}
				@else
					{{($productId + 1)}}
				@endif
				">
					<div class="next-product">
						<i class="fas fa-chevron-right">
						</i>
					</div>
				</a>

				<img src="{{$pastaArray[$productId - 1]['src-p']}}" alt="package" />
			</div>

			<div class="product-description"> {!! $pastaArray[$productId - 1]['descrizione'] !!}</div>
		</main>

		@include('common/footer')
	</body>
</html>
