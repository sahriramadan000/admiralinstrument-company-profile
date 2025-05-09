<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Project;
use App\Models\Service;
use App\Models\StockMovementItem;
use Illuminate\Http\JsonResponse;
use Carbon\Carbon;

class DahsboardController extends Controller
{
    public function index()
    {
        $data = [
            'page_title'       => 'Dashboard',
            'service_count'    => Service::count(),
            'project_count'    => Project::count(),
            'product_count'    => Product::count(),
            'category_count'   => ProductCategory::count(),
        ];

        return view('cms.dashboard.index', $data);
    }
}
