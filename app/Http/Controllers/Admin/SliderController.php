<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\Slider as modelRequest;
use App\Slider as model;

use DataTables;

class SliderController extends Controller
{

    private $view = 'admin.slider.';
    private $route = 'slider.';

    public function index()
    {
        // dd('id');
        return view($this->view . 'index');
    }

    public function create()
    {
        return view($this->view . 'create');
    }

    public function store(modelRequest $request)
    {
        //dd($request->toArray());
        model::create($this->getInput($request));
        return redirect(route($this->route . 'index'))->withFlashMessage(trans('admin.created'));


    }

    public function edit($id)
    {
        $slider = model::findOrFail($id);
       // dd($slider);


        return view($this->view . 'edit', compact('slider'));
    }

    public function update(modelRequest $request, $id)
    {
        //dd($id);
        $slider = model::findOrFail($id);
       //dd($slider);
        $slider->update($this->getInput($request));
        return redirect(route($this->route . 'index'))->withFlashMessage(trans('admin.updated'));


    }

    public function show($id)
    {
        $slider = model::findOrFail($id);
        return view($this->view . 'show', compact('slider'));
    }

    public function destroy($id, Request $request)
    {
        $slider = model::findOrFail($id);

            $slider->delete();

        return redirect(route($this->route . 'index'))->withFlashMessage(trans('deleted'));
    }

    public function confirmation($id)
    {
        $slider = model::findOrFail($id);
        return view($this->view .'delete', compact('slider'));
    }

    private function getInput($request)
    {
        $input = $request->only(['title']);
        if ($request->image !=null){
        $input['image'] = uploading()->singleImage('image');
    }
        return $input;
    }


    public function loadData()
    {
        $slider= model::all();
        return DataTables::of($slider)
            ->rawColumns(['action'])
            ->editColumn('action', function ($model) {
                $edit = editBtn(route($this->route .'edit', $model->id));
                $delete = deleteBtn(route($this->route .'delete', $model->id));
                $show = showBtn(route($this->route .'show', $model->id));
                return $edit . ' ' . $show . ' ' . $delete;
            })
            ->make(true);
    }
}
