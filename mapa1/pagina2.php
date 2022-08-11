<?php
	include("dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
<style>

.index_marmitas img{
    width: 30%;
}

.index_marmitas p{
    margin: 10px 0;
	font-size: 1.2em;
	text-align: justify;
}

.index_marmitas h3{
    font-size: 0.9em;
}

.index_marmitas article{
    flex-basis: 100%;
    margin-bottom: 10px;
}

</style>
</head>
<body>
<header>
		<nav class = "nav_index">
			<ul>
				<li><a href="index.php" title="Inicio" alt="Inicio">Inicio</a></li>
				<li><a href="index.php#marmitas" title="Marmitas" alt="Produtos">Marmitas</a></li>
				<li><a href="#" title="Sobre nós" alt="Sobre nós">Sobre Nós</a></li>
                <li><a href="#" title="Contato" alt="Contato">Contato</a></li>
			</ul>
		</nav>
	</header>
	
	<main>	
    <div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
                        <h1>Marmitas Dona Rita!</h1>
                    </header>
                    <p> Restaurante caseiro Dona Rita, seja bem vindo!</p>
                </div>
            </article>
        </div>
		<section class="index_marmitas" style ="margin-top: 3%;">
			<?php
				if(isset($_GET['id']) && !empty($_GET['id'])){
					$id = $_GET['id'];
					foreach($marmitas as $key => $value){
						if($value['id'] == $id){
					?>
						<header class="main_tutorial_header">
							<h1><?=$value['titulo'];?></h1>
							<h2>Preço: <?=$value['preco'];?></h2>
							<h3>Peça no Whats: <?=$value['contato'];?></h3>
						</header>
						<img src=<?=$value['imagem'];?> title="<?=$value['title_img'];?>" alt="<?=$value['title_img'];?>">
						<p><?=$value['descricao'];?></p>			
						<?php
						}
					}
				}else{
					echo "Não existe";
				}
			?>
		</section>
        <section class="main_marmitas">
			<header class="main_marmitas_header">
				<h1>Ver mais Marmitas</h1>
			</header>
			<?php
			$id = 0;
				foreach($marmitas as $key => $value){
                    if($value['id'] != $id){
			?>
			<article>
				<h2><a href="pagina2.php?id=<?=$value['id'];?>"><?=$value['titulo'];?></a></h2>
	    	</article>
			<?php
                    }
				}
			?>
		</section>

	</main>

	<footer>
	<h1 class= "footer_index">Mais Informações.</h1>

    <div class = "footer_itens">
         <div class = "div_itens">
         <b class = "texto"> Menus </b>
         <a href="index.php" title="test" alt="test">Inicio</a>
		 <a href="index.php#marmitas" title="test" alt="test">Marmitas</a>
		 <a href="#" title="test" alt="test">Sobre Nós</a>
         <a href="#" title="test" alt="test">Contato</a>
    
         </div>
    
         <div class = "div_itens">
         <h1 class ="texto">Sobre o Projeto</h1>
         <a>Projeto realizado para o MAPA BackEndI</a>
         </div>

         <div>
            <b class= "texto"> Desenvolvido por Kesley I S Leal </b>
         </div>

    </div>
	</footer>
</body>
</html>