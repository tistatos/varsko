<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-1"></div>
	<div class="col-md-1"></div>
	<div class="col-md-6">

		
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        	<form class="form-horizontal well" role="form">
        			<div class="col-xs-4">
        				<img src="http://placehold.it/160x100" class="img-responsive img-radio">
        				<button type="button" class="btn btn-primary btn-radio">Left</button>
        				<input type="checkbox" id="left-item" class="hidden">
        			</div>
        			<div class="col-xs-4">
        				<img src="http://placehold.it/160x100" class="img-responsive img-radio">
        				<button type="button" class="btn btn-primary btn-radio">Middle</button>
        				<input type="checkbox" id="middle-item" class="hidden">
        			</div>
        			<div class="col-xs-4">
        				<img src="http://placehold.it/160x100" class="img-responsive img-radio">
        				<button type="button" class="btn btn-primary btn-radio">Right</button>
        				<input type="checkbox" id="right-item" class="hidden">
        			</div>
        		</div>
        		<div class="row space-20">
        			<div class="col-xs-12">
        				<div class="form-group">
        					<label for="inputTitle" class="col-sm-2 control-label">Title</label>
        					<div class="col-sm-10">
        						<input type="text" class="form-control" id="inputTitle">
        					</div>
        				</div>
        			</div>
        		</div>
        	</form>
        </div>
    </div>
</div>



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

		 <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active">HUR</li>
    <li role="presentation">VAD</li>
    <li role="presentation">VERIFERIA</li>
    <li role="presentation">KLAR</li>
  </ul>
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="hur">
				<h1>HUR</h1>


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
				<a href="#veri" aria-controls="messages" role="tab" data-toggle="tab">VERIFIERA</a>
			</div>
		</div>
			
			<div role="tabpanel" class="tab-pane" id="veri">
				<h1>VERIFIKATION</h1>
				<form class="form-inline">
					<div class="form-group">
						<label for="inputVerify" class="sr-only">verify</label>
						<input type="verify" class="form-control" id="inputVerify" placeholder="Verifiera">
					</div>
					<button type="submit" class="btn btn-default"><a href="#klar" aria-controls="settings" role="tab" data-toggle="tab">Verifiera</a></button>
				</form>
			</div>
			<div role="tabpanel" class="tab-pane" id="klar">
				<h1>KLART</h1>
				<p>Kanonbra, nu är det färdigt!</p>
			</div>
		</div>	
	</div>
	<div class="col-md-1"></div>
	<div class="col-md-1"></div>
	<div class="col-md-1"></div>