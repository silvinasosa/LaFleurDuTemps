@extends('layouts.app')

@section('content')


          		<!-- Intro -->
          			<section id="intro" class="main style1 dark fullscreen">
          				<div class="content">
          					<header>
                      <h2> La Fleur du Temps </h2>
          						<h2> Lingerie </h2>
          					</header>
          					{{-- <p>Blandit ut Col Cubilia mus adipiscing erat accumsan pellentesque Condimentum, justo et Pellentesque interdum cep nisl augue sit Lobortis Aliquet Consectetur faucibus.</p> --}}
          					<footer>
          						<a href="#one" class="button style2 down"></a>
          					</footer>
          				</div>
          			</section>

          		<!-- One -->
          			<section id="one" class="main style2 right dark fullscreen">
          	       <div class="content box style2" style="background-color:black; opacity:0.5;">
          					<header>
          						<h2 style="font-family:'Zeyada', cursive; color:white;">A Bout de Souffle</h2>
                    </header>
          					<p>(breathless)</p>
          				</div>
          				<a href="#two" class="button style2 down anchored"></a>
          			</section>

          		<!-- Two -->
          			<section id="two" class="main style2 left dark fullscreen">
          				<div class="content box style2" style="background-color:black; opacity:0.5;">
          					<header>
          						<h2 style="font-family:'Zeyada', cursive; color:white;">Ange ou Demon</h2>
          					</header>
          					{{-- <p>Lorem ipsum dolor sit amet et sapien sed elementum egestas dolore condimentum.
          					Fusce blandit ultrices sapien, in accumsan orci rhoncus eu. Sed sodales venenatis arcu,
          					id varius justo euismod in. Curabitur egestas consectetur magna.</p> --}}
          				</div>
          				<a href="#work" class="button style2 down anchored"></a>
          			</section>


          		<!-- Work -->
          			<section id="work" class="main style3 primary">
          				<div class="content">
          					 <header>
          						<h2>Show no shame.</h2>
          						{{-- <p>Lorem ipsum dolor sit amet et sapien sed elementum egestas dolore condimentum.
          						Fusce blandit ultrices sapien, in accumsan orci rhoncus eu. Sed sodales venenatis
          						arcu, id varius justo euismod in. Curabitur egestas consectetur magna vitae.</p> --}}
          					</header>

          					<!-- Gallery  -->
          						<div class="gallery">
          							<article class="from-left">
          								<a href="images/fulls/01.jpg" class="image fit"><img src="img/welcome-6.jpg" title="Nec Consequat Mus" alt="" /></a>
          							</article>
          							<article class="from-right">
          								<a href="images/fulls/02.jpg" class="image fit"><img src="img/welcome--5.jpg" title="Pellentesque in" alt="" /></a>
          							</article>
          							<!-- <article class="from-left">
          								<a href="images/fulls/03.jpg" class="image fit"><img src="images/thumbs/03.jpg" title="Nec Ornare" alt="" /></a>
          							</article>
          							<article class="from-right">
          								<a href="images/fulls/04.jpg" class="image fit"><img src="images/thumbs/04.jpg" title="Augue in" alt="" /></a>
          							</article>
          							<article class="from-left">
          								<a href="images/fulls/05.jpg" class="image fit"><img src="images/thumbs/05.jpg" title="Sit curabitur augue" alt="" /></a>
          							</article>
          							<article class="from-right">
          								<a href="images/fulls/06.jpg" class="image fit"><img src="images/thumbs/06.jpg" title="Orci at" alt="" /></a>
          							</article> -->
          						</div>
          				</div>
          			</section>

          		<!-- Contact -->
          			<section id="contact" class="main style3 secondary">
          				<div class="content">
          					<header>
          						<h2>Contactanos.</h2>
          					 <p>Hace tu consulta. Podes pedir prendas hechas a medida.</p>
          					</header>
          					<div class="box">
          						<form method="post" action="#">
          							<div class="field half first"><input type="text" name="name"  placeholder="Nombre" /></div>
          							<div class="field half"><input type="email" name="email" placeholder="Email" /></div>
          							<div class="field"><textarea name="message" placeholder="Message" rows="6"></textarea></div>
          							<ul class="actions">
          								<li><input type="submit" value="Enviar"/></li>
          							</ul>
          						</form>
          					</div>
          				</div>
          			</section>

          		<!-- Footer -->
          			<footer id="footer">

          				<!-- Icons -->
          					<ul class="actions">
          						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
          						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
          						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
          						<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
          					</ul>


                      <div class="row text-right">
                          <div class="col-lg-12">
                              <p>Copyright &copy; La Fleur du Temps 2017</p>
                          </div>
                      </div>


          			</footer>

          		<!-- Scripts -->
          			<script src="assets/js/jquery.min.js"></script>
          			<script src="assets/js/jquery.poptrox.min.js"></script>
          			<script src="assets/js/jquery.scrolly.min.js"></script>
          			<script src="assets/js/jquery.scrollex.min.js"></script>
          			<script src="assets/js/skel.min.js"></script>
          			<script src="assets/js/util.js"></script>
          			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
          			<script src="assets/js/main.js"></script>

          	</body>
          </html>
