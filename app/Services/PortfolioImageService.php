<?php 
namespace App\Services;

use App\Models\Category;

class PortfolioImageService
{
    public function getImageCategoryById($category_id)
    {
        return Category::findOrFail($category_id);
    }
}