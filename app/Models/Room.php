
    <?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Room extends Model {
        use HasFactory;
        protected $fillable = ['hotel_id', 'room_number', 'capacity', 'price', 'is_available'];

        public function hotel() {
            return $this->belongsTo(Hotel::class);
        }
    }
    