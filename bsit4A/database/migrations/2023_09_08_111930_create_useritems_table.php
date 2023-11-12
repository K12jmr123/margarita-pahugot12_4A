<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('useritems', function (Blueprint $table) {
            $table->increments("id");
            $table->string("product_name");
            $table->string("product_description");
            $table->decimal("product_price")->default(0.0);
            $table->integer("product_quantity");
            $table->string("product_status");
            $table->integer("product_flag")->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('useritems');
    }
};
