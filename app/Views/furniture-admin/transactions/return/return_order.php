<?= $this->extend('template/template_admin'); ?>

<?= $this->section('content'); ?>

<main class="content">
    <div class="container-fluid p-0">

        <div class="row mb-3">
            <div class="col-md-12 d-inline-flex justify-content-between">
                <h1 class="h3 mb-3">Item Order List</h1>
                <a href="/order/new_order" class="btn btn-primary">New Order</a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <!-- <h5 class="card-title mb-0">Latest Projects</h5> -->
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th width="20%">Product Image</th>
                                <th width="50%">Product Detail</th>
                                <th width="10%">Price Each</th>
                                <th width="10%">Total</th>
                                <th width="10%">Order Item</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($orders as $o):?>
                            <tr>
                                <td><img src="/assets/img/product/<?= $o['picture']?>" alt="Product Picture" srcset="" width="100">
                                <h5 class="font-weight-bold pt-2">Order No : #<?= $o['no_order']?></h5>
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-3 text-right font-weight-bold">Quantity :</div>
                                        <div class="col-md-8"><?= $o['qty'];?></div>
                                        <div class="col-md-3 text-right font-weight-bold">Name :</div>
                                        <div class="col-md-8"><?= $o['name']?></div>
                                        <div class="col-md-3 text-right font-weight-bold">Code :</div>
                                        <div class="col-md-8"><?= $o['item_code']?></div>
                                        <div class="col-md-3 text-right font-weight-bold">Size :</div>
                                        <div class="col-md-8">
                                            <?= $o['measurment'].' - W '.$o['width'].' x D '.$o['depth'].' x H '. $o['height']?>
                                        </div>
                                        <div class="col-md-3 text-right font-weight-bold">Options :</div>
                                        <div class="col-md-8"></div>
                                        <div class="col-md-3 text-right font-weight-bold">Weight :</div>
                                        <div class="col-md-8"><?= $o['weight']?></div>
                                    </div>
                                </td>
                                <td>
                                    <?= $o['price']?>
                                </td>
                                <td><?= $o['total_price']?></td>
                                <td class="text-center">
                                    <a class="btn btn-secondary btn-sm" href="/order/return_order?id=<?= base64_encode($o['id_order'])?>"><i data-feather="rotate-ccw"></i> return</a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</main>

<?= $this->endSection(); ?>