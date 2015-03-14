<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-1"></div>
	<div class="col-md-1"></div>
	<div class="col-md-6">


		<ul class="nav nav-tabs" role="tablist">
			<li id="hurTab"role="presentation" class="wizardactivetab">Hur</li>
			<li id="vadTab"role="presentation">Vad</li>
			<li id="veriTab"role="presentation">Verifiera</li>
			<li id="klarTab"role="presentation">Klar</li>
		</ul>
		<div class="tab-content">

			<div role="tabpanel" class="tab-pane active" id="hur">
				<h1>Hur</h1>
				<label class="radio-inline">
					<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> SMS
				</label>
				<label class="radio-inline">
					<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> SMS &amp; Mail
				</label>
				<label class="radio-inline">
					<input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Mail
				</label>
				<br>
				<p>Hur vill du få din information?</p>
				<button href="#vad" aria-controls="messages" role="tab" data-toggle="tab" class="btn btn-default btn-next" type="submit">Nästa</button>
			</div>
			<div role="tabpanel" class="tab-pane" id="vad">
				<h1>Vad</h1>
				<div class="row">
					<div class="col-md-6">
						<form class="form-horizontal">
							<div class="form-group">
								<label for="inputLan" class="col-sm-2 control-label">Län</label>
								<div class="col-sm-10">
									<input type="Lan" class="form-control" id="inputEmail3" placeholder="Län">

								</div>
								<div class="form-group">
									<label for="inputKommun" class="col-sm-2 control-label">Kommun</label>
									<div class="col-sm-10">
										<input type="Kommun" class="form-control" id="inputPassword3" placeholder="Kommun">
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-6">
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox1" value="1" checked> Brand
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox2" value="1" checked> Strömavbrott/El
						</label>
					</div>
					<div class="col-md-6">
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox3" value="1"checked> Översvämning
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox4" value="1"checked> Väder/Storm
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" id="inlineCheckbox5" value="1"checked> Utsläpp (luft/vatten)
						</label>

					</div>
				</div>
				<button href="#hur" aria-controls="messages" role="tab" data-toggle="tab" class="btn btn-default btn-prev" type="submit">Föregående</button>
				<button href="#veri" aria-controls="messages" role="tab" data-toggle="tab" class="btn btn-default btn-next" type="submit">Nästa</button>


			</div>
			
			<div role="tabpanel" class="tab-pane" id="veri">
				<h1>Verifiering</h1>
				<form class="form-inline">
					<div class="form-group">
						<label for="inputVerify" class="sr-only">verify</label>
						<input type="verify" class="form-control" id="inputVerify" placeholder="Verifiera">
					</div>			
				</form>
				<button href="#vad" aria-controls="messages" role="tab" data-toggle="tab" class="btn btn-default btn-prev" type="submit">Föregående</button>
				<button href="#klar" aria-controls="messages" role="tab" data-toggle="tab" class="btn btn-danger btn-next" type="submit">Registrera</button>
			</div>
			<div role="tabpanel" class="tab-pane" id="klar">
				<h1>Klart!</h1>
				<p>Kanonbra, nu är det färdigt!</p>

			</div>
		</div>	
	</div>
	<div class="col-md-1"></div>
	<div class="col-md-1"></div>
	<div class="col-md-1"></div>
	<script type="text/javascript" src="js/register.js"></script>