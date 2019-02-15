<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jesuitas 450</title>
</head>
<body>
	<div class="hyper-container">
		
		<!-- The grid container -->
		<div class="grid-container">
			
			<!-- This just creates a big number of pictures so we are safe -->
			<?php for($i=0; $i < 200 ; $i++): ?>
				<?php $itemIndex = ($i % 7)+1; ?>
				
				<!-- The grid item container -->
				<div class="grid-item grid-item-<?php echo $itemIndex; ?>">
					
					
					<!-- The image & background effects -->
					<div class="grid-item-image grid-item-image-<?php echo $itemIndex; ?>" style='background-image: url("https://picsum.photos/200/300?image=<?php echo $i; ?>");'>
					</div>
					<!-- Transparencia -->
					<div class="transparencia transparencia_<?php echo $itemIndex; ?>"></div>

				</div>

			<?php endfor; ?>

			<!-- The special stems -->
			<div class="grid-item square-box"></div>
			<div class="grid-item main-title">
				<h1 class="title">CIUDADANÍA DEMOCRÁTICA Y POLÍTICA LOCAL</h1>
			</div>
			<div class="grid-item sub-title">
				<h2 class="subtitle">MEMORIA HISTÓRICA DE LAS ORGANIZACIONES SOCIALES DE EL AGUSTINO (1947 - 2002)</h2>
			</div>
			<!-- End of special items -->
		</div>
	</div>
	<?php //Get Width of Screen and Height ?>
	<style>

		:root {
		  --darkblue-color: #01343A; 
		  --blue-color:#056A70;
		  --lightblue-color:#0897A0;
		}

		/* The Grid Container have the rule for separating squares */
		.grid-container{
			display:grid;
			grid-template-columns: repeat( 18, 60px); /* This should be autosized */
		  	grid-template-rows: repeat(12, 60px); /* This should be autosized */
		  	grid-row-gap: 2px;
		  	grid-column-gap: 2px;
		}

		/* The grid item only matters because he is the container of the picture */
		.grid-item {
			position: relative;
		}

		/* The grid item image is the */
		.grid-item-image {
			position: absolute;
			height: 100%;
			width:100%;
			cursor: pointer;
			background-size:100%;
			filter:grayscale(100%);
			z-index:1;
			/*background-color: var(--darkblue-color);
  			background-blend-mode: luminosity;*/
		}
		
		/* Transparencias */
		.transparencia{
			position: absolute;
			height: 100%;
			width:100%;
			z-index:2;
		}
		.transparencia_1{
		  background-color: #01343A;
		  opacity: 0.8;

		}
		.transparencia_2{
		  background-color: #056A70;
		  opacity: 0.8;

		}
		.transparencia_3{
		  background-color: #0897A0;
		  opacity: 0.8;
		}
		.transparencia_4{
			background-color: #0897A0;
		  	opacity: 0.4;
		}
		.transparencia_5{
			background-color: #0897A0;
		  	opacity: 0.2;
		}
		.transparencia_6{
			background-color: #0897A0;
		  	opacity: 0.1;
		}
		.transparencia_7{
			background-color:white;
		}

		/* Special Grid Items */
		.grid-item.square-box {
		    grid-column-start: 3;
		    grid-column-end: 5;
		    grid-row-start: 4;
		    grid-row-end: 6;
		    background-color: darkred;
		    background-image: none!important;
		}

		.grid-item.main-title{
			grid-column-start: 3;
		    grid-column-end: 15;
		    grid-row-start: 6;
		    grid-row-end: 7;
		    background-color: darkred;
		    background-image: none!important;
		}
		.grid-item.sub-title{
			grid-column-start: 5;
		    grid-column-end: 13;
		    grid-row-start: 7;
		    grid-row-end: 8;
		    background-color: var(--darkblue-color);
		    background-image: none!important;
		}
		.title,
		.subtitle{
			font-family: Helvetica;
			color:#ffffff;
			text-align: center;
		}
		.title{
			font-size:24px;
		}
		.subtitle{
			font-size:12px;
		}
		
		
		/*

		TODO
		-----

		- [DONE] Background e imagen en un solo item
		- [DONE] El item debe tener brightness y otras cosas para simular "luminosity" blend mode (ver https://css-tricks.com/basics-css-blend-modes/)
		
		- [DOING]El grid va a tener 60px de ancho y 60px de alto por item + 2px de gap. (x2 en retina)
		
		- El grid debe calcuar el width de la pantalla y autogenerar la cantidad de items que necesita para cubrirla toda. 
		- Luego tiene que autocalcular donde debe ir el titulo al centro. 

		*/



		/*
			screen_width = x;
			screen_height = y;
			
			columns = screnwidth/60;
			rows = screenheight/60;


			foreach(row in rows){
				foreach(column, index in columns){
					return getColumIndex(index)
				}				
			}

			getColumnIndex(index){
				switch (index){
					case:1 {
						return 0
					}
					case 2{
						return 0
					}
				}
			}
		


		*/
	</style>


	<script>
		var grid = [
					7776665513111, // Row 0
					7776665513111, 
					7776665513111, 
					7776665513111, 
					7776665513111, 
					7776665513111, // Row 5
					7776665513111,
					7776665513111,
					7776665513111,
					7776665513111,
					7776665513111, // Row 10
					7776665513111,
					7776665513111,
					7776665513111,
					7776665513111,
					7776665513111, // Row 15
					7776665513111,
					7776665513111,
					7776665513111,
					7776665513111,
					7776665513111, // Row 20
					];
	</script>
</body>
</html>