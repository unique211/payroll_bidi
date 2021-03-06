   <?php
$title = "Delete Month Entry";

  include('label.php'); ?>
   
   <!-- Main section-->
   <section>
    <div class="content-wrapper">
					<div class="clearfix">
						<div class="pull-left">
							<h3><?php echo $title; ?></h3>
						</div>
						<div class="pull-right">
<!--						<button type="button" class="btn btn-primary" id="new"><em class="fa fa-plus"></em> Office Staff</button>		
	-->					
						</div>
          </div>  
            <!-- START row-->
            <div class="row">
               <div class="col-md-12">
                  <form method="post" action="#" id="bonussheetform">
                     <!-- START panel-->
						<div id="hide_show1">
                     <div class="panel panel-default" >
                        <div class="panel-heading">
                           <div class="panel-title"></div>
                          	  <div class="panel-body">
                                	<div class="col-md-12">
                                        <div class="col-md-12">
										<div class="col-md-4">
										<center>
                                           <div class="form-group">
                                              <label class="control-label">Select Month and Year</label>
                                          <div id="datetimepicker1" class="date">
                                 <input type="text" class="form-control month_year" id="month_year1" name="month_year" value='' placeholder="Select Month"  required>
                                 <label id="d" style="color:red;"></label>
                              </div>  

                                           </div>
                                        </center>
										</div>
																			<div class="col-md-4">
                                           <div class="form-group">
                                              <label class="control-label"><?= $typeEmp; ?> </label>
                                              <select type="text" name="typeEmp" form="employee_form" id="typeEmp" class="form-control"  required>
													<option value="" selected disabled>Select Employee Type</option>
													<option value="BIDI PACKER" >Bidi Packer</option>
												<option value="BIDI MAKER">Bidi Maker</option>
												<option value="OFFICE STAFF">Office Staff</option>
											  </select>
                                           </div>
                                        </div>
	
										      <div class="col-md-3">
                                    <center> 
                                        <button type="submit" id="btn_insert" class="btn btn-primary button_change">Delete</button>													
                                       <!-- <button type="button" id="btn_update" class="btn btn-primary btn_update button_change" disabled>Update</button>	-->
                                        <input type="hidden" id="hid_id" value=""/>
										<input type="hidden" id="hid_up" value="Add"/>
                                    </center>
                                </div>
						
                     	 		</div>	
							</div>
                        </div>    
                     </div>                  
 				</form> 
				
 			</div>	

 </section>                          
       
	
<script type="text/javascript">var baseurl = "<?php print base_url(); ?>";</script>

   <?php include('footer.php');?>
   </div>


<script>
   $(document).ready(function() {
		
		$('.month_year').datetimepicker({format:"MM/YYYY",});
		 });
</script> 


   <script src="<?php echo base_url().'assets/js/js/deletemonthentry_js.js';?>"></script>   

   <script>

 var table = $('#example').DataTable( {
	scrollX: true,
	pageLength: 10,
	 fixedHeader: true,
        lengthChange: false,
		order: [[ 0, "asc" ]],
		
		
		
	   dom: 'Bfrtip',
		buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
	   
	   
    } );
     table.buttons().container()
         .appendTo( '#example_wrapper .col-sm-6:eq(0)' );
	/*
  $('#example thead th').each( function () {
        var title = $(this).text();
        $(this).html( '<label>'+title+'</label><br><input type="text" placeholder="Search '+title+'" />' );
    } );  
 */
    // DataTable
    var table = $('#example').DataTable();
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.header() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
	
	
</script>
 
   
</body>

</html>