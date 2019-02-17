<?php

namespace App\Repositories;

use App\Category;

class CategoryRepository extends BaseRepository
{
    /**
     * Create a new CategoryRepository instance.
     *
     * @param \App\Models\Category $category
     */
    public function __construct(Category $category)
    {
        $this->model = $category;
    }
}