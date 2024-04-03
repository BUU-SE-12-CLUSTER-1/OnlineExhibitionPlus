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
        DB::statement("CREATE TABLE IF NOT EXISTS `oe_projects` (
            `proj_id` INT NOT NULL AUTO_INCREMENT,
            `proj_name` VARCHAR(255) NOT NULL,
            `proj_main_image` VARCHAR(255) NOT NULL,
            `proj_created_year` VARCHAR(4) NOT NULL,
            `proj_student_year` VARCHAR(1) NOT NULL,
            `proj_company_id` INT NULL DEFAULT NULL,
            `proj_advisor_id` INT NOT NULL,
            `proj_status` TINYINT NOT NULL,
            `proj_view_quantity` INT NOT NULL,
            PRIMARY KEY (`proj_id`),
            INDEX `fk_projects_companies1_idx` (`proj_company_id` ASC) ,
            INDEX `fk_projects_advisors1_idx` (`proj_advisor_id` ASC) ,
            CONSTRAINT `fk_projects_companies1`
              FOREIGN KEY (`proj_company_id`)
              REFERENCES `oe_companies` (`company_id`)
              ON DELETE NO ACTION
              ON UPDATE NO ACTION,
            CONSTRAINT `fk_projects_advisors1`
              FOREIGN KEY (`proj_advisor_id`)
              REFERENCES `oe_advisors` (`advisor_id`)
              ON DELETE NO ACTION
              ON UPDATE NO ACTION)
          ENGINE = InnoDB;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oe_projects');
    }
};
