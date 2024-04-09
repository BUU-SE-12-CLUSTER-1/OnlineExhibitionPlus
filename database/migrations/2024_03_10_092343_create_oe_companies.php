<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("CREATE TABLE IF NOT EXISTS `oe_companies` (
            `company_id` INT NOT NULL AUTO_INCREMENT,
            `company_name` VARCHAR(100) NOT NULL,
            PRIMARY KEY (`company_id`))
          ENGINE = InnoDB;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oe_companies');
    }
};
