<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/main.css" >
    <title>HTML 5</title>
</head>
<body>
    <div id="interface">
        <header id="page-header">
            <?php include '../page-header.html'; ?>
        </header>

        <article><meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="../styles/main.css" >
        <link rel="stylesheet" href="../styles/layouts.css" >
        <style>

            header, section, aside, footer, .article-body {
                border: 1px solid;
            }

            #interface, .article-container{
                display: flex;
                flex-flow: row wrap;
            }

            #interface > *, .article-container > * {     /* regra aplicada a todos os subelementos dos seletores  */
                flex: 1 100%;
            }

            #sidebar nav ul li{
                display: inline;
            }

            @media all and (min-width: 800px) {
                .article-aside {
                    flex: 1;
                    order: 2;
                }
                .article-body {
                    flex: 4;
                    order: 1;
                }
                .article-footer {
                    order:3;
                }
            }

        </style>
<head>
    <meta charset="utf-8">
    <title>Programação para Internet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css" >
</head>
<body>
    <div id="interface">
        <header id="page-header">
            <h1>Programação para Internet</h1>
        </header>

        <nav id="side-menu">
            <h2>HTML 5</h2>
            <ul>
                <li><a href="html5/estrut-basica.html">Estrutura básica</a></li>
                <li><a href="html5/estrut-semantica.html">Elementos semânticos: exemplo</a></li>
                <br/>
                <li><a href="html5/exemploCharset.html">Conjunto de caracteres (charsets)</a></li>
                <li><a href="html5/trab.html">Elemento head</a></li>
                <li><a href="html5/wellinton.html">Elementos comuns</a></li>
                <li><a href="html5/links.html">Links</a></li>
                <li><a href="html5/tabelas.html">Tabelas</a></li>
                <li><a href="html5/listas.html">Listas</a></li>
                <li><a href="html5/iframe/iframe.html">Iframe</a></li>
                <li><a href="html5/audio.html">Áudio</a></li>
                <li><a href="html5/fernandaHTML/index.html">Video</a></li>


            </ul>
            <div id = text>

           <pre>

Á ------ &amp;Aacute;
á ------ &amp;aacute;
Â ------ &amp;Acirc;
â ------ &amp;acirc;
À ------ &amp;Agrave;
à ------  &amp;agrave;
Å ------ &amp;Aring;
å ------ &amp;aring;
Ã ------ &amp;Atilde;
ã ------ &amp;atilde;
Ä ------ &amp;Auml;
ä ------ &amp;auml;
Æ ------ &amp;AElig;
æ ------ &amp;aelig;
É ------ &amp;Eacute;
é ------ &amp;eacute;
Ê ------ &amp;Ecirc;
ê ------ &amp;ecirc;
È ------ &amp;Egrave;
è ------ &amp;egrave;
Ë ------ &amp;Euml;
ë ------ &amp;euml;
Ð ------ &amp;ETH;
ð ------ &amp;eth;
Í ------ &amp;Iacute;
í ------ &amp;iacute;
Î ------ &amp;Icirc;
î ------ &amp;icirc;
Ì ------ &amp;Igrave;
ì ------ &amp;igrave;
Ï ------ &amp;Iuml;
ï ------ &amp;iuml;
Ó ------ &amp;Oacute;
ó ------ &amp;oacute;
Ô ------ &amp;Ocirc;
ô ------ &amp;ocirc;
Ò ------ &amp;Ograve;
ò ------ &amp;ograve;
Ø ------ &amp;Oslash;
ø ------ &amp;oslash;
Õ ------ &amp;Otilde;
õ ------ &amp;otilde;
Ö ------ &amp;Ouml;
ö ------ &amp;ouml;
Ú ------ &amp;Uacute;
ú ------ &amp;uacute;
Û ------ &amp;Ucirc;
û ------ &amp;ucirc;
Ù ------ &amp;Ugrave;
ù ------ &amp;ugrave;
Ü ------ &amp;Uuml;
ü ------ &amp;uuml;
Ç ------ &amp;Ccedil;
ç ------ &amp;ccedil;
Ñ ------ &amp;Ntilde;
ñ ------ &amp;ntilde;
&lt; ------ &amp;lt;
&gt; ------ &amp;gt;
&amp; ------ &amp;amp;
" ------ &amp;quot;
® ------ &amp;reg;
© ------  &amp;copy;
Ý ------ &amp;Yacute;
ý ------ &amp;yacute;
Þ ------ &amp;THORN;
þ ------ &amp;thorn;
ß ------ &amp;szlig;

</pre>
</div>
            <h2>CSS 3</h2>
            <ul>
                <li><a href="../css3/ids-e-classes.html">IDs e Classes</a></li>
                <li><a href="../css3/seletores.html">Seletores</a></li>
                <li><a href="../css3/formatacao-texto.html">Formatação de texto</a></li>
                <li><a href="../css3/formatacao-imagem.html">Formatação de imagem</a></li>
            </ul>

            <h3>Layout</h3>
            <ul>
                <li><a href="../css3/display.html">Propriedade display</a></li>
                <li><a href="../css3/box-sizing.html">Propriedade box-sizing</a></li>
                <li><a href="../css3/position.html">Propriedade position</a></li>
                <li><a href="../css3/layout-position.html">Layout com position</a></li>
                <li><a href="../css3/float.html">Propriedade float</a></li>
                <li><a href="../css3/layout-float.html">Layout com float</a></li>
                <li><a href="../css3/layout-float-media-query.html">Layout com float e media query</a></li>
                <li><a href="../css3/layout-inline-block.html">Layout com inline-block</a></li>
                <li><a href="../css3/layout-flexbox.html">Layout com flexbox</a></li>
                <li><a href="../css3/layout-flexbox-media-query.html">Layout com flexbox e media query</a></li>
            </ul>

            <h2>Git</h2>
            <ul>
                <li><a href="../git/func-basico.html">Funcionamento básico</a></li>
                <li><a href="../git/ambiente-desenvolvimento.html">Ambiente de desenvolvimento</a></li>
                <li><a href="../git/atualizacao-repositorio.html">Passos para atualização do repositório original
                    (entrega dos trabalhos)</a></li>
            </ul>
        </nav>

    </div>
</body>
            <br>
        </article>

        <nav id="side-menu">
            <?php include 'side-menu-h.html'; ?>
        </nav>

        <footer id="page-footer">
            <?php include '../page-footer.html'; ?>
        </footer>
    </div>
</body>
</html>
