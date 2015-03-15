<div class="row" style="min-height:640px;">
	<div class="col-md-1"></div>
	<div class="col-md-1"></div>
	<div class="col-md-1"></div>
	<div class="col-md-6">
		<ul class="nav nav-tabs" role="tablist">
			<li id="hurTab"role="presentation" class="wizardactivetab">Hur</li>
			<li id="vadTab"role="presentation">Var</li>
			<li id="veriTab"role="presentation">Verifiera</li>
			<li id="klarTab"role="presentation">Klar</li>
		</ul>

		<div class="tab-content">

			<div role="tabpanel" class="tab-pane active" id="hur">
				<h3 style="margin-bottom:50px;">Hur vill du få din information?</h3>

				<div class="col-md-4 text-center">
					<input type="radio" name="infoChannel" id="textRadio" value="text" form="registerForm" required>
					<label for="textRadio" class="radio-inline">
						<img src="img/sms_b.png" alt="" style="height:12%;">
						<h2>SMS</h2>
					</input>
					</label>
				</div>

				<div class="col-md-4 text-center">
						<input type="radio" name="infoChannel" id="mailRadio" value="mail" form="registerForm" required>
					<label for="mailRadio" class="radio-inline">
						<img src="img/mail_b.png" alt="" style="height:12%;">
						<h2>Mail</h2>
					</label>
				</div>

				<div class="col-md-4 text-center">
					<input type="radio" name="infoChannel" id="bothRadio" value="textmail" form="registerForm" required>
					<label for="bothRadio"class="radio-inline">
						<img src="img/sms_mail_b.png" alt="" style="height:12%;">
						<h2>SMS &amp; Mail</h2>
					</label>

				</div>
				<p>Välj något av alternativen ovan.</p>
				<div class="row">
					<div class="col-md-4 col-md-offset-4">
						<div class="form-group">
							<label for="Lan" class="control-label">Telefonnummer</label>
								<input type="text" class="form-control" name="Username" placeholder="07X-XXX XX XX" form="registerForm">
						</div>
						<div class="form-group">
							<label for="Kommun" class="control-label">Email</label>
							<input type="text" class="form-control" name="Email" placeholder="namn@domän.se" form="registerForm">
						</div>
						<div class="form-group">
							<label for="pin" class="control-label">6-siffrig pin-kod</label>
							<input type="password" class="form-control" name="Password" placeholder="******" form="registerForm">
						</div>
					</div>
				</div>
				<p>För att genomföra registreringen krävs det att ni har en fungerande mail eller mobiltelefon.</p>
				<button href="#vad" style="float: right" aria-controls="messages" role="tab" data-toggle="tab" class="btn btn-default btn-next" type="button">Nästa</button>
			</div>
			<div role="tabpanel" class="tab-pane" id="vad">
				<h3 style="margin-bottom:50px;">Vilka områden och vilken information?</h3>
				<div class="row">

					<div class="col-md-6">

							<div class="form-group">
								<label for="Lan" class="control-label">Län</label>
								<input type="text" class="form-control" name="lan" placeholder="Län" form="registerForm">
								<div class="form-group">
									<label for="Kommun" class="control-label">Kommun</label>
									<input type="text" class="form-control" name="kommun" placeholder="Kommun" form="registerForm">
								</div>
							</div>
					</div>
					<div class="col-md-6" style="padding-left:40px;">

						<input id="firecheckbox" type="checkbox" name="fire" value="1" checked form="registerForm">
						<label for="firecheckbox" class="checkbox-label">
							<img src="img/fire_black.png" alt="" style="height:3%;padding-left:5px;padding-right:10px;">Brand
						</label>

						<input id="blackoutcheckbox" type="checkbox" name="blackout" value="1" checked form="registerForm">
						<label for="blackoutcheckbox" class="checkbox-label">
							<img src="img/blackout.png" alt="" style="height:3%;padding-left:5px;padding-right:10px;">Strömavbrott/El
						</label>

						<input id="floodingcheckbox" type="checkbox" name="flooding" value="1"checked form="registerForm">
						<label for="floodingcheckbox" class="checkbox-label">
							<img src="img/flooding.png" alt="" style="height:3%;padding-left:5px;padding-right:10px;">Översvämning
						</label>

						<input id="stormcheckbox" type="checkbox" name="storm" value="1"checked form="registerForm">
						<label for="stormcheckbox" class="checkbox-label">
							<img src="img/storm.png" alt="" style="height:3%;padding-left:5px;padding-right:10px;">Väder/Storm
						</label>
						<input id="pollutioncheckbox" type="checkbox" name="pollution" value="1"checked form="registerForm">
						<label for="pollutioncheckbox" class="checkbox-label">
							<img src="img/airpollution_black.png" alt="" style="height:3%;padding-left:5px;padding-right:10px;">Utsläpp (luft/vatten)
						</label>
<p>Avmarkera de områden du inte är intresserade av</p>
					</div>
				</div>
				<button style="float: right" href="#veri" aria-controls="messages" role="tab" data-toggle="tab" class="btn btn-default btn-next" type="button">Nästa</button>
				<button style="float: right" href="#hur" aria-controls="messages" role="tab" data-toggle="tab" class="btn btn-default btn-prev" type="button">Föregående</button>
			</div>

			<div role="tabpanel" class="tab-pane" id="veri">
				<h3 style="margin-bottom:50px;">Verifiering</h3>
				<form class="form-inline" method="post" action="<?php echo $base; ?>/registerNow" id="registerForm">
					<div class="form-group">
						<label for="inputVerify" class="sr-only">verify</label>
						<input type="verify" class="form-control" id="inputVerify" placeholder="Verifiera">
					</div>
					<p>Vi behöver veta att du verkligen är du. Ett SMS med en kod skickas till dig inom några minuter. Skriv verifieringskoden i fältet ovan.</p>
					<button style="float: right" class="btn btn-success" type="submit">Registrera</button>
					<button style="float: right"href="#vad" aria-controls="messages" role="tab" data-toggle="tab" class="btn btn-default btn-prev" type="submit">Föregående</button>
				</form>
				</div>
		</div>
	</div>
	<div class="col-md-1"></div>
	<div class="col-md-1"></div>
	<div class="col-md-1"></div>
</div>
<script type="text/javascript" src="js/register.js"></script>