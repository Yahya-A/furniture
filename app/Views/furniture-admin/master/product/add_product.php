<?= $this->extend('template/template_admin'); ?>

<?= $this->section('content'); ?>

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">New Product</h1>

        <div class="row">

            <div class="col-md-12 col-xl-12">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="account" role="tabpanel">

                        <!-- <div class="card">
                            <div class="card-header">

                                <h5 class="card-title mb-0">Product Info</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="mb-3">
                                                <label class="form-label" for="inputUsername">Username</label>
                                                <input type="text" class="form-control" id="inputUsername"
                                                    placeholder="Username">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="inputUsername">Biography</label>
                                                <textarea rows="2" class="form-control" id="inputBio"
                                                    placeholder="Tell something about yourself"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="text-center">
                                                <img alt="Charles Hall" src="img/avatars/avatar.jpg"
                                                    class="rounded-circle img-responsive mt-2" width="128"
                                                    height="128" />
                                                <div class="mt-2">
                                                    <span class="btn btn-primary">Upload</span>
                                                </div>
                                                <small>For best results, use an image at least 128px by
                                                    128px in .jpg format</small>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </form>

                            </div>
                        </div> -->

                        <div class="card">
                            <div class="card-header">

                                <h5 class="card-title mb-0">Product Info</h5>
                            </div>
                            <div class="card-body">
                                <form action="/product/save_product" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id_prod">
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="PName">Product Name</label>
                                            <input type="text" class="form-control" name="product_name" id="PName"
                                                placeholder="Tables - xxx ">
                                        </div>
                                        <div class="mb-3 col-md-3">
                                            <label class="form-label" for="measurment">Measurment</label>
                                            <select id="measurment" class="form-control" name="measurment">
                                                <option selected>Choose...</option>
                                                <option value="standard">Standard</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-1">
                                            <label class="form-label" for="width">Width</label>
                                            <input type="text" class="form-control" name="width" id="width"
                                                placeholder="0 cm">
                                        </div>
                                        <div class="mb-3 col-md-1">
                                            <label class="form-label" for="depth">Depth</label>
                                            <input type="text" class="form-control" id="depth" name="depth"
                                                placeholder="0 cm">
                                        </div>
                                        <div class="mb-3 col-md-1">
                                            <label class="form-label" for="height">Height</label>
                                            <input type="text" class="form-control" id="height" name="height"
                                                placeholder="0 cm">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-md-3">
                                            <label class="form-label" for="supplier">Supplier</label>
                                            <input type="text" class="form-control" id="supplier" name="supplier"
                                                placeholder="LuxuryAssets">
                                        </div>
                                        <div class="mb-3 col-md-3">
                                            <label class="form-label" for="categories">Categories</label>
                                            <select id="categories" name="categories" class="form-control">
                                                <option selected>Choose...</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-3">
                                            <label class="form-label" for="price">Base Price</label>
                                            <input type="text" class="form-control" name="price" id="price"
                                                placeholder="0">
                                        </div>
                                        <div class="mb-3 col-md-3">
                                            <label class="form-label" for="stock">Stock</label>
                                            <input type="text" class="form-control" name="stock" id="stock"
                                                placeholder="0">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="spesification">Spesification</label>
                                        <textarea name="alamat" class="form-control" id="spesification" rows="3"
                                            placeholder="More Spesification"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="text-center">
                                            <img alt="Charles Hall" src="/assets/img/avatars/avatar.jpg"
                                                class="rounded-circle img-responsive mt-2" width="100%" height="auto" />
                                            <div class="mt-2">
                                                <input type="file" name="product_picture">
                                                <!-- <span class="btn btn-primary">Upload</span> -->
                                            </div>
                                            <small>For best results, use an image at least 128px by
                                                128px in .jpg format</small>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary float-end">Add Product</button>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<?= $this->endSection(); ?>