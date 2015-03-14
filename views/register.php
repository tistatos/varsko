<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-1"></div>
	<div class="col-md-1"></div>
	<div class="col-md-6">
		<div id="hur">
			<h1>HUR</h1>
			<table class="table"><tr>
				<td class="wizardactivetab">Hur</td><td>Vad</td><td>Verifiera</td><td>Klar</td>
			</tr></table>
			<label class="radio-inline">
				<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> SMS
			</label>
			<label class="radio-inline">
				<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> SMS &amp; Mail
			</label>
			<label class="radio-inline">
				<input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Mail
			</label>
		</div>
		<div id="vad">
			<h1>VAD</h1>
			<table class="table"><tr>
				<td>Hur</td><td class="wizardactivetab">Vad</td><td>Verifiera</td><td>Klar</td>
			</tr></table>
			<div class="row">
				<div class="col-md-6">
					<form class="form-horizontal">
						<div class="form-group">
							<label for="inputLan" class="col-sm-2 control-label">Län</label>
							<div class="col-sm-10">
								<input type="Lan" class="form-control" id="inputEmail3" placeholder="Län">
							</div>
						</div>
						<div class="form-group">
							<label for="inputKommun" class="col-sm-2 control-label">Kommun</label>
							<div class="col-sm-10">
								<input type="Kommun" class="form-control" id="inputPassword3" placeholder="Kommun">
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
		</div>
		<div id="veri">
			<h1>VERIFIKATION</h1>
			<table class="table"><tr>
				<td>Hur</td><td>Vad</td><td class="wizardactivetab">Verifiera</td><td>Klar</td>
			</tr></table>
			<form class="form-inline">
				<div class="form-group">
					<label for="inputPassword2" class="sr-only">Password</label>
					<input type="password" class="form-control" id="inputPassword2" placeholder="Password">
				</div>
				<button type="submit" class="btn btn-success">Confirm identity</button>
			</form>
		</div>
		<div id="klar">
			<h1>KLART</h1>
			<table class="table"><tr>
				<td>Hur</td><td>Vad</td><td>Verifiera</td><td class="wizardactivetab">Klar</td>
			</tr></table>
			<p>Kanonbra, nu är det färdigt!</p>
		</div>
	</div>
	<div class="col-md-1"></div>
	<div class="col-md-1"></div>
	<div class="col-md-1"></div>