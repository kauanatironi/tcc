<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastre-se</title>
    <link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
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

    
    <form class="ui form">
        <h2 class="ui dividing header">Cadastro</h2>
        <!--Nome & Sobrenome-->
        <div class="field">
            

            <div class="two fields">
                <div class="field">


                <label>Nome</label>
                    <input type="text" name="shipping[first-name]" placeholder="Nome">
                </div>

                <div class="field">
                    <label>
                        Sobrenome
                    </label>
                    <input type="text" name="shipping[last-name]" placeholder="Sobrenome">
                </div>
            </div>
        </div>
        <!--EMAIL-->
        <div class="field">
            <label>Email</label>
            <div class="fields">
                <div class="twelve wide field">
                    <input type="text" name="shipping[address]" placeholder="Email">
                </div>
            </div>
        </div>
        <!--SENHA & Confimirmação de senha-->
        <div class="field">
            <label>Senha</label>
            <div class="two fields">
                <div class="field">
                    <input type="password" placeholder="Senha">
                </div>
                <div class="field">
                    <input type="password" placeholder="Confirmação de Senha">
                </div>
            </div>
        </div>
        <!--Continuar como:-->

        <div class="ui form">
          <div class="inline fields">
            <label>continuar como:</label>
              <div class="field">
                <div class="ui radio checkbox">
                <input type="radio" name="frequency" checked="checked">
                <label>cliente</label>
                </div>
              </div>
              <div class="field">
                <div class="ui radio checkbox">
                  <input type="radio" name="frequency">
                  <label>profissional</label>
                  
                </div>
              </div>
          </div>
        </div>

        <div class="ui submit button">continuar cadastro</div>
        </div>
    </form>
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