<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExportDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('export_details', function (Blueprint $table) {
            $table->id();
            $table->string('company_id');
            $table->date('shipment_date');
            $table->string('reg_no');
            $table->string('ctr_no');
            $table->string('tea_grade');
            $table->string('ship_qty_kg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('export_details');
    }
}
