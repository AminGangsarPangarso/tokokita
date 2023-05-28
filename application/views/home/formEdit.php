<div class="container-fluid bg-secondary mb-5" id="edit">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Edit Profile</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Edit Profile</p>
            </div>
        </div>
    </div>
<div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Form Edit</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form"> 
                    <form name="sentMessage"  method="post" action="<?= base_url('index.php/main/edit');?>">
                      <input type="hidden" name="id" class="form-control" id="name" placeholder="id"
                        required="required"  value="<?= $member->idKonsumen ?>"/>  
                      <div class="control-group">
                        <label class="form-label">Nama Konsumen</label>
                            <input type="text" name="nama" class="form-control" id="name" placeholder="Nama Member"
                                required="required" data-validation-required-message="Please enter your name" value="<?= $member->namaKonsumen ?>"/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                        <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" id="name" placeholder="Username"
                                required="required" data-validation-required-message="Please Write" value="<?= $member->username ?>"/>
                        </div>
                        <div class="control-group">
                        <label class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="name" placeholder="Alamat"
                                required="required" data-validation-required-message="Please Write" value="<?= $member->alamat ?>"/>
                        </div>
                        <div class="control-group">
                        <label class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" id="name" placeholder="Email"
                                required="required" data-validation-required-message="Please Write" value="<?= $member->email ?>"/>
                        </div>
                        <div class="control-group">
                        <label class="form-label">No. Handphone</label>
                            <input type="text" name="telpon" class="form-control" id="name" placeholder="No. Handphone"
                                required="required" data-validation-required-message="Please Write" value="<?= $member->tlpn ?>"/>
                        </div>
                        <div class="control-group">
                        <label class="form-label">Edit Password</label>
                            <input type="password" name="password" class="form-control" id="name" placeholder="Password"
                                required="required" data-validation-required-message="Please Write" value="<?= $member->password ?>"/>
                        </div> 
                        <div class="control-group">
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMesrsageButton">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
