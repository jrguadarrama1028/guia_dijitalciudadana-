<!DOCTYPE HTML><!--doc en html-->
<HTML LANG="ES"><!--doc en español-->
<HEAD>
<meta charset="UFT-8"><!--codifica caracteres-->
<meta neme="viewport" content="width=device-width, initial-scale=1.0"><!--ajusta el diseño a moviles-->
<title> GUIA DIGITALN CIUDADANA</title><!--titulo que aparece en la pestaña-->
<style>
 <body {
    margin: 0; /*elimina margenes por defecto */
    font-family:Arial, sans-serif;/*fuente de texto */
    }
/*estilo del menu principal */
nav{
   background: #0000FF;/*fondo gris oscuro */
}
nav ul {
   list-style: none;/*quita viñetas de la lista */
   margin: 0;/*elimina margenes */
   padding: 0; /*elimina relleno */
   display: flex;/*coloca los <li> en linea (horizontal) */
}
nav ul li {
   position: relative;/*necesario para posicionar el submenu debajo */
}
nav ul li a {
   display: block;/*ase que todo el area sea clickeable */
   padding: 15px 20px; /*espacio interno */
   color: white;/*texto blanco */
   text-decoration: none;/*quita el subrayado */
}
nav ul li a:hover{
   background: #FFC0CB;/* cambia el fondo al pasar el raton */
}

/* Estilo del submenu */
nav ul li ul{
   display: none; /*oculta el submenu por defecto */
   position: absolute; /*posiciona el submenu relativo al padre */ 
   top: 100%; /* lo coloca justo debajo del elemento padre */
   left: 0; /* aliniado a la izquirda */
   background: #444; /*fondo del subtema */
   padding: 0; /*sin espacio interno */
   min-width: 180px; /* ancho minimo del subtema */
}
nav ul li ul li a {
   padding: 10px 15px; /*espacio interno en las opciones */
}
nav ul li ul li a:hover {
   background: #FFC0CB; /*coloca mas claro al pasar el raton */
}

/* mostar el submenu */
nav ul li:hover> ul {
   display: block; /*cuando paso el raton sobre el <li> , muestra el submenu */
}
</style>
</head>
<body>
   <!--menu principal-->
   <nav>
      <ul>
       <!--elemento simple sin subtema-->
       
      
      <!--Elemento con subtema-->
      <li>
         <li> <p><a href="JR_CIUDADANO.HTML">CIUDADANO</a></p></li>  <!--Flecha indicando subtema-->
        
       </li>

       <li>
         <p><a href="JR_TRAMITE.HTML">TRAMITE</a></p>  <!--Flecha indicando subtema-->
        <ul>
        <li><a href="tramites.html">TRAMITES</a></li>
        
      </ul>

       <li>
        <li> <p><a href="JR_SOLICITUD.HTML">SOLICITUD</a></p></li>  <!--Flecha indicando subtema-->
       </li>

       <li>
       <li> <p><a href="JR_PAGO.HTML">PAGO</a></p></li>  <!--Flecha indicando subtema-->
        </li>

       </li>
       <li>
     <p><a href="JR_DOCUMENTO.HTML">DOCUMENTO </a></p>
      <ul>
        <li><a href="galeria2.html">GALERIA</a></li>
        
      </ul>
    </li>
    <li>
       <li> <p><a href="index_gc.php">VISITANTES</a></p></li>  <!--Flecha indicando subtema-->
        </li>
     </nav>  
   </body>
   </html>

       