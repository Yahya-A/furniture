<?php

namespace App\Controllers;

use App\Models\ModelCategories;

class Categories extends BaseController
{

    protected $mCategories;

    public function __construct()
    {
        $this->mCategories = new ModelCategories();
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
        $category = $this->mCategories->getCategory();
        $active = \menu('categories');

        $data   = [
            'category' => $category,
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
        
        $category_name = $this->request->getPost('category_name');

        if (!empty($id_categories)) {
                $categories = [
                    'id_categories'   => $id_categories,
                    'category_name'      => $category_name,
                ];
        }else{
                $categories = [
                    'category_name'      => $category_name,
                ];
        }

        $this->mCategories->save($categories);

        return redirect()->to('list_category');
    }
}