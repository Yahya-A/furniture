<?php

namespace App\Controllers;

use App\Models\ModelProduct;

class Product extends BaseController
{

    protected $mProduct;

    public function __construct()
    {
        $this->mProduct = new ModelProduct();
    }

	public function new_product()
	{
		return view('furniture-admin/master/product/add_product');
	}

	public function list_product()
	{
        $product = $this->mProduct->getProduct();

        $data   = [
            'product' => $product
        ];

		return view('furniture-admin/master/product/list_product', $data);
	}

	public function update_product()
	{
        $id_prod = \base64_decode($this->request->getGet('id'));

        $product = $this->mProduct->getProduct($id_prod);
        $data   = [
            'product' => $product
        ];
        // \dd($data);
		return view('furniture-admin/master/product/update_product', $data);
	}

    public function save_product()
    {
        $id_prod = $this->request->getPost('id_prod');
        
        $product_name = $this->request->getPost('product_name');
        $measurment = $this->request->getPost('measurment');
        $width = $this->request->getPost('width');
        $depth = $this->request->getPost('depth');
        $height = $this->request->getPost('height');
        $supplier = $this->request->getPost('supplier');
        $categories = $this->request->getPost('categories');
        $price = $this->request->getPost('price');
        $stock = $this->request->getPost('stock');
        $spesification = $this->request->getPost('spesification');
        $product_picture = $this->request->getFile('product_picture');

        if (!empty($id_prod)) {
                $product = [
                    'id_prod'   => $id_prod,
                    'name'      => $product_name,
                    'item_code'      => 1,
                    'id_categories'      => 1,
                    'width'      => $width,
                    'depth'      => $depth,
                    'height'      => $height,
                    'spesififcatoin'      => $spesification,
                    'supplier'      => $supplier,
                    'price'      => $price,
                    'stock'      => $stock,
                    'picture'      => $product_picture->getName(),
                ];
        }else{
                $product = [
                'name'      => $product_name,
                'item_code'      => 1,
                'id_categories'      => 1,
                'width'      => $width,
                'depth'      => $depth,
                'height'      => $height,
                'spesififcatoin'      => $spesification,
                'supplier'      => $supplier,
                'price'      => $price,
                'stock'      => $stock,
                'picture'      => $product_picture->getName(),
            ];
        }

        $this->mProduct->save($product);

        return redirect()->to('list_product');
    }

    // public function save_update()
    // {
    //     // \dd($this->request->getVar());

    //     $id_prod = $this->request->getPost('id_prod');
    //     $product_name = $this->request->getPost('product_name');
    //     $measurment = $this->request->getPost('measurment');
    //     $width = $this->request->getPost('width');
    //     $depth = $this->request->getPost('depth');
    //     $height = $this->request->getPost('height');
    //     $supplier = $this->request->getPost('supplier');
    //     $categories = $this->request->getPost('categories');
    //     $price = $this->request->getPost('price');
    //     $stock = $this->request->getPost('stock');
    //     $spesification = $this->request->getPost('spesification');
    //     $product_picture = $this->request->getFile('product_picture');

    //     $product = [
    //         'name'      => $product_name,
    //         'item_code'      => 1,
    //         'id_categories'      => 1,
    //         'width'      => $width,
    //         'depth'      => $depth,
    //         'height'      => $height,
    //         'spesififcatoin'      => $spesification,
    //         'supplier'      => $supplier,
    //         'price'      => $price,
    //         'stock'      => $stock,
    //         'picture'      => $product_picture->getName(),
            
    //     ];
        
    //     $this->mProduct->save($product);

    //     return redirect()->to('product/new_product');
    // }
}