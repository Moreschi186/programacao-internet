<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>SVG</title>
    <link rel="stylesheet" type="text/css" href="meuStilo.css" />
</head>

<body>

    <div class="flex-container">
        <header>
            <h1>SVG: Scalable Vetor Graphics</h1>
        </header>

        <nav class="nav">
            <ul>
                <li><a href="TarefaPI.html">Introdução</a></li>
                <li><a href="#">Exemplos</a></li>
                <li><a href="cssFonts3.html">Css Fontes</a></li>
                <li><a href="Referencias.html">Referências</a></li>
                
            </ul>
        </nav>

        <article class="article">
            <p><strong>EXEMPLOS: Seguem alguns exemplos de como esta ferramente &eacute; usada.
            </strong></p>
            <p>Círculo do Brasil:</p>


            <svg width="100" height="100">
  <circle cx="50" cy="50" r="40" stroke="green" stroke-width="4" fill="yellow" />
</svg>

            <p>Retângulo:</p>

            <svg width="400" height="100">
  <rect width="400" height="100" style="fill:rgb(0,0,255);stroke-width:10;stroke:rgb(0,0,0)" />
</svg>

            <p>Strela:</p>

            <svg width="300" height="200">
  <polygon points="100,10 40,198 190,78 10,78 160,198"
  style="fill:lime;stroke:purple;stroke-width:5;fill-rule:evenodd;" />
</svg>


            <p>Desenho mais complexo tipo WordArt:</p>

            <svg height="130" width="500">
  <defs>
    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
      <stop offset="0%" style="stop-color:rgb(255,255,0);stop-opacity:1" />
      <stop offset="100%" style="stop-color:rgb(255,0,0);stop-opacity:1" />
    </linearGradient>
  </defs>
  <ellipse cx="100" cy="70" rx="85" ry="55" fill="url(#grad1)" />
  <text fill="#ffffff" font-size="45" font-family="Verdana" x="50" y="86">SVG</text>
                
</svg>

        </article>

        <footer>@webmaster design</footer>
    </div>

</body>
</html>