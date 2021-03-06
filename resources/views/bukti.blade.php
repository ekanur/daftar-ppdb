<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Antrian Layanan PPDB SMK N 2 Depok</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />
</head>

<body>
	<div class="image-container set-full-height" style="background-image: url('assets/img/smkn2depok_depan.jpg')">
	    <!--   Creative Tim Branding   -->
	    <a href="{{url('/')}}">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="assets/img/new_logo.png">
	            </div>
	            <div class="brand">
	                Layanan PPDB
	            </div>
	        </div>
	    </a>

		<!--  Made With Material Kit  -->
		<!-- <a href="http://demos.creative-tim.com/material-kit/index.html?ref=material-bootstrap-wizard" class="made-with-mk">
			<div class="brand">MK</div>
			<div class="made-with">Made with <strong>Material Kit</strong></div>
		</a> -->

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="red" id="wizard">
		                    <form action="" method="">
		                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        		Antrian Layanan PPDB SMK N 2 Depok Sleman
		                        	</h3>
									<h5>Form ini digunakan untuk mendaftar antrian layanan PPDB. Dengan memperhatikan kondisi pandemi, tiap hari akan melayani 50 kuota.</h5>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="{{ url('/') }}" data-toggle="tab">Data Diri</a></li>
			                            <li class='active'><a href="#captain" data-toggle="tab">Bukti Antrian</a></li>
			                            <!-- <li><a href="#description" data-toggle="tab">Extra Details</a></li> -->
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="details">
		                            	
		                            	
		                            </div>
		                            <div class="tab-pane active" id="captain">
		                                <h4 class="info-text">Bukti Antrian </h4>
		                                <div class="row">
		                                    <div class="col-sm-10 col-sm-offset-1">
		                                        <table class="table table-responsive">
													<tr>
														<td>Nama : </td>
														<td>{{ $antrian_baru->nama_lengkap }}</td>
													</tr>
													<tr>
														<td>NISN : </td>
														<td>{{ $antrian_baru->nisn }}</td>
													</tr>
													<tr>
														<td>No. Antrian : </td>
														<td>{{ $antrian_baru->antrian }}</td>
													</tr>
													<tr>
														<td>Tanggal Layanan : </td>
														<td>{{ $antrian_baru->tanggal_layanan->format("Y-m-d") }}</td>
													</tr>
												</table>
												NB. Download Bukti Antrian untuk ditunjukan sebelum mendapatkan pelayanan
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="description">
		                                <div class="row">
		                                    <h4 class="info-text"> Drop us a small description.</h4>
		                                    <div class="col-sm-6 col-sm-offset-1">
	                                    		<div class="form-group">
		                                            <label>Room description</label>
		                                            <textarea class="form-control" placeholder="" rows="6"></textarea>
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-4">
		                                    	<div class="form-group">
		                                            <label class="control-label">Example</label>
		                                            <p class="description">"The room really nice name is recognized as being a really awesome room. We use it every sunday when we go fishing and we catch a lot. It has some kind of magic shield around it."</p>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
	                        	<div class="wizard-footer">
	                            	<div class="pull-right">
	                                    <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Proses' />
	                                    </form>
										<form action="{{url('download')}}" method="post">
											@csrf
											<input type="hidden" name="id" value={{$antrian_baru->id}}>
											<input type='submit' class='btn btn-finish btn-fill btn-danger btn-wd' value="Download Bukti Antrian"/>
	                                	</form>
									</div>
	                                <div class="pull-left">
	                                    <!-- <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' /> -->

										<div class="footer-checkbox">
											<div class="col-sm-12">
											  <div class="checkbox">
												  <!-- <label>
													  <input type="checkbox" name="optionsCheckboxes">
												  </label>
												  Subscribe to our newsletter -->
											  </div>
										  </div>
										</div>
	                                </div>
	                                <div class="clearfix"></div>
	                        	</div>
		                    
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div> <!-- row -->
		</div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
	             Made with <i class="fa fa-heart heart"></i> by <a href="">STU</a>.
	        </div>
	    </div>
	</div>

</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/material-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js"></script>
</html>
