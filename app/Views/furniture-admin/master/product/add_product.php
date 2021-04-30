<?= $this->extend('template/template_admin'); ?>

<?= $this->section('content'); ?>

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">New Product</h1>

        <div class="row">

            <div class="col-md-12 col-xl-12">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="account" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">General Details</h5>
                            </div>
                            <div class="card-body">
                                <form action="/product/save_product" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id_prod">
                                    <input type="hidden" name="measurment" value="standard">
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label class="form-label" for="PName">Product Name</label>
                                                    <input type="text" class="form-control" name="product_name"
                                                        id="PName" placeholder="Tables - xxx ">
                                                </div>
                                                <div class="col-md-12 mt-1">
                                                    <label class="form-label" for="supplier">Supplier</label>
                                                    <input type="text" class="form-control" id="supplier"
                                                        name="supplier" placeholder="LuxuryAssets">
                                                </div>
                                                <div class="col-md-12 mt-1">
                                                    <label class="form-label" for="categories">Categories</label>
                                                    <select id="categories" name="categories" class="form-control">
                                                        <option selected>Choose...</option>
                                                        <?php foreach($parent as $p):?>
                                                        <optgroup label="<?= $p['parent_category']?>">
                                                            <?php foreach($sub as $s):?>
                                                            <?php if($s['id_categories'] == $p['id_categories']):?>
                                                            <option value="<?= $s['id']?>"><?= $s['sub_category']?></option>
                                                            <?php endif;?>
                                                            <?php endforeach;?>
                                                        </optgroup>
                                                        <?php endforeach;?>
                                                    </select>
                                                </div>
                                                <div class="col-md-12 mt-1">
                                                <div class="row">
                                                        <div class="col-md-10">
                                                            <label class="form-label" for="price">Base Price</label>
                                                    <input type="text" class="form-control" name="price" id="price"
                                                        placeholder="0">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <label class="form-label" for="stock">Stock</label>
                                            <input type="text" class="form-control" name="stock" id="stock"
                                                placeholder="0">
                                                        </div>
                                                </div>
                                                    
                                                </div>
                                                <div class="col-md-12"></div>
                                            </div>

                                        </div>
                                        
                                        <div class="mb-3 col-md-1">
                                                
                                                    <label class="form-label" for="width">Weight</label>
                                                    <input type="text" class="form-control" name="weight" id="weight"
                                                        placeholder="0 cm">
                                                
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
                                    <div class="mb-3">
                                        <label class="form-label" for="spesification">Spesification</label>
                                        <textarea name="alamat" class="form-control" id="spesification" rows="5"
                                            placeholder="More Spesification"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="text-center">
                                            <img src="/assets/img/product/default.png" alt="Preview Product"
                                                id="preview_product" class=" img-responsive mt-2" width="100%"
                                                height="auto" />
                                            <div class="mt-2">
                                                <input type="file" id="product_picture" name="product_picture"
                                                    onchange="previewImg()">
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

<?= $this->section('config') ?>
<script type="text/javascript">
    function previewImg() {
        const prod = document.querySelector('#product_picture');
        const imgPreview = document.querySelector('#preview_product');
        // const uploadName = document.querySelector('.upload-name');
        // uploadName.textContent = ava.files[0].name;

        const img = new FileReader();
        img.readAsDataURL(prod.files[0]);


        console.log(img);
        img.onload = function (e) {
            // let path = e.target.result;
            let name = prod.files[0].name;
            imgPreview.src = e.target.result;
            // localStorage.setItem('temppath', path);
            // // localStorage.setItem('tempname', name);
        }
    }
</script>
<?= $this->endSection(); ?>