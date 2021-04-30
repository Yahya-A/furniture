<?= $this->extend('template/template_admin'); ?>

<?= $this->section('content'); ?>

<main class="content">
    <div class="container-fluid p-0">

        <div class="header mb-3">
            <h1 class="h3 mb-2">Order Item</h1>
            <a href="/order/list_item_order" class="btn btn-md btn-secondary">Back</a>
            <a href="" class="btn btn-md btn-warning">Message Board</a>
        </div>

        <div class="row">
            <div class="col-md-12 col-xl-12">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="account" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12 mb-5">
                                                <img src="/assets/img/product/<?= $order['picture']?>"
                                                    class="img-responsive img-thumbnail" width="400">
                                            </div>
                                            <div class="col-md-10">
                                                <label class="form-label" for="measurment">Measurment</label>
                                                <input type="text" class="form-control" name="measurment" id="measurment" value="<?= $order['measurment']?>">
                                            </div>
                                            <div class="col-md-10 mt-2">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label class="form-label" for="width">- Width</label>
                                                        <input type="text" class="form-control" name="width"
                                                            id="width" placeholder="0 cm" value="<?= $order['width']?>">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label" for="depth">- Depth</label>
                                                        <input type="text" class="form-control" name="depth"
                                                            id="height" placeholder="0 cm" value="<?= $order['depth']?>">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-label" for="height">- Height</label>
                                                        <input type="text" class="form-control" name="height"
                                                            id="height" placeholder="0 cm" value="<?= $order['height']?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="mb-3 col-md-12">
                                                <div class="row">
                                                    <div class="col-md-3 text-right">
                                                        <h4 class="font-weight-bold">No Order : </h4>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <h4 class="font-weight-bold"><?= $order['no_order']?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="mb-3 col-md-12">
                                                <div class="row">
                                                    <div class="col-md-3 pl-4">
                                                        Product
                                                    </div>
                                                    <div class="col-md-8">
                                                        <?= $order['name']?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 col-md-12">
                                                <div class="row">
                                                    <div class="col-md-3 pl-4">
                                                        Item Code
                                                    </div>
                                                    <div class="col-md-8">
                                                        <?= $order['item_code']?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 col-md-12">
                                                <div class="row">
                                                    <div class="col-md-3 pl-4">
                                                        Quantity
                                                    </div>
                                                    <div class="col-md-8">
                                                        <?= $order['qty']?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 col-md-12">
                                                <div class="row">
                                                    <div class="col-md-3 pl-4">
                                                        Date Order
                                                    </div>
                                                    <div class="col-md-8">
                                                        <?= $order['date_order']?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 col-md-12">
                                                <div class="row">
                                                    <div class="col-md-3 pl-4">
                                                        Supplier
                                                    </div>
                                                    <div class="col-md-8">
                                                        <?= $order['supplier']?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3 mt-2 col-md-12">
                                                <label class="form-label" for="note">Spesification</label>
                                                <textarea name="spesification" id="spesification" class="form-control" cols="30"
                                                    rows="6"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12 mt-3">
                                                <label class="form-label" for="note">Note</label>
                                                <textarea name="note" id="note" class="form-control" cols="30"
                                                    rows="6"><?= $order['note']?></textarea>
                                            </div>
                                            <div class="col-md-12 mt-3">
                                                <label class="form-label" for="note">Message For Factory</label>
                                                <textarea name="message" id="message" class="form-control" cols="30"
                                                    rows="6"></textarea>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                        <a href="/export/generate_pdf/<?= base64_encode($order['id_order'])?>" class="mt-3 btn btn-lg btn-primary">Generate PDF</a>
                                        </div>

                                        
                                    </div>
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