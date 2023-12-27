use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
    
            return redirect()->route('home');
        } else {
            // Jika gagal login
            return redirect()->route('login')->with('error', 'Username atau password salah');
        }
    }
}