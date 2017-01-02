<?php namespace App\Modules\Rest\Controllers;

use App\Http\Controllers\Controller;
/**
 * IndexController
 *
 * Controller to house all the functionality directly
 * related to the ModuleOne.
 */
class IndexController extends Controller
{
	function __construct( )
	{
		//echo "gfdgdf";exit();
	}

	public function index()
	{
            // ModuleOne is the module name and dummy is the blade file
            // you can specify ModuleOne::someFolder.file if your file exists
            // inside a folder. Also the blade will use the same syntax i.e.
            // ModuleName::viewName
            echo "gdfgd";exit();
	}

	public function modelTest()
	{
            // Added just to demonstrate that models work
            echo "gdfgdfg";exit();
	}
}
