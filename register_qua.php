<!DOCTYPE html>
<html>

    <?php

     include 'header.php';

    ?>
<section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/Stay-home-written-on-a-yellow-post-it-scaled.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <!-- Breadcrumb Text -->
                <div class="col-12">
                    <div class="breadcrumb-text">
                        <h2>Qurantine center Register</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="mb-70"></h4>

                    <!-- Contact Form -->
                    <div class="contact-form-area mb-100">
                        <form action="reg_action.php" method="post"  enctype="multipart/form-data">
                            <div class="row" >
                                <div class="col-12 col-lg-6">
                                    <input type="text" class="form-control" id="name" required="" name="name" placeholder="Name *" autocomplete="off">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="text" class="form-control" id="name" required="" name="address" placeholder="Address*" autocomplete="off">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="text" pattern="[7-9]{1}[0-9]{9}" required="" name="phone" class="form-control" id="email" placeholder="Phone Number*" autocomplete="off">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="email" class="form-control" id="email" name="email" required="" placeholder="Email Address*" autocomplete="off">
                                </div>
                                
                                <div class="col-12 col-lg-6">
                                    <input type="text" class="form-control" id="cylin" name="cylin" required="" placeholder="Cylinder(Yes/No)*" autocomplete="off">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="file" class="form-control" id="food" name="food" required="" title="food chart*" autocomplete="off">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="text" class="form-control" id="des" name="des" required="" title="About*" autocomplete="off">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="password" id="email" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  required="" placeholder="Set Your Password*" autocomplete="off">
                                </div>
                                
                                <div class="col-12">
                                    <button  class="btn egames-btn w-100" type="submit">Sign Up</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                 </div>
        </div>
    </section>

    <?php

     include 'footer.php';

    ?>

    </html>