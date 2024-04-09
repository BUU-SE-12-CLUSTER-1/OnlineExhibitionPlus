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
        DB::statement("CREATE TABLE IF NOT EXISTS `oe_majors` (
            `major_id` INT NOT NULL AUTO_INCREMENT,
            `major_name` VARCHAR(100) NOT NULL,
            PRIMARY KEY (`major_id`))
          ENGINE = InnoDB;");
          DB::statement('INSERT INTO oe_majors (major_name) VALUES ("Software Engineering")');
          DB::statement('INSERT INTO oe_majors (major_name) VALUES ("Computer Science")');
          DB::statement('INSERT INTO oe_majors (major_name) VALUES ("Information Technology for Digital Industry")');
          DB::statement('INSERT INTO oe_majors (major_name) VALUES ("Applied Artificial Intelligence and Smart Technology")');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oe_majors');
    }
};
