<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('account_from');
            $table->integer('account_to');
            $table->string('status', 255)->default('pending');
            $table->dateTime('sent_date')->default(now());
            $table->dateTime('received_date')->nullable();
            $table->integer('action_by')->nullable();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
