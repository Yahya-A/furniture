<?php

namespace App\Controllers;

use App\Models\ModelProduct;
use App\Models\ModelCategories;
use App\Models\ModelSubCategories;

class Product extends BaseController
{

    protected $mProduct;
    protected $mCategories;
    protected $mSubCategories;

    public function __construct()
    {
        $this->mProduct = new ModelProduct();
        $this->mCategories = new ModelCategories();
        $this->mSubCategories = new ModelSubCategories();
    }

	public function categories()
	{
        $id_categories = \base64_decode($this->request->getGet('q'));
        $product = $this->mProduct->getProductBy($id_categories);
        $active = \menu('categories');

        $data = [
            'product'=> $product,
            'active_menu'   => $active
        ];
		return view('furniture-admin/master/product/list_product_categories', $data);
	}

	public function new_product()
	{
        $parent = $this->mCategories->getCategory();
        $sub = $this->mSubCategories->getSubCategory();
        $active = \menu('product_new');

        $data = [
            'parent'=> $parent,
            'sub'=> $sub,
            'active_menu'   => $active
        ];
		return view('furniture-admin/master/product/add_product', $data);
	}

	public function list_product()
	{
        $product = $this->mProduct->getProduct();
        $active = \menu('product_list');

        $data   = [
            'product'       => $product,
            'active_menu'   => $active
        ];

		return view('furniture-admin/master/product/list_product', $data);
	}

	public function update_product()
	{
        $id_prod = \base64_decode($this->request->getGet('id'));
        $active = \menu('product_list');

        $product = $this->mProduct->getProduct($id_prod);
        $data   = [
            'product' => $product,
            'active_menu'   => $active
        ];
        // \dd($data);
		return view('furniture-admin/master/product/update_product', $data);
	}

    public function delete_product(){
        $id_product = base64_decode($this->request->getGet('id'));

        $this->mProduct->delete($id_product);

        return redirect()->to('list_product');
    }

    public function save_product()
    {
        $id_prod = $this->request->getPost('id_prod');
        
        $product_name = $this->request->getPost('product_name');
        $measurment = $this->request->getPost('measurment');
        $weight = $this->request->getPost('weight');
        $width = $this->request->getPost('width');
        $depth = $this->request->getPost('depth');
        $height = $this->request->getPost('height');
        $supplier = $this->request->getPost('supplier');
        $categories = $this->request->getPost('categories');
        $price = $this->request->getPost('price');
        $stock = $this->request->getPost('stock');
        $spesification = $this->request->getPost('spesification');
        $product_picture = $this->request->getFile('product_picture');

        if ($product_picture->getError() == 4) {
            $file_name = 'default.png';
        } else {
            $file_name = $product_picture->getRandomName();
            $product_picture->move('assets/img/product/', $file_name);
        }

        if (!empty($id_prod)) {
                $product = [
                    'id_prod'   => $id_prod,
                    'name'      => $product_name,
                    'item_code'      => 1,
                    'id_categories'      => 1,
                    'weight'      => $weight,
                    'width'      => $width,
                    'depth'      => $depth,
                    'height'      => $height,
                    'spesififcatoin'      => $spesification,
                    'supplier'      => $supplier,
                    'price'      => $price,
                    'measurment'      => $measurment,
                    'stock'      => $stock,
                    'picture'      => $file_name,
                ];
        }else{
                $product = [
                'name'        => $product_name,
                'item_code'      => 1,
                'id_categories'      => 1,
                'weight'      => $weight,
                'width'      => $width,
                'depth'      => $depth,
                'height'      => $height,
                'spesififcatoin'      => $spesification,
                'supplier'      => $supplier,
                'price'      => $price,
                'measurment'      => $measurment,
                'stock'      => $stock,
                'picture'      => $file_name,
            ];
        }

        $this->mProduct->save($product);

        return redirect()->to('list_product');
    }


    public function findProduct(){
        $key = $this->request->getPost('key');
        $product = $this->mProduct->getProductBy($key, 'name');

        $data = [
            'product'   => $product,
        ];

        return $this->response->setJSON($data);
    }

    public function getProduct(){
        $key = $this->request->getPost('key');
        $product = $this->mProduct->getProduct($key);

        $data = [
            'product'   => $product,
        ];

        return $this->response->setJSON($data);
    }
}