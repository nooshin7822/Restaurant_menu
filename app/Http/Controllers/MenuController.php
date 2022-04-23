<?php

namespace App\Http\Controllers;

use App\Models\cr;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pizza_menu=Menu::where('name','Pizza')->first('id')->SubMenus;
        return view('menu',compact('pizza_menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\JsonResponse
     */
    public function show()
    {


    }
    public function menuAjax(): \Illuminate\Http\JsonResponse
    {
        $pizza=Menu::where('name','Pizza')->first('id')->SubMenus;
        $pasta=Menu::where('name','Pasta')->first('id')->SubMenus;
        $starters=Menu::where('name','Starters')->first('id')->SubMenus;
        return response()->json(['status' => 'success','data' => $pizza , 'data2'=> $pasta , 'data3'=>$starters]);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(cr $cr)
    {
        //
    }
}
