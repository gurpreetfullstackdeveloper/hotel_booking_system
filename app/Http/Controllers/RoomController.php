
    <?php

    namespace App\Http\Controllers;

    use App\Models\Room;
    use Illuminate\Http\Request;

    class RoomController extends Controller {
        public function index() {
            return response()->json(Room::where('is_available', true)->get());
        }

        public function show($id) {
            return response()->json(Room::findOrFail($id));
        }
    }
    