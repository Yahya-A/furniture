<?= $this->extend('template/template_admin'); ?>

<?= $this->section('content'); ?>

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">New Customer</h1>

        <form action="/customer/save_customer" method="post">
        <input type="hidden" name="id_customer">
        <input type="hidden" name="role" value="customer">
        <input type="hidden" name="is_approve" value="1">
            <div class="row">
                <div class="col-md-6 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Personal Information</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="CName">Company</label>
                                    <input type="text" class="form-control" name="company_name" id="CName"
                                        placeholder="Designer Company">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="Position">Title/Position</label>
                                    <input type="text" class="form-control" name="position" id="Position"
                                        placeholder="CEO">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="FName">First Name</label>
                                    <input type="text" class="form-control" name="fname" id="FName" placeholder="John">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="LName">Last Name</label>
                                    <input type="text" class="form-control" name="lname" id="LName"
                                        placeholder="Aguero">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="cusGroup">Customer Group</label>
                                    <select id="cusGroup" class="form-control" name="customer_group">
                                        <option selected>Choose...</option>
                                        <?php foreach($price as $pr):?>
                                        <option value="<?= $pr['id_price']?>"><?= $pr['price_name']?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Customer Address</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="StAddress">Street Address</label>
                                    <input type="text" class="form-control" name="st_address" id="StAddress"
                                        placeholder="St. xxxx">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="PCode">PostCode</label>
                                    <input type="text" class="form-control" name="post_code" id="PCode"
                                        placeholder="12345">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="City">City</label>
                                    <input type="text" class="form-control" name="city" id="City"
                                        placeholder="New York">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="State">State</label>
                                    <select id="State" class="form-control" name="state">
                                        <option selected>Choose...</option>
                                        <option value="a">A</option>
                                        <option value="b">B</option>
                                        <option value="c">C</option>
                                        <option value="d">D</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="Country">Country</label>
                                    <select id="Country" class="form-control" name="country">
                                        <option selected>Choose...</option>
                                        <option value="1">11</option>
                                        <option value="2">22</option>
                                        <option value="3">33</option>
                                        <option value="4">44</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Customer Information</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="Email">Email Address</label>
                                    <input type="text" class="form-control" name="email" id="Email"
                                        placeholder="email@company.com">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="Website">Website</label>
                                    <input type="text" class="form-control" name="website" id="Website"
                                        placeholder="www.company.com">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="Phone">Phone</label>
                                    <input type="text" class="form-control" name="phone" id="Phone"
                                        placeholder="xxx-xxx-xxxx">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="Ext">Ext</label>
                                    <input type="text" class="form-control" name="extension" id="Ext" placeholder="">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="Fax">Fax</label>
                                    <input type="text" class="form-control" name="fax" id="Fax"
                                        placeholder="xxx-xxx-xxxx">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Account Detail</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="mb-3 col-md-12 d-flex justify-content-between">
                                    <p>Account Created</p>
                                    <p class="mr-5"><?= date("d-m-Y");?></p>
                                </div>
                                <div class="mb-3 col-md-12">
                                    <div class="row">
                                        <!-- <div class="d-flex justify-content-between">
                                            <p>Last Login</p>
                                            <p class="mr-5">12-12-1290</p>
                                        </div> -->
                                        <div class="d-flex justify-content-between">
                                            <p>IP Address</p>
                                            <p class="mr-5"><?= $_SERVER['REMOTE_ADDR'];?></p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p>Browser</p>
                                            <p class="mr-5"><?= $browser_name ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="AllowLogin">Allow Login</label>
                                    <select id="AllowLogin" class="form-control" name="allow_login">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Add Customer</button>
                </div>
            </div>
        </form>
    </div>
</main>

<?= $this->endSection(); ?>