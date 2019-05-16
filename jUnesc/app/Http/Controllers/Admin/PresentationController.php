<?php

namespace Jornada\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Jornada\Admin\Presentation;
use Jornada\Admin\Type;
use Jornada\Http\Controllers\Controller;


class PresentationController extends Controller
{
    protected $presentation;
    protected $type;

    public function __construct(
        Presentation $presentation, Type $type)
    {
        $this->presentation = $presentation;
        $this->type = $type;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presentations = 
            $this->presentation->orderBy('name')
            ->paginate();
        return view('admin.presentation.index', 
        compact('presentations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = $this->type->orderBy('name')
        ->pluck('name','id');
        dd($types);
        return view('admin.presentation.create');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
