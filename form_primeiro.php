<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastre-se</title>
    <link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="estilo.css">


    <style rel="stylesheet" type="text/css" scoped="scoped">
        form.ui.form{
            margin-left: 100px

        }
        #img_logo{
            width: 70px;
            height:50;

        }
        
    </style>
</head>
   <body>
         
    <div class="ui secondary inverted menu fixed">
        <a class="active item">    
          <div id="img_logo" class="image">
            <img src="">
          </div>
        </a>
 
        <a class="ui simple dropdown item">
          categorias
        <i class="dropdown icon"></i>
        <div class="menu">
          <div class="item">Buffet</div>
          <div class="item">Decoração</div>        
          <div class="item">Fotógrafo</div>
          <div class="item">Garçom e Barman</div>
          <div class="item">Limpeza</div>
          <div class="item">Locação dos brinquedos</div>
          <div class="item">Locação do imóvel</div>
          <div class="item">Som e Iluminação</div>
        </div>
        </a>

        <a class="ui simple dropdown item">
          eventos da região
        <i class="dropdown icon"></i>
        <div class="menu">
          <div class="item">Balneário Camboriú</div>        
          <div class="item">Blumenau</div>
          <div class="item">Brusque</div>
          <div class="item">Chapecó</div>
          <div class="item">Criciúma</div>
          <div class="item">Florianópolis</div>
          <div class="item">Itajaí</div>          
          <div class="item">Jaraguá do Sul</div>
          <div class="item">Joinville</div>
        </div>
        </a>

        <a class="ui simple dropdown item">
          inspirações
        <i class="dropdown icon"></i>
        <div class="menu">
          <div class="item">Aniversário</div>
          <div class="item">Casamento</div>
          <div class="item">Formatura</div>
          <div class="item">Na Fazenda</div>
          <div class="item">Na Piscina</div>
          <div class="item">Revéillon</div>
        </div>
        </a>
        <a class="item">
        sobre
        </a>
            <div class="right menu">
                <div class="item">
                    <div class="ui icon input">
                        <input type="text" placeholder="Search...">
                        <i class="search link icon"></i>
                    </div>
                </div>
                <a class="ui item">
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
        <div class="field">
            <label>Continuar Como:</label>
            <div class="two fields">
                <button class="ui black basic button"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Profissional</font></font></button>
                <P>OU </P>
                <button class="ui black basic button"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cliente</font></font></button>
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