<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->timestamps();
			$table->integer('file_id')->unsigned();

			$table->foreign('file_id')
				->references('id')
				->on('files')
				->onDelete('cascade');
		});

		Schema::create('project_user', function(Blueprint $table)
		{
			$table->integer('project_id')->unsigned()->index();
			$table->foreign('project_id')->references('id')->on('projects');

			$table->integer('user_id')->unsigned()->index();
			$table->foreign('user_id')->references('id')->on('users');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projects');
	}

}
