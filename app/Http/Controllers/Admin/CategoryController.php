<?php

namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\http\Requests\Admin\Category as modelRequest;
    use DataTables;
    use App\Category as model;


class CategoryController extends Controller
{

    private $view = 'admin.category.';
    private $route = 'category.';



    public function index()
    {
        return view($this->view .'index');
    }


    public function create()
    {
        $cats = model::pluck('name','id')->prepend(trans('admin.pickSom'),'0');

        return view($this->view . 'create',compact('cats'));
    }


    public function store(modelRequest $request)
    {
        //dd($request->toArray());
        model::create($this->getInput($request));

        return redirect(route($this->route . 'index'))
            ->withFlashMessage(trans('admin.created'));
    }


    public function edit($id)
    {

        $cats = model::where('id','!=',$id)->pluck('name','id')->prepend(trans('pickSom'),'0');
        $cat = model::findOrFail($id);
        return view($this->view . 'edit' , compact('cat','cats'));

    }



    public function show($id)
    {
        $category = model::findOrFail($id);
        return view($this->view . 'show',compact('category'));

    }





    public function update($id, modelRequest $request)
    {

        $cat = model::findOrFail($id);
        $cat->update($this->getInput($request));
        return redirect(route($this->route . 'index'))->withFlashMessage(trans('admin.updated'));


    }





    public function destroy($id)
    {
        $cat = model::findOrFail($id);
        $cat->delete();
        return redirect(route($this->route . 'index'))->withFlashMessage(trans('admin.deleted'));

    }





    public function confirmation($id)
    {

        $category = model::findOrFail($id);

//        dd($cat);

            return view($this->view .'delete', compact('category'));

    }


    private function getInput($request)

    {   $input = $request->only(['name','description','status','parent_id']);
        $input['slug'] = str_slug($input['name']);

        if ($request->image != null)

        {
            $input['image'] = uploading()->singleImage('image');
        }
        return $input;
    }




    public function loadData()
    {
        $categories = model::all();
        return DataTables::of($categories)
            ->rawColumns(['action','image'])
            ->editColumn('image', function ($model) {
                return showImage($model->photo);
            })

            ->editColumn('action', function ($model) {
                $edit = editBtn(route($this->route .'edit', $model->id));
                $delete = deleteBtn(route($this->route .'delete', $model->id));
                $show = showBtn(route($this->route .'show', $model->id));
                return $edit . ' ' . $show . ' ' . $delete;
            })
            ->make(true);
    }


}
