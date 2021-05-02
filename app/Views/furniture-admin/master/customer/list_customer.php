<?= $this->extend('template/template_admin'); ?>

<?= $this->section('content'); ?>

<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">List Customer</h1>

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
                                <th>Customer</th>
                                <th class="d-none d-lg-table-cell">Company</th>
                                <th>Activity</th>
                                <th>Price Tier</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach($customer as $c):
                            ?>
                            <tr>
                                <td class="d-none d-sm-table-cell"><?= $no; ?></td>
                                <td>
                                    <?= ucfirst($c['fname']).' '. ucfirst($c['lname'])?>
                                    <p>Size : <?= $c['website']?></p>
                                </td>
                                <td class="d-none d-lg-table-cell"><?= $c['company_name']?></td>
                                <td>
                                <p>Last Login : 12/12/1290</p>
                                <p>Allow Login : <?= ($c['allow_login'] == 1 ? 'Yes' : 'No')?></p>
                                </td>
                                <td class="d-none d-lg-table-cell"><?= strtoupper($c['price_name'])?></td>
                                <td>
                                    <div class="btn-group-vertical btn-group-sm" role="group">
                                        <!-- <a class="btn btn-secondary btn-sm" href="#"><i data-feather="info"></i></a> -->
                                        <a class="btn btn-secondary btn-sm" href="/customer/update_customer?id=<?= base64_encode($c['id_customer'])?>"><i data-feather="edit"></i></a>
                                        <a class="btn btn-secondary btn-sm" href="/customer/delete_customer?id=<?= base64_encode($c['id_customer'])?>"><i data-feather="trash-2"></i></a>
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