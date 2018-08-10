
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/component.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/set2.css">
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">


<style type="text/css">
.botao-voltar{
		border-radius: 15px; 
		border: 2px solid; 
		font-size: 18px;
		position: absolute;
		z-index: 2;
		top: 5px;
		left: 5px;
	}

	@font-face {

      font-family: "BPreplayBold";
      src: url("assets/fonts/BPreplayBold.otf") format("opentype");

      }


.replay-font{
    font-family: "BPreplayBold";
    font-size: 25px;  
       }

       @font-face {

            font-family: "Champagne & Limousines Bold";
            src: url("assets/fonts/Champagne & Limousines Bold.ttf") format("truetype");

            }

       .film-font{
        font-family: "Champagne & Limousines Bold";
        font-size: 20px;  
             }  
        .fundo-form{
        	background-color: #F7F0E8;
        	border-radius: 9px;
        	box-shadow: 3px 3px 6px #777570;
        	height: 700px;
        	width: 50%;
        	display: flex;
        	justify-content: center;
        	align-items: center;
        }

        body{
          font-family: 'Bree Serif', serif;

        }

        .msg-deslogado{
           display: block;
           position: absolute;
           top: 15%;
        }

        .header{
        width: 100%;
        background-color: #361850; 
        overflow: hidden;
    }

    .container-fluid{
        padding: 0px;
    }

    .replay-font{
    font-family: "BPreplayBold";
    font-size: 29px;
    padding: 15px;
    margin-left: 1100px;
       }

       #fundo-logo{
       	width: 300px;
       	height: 300px;
       	background-color: #fff;
       	position: absolute;
       }
       
</style>

	</head>

<body>

	<div class="container-fluid">


	<a class="btn btn-outline-dark botao-voltar" style="font-family: 'Bree-Serif', serif;" href="<?php echo BASE_URL; ?>">Voltar</a>
	<div class="row">

		<div class="col-sm-6" style="width: 100%; height: 900px;background: linear-gradient(45deg, #A491BA, #CFC1DE); display: flex; justify-content: center; align-items: center;">
		
		



	<div class="fundo-form">
		<div class="msg-deslogado">
		<?php 
    
	if (isset($_SESSION['msg'])) {
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
	}

	?>
</div>
	
	<img src="<?php echo BASE_URL ?>assets/images/Login_icon-icons.com_52028 (1).png" style="display: block; position: absolute;top:25%;">
	<form method="POST" action="<?php echo BASE_URL ?>login/valida" name="login" style="width: 90%;">
		<span class="input input--ruri">
					<input class="input__field input__field--ruri" type="text" id="input-26" name="email_txt" />
					<label class="input__label input__label--ruri" for="input-26">
						<span class="input__label-content input__label-content--ruri">
							<img src="<?php echo BASE_URL ?>assets/images/newpost_email_3297.png" width="20"> Email </span>
					</label>
         </span>
         <br>
	<span class="input input--ruri">
					<input class="input__field input__field--ruri" type="password" id="input-27" name="senha_txt" />
					<label class="input__label input__label--ruri" for="input-27">
						<span class="input__label-content input__label-content--ruri"><img src="<?php echo BASE_URL ?>assets/images/password_3715.png" width="20"> Senha</span>
					</label>
         </span>
         <br>
		<input type="submit" name="enviar_login" class="btn btn-outline-dark btn-md" style="box-shadow: 1px 1px 3px #232323;">
	</form>
</div>
</div>

	
	<div class="col-sm-6" style="height: 900px; background-color: #381850;">
     	<div class="rounded-circle" id="fundo-logo" style="left:27%; top: 30%;">
		   <img src="<?php echo BASE_URL ?>assets/images/finderLogopng.png" class="img-fluid" width="250" style="left: 10%; position: absolute; top: 10%;" >
		</div>
	</div>

</div>
</div>

    



	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery.mask.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/cadastro.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/classie.js"></script>
        
        <script>
			(function() {
				// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
				if (!String.prototype.trim) {
					(function() {
						// Make sure we trim BOM and NBSP
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled' );
					}

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '' ) {
						classie.remove( ev.target.parentNode, 'input--filled' );
					}
				}
			})();
		</script>	
	
</body>
</html>