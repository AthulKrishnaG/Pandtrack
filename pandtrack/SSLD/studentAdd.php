	<?php
        include("dbconnection.php");
		include("session.php");
    ?>
	<!--side menu start-->
	<?php
        include("header.php");
    ?>
	<!--side menu end-->
	<!--side menu start-->
	<?php
        include("menu.php");
    ?>
	<!--side menu end-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Horizontal Forms</h3>
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Horizontal Forms</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
        
      </div>
      <div class="content-body">
        <!-- Basic form layout section start -->
        <section id="horizontal-form-layouts">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                
                <div class="card-content collpase show">
                  <div class="card-body">
                   
                    <form class="form form-horizontal">
                      <div class="form-body">
                        <h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput1">First Name</label>
                          <div class="col-md-9">
                            <input type="text" id="projectinput1" class="form-control" placeholder="First Name"
                            name="fname">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput2">Last Name</label>
                          <div class="col-md-9">
                            <input type="text" id="projectinput2" class="form-control" placeholder="Last Name"
                            name="lname">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput3">E-mail</label>
                          <div class="col-md-9">
                            <input type="text" id="projectinput3" class="form-control" placeholder="E-mail" name="email">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput4">Contact Number</label>
                          <div class="col-md-9">
                            <input type="text" id="projectinput4" class="form-control" placeholder="Phone" name="phone">
                          </div>
                        </div>
                        <h4 class="form-section"><i class="ft-clipboard"></i> Requirements</h4>
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput5">Company</label>
                          <div class="col-md-9">
                            <input type="text" id="projectinput5" class="form-control" placeholder="Company Name"
                            name="company">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput6">Interested in</label>
                          <div class="col-md-9">
                            <select id="projectinput6" name="interested" class="form-control">
                              <option value="none" selected="" disabled="">Interested in</option>
                              <option value="design">design</option>
                              <option value="development">development</option>
                              <option value="illustration">illustration</option>
                              <option value="branding">branding</option>
                              <option value="video">video</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput7">Budget</label>
                          <div class="col-md-9">
                            <select id="projectinput7" name="budget" class="form-control">
                              <option value="0" selected="" disabled="">Budget</option>
                              <option value="less than 5000$">less than 5000$</option>
                              <option value="5000$ - 10000$">5000$ - 10000$</option>
                              <option value="10000$ - 20000$">10000$ - 20000$</option>
                              <option value="more than 20000$">more than 20000$</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 label-control">Select File</label>
                          <div class="col-md-9">
                            <label id="projectinput8" class="file center-block">
                              <input type="file" id="file">
                              <span class="file-custom"></span>
                            </label>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput9">About Project</label>
                          <div class="col-md-9">
                            <textarea id="projectinput9" rows="5" class="form-control" name="comment" placeholder="About Project"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="form-actions center">
                        <button type="reset" class="btn btn-warning mr-1">
                          <i class="ft-x"></i> Cancel
                        </button>
                        <button type="submit" class="btn btn-info">
                          <i class="la la-check-square-o"></i> Save
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </section>
        <!-- // Basic form layout section end -->
      </div>
    </div>
  </div>
  	<!--side menu start-->
	<?php
        include("footer.php");
    ?>
	<!--side menu end-->
