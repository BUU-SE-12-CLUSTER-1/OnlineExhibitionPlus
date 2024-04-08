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
            DB::statement("CREATE TABLE IF NOT EXISTS `oe_users` (
                `user_id` INT NOT NULL AUTO_INCREMENT,
                `user_student_id` VARCHAR(8) NULL,
                `user_fname` VARCHAR(25) NOT NULL,
                `user_lname` VARCHAR(25) NOT NULL,
                `user_email` VARCHAR(55) NOT NULL,
                `user_password` VARCHAR(60) NULL,
                `user_phone` VARCHAR(10) NULL,
                `user_profile_image` VARCHAR(255) NOT NULL,
                `user_role_id` INT NOT NULL,
                `user_major_id` INT NOT NULL,
                `user_status` TINYINT NOT NULL
                PRIMARY KEY (`user_id`),
                INDEX `fk_users_roles1_idx` (`user_role_id` ASC) ,
                INDEX `fk_users_majors1_idx` (`user_major_id` ASC) ,
                UNIQUE INDEX `user_student_id_UNIQUE` (`user_student_id` ASC) ,
                UNIQUE INDEX `user_email_UNIQUE` (`user_email` ASC) ,
                CONSTRAINT `fk_users_roles1`
                  FOREIGN KEY (`user_role_id`)
                  REFERENCES `oe_roles` (`role_id`)
                  ON DELETE NO ACTION
                  ON UPDATE NO ACTION,
                CONSTRAINT `fk_users_majors1`
                  FOREIGN KEY (`user_major_id`)
                  REFERENCES `oe_majors` (`major_id`)
                  ON DELETE NO ACTION
                  ON UPDATE NO ACTION)
              ENGINE = InnoDB;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oe_users');
    }
};
