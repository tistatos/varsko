<div class="row" style="min-height:640px;">
	<div class="col-md-1"></div>
	<div class="col-md-6">
		<ul class="nav nav-tabs nav-tabsfew" role="tablist">
			<li id="varTab"role="presentation" class="wizardactivetab">Var</li>
			<li id="veriTab"role="presentation">Verifiera</li>
			<li id="klarTab"role="presentation">Klar</li>
		</ul>
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="anm">
			<h1>Anmäl iaktagelse</h1>
				<div class="row">
					<form action="#" method="" id="anm" class="form-horizontal">
						<div class="form-group">
							<label for="inputVart" class="col-sm-2 control-label">Var</label>
							<div class="col-sm-10">
								<input type="Var" class="form-control" id="inputVar" placeholder="Var">
							</div>
						</div>
						<div class="form-group">
							<label for="inputVad" class="col-sm-2 control-label">Vad</label>
							<div class="col-sm-10">
								<input type="Vad" class="form-control" id="inputVad" placeholder="Vad">
							</div>
						</div>
						<div class="form-group">
							<label for="inputTel" class="col-sm-2 control-label">Telefonnummer</label>
							<div class="col-sm-10">
								<input type="Tel" class="form-control" id="inputTel" placeholder="Telefonnummer">
							</div>
						</div>
					</form>
					<button style="float: right" href="#veri" aria-controls="messages" role="tab" data-toggle="tab" class="btn btn-default btn-next" type="button">Nästa</button>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane" id="veri">
				<h1>Verifiera</h1>
				<form class="form-inline" id="anm" method="#" action="#">
					<div class="form-group">
						<label for="inputVerify" class="sr-only">Verifiera</label>					
						<input type="Verify" class="form-control" id="inputVerify" placeholder="Verify">
					</div>
					<br><p>Vi behöver veta att du verkligen är du. Ett SMS med en kod skickas till dig inom några minuter. Skriv verifieringskoden i fältet ovan.</p>
				</form>
					<button href="#klar" style="float: right" aria-controls="messages" role="tab" data-toggle="tab" class="btn btn-danger btn-next" type="button">Anmäl</button>
				<button href="#var" style="float: right" aria-controls="messages" role="tab" data-toggle="tab" class="btn btn-default btn-prev" type="submit">Föregående</button>
			</div>
			<div role="tabpanel" class="tab-pane" id="klar">
				<h1>KLART</h1>
				<p>Kanonbra, nu är det färdigt!<br>Så fort det har inkommit ett antal liknande anmälningar kommer allmänheten i området att varnas. <br><br>Tack för din insats! </p>
			</div>
		</div>
	</div>
	<div class="col-md-1"></div>

	<div class="col-md-3 well">
		<h2>Nödsituation?</h2>
		<p>Nödnumret 112 ska användas vid akuta nödsituationer då det föreligger fara för liv, egendom eller miljö. 
			<br><br>Är det inte en akut fara kan man ringa 11414 för att komma till närmaste polisstation.</p>
	</div>
	<div class="col-md-1"></div>
</div>
<script type="text/javascript" src="js/register.js"></script>