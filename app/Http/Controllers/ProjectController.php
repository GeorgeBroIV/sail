<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
	/**
	 * Show the profile for a given user.
	 *
	 * @param  string  $project
	 * @return Application|\Illuminate\Contracts\View\Factory|View|\Illuminate\View\View
	 */
	public function show($project)
	{
		if(str_starts_with($_SERVER['HTTP_USER_AGENT'],'curl') ) {
			$curl=true;
		} else {
			$curl=false;
		}
		return view('project', compact(['project', 'curl']));
	}
}
