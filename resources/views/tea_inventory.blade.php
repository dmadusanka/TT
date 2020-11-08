@extends('inc.master')

@section('title', 'Tea Inventory')
		
<div class="app-content content container-fluid">
    <div class="content-wrapper">
    	<div class="content-header row">
        	<div class="content-header-left col-md-6 col-xs-12 mb-1">
            	<h2 class="content-header-title">Buyers Account Entering Section</h2>
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
									<form method="post" action="/saveTea" class="form" id="main_form" name="main_form" enctype="multipart/form-data">
										{{csrf_field()}}
										<div class="form-body">
											<h4 class="form-section"><i class="icon-head"></i> Tea Stock Details</h4>

											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label for="projectinput5">Conpamy Profile</label>
														<select id="companay" name="companay" id="companay" class="form-control">
															<option value="none" selected disabled>Select Company Profile</option>
														</select>
													</div>
												</div>

												<div class="col-md-12">
													<div class="form-group">
														<label for="projectinput5">Tea Broker</label>
														<select id="brocker" name="brocker" id="brocker" class="form-control">
															<option value="none" selected disabled>Select Tea Broker</option>
														</select>
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label for="projectinput1">S Code</label>
														<input type="text" id="s_code" class="form-control" placeholder="Sale Code" name="s_code">
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label for="projectinput2">Sale Date</label>
														<input type="date" id="sale_date" class="form-control" placeholder="Sale Date" name="sale_date">
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label for="projectinput1">Lot No</label>
														<input type="text" id="lot_no" class="form-control" placeholder="Lot Number" name="lot_no">
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label for="projectinput2">Tea Mark</label>
														<input type="text" id="tea_mark" class="form-control" placeholder="Tea Mark" name="tea_mark">
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<label for="projectinput2">Invoice Number</label>
														<input type="text" id="invoice_number" class="form-control" placeholder="Invoice Number" name="invoice_number">
													</div>
												</div>

													<!-- <div class="col-md-6">
														<div class="form-group">
															<label for="projectinput2">Tea Grade</label>
															<input type="text" id="tea_grade" class="form-control" placeholder="Tea Grad`e" name="tea_grade">
														</div>
													</div> -->

												<div class="col-md-6">
													<div class="form-group">
														<label for="projectinput5">Tea Grade</label>
														<select id="tea_grade" name="tea_grade" id="tea_grade" class="form-control">
															<option value="none" selected disabled>Select Tea Grade</option>
																<option value="1">OP</option>
																<option value="2">FOP</option>
																<option value="3">BOP</option>
																<option value="4">FBOP</option>
																<option value="5">PEKOE</option>
																<option value="">PEKOE 1</option>
														</select>
													</div>
												</div>


											</div>

											<h4 class="form-section"><i class="icon-head"></i> Tea Packing Details</h4>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="projectinput2">Bags Weight</label>
														<input type="text" id="bag_weight" class="form-control" placeholder="Bags Weight" name="bag_weight">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="projectinput2">Tea Weight</label>
														<input type="text" id="tea_weight" class="form-control" placeholder="Tea Weight" name="tea_weight">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="projectinput2">Net Waight</label>
														<input disabled type="text" id="net_weight" class="form-control" placeholder="Net Weight" name="net_weight">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="projectinput2">Price per 1Kg</label>
														<input type="text" id="price_tag" class="form-control" placeholder="Price Per 1kg" name="price_tag">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<h2><strong><label for="projectinput2">Total</label></strong></h2>
														<input disabled type="text" id="total" class="form-control" placeholder="Total" name="total">
													</div>
												</div>
											</div>

											<!-- <h4 class="form-section"><i class="icon-clipboard4"></i> Requirements</h4> -->

											<!-- <div class="form-group">
												<label>Select File</label>
												<label id="projectinput7" class="file center-block">
													<input type="file" id="file">
													<span class="file-custom"></span>
												</label>
											</div> -->

											<div class="form-group">
												<label for="projectinput8">Remarks</label>
												<textarea id="remarks" rows="5" class="form-control" name="remarks" placeholder="Remarks"></textarea>
											</div>
										</div>

										<div class="form-actions">
											<button id="Cancel" name="cancel" type="button" class="btn btn-warning mr-1">
												<i class="icon-cross2"></i> Cancel
											</button>
											<button id="submit" name="submit" type="submit" class="btn btn-primary">
												<i class="icon-check2"></i> Save
											</button>
											<button id="print" name="print" type="button" class="btn btn-danger">
												<i class="icon-print"></i> Print
											</button>
										</div>
										<input type="hidden" id="operation" name="operation" value="insert">
										<input type="hidden" id="up_id" name="up_id" value="0">
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
			                    <table id="head_table" class="table">
			                        <thead class="bg-primary">
			                            <tr>
			                                <th>Id</th>
			                                <th>Broker Name</th>
			                                <th>S Code</th>
			                                <th>Sale Date</th>
			                                <th>Lot No</th>
			                                <th>Tea Mark</th>
			                                <th>Invoice Number</th>
			                                <th>Tea Grade</th>
			                                <th>Tea wight</th>
			                                <th>Net Weight</th>
			                                <th>Price</th>
			                                <th>Total</th>
			                                <th>Status</th>
			                                <th>Action</th>
			                            </tr>
			                        </thead>
			                        <tbody id="t_body">

			                        	<!-- @foreach($row_data as $r_data)
			                            <tr id="{{$r_data->id}}">

			                                <th scope="row">{{$r_data->id}}</th>
			                                <td>{{$r_data->tea_broker_id}}</td>
			                                <td>{{$r_data->tea_mark}}</td>
			                                <td>{{$r_data->lot_no}}</td>
			                                <td>{{$r_data->invoice_number}}</td>
			                                <td>{{$r_data->bags_weight}}</td>
			                                <td>{{$r_data->tea_weight}}</td>
			                                <td>{{$r_data->net_weight}}</td>
			                                <td>{{$r_data->price_per_kg}}</td>
			                                <td>{{$r_data->remarks}}</td>
			                                <td>{{$r_data->status}}</td>
			                                <td style="padding: 0px;">
			                                	<button class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="icon-pencil3"></span></button>
			                                	<button class="btn btn-danger btn-rounded btn-condensed btn-sm"><span class="icon-remove"></span></button>
			                                	
			                                </td>
			                            </tr>
			                            @endforeach -->
			                        </tbody>
			                    </table>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
			<!-- // Basic form layout section end -->
        </div>
	</div>
</div>

@push('scripts')
	<script type="text/javascript">
		$(document).ready(() => {
			// alert ("jquery works!");
			//function call section
			broker_loard();
			table_load();
			companay_load();

			$('#print').on('click', function(){
				alert ("Please Check your Printer Configurations.");
			});

			// functions initiate section - Manual event calling
			function companay_load(){
				$.ajax({
					url :'/profile_load',
					method : 'post',
					data:{
						'_token' : '{{csrf_token()}}'
					},
					error:function(r){
						console.log(JSON.stringify(r));
					},
					success: function(r){
						$('#companay').html("<option value='none' selected disabled>Please Select Company</option>");

						$.each(r, (k, v)=>{
							console.log(JSON.stringify(r));
							$('#companay').append('<option value="'+v.com_id+'">'+v.com_name+'</option>');
						});

					}
				});
			}

			function broker_loard(){
				$.ajax({
					url:'/broker',
					method:'post',
					data:{
						'_token':'{{csrf_token()}}'
					},
					error:function(e){
						console.error(e);
					},
					success:function(r){
						$('#brocker').html("<option value='none' selected disabled>Select Tea Broker</option>");

						$.each(r, (k, v) => {
							console.log(v);
							$('#brocker').append('<option value="' + v.id + '">' + v.brocker_name + "</option>");
						});
					}
				});
			}

			function table_load(){

				$.ajax({
					url:'/tableLoad',
					method:'post',
					data:{
						'_token':'{{csrf_token()}}'	
					},
					error:function(e){
						console.log(e);
					},
					success: function(r){
						$('#t_body').html("");

						$.each(r, (k, v)=>{
							var html = "";

							if(v.status == 0){
								var status = "Not Approve";
							} else {
								var status = "Approve";
							}

							html ="<tr class='rows_data' id='"+v.id+"'>";
							html +="<th scope=\"row\" style=\"font-size: 1em;\">"+v.id+"</th>";
							html +="<td>"+v.brocker_name+"</td>";
							html +="<td>"+v.scode+"</td>";
							html +="<td>"+v.saleDate+"</td>";
							html +="<td>"+v.lot_no+"</td>";
							html +="<td>"+v.tea_mark+"</td>";
							html +="<td>"+v.invoice_number+"</td>";
							html +="<td>"+v.tea_grade+"</td>";
							html +="<td>"+v.bags_weight+" X "+v.tea_weight +"</td>";
							html +="<td>"+v.net_weight+"</td>";
							html +="<td>"+v.price_per_kg+"</td>";
							html +="<td>"+v.total+"/=</td>";
							html +="<td>"+status+"</td>";
							html +="<td style='padding: 0px;'>";
							html += "<button id=\"edit_tn\" class=\"btn btn-default btn-rounded btn-condensed btn-sm action_btn\"><span class=\"icon-pencil3\"></span></button>";
							html += "<button class=\"btn btn-danger btn-rounded btn-condensed btn-sm\"><span class=\"icon-remove\"></span></button>";
							html +="</td>";
							html +="</tr>";

							$('#t_body').append(html);

						});
					}
				});

			}

			$('#main_form').on('submit', function(e){
				e.preventDefault();

				var d = $('#main_form').serializeArray();
				d.push({name:'_token', value:'{{csrf_token()}}'});
				// alert (JSON.stringify(d));
				$.ajax({
					url:'/saveTea',
					data : d,
					method:'post',
					errors:function(e){
						alert (e)
					},
					success:function(r){
						if(r.status = "200"){
							table_load();
							alert ("This Lot Enter To System.");
						} else {
							table_load();
							alert ("Not DONE");
						}
						
					}
					// dataType:'json',

				});
			});

			$('#head_table tbody').on('click', '#edit_tn', function(){
				var id = $(this).closest('tr').attr('id');

				$.ajax({
					url : '/select_tea_update_data',
					method:'post',
					data:{
						'_token':'{{csrf_token()}}',
						'id': id
					},
					error : function(e){
						alert (JSON.stringify(e));
					},
					success : function(r){
						$.each(r, (k ,v)=>{
							$('#operation').val('update');
							$('#up_id').val(v.id);

							setTimeout(function(){
								$('#companay').val(v.com_id);	
							},500);

							setTimeout(function(){
								$('#brocker').val(v.tea_broker_id);
							},500);

							// $('#companay').val(v.scode);
							// $('#brocker').val(v.scode);
							$('#s_code').val(v.scode);
							$('#sale_date').val(v.saleDate);
							$('#lot_no').val(v.lot_no);
							$('#tea_mark').val(v.tea_mark);
							$('#invoice_number').val(v.invoice_number);
							$('#tea_grade').val(v.tea_grade);
							$('#bag_weight').val(v.bags_weight);
							$('#tea_weight').val(v.tea_weight);
							$('#net_weight').val(v.net_weight);
							$('#price_tag').val(v.price_per_kg);
							$('#total').val(v.total);
							$('#remarks').val(v.remarks);
							$('#submit').val('Update');
						});
					}
				});
				
			});


		});

		$('#tea_weight').on('keyup', function(){
			var bag_weight = $('#bag_weight').val();
			var tea_weight = $('#tea_weight').val();
			var net_weight = bag_weight * tea_weight;

			$('#net_weight').val(net_weight);
		});

		$('#price_tag').on('keyup', function(){
			var net_weight= $('#net_weight').val();
			var price_tag = $('#price_tag').val();

			var total = net_weight * price_tag;

			$('#total').val(total);
		});

		$('#lot_no').on('keyup', function(){
			var lot_no = $('#lot_no').val();
			
			$.ajax({
				url:'/lotCheck',
				data:{
					'lot_no':lot_no,
					'_token':'{{csrf_token()}}'
				},
				method:'post',
				error:function(e){
					alert (JSON.stringify(e));
				},
				success:function(r){
					//console.log(JSON.stringify(r));
					// console.log(JSON.stringify(r.status));

					if(r.status == true){
						alert ('This Lot Number Is Exist');
						console.log('Exist');
					} else {
						console.log('Not In Section');
					}
				}
			});
		});

	</script>
@endpush