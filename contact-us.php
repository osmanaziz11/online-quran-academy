        <?php define('ACCESS',true); ?>
        <!-- Require Header  -->
        <?php require_once('header.php'); ?>
        <!-- Content  -->
        <!--  Contact Us  -->
        <div class="row p-4" id="info_header">
            <div class="col">
                <h5>Contact Us</h5>
            </div>
        </div>

        <div class="row px-2 py-4" id="free_trial_container">

            <div class="col-md-8 px-4">
                <form action="" class="w-100 pt-3" data-id="contact_form"
                    onsubmit="event.preventDefault(); submit_form(this);">
                    <h6>First Name <span class="required">*</span></h6>
                    <input type="text" class="form-control d-inline-block" name="first_name" id="inputPassword2"
                        placeholder="First Name" required>
                    <h6 class="mt-3">Last Name <span class="required">*</span></h6>
                    <input type="text" class="form-control mt-2 d-inline-block" name="last_name" id="inputPassword2"
                        placeholder="Last Name" required minlength="3" maxLength="10">

                    <h6 class="mt-3">Email</h6>
                    <input type="email" class="form-control" name="email" id="" placeholder="">
                    <h6 class="mt-3">Phone</h6>
                    <input type="number" class="form-control" name="telephone" id="" placeholder="">


                    <h6 class="mt-3">Message <span class="required">*</span></h6>
                    <textarea name="" id="" cols="30" rows="10" name="msg" class="form-control" required></textarea>
                    <button type="submit" name="submit" class="btn btn-primary my-2  submit_btn">
                        Submit
                    </button>

                </form>

            </div>
            <div
                class="col-md-4 d-flex flex-column justify-content-md-start justify-content-center align-items-md-start align-items-center">
                <h5 class="mb-4 d-inline-block" style="border-bottom:2px solid #0FBE7C;">Find Us</h5>
                <p style="border-bottom:1px solid #EAEAEA;" class="w-100">80 Eagle Mall, Bahria Town</p>
                <p style="border-bottom:1px solid #EAEAEA;" class="w-100">Lahore | Punjab| Pakistan</p>
                <p style="border-bottom:1px solid #EAEAEA;" class="w-100">Phone: (+92) 335- 041 3044</p>
                <p style="border-bottom:1px solid #EAEAEA;" class="w-100">Whatsapp: (+92) 335- 041 3044</p>
                <p style="border-bottom:1px solid #EAEAEA;" class="w-100">support@habibapak.com</p>
                <p style="border-bottom:1px solid #EAEAEA;" class="w-100">www.habibapak.com</p>

                <h5 class="mt-4" style="border-bottom:2px solid #0FBE7C;">Hours</h5>
                <p class="m-0">Monday—Friday: 9:00AM–5:00PM</p>
                <p>Saturday & Sunday: 11:00AM–3:00PM</p>
            </div>
        </div>



        <!-- Require Footer  -->
        <?php require_once('footer.php'); ?>

        </body>

        </html>