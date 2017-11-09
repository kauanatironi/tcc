<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="semantic/semantic.css">
        <link rel="stylesheet" type="text/css" href="estilo.css">
        
        <style rel="stylesheet" type="text/css" scoped="scoped">

        }
        body{
        	margin-top: 100px
        }


        </style>
    </head>
    <body>
<div class="ui three columns centered grid stackable">
<div class="column">

	<div class="ui middle aligned center aligned grid">
	  <div class="column">
	    <h2 class="ui teal header">
          <div id="img_logo" class="ui circular image"></div>
            <img src="img/logo4.jpg">
	      <div class="content">
	       Entre com sua conta!
	      </div>
	    </h2>
	    <form class="ui large form">
	      <div class="ui stacked segment">
	        <div class="field">
	          <div class="ui left icon input">
	            <i class="user icon"></i>
	            <input type="text" name="email" placeholder="E-mail">
	          </div>
	        </div>
	        <div class="field">
	          <div class="ui left icon input">
	            <i class="lock icon"></i>
	            <input type="password" name="password" placeholder="Senha">
	          </div>
	        </div>
	        <div class="ui fluid large teal submit button">Entrar</div>
	      

	      <div class="ui error message"></div>

	    </form>

		<div class="ui center aligned basic segment">
		  <div class="ui horizontal divider">
		    Ou
		</div>
		<p>Entre com sua conta:</p>

		<button class="ui google plus button">
		  <i class="google plus icon"></i>
		  Google Plus
		</button>
		
		<br><br>
		<button class="ui facebook button">
		<i class="facebook icon"></i>
		Facebook
		</button>


		</div>
	    <div class="ui message">
	      Não tem uma conta? <a href="form_primeiro.php">Cadastre-se!</a>
	    </div>
	  </div>
	</div>

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