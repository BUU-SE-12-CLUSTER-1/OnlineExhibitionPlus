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
        DB::statement("CREATE TABLE IF NOT EXISTS `oe_detail_images` (
            `di_id` INT NOT NULL AUTO_INCREMENT,
            `di_image` LONGBLOB NOT NULL,
            `di_detail_area_id` INT NOT NULL,
            PRIMARY KEY (`di_id`, `di_detail_area_id`),
            INDEX `fk_detail_images_detail_areas1_idx` (`di_detail_area_id` ASC) ,
            CONSTRAINT `fk_detail_images_detail_areas1`
              FOREIGN KEY (`di_detail_area_id`)
              REFERENCES `oe_detail_areas` (`da_id`)
              ON DELETE NO ACTION
              ON UPDATE NO ACTION)
          ENGINE = InnoDB;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oe_detail_images');
    }
};
