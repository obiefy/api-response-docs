```php
// App\Providers\AppServiceProvider
public function boot() {
    ApiResponse::macro('created', function($message, $data){
        return $this->response(201, $message, $data);
    });
}
```
