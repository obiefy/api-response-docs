```php
<?php
namespace App\Http\Controllers;
use App\Product;

class ProductApiController extends Controller
{
    public function index() {
        $products = Product::paginage();
        return API::success('Products List', $products);
    }
}
```