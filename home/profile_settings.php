<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <form action="" method="POST" id="profile_form" enctype="multipart/form-data">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="fname">First Name</label>
                        <input type="text" class="form-control" placeholder="first name" value="">
                    </div>
                    <div class="col-md-6">
                        <label for="lname">Surname</label>
                        <input type="text" class="form-control" value="" placeholder="surname">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label for="contact">Mobile Number</label>
                        <input type="text" class="form-control" placeholder="enter phone number" value="">
                        <small id="phoneHelp" class="form-text text-muted">We will never share your number with anyone else.</small>
                    </div>
                    <div class="col-md-12">
                        <label for="address1">Address Line 1</label>
                        <input type="text" class="form-control" placeholder="enter address line 1" value="">
                    </div>
                    <div class="col-md-12">
                        <label for="address2">Address Line 2</label>
                        <input type="text" class="form-control" placeholder="enter address line 2" value="">
                    </div>
                    <div class="col-md-12">
                        <label for="postcode">Postcode</label>
                        <input type="text" class="form-control" placeholder="enter address line 2" value="">
                    </div>
                    <div class="col-md-12">
                        <label for="state">State</label>
                        <input type="text" class="form-control" placeholder="enter address line 2" value="">
                    </div>
                    <div class="col-md-12">
                        <label for="city">City</label>
                        <input type="text" class="form-control" placeholder="enter address line 2" value="">
                    </div>
                    <div class="col-md-12">
                        <label for="email">Email ID</label>
                        <input type="text" class="form-control" placeholder="enter email id" value="">
                        <small id="phoneHelp" class="form-text text-muted">We will never share your email with anyone else.</small>
                    </div>
                    <div class="col-md-12">
                        <label for="avatar">Upload Image (Optional)</label>
                        <input type="file" accept="image/*" class="custom-file-input" value="" id="avatar" name="avatar"><br>
                        <!-- <label class="custom-file-label">Choose File</label> -->
                        <small id="phoneHelp" class="form-text text-warning">File upload is optional.</small>
                    </div>
                    <div class="col-md-12">
                        <label for="labels">Education</label>
                        <input type="text" class="form-control" placeholder="education" value="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label for="labels">Country</label>
                        <input type="text" class="form-control" placeholder="country" value="">
                    </div>
                    <div class="col-md-6">
                        <label for="labels">State/Region</label>
                        <input type="text" class="form-control" value="" placeholder="state">
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
                </div>
            </div>
        </form>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience">
                    <span>Edit Experience</span>
                    <span class="border px-3 p-1 add-experience">
                        <i class="fa fa-plus"></i>&nbsp;Experience
                    </span>
                </div><br>
                <div class="col-md-12">
                    <label for="labels">Experience in Designing</label>
                    <input type="text" class="form-control" placeholder="experience" value="">
                </div> <br>
                <div class="col-md-12">
                    <label for="labels">Additional Details</label>
                    <input type="text" class="form-control" placeholder="additional details" value="">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>