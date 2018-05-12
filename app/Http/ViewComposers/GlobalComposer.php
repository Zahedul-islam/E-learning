<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Auth;

class GlobalComposer {

	public function __construct() {

	}

	/**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
    	$userRole = "visitor";

        if(Auth::user()) {
            if(Auth::user()->hasRole('admin')) {
                $userRole = "admin";
            } elseif(Auth::user()->hasRole('student')) {
                $userRole = "student";
            }
        }

        $view->with('userRole', $userRole);
    }
}