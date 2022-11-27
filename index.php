<?php echo "Hello"; ?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Jesuitas 450</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,900" rel="stylesheet">
</head>
<body>
	<div class="hyper-container">
		
		<!-- The grid container -->
		<div class="grid-container">
			
			<!-- This just creates a big number of pictures so we are safe -->
			<?php for($i=0; $i < 506 ; $i++): ?>
				<?php $itemIndex = ($i % 7)+1; ?>
				
				<!-- The grid item container -->
				<div class="grid-item grid-item-<?php echo $itemIndex; ?>">
					
					
					<!-- Transparencia -->
					<div class="transparencia"></div>
					<!-- The image & background effects -->
					<div class="grid-item-image" style='background-image: url("https://picsum.photos/200/300?image=<?php echo $i; ?>");'>
					
					</div>
					<div class="invisible-item" style='background-image: url("https://picsum.photos/1200/800?image=<?php echo $i; ?>");display:none;'>
					</div>
				</div>

			<?php endfor; ?>

			
		</div>
		<div class="second-grid">
			<!-- The special stems -->
			<div class="grid-item square-box"></div>
			<div class="grid-item main-title">
				<h1 class="title">CIUDADANÍA DEMOCRÁTICA Y POLÍTICA LOCAL</h1>
			</div>
			<div class="grid-item sub-title">
				<h2 class="subtitle">MEMORIA HISTÓRICA DE LAS ORGANIZACIONES SOCIALES DE <b>EL AGUSTINO (1947 - 2002)</b></h2>
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
		  --rows:11;
		  --columns:23;
		  --columnStartTitle:3;
		  --columnEndTitle:15;
		  --columnStartSubTitle:5;
		  --columnEndSubTitle:13;
		  --columnStartSquare:3;
          --columnEndSquare:5;
          --rowStartSquare:4;
          --rowEndSquare:6;
          --squareVisible:block;
		}
		*{
			box-sizing: border-box;
		}
		body,html,
		.hyper-container{
			margin:0;
			padding: 0;
			overflow: hidden;
		}
		body {
			background-color:white;
			background-repeat:none;
			background-size:100%;
			background-position: center center;
			transition: background 1s linear;
		}

		/* The Grid Container have the rule for separating squares */
		.grid-container{
			position: absolute;
			top:0;
			left: 0;
			z-index: 1;
			display:grid;
			grid-template-columns: repeat(var(--columns), 60px); 
		  	grid-template-rows: repeat(var(--rows), 60px); 
		  	grid-row-gap: 2px;
		  	grid-column-gap: 2px;
		  	cursor: pointer;
		}
		/* This is the grid that cointains only the Logo, Title and Subtitle (should be centered with JS) */
		.second-grid{
			position: absolute;
			top:0;
			left: 0;
			z-index: 99;
			display:grid;
			grid-template-columns: repeat(var(--columns), 60px); 
		  	grid-template-rows: repeat(var(--rows), 60px); 
		  	grid-row-gap: 2px;
		  	grid-column-gap: 2px;
		  	pointer-events:none;
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
			background-position:center
			/*background-color: var(--darkblue-color);
  			background-blend-mode: luminosity;*/
		}
		
		/* Transparencias */
		.transparencia{
			position: absolute;
			height: 100%;
			width:100%;
			z-index:2;
		  	opacity: 1;
		}
		.transparencia_7{background-color: #01343A;opacity: 0.8;}
		.transparencia_6{background-color: #056A70;opacity: 0.8;}
		.transparencia_5{background-color: #0897A0;opacity: 0.8;}
		.transparencia_4{background-color: #0897A0;opacity: 0.4;}
		.transparencia_4+.grid-item-image{opacity: 0.4;}
		.transparencia_3{background-color: #0897A0;opacity: 0.2;}
		.transparencia_3+.grid-item-image{opacity: 0.3;}
		.transparencia_2{background-color: #0897A0;opacity: 0.1;}
		.transparencia_2+.grid-item-image{opacity: 0.2;}
		.transparencia_1{background-color:transparent;}
		.transparencia_1+.grid-item-image{opacity: 0.1;background-image:none!important;}
		.transparencia_0{background-color:transparent;}
		.transparencia_0+.grid-item-image{opacity: 0.1;background-image:none!important;}
		
		/* Hover effects */
		.transparencia:hover +.grid-item-image{filter:none;cursor: pointer;background-size:150%;transition:background 2s linear;opacity:1;}
		.transparencia:hover {opacity:0;cursor: pointer;}
		.transparencia+.grid-item-image:hoveer{filter:none;cursor: pointer;background-size:150%;transition:background 2s linear;opacity:1;}

		/* Special Grid Items */
		.grid-item.square-box {
		    display:var(--squareVisible);
		    grid-column-start: var(--columnStartSquare);
		    grid-column-end: var(--columnEndSquare);
		    grid-row-start: var(--rowStartSquare);
		    grid-row-end: var(--rowEndSquare);
		    background-color: darkred;
		}

		.grid-item.main-title{
			grid-column-start: var(--columnStartTitle);
		    grid-column-end: var(--columnEndTitle);
		    grid-row-start: 6;
		    grid-row-end: 7;
		    background-color: darkred;
		    background-image: none!important;
		}
		.grid-item.sub-title{
			grid-column-start: var(--columnStartSubTitle);
		    grid-column-end: var(--columnEndSubTitle);
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
			font-size:12px;
			padding:10px;
			margin:0;
			height:60px;
		}
		.title{
			font-size:24px;
			font-family: 'Montserrat', sans-serif;
			font-weight: 900;
			letter-spacing: 1px;
			line-height: 40px;
		}
		.subtitle{
			font-size:12px;
			font-weight: 100;
			font-family: 'Roboto', sans-serif;
			letter-spacing: 4px;
			line-height: 20px;
		}
		.square-box{
			background-image:url("http://jesuitas-home-grid.test/logo-muestra.png");
			background-size:100%;
			background-position: center center;
		}
		
		
		/*

		TODO
		-----

		JS/CSS
		--------
		- Falta agregar el icono
		- Falta revisar que funcione con el menu de avada!!
		- Falta revisar que funcione con el header mobile. 
		- Ojo. El titulo debe tener 2 cuadrados de alto en mobile. 

		PHP
		----
		- Falta jalar los thumbnails de los posts. 
		- Falta optimizar el php para que solo cubra los grids necesarios y no autogenere tanto html por las puras. 
		- Falta autogenerar los links 
		- Revisar animacion de hover. 


		*/
		
	</style>


	<script>


		//All DOM grid transparency items
		var items = document.querySelectorAll(".transparencia");
		var gridWrapper = document.querySelector(".hyper-container");
		const currentgridvalues = [23,11];
		

		

		// Do the responsive things
		let SCREENWIDTH = window.innerWidth;
		let SCREENHEIGHT = window.innerHeight;


		//Execute order 66 (This function gets width & height again and does EVERYTHING.)
		resizeGrid(SCREENWIDTH, SCREENHEIGHT)

		/* EVENTS */
		window.addEventListener("resize", function(e){
			resizeGrid(window.innerWidth, window.innerHeight)
		})

		/* HELPER FUNCTIONS*/

		// Just DO IT (resize all the grid, changing the values of css variables rows and columns)
		function resizeGrid(width, height){
			let newValues = [];
			let rows = Math.floor(height/60) + 1;
			let columns = Math.floor(width/60) + 1;

			//Only act when this are different
			if(currentgridvalues[0] != columns || currentgridvalues[1] != rows){
				gridWrapper.style.setProperty('--rows', rows);
				gridWrapper.style.setProperty('--columns', columns);
				let titleStart = Math.floor(((columns/2)-6))
				let titleEnd = Math.floor(((columns/2)-6)+12)
				
				setTitleAndSubtitlePlacement(titleStart, titleEnd, columns);
			}
			//Ok. Gud luck.
			let template = generateGridTemplate(rows, columns)
			
			//Hard part.
			addClases(template, items)
		}
		function setTitleAndSubtitlePlacement(titleStart, titleEnd, numberOfColumns){
			if(numberOfColumns > 13){
				gridWrapper.style.setProperty('--columnStartTitle', titleStart)
				gridWrapper.style.setProperty('--columnEndTitle', titleEnd)
				gridWrapper.style.setProperty('--columnStartSubTitle', titleStart+2)
				gridWrapper.style.setProperty('--columnEndSubTitle', titleEnd-2)
				gridWrapper.style.setProperty('--columnStartSquare', titleStart)
				gridWrapper.style.setProperty('--columnEndSquare', titleStart+2)	
				gridWrapper.style.setProperty('--squareVisible', "block");
			}else{
				gridWrapper.style.setProperty('--columnStartTitle', 1)
				gridWrapper.style.setProperty('--columnEndTitle', numberOfColumns+1)
				gridWrapper.style.setProperty('--columnStartSubTitle', 1)
				gridWrapper.style.setProperty('--columnEndSubTitle', numberOfColumns+1)
				gridWrapper.style.setProperty('--squareVisible', "none");
			}
			
		}

		//just a function wrapper so we can re-do things	
		function addClases(grid, items){
			console.log("The grid",grid);
			items.forEach(function(item, key){
				const prefix = "transparencia_";
				const classes = item.className.split(" ").filter(c => !c.startsWith(prefix));
				item.className = classes.join(" ").trim();
				item.classList.add(`transparencia_${grid[key]}`);
			})
		}

		function generateGridTemplate(numberOfRows, numberOfColumns){
			let template = ""
			for(let i = 0; i < numberOfRows; i++){
				console.log("hei")
				let row_template = generateRowTemplate(numberOfColumns)
				template += row_template
				console.log(template, numberOfColumns);
			}
			return template;
		}

		// Takes a column length (number of columns) 
		// and return a string of same length with random numbers like:
		// "77654322110000"
		function generateRowTemplate(numberOfColumns){
			let sum = 7;
			let stringTemplate = "";
			for(let i = 0; i < numberOfColumns; i++){
				if(numberOfColumns > 12){
					let random = Math.random()-0.1;
					if(i > 2){
						sum = (sum - random) <= 0 ? 0 : (sum - random);	
					}
				}else{
					let random = Math.random();
					sum = (sum-random) <= 0 ? 0 : (sum - random);
				}
			stringTemplate = stringTemplate + Math.floor(sum);
			}
			return stringTemplate;
		}

		
		function changeBackground(event){
			if(event.target.classList.contains("transparencia")){
				let image = event.target.nextElementSibling.style.backgroundImage
				let result = image.slice(image.lastIndexOf("=")+1, -2)
				console.log(result)
				document.body.style.backgroundImage = `url("https://picsum.photos/1200/800?image=${result}"`
			}
			console.log(event.target);
		}
		
		gridWrapper.addEventListener("click", changeBackground)

	</script>
</body>
</html>