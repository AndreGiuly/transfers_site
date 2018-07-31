<?php

namespace App\Repositories\Interfaces;
//use App\Illuminate\Http\Request as Request;

interface DefaultMethodsInterface {
	# Show all
	public static function list();
	# Show one
	public static function get($id);
	# Store Data
	public static function store(Array $data);
	# Update Data
	public static function update(Array $data);
	# Delete Data
	public static function delete($id);
	

}