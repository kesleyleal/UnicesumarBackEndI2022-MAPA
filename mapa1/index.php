<?php
	require("dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
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
                    <p><a href="#marmitas" class="btn">Cardapio</a></p>
                </div>
            </article>
        </div>
		
		<section class="main_marmitas">
			<header class="main_marmitas_header">
				<!-- //alterei aqui -->
				<h1><a name="marmitas">Nossas Marmitas</h1></a>
				<p>Desfrute do nosso cardapio de marmitas, sinta-se em casa!</p>
			</header>
			<?php
			//validar se array existe e se não está vazio
			if(is_array($marmitas) && !empty($marmitas)){
				foreach($marmitas as $key => $value){
			?>
			<article>
				<!-- passar o titulo da noticia para ser impresso no title da página -->
				<a href="pagina2.php?id=<?=$value['id'];?>">
				<!-- //alterei aqui -->
				<img src=<?=$value['imagem'];?> title="<?=$value['title_img'];?>" alt="<?=$value['title_img'];?>"></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=substr($value['descricao'], 0, 150);?>...</p>
			</article>
			<?php
			}                               
		}else{
			echo "Sem Tutoriais no momento!!!";
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

