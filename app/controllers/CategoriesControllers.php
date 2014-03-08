<?php 

Class CategoriesController extends BaseController {

	public function __construct()
	{
		$this->beforeFilter('csrf', array('on'=>'post'));
	}

	public function getIndex()
	{
		return View::make('categories.index')->with('categories', Category::all())->with('title', 'Categories');
	}


	public function postCreate()
	{
		$validator = Validator::make(Input::all(), Category::$rules);

		if ($validator->passes()){
			$category = new Category;
			$category->name = Input::get('name');
			$category->save();

			return Redirect::to('admin/categories/index')
			->with('message','<i class="fa fa-check-square-o fa-lg"></i> Category has been created!');
		}
			return Redirect::to('admin/categories/index')
			->with('message', '<i class="fa fa-exclamation-triangle fa-lg"></i> Something went wrong! ')
			->withErrors($validator)
			->withInput();
		

	}


	public function postDestroy()
	{
		$category = Category::find(Input::get('id'));

		if ($category)
		{
			$category->delete();
			return Redirect::to('admin/categories/index')
			->with('message', '<i class="fa fa-check-square-o fa-lg"></i> Category Deleted');
		

		}

		return Redirect::to('admin/categories/index')
		->with('message', '<i class="fa fa-check-square-o fa-lg"></i>  Category has not been deleted, Please try again!');
	}













}


