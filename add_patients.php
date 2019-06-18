<?php 
include("header.php");
?>
<div class="container-fluid">
  <div class="col-md-7">
  <div class="card">

                    
                            <div class="card-header d-flex align-items-center text-center col-md-12">
                              <h4 class="card-title myprofile">Patient Details  </h4>
                            
                            </div>
                            <div class="card-body">
                  
                      <form class="forms-sample">
                             
                            <div class="form-group row">
                              <label for="first_name" class="col-sm-4 col-form-label">First Name :</label>
                              <div class="col-sm-8">
                                
                                 <input  type="text" placeholder="Enter First Name" name="first_name" class="form-control  " required="required">
                              </div>
                            </div>

                             <div class="form-group row">
                              <label for="first_name" class="col-sm-4 col-form-label">Middle Name :</label>
                              <div class="col-sm-8">
                                
                                 <input  type="text" placeholder="Enter First Name" name="first_name" class="form-control  " required="required">
                              </div>
                            </div> 

                            <div class="form-group row">
                              <label for="last_name" class="col-sm-4 col-form-label">Last Name :</label>
                              <div class="col-sm-8">
                                <input  type="text" placeholder="Enter Last Name" name="last_name" class="form-control  " required="required">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="pat_email" class="col-sm-4 col-form-label">Email :</label>
                              <div class="col-sm-8">
                                <input  type="email" placeholder="Enter Email" name="pat_email" class="form-control" required="required">
                              </div>
                            </div>
                          <div class="form-group row">
                            <label for="pat_mobile" class="col-sm-4 col-form-label">Mobile Number :</label>
                            <div class="col-sm-8">
                              <input  type="tel" placeholder="Phone Number" class="form-control" name="pat_mobile" required="required" >
                            </div>
                          </div>

                            <div class="form-group row">
                              <label for="address" class="col-sm-4 col-form-label">Address :</label>
                              <div class="col-sm-8">
                               <textarea class="form-control" name="address" type="text" cols="" rows="4"></textarea>
                              </div>
                            </div>
                   
                              <div class="form-group text-center" >       
                                <input type="submit" value="Save" name="submit" class="btn btn-default form-control" style="background:#00e676;color:white;">
                              </div>
                  </form>
                </div>
            


            </div>
</div>

<br>
<br>
<div  class="col-md-7 grid-margin stretch-card">

 <div class="card">

              
                
              <div class="card" style="text-align:left;">
                <div class="card-header d-flex align-items-center">
                  <h4>Import Existing Patients</h4>
                </div>
                <div class="card-body ">
                  <form method="post" class="forms-sample">
              

                     <div class="form-group row">
                            <label for="phone_nm" class="col-sm-4 col-form-label">Select the File :</label>
                            <div class="col-sm-8">
                               <input  type="file" placeholder="" name="file" class="form-control " required="required" >
                            </div>
                          </div>
                    
                    <div class="form-group" style="text-align:right;">       
                      <input type="submit" value="Import Patients List" name="submit" class="btn btn-default form-control text-center" style="background:#00e676;color:white;">
                    </div>
                  </form>
                </div>
              </div>
           
          
            


            </div>


</div>
</div>
<?php
include ("footer.php");
?>
