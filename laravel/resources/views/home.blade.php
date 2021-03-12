<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Molisana</title>
</head>
<body>

  <div id="app">

    <header>
      <div class="logo"> 
        <img src="{{asset('img/logo.png')}}">
      </div>
    </header>

    <nav>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/">Prodotti</a></li>
        <li><a href="/">News</a></li>
      </ul>
    </nav>

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

    <footer>
      <div class="logo"> 
          <img src="{{asset('img/logo.png')}}">
        </div>
      <div class="footer-container">

        <ul>
          <li>Ragione Sociale:La Molisana S.P.A</li>
          <li>Sede legale: Contrada Colle delle Alpi,100/A</li>
          <li>86100-Campobasso(CB)</li>
          <li>Pec:lamolisana@pec.it</li>
          <li>Tel:+39 0874 4981</li>
          <li>Fax: +39 0874 629584</li>
          <li>info@lamolisana.it(per segnalazioni degli utenti)</li>
          <li>commerciale@lamolisana.it</li>
          <li>export@lamolisana.it</li>
          <li>numero verde 8008198081</li>
          <li>telefono 3801292455</li>
        </ul>

        <div class="footer-center">

          <h3>PASTIFICIO</h3>
          <ul>
            <li>Il pastificio</li>
            <li>Grano decorticato a pietra</li>
            <li>Il Molise c'è</li>
            <li>Filiera Integrata</li>
            <li>100 anni di pasta</li>
            <li>Sartoria della pasta</li>
            <li>Spaghetto Quadrato</li>
            <li>Le persone</li>
          </ul>

          <h3>PRODOTTI</h3>
          <ul>
            <li>Le classiche</li>
            <li>Le integrali</li>
            <li>Le speciali</li>
            <li>Le biologiche</li>
            <li>Le gluten-Free</li>
            <li>Le Semole</li>
            <li>Le Extra di Lusso</li>
          </ul>

        </div>

        <div class="footer-right">

          <h3>COLLEZIONE DA CHEF</h3>
          <ul>
            <li>Collezione da chef</li>
            <li>Grandi cucine</li>
            <li>Biologiche</li>
            <li>Quadrate</li>
          </ul>

        </div>
      </div>
      <img src="{{asset('img/footer-bg.jpg')}}" style="width:100%">
    </footer>
 </div>
</body>
</html>
