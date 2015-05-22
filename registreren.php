<!DOCTYPE html>
<html lang="en">

<!-- De scripts -->
<?php include 'resources/head.php'; ?>

<body>
<?php include 'resources/header.php'; ?>

    <div class="container content">
        <div class="container-fluid">
    		<div class="row">
	            <div class="col-md-12">
		        
		<form role="form">
			<h2>Registeer nu <small>Het is gratis.</small></h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="name" id="name" class="form-control input-lg" placeholder="Gebruikersnaam" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Wachtwoord" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                   		<input type="email" name="E-Mail" id="E-Mail" class="form-control input-lg" placeholder="Email adress" tabindex="4">
    				</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-5 col-md-5">
					<div class="col-xs-10 col-sm-10 col-md-10">
					<span class="button-checkbox">
						<p> Ik heb de <bold>Terms and Conditions</bold> gelezen en ga hier mee accoord</p>
					</div>
					<div class="col-xs-2 col-sm-2 col-md-2">
                        <input type="checkbox" name="t_and_c" id="t_and_c" class="" value="1">
					</span>
					</div>
				</div>
				<div class="col-xs-12 col-sm-7 col-md-7">
					 Wanneer u klikt op <strong class="label label-primary">Registeren</strong>, stem je in met de <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> van deze site, inclusief onze koekjes.
				</div>
			</div>
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6 col-md-offset-3"><input type="submit" value="Registreren" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
			</div>
		</form>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
			</div>
			<div class="modal-body">
				<p>A ~ Wij Webshopping</p>
				<p>B ~ U als klant van A(Webshopping)</p>
				<hr>
				<p>1.0 ~ U verkoopt uw ziel aan ons A</p>
				<p>1.1 ~ Wij A kunnen op elk moment geld van B bankrekening incaseren en u stemt hier mee in, zie het als een donatie</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	            </div>	
            </div>
        </div>
    </div>

    

<?php include 'resources/footer.php'; ?>

</body>

</html>