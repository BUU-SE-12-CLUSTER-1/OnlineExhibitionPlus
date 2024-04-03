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
        DB::statement("CREATE TABLE IF NOT EXISTS `oe_comments` (
            `comment_id` INT NOT NULL AUTO_INCREMENT,
            `comment_text` TEXT NOT NULL,
            `comment_proj_id` INT NOT NULL,
            `comment_user_id` INT NOT NULL,
            PRIMARY KEY (`comment_id`),
            INDEX `fk_comments_projects1_idx` (`comment_proj_id` ASC) ,
            INDEX `fk_comments_users1_idx` (`comment_user_id` ASC) ,
            CONSTRAINT `fk_comments_projects1`
              FOREIGN KEY (`comment_proj_id`)
              REFERENCES `oe_projects` (`proj_id`)
              ON DELETE NO ACTION
              ON UPDATE NO ACTION,
            CONSTRAINT `fk_comments_users1`
              FOREIGN KEY (`comment_user_id`)
              REFERENCES `oe_users` (`user_id`)
              ON DELETE NO ACTION
              ON UPDATE NO ACTION)
          ENGINE = InnoDB;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oe_comments');
    }
};
