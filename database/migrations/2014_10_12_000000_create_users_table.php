<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->unsignedBigInteger('age')->nullable();
            $table->string('mobile_number')->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->text('profile_photo')->nullable();
            $table->string('institute')->nullable()->comment(' 1 = K.P.M High School & College 2 = K.R.C High School 2 = Karnaphuli Sheshu Beddaloy 4 = Karnaphuli College 5 = Chittagong University');
            $table->string('department')->nullable();
            $table->string('batch')->nullable();
            $table->unsignedBigInteger('passing_year')->nullable();
            $table->string('designation')->nullable();
            $table->string('country_id')->nullable();
            $table->string('city_id')->nullable();
            $table->string('present_address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('chandraghona_living_area')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
