<?php namespace Ooglee\Framework\Http\Controllers\Admin;

use Ooglee\Framework\Http\Requests;
use Ooglee\Domain\Entities\Post\Post;
use Ooglee\Framework\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardController extends Controller {



	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$posts = Post::all();

		//return resources listing view
        return view(\OogleeCConfig::get('config.cms_index.index_admin'), compact('posts'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


}
