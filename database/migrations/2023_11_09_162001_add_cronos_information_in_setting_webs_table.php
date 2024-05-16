<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCronosInformationInSettingWebsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('setting_webs', function (Blueprint $table) {
            $table->text('cronos_key')->nullable()->after('tripay_private_key');
            $table->text('cronos_token')->nullable()->after('cronos_key');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('setting_webs', function (Blueprint $table) {
            $table->dropColumn('cronos_key');
            $table->dropColumn('cronos_token');
        });
    }
}
