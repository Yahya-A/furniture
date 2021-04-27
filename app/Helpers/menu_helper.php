<?php

function menu($dashboard = '', $new_customer = '', $list_customer = '', $new_product = '', $list_product = '', $categories = '', $item_order = '', $showroom_order = ''){
        $active_menu = [
            'dashboard'     => $dashboard,
            'customer'       => [
                'new'   => $new_customer,
                'list'  => $list_customer
            ],
            'product'       => [
                'new'   => $new_product,
                'list'  => $list_product,
                'categories'    => $categories,
            ],
            'order'       => [
                'item_order'   => $item_order,
                'showroom_order'  => $showroom_order
            ],
        ];

        return $active_menu;
    }