@include('header')

<main>
  <div style="background-image:url({{asset('img/main.jpg')}})" class="container-main">
    <div class="centered-container">

      <div class="lunga">
        <h2>LE LUNGHE</h2>
        @foreach ($pastaArray as $key => $pasta)
          @if($pasta['tipo'] == "lunga") 
            <div class="pasta-container">
              <a href="/products/{{$key}}"><img src="{{$pasta['src']}}"></a>
            </div>
          @endif
        @endforeach
      </div>

      <div class="corta">
        <h2>LE CORTE</h2>
        @foreach ($pastaArray as $key => $pasta)
          @if($pasta['tipo'] == "corta") 
            <div class="pasta-container">
              <a href="/products/{{$key}}"><img src="{{$pasta['src']}}"></a>
            </div>
          @endif
        @endforeach
      </div>

      <div class="cortissima">
        <h2>LE CORTISSIME</h2>
        @foreach ($pastaArray as $key => $pasta)
          @if($pasta['tipo'] == "cortissima") 
            <div class="pasta-container">
              <a href="/products/{{$key}}"><img src="{{$pasta['src']}}"></a>
            </div>
          @endif
        @endforeach
      </div>
    </div>
  </div>
</main>

@yield('footer')
  

