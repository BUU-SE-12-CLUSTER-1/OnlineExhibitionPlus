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
        DB::statement('CREATE TABLE IF NOT EXISTS `oe_detail_areas` (
            `da_id` INT NOT NULL AUTO_INCREMENT,
            `da_data` VARCHAR(510) NOT NULL,
            `da_item_index` INT NOT NULL,
            `da_template_index` INT NOT NULL,
            `da_data_type` ENUM("I", "T") NOT NULL,
            `da_template_id` INT NOT NULL,
            `da_proj_id` INT NOT NULL,
            PRIMARY KEY (`da_id`),
            INDEX `fk_details_area_area_template1_idx` (`da_template_id` ASC) ,
            INDEX `fk_details_area_projects1_idx` (`da_proj_id` ASC) ,
            CONSTRAINT `fk_details_area_area_template1`
              FOREIGN KEY (`da_template_id`)
              REFERENCES `oe_area_templates` (`at_id`)
              ON DELETE NO ACTION
              ON UPDATE NO ACTION,
            CONSTRAINT `fk_details_area_projects1`
              FOREIGN KEY (`da_proj_id`)
              REFERENCES `oe_projects` (`proj_id`)
              ON DELETE NO ACTION
              ON UPDATE NO ACTION)
          ENGINE = InnoDB;
          ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oe_detail_areas');
    }
};
