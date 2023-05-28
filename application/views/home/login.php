<div class="container-fluid bg-secondary mb-5" id="login">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Login</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Login</p>
            </div>
        </div>
    </div>
<div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Form Login</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form"> 
                    <form name="sentMessage"  method="post" action="<?php echo site_url('main/login_member');?>">
                        <div class="control-group">
                            <input type="text" name="username" class="form-control" id="name" placeholder="Username"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
				
                        <div class="control-group">
                            <input type="password" name="password" class="form-control" id="email" placeholder="Password"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div> 
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMesrsageButton">Login</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
