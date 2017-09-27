@extends('layout')
@section('content')
       <div class="panel-body">

           <form class="form-horizontal" id="jq-validation-form">
               <div class="form-group">
                   <label for="jq-validation-email" class="col-sm-3 control-label">First Name</label>
                   <div class="col-sm-9">
                       <input type="text" class="form-control" name="firstname" placeholder="Enter First Name">
                   </div>
               </div>
               <div class="form-group">
                   <label for="jq-validation-email" class="col-sm-3 control-label">Last Name</label>
                   <div class="col-sm-9">
                       <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name">
                   </div>
               </div>
               <div class="form-group">
                   <label for="jq-validation-email" class="col-sm-3 control-label">Email</label>
                   <div class="col-sm-9">
                       <input type="text" class="form-control"  name="email" placeholder="Enter Email">
                   </div>
               </div>
               <div class="form-group">
                   <label for="jq-validation-phone" class="col-sm-3 control-label">Mobile</label>
                   <div class="col-sm-9">
                       <input type="text" class="form-control" name="mobile" placeholder="Phone: (999) 999-9999">
                   </div>
               </div>
               <div class="form-group">
                   <label for="jq-validation-phone" class="col-sm-3 control-label">Picture upload</label>
                   <div class="col-sm-9">
                       <input type="file" name="fileToUpload">
                   </div>
               </div>
               <div class="form-group">
                   <label for="jq-validation-email" class="col-sm-3 control-label">Bank details</label>
                   <div class="col-sm-9">
                       <input type="text" class="form-control"  name="bankdetails" placeholder="Enter Bank details">
                   </div>
               </div>
               <div class="form-group">
                   <label for="jq-validation-email" class="col-sm-3 control-label">Passport</label>
                   <div class="col-sm-9">
                       <input type="text" class="form-control"  name="passport" placeholder="Enter passport details">
                   </div>
               </div>
               <div class="form-group">
                   <label for="jq-validation-email" class="col-sm-3 control-label">Facebook id</label>
                   <div class="col-sm-9">
                       <input type="text" class="form-control"  name="facebookid" placeholder="Enter Facebook details">
                   </div>
               </div>
               <script>
                   init.push(function () {
                       var options = {
                           todayBtn: "linked",
                           orientation: $('body').hasClass('right-to-left') ? "auto right" : 'auto auto'
                       }
                       $('#bs-datepicker-example').datepicker(options);

                       $('#bs-datepicker-component').datepicker();

                       var options2 = {
                           orientation: $('body').hasClass('right-to-left') ? "auto right" : 'auto auto'
                       }
                       $('#bs-datepicker-range').datepicker(options2);

                       $('#bs-datepicker-inline').datepicker();
                   });
               </script>
               <div class="form-group">
                   <label for="jq-validation-email" class="col-sm-3 control-label">Date of Bitrh</label>
                   <div class="col-sm-9">
                       <div class="input-group date" id="bs-datepicker-component">
                       <input type="text" class="form-control" name="dateofbirth" ><span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                   </div>
                   </div>
               </div>
               <div class="form-group">
                   <label for="jq-validation-text" class="col-sm-3 control-label">Address</label>
                   <div class="col-sm-9">
                       <textarea class="form-control" name="address"></textarea>
                   </div>
               </div>

               <div class="form-group">
                   <label for="jq-validation-select2" class="col-sm-3 control-label">Customer Type</label>
                   <div class="col-sm-9">
                       <select class="form-control" name="customertype" >
                           <option value="vendor">vendor</option>
                           <option value="vip">vip</option>
                           <option value="regular">regular</option>
                       </select>
                   </div>
               </div>
               <div class="form-group">
                   <label class="col-sm-3 control-label">Sex</label>
                   <div class="col-sm-9">
                       <div class="radio">
                           <label>
                               <input type="radio" name="optionsRadios" value="male" class="px">
                               <span class="lbl">Male</span>
                           </label>
                       </div>
                       <div class="radio">
                           <label>
                               <input type="radio" name="optionsRadios" value="female" class="px">
                               <span class="lbl">Female</span>
                           </label>
                       </div>
                   </div>
               </div>
               <div class="form-group">
                   <label class="col-sm-3 control-label">Status</label>
                   <div class="col-sm-9">
                       <div class="radio">
                           <label>
                               <input type="radio" name="Radios" value="active" class="px">
                               <span class="lbl">Active</span>
                           </label>
                       </div>
                       <div class="radio">
                           <label>
                               <input type="radio" name="Radios" value="inactive" class="px">
                               <span class="lbl">Inactive</span>
                           </label>
                       </div>
                   </div>
               </div>
               <div class="form-group">
                   <div class="col-sm-offset-3 col-sm-9">
                       <button type="submit" class="btn btn-primary">Save</button>
                   </div>
               </div>
           </form>
       </div>
@endsection
