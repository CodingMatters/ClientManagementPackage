<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

final class CreateClientsTable extends Migration
{
    public function up() : void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->uuid('code')->primary();
        });
    }

    public function down() : void
    {
        Schema::dropIfExists('clients');
    }
}