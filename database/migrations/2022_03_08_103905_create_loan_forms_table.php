<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_forms', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('father');
            $table->string('mother');
            $table->string('loan');

            
            $table->integer('education');
            $table->string('province');
            $table->integer('dob');          
            $table->integer('age');
            $table->string('language');  
            $table->integer('phone');
            $table->integer('telephone');
            $table->string('email')->unique();
            $table->string('city');
            $table->string('temaddress');
            $table->string('peraddress');
            $table->integer('zipcode');
            $table->string('objective');
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
        Schema::dropIfExists('loan_forms');
    }
}
