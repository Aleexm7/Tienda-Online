<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTriggerForCreatingCart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
            CREATE TRIGGER create_cart_after_user_creation
            AFTER INSERT ON users
            FOR EACH ROW
            BEGIN
                INSERT INTO carts (user_id, created_at, updated_at) VALUES (NEW.id, NOW(), NOW());
            END;
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER IF EXISTS create_cart_after_user_creation');
    }
}
