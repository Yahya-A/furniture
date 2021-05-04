<?= $this->extend('template/template_frontend') ?>

<?= $this->section('content') ?>
<div style="display: none;">
    <a href="furniture/flower1.jpg" data-fancybox="images-preview" data-width="800" data-height="800" data-thumb="/furniture/flower1.jpg"></a><img src="furniture/flower1.jpg">

    <a href="furniture/flower2.jpg" data-fancybox="images-preview" data-width="800" data-height="800" data-thumb="/furniture/flower2.jpg"></a><img src="furniture/flower1.jpg">

</div>
<!-- JS -->
<script src="jquery-3.4.1.min.js"></script>
<div id="content-wrapper"> <br>
    <h1>Log In</h1>
    <div class="odd">
        <form class="js-form-wrapper form-wrapper">
            <input name="event" type="hidden" id="eventInput" value="SendEnquery">
            <p> Please enter your email address and password</p>
            <p>&nbsp;</p>
            <p>
                <input name="username" type="text" id="username" class="normalhalf" placeholder="User Name">
            </p>
            <p>&nbsp; </p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p class="centered">&nbsp; </p>
            <p>
                <input name="password" type="text" class="normalhalf" id="password" placeholder="Password">
            </p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>
            </p>
            <div class="js-ajax-response">
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </div>
            <br>
            <p>
            <ul class="butttts">
                <li><a id="submit2" href="#" class="js-form-submit" data-ajax="/AjaxHandler">Log In</a></li>
            </ul>
        </form>
    </div>
    <div class="clear"></div>
</div>
<?= $this->endSection() ?>