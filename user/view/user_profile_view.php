<?php
    $user = $objBlogApp->manageUser();

?>

<div class="rounded bg-white mt-0 mb-5 position-relative">
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img style="border-radius: 50%;" src="../upload/user.jpg" alt="" height="200" width="230">
                    <span class="font-weight-bold h3 mt-2"><?php echo $user['user_first_name']." ".$user['user_last_name']; ?></span>
                    <span class="text-black-50"><?php echo $user['user_email']; ?></span>
                    <span class="text-info">web designer</span>
                </div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">First Name</label>
                            <input name="first_name" type="text" class="form-control" value="<?php echo $user['user_first_name']; ?>">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Last Name</label>
                            <input name="last_name" type="text" class="form-control" value="<?php echo $user['user_last_name']; ?>">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">PhoneNumber</label>
                            <input name="phone_number" type="number" class="form-control" placeholder="enter phone number" value="">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Address</label>
                            <input name="address" type="text" class="form-control" placeholder="enter address" value="">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Email</label>
                            <input name="email" type="email" class="form-control" placeholder="" value="<?php echo $user['user_email']; ?>">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Education</label>
                            <input name="education" type="text" class="form-control" placeholder="education" value="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label class="labels">Country</label>
                            <input name="country" type="text" class="form-control" placeholder="country" value="">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">State/Region</label>
                            <input name="state" type="text" class="form-control" value="" placeholder="state">
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <input name="profile_submit" class="btn btn-primary" type="submit" value="Save Profile">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience">
                        <span>Edit Experience</span>
                        <a class="text-decoration-none" href="#"><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></a>
                    </div><br>
                    <div class="col-md-12">
                        <label class="labels">Experience in Designing</label>
                        <input name="experience" type="text" class="form-control" placeholder="experience" value="">
                    </div> <br>
                    <div class="col-md-12">
                        <label class="labels">Additional Details</label>
                        <input name="additional_details" type="text" class="form-control" placeholder="additional details" value="">
                    </div> <br>
                    <div class="col-md-12">
                        <!-- <h2 style="transform: rotate(-20deg);" class="mt-5 ml-4 text-danger">uncomplated page</h2> -->
                    </div>
                </div>
            </div>
        </div>  
    </form>
</div>

<!-- Author: Johirul Islam
Facebook: https://facebook.com/johirulshaky/
Instagram: https://instagram.com/johirulshaky/
Linkedin: https://linkedin.com/johirulshaky/ -->

<div style="position: absolute; top:200px; left:700px;">
    <h2 style="transform: rotate(-20deg); font-size:40px; opacity:0.4" class="mt-5 ml-4 text-danger">uncomplated page</h2>
</div>