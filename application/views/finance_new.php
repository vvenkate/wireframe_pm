<!DOCTYPE HTML>
<html>
<head>
<title>Virtual Desk - Finance Management</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php $this->load->view('common/includes');?>
<link href="<?php echo base_url(); ?>assets/css/jquery-ui.min.css" rel="stylesheet" />
<script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"> </script>
<script src="<?php echo base_url(); ?>assets/js/finance_mgmt.js"></script>
<script>
$(function () {
	$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

	if (!screenfull.enabled) {
		return false;
	}
	
	$('#toggle').click(function () {
		screenfull.toggle($('#container')[0]);
	});
	getListBoxUpdate('#villa_no',"property/getlbvilla");
});
</script>

</head>
<body>
	<div id="wrapper">
		<?php $this->load->view('common/header_menu');?>
        
		<div id="page-wrapper" class="gray-bg dashbard-1">
			<div class="content-main">

				<!--faq-->
				<div class="blank">
					<div class="blank-page">
						<div class="grid_3 grid_5">
							<!--h3 class="head-top">Tabs</h3-->
							<div class="but_list">
								<div class="bs-example bs-example-tabs" role="tabpanel"
									data-example-id="togglable-tabs">
									<ul id="myTab" class="nav nav-tabs" role="tablist">
										   <li role="presentation"><a href="<?php echo base_url(); ?>index.php/finance" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Finance</a></li>
                      <li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/finance/addexpense" role="tab" id="profile-tab">New Expenses</a></li>
                      <li role="presentation"><a href="<?php echo base_url(); ?>index.php/finance/addincome" role="tab" id="profile-tab">New Income</a></li>
									</ul>
                                   
                                    <div id="myTabContent" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                         <?php echo form_open_multipart('finance/addexpense'); ?>
                                         	<h2 class="h2.-bootstrap-heading group-mail">New Expense</h2>
                                            <div class="row">
                                                <div class="col-xs-6 col-md-4 group-mail">
                                                <label for="exp_type">Expense Type</label>
                                                <div class="radio block"><input id="exp_type" name="exp_type" type="radio" value="office"  checked/><label>Office</label></div>
                                                <div class="radio block"><input id="exp_type" name="exp_type" type="radio" value="property" /><label>Property</label></div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 group-mail">
                                                	<label for="exp_desc">Expense Description</label>
                                                    <textarea id="exp_desc" name="exp_desc" class="form-control1"></textarea>
                                                </div>
                                                <div class="col-xs-6 col-md-2 group-mail">
                                                </div>
                                            </div>
                                            <div id="propexpopt" class="div_disable">
                                            <div class="row" >
                                                <div class="col-xs-6 col-md-4 group-mail">
                                                <label for="prop_ftype">On Property Type</label>
                                                <div class="radio block"><input id="prop_ftype" name="prop_ftype" type="radio" value="1"  /><label>Building - FLAT/Shop</label></div>
                                                <div class="radio block"><input id="prop_ftype" name="prop_ftype" type="radio" value="2" checked/><label>Villa</label></div>
                                                <div class="radio block"><input id="prop_ftype" name="prop_ftype" type="radio" value="3" /><label> Warehouse</label></div>
                                                </div>
                                                <div class="col-xs-6 col-md-4 group-mail">
                                                </div>
                                                <div class="col-xs-6 col-md-4 group-mail">
                                                </div>
                                            </div>
                                            </div>
                                            
                                            <!-- villa details -->
                                            <div id="villa" class="div_disable">
                                                <div class="row">
                                                    <div class="col-xs-6 col-md-4 group-mail">
                                                    <label for="villa_no">Villa No</label>
                                                    <select class="form-control1" id="villa_no" name="villa_no">
                                                      <option value="">-- select one --</option>
                                                      <option value="Villa A101">Villa A101</option>
                                                      <option value="Villa A102">Villa A102</option>
                                                      <option value="Villa B101">Villa B101</option>
                                                      <option value="Villa B111">Villa B111</option>
                                                     </select>
                                                    </div>
                                                    <div class="col-xs-6 col-md-4 group-mail">
                                                    <!--label for="villa_no">Villa Name</label>
                                                    <input id="villa_no" name="villa_no" class="form-control" disabled type="text" placeholder="Automatic Populate"-->
                                                    </div>
                                                    <div class="col-xs-6 col-md-4 group-mail">
                                                    &nbsp;
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Flat/Building details -->
                                            <div id="flat" class="div_disable">
                                                <div class="row">
                                                    <div class="col-xs-6 col-md-4 group-mail">
                                                    <label for="flat_name">Building Name</label>
                                                    <select class="form-control1" id="flat_name" name="flat_name">
                                                      <option value="">-- select one --</option>
                                                      <option value="building1">Building 1</option>
                                                      <option value="building2">Building 2</option>
                                                      <option value="building3">Building 3</option>
                                                      <option value="building4">Building 4</option>
                                                     </select>
                                                    </div>
                                                    <div class="col-xs-6 col-md-4 group-mail">
                                                    <label for="flat_no">Flat No</label>
                                                    <select class="form-control1" id="flat_no" name="flat_no">
                                                        <option value="">-- select one --</option>
                                                    </select>
                                                    </div>
                                                    <div class="col-xs-6 col-md-4 group-mail">
                                                    &nbsp;
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Warehouse details -->
                                            <div id="warehouse" class="div_disable">
                                                <div class="row">
                                                    <div class="col-xs-6 col-md-4 group-mail">
                                                    <label for="wh_no">Warehouse No</label>
                                                    <select class="form-control1" id="wh_no" name="wh_no">
                                                      <option value="">-- select one --</option>
                                                      <option value="building1">Warehouse 1</option>
                                                      <option value="building2">Warehouse 2</option>
                                                      <option value="building3">Warehouse 3</option>
                                                      <option value="building4">Warehouse 4</option>
                                                     </select>
                                                    </div>
                                                    <div class="col-xs-6 col-md-4 group-mail">
                                                    <!--label for="warehouse_name">Warehouse Name</label>
                                                    <input id="warehouse_name" name="warehouse_name" class="form-control" type="text" disabled placeholder="Autofill"-->
                                                    </div>
                                                    <div class="col-xs-6 col-md-4 group-mail">
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            <!-- Shop details -->
                                            <div id="shop" class="div_disable">
                                                <div class="row">
                                                    <div class="col-xs-6 col-md-4 group-mail">
                                                    <label for="shopi_no">Shop No</label>
                                                    <select class="form-control1" id="shopi_no" name="shopi_no">
                                                      <option value="">-- select one --</option>
                                                      <option value="building1">Shop 1</option>
                                                      <option value="building2">Shop 2</option>
                                                      <option value="building3">Shop 3</option>
                                                      <option value="building4">Shop 4</option>
                                                     </select>
                                                    </div>
                                                    <div class="col-xs-6 col-md-4 group-mail">
                                                    <label for="shopi_name">Shop Name</label>
                                                    <input id="shopi_name" name="shopi_name" class="form-control" type="text" disabled placeholder="Autofill">
                                                    </div>
                                                    <div class="col-xs-6 col-md-4 group-mail">
                                                    
                                                    </div>
                                                </div>
                                            </div>                                            
                                            
                                            <div class="row">
                                                <div class="col-md-4 group-mail">
                                                <label for="expense_date">Expense Date</label>
                                                <div class="input-group">
                                                    <input id="expense_date" name="expense_date" class="form-control" type="text" required placeholder="dd-mm-yyyy"><span class="input-group-addon"><a onClick="javascript:$('#expense_date').focus();"><img width="21" height="20" alt="DT" src="<?php echo base_url(); ?>assets/images/date.png"></a></span>
                                                </div>
                                                </div>
                                                <div class="col-md-4">
                                                <!--label for="rent_duration">Rent Duration</label>
                                                <input id="rent_duration" name="rent_duration" class="form-control" type="text" placeholder="1 month or 2 months"-->
                                               		<label for="pay_date">Payment Date</label>
                                                    <div class="input-group">
                                                        <input id="pay_date" name="pay_date" class="form-control" type="text" required placeholder="dd-mm-yyyy" /><span class="input-group-addon"><a onClick="javascript:$('#pay_date').focus();"><img width="21" height="20" alt="DT" src="<?php echo base_url(); ?>assets/images/date.png"></a></span>	
                                                    </div>
                                                </div>
                                                <div class="col-md-4 group-mail">
                                                <label>Payment Mode</label>
                                                <select class="form-control" id="payment_mode" name="payment_mode">
                                                      <option value="Cash">Cash</option>
                                                      <option value="Cheque">Cheque</option>
                                                      <option value="Bank Transfer">Bank Transfer</option>
                                                     </select>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-4 group-mail">
                                                <label for="exp_amt">Expense Amount (AED)</label>
                                                <input id="exp_amt" name="exp_amt" class="form-control" type="text" placeholder="1xxx or 2xxxx">
                                                </div>
                                                <div class="col-md-4">
                                               	<label for="fin_invoice">Upload Image</label>
                                             	<input type="file" id="fin_invoice" name="fin_invoice">
                                                </div>
                                                <div class="col-md-4 group-mail">
                                               
                                                </div>
                                            </div>
                                                
                                            <!-- footer-->
                                            <div class="panel-footer">
                                                <div class="row">
                                                    <div class="col-sm-8 col-sm-offset-2">
                                                        <button id="expense_save" name="expense_save" class="btn-primary btn">Save</button>
                                                        <button class="btn-inverse btn" type="reset">Reset</button>
                                                    </div>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!--//faq-->
				<!---->
				<div class="copy">
					<p>
						&copy; 2016 Virtual Desk. All Rights Reserved | Developed by <a
							href="http://fomaxtech.com/" target="_blank">Avohi</a>
					</p>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>

	<!---->
	<!--scrolling js-->
	<script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js"
		type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo base_url(); ?>assets/js/scripts.js"
		type="text/javascript" charset="utf-8"></script>
	<!--//scrolling js-->
    <script language="javascript">
		$('#expense_date').datepicker({dateFormat: "dd-mm-yy", changeMonth: true, changeYear: true});
		$('#pay_date').datepicker({dateFormat: "dd-mm-yy", changeMonth: true, changeYear: true});
		
	</script>
</body>
</html>

