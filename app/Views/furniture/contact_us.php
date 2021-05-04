<?= $this->extend('template/template_frontend') ?>

<?= $this->section('content') ?>
<div style="display: none;">
    <a href="furniture/flower1.jpg" data-fancybox="images-preview" data-width="800" data-height="800" data-thumb="/furniture/flower1.jpg"></a><img src="furniture/flower1.jpg">

    <a href="furniture/flower2.jpg" data-fancybox="images-preview" data-width="800" data-height="800" data-thumb="/furniture/flower2.jpg"></a><img src="furniture/flower1.jpg">

</div>
<!-- JS -->
<script src="jquery-3.4.1.min.js"></script>
<div id="content-wrapper"> <br>
    <h1>Contact US</h1>
    <div class="normalhalf">
        <form class="js-form-wrapper form-wrapper">
            <input name="event" type="hidden" id="eventInput" value="SendEnquery">
            <p>Fields with * are required</p>
            <p>
                <label for="name" class="hidden">name</label>

                <input name="name" type="text" id="name" class="required" placeholder="Name *">
            </p>
            <p>
                <input name="company" type="text" id="company" placeholder="Company name">
            </p>
            <p>
                <input name="emailaddress" type="text" id="email" placeholder="Email *">
            </p>
            <p>
                <textarea name="enquiry" rows="6" cols="20" id="enquiry" placeholder="Enquiry *"></textarea>
            </p>
            <p>
            </p>
            <div class="js-ajax-response"></div><br>
            <p>
            <ul class="butttts">
                <li><a id="submit2" href="#" class="js-form-submit" data-ajax="/AjaxHandler">SEND ENQUIRY</a></li>
            </ul>
        </form>
    </div>
    <div class="clear"></div>
</div>
<?= $this->endSection() ?>