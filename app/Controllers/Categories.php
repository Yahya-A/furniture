<?php

namespace App\Controllers;

use App\Models\ModelCategories;
use App\Models\ModelSubCategories;

class Categories extends BaseController
{

    protected $mCategories;
    protected $mSubCategories;

    public function __construct()
    {
        $this->mCategories = new ModelCategories();
        $this->mSubCategories = new ModelSubCategories();
    }

	public function new_category()
	{
        $active = \menu('categories');

        $data   = [
            'active_menu'   => $active
        ];

		return view('furniture-admin/master/product/add_product', $data);
	}

	public function list_category()
	{
        $parent = $this->mCategories->getCategory();
        $sub = $this->mSubCategories->getSubCategory();
        $active = \menu('categories');

        $data   = [
            'parent' => $parent,
            'sub' => $sub,
            'active_menu'   => $active
        ];

		return view('furniture-admin/master/categories/list_category', $data);
	}

    public function delete_category(){
        $id_categories = base64_decode($this->request->getGet('id'));

        $this->mCategories->delete($id_categories);

        return redirect()->to('list_category');
    }

    public function save_category()
    {
        $id_categories = $this->request->getPost('id_categories');
        
        $parent_category = $this->request->getPost('parent_category');
        $sub_category = $this->request->getPost('sub_category');

        if (!empty($id_categories)) {
                $categories = [
                    'id_categories'   => $id_categories,
                    'parent_category'      => $parent_category,
                    'sub_category'      => $sub_category,
                ];
        }else{
                $categories = [
                    'parent_category'      => $parent_category,
                    'sub_category'      => $sub_category,
                ];
        }

        $this->mCategories->save($categories);

        return redirect()->to('list_category');
    }

    public function save_sub_category()
    {
        $id_categories = $this->request->getPost('id_categories');
        
        $id_parent = $this->request->getPost('id_parent');
        $sub_category = $this->request->getPost('sub_category');

        if (!empty($id_categories)) {
                $categories = [
                    'id'   => $id_categories,
                    'parent_category'      => $parent_category,
                    'sub_category'      => $sub_category,
                ];
        }else{
                $categories = [
                    'id_categories'      => $id_parent,
                    'sub_category'      => $sub_category,
                ];
        }

        $this->mSubCategories->save($categories);

        return redirect()->to('list_category');
    }
}