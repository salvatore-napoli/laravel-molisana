<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.1/css/all.css">
    <title>La Molisana</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  </head>
  <body>
    @include('common/header')

    <main class="main">
      <section class="pasta-category">
        <h2 class="pasta-title">le lunghe</h2>
        <div class="pasta flex">
          @foreach ($pastaArray as $key => $pasta_type)
            @if ($pasta_type['tipo'] === 'lunga')
            <div class="pasta-item">
              <a href="products/{{$key + 1}}">
                <img src="{{$pasta_type['src']}}" alt="tipo di pasta" />
              </a>
            </div>
            @endif
          @endforeach
        </div>
      </section>

      <section class="pasta-category">
        <h2 class="pasta-title">le corte</h2>
        <div class="pasta flex">
          @foreach ($pastaArray as $key => $pasta_type)
            @if ($pasta_type['tipo'] === 'corta')
            <div class="pasta-item">
              <a href="products/{{$key + 1}}">
                <img src="{{$pasta_type['src']}}" alt="tipo di pasta" />
              </a>
            </div>
            @endif
          @endforeach
        </div>
      </section>

      <section class="pasta-category">
        <h2 class="pasta-title">le cortissime</h2>
        <div class="pasta flex">
          @foreach ($pastaArray as $key => $pasta_type)
            @if ($pasta_type['tipo'] === 'cortissima')
            <div class="pasta-item">
              <a href="products/{{$key + 1}}">
                <img src="{{$pasta_type['src']}}" alt="tipo di pasta" />
              </a>
            </div>
            @endif
          @endforeach
        </div>
      </section>
    </main>

    @include('common/footer')
  </body>
</html>
