<?= $this->extend('template/template_admin'); ?>

<?= $this->section('content'); ?>

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Update Customer</h1>
        <form action="/customer/save_customer" method="post">
        <input type="hidden" name="role" value="customer">
        <input type="hidden" name="is_approve" value="1">
        <input type="hidden" name="id_customer" value="<?= $customer['id_customer']?>">
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
                                        placeholder="Designer Company" value="<?= $customer['company_name']?>">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="Position">Title/Position</label>
                                    <input type="text" class="form-control" name="position" id="Position"
                                        placeholder="CEO" value="<?= $customer['position']?>">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="FName">First Name</label>
                                    <input type="text" class="form-control" name="fname" id="FName" placeholder="John" value="<?= $customer['fname']?>">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="LName">Last Name</label>
                                    <input type="text" class="form-control" name="lname" id="LName"
                                        placeholder="Aguero" value="<?= $customer['lname']?>">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="cusGroup">Customer Group</label>
                                    <select id="cusGroup" class="form-control" name="customer_group">
                                        <option selected>Choose...</option>
                                        <?php foreach($price as $pr):?>
                                        <option value="<?= $pr['id_price']?>" <?= ($pr['id_price'] == $customer['id_price'] ? 'selected' : '')?>><?= $pr['price_name']?></option>
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
                                        placeholder="St. xxxx" value="<?= $customer['st_address']?>">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="PCode">PostCode</label>
                                    <input type="text" class="form-control" name="post_code" id="PCode"
                                        placeholder="12345" value="<?= $customer['post_code']?>">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="City">City</label>
                                    <input type="text" class="form-control" name="city" id="City"
                                        placeholder="New York" value="<?= $customer['city']?>">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="State">State</label>
                                    <select id="State" class="form-control" name="state">
                                        <option selected>Choose...</option>
                                        <option value="a" <?= ($customer['state'] == 'a' ? 'selected' : '')?>>A</option>
                                        <option value="b" <?= ($customer['state'] == 'b' ? 'selected' : '')?>>B</option>
                                        <option value="c" <?= ($customer['state'] == 'c' ? 'selected' : '')?>>C</option>
                                        <option value="d" <?= ($customer['state'] == 'd' ? 'selected' : '')?>>D</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="Country">Country</label>
                                    <select id="Country" class="form-control" name="country">
                                        <option selected>Choose...</option>
                                        <option value="1" <?= ($customer['country'] == '1' ? 'selected' : '')?>>11</option>
                                        <option value="2" <?= ($customer['country'] == '2' ? 'selected' : '')?>>22</option>
                                        <option value="3" <?= ($customer['country'] == '3' ? 'selected' : '')?>>33</option>
                                        <option value="4" <?= ($customer['country'] == '4' ? 'selected' : '')?>>44</option>
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
                                        placeholder="email@company.com" value="<?= $customer['email']?>">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="Website">Website</label>
                                    <input type="text" class="form-control" name="website" id="Website"
                                        placeholder="www.company.com" value="<?= $customer['website']?>">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="Phone">Phone</label>
                                    <input type="text" class="form-control" name="phone" id="Phone"
                                        placeholder="xxx-xxx-xxxx" value="<?= $customer['phone']?>">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="Ext">Ext</label>
                                    <input type="text" class="form-control" name="extension" id="Ext" placeholder="" value="<?= $customer['extension']?>">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="Fax">Fax</label>
                                    <input type="text" class="form-control" name="fax" id="Fax"
                                        placeholder="xxx-xxx-xxxx" value="<?= $customer['fax']?>">
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
                                    <p class="mr-5">12-12-1290</p>
                                </div>
                                <div class="mb-3 col-md-12">
                                    <div class="row">
                                        <div class="d-flex justify-content-between">
                                            <p>Last Login</p>
                                            <p class="mr-5">12-12-1290</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p>IP Address</p>
                                            <p class="mr-5">192.168.0.1</p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p>Browser</p>
                                            <p class="mr-5">Firefox</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="AllowLogin">Allow Login</label>
                                    <select id="AllowLogin" class="form-control" name="allow_login">
                                        <option value="1" <?= ($customer['allow_login'] == '1' ? 'selected' : '')?>>Yes</option>
                                        <option value="0" <?= ($customer['allow_login'] == '0' ? 'selected' : '')?>>No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Update Customer</button>
                </div>
            </div>
        </form>
    </div>
</main>

<?= $this->endSection(); ?>