<?php namespace App\Http\Controllers\Manage;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\Category;
use App\Http\Models\Products;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;

class CategoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return 	Response
	 */
	public function index()
	{
		$data 	= Category::paginate(10);
		return view('manage.category.lists', ['lists' => $data, 'item' => new CategoryController]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @param 	null
	 * @return 	Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	/**
	 * Get item by Category
	 * @param  int $id 
	 * @return int     
	 */
	public function item($id)
	{
		return Products::where('category_id', $id)->count();
	}

}
