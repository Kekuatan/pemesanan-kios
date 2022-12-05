<?php

use App\Enums\PriceListEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_lists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fix_price')->default(0);
            $table->decimal('area')->default(0);
            $table->unsignedBigInteger('ppn')->default(0);
            $table->unsignedBigInteger('discount')->default(0)->nullable();
            $table->unsignedBigInteger('dp')->default(0);
            $table->unsignedBigInteger('booking_fee')->default(0);
            $table->unsignedBigInteger('price')->default(0);
            $table->foreignId('payment_method_id')->constrained('payment_methods');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('price_lists');
    }
}
