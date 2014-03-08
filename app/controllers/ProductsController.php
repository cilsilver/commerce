<?php 

Class ProductsController extends BaseController {

	public function __construct()
	{
		$this->beforeFilter('csrf', array('on'=>'post'));
	}

	public function getIndex()
	{
		$categories = array();

		foreach(Category::all() as $category){
			$categories[$category->id] = $category->name;
		}

		return View::make('products.index')
		->with('products', Product::all())
		->with('categories', $categories)
		->with('title', 'Products');
	}


	public function postCreate()
	{
		$validator = Validator::make(Input::all(), Product::$rules);

		if ($validator->passes()){
			$product = new Product;
			$product->category_id = Input::get('category_id');
			$product->title = Input::get('title');
			$product->description = Input::get('description');
			$product->price = Input::get('price');

			$image = Input::file('image');
			$filename = date('Y-m-d-H:i:s')."-".$image->getClientOriginalName();
			Image::make($image->getRealPath())->resize(468, 249)->save(public_path().'/img/products/'. $filename);
			$product->image = 'img/products/'. $filename;
			$product->save();

			return Redirect::to('admin/products/index')
			->with('message','<i class="fa fa-check-square-o fa-lg"></i> Products has been created!');
		}
			return Redirect::to('admin/products/index')
			->with('message', '<i class="fa fa-exclamation-triangle fa-lg"></i> Something went wrong! ')
			->withErrors($validator)
			->withInput();


	}


	public function postDestroy()
	{
		$category = Category::find(Input::get('id'));

		if ($product)
		{
			File::delete('public/'.$product->image);
			$product->delete();
			return Redirect::to('admin/products/index')
			->with('message', '<i class="fa fa-check-square-o fa-lg"></i> Category Deleted');
		

		}

		return Redirect::to('admin/products/index')
		->with('message', '<i class="fa fa-check-square-o fa-lg"></i>  Category has not been deleted, Please try again!');
	}



	public function postToggleAvailability()
	{
		$product =  Product::find(Input::get('id'));

		if($product){
			$product->availability = Input::get('availability');
			$product->save();
			return Redirect::to('admin/products/index')->with('message', '<i class="fa fa-check-square-o fa-lg"></i> Product Updated');

		}

		return Redirect::to('admin/products/index')->with('message', '<i class="fa fa-check-square-o fa-lg"></i> Invalid Product');



	}









}


