```php
class UserController extends Controller
{
    public $api;
    public function __construct(ApiInterface $api) {
        $this->api = $api;
    }
    public function index(ApiInterface $api) {
        $users = User::paginate();
        return $this->api->ok('User Created successfully.', $users);
    }

```