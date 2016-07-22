<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Slider;
use App\Company;
use Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        $company = Company::find(1);

        return view('admin.sliders', compact('sliders', 'company'));
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
        if($request->hasFile('image'))
        {
            if($request->file('image')->isValid())
            {
                $slider = new Slider();

                $image = $request->file('image');
                $filename  = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $image->move('img/sliders', $filename);

                $name = explode('.', $filename);     
                unset($name[count($name) - 1]); 
                $name = implode($name);
                $thumbnail = $name . '_thumb.' . $extension;
                $imagePath = public_path('img/sliders/' . $filename);
                $thumbnailPath = public_path('img/sliders/' . $name . '_thumb.jpg');

                Image::make($imagePath)->resize(200, 200)->save($thumbnailPath);

                $slider->image = 'img/sliders/' . $filename;
                $slider->thumbnail = 'img/sliders/' . $thumbnail;
                $slider->save();
            }
        } 
        return redirect('admin/sliders/index');
    }

    public function delete(Request $request)
    {
        $slider = Slider::find($request->input('id'));
        $slider->delete();
        return redirect('admin/sliders/index');
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
