<?= $this->extend('template/template_admin'); ?>

<?= $this->section('content'); ?>

<main class="content">
    <div class="container-fluid p-0">
        <div class="row mb-3">
            <div class="col-md-12 d-inline-flex justify-content-between">
                <h1 class="h3 mb-3">List Category</h1>
                <div class="action">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#newParentCategoryModal">Parent
                        Categories</button>
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#newSubCategoryModal">Sub
                        Categories</button>
                </div>
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
                                <th>Category</th>
                                <th width="20%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- <tr>
                                <td colspan="2">adkalsndlk</td>
                                <td></td>
                            </tr>
                            <tr class="p-3">
                                <td>1</td>
                                <td>klasfklanfas</td>
                                <td>1</td>
                            </tr> -->
                            <?php foreach($parent as $p):?>
                            <tr>
                                <td colspan="2"><?= $p['parent_category']?></td>
                                <td></td>
                            </tr>
                                <?php 
                                $no = 1;
                                foreach($sub as $s):
                                ?>
                                <?php  if ($p['id_categories'] == $s['id_categories']):?>
                            <tr>
                                <td class="d-none d-sm-table-cell"><?= $no; ?>
                                <td>
                                    <?= $s['sub_category']?>
                                </td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group">
                                        <a class="btn btn-secondary btn-sm"
                                            href="/product/categories?q=<?= base64_encode($s['id_categories'])?>">See
                                            Product</a>
                                        <a class="btn btn-secondary btn-sm" data-toggle="modal"
                                            data-target="#updateCategoryModal<?= $s['id_categories']?>"><i
                                                data-feather="edit"></i></a>
                                        <a class="btn btn-secondary btn-sm" data-toggle="modal"
                                            data-target="#deleteCategoryModal<?= $s['id_categories']?>"><i
                                                data-feather="trash-2"></i></a>
                                    </div>
                                </td>
                            </tr>
                                <?php endif;?>
                                <?php $no++; endforeach;?>
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
<div class="modal fade" id="newParentCategoryModal" tabindex="-1" role="dialog" aria-labelledby="newParentCategoryModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ParentCategoryModalLabel">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/categories/save_category" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="parent">Parent Category</label>
                                <input type="text" name="parent_category" class="form-control" id="parentCategory"
                                    placeholder="Tables">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Parent</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Edit -->
<?php foreach($parent as $p):?>
<div class="modal fade" id="updateCategoryModal<?= $p['id_categories']?>" tabindex="-1" role="dialog"
    aria-labelledby="newCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="CategoryModalLabel">Update Parent</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/categories/save_category" method="post">

                <input type="hidden" name="id_categories" value="<?= $p['id_categories']?>">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="parentCategory">Parent Category</label>
                                <input type="text" name="parent_category" class="form-control" id="parentCategory"
                                    value="<?= $p['parent_category']?>" placeholder="Tables">
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
<?php foreach($parent as $p):?>
<div class="modal fade" id="deleteParentCategoryModal<?= $p['id_categories']?>" tabindex="-1" role="dialog"
    aria-labelledby="newParentCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-white" id="ParentCategoryModalLabel">Delete Category</h5>
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
                    href="/categories/delete_category?id=<?= base64_encode($p['id_categories'])?>">Delete</a>
            </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach;?>


<!-- Sub Category -->

<!-- Modal -->
<div class="modal fade" id="newSubCategoryModal" tabindex="-1" role="dialog" aria-labelledby="newCategoryModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="CategoryModalLabel">Add Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/categories/save_sub_category" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="parent">Parent Category</label>
                                <select id="parent" class="form-control" name="id_parent">
                                    <option selected>Choose...</option>
                                    <?php foreach($parent as $p):?>
                                    <option value="<?= $p['id_categories']?>"><?= $p['parent_category']?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="sub">Sub Category</label>
                                <input type="text" name="sub_category" class="form-control" id="sub"
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
<?php foreach($sub as $s):?>
<div class="modal fade" id="updateSubCategoryModal<?= $s['id_categories']?>" tabindex="-1" role="dialog"
    aria-labelledby="newSubCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="SubCategoryModalLabel">Update Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/categories/save_category" method="post">

                <input type="hidden" name="id_categories" value="<?= $s['id_categories']?>">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="categoryName">Category Name</label>
                                <input type="text" name="sub_category" class="form-control" id="categoryName"
                                    value="<?= $s['sub_category']?>" placeholder="Tables">
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
<?php foreach($sub as $s):?>
<div class="modal fade" id="deleteSubCategoryModal<?= $s['id_categories']?>" tabindex="-1" role="dialog"
    aria-labelledby="newSubCategoryModalLabel" aria-hidden="true">
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
                <a class="btn btn-danger"
                    href="/categories/delete_category?id=<?= base64_encode($s['id_categories'])?>">Delete</a>
            </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach;?>


<?= $this->endSection(); ?>