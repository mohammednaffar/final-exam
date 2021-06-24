<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class UserController extends Controller
{
	public function __construct()
	{
	    //$this->middleware('auth');
	}

	public function dashboard(){
		//

        return view('admin.dashboard',[]);
	}

    public function Categories(){
		//

        return view('admin.all_categories',[]);
	}


    public function Products(){
		//

        return view('admin.all_products',[]);
	}


    public function Orders(){
		//

        return view('admin.create_order',[]);
	}

    public function newCategory(){
		//

        return view('admin.create_category',[]);
	}

    public function newProduct(){
		//

        return view('admin.create_product',[]);
	}



}