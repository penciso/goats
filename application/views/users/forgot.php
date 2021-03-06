<div class="container-fluid">
	
	<main role="main">
		
		<section>
			<div class="container">
				<div class="row mt-5">
					<div class="col-12 col-md-3">&emsp;</div>

					<div class="col-12 col-md-6">
						<div class="card mt-5">
							<div class="card-body">
								
								<h5 class="card-title">Find Your Account</h5>
								<div class="dropdown-divider"></div>
								<div class="row">
									<div class="col-auto"><span class="text-muted">Please enter your email to continue</span></div>
								</div>
								<?= form_open(base_url().'forgot/identify',array('class' => 'mt-2')) ?>
									<div class="row">
										<div class="col-12">
											<div class="form-group">
												<input class="form-control" type="text" value="" name="forgot_info" placeholder="Email Address" />
												<small class="form-text text-muted">
													<?php echo (form_error('forgot_info')	!= "" ? form_error('forgot_info') : ''); ?>	
												</small>
											</div>
										</div>
									</div>
									<div class="row pull-right">
										<div class="d-inline-block">
											<button type="submit" class="btn btn-sm btn-success col-12 float-right d-inline-block" >
												&emsp;Search&emsp;
											</button>
										</div>
										<div class="col-2">
											<a href="#" class="btn btn-dark btn-sm">Cancel</a>
										</div>
									</div>
								<?= form_close(); ?>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-3">&emsp;</div>
				</div>
			</div>
		</section>

	</main>

</div>