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
        DB::statement("CREATE TABLE IF NOT EXISTS `oe_user_liked_project` (
            `ulp_id` INT NOT NULL AUTO_INCREMENT,
            `ulp_proj_id` INT NOT NULL,
            `ulp_user_id` INT NOT NULL,
            PRIMARY KEY (`ulp_id`),
            INDEX `fk_users_has_project_project1_idx` (`ulp_proj_id` ASC) ,
            INDEX `fk_users_has_project_users1_idx` (`ulp_user_id` ASC) ,
            CONSTRAINT `fk_users_has_project_users10`
              FOREIGN KEY (`ulp_user_id`)
              REFERENCES `oe_users` (`user_id`)
              ON DELETE NO ACTION
              ON UPDATE NO ACTION,
            CONSTRAINT `fk_users_has_project_project10`
              FOREIGN KEY (`ulp_proj_id`)
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
        Schema::dropIfExists('oe_user_liked_project');
    }
};
