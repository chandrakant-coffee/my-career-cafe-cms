<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->text('banner_section');
            $table->text('career_development_section');
            $table->text('charge_process_section');
            $table->text('career_development_program_section');
            $table->text('benefits_section');
            $table->text('insights_and_tips_section');
            $table->string('page_title', 250)->nullable();
            $table->string('meta_title', 250)->nullable();
            $table->string('meta_desc', 250)->nullable();
            $table->string('meta_keyword', 250)->nullable();
            $table->string('url_schema', 250)->nullable();
            $table->string('canonical_tag', 250)->nullable();
            $table->string('canonical_rel', 250)->nullable();
            $table->tinyInteger('is_deleted')->default(0);
            $table->timestamps();
        });


       Schema::create('assessment', function (Blueprint $table) {
            $table->id();
            $table->text('banner_section')->nullable();
            $table->text('skill_assessment')->nullable();
            $table->text('section_three')->nullable();
            $table->text('section_four')->nullable();
            $table->text('benefits_section')->nullable();
            $table->text('insights_and_tips_section')->nullable();
            $table->string('page_title', 250)->nullable();
            $table->string('meta_title', 250)->nullable();
            $table->string('meta_desc', 250)->nullable();
            $table->string('meta_keyword', 250)->nullable();
            $table->string('url_schema', 250)->nullable();
            $table->string('canonical_tag', 250)->nullable();
            $table->string('canonical_rel', 250)->nullable();
            $table->tinyInteger('is_deleted')->default(0);
            $table->timestamps();
        });


        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->integer('categoryID')->default(0);
            $table->string('featureImg', 250)->nullable();
            $table->string('image_alt', 100)->nullable();
            $table->string('name', 100)->nullable();
            $table->string('slug', 300)->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('is_deleted')->default(0);
            $table->timestamps();
        });


        Schema::create('blog_category', function (Blueprint $table) {
            $table->id();
            $table->string('catTitle', 250)->nullable();
            $table->string('slug', 300)->nullable();
            $table->tinyInteger('is_deleted')->default(0);
            $table->timestamps();
        });


        Schema::create('certification', function (Blueprint $table) {
            $table->id();
            $table->text('banner_section');
            $table->text('content_section');
            $table->text('immersive_learning_section');
            $table->string('page_title', 250)->nullable();
            $table->string('meta_title', 250)->nullable();
            $table->string('meta_desc', 250)->nullable();
            $table->string('meta_keyword', 250)->nullable();
            $table->string('url_schema', 250)->nullable();
            $table->string('canonical_tag', 250)->nullable();
            $table->string('canonical_rel', 250)->nullable();
            $table->tinyInteger('is_deleted')->default(0);
            $table->timestamps();
        });

        Schema::create('enrolldata', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('email', 255);
            $table->string('mobile', 255);
            $table->text('degree');
            $table->text('year_of_completion');
            $table->text('program');
            $table->integer('is_deleted')->default(0);
            $table->timestamps();
        });


        Schema::create('footer', function (Blueprint $table) {
            $table->id();
            $table->text('logo');
            $table->text('description');
            $table->text('menus');
            $table->text('social_menus');
            $table->string('phone_no', 255);
            $table->string('email', 255);
            $table->text('copyright');
            $table->tinyInteger('is_deleted')->default(0);
            $table->timestamps();
        });


        Schema::create('header', function (Blueprint $table) {
            $table->id();
            $table->text('logo');
            $table->text('menus');
            $table->tinyInteger('is_deleted')->default(0);
            $table->timestamps();
        });

        Schema::create('home', function (Blueprint $table) {
            $table->id();
            $table->string('sec1Title', 100)->nullable();
            $table->string('sec1SubTitle', 100)->nullable();
            $table->string('sec1Desc', 500)->nullable();
            $table->string('sec1Link', 150)->nullable();
            $table->string('sec1LinkTxt', 100)->nullable();
            $table->string('sec1Image', 250)->nullable();
            $table->string('sec1ImgAlt', 100)->nullable();
            $table->string('sec2Title', 100)->nullable();
            $table->string('sec2Desc', 500)->nullable();
            $table->string('sec2Link', 100)->nullable();
            $table->string('sec2LinkTxt', 100)->nullable();
            $table->string('sec2Image', 250)->nullable();
            $table->string('sec2ImageAlt', 100)->nullable();
            $table->string('sec3Title', 100)->nullable();
            $table->string('sec3Link', 250)->nullable();
            $table->string('sec3LinkTxt', 100)->nullable();
            $table->text('sec3AddMore')->nullable();
            $table->string('sec4Title', 250)->nullable();
            $table->string('sec4Desc', 500)->nullable();
            $table->string('sec4Link', 150)->nullable();
            $table->string('sec4LinkTxt', 100)->nullable();
            $table->string('sec4Image', 250)->nullable();
            $table->string('sec4ImageAlt', 100)->nullable();
            $table->string('sec5Image', 250)->nullable();
            $table->string('sec5ImageAlt', 100)->nullable();
            $table->string('sec5Title', 100)->nullable();
            $table->text('sec5AddMore')->nullable();
            $table->string('sec6Title', 100)->nullable();
            $table->string('sec6image', 250)->nullable();
            $table->string('sec6imageAlt', 100)->nullable();
            $table->string('sec6Link', 150)->nullable();
            $table->string('sec6LinkText', 100)->nullable();
            $table->string('sec8Title', 100)->nullable();
            $table->string('sec8Desc', 500)->nullable();
            $table->string('sec8LInk', 150)->nullable();
            $table->string('sec8LInkTxt', 100)->nullable();
            $table->string('sec8Image', 250)->nullable();
            $table->string('sec8ImgAlt', 100)->nullable();
            $table->string('sec9Title', 100)->nullable();
            $table->text('sec10AddMore')->nullable();
            $table->text('insights_and_tips_section')->nullable();
            $table->timestamps();
            $table->tinyInteger('is_deleted')->default(0);
            $table->string('page_title', 100)->nullable();
            $table->string('meta_title', 250)->nullable();
            $table->string('meta_desc', 500)->nullable();
            $table->string('meta_keyword', 250)->nullable();
            $table->string('url_schema', 255)->nullable();
            $table->string('canonical_tag', 250)->nullable();
            $table->string('canonical_rel', 250)->nullable();
        });

        Schema::create('insights_and_tips', function (Blueprint $table) {
            $table->id();
            $table->text('image');
            $table->text('category');
            $table->text('summary');
            $table->integer('is_deleted')->default(0);
            $table->timestamps();
        });


        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->text('banner_section');
            $table->text('section_two')->nullable();
            $table->text('section_three')->nullable();
            $table->text('last_section')->nullable();
            $table->string('page_title', 250)->nullable();
            $table->string('meta_title', 250)->nullable();
            $table->string('meta_desc', 250)->nullable();
            $table->string('meta_keyword', 250)->nullable();
            $table->string('url_schema', 250)->nullable();
            $table->string('canonical_tag', 250)->nullable();
            $table->string('canonical_rel', 250)->nullable();
            $table->tinyInteger('is_deleted')->default(0);
            $table->timestamps();
        });

        Schema::create('job_seekers', function (Blueprint $table) {
            $table->id();
            $table->string('Image', 250)->nullable();
            $table->string('image_alt', 100)->nullable();
            $table->string('name', 100)->nullable();
            $table->string('designation', 150)->nullable();
            $table->text('short_desc')->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('is_deleted')->default(0);
            $table->timestamps();
        });

        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('guard_name');
            $table->string('controller')->nullable();
            $table->timestamps();
            $table->unique(['name', 'guard_name']);
        });

        Schema::create('model_has_permissions', function (Blueprint $table) {
            $table->unsignedBigInteger('permission_id');
            $table->string('model_type');
            $table->unsignedBigInteger('model_id');

            $table->primary(['permission_id', 'model_id', 'model_type']);
            $table->index(['model_id', 'model_type']);

            $table->foreign('permission_id')
                ->references('id')->on('permissions')
                ->onDelete('cascade');
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('guard_name');
            $table->string('active', 20)->default('1');
            $table->timestamps();
            $table->unique(['name', 'guard_name']);
        });

        Schema::create('model_has_roles', function (Blueprint $table) {
            $table->unsignedBigInteger('role_id');
            $table->string('model_type');
            $table->unsignedBigInteger('model_id');

            $table->primary(['role_id', 'model_id', 'model_type']);
            $table->index(['model_id', 'model_type']);

            $table->foreign('role_id')
                ->references('id')->on('roles')
                ->onDelete('cascade');
        });





        Schema::create('role_has_permissions', function (Blueprint $table) {
            $table->unsignedBigInteger('permission_id');
            $table->unsignedBigInteger('role_id');

            $table->primary(['permission_id', 'role_id']);
            $table->index('role_id');

            $table->foreign('permission_id')
                ->references('id')->on('permissions')
                ->onDelete('cascade');

            $table->foreign('role_id')
                ->references('id')->on('roles')
                ->onDelete('cascade');
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fname', 50);
            $table->string('lname', 50);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('is_deleted')->default(0);
            $table->timestamps();
        });


        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id();
            $table->string('tokenable_type');
            $table->unsignedBigInteger('tokenable_id');
            $table->string('name');
            $table->string('token')->unique();
            $table->text('abilities')->nullable();
            $table->timestamp('last_used_at')->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();
        });

        // Adding index
        Schema::table('personal_access_tokens', function (Blueprint $table) {
            $table->index(['tokenable_type', 'tokenable_id']);
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('about');
        Schema::dropIfExists('assessment');
        Schema::dropIfExists('blog');
        Schema::dropIfExists('blog_category');
        Schema::dropIfExists('certification');
        Schema::dropIfExists('enrolldata');
        Schema::dropIfExists('footer');
        Schema::dropIfExists('header');
        Schema::dropIfExists('home');
        Schema::dropIfExists('insights_and_tips');
        Schema::dropIfExists('jobs');
        Schema::dropIfExists('job_seekers');
        Schema::dropIfExists('permissions');
        Schema::dropIfExists('model_has_permissions');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('model_has_roles');
        Schema::dropIfExists('role_has_permissions');
        Schema::dropIfExists('users');
        Schema::dropIfExists('personal_access_tokens');

    }
};
