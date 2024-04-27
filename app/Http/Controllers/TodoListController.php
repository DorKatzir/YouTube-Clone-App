<?php

namespace App\Http\Controllers;


use App\Models\ListItem;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;


class TodoListController extends Controller {


    public function index () {
        return view('welcome', ['listItems' => ListItem::where('is_complete', 0)->get()]);
    }

    public function markComplete ($id) {
        
        $listItem = ListItem::find($id);
        $listItem->is_complete = 1;
        $listItem->save();
        
        return redirect('/');
    }

    public function saveItem ( Request $request ) {

        if(!empty($request->input('listItem'))) {
            //dd('name is not empty.');
            $newListItem = new ListItem;
            $newListItem->name = $request->listItem;
            $newListItem->is_complete = 0;
            $newListItem->save(); 
            return redirect('/');
        } else {
            //dd('name is empty.');`
            return redirect('/');
        }
           
    }



}
