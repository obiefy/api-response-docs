```php
public function index() {
    $products = Product::paginage();
    return ok('Products List', $products);
    // OR
    return success('Products List', $products);
}

```