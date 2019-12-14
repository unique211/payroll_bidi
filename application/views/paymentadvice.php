   <?php
   $title = "Payment Advice Report";
  include('label.php'); ?>
   <!-- Main section-->
   
 
   <section>
    <div class="content-wrapper">
					<div class="clearfix">
						<div class="pull-left">
							<h3><?php if(isset($title)){ echo $title; } ?></h3>
						</div>
						<div class="pull-right">
						</div>
          </div>  
            <!-- START row-->
            <div class="row">
               <div class="col-md-12">
						<div id="hide_show1">
                     <div class="panel panel-default" id="loanform">
                        <div class="panel-heading">
                           <div class="panel-title"></div>
                          	  <div class="panel-body">
                                	<div class="col-md-12">
                                        <div class="col-md-12">
										<div class="col-md-3">
										
                                           <div class="form-group">
                                              <label class="control-label">Month and Year</label>
                                              <div id="datetimepicker1" class="date">
                                 <input type="text" class="form-control month_year" id="month_year" name="month_year" value='' placeholder="Select Date*" oninvalid="this.setCustomValidity('please select date')" onchange="this.setCustomValidity('')" required>
                                 <label id="d" style="color:red;"></label>
                              </div>  
                                           </div>
										</div>
										<div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $typeEmp; ?> *</label>
                                              <select type="text" name="typeEmp" form="employee_form" id="typeEmp" class="form-control"  required>
											  <option value="" selected disabled>Select <?= $typeEmp; ?></option>
												<option value="BIDI MAKER">Bidi Maker</option>
												<option value="BIDI PACKER">Bidi Packer</option>
												<option value="OFFICE STAFF">Office Staff</option>
											  </select>
                                           </div>
                                        </div>
										<div class="col-md-3">
										  <div class="form-group">
                                              <label class="control-label">Contractor</label>
                                              <select type="text" name="Contractor" id="contractor1" form="employee_form" class="form-control"  disabled>
											  <option value="" selected disabled>Select Contractor</option>
											  </select>
                                           </div>
                                        </div>
														   
										   <div class="col-md-1">
                                    <center> 
                                        <a id="btn_insert" class="btn btn-primary button_change">Search</a>													
                                       <!-- <button type="button" id="btn_update" class="btn btn-primary btn_update button_change" disabled>Update</button>	-->
                                        <input type="hidden" id="hid_id" value=""/>
										<input type="hidden" id="hid_up" value="Add"/>
                                    </center>
                                </div>
						
										<div class="col-md-4"></div>
                     	 		</div>	
							</div>
                        </div>    
                     </div>                  
 				
				
 			</div>	  
<div class="panel-footer">
        <!--             					    <button id="generate-excel" class="btn btn-danger">
            Generate Excel</button>
        <br /><br />                   
		
          -->
		  <h3><a href="" class="download" style="display:none;" >Export Excel</a></h3>
<div id="wait" style="display:none;width:100px;height:100px;position:absolute;top:;left:45%;padding:2px;"><img src="<?php echo base_url('assets/images/loader.gif'); ?>" width="100" height="100" /><br><center><h5>Loading...</h5></center></div>

		  <div class="table-responsive" id="table_data1">
				
                           </div>
				
				

   
						   
						   
                        </div>
 </section>                          
       
	
 <script type="text/javascript">var baseurl = "<?php print base_url(); ?>";</script>

   <?php include('footer.php');?>
   
   </div>
	<script src="<?php echo base_url().'assets/js/jquery.table2excel.js'; ?>"></script>
<script>
$(function() {  
   $(".download").click(function() {  

   var d = new Date();
		var month =  (d.getMonth()+1) + "/" +d.getFullYear();
   
	$(".tb2excel").table2excel({
				        exclude: ".noExl",
				        name: "Excel Document Name",
					filename: "Payment Advice Report_"+month,
					fileext: ".xls",
					exclude_img: true,
					exclude_links: true,
					exclude_inputs: true
				});
   });

});
</script>

      <script src="<?php echo base_url().'assets/js/js/paymentadvice_report_js.js';?>"></script>   
<script>
   $(document).ready(function() {
		
		$('.month_year').datetimepicker({format:"MM/YYYY",});
		 });
</script> 

</body>

</html>