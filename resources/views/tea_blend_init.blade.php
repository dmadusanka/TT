@extends('inc.master')

@section('title', 'Tea Inventory')
		
<div class="app-content content container-fluid">
    <div class="content-wrapper">
    	<div class="content-header row">
        	<div class="content-header-left col-md-6 col-xs-12 mb-1">
            	<h2 class="content-header-title">Tea Blending Unit</h2>
          	</div>
		  
			<div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
				<div class="breadcrumb-wrapper col-xs-12">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Home</a>
						</li>
						<li class="breadcrumb-item"><a href="#">Tea Inventry</a>
						</li>
						<li class="breadcrumb-item active"><a href="#">Tea Blending Unit</a>
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
								<h4 class="card-title" id="basic-layout-form">BLEND SHEET CREATE</h4>
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
									<form method="GET" action="/saveTea" class="form" id="main_form" name="main_form" enctype="multipart/form-data">
										{{csrf_field()}}
										<div class="form-body">

											<h4 class="form-section"><i class="icon-head"></i> Shipment Details</h4>

											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label for="projectinput5">Company Profile</label>
														<select id="companay" name="companay" class="form-control">
															<option value="none" selected disabled>Select Compnay Profile</option>
														</select>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label for="projectinput2">Date</label>
														<input type="date" disabled id="s_date" class="form-control" placeholder="Shipment Date" name="s_date">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="projectinput2">Reg No</label>
														<input type="text" disabled id="reg_no" class="form-control" placeholder="Registration Number" name="reg_no">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="projectinput2">Blend Number</label>
														<input type="text" disabled id="blend_no" class="form-control" placeholder="Blend Number" name="blend_no">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label for="projectinput2">CTR No</label>
														<input type="text" disabled id="ctr_no" class="form-control" placeholder="CTR Number" name="ctr_no">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="projectinput2">Tea Grade</label>
														<input type="text" disabled id="tea_grade" class="form-control" placeholder="Tea Grade" name="tea_grade">
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label for="projectinput2">Shipment Quantity KG</label>
														<input type="text" disabled id="shipment_qua" class="form-control" placeholder="Shipment Quantity" name="shipment_qua">
													</div>
												</div>
											</div>

											<h4 class="form-section"><i class="icon-head"></i> Tea Stock Details</h4>

											<div class="row">

												<div class="col-md-12">
													<div class="form-group">
														<label for="projectinput5">Tea Lot Number</label>
														<select disabled id="search" name="search" class="form-control">
															<option value="none" selected disabled>Enter Tea Lot Number</option>
														</select>
													</div>
												</div>


											</div>

											<h4 class="form-section"><i class="icon-head"></i> Tea Packing Details</h4>

											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label for="projectinput2">Bags Weight</label>
														<input disabled type="text" id="bag_weight" class="form-control" placeholder="Bags Weight" name="bag_weight">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="projectinput2">Tea Weight</label>
														<input disabled type="text" id="tea_weight" class="form-control" placeholder="Tea Weight" name="tea_weight">
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
														<input disabled type="text" id="price_tag" class="form-control" placeholder="Price Per 1kg" name="price_tag">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="projectinput2">Total</label>
														<input disabled type="text" id="total" class="form-control" placeholder="Total" name="total">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="projectinput2">Using Tea</label>
														<input type="text" id="using_tea" class="form-control" placeholder="Total" name="using_tea">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label for="projectinput2">Balance Tea</label>
														<input type="text" id="balance_tea" class="form-control" placeholder="Balance Tea" name="balance_tea">
													</div>
												</div>
											</div>

										</div>
									</form>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="form-actions">
					<button id="add" name="add" type="button" class="btn btn-primary">
						<i class="icon-check2"></i> ADD ROW
					</button>

				</div>
			<form method="GET" class="form" id="table_data_form" name="table_data_form" enctype="multipart/form-data">
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
			                                <!-- <th>Id</th> -->
			                                <th>Bags Weight</th>
			                                <th>Tea Weight</th>
			                                <th>Net Waight</th>
			                                <th>Price per 1Kg</th>
			                                <th>Total</th>
			                                <th>Using Tea</th>
			                                <th>Balance Tea</th>
			                                <th>Action</th>
			                            </tr>
			                        </thead>
			                        <tbody id="t_body">
			                        </tbody>
			                    </table>
			                </div>
			            </div>
			        </div>
			    </div>
				<div class="form-actions">
					<button id="Cancel" name="cancel" type="button" class="btn btn-warning mr-1">
						<i class="icon-cross2"></i> Cancel
					</button>
					<button id="submit" name="submit" type="submit" class="btn btn-primary">
						<i class="icon-check2"></i> Save
					</button>
					<section id="printId">
						
					</section>

				</div>
					<input type="hidden" id="operation" name="operation" value="insert">
					<input type="hidden" id="up_id" name="up_id" value="0">
			</form>
			</div>
			<!-- // Basic form layout section end -->
        </div>
	</div>
</div>

@push('scripts')
	<script type="text/javascript">
		$(document).ready(() => {
			// alert ("jquery works!");
			// console.log('DONE');
			//function call section
			broker_loard();
			// table_load();
			companay_load();

			$('#companay').on('change', function(){
				var search = $('#search').removeAttr("disabled");
				var data = $('#s_date').removeAttr("disabled");
				var register_no = $('#reg_no').removeAttr("disabled");
				var blend_no = $('#blend_no').removeAttr("disabled");
				var ctr_no = $('#ctr_no').removeAttr('disabled');
				var tea_grade = $('#tea_grade').removeAttr('disabled');
				var shipment_qua = $('#shipment_qua').removeAttr('disabled');
			});

			$('#search').select2({
				minimumInputLength: 0,
				ajax: {
					url: '/tea_search',
					dataType: 'json',
					method: 'get',
					delay: 100,
					data: function (term) {
						let com = $('#companay').val();
						return {
							term: term,
							com:com
							//'_token' : '{{csrf_token()}}',
						}
					},
					success:function(res){
						//console.log(res['term']);
					},
					error:function(e){
						console.log(e);
					},
					processResults: function (data) {
						return {
							results: $.map(data['term'], function (item) {
								//console.log(item);
								return {
									text: "Lot No - "+item.scode+" - Sale Date - "+item.saleDate+" - Invoice Number - "+item.invoice_number,
									id: item.id
								}
							})
						};
					}
				}
			});

			$('#search').on('change', function(){

				var row_id = $('#search').val();

				$.ajax({
					url : '/lot_check',
					method: 'post',
					data: {
						'_token':'{{csrf_token()}}',
						row_id : row_id
					},
					error:function(e){
						alert (JSON.stringify(e));
					},
					success: function(r){
						
						$.each(r, (k,v) =>{
							$('#bag_weight').val(v.bags_weight);
							$('#tea_weight').val(v.tea_weight);
							$('#net_weight').val(v.net_weight);
							$('#price_tag').val(v.price_per_kg);
							$('#total').val(v.total);
						});
					}
				});
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
							html +="<td>"+v.tea_broker_id+"</td>";
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

			$('#using_tea').on('keyup', function(){
				var net_weight = $('#net_weight').val();
				var using_tea = $('#using_tea').val();
				var bal_te = net_weight - using_tea;

				var balance_tea = $('#balance_tea').val(bal_te);
				if(bal_te >= 0){
					console.log(bal_te);
				} else {
					alert ("Using Tea Can't be increse more than net weight");
					$('#balance_tea').val('0');
				}
				
			});

			$('#add').on('click', function(){
				// $('#t_body').html("");

				var row_id = 0;
				var bag_weight = $('#bag_weight').val();
				var tea_weight = $('#tea_weight').val();
				var net_weight = $('#net_weight').val();
				var price_tag = $('#price_tag').val();
				var total = $('#total').val();
				var using_tea = $('#using_tea').val();
				var bal = net_weight - using_tea;

				var balance_tea = $('#balance_tea').val();

				if((bag_weight == null || bag_weight == '') || (tea_weight == null || tea_weight == '') || (net_weight == null || net_weight == '') || (net_weight == null || net_weight == '')){
					alert ("Fields Can't be Empty")
				} else {
					row_id += row_id + 1;
					html ="<tr class='rows_data' id="+row_id+"><input type=\"hidden\" name=\"row_ad_nu[]\" value=\""+row_id+"\">";
					// html +="<th scope=\"row\" style=\"font-size: 1em;\">"+row_id+"</th>";
					html +="<td>"+bag_weight+"</td>";
					html +="<td>"+tea_weight+"</td>";
					html +="<td>"+net_weight+"</td>";
					html +="<td>"+price_tag+"</td>";
					html +="<td>"+total+"</td>";
					html +="<td class=\"row_bal\">"+using_tea+"</td>";
					html +="<td>"+bal+"</td>";
					html +="<td style='padding: 0px;'>";
					html += "<button id=\"edit_tn\" class=\"btn btn-default btn-rounded btn-condensed btn-sm action_btn\"><span class=\"icon-pencil3\"></span></button>";
					html += "<button class=\"btn btn-danger btn-rounded btn-condensed btn-sm\"><span class=\"icon-remove\"></span></button>";
					html +="</td>";
					html +="</tr>";

					$('#t_body').append(html);

					var bag_weight = $('#bag_weight').val("");
					var tea_weight = $('#tea_weight').val("");
					var net_weight = $('#net_weight').val("");
					var price_tag = $('#price_tag').val("");
					var total = $('#total').val("");
					var using_tea = $('#using_tea').val("");
					var bal = net_weight - using_tea;

					var balance_tea = $('#balance_tea').val("");

				}

			});

			$('#table_data_form').on('submit', function(e){
				e.preventDefault();

				var d = $('#main_form, #table_data_form').serializeArray();
				// var table_d = $('#head_table').val();
				d.push({name:'_token', value:'{{csrf_token()}}'});
				// console.log(d);
				// alert (JSON.stringify(d));
				$.ajax({
					url: '/blend_sheet_creator',
					data : d,
					method:'GET',
					success:function(r){
						// if(r.status = "200"){
						// 	table_load();
						// 	alert (JSON.stringify(r));
						// } else {
						// 	table_load();
						// 	alert ("Not DONE");
						// }
						if(r['status']){
							var html = `<a id="print" name="print" href="/generateExport?ecp=`+r['id1']+`" type="submit" class="btn btn-success">
											<i class="icon-check2"></i>Print
										</a>`;

							$('#printId').html(html);			


						}
						console.log(r);
						
					},
					error:function(e){
						console.log('error');
					},
				// 	// dataType:'json',

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