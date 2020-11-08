<!DOCTYPE html>
<html>
<head>
	<title>TENNY TEA - TEA INVENTORY</title>
	@extends('inc.header_meta')
</head>
<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">
	@extends('inc.top_header_bar')
	@extends('inc.navigation_menu')
	
	<div class="content-body">
		
		<div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">TEA STOCK HANDLER</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Tea Inventory Controller</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Tea Stock Handler</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Basic form layout section start -->
<section id="basic-form-layouts">
	<div class="row match-height">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form">BUYERSACCOUNT ENTER</h4>
					<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
					<div class="heading-elements">
						<ul class="list-inline mb-0">
							<li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
							<li><a data-action="reload"><i class="icon-reload"></i></a></li>
							<li><a data-action="expand"><i class="icon-expand2"></i></a></li>
							<li><a data-action="close"><i class="icon-cross2"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="card-body collapse in">
					<div class="card-block">
						<!-- <div class="card-text">
							<p>This is the most basic and default form having form sections. To add form section use <code>.form-section</code> class with any heading tags. This form has the buttons on the bottom left corner which is the default position.</p>
						</div> -->
						<form class="form">
							<div class="form-body">
								<h4 class="form-section"><i class="icon-head"></i> Tea Stock Details</h4>
								<div class="row">
									
									<div class="col-md-12">
										<div class="form-group">
											<label for="projectinput5">Tea Broker</label>
											<select id="projectinput5" name="interested" class="form-control">
												<option value="none" selected="" disabled="">Select Tea Broker</option>
												<option value="1">FORBES&WALKERTEABROKERS(PVT)LIMITED</option>
												<option value="2">ASIA SIYAKA (PVT) LTD</option>
												<option value="3">EASTER BROKERS</option>
											</select>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput1">Lot No</label>
											<input type="text" id="projectinput1" class="form-control" placeholder="First Name" name="fname">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput2">Tea Mark</label>
											<input type="text" id="projectinput2" class="form-control" placeholder="Last Name" name="lname">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput2">Invoice Number</label>
											<input type="text" id="projectinput2" class="form-control" placeholder="Last Name" name="lname">
										</div>
									</div>
								</div>
								<h4 class="form-section"><i class="icon-head"></i> Tea Packing Details</h4>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput2">Bags Waight</label>
											<input type="text" id="projectinput2" class="form-control" placeholder="Last Name" name="lname">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput2">Tea Waight</label>
											<input type="text" id="projectinput2" class="form-control" placeholder="Last Name" name="lname">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput2">Net Waight</label>
											<input type="text" id="projectinput2" class="form-control" placeholder="Last Name" name="lname">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="projectinput2">Price per 1Kg</label>
											<input type="text" id="projectinput2" class="form-control" placeholder="Last Name" name="lname">
										</div>
									</div>
								</div>

								<!-- <h4 class="form-section"><i class="icon-clipboard4"></i> Requirements</h4> -->

								<div class="form-group">
									<label>Select File</label>
									<label id="projectinput7" class="file center-block">
										<input type="file" id="file">
										<span class="file-custom"></span>
									</label>
								</div>

								<div class="form-group">
									<label for="projectinput8">Remarks</label>
									<textarea id="projectinput8" rows="5" class="form-control" name="comment" placeholder="About Project"></textarea>
								</div>
							</div>

							<div class="form-actions">
								<button type="button" class="btn btn-warning mr-1">
									<i class="icon-cross2"></i> Cancel
								</button>
								<button type="submit" class="btn btn-primary">
									<i class="icon-check2"></i> Save
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Byers Account Details</h4>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                        <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                <!-- <div class="card-block card-dashboard">
                    <p>Use background classes <code class="highlighter-rouge">bg-*</code> to make custom <code class="highlighter-rouge">thead</code> background. You can also use Robust Admin color palette classes for background.</p>
                </div> -->
                <div class="table-responsive">
                    <table class="table">
                        <thead class="bg-primary">
                            <tr>
                                <th>#</th>
                                <th>Broker Name</th>
                                <th>Lot No</th>
                                <th>Tea Mark</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="bg-teal bg-lighten-4">
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- // Basic form layout section end -->
        </div>
      </div>
    </div>

	</div>

</body>
</html>