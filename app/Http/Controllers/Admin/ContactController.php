<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact as model;
use DataTables;

class ContactController extends Controller
{

    private $view = 'admin.contact.';
    private $route = 'contact.';

    public function index()
    {
        // dd('id');
        return view($this->view . 'index');
    }

    public function show($id)
    {
        $contact = model::findOrFail($id);
        $contact->update(['status'=> 1 ]);
        return view($this->view . 'show', compact('contact'));
    }

    public function destroy($id, Request $request)
    {
        $contact = model::findOrFail($id);

        $contact->delete();

        return redirect(route($this->route . 'index'))->withFlashMessage(trans('deleted'));
    }

    public function confirmation($id)
    {
        $contact = model::findOrFail($id);
        return view($this->view .'delete', compact('contact'));
    }




    public function loadData()
    {
        $slider= model::all();
        return DataTables::of($slider)
            ->rawColumns(['action'])
            ->editColumn('action', function ($model) {
                $delete = deleteBtn(route($this->route .'delete', $model->id));
                $show = showBtn(route($this->route .'show', $model->id));
                return  $show . ' ' . $delete;
            })
            ->make(true);
    }
}
