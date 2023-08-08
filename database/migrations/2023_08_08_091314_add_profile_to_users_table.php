<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfileToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('contact_number')->nullable()->after('email');
            $table->string('education')->nullable()->after('contact_number');
            $table->string('city')->nullable()->after('education');
            $table->string('province')->nullable()->after('city');
            $table->string('address')->nullable()->after('province');
            $table->string('instagram')->nullable()->after('address');
            $table->string('twitter')->nullable()->after('instagram');
            $table->string('linkedin')->nullable()->after('twitter');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['contact_number', 'education', 'city', 'province', 'address', 'instagram', 'twitter', 'linkedin']);
        });
    }
}
