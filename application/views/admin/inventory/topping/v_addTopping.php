		<div class="page-title">
			<div class="title_left">
				<h3>Form Add Data Topping</h3>
			</div>

			<div class="title_right">
				<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search for...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">Go!</button>
						</span>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Input Data <small>Topping</small></h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							</li>
							<li><a class="close-link"><i class="fa fa-close"></i></a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left input-mask" method="post" action="<?= base_url('index.php/c_admin/insert_topping') ?>">
							<div class="row">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Topping <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
									<input type="text" class="form-control" id="inputSuccess3" placeholder="ex : oreo" name="nama" required="">
								</div>
							</div>

							<div class="row">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Harga <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
									<input type="number" class="form-control has-feedback-left" id="inputSuccess2" placeholder="ex: 50000" name="harga" required="">
									<span class="form-control-feedback left" aria-hidden="true">Rp.</span>
								</div>
							</div>

							<div class="row">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Stok <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
									<input type="number" class="form-control" id="inputSuccess3" placeholder="ex : 10" name="stok" required="">
								</div>
							</div>

							<div class="row">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Region <span class="required">*</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
									<select class="form-control" name="region" required="">
										<optgroup label="Region">
											<option value="">-- Pilih Region --</option>
											<?php
											foreach ($region as $key => $value) {
											?>
												<option value="<?= $value->id_region ?>"><?= $value->nama_region ?></option>
											<?php
											}
											?>
										</optgroup>
									</select>
								</div>
							</div>

							<div class="ln_solid"></div>
							<div class="form-group">
								<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
									<a href="<?= base_url('index.php/c_admin/inventory') ?>"><button class="btn btn-primary" type="button">Cancel</button></a>
									<button class="btn btn-primary" type="reset">Reset</button>
									<button type="submit" name="submit" class="btn btn-success">Submit</button>
								</div>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>