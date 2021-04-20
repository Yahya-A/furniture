<?= $this->extend('template/template_admin'); ?>

<?= $this->section('content'); ?>

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">List Product</h1>

        <div class="row">
            <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <!-- <h5 class="card-title mb-0">Latest Projects</h5> -->
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th class="d-none d-sm-table-cell">No</th>
                                <th>Name/Model</th>
                                <th class="d-none d-lg-table-cell">Image</th>
                                <th>Base Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach($product as $p):
                            ?>
                            <tr>
                                <td class="d-none d-sm-table-cell"><?= $no; ?></td>
                                <td>
                                    <?= $p['name']?>
                                    <p>Size : <?= $p['width'].'x'.$p['height'].'x'.$p['depth'];?></p>
                                </td>
                                <td class="d-none d-lg-table-cell"><?= $p['picture']?></td>
                                <td><span class="badge bg-success"><?= $p['price']?></span></td>
                                <td>
                                    <div class="btn-group-vertical btn-group-sm" role="group">
                                        <a class="btn btn-secondary btn-sm" href="#"><i data-feather="info"></i></a>
                                        <a class="btn btn-secondary btn-sm" href="/product/update_product?id=<?= base64_encode($p['id_prod'])?>"><i data-feather="edit"></i></a>
                                        <a class="btn btn-secondary btn-sm" href="#"><i data-feather="trash-2"></i></a>
                                    </div>
                                </td>
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