<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('school_name');
            $table->string('salogan');
            $table->string('address');
            $table->string('email','100')->nullable();
            $table->string('website')->nullable();
            $table->text('reg_no')->nullable();
            $table->string('country','100');
            $table->string('state', '100');
            $table->string('city', '100');
            $table->char('zip_code', '7');
            $table->string('mobile')->nullable();
            $table->string('alternate_number')->nullable();
            $table->integer('currency_id')->unsigned();
            $table->foreign('currency_id')->references('id')->on('currencies');

            $table->date('start_date')->nullable();
            $table->unsignedBigInteger('owner_id')->unsigned();
            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('time_zone')->default('Asia/Karachi');
            $table->char('theme_color', 20)->nullable();
            $table->tinyInteger('session_start_month')->default(1);
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->boolean('enable_tooltip')->default(1);
            $table->integer('transaction_edit_days')->unsigned()->default(30);
            $table->text('keyboard_shortcuts')->nullable();
            $table->enum('currency_symbol_placement', ['before', 'after'])->default('before');
            $table->text('ref_no_prefixes')->nullable();
            // $table->text('pos_settings')->after('keyboard_shortcuts')->nullable();
            $table->string('date_format')->default('m/d/Y');
            $table->enum('time_format', [12, 24])->default(24);
            $table->text('email_settings')->nullable();
            $table->text('sms_settings')->nullable();
            
            

            $table->string('facebook', '100')->nullable();
            $table->string('twitter', '100')->nullable();
            $table->string('linkedIn', '100')->nullable();
            $table->string('youtube', '100')->nullable();
            $table->string('googlePlus', '100')->nullable();
            $table->string('instagram', '100')->nullable();
            $table->string('whatsApp', '100')->nullable();
            $table->string('skype', '100')->nullable();
            $table->string('pinterest', '100')->nullable();
            $table->string('wordpress', '100')->nullable();
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
        Schema::dropIfExists('general_settings');

    }
}
