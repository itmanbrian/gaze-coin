<section class="hero-section full-screen-section text-white bg-img-cover text-center bg-img-overlay pattern-overlay video-section">
    <video autoplay="autoplay" preload="auto" muted="ture" loop="true">
        <source src="assets/videos/video.mp4" type="video/mp4">
        <source src="" type="video/webm">
    </video>
    <div class="vertical-middle">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="hero-section-content">
                        <svg class="play-showreel"><use xlink:href="#play-showreel"></use></svg>
                        <h1 class="text-white">WELCOME TO THE SCHOOL OF PARADISE</h1>
                        <p>Children’s Paradise School opened its doors in the fall of 1999/1420 when the founders noticed a dire need of schools that embraced Arabic and Islamic teaching in Canada.</p>
                        <a href="" class="btn btn-white btn-outline btn-wide">Register</a>
                        <a href="" class="btn btn-white btn-outline btn-wide">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <svg id="head-clouds" class="head-clouds" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M-5 100 Q 0 20 5 100 Z
               M0 100 Q 5 0 10 100
               M5 100 Q 10 30 15 100
               M10 100 Q 15 10 20 100
               M15 100 Q 20 30 25 100
               M20 100 Q 25 -10 30 100
               M25 100 Q 30 10 35 100
               M30 100 Q 35 30 40 100
               M35 100 Q 40 10 45 100
               M40 100 Q 45 50 50 100
               M45 100 Q 50 20 55 100
               M50 100 Q 55 40 60 100
               M55 100 Q 60 60 65 100
               M60 100 Q 65 50 70 100
               M65 100 Q 70 20 75 100
               M70 100 Q 75 45 80 100
               M75 100 Q 80 30 85 100
               M80 100 Q 85 20 90 100
               M85 100 Q 90 50 95 100
               M90 100 Q 95 25 100 100
               M95 100 Q 100 15 105 100 Z">
        </path>
    </svg>
</section>


<section class="section-register">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <form action="" name="registration-form" class="registration-form" id="registration-form" method="POST">
                    <h3>Student Information</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">First Name</label>
                                <input type="text" name="student_first_name" class="form-control" value=""  required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Last Name</label>
                                <input type="text" name="student_last_name" class="form-control" value=""  required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Gender</label>
                                <select class="form-control" required name="student_gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Place of birth</label>
                                <input type="text" name="student_birth_place" class="form-control" value=""  required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Date of birth</label>
                                <input type="text" name="student_birth_date" class="form-control date-picker" value="" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Medical card number</label>
                                <input type="text" name="student_medical_card_number" class="form-control" value=""  required>
                            </div>
                        </div>
                    </div>
                    <h3>Address Information</h3>
                    <hr>





                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">No</label>
                                <input type="text" name="address_no" class="form-control" value=""  required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Street</label>
                                <input type="text" name="address_street" class="form-control" value=""  required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">App #</label>
                                <input type="text" name="address_app_no" class="form-control" value=""  required>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">City</label>
                                <input type="text" name="address_city" class="form-control" value=""  required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Province</label>
                                <input type="text" name="address_province" class="form-control" value=""  required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Postal Code</label>
                                <input type="text" name="address_postal_code" class="form-control" value=""  required>
                            </div>
                        </div>
                    </div>

                    <div class="row">


                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Telephone</label>
                                <input type="text" name="address_telephone" class="form-control" value=""  required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input type="email" name="address_email" class="form-control" value=""  required>
                            </div>
                        </div>

                    </div>



                    <h3>Bus Needed</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">Do you want school's transportation ? </label>
                                <select class="form-control" required name="bus_needed">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                    </div>




                    <h3>Family Information</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Father's full name</label>
                                <input type="text" name="father_name" class="form-control" value=""  required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Phone number</label>
                                <input type="text" name="father_phone_number" class="form-control" value=""  required>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Mother's full name</label>
                                <input type="text" name="mother_name" class="form-control" value=""  required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Phone number</label>
                                <input type="text" name="mother_phone_number" class="form-control" value=""  required>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Name of Person to contact in case of Emergency</label>
                                <input type="text" name="emergency_person_name" class="form-control" value=""  required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Emergency Phone number</label>
                                <input type="text" name="emergency_phone_number" class="form-control" value=""  required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">Brothers and Sisters attending the school</label>
                                <input type="text" name="brothers_sisters_attending" class="form-control" value=""  required>
                            </div>
                        </div>
                    </div>



                    <h3>Comments(Special medical care, allergies, etc.)</h3>
                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="comments" class="form-control" value=""  required rows="4"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="6Lc0Di4UAAAAAHGNbFMohg8BtlcJ-2bQ_Cr7xJz7" data-callback="recaptchaCallback" data-expired-callback="recaptchaExpired"></div>

                                <input type="hidden" class="hiddenRecaptcha" name="hiddenRecaptcha" id="hiddenRecaptcha">
                                <input id="hidden-grecaptcha" name="hidden-grecaptcha" type="text" style="opacity: 0; position: absolute; top: 0; left: 0; height: 1px; width: 1px;"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input type="submit" class="btn btn-blue btn-outline btn-wide pull-right" value="Submit" name="submit">

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>