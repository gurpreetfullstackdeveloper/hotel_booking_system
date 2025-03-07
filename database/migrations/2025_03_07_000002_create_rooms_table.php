
    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateRoomsTable extends Migration {
        public function up() {
            Schema::create('rooms', function (Blueprint $table) {
                $table->id();
                $table->foreignId('hotel_id')->constrained()->onDelete('cascade');
                $table->string('room_number');
                $table->integer('capacity');
                $table->decimal('price', 8, 2);
                $table->boolean('is_available')->default(true);
                $table->timestamps();
            });
        }
        public function down() {
            Schema::dropIfExists('rooms');
        }
    }
    