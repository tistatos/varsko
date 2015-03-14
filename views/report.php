<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-1"></div>
	<div class="col-md-1"></div>
	<div class="col-md-6">
		<ul class="nav nav-tabs" role="tablist">
			<li id="varTab"role="presentation" class="wizardactivetab">Var</li>
			<li id="veriTab"role="presentation">Verifiera</li>
			<li id="klarTab"role="presentation">Klar</li>
		</ul>
		<h1>Anmäl iaktagelse</h1>
		<div class="tab-content">

			<div role="tabpanel" class="tab-pane active" id="anm">
				<div class="row">
					<form class="form-horizontal">
						<div class="form-group">
							<label for="inputVart" class="col-sm-2 control-label">Var</label>
							<div class="col-sm-10">
								<input type="Vart" class="form-control" id="inputVart" placeholder="Vart">
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
					<button href="#veri" aria-controls="messages" role="tab" data-toggle="tab" class="btn btn-default btn-next" type="submit">Nästa</button>
				</div>
			</div>

			<div role="tabpanel" class="tab-pane" id="veri">
				<h1>Verifiera</h1>
				<form class="form-inline">
					<div class="form-group">
						<label for="inputVerify" class="sr-only">Verifiera</label>					
						<input type="Verify" class="form-control" id="inputVerify" placeholder="Verify">
					</div>
					<p>Vi behöver veta att du verkligen är du.</p>
				</form>
				<button href="#var" aria-controls="messages" role="tab" data-toggle="tab" class="btn btn-default btn-prev" type="submit">Föregående</button>
				<button href="#klar" aria-controls="messages" role="tab" data-toggle="tab" class="btn btn-default btn-next" type="submit">Nästa</button>
			</div>
				<div role="tabpanel" class="tab-pane" id="klar">
					<h1>KLART</h1>
					<p>Kanonbra, nu är det färdigt!</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-md-1"></div>
<div class="col-md-1"></div>
<div class="col-md-1"></div>
</div>
<script type="text/javascript" src="js/register.js"></script>