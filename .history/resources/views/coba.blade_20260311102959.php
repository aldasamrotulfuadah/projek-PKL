use Illuminate\Support\Facades\Hash;

$passwordInput = '12345678';
$passwordDatabase = $user->password;

if (Hash::check($passwordInput, $passwordDatabase)) {
    echo "Password cocok";
} else {
    echo "Password salah";
}