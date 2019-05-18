<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\Menu as modelRequest;
use App\Menu as model;
use DataTables;

class MenuController extends Controller
{

    private $view = 'admin.menu.';
    private $route = 'menu.';

    public function index()
    {
        // dd('id');
        return view($this->view . 'index');
    }

    public function create()
    {
        $menus = model::pluck('title','id')->prepend(trans('pickSom'),'0');
        return view($this->view . 'create',compact('menus'));
    }

    public function store(Request $request)
    {
       dd($request->toArray());
        model::create($this->getInput($request));
        return redirect(route($this->route . 'index'))->withFlashMessage(trans('admin.created'));


    }

    public function edit($id)
    {
        $menu = model::findOrFail($id);
        $menus = model::where('id','!=',$id)->pluck('title','id')->prepend(trans('pickSom'),'');

        return view($this->view . 'edit', compact('menu','menus'));
    }

    public function update(modelRequest $request, $id)
    {
        $menu = model::findOrFail($id);
        $menu->update($this->getInput($request));
        return redirect(route($this->route . 'index'))->withFlashMessage(trans('admin.updated'));


    }

    public function show($id)
    {
        $menu = model::findOrFail($id);
        return view($this->view . 'show', compact('menu'));
    }

    public function destroy($id, modelRequest $request)
    {
        $menu = model::findOrFail($id);

            $menu->delete();

        return redirect(route($this->route . 'index'))->withFlashMessage(trans('deleted'));
    }

    public function confirmation($id)
    {
        $menu = model::findOrFail($id);
        return view($this->view .'delete', compact('menu'));
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
        $menu= model::all();
        return DataTables::of($menu)
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
