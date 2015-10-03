<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project_files', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('location');
			$table->timestamps();
			$table->integer('project_id')->unsigned()->nullable();
			$table->foreign('project_id')->references('id')->on('projects');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
