@include('header')
  <main>
    
    <div class="prev">
      @if (($idProduct) == 1)
        <a href="/products/{{count($array)}}">
      @else
        <a href="/products/{{$idProduct - 1}}">
      @endif
        <i class="fas fa-chevron-left"></i>
      </a>
    </div>

    <div class="product-container">   
      <div class="pasta-title">
        {{ $array[$idProduct]['titolo'] }}
      </div>

      <img src="{{ $array[$idProduct]['src-h'] }}"> 
      <img src="{{ $array[$idProduct]['src-p'] }}"> 

      <div class="description-container">
        <div class="pasta-description">
          {!! $array[$idProduct]['descrizione'] !!} 
        </div>
      </div>
    </div>

    <div class="next">
      @if (($idProduct) == count($array))
        <a href="/products/1">
      @else
        <a href="/products/{{$idProduct + 1}}">
      @endif
        <i class="fas fa-chevron-right"></i>
      </a>
    </div>
  </main>
@include('includefooter')