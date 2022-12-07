<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("code");
            $table->string("market_name")->nullable();
            $table->unsignedInteger("market_code")->nullable();

            $table->string('mhptu_start_at')->nullable();
            $table->string('mhptu_end_at')->nullable();
            $table->string("sale_type")->nullable();
            $table->string("sale_kind")->nullable();
            $table->string("tu_type")->nullable();
            $table->string("tu_ownership")->nullable();
            $table->string("tu_status")->nullable();
            $table->string("tu_no")->nullable();
            $table->decimal("tu_area")->nullable();
            $table->string("siho_name")->nullable();
            $table->string("siho_birthplace")->nullable();
            $table->string("siho_birthday")->nullable();
            $table->string("siho_address")->nullable();
            $table->string("siho_city")->nullable();
            $table->string("siho_distric")->nullable();
            $table->string("siho_sub_distric")->nullable();
            $table->string("siho_ktp_no")->nullable();
            $table->string("siho_tlp")->nullable();

            $table->string("siptu_no")->nullable();
            $table->string("siptu_start_at")->nullable();
            $table->string("siptu_end_at")->nullable();
            $table->string("siptu_issue_at")->nullable();

            $table->string("shptu_no")->nullable();
            $table->string("shptu_start_at")->nullable();


            $table->string("merchant_name")->nullable();
            $table->string("merchant_tlp")->nullable();

            $table->longText('note')->nullable();


            $table->unsignedTinyInteger("status")->default(null)->nullable();
            $table->date("due_date")->default(null)->nullable();
            $table->unsignedBigInteger('dp')->nullable();
            $table->foreignId('customer_id')->default(null)->nullable()->constrained('customers');
            $table->foreignId('user_id')->default(null)->nullable()->constrained('users');
            $table->foreignId('price_list_id')->default(null)->nullable()->constrained('price_lists');


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
        Schema::dropIfExists('products');
    }
}
