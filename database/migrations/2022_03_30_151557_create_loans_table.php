<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->double('loan_amount');
            $table->double('tenure_duration');
            $table->enum('tenure_type', ['daily', 'monthly']);
            $table->enum('loan_state', ['active', 'overdue', 'pending','declined','approved','repaid']);
            $table->string('due_date');
            $table->string('collateral_1')->nullable();
            $table->string('collateral_2')->nullable();
            $table->string('collateral_receipt')->nullable();
            $table->string('interest');
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
        Schema::dropIfExists('loans');
    }
}
