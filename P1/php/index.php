<!DOCTYPE html>
<html>
<!--/ sticky tab -->

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-size: 28px;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

#navbar {
  overflow: hidden;
  background-color: #333;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}


#navbar a.active {
  background-color: #04AA6D;
  color: white;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
</style>
</head>
<body>



<div id="navbar">
  <a class="active" href="javascript:void(0)">Home</a>
  <a href="javascript:void(0)">News</a>
  <a href="javascript:void(0)">Contact</a>
</div>


<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

</body>

<head>
	<title>CGIMAGE</title>
	<meta charset="utf-8">
	
	<style type="text/css">
		
		/* page configuration
		-------------------------------*/
		body, html {
			margin: 0;
			font: 16px "Lato", sans-serif;
			color: #777;
			height: 100%;
		}

		.conteudo {
			color: #777;
			background-color: white;
			text-align: justify;
			padding: 50px 80px;
		}

		h3 {
			text-transform: uppercase;
			color: #111;
			text-align: center;
		}

		p{
			margin-bottom: 20px;
		}

		/* parallax scrolling effect thingy
		-------------------------------*/
		.caixa1, .caixa2, .caixa3, .caixa4 {
			position: relative;
			height: 100%;
			opacity: 0.7;
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
			background-attachment: fixed; 
		}
		
		.caixa1 {
			background-image: url("https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.pexels.com%2Fsearch%2Fstudio%2F&psig=AOvVaw2Pz-sDYtXOPfgb6o7JNQJJ&ust=1669999461527000&source=images&cd=vfe&ved=0CA4QjRxqFwoTCLDQzpnu2PsCFQAAAAAdAAAAABAE");
		}

		.caixa2 {
			background-image: url(imagens/model.jpg);
		}

		.caixa3 {
			background-image: url(imagens/fotografia.jpg);
		}

		.caixa4 {
			background-image: url(imagens/imagem4.jpg);
		}

		.conteudo-titulo {
			position: absolute;
			left: 0;
			top: 45%;
			width: 100%;
			text-align: center;
		}

		.conteudo-titulo span.titulo {
			color: #fff;
			background-color: #111;
			padding: 18px;
			font-size: 25px;
			letter-spacing: 5px;
			text-transform: uppercase;
		}

		.rodape {
	clear: both;
	padding: 30px;
	background: #fff url(../imagens/bg-rodape.png) repeat-x top;
	color: black;
	}

	.rodape1 {
		background: black;
	}


	</style>

</head>
<body>

	<div class="caixa1">
		<div class="conteudo-titulo">
			<span class="titulo">PHOTOGRAPHY STUDIO</span>
		</div>
	</div>

	<div class="conteudo">
		<h3>IMAGE & VIDEO SPECIALIST</h3>
		<p>It has the best team of professional photographers on the market. Experiences in the areas of journalism, fashion, advertising, major events, concerts and others. Image bank with more than 60,000 photographs in very high resolution. High production for major magazine brands. We provide services to advertising and communication agencies. Studio located in a noble area of ​​the city, with complete infrastructure and equipment with advanced technology.</p>

		
	</div>

	<div class="caixa2">
		<div class="conteudo-titulo">
			<span class="titulo">OUR AGENCY</span>
		</div>
	</div>

	<div class="conteudo">
		<h3>CASTING MODEL</h3>
		<p>For models, actors, actresses and many other professionals who somehow work with fashion and communication, casting is a very frequent word. For models, the casting room is their first field of work. Find out what Model Casting is, how it works and what is its importance for the career development of a professional…</p>

		<h3> COMO FUNCIONA? </h3>
		<p>In a casting, models are called, which can be in a group or individually for a certain location in the presence of an evaluation board. This selection requires great care in choosing the right people for each job, since it often works with very subjective questions, which are much more complex than the answer in a test, for example. Due to this complexity, the project team must know how to listen carefully to the clients' needs and be able to see them in the professionals enrolled for the selection.</p>
	</div>

	<div class="caixa3">
		<div class="conteudo-titulo">
			<span class="titulo">COURSES AND ADVICE</span>
		</div>
	</div>

	<div class="caixa4">
		<div class="conteudo-titulo">
			<span class="titulo">CONTACT US!</span>
		</div>
	</div>


<div class="rodape">

<p class="fonte-30"> 

 <p>Contato: (1) 510-xxx-xxxx</p>
 <p>E-mail: fotografiamodel@dgimagem.com</p>
  <p id="rodape1"> Site made by P.1 APCSP mr. Millard| American High School @ 2022   </p>
</div></footer>
</footer>
</div>
	
</p></div>
	</div><!--/ fim container-->

</body>






</html>