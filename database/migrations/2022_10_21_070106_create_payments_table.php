<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->date('kwitansi_date')->nullable();
            $table->foreignId('product_id')->default(null)->nullable()->constrained('products');
            $table->date('payment_date')->nullable();
            $table->boolean('verify')->default(0);
            $table->text('note')->nullable();
            $table->foreignUUId('user_id')->default(null)->nullable()->constrained('users');
            $table->unsignedBigInteger('amount');
            $table->string('transaction_id')->nullable();
            $table->foreignId('payment_provider_id')->default(null)->nullable()->constrained('payment_providers');
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
        Schema::dropIfExists('payments');
    }
}
