<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\admin\Product as modelRequest;
use App\Product as model;
use App\Category;
use App\Brand;
use Illuminate\Support\Facades\Auth;
use DataTables;
use Validator;

class ProductController extends Controller
{

    private $view = 'admin.product.';
    private $route = 'product.';

    public function index()
    {
        // dd('id');
        return view($this->view . 'index');
    }

    public function create()
    {
        $cats = Category::pluck('name','id');
        $brands = Brand::pluck('name','id');
        return view($this->view . 'create',compact('cats','brands'));
    }

    public function store(modelRequest $request)
    {
        //dd($request->toArray());
        $product= model::create($this->getInput($request));
        $product->stocks()->create(['qty'=>$request->qty]);
        return redirect(route($this->route . 'index'))->withFlashMessage(trans('admin.created'));


    }

    public function edit($id)
    {
        $product = model::findOrFail($id);
        return view($this->view . 'edit', compact('product'));
    }

    public function update(modelRequest $request, $id)
    {
        $product = model::findOrFail($id);
        $product->update($this->getInput($request));
        return redirect(route($this->route . 'index'))->withFlashMessage(trans('admin.updated'));


    }

    public function show($id)
    {
        $product = model::findOrFail($id);
        return view($this->view . 'show', compact('product'));
    }

    public function destroy($id)
    {
        $product = model::findOrFail($id);

        $product->delete();

        return redirect(route($this->route . 'index'))->withFlashMessage(trans('deleted'));
    }

    public function confirmation($id)
    {
        $product = model::findOrFail($id);
        return view($this->view .'delete', compact('product'));
    }

    private function getInput(modelRequest $request)
    {
        $input = $request->all();
        $input['slug'] = str_slug($input['name']);
        $input['user_id'] = Auth::id();
        $input['image'] = uploading()->singleImage('image');
        return $input;
    }


    public function loadData()
    {
        $products = model::all();
        return DataTables::of($products)
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
