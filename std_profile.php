<?php
    // foreach ($admin_information as $key => $value) {
    //
    // $id = $value['user_id'];
    // $admin = $value['user_name'];
    // $user_email = $value['user_email'];
    // $file_path = $value['file_path'];
   //}
?>
<div class="col-md-12 center-block">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title"> Complete Profile  </h2>
        </div>
        <form id='student_pr_complete' action="" enctype="multipart/form-data" method="post"
              accept-charset="utf-8">
            <div class="box-body">
                <div id="status"></div>
                <div class="form-group">

                    <div class="col-md-8  form-group">
                        <label for="">University Email </label>
                        <input type="text" class="form-control" id="uni_email" name="uni_email" value=""
                               placeholder="">
                        <span id="error_uni_email" class="has-error"></span>
                    </div>
                    <div class="col-md-8  form-group">
                        <label for="">Address </label>
                        <input type="text" class="form-control" id="address" name="address" value=""
                               placeholder="">
                        <span id="error_address" class="has-error"></span>
                    </div>
                    <div class="col-md-8  form-group">
                        <label for="">Last Earned Degree </label>
                        <select class = "form-control" name = "last_deg">
                            <option value = "" selected disabled>Choose Degree</option>
                            <option value = "bachelor" >Bachelor</option>
                            <option value = "Master" >Master</option>
                            <option value = "diploma" >diploma</option>
                            <option value = "ausbuilding" >Ausbuilding</option>

                       </select>
                        <span id="error_last_deg" class="has-error"></span>
                    </div>
                    <div class="col-md-8  form-group">
                        <label for=""> CGPA </label>
                        <input type="text" class="form-control" id="cgpa" name="cgpa" value=""
                               placeholder="">
                        <span id="error_cgpa" class="has-error"></span>
                    </div>
                    <div class="col-md-8  form-group">
                        <label for="">Skills </label>
                        <input type="text" class="form-control" id="skills" name="skills" value=""
                               placeholder="">
                        <span id="error_skills" class="has-error"></span>
                    </div>
                    <div class="col-md-8  form-group">
                        <label for="">Expected Salary </label>
                        <input type="text" class="form-control" id="expt_salary" name="expt_salary" value=""
                               placeholder="">
                        <span id="error_expt_salary" class="has-error"></span>
                    </div>
                    <div class="col-md-8  form-group">
                        <label for="">Preferred Language</label>
                        <input type="text" class="form-control" id="lang" name="lang" value=""
                               placeholder="">
                        <span id="error_lang" class="has-error"></span>
                    </div>
                    <div class="col-md-8  form-group">
                        <label for="">Preferred Company Size</label>
                         <select class = "form-control" name = "com_size">
                             <option value = "" selected disabled>Choose Company Size</option>
                             <option value = "10-20" >10-20</option>
                             <option value = "21-50" >21-50</option>
                             <option value = "51-100" >51-100</option>
                             <option value = "101-200" >101-200</option>
                             <option value = "201+" >201+</option>
                        </select>
                        <span id="error_com_size" class="has-error"></span>
                    </div>
                    <div class="col-md-8  form-group">
                        <label for="">Preferred Location</label>

                            <select class = "form-control" name = "prefer_loc">
                                   <option value = "" selected disabled>Select Location</option>
                                   <option value = "chemnitz">Chemnitz</option>
                                   <option value = "saxony">Saxony</option>
                                   <option value = "berlin">Berlin</option>
                                   <option value = "harburg">Hamburg</option>
                                   <option value = "frankfurt">Frankfurt</option>
                                   <option value = "germany">Germany</option>
                                   <option value = "world">World wide</option>
                            </select>

                        <span id="error_prefer_loc" class="has-error"></span>
                    </div>

                    <div class="col-md-8  form-group">
                        <label for="">Preferred Job Type</label>
                        <select class = "form-control" name = "job_type">
                               <option value = "" selected disabled>Select Job Type</option>
                               <option value = "part time">Part Time</option>
                               <option value = "full time">Full Time</option>
                               <option value = "internship">Internship</option>
                               <option value = "all">All</option>
                        </select>
                        <span id="error_job_type" class="has-error"></span>
                    </div>
                    <div class="col-md-8  form-group">
                        <label for="">Preferred Field or Category</label>
                        <input type="text" class="form-control" id="field" name="field" value=""
                               placeholder="">
                        <span id="error_field" class="has-error"></span>
                    </div>
                    <div class="col-md-8  form-group">
                        <label for="">Preferred Branch or Department</label>
                        <input type="text" class="form-control" id="branch" name="branch" value=""
                               placeholder="">
                        <span id="error_branch" class="has-error"></span>
                    </div>
                    <div class="col-md-8  form-group">
                        <label for="">Visa Type</label>
                        <input type="text" class="form-control" id="visa_type" name="visa_type" value=""
                               placeholder="">
                        <span id="error_visa_type" class="has-error"></span>
                    </div>

                    <div class="col-md-12  form-group">
                        <label for="">Work Experiences</label>
                        <div class="col-md-12">
                          <div class="col-md-2">Company</div><div class="col-md-2">Position</div><div class="col-md-1">Duration</div><div class="col-md-4">Projects</div><div class="col-md-3">Tools</div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-2">
                              <input type="text" class="form-control"  name="experience1[]" value=""
                                   placeholder="">
                            </div>
                            <div class="col-md-2">
                              <input type="text" class="form-control"  name="experience1[]" value=""
                                   placeholder="">
                            </div>
                            <div class="col-md-1">
                              <input type="text" class="form-control"  name="experience1[]" value=""
                                   placeholder="">
                            </div>
                            <div class="col-md-4">
                              <textarea class="form-control"  name="experience1[]" value=""></textarea>
                            </div>
                            <div class="col-md-3">
                              <input type="text" class="form-control" name="experience1[]" value=""
                                   placeholder="">
                            </div>
                        </div>

                        <div class="col-md-12"></div>

                        <div class="col-md-12">
                            <div class="col-md-2">
                              <input type="text" class="form-control"  name="experience2[]" value=""
                                   placeholder="">
                            </div>
                            <div class="col-md-2">
                              <input type="text" class="form-control"  name="experience2[]" value=""
                                   placeholder="">
                            </div>
                            <div class="col-md-1">
                              <input type="text" class="form-control"  name="experience2[]" value=""
                                   placeholder="">
                            </div>
                            <div class="col-md-4">
                              <textarea class="form-control" name="experience2[]" value=""></textarea>
                            </div>
                            <div class="col-md-3">
                              <input type="text" class="form-control" name="experience2[]" value=""
                                   placeholder="">
                            </div>
                        </div>
                        <div class="col-md-12"></div>
                        <div class="col-md-12">
                            <div class="col-md-2">
                              <input type="text" class="form-control"  name="experience3[]" value=""
                                   placeholder="">
                            </div>
                            <div class="col-md-2">
                              <input type="text" class="form-control" name="experience3[]" value=""
                                   placeholder="">
                            </div>
                            <div class="col-md-1">
                              <input type="text" class="form-control"  name="experience3[]" value=""
                                   placeholder="">
                            </div>
                            <div class="col-md-4">
                              <textarea class="form-control"  name="experience3[]" value=""></textarea>
                            </div>
                            <div class="col-md-3">
                              <input type="text" class="form-control"  name="experience3[]" value=""
                                   placeholder="">
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <input type="hidden" name="is_pf_complete" value="1"/>
                <input type="submit" id="submit" name="submit" value="Save" class="btn btn-primary">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <small><img id="loader" src="<?php echo site_url('assets/images/loadingg.gif'); ?>"/></small>
            </div>
        </form>

        <script src="<?php echo base_url(); ?>assets/js/Custom_Validation/circle/student_register_validation.js"></script>

    </div>
</div>
<!-- /.row -->
