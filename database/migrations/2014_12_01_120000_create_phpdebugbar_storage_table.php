<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
indent_style = space
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('phpdebugbar', function (Blueprint $table) {
                $table->string('id');
                $table->longText('data');
                $table->string('meta_utime');
                $table->dateTime('meta_datetime');
                $table->string('meta_uri');
                $table->string('meta_ip');
                $table->string('meta_method');

                $table->primary('id');
                $table->index('meta_utime');
                $table->index('meta_datetime');
                $table->index('meta_uri');
                $table->index('meta_ip');
                $table->index('meta_method');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('phpdebugbar');
    }
};
