<?php

namespace App\Repositories;
use App\Models\ProductCategory;


class ProductCategoryRepo{
    /**
     * Get all Districts
     *
     * @param
     * @return
     */
    public static function get()
    {
        $categories = ProductCategory::all();

        return $categories;
    }

    public static function onlyActive(){
        $categories = ProductCategory::where('active',1)->get();

        return $categories;
    }
}