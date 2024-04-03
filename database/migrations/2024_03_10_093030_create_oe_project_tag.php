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
        DB::statement("CREATE TABLE IF NOT EXISTS `oe_project_tag` (
            `projtag_id` INT NOT NULL AUTO_INCREMENT,
            `projtag_proj_id` INT NOT NULL,
            `projtag_tag_id` INT NOT NULL,
            PRIMARY KEY (`projtag_id`),
            INDEX `fk_tags_has_projects_projects1_idx` (`projtag_proj_id` ASC) ,
            INDEX `fk_tags_has_projects_tags1_idx` (`projtag_tag_id` ASC) ,
            CONSTRAINT `fk_tags_has_projects_tags1`
              FOREIGN KEY (`projtag_tag_id`)
              REFERENCES `oe_tags` (`tag_id`)
              ON DELETE NO ACTION
              ON UPDATE NO ACTION,
            CONSTRAINT `fk_tags_has_projects_projects1`
              FOREIGN KEY (`projtag_proj_id`)
              REFERENCES `oe_projects` (`proj_id`)
              ON DELETE NO ACTION
              ON UPDATE NO ACTION)
          ENGINE = InnoDB;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oe_project_tag');
    }
};
