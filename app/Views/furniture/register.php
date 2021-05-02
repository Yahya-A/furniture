<?= $this->extend('template/template_frontend');?>

<?= $this->section('content');?>

<div id="content-wrapper"> <br>
    <h1>REGISTER </h1>
    <div class="normal">






        <form class="js-form-wrapper form-wrapper" action="/auth/register" method="post">



            <input name="event" type="hidden" id="eventInput" value="SendEnquery">



            <p>Fields with * are required</p>



            <p>

                <label for="first_name" class="hidden">name</label>

                <input name="fname" type="text" class="normalhalf" id="first_name" placeholder="First Name *" size="200"
                    maxlength="200">
            </p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>
                <input name="lname" type="text" id="last_name" class="normalhalf" placeholder="Last Name *">
            </p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>
                <input name="position" type="text" id="Position" class="normalhalf" placeholder="Position *">
            </p>
            <p>&nbsp;</p>
            <p> <br>
            </p>

            <p>

                <label for="email" class="hidden">Company</label>

                <input name="company_name" type="text" class="normalhalf" id="email" placeholder="Company name *">
            </p>
            <p>&nbsp;</p>
            <p>
                <br>
            </p>

            <p>

                <input name="email" type="text" class="normalhalf" id="email" placeholder="Email *">
            </p>
            <p>&nbsp;</p>
            <p> <br>
            </p>
            <p>
                <input name="st_address" type="text" class="normalhalf" id="email2" placeholder="Street *">
            </p>
            <p>&nbsp;</p>
            <p> <br>
            </p>
            <p>
                <input name="state" type="text" class="normalhalf" id="email3" placeholder="State *">
            </p>
            <p>&nbsp;</p>
            <p> <br>
            </p>
            <p>
                <input name="post_code" type="text" class="normalhalf" id="email4" placeholder="Zip Code *">
            </p>
            <p>&nbsp;</p>
            <p> <br>
            </p>
            <p>
                <input name="country" type="text" class="normalhalf" id="email5" placeholder="Country *">
            </p>
            <p>&nbsp;</p>
            <p>&nbsp; </p>
            <p>
                <input name="phone" type="text" class="normalhalf" id="email6" placeholder="Phone *">
            </p>
            <p>&nbsp;</p>
            <p>&nbsp; </p>
            <p>
                <input name="extension" type="text" class="normalhalf" id="extension" placeholder="Extension *">
            </p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>
                <input name="website" type="text" id="first_name3" class="normalhalf" placeholder="Website *">
            </p>
            <p>&nbsp;</p>
            <p>&nbsp; </p>

            <p>

                <!-- <label for="city" class="hidden">city</label>
                <label for="country" class="hidden">country</label>
                <label for="enquiry" class="hidden">enquiry</label> -->
            </p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>
                <input name="password" type="text" id="password" class="normalhalf" placeholder="Desired Password *">
            </p>
            <p>&nbsp;</p>
            <p>&nbsp; </p>

            <p>

                <label for="enquiryDetail" class="hidden">enquiryDetail</label>
                <input name="conf_password" type="text" id="password2" class="normalhalf"
                    placeholder="Password Confirm *">
            </p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>
                <select name="customer_group" class="normalhalf">
                    <option value="Designer">Designer</option>
                    <option value="Contract-Hospitality">Contract-Hospitality</option>
                    <option value="Retail Outlet">Retail Outlet</option>
                    <option value="{rivate Party">Private Party</option>


                    Business Type
                </select>
            </p>
            <p>&nbsp; </p>

            <div class="js-ajax-response"></div>
    </div>
    <div class="centered">
        <p>
            <label for="first_name3" class="hidden">name</label>
            <label for="email3" class="hidden">Company</label>
            <br>
        </p>
        <p>
            <label for="telephone3" class="hidden">telephone</label>
            <label for="email3" class="hidden">email *</label>
            <label for="city3" class="hidden">city</label>
            <label for="country3" class="hidden">country</label>
            <label for="enquiry3" class="hidden">enquiry</label>
        </p>
        <ul class="butttts">
            <li><button type="submit" class="js-form-submit">SUBMIT</button></li>
        </ul>

        </form>
    </div>
    <div class="clear"></div>
</div>

<?= $this->endSection();?>