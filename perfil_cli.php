<!DOCTYPE html>
<html>
<head>
	<title>Perfil Cliente</title>
	    <link rel="stylesheet" type="text/css" href="semantic/semantic.css">
        <link rel="stylesheet" type="text/css" href="estilo.css">
        
        <style rel="stylesheet" type="text/css" scoped="scoped">

        </style>
    </head>
    <body>
         
    <div class="ui secondary inverted menu fixed">
        <a href="index.php" class="item">    
          <div id="img_logo" class="ui image">
            <img src="img/logo4.jpg">
          </div>

        </a>
 
        <div class="ui simple dropdown item">
          categorias
        <i class="dropdown icon"></i>
        <div class="menu">
          <a class="item">Buffet</a>
          <a class="item">Decoração</a>        
          <a class="item">Fotógrafo</a>
          <a class="item">Garçom e Barman</a>
          <a class="item">Limpeza</a>
          <a class="item">Locação dos brinquedos</a>
          <a href="locacao_imovel.php" class="item">Locação do imóvel</a>
          <a class="item">Som e Iluminação</a>
        </div>
        </div>

        <div class="ui simple dropdown item">
          eventos da região
        <i class="dropdown icon"></i>
        <div class="menu">
          <a class="item">Balneário Camboriú</a>        
          <a href="even_blumenau.php"class="item">Blumenau</a>
          <a class="item">Brusque</a>
          <a class="item">Chapecó</a>
          <a class="item">Criciúma</a>
          <a class="item">Florianópolis</a>
          <a class="item">Itajaí</a>          
          <a class="item">Jaraguá do Sul</a>
          <a class="item">Joinville</a>
        </div>
        </div>

        <div class="ui simple dropdown item">
          inspirações
        <i class="dropdown icon"></i>
        <div class="menu">
          <a class="item" href="insp_aniver.php">Aniversário</a>
          <a href="" class="item">Casamento</a>
          <a class="item">Formatura</a>
          <a class="item">Na Fazenda</a>
          <a class="item">Na Piscina</a>
          <a class="item">Revéillon</a>
        </div>
        </div>
        <a href="sobre.php" class="item">
        sobre
        </a>
            <div class="right menu">
                <div class="item">
                    <div class="ui icon input">
                        <input type="text" placeholder="Search...">
                        <i class="search link icon"></i>
                    </div>
                </div>
                <a href="login.php" class="ui item">
                Login
                </a>
            </div>
    </div>
        <br><br>
		
		<div class="ui four columns centered grid stackable">
		<div class="column">
			<div class="ui card">
		  		<div class="image">
		    	<img src="img/usuario.jpg">
		  		</div>
		  	<div class="content">
		    <div class="header">Nome usuário</div>
		  	</div>
			</div>
		</div>

	  <div class="column">
	    <div class="ui raised segment">
	      <a class="ui red ribbon label">Lista de tarefas</a>
	    		<ul class="ui list">
					<li>tarefa</li>
					<li>tarefa</li>
					<li>tarefa</li>
					<li>tarefa</li>
					<li>tarefa</li>
					<li>tarefa</li>
					<li>tarefa</li>
				</ul>
	    </div>
	  </div>
	  <div class="column">
	    <div class="ui segment">
	      <a class="ui orange right ribbon label">Serviços adquiridos</a>
	    		<ul class="ui list">
					<li>serviço tal</li>
					<li>serviço tal</li>
					<li>serviço tal</li>
					<li>serviço tal</li>
					<li>serviço tal</li>
					<li>serviço tal</li>
					<li>serviço tal</li>
				</ul>
	    </div>
	  </div>

	 </div>
	<div id="imagens_usuario" class="ui four columns centered grid stackable">
	    <div class="row centered">
            <h2 class="ui dividing header">Fotos de seus eventos anteriores</h2>
        </div>
		<div class="ui small images">
		  <img src="img/imovel.png">
		  <img src="img/imovel.png">
		  <img src="img/imovel.png">
		  <img src="img/imovel.png">
		</div>
	</div>


<div class="ui inverted vertical footer segment">
    <div class="ui center aligned container">
      <div class="ui stackable inverted divided grid">
        <div class="three wide column">
          <h4 class="ui inverted header">Group 1</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Link One</a>
            <a href="#" class="item">Link Two</a>
            <a href="#" class="item">Link Three</a>
            <a href="#" class="item">Link Four</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Group 2</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Link One</a>
            <a href="#" class="item">Link Two</a>
            <a href="#" class="item">Link Three</a>
            <a href="#" class="item">Link Four</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Group 3</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Link One</a>
            <a href="#" class="item">Link Two</a>
            <a href="#" class="item">Link Three</a>
            <a href="#" class="item">Link Four</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
        </div>
      </div>
      <div class="ui inverted section divider"></div>

      <div class="ui horizontal inverted small divided link list">
        <a class="item" href="#">Site Map</a>
        <a class="item" href="#">Contact Us</a>
        <a class="item" href="#">Terms and Conditions</a>
        <a class="item" href="#">Privacy Policy</a>
      </div>
    </div>
  </div>
        
            
        <?php
        // put your code here
        ?>
    </body>
</html>
