<?= $this->extend('template/template_admin'); ?>

<?= $this->section('content'); ?>

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">New Order</h1>

        <div class="row">

            <div class="col-md-12 col-xl-12">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="account" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <!-- <h5 class="card-title mb-0">Product Info</h5> -->
                            </div>
                            <div class="card-body">
                                <form action="/order/save_order" method="post">
                                    <input type="hidden" name="id_prod">
                                    <div class="row">
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label" for="search">Search Product</label>
                                            <input type="text" class="form-control" placeholder="Search"
                                                aria-label="Search" aria-describedby="basic-addon2" id="searchprod">
                                            <input type="hidden" id="prod_id">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label" for="PName">Search Customer</label>
                                            <input type="text" class="form-control" placeholder="Customer Name .."
                                                aria-label="Search" aria-describedby="basic-addon2" id="searchcus">
                                            <input type="hidden" id="cus_id">
                                        </div>
                                        <div class="mb-3 col-md-1">
                                            <label class="form-label" for="PName">Qty</label>
                                            <input type="number" class="form-control" placeholder="0" aria-label="Qty"
                                                aria-describedby="basic-addon2" id="qty">
                                        </div>
                                        <div class="mb-3 col-md-3 pt-2">

                                            <a class="btn btn-md btn-primary mt-4" id="addproduct">Add Product</a>
                                        </div>
                                    </div>
                                    <table class="table table-hover my-0 mt-5">
                                        <thead>
                                            <tr>
                                                <th>Name/Model</th>
                                                <th width="5%">Qty</th>
                                                <th width="15%">Base Price</th>
                                                <th width="15%">Price</th>
                                                <th width="5%">Sub</th>
                                                <!-- <th width="5%"></th> -->
                                            </tr>
                                        </thead>
                                        <tbody id="product_list">

                                        </tbody>
                                        <tfoot class="bg-secondary text-white">
                                            <tr>
                                                <td colspan="4" class="text-center font-weight-bold">Total</td>
                                                <td colspan="3" id="total_price"></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div class="row mt-4">
                                    <div class="col-md-12">
                                    <label class="form-label" for="PNote">Note</label>
                                    <textarea name="note" class="form-control" id="note" rows="3"
                                            placeholder="Some Note"></textarea>
                                    </div>
                                    <div class="col-md-12 mt-5  ">
                                    <button type="submit" class="btn btn-lg btn-primary float-end">Checkout</button>
                                    </div>
                                    </div>

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

<?= $this->section('config');?>
<script type="text/javascript">
    let baseurl = '<?= base_url()?>';
</script>
<?= $this->endSection();?>