<?php
$title = "Packers Entry";
  include('label.php'); ?>
   <!-- Main section-->
   <section>
    <div class="content-wrapper">
					<div class="clearfix">
						<div class="pull-left">
							<h3><?php if(isset($title)){ echo $title; } ?></h3>
						</div>
						<div class="pull-right">
<!--						<button type="button" class="btn btn-primary" id="new"><em class="fa fa-plus"></em> Office Staff</button>		
	-->					
						</div>
          </div>  
            <!-- START row-->
            <div class="row">
               <div class="col-md-12">
                     <!-- START panel-->
						<div id="hide_show1">
                     <div class="panel panel-default" id="loanform">
                        <div class="panel-heading">
                           <div class="panel-title"></div>
                          	  <div class="panel-body">
                                	<div class="col-md-12">
                                        <div class="col-md-12">
										<div class="col-md-4"></div>
										<div class="col-md-3">
                                    <center> 
                                           <div class="form-group">
                                              <label class="control-label">Month and Year</label>
                              <div id="datetimepicker1" class="date">
                                 <input type="text" class="form-control month_year" id="month_year" name="planstartdate" value='' placeholder="Select Date*" oninvalid="this.setCustomValidity('please select date')" onchange="this.setCustomValidity('')" required>
                                 <label id="d" style="color:red;"></label>
                              </div>
                                           </div>
                                    </center> 
                                        </div>
										      <div class="col-md-1">
                                    <center> 
                                        <button  id="search_month" class="btn btn-primary button_change">Search</button>													
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
 <div id="wait" style="display:none;width:100px;height:100px;position:absolute;top:;left:45%;padding:2px;"><img src="<?php echo base_url('assets/images/loader.gif'); ?>" width="100" height="100" /><br><center><h5>Loading...</h5></center></div>
        
                           <div class="table-responsive" id="table_data1">
                           </div>
										                     
                <div class="col-md-12">
                                    <center> 
                                        <button  id="table_save" class="btn btn-primary button_change">Save</button>													
                                       <!-- <button type="button" id="btn_update" class="btn btn-primary btn_update button_change" disabled>Update</button>	-->
                                        <input type="hidden" id="save_update" value="add"/>
                                        <input type="hidden" id="hid_id" value=""/>
										<input type="hidden" id="hid_up" value="Add"/>
                                    </center>
                                </div>
					
					
                        </div>
 </section>                          
       
	
	 <script type="text/javascript">var baseurl = "<?php print base_url(); ?>";</script>
	 
   <?php include('footer.php');?>
  <script src="<?php echo base_url().'assets/js/js/packer_entry_js.js';?>"></script>   
   </div>
   <script>
 $(document).ready(function() {
		$('.month_year').datetimepicker({format:"MM/YYYY",});	
	});
</script>
</body>

</html>