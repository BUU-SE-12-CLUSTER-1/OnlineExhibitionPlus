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
        DB::statement("CREATE TABLE IF NOT EXISTS `oe_advisors` (
            `advisor_id` INT NOT NULL AUTO_INCREMENT,
            `advisor_fname` VARCHAR(25) NOT NULL,
            `advisor_lname` VARCHAR(25) NOT NULL,
            PRIMARY KEY (`advisor_id`, `advisor_fname`, `advisor_lname`))
          ENGINE = InnoDB;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oe_advisors');
    }
};
