<?php

function menu($dashboard = '', $new_customer = '', $list_customer = '', $new_product = '', $list_product = '', $categories = ''){
        $active_menu = [
            'dashboard'     => $dashboard,
            'customer'       => [
                'new'   => $new_customer,
                'list'  => $list_customer
            ],
            'product'       => [
                'new'   => $new_product,
                'list'  => $list_product
            ],
            'categories'    => $categories
        ];

        return $active_menu;
    }