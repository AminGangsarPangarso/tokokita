<div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Edit Toko</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">   
                    <form name="sentMessage"  method="post" action="<?php echo site_url('toko/validasi_edit');?>" enctype="multipart/form-data">
                      <input type="hidden" name="idToko" class="form-control" id="name" placeholder="Nama Toko"
                          required="required" data-validation-required-message="Please enter your name" value="<?= $toko->idToko?>"/>
                      <input type="hidden" name="idKonsumen" class="form-control" id="name" placeholder="Nama Toko"
                          required="required" data-validation-required-message="Please enter your name" value="<?= $toko->idKonsumen?>"/>
                        <div class="control-group">
                            <input type="text" name="namaToko" class="form-control" id="name" placeholder="Nama Toko"
                                required="required" data-validation-required-message="Please enter your name" value="<?= $toko->namaToko?>"/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="file" name="logo" class="form-control" id="emfail" placeholder="Logo"
                                required="required" data-validation-required-message="Please enter your email" value="<?= $toko->logo?>"/>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="3" id="message" name="deskripsi" placeholder="Deskripsi"
                                required="required"
                                data-validation-required-message="Please enter your message"><?= $toko->deskripsi?></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <input type="hidden" name="status" class="form-control" id="name" placeholder="Nama Toko"
                          required="required" data-validation-required-message="Please enter your name" value="<?= $toko->statusAktif?>"/>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMesrsageButton">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
