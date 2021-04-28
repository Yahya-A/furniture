<?= $this->extend('template/template_admin'); ?>

<?= $this->section('content'); ?>

<main class="content">
    <div class="container-fluid p-0">
        <div class="row mb-3">
            <div class="col-md-12 d-inline-flex justify-content-between">
                <h1 class="h3 mb-3">List Category</h1>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newPriceModal">New
                    Price</button>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th>Namel</th>
                                <th>Description</th>
                                <th>Rate</th>
                                <th width="20%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach($price as $p):
                            ?>
                            <tr>
                                <?php if (empty($p)) :?>
                                <td class="d-none d-sm-table-cell" colspan="2">Belum Ada Data</td>
                                <td>
                                    <?php else :?>
                                <td class="d-none d-sm-table-cell"><?= $no; ?>
                                <td>
                                    <?= $p['price_name']?>
                                </td>
                                <td>
                                    <?= $p['description']?>
                                </td>
                                <td>
                                    <?= $p['rate']?>%
                                </td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group">
                                        <!-- <a class="btn btn-secondary btn-sm" href="/product/categories?q=">See Product</a> -->
                                        <a class="btn btn-secondary btn-sm" data-toggle="modal"
                                            data-target="#updatePriceModal<?= $p['id_price']?>"><i
                                                data-feather="edit"></i></a>
                                        <a class="btn btn-secondary btn-sm" data-toggle="modal"
                                            data-target="#deletePriceModal<?= $p['id_price']?>"><i
                                                data-feather="trash-2"></i></a>
                                    </div>
                                </td>
                                <?php endif;?>
                            </tr>
                            <?php 
                            $no++;
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</main>

<?= $this->endSection(); ?>

<?= $this->section('modal'); ?>

<!-- Modal -->
<div class="modal fade" id="newPriceModal" tabindex="-1" role="dialog" aria-labelledby="newPriceModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="PriceModalLabel">Add Price</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/pricing/save_price" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="priceName">Name</label>
                                <input type="text" name="price_name" class="form-control" id="priceName"
                                    placeholder="Wholesale">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="desc">Description</label>
                                <input type="text" name="desc" class="form-control" id="desc"
                                    placeholder="Wholesale price">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="rate">Rate <small>in %</small></label>
                                <input type="text" name="rate" class="form-control" id="rate" placeholder="0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Category</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Edit -->
<?php foreach($price as $p):?>
<div class="modal fade" id="updatePriceModal<?= $p['id_price']?>" tabindex="-1" role="dialog"
    aria-labelledby="newPriceModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="PriceModalLabel">Update Price</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/pricing/save_price" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="priceName">Name</label>
                                <input type="text" name="price_name" class="form-control" id="priceName"
                                    placeholder="Wholesale" value="<?= $p['price_name']?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="desc">Description</label>
                                <input type="text" name="desc" class="form-control" id="desc"
                                    placeholder="Wholesale price" value="<?= $p['description']?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="rate">Rate <small>in %</small></label>
                                <input type="text" name="rate" class="form-control" id="rate" placeholder="0" value="<?= $p['rate']?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Category</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach;?>


<!-- Modal Delete -->
<?php foreach($price as $p):?>
<div class="modal fade" id="deletePriceModal<?= $p['id_price']?>" tabindex="-1" role="dialog"
    aria-labelledby="newPriceModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-white" id="PriceModalLabel">Delete Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <h4>Are you sure to delete this ?</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a class="btn btn-danger"
                    href="/pricing/delete_price?id=<?= base64_encode($p['id_price'])?>">Delete</a>
            </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach;?>


<?= $this->endSection(); ?>