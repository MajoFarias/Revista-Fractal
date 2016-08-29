<footer>
<section class="container">
	<article class="col-xx col-xs-5 col-sm-4 col-md-4">
	<img src="assets/images/logoblanco.png">
	<p>Revista Iberoamericana de ensayo y literatura</p>
	</article>
	<article class="col-xx col-xs-4 col-sm-4 col-md-4">
		<h3>Contenido</h3>
		<ul class="col-sm-6 col-md-5">
			<li><a href="http://www.mxfractal.org/antes1.html">Anteriores</a></li>
			<li><a href="http://mxfractal.wixsite.com/librosfractal">Catálogo</a></li>
			<li><a href="http://www.mxfractal.org/distribuidores.htm">Librerías</a></li>

		</ul>
		<ul class="col-sm-6 col-md-6">
			<li><a href="quienessomos.php">Nosotros</a></li>
			<li><a href="quienessomos.php">Los orígenes</a></li>
			<li><a href="http://www.mxfractal.org/indice.html">Índice</a></li>
		</ul>
	</article>
		
	<article class="col-xx col-xs-3 col-sm-4 col-md-4">
		<h3>Redes sociales</h3>
		<a href="https://www.facebook.com/rfractal"><img src="assets/images/face.png" alt=""></a>
	</article>
</section>
<section class="">
	<article class="container">
	<p class="col-sm-offset-8 col-sm-4">Todos los derechos reservados Revista Fractal 2016</p>
	</article>
</section>

</footer>

	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/wow.js"></script>
	<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>
  <script>
  $( document ).ready(function() {

  	$('a.page-scroll').bind('click', function(event) {
	        var $anchor = $(this);
	        $('html, body').stop().animate({
	            scrollTop: ($($anchor.attr('href')).offset().top - 120)
	        }, 1250);
	        event.preventDefault();
	    });

	});
  </script>

</body>
</html>