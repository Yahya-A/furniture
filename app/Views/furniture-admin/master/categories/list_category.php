<?= $this->extend('template/template_admin'); ?>

<?= $this->section('content'); ?>

<main class="content">
    <div class="container-fluid p-0">
        <div class="row mb-3">
            <div class="col-md-12 d-inline-flex justify-content-between">
                <h1 class="h3 mb-3">List Category</h1>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newCategoryModal">New
                    Categories</button>
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
                                <th>Name/Model</th>
                                <th width="20%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach($category as $c):
                            ?>
                            <tr>
                                <?php if (empty($c)) :?>
                                <td class="d-none d-sm-table-cell" colspan="2">Belum Ada Data</td>
                                <td>
                                    <?php else :?>
                                <td class="d-none d-sm-table-cell"><?= $no; ?>
                                <td>
                                    <?= $c['category_name']?>
                                </td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group">
                                        <a class="btn btn-secondary btn-sm" href="#">See Product</a>
                                        <a class="btn btn-secondary btn-sm" data-toggle="modal"
                                            data-target="#updateCategoryModal<?= $c['id_categories']?>"><i
                                                data-feather="edit"></i></a>
                                        <a class="btn btn-secondary btn-sm" data-toggle="modal"
                                            data-target="#deleteCategoryModal<?= $c['id_categories']?>"><i
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
<div class="modal fade" id="newCategoryModal" tabindex="-1" role="dialog" aria-labelledby="newCategoryModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="CategoryModalLabel">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/categories/save_category" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="categoryName">Category Name</label>
                                <input type="text" name="category_name" class="form-control" id="categoryName"
                                    placeholder="Tables">
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
<?php foreach($category as $c):?>
<div class="modal fade" id="updateCategoryModal<?= $c['id_categories']?>" tabindex="-1" role="dialog"
    aria-labelledby="newCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="CategoryModalLabel">Update Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/categories/save_category" method="post">

                <input type="hidden" name="id_categories" value="<?= $c['id_categories']?>">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="categoryName">Category Name</label>
                                <input type="text" name="category_name" class="form-control" id="categoryName"
                                    value="<?= $c['category_name']?>" placeholder="Tables">
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
<?php foreach($category as $c):?>
<div class="modal fade" id="deleteCategoryModal<?= $c['id_categories']?>" tabindex="-1" role="dialog"
    aria-labelledby="newCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-white" id="CategoryModalLabel">Delete Category</h5>
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
                <a class="btn btn-danger" href="/categories/delete_category?id=<?= base64_encode($c['id_categories'])?>">Delete</a>
            </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach;?>


<?= $this->endSection(); ?>