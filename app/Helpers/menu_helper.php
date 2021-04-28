<?php

function menu($for){


        $active_menu = [
            'dashboard'     => ($for == 'dashboard' ? 'active' : ''),
            'customer'       => [
                'new'   => ($for == 'customer_new' ? 'active' : ''),
                'list'  => ($for == 'customer_list' ? 'active' : ''),
                'price'  => ($for == 'price' ? 'active' : ''),
            ],
            'product'       => [
                'new'   => ($for == 'product_new' ? 'active' : ''),
                'list'  => ($for == 'product_list' ? 'active' : ''),
                'categories'    => ($for == 'categories' ? 'active' : ''),
            ],
            'order'       => [
                'item_order'   => ($for == 'item_order' ? 'active' : ''),
                'showroom_order'  => ($for == 'showroom' ? 'active' : '')
            ],
        ];

        return $active_menu;
    }