<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="../images/favicon.png">
  <link rel="stylesheet" href="../styles/main.css">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Mandali" rel="stylesheet">
  <title>Seletores</title>
  <style>
    *{
      max-width: 100%;
    }

    a{
      text-decoration: none;
    }

    ul li a:hover{
      font-size: 20px;
      color: #f90056;
    }

    footer[class="pcenter"] a{
      display: block;
    }

    #page-header *, #page-footer *{
      font-family: 'Mandali', sans-serif;
    }

    #side-menu *, #artigo *:not(code){
      font-family: 'Muli', sans-serif;
    }

    #interface{
      display: flex;
      flex-flow: row wrap;
    }

    #interface > *{
      flex: 1 100%;
    }

    #artigo{
      padding: 8px;
    }

    #page-header, #artigo, #page-footer{
      font-size: 20px;
    }

    #page-header{
      background-image: linear-gradient(to bottom, #b3b3b3, white);
    }

    #side-menu{
      background-image: linear-gradient(to right, #b3b3b3, white);
    }

    #page-footer{
      background-image: linear-gradient(to top, #999999, white);
    }

    @media all and (min-width: 100px){
      #interface > *{
        flex: 100%;
      }
    }

    @media all and (min-width: 800px) {
      #side-menu{
        flex: 1;
      }
      #interface > section{
        flex: 4;
      }
    }

    /* Imagens */

    img{
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    img[alt^="caelum"]{
      width: 200px;
      height: 100px;
    }

    img[alt^="maujor"]{
      width: 150px;
      height: 150px;
    }

    /* Tabelas */

    table{
      width: 100%;
      text-align: left;
      border-collapse: collapse;
    }

    td, th{
      padding: 8px;
      border-bottom: 1px solid #cccccc;
    }

    th{
      background-color: #999999;
    }

    tr:hover{
      background-color:#cccccc;
    }

    /* Códigos */

    .codigo{
      background-color: #272822;
      padding: 10px;
    }

    .amarelo{
      color: #e6d95c;
    }
    
    .azul{
      color: #66d9ef;
    }

    .branco{
      color: #ffffff;
    }

    .cinza, h1 + h4, #interface > header > h1, #interface > nav > h2, #interface > nav > h3, #interface > footer > p{
      color: #757150;
    }

    .rosa, p > strong, #artigo > header > h1{
      color: #f90056;
    }

    .roxo{
      color: #ae81ff;
    }

    .verde{
      color: #95dd07;
    }
  </style>
</head>
<body>
  <div id="interface">
    <header id="page-header">
      <?php include '../page-header.html'; ?>
    </header>
    
    <nav id="side-menu">
      <?php include '../side-menu.html'; ?>
    </nav>
    
    <section>
    	<div id="artigo">
  	    <header class="pcenter">
  	      <h1 class="pcenter">Seletores, combinados e seletores de atributos</h1>
  	      <h4 class="pcenter">
  	        Definindo propriedades a um id, grupo de tags ou de classes.
  	      </h4>
  	    </header>
  	    
  	    <hr>
  	    
  	    <section>
  	      <article>
  	        <h2>1. Sintaxe</h2>
  	        <p>O esqueleto de uma regra css é definida por:</p>

  	        <div class="codigo">
  	          <code class="rosa">[seletor]</code>
  	          <code class="branco">{</code>
  	          <br>
  	          <code class="azul">&nbsp;&nbsp;[propriedade]</code>
  	          <code class="branco">=</code>
  	          <code class="roxo">[valor da propriedade]</code><code class="branco">;</code>
  	          <br>
  	          <code class="branco">}</code>
  	        </div>
  	      </article>
  	      
  	      <hr>
  	      
  	      <article>
  	        <h2>2. Seletores</h2>
  	          <p>
  	            Os seletores podem aplicam propriedades a um ou mais elementos, sendo aplicadas também a todos os elementos inferiores, ou seja, elementos internos a um elemento (herança).
  	          </p>

  	          <article>
  	            <h3>2.1 Seletor universal</h3>
  	            <p>
  	              Este seletor pode ser utilizado para aplicar um conjunto de propriedades em todas as tags html. É representado pelo caractere <strong>"*"</strong>. Exemplo:
  	            </p>

  	            <div class="codigo">
  	              <code class="rosa">*</code>
  	              <code class="branco">{</code>
  	              <br>
  	              <code class="azul">&nbsp;&nbsp;font-family</code><code class="branco">:</code>
  	              <code class="amarelo">Arial</code><code class="branco">,</code>
  	              <code class="azul">sans-serif</code><code class="branco">;<br>}</code>
  	            </div>
  	          </article>

  	          <article>
  			        <h3>2.2 Seletor tipo</h3>
  			        <p>
  	              Pode ser utilizado para aplicar um conjunto de propriedades somente em tags iguais ao seletor. Exemplo:
  	            </p>
  			        
  			        <div class="codigo">
  			          <code class="rosa">body</code>
  			          <code class="branco">{</code>
  			          <br>
  			          <code class="azul">&nbsp;&nbsp;background-color</code><code class="branco">:</code>
  	              <code class="roxo">#dddddd</code><code class="branco">;<br>}</code>
  	              <br>
  	              <br>
  	              <code class="cinza">&lt;!-- No HTML --></code>
  	              <br>
  	              <code class="branco"><</code><code class="rosa">body</code><code class="branco">></code>
  	              <br>
  	              <code class="cinza">&nbsp;&nbsp;&lt;!-- Outras tags e texto --></code>
  	              <br>
  	              <code class="branco">&lt;/</code><code class="rosa">body</code><code class="branco">></code>
  			        </div>
  			      </article>
  			      
  			      <article>
  			        <h3>2.3 Seletor de ID</h3>
  			        <p>
  	              Ele é utilizado para aplicar um conjunto de propriedades a um elemento. É representado pelo caractere <strong>"#"</strong>, além do valor do ID. Exemplo:
  	            </p>
  			        
  			        <div class="codigo">
  	              <code class="verde">#interface</code>
  	              <code class="branco">{</code>
  	              <br>
  	              <code class="azul">&nbsp;&nbsp;font-size</code><code class="branco">:</code>
  	              <code class="roxo">20</code><code class="rosa">px</code><code class="branco">;</code>
  	              <br>
  	              <code class="branco">}</code>
  	              <br>
  	              <br>
  	              <code class="cinza">&lt;!-- No HTML --></code>
  	              <br>
  	              <code class="branco"><</code><code class="rosa">div</code>
  	              <code class="verde">id</code><code class="branco">=</code><code class="amarelo">"interface"</code><code class="branco">></code>
  	              <br>
  	              <code class="cinza">&nbsp;&nbsp;&lt;!-- Outras tags e texto --></code>
  	              <br>
  	              <code class="branco">&lt;/</code><code class="rosa">div</code><code class="branco">></code>
  	            </div>
  	          </article>

  	          <article>
  	            <h3>2.4 Seletor de classe</h3>
  	            <p>
  	              Muito utilizado quando necessita-se aplicar um conjunto de propriedades a qualquer elemento, quantos forem necessários. É representado pelo caractere <strong>"."</strong> mais o valor da classe. Exemplo:
  	            </p>

  	            <div class="codigo">
  	              <code class="verde">.branco</code>
  	              <code class="branco">{</code>
  	              <br>
  	              <code class="azul">&nbsp;&nbsp;color</code><code class="branco">:</code>
  	              <code class="roxo">#ffffff</code><code class="branco">;</code>
  	              <br>
  	              <code class="branco">}</code>
  	              <br>
  	              <br>
  	              <code class="cinza">&lt;!-- No HTML --></code>
  	              <br>
  	              <code class="branco"><</code><code class="rosa">code</code>
  	              <code class="verde">class</code><code class="branco">=</code><code class="amarelo">"branco"</code><code class="branco">></code>
  	              <br>
  	              <code class="cinza">&nbsp;&nbsp;&lt;!-- Outras tags e texto --></code>
  	              <br>
  	              <code class="branco">&lt;/</code><code class="rosa">code</code><code class="branco">></code>
  	            </div>
  	          </article>
  			    </article>
  	        
  	        <hr>

  	        <article>
  	          <h2>3. Seletores combinados</h2>
  	          <p>
  	            Existem seletores simples e os combinados, sendo possível criar regras css específicas.
  	          </p>
  	          
  	          <article>
  	            <h3>3.1 Seletor filho</h3>
  	            <p>
  	              Para aplicar um conjunto de propriedades a somente uma ou mais tags filhas iguais pode ser aplicado este seletor. Sua representação é dada pelo caractere <strong>">"</strong> entre dois seletores (seletor pai à esquerda e filho à direita). Exemplo:
  	            </p>

  	            <div class="codigo">
  	              <code class="rosa">p</code>
  	              <code class="branco">></code>
  	              <code class="rosa">strong</code>
  	              <code class="branco">{</code>
  	              <code class="cinza">/* p é o seletor pai e strong o filho */</code>
  	              <br>
  	              <code class="azul">&nbsp;&nbsp;color</code><code class="branco">:</code>
  	              <code class="roxo">#f90056</code><code class="branco">;</code>
  	              <br>
  	              <code class="branco">}</code>
  	              <br>
  	              <br>
  	              <code class="cinza">&lt;!-- No HTML --></code>
  	              <br>
  	              <code class="branco"><</code><code class="rosa">p</code><code class="branco">></code>
  	              <br>
  	              <code class="branco">&nbsp;&nbsp;[...] caractere <</code><code class="rosa">strong</code><code class="branco">></code><code class="branco">">"&lt;/</code><code class="rosa">strong</code><code class="branco">></code>
  	              <code class="branco">entre dois seletores.</code>
  	              <br>
  	              <code class="branco">&lt;/</code><code class="rosa">p</code><code class="branco">></code>
  	            </div>
  	          </article>

  	          <article>
  	            <h3>3.2 Seletor descendente</h3>
  	            <p>
  	              Muito semelhante ao funcionamento seletor filho, difere na sintaxe - sendo utilizado o caractere <strong>" "</strong> (espaço) entre dois seletores. O seletor filho também é descendente, mas o seletor descentende engloba tanto filhos quanto netos, bisnetos, etc netos. Esta é a grande diferença. Exemplo:
  	            </p>

  	            <div class="codigo">
  	              <code class="rosa">ul</code>
  	              <code class="rosa">li</code>
  	              <code class="branco">{</code>
  	              <code class="cinza">/* ul é o seletor superior e li o inferior. confuso, não? */</code>
  	              <br>
  	              <code class="azul">&nbsp;&nbsp;display</code><code class="branco">:</code>
  	              <code class="azul">inline</code><code class="branco">;</code>
  	              <br>
  	              <code class="branco">}</code>
  	              <br>
  	              <br>
  	              <code class="cinza">&lt;!-- No HTML --></code>
  	              <br>
  	              <code class="branco"><</code><code class="rosa">ul</code><code class="branco">></code>
  	              <br>
  	              <code class="branco">&nbsp;&nbsp;<</code><code class="rosa">li</code><code class="branco">></code>
  	              <br>
  	              <code class="cinza">&nbsp;&nbsp;&nbsp;&nbsp;&lt;!-- Outras tags e texto --></code>
  	              <br>
  	              <code class="branco">&nbsp;&nbsp;&lt;/</code><code class="rosa">li</code><code class="branco">></code>
  	              <br>
  	              <code class="branco">&lt;/</code><code class="rosa">ul</code><code class="branco">></code>
  	            </div>
  	          </article>

  	          <article>
  	            <h3>3.3 Seletor irmão adjacente</h3>
  	            <p>
  	              Usado quando necessita-se aplicar propriedades a um elemento subsequente da mesma hierarquia sendo obrigatoriamente o próximo. Sua sintaxe é representada por um caractere <strong>"+"</strong> entre dois seletores irmãos. Exemplo:
  	            </p>

  	            <div class="codigo">
  	              <code class="rosa">a</code>
  	              <code class="branco">+</code>
  	              <code class="rosa">p</code>
  	              <code class="branco">{</code>
  	              <code class="cinza">/* o seletor a é o primeiro irmão e p é o segundo */</code>
  	              <br>
  	              <code class="azul">&nbsp;&nbsp;text-align</code><code class="branco">:</code>
  	              <code class="azul">center</code><code class="branco">;</code>
  	              <br>
  	              <code class="branco">}</code>
  	              <br>
  	              <br>
  	              <code class="cinza">&lt;!-- No HTML --></code>
  	              <br>
  	              <code class="branco"><</code><code class="rosa">a</code>
  	              <code class="verde">href</code><code class="branco">=</code><code class="amarelo">"https://www.w3schools.com/"</code><code class="branco">></code><code class="branco">CSS</code><code class="branco">&lt;/</code><code class="rosa">a</code><code class="branco">></code>
  	              <br>
  	              <code class="branco"><</code><code class="rosa">p</code><code class="branco">></code><code class="branco">#CSTADS - 2017</code><code class="branco">&lt;/</code><code class="rosa">p</code><code class="branco">></code>
  	              <code class="cinza">&lt;!-- Irmão mais próximo de a --></code>
  	              <br>
  	              <code class="branco"><</code><code class="rosa">hr</code><code class="branco">></code>
  	              <code class="cinza">&lt;!-- Segundo irmão mais próximo de a --></code>
  	            </div>
  	          </article>

  	          <article>
  	            <h3>3.4 Seletor irmão geral</h3>
  	            <p>
  	              Usado quando necessita-se aplicar propriedades a um elemento subsequente da mesma hierarquia não sendo necessariamente o próximo. Sua sintaxe é representada por um caractere <strong>"~"</strong> entre dois seletores irmãos. Exemplo:
  	            </p>

  	            <div class="codigo">
  	              <code class="rosa">a</code>
  	              <code class="branco">~</code>
  	              <code class="rosa">p</code>
  	              <code class="branco">{</code>
  	              <code class="cinza">/* o seletor a é um irmão que está antes do irmão p */</code>
  	              <br>
  	              <code class="azul">&nbsp;&nbsp;text-align</code><code class="branco">:</code>
  	              <code class="azul">center</code><code class="branco">;</code>
  	              <br>
  	              <code class="branco">}</code>
  	              <br>
  	              <br>
  	              <code class="cinza">&lt;!-- No HTML --></code>
  	              <br>
  	              <code class="branco"><</code><code class="rosa">a</code>
  	              <code class="verde">href</code><code class="branco">=</code><code class="amarelo">"https://www.w3schools.com/"</code><code class="branco">></code><code class="branco">CSS</code><code class="branco">&lt;/</code><code class="rosa">a</code><code class="branco">></code>
  	              <br>
  	              <code class="branco"><</code><code class="rosa">hr</code><code class="branco">></code>
  	              <code class="cinza">&lt;!-- Irmão mais próximo de a --></code>
  	              <br>
  	              <code class="branco"><</code><code class="rosa">p</code><code class="branco">></code><code class="branco">#CSTADS - 2017</code><code class="branco">&lt;/</code><code class="rosa">p</code><code class="branco">></code>
  	              <code class="cinza">&lt;!-- Segundo irmão mais próximo de a --></code>
  	            </div>
  	          </article>
  	        </article>

  	        <hr>

  	        <article>
  	          <h2>4. Seletores de atributo</h2>
  	          <p>
  	            Existem diversas formas de se fazer uma formatação específica em um texto html. Uma destas formas possibilita filtrar tags por seus atributos. 
  	          </p>

  	          <article>
  	            <h3>4.1 Presença de um atributo</h3>
  	            <p>
  	              A regra css se aplicará somente em tags que usam determinado atributo. Na sintaxe, adiciona-se o atributo entre <strong>"[]"</strong> (colchetes) após o seletor. Exemplo:
  	            </p>

  	            <div class="codigo">
  	              <code class="rosa">img</code><code class="branco">[</code><code class="verde">alt</code><code class="branco">]</code>
  	              <code class="branco">{</code>
  	              <br>
  	              <code class="azul">&nbsp;&nbsp;text-align</code><code class="branco">:</code>
  	              <code class="azul">center</code><code class="branco">;</code>
  	              <br>
  	              <code class="branco">}</code>
  	              <br>
  	              <br>
  	              <code class="cinza">&lt;!-- No HTML --></code>
  	              <br>
  	              <code class="branco"><</code><code class="rosa">img</code>
  	              <code class="verde">src</code><code class="branco">=</code><code class="amarelo">"images/css3.png"</code>
  	              <code class="verde">alt</code><code class="branco">=</code><code class="amarelo">"css3.png"</code><code class="branco">></code>
  	              <br>
  	              <code class="branco"><</code><code class="rosa">img</code>
  	              <code class="verde">src</code><code class="branco">=</code><code class="amarelo">"images/css3.png"</code><code class="branco">></code>
  	              <code class="cinza">&lt;!-- Não será aplicada --></code>
  	            </div>
  	          </article>

  	          <article>
  	            <h3>4.2 Valor de um atributo</h3>
  	            <p>
  	              A regra css se aplicará somente em tags que usam determinado atributo com um determinado valor. Na sintaxe, adiciona-se o caractere <strong>"="</strong> após o atributo, além do valor do atributo entre aspas. Exemplo:
  	            </p>

  	            <div class="codigo">
  	              <code class="rosa">img</code><code class="branco">[</code><code class="verde">alt</code><code class="branco">=</code><code class="amarelo">"css3.png"</code><code class="branco">]</code>
  	              <code class="branco">{</code>
  	              <br>
  	              <code class="azul">&nbsp;&nbsp;text-align</code><code class="branco">:</code>
  	              <code class="azul">center</code><code class="branco">;</code>
  	              <br>
  	              <code class="branco">}</code>
  	              <br>
  	              <br>
  	              <code class="cinza">&lt;!-- No HTML --></code>
  	              <br>
  	              <code class="branco"><</code><code class="rosa">img</code>
  	              <code class="verde">src</code><code class="branco">=</code><code class="amarelo">"images/css3.png"</code>
  	              <code class="verde">alt</code><code class="branco">=</code><code class="amarelo">"css3.png"</code><code class="branco">></code>
  	              <br>
  	              <code class="branco"><</code><code class="rosa">img</code>
  	              <code class="verde">src</code><code class="branco">=</code><code class="amarelo">"images/css3.jpg"</code>
  	              <code class="verde">alt</code><code class="branco">=</code><code class="amarelo">"css3.jpg"</code><code class="branco">></code>
  	              <code class="cinza">&lt;!-- Não será aplicada --></code>
  	            </div>
  	          </article>

  	          <article>
  	            <h3>4.3 Valor de um atributo contido em uma lista de valores separados por espaço </h3>
  	            <p>
  	              Podem ocorrer situações de um atributo ter mais de um valor. Com este seletor, a regra css se aplicará somente em tags que usam determinado atributo com determinado valor mesmo estando em uma lista de valores separados por espaço. Na sintaxe, adiciona-se o caractere <strong>"~"</strong> antes do caractere <strong>"="</strong>. Exemplo:
  	            </p>

  	            <div class="codigo">
  	              <code class="rosa">div</code><code class="branco">[</code><code class="verde">class</code><code class="branco">~=</code><code class="amarelo">"justificado"</code><code class="branco">]</code>
  	              <code class="branco">{</code>
  	              <br>
  	              <code class="azul">&nbsp;&nbsp;text-align</code><code class="branco">:</code>
  	              <code class="azul">justify</code><code class="branco">;</code>
  	              <br>
  	              <code class="branco">}</code>
  	              <br>
  	              <br>
  	              <code class="cinza">&lt;!-- No HTML --></code>
  	              <br>
  	              <code class="branco"><</code><code class="rosa">div</code>
  	              <code class="verde">class</code><code class="branco">=</code><code class="amarelo">"justificado"</code><code class="branco">></code>
  	              <br>
  	              <code class="branco"><</code><code class="rosa">div</code>
  	              <code class="verde">class</code><code class="branco">=</code><code class="amarelo">"justificado rosa"</code><code class="branco">></code>
  	              <code class="cinza">&lt;!-- Também será aplicada --></code>
  	            </div>
  	          </article>

  	          <article>
  	            <h3>4.4 Valor de um atributo inicia com string</h3>
  	            <p>
  	              A regra css se aplicará somente em tags que usam determinado atributo com um determinado valor que começa com determinada string. Na sintaxe, adiciona-se o caractere <strong>"^"</strong> antes do caractere <strong>"="</strong>. Exemplo:
  	            </p>

  	            <div class="codigo">
  	              <code class="rosa">img</code><code class="branco">[</code><code class="verde">alt</code><code class="branco">^=</code><code class="amarelo">"css3"</code><code class="branco">]</code>
  	              <code class="branco">{</code>
  	              <br>
  	              <code class="azul">&nbsp;&nbsp;text-align</code><code class="branco">:</code>
  	              <code class="azul">center</code><code class="branco">;</code>
  	              <br>
  	              <code class="branco">}</code>
  	              <br>
  	              <br>
  	              <code class="cinza">&lt;!-- No HTML --></code>
  	              <br>
  	              <code class="branco"><</code><code class="rosa">img</code>
  	              <code class="verde">src</code><code class="branco">=</code><code class="amarelo">"images/css3.png"</code>
  	              <code class="verde">alt</code><code class="branco">=</code><code class="amarelo">"css3.png"</code><code class="branco">></code>
  	              <br>
  	              <code class="branco"><</code><code class="rosa">img</code>
  	              <code class="verde">src</code><code class="branco">=</code><code class="amarelo">"images/css.png"</code>
  	              <code class="verde">alt</code><code class="branco">=</code><code class="amarelo">"css.png"</code><code class="branco">></code>
  	              <code class="cinza">&lt;!-- Não será aplicada --></code>
  	            </div>
  	          </article>

  	          <article>
  	            <h3>4.5 Valor de um atributo termina com string</h3>
  	            <p>
  	              A regra css se aplicará somente em tags que usam determinado atributo com um determinado valor que termina com determinada string. Na sintaxe, adiciona-se o caractere <strong>"$"</strong> antes do caractere <strong>"="</strong>. Exemplo:
  	            </p>

  	            <div class="codigo">
  	              <code class="rosa">img</code><code class="branco">[</code><code class="verde">alt</code><code class="branco">$=</code><code class="amarelo">".png"</code><code class="branco">]</code>
  	              <code class="branco">{</code>
  	              <br>
  	              <code class="azul">&nbsp;&nbsp;text-align</code><code class="branco">:</code>
  	              <code class="azul">center</code><code class="branco">;</code>
  	              <br>
  	              <code class="branco">}</code>
  	              <br>
  	              <br>
  	              <code class="cinza">&lt;!-- No HTML --></code>
  	              <br>
  	              <code class="branco"><</code><code class="rosa">img</code>
  	              <code class="verde">src</code><code class="branco">=</code><code class="amarelo">"images/css3.png"</code>
  	              <code class="verde">alt</code><code class="branco">=</code><code class="amarelo">"css3.png"</code><code class="branco">></code>
  	              <br>
  	              <code class="branco"><</code><code class="rosa">img</code>
  	              <code class="verde">src</code><code class="branco">=</code><code class="amarelo">"images/css3.jpg"</code>
  	              <code class="verde">alt</code><code class="branco">=</code><code class="amarelo">"css3.jpg"</code><code class="branco">></code>
  	              <code class="cinza">&lt;!-- Não será aplicada --></code>
  	            </div>
  	          </article>

  	          <article>
  	            <h3>4.6 Valor de um atributo inicia com string mais hífen</h3>
  	            <p>
  	              A regra css se aplicará somente em tags que usam determinado atributo com um determinado valor que inicia com string mais hífen. Na sintaxe, adiciona-se o caractere <strong>"|"</strong> antes do caractere <strong>"="</strong>. Exemplo:
  	            </p>

  	            <div class="codigo">
  	              <code class="rosa">img</code><code class="branco">[</code><code class="verde">alt</code><code class="branco">|=</code><code class="amarelo">"css3"</code><code class="branco">]</code>
  	              <code class="branco">{</code>
  	              <br>
  	              <code class="azul">&nbsp;&nbsp;text-align</code><code class="branco">:</code>
  	              <code class="azul">center</code><code class="branco">;</code>
  	              <br>
  	              <code class="branco">}</code>
  	              <br>
  	              <br>
  	              <code class="cinza">&lt;!-- No HTML --></code>
  	              <br>
  	              <code class="branco"><</code><code class="rosa">img</code>
  	              <code class="verde">src</code><code class="branco">=</code><code class="amarelo">"images/css3-16x16.png"</code>
  	              <code class="verde">alt</code><code class="branco">=</code><code class="amarelo">"css3-16x16.png"</code><code class="branco">></code>
  	              <br>
  	              <code class="branco"><</code><code class="rosa">img</code>
  	              <code class="verde">src</code><code class="branco">=</code><code class="amarelo">"images/css3-64x64.jpg"</code>
  	              <code class="verde">alt</code><code class="branco">=</code><code class="amarelo">"css3-64x64.jpg"</code><code class="branco">></code>
  	              <code class="cinza">&lt;!-- Também será aplicada --></code>
  	            </div>
  	          </article>

  	          <article>
  	            <h3>4.7 Valor de um atributo contém string</h3>
  	            <p>
  	              A regra css se aplicará somente em tags que usam determinado atributo com um determinado valor que contém string em qualquer posição. Na sintaxe, adiciona-se o caractere <strong>"*"</strong> antes do caractere <strong>"="</strong>. Exemplo:
  	            </p>

  	            <div class="codigo">
  	              <code class="rosa">img</code><code class="branco">[</code><code class="verde">alt</code><code class="branco">*=</code><code class="amarelo">"small"</code><code class="branco">]</code>
  	              <code class="branco">{</code>
  	              <br>
  	              <code class="azul">&nbsp;&nbsp;text-align</code><code class="branco">:</code>
  	              <code class="azul">center</code><code class="branco">;</code>
  	              <br>
  	              <code class="branco">}</code>
  	              <br>
  	              <br>
  	              <code class="cinza">&lt;!-- No HTML --></code>
  	              <br>
  	              <code class="branco"><</code><code class="rosa">img</code>
  	              <code class="verde">src</code><code class="branco">=</code><code class="amarelo">"images/css3_small.png"</code>
  	              <code class="verde">alt</code><code class="branco">=</code><code class="amarelo">"css3_small.png"</code><code class="branco">></code>
  	              <br>
  	              <code class="branco"><</code><code class="rosa">img</code>
  	              <code class="verde">src</code><code class="branco">=</code><code class="amarelo">"images/small_css3.jpg"</code>
  	              <code class="verde">alt</code><code class="branco">=</code><code class="amarelo">"small_css3.jpg"</code><code class="branco">></code>
  	              <code class="cinza">&lt;!-- Também será aplicada --></code>
  	            </div>
  	          </article>
  	        </article>

  	        <hr>

  	        <article>
  	          <h2>5. Lista de seletores deste artigo</h2>

  	          <table>
  	            <tr>
  	              <th>Seletor</th>
  	              <th>Nome</th>
  	            </tr>
  	            <tr>
  	              <td>*</td>
  	              <td>Seletor universal</td>
  	            </tr>
  	            <tr>
  	              <td>e</td>
  	              <td>Seletor tipo</td>
  	            </tr>
  	            <tr>
  	              <td>#e</td>
  	              <td>Seletor de ID</td>
  	            </tr>
  	            <tr>
  	              <td>.e</td>
  	              <td>Seletor de classe</td>
  	            </tr>
  	            <tr>
  	              <td>e > e</td>
  	              <td>Seletor filho</td>
  	            </tr>
  	            <tr>
  	              <td>e e</td>
  	              <td>Seletor descendente</td>
  	            </tr>
  	            <tr>
  	              <td>e + e</td>
  	              <td>Seletor irmão adjacente</td>
  	            </tr>
  	            <tr>
  	              <td>e ~ e</td>
  	              <td>Seletor irmão geral</td>
  	            </tr>
  	            <tr>
  	              <td>e[a]</td>
  	              <td>Seletor de atributo: presença de um atributo</td>
  	            </tr>
  	            <tr>
  	              <td>e[a="v"]</td>
  	              <td>Seletor de atributo: valor de um atributo</td>
  	            </tr>
  	            <tr>
  	              <td>e[a~=]</td>
  	              <td>
  	                Seletor de atributo: valor de um atributo contido em uma lista de valores separados por espaço
  	              </td>
  	            </tr>
  	            <tr>
  	              <td>e[a^="v"]</td>
  	              <td>Seletor de atributo: valor de um atributo inicia com string</td>
  	            </tr>
  	            <tr>
  	              <td>e[a$="v"]</td>
  	              <td>Seletor de atributo: valor de um atributo termina com string</td>
  	            </tr>
  	            <tr>
  	              <td>e[a|="v"]</td>
  	              <td>Seletor de atributo: valor de um atributo termina com string mais hífen</td>
  	            </tr>
  	            <tr>
  	              <td>e[a*="v"]</td>
  	              <td>Seletor de atributo: valor de um atributo contém string</td>
  	            </tr>
  	          </table>
  	          <p>
  	            <strong>e</strong>: elemento;
  	            <strong>a</strong>: atributo;
  	            <strong>v</strong>: valor.
  	          </p>
  	        </article>
  			  </section>

  	    <hr>

  	    <footer class="pcenter">
  	      <h2 class="rosa">Fontes:</h2>
  	      <a href="https://www.caelum.com.br/">
  	        <figure>
  	          <img src="https://www.caelum.com.br/imagens/apostilas-abertas/caelum-logo-cinza.svg" alt="caelum.com.br">
  	        </figure>
  	      </a>
  	      <a href="https://www.caelum.com.br/apostila-html-css-javascript/css-avancado/#5-4-exercicios-seletores-e-pseudo-classes">CSS Avançado</a>
  	      <a href="https://www.caelum.com.br/apostila-html-css-javascript/html-semantico-e-posicionamento-no-css/#3-7-exercicios-header-semantico">HTML semântico e posicionamento no CSS</a>
  	      <a href="https://www.caelum.com.br/apostila-html-css-javascript/introducao-a-html-e-css/#2-24-css-seletores-de-id-e-filho">Introdução a HTML e CSS</a>
  	      <a href="https://www.caelum.com.br/apostila-html-css-javascript/mais-html-e-css/#4-10-seletores-de-atributo-do-css3">Mais HTML e CSS</a>
  	      <a href="http://www.maujor.com/">
  	        <figure>
  	          <img src="http://maujor.com/imagens/oghome.jpg" alt="maujor.com">
  	        </figure>
  	      </a>
  	      <a href="http://www.maujor.com/tutorial/guia-completo-seletores-css3.php">Guia completo dos Seletores CSS3</a>
  	      <p class="pcenter">#CSTADS - 2017</p>
  	    </footer>
  	  </div>
  	</section>
    
    <footer id="page-footer">
      <?php include '../page-footer.html'; ?>
    </footer>
  </div>
</body>
</html>
