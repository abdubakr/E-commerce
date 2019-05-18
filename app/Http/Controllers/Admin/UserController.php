<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DataTables;
use App\User;
use App\Http\Requests\admin\User as rUser;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.index');
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(rUser $request)
    {
        // dd($request);
        User::create($request->all());
        return redirect(route('user.index'))->withFlashMessage(trans('admin.created'));


    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect(route('user.index'))->withFlashMessage(trans('admin.updated'));


    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.show', compact('user'));
    }

    public function destroy($id, Request $request)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect(route('user.index'))->withFlashMessage(trans('deleted'));
    }

    public function confirmation($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.delete', compact('user'));
    }

    public function password($id, Request $request)
    {

        $user = User::findOrFail($id);
        $user->update(['password' => $request->password]);
        dd($user);
        return redirect()->back();


    }


    public function loadData(User $user)
    {
        $users = User::all();
        return DataTables::of($users)
            ->rawColumns(['action'])
            ->editColumn('action', function ($model) {
                $edit = editBtn(route('user.edit', $model->id));
                $delete = deleteBtn(route('user.delete', $model->id));
                $show = showBtn(route('user.show', $model->id));
                return $edit . ' ' . $show . ' ' . $delete;
            })
            ->make(true);
    }
}
