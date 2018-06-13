<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Datatables;
use App\User;

class DatatablesController extends Controller
{
    /**
    * Displays datatables front end view
    *
    * @return \Illuminate\View\View
    */
   public function index()
   {
       return view('admin.datatables.index');
   }

   /**
    * Process datatables ajax request.
    *
    * @return \Illuminate\Http\JsonResponse
    */
   public function getUsers()
   {
       return Datatables::of(User::query())->make(true);
   }
}
