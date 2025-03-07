
    <?php

    namespace App\Http\Controllers;

    use App\Models\Hotel;
    use Illuminate\Http\Request;

    class HotelController extends Controller {
        public function index() {
            return response()->json(Hotel::with('rooms')->get());
        }

        public function show($id) {
            return response()->json(Hotel::with('rooms')->findOrFail($id));
        }
    }
    