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
        DB::statement("CREATE TABLE IF NOT EXISTS `oe_roles` (
            `role_id` INT NOT NULL AUTO_INCREMENT,
            `role_name` VARCHAR(20) NOT NULL,
            PRIMARY KEY (`role_id`))
          ENGINE = InnoDB;
          ");
        DB::statement('INSERT INTO oe_roles (role_name) VALUES ("guest");');
        DB::statement('INSERT INTO oe_roles (role_name) VALUES ("student");');
        DB::statement('INSERT INTO oe_roles (role_name) VALUES ("admin");');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oe_roles');
    }
};
