<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;


class StudentsController extends Controller
{
    public function index()
    {
        return view('main.home');
    }
    public function student(Request $request)
    {
        if ($request->has('search')) {
            $data = Students::where('name', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Students::paginate(5);
        }

        return view('main.welcome', compact('data'));
    }
    public function tambahstudent()
    {
        return view('tambahstudent');
    }
    public function insertdata(Request $request)
    {
        request()->validate(
            [
                'name' => ['required', 'min:4', 'unique:students'],
                'email' => ['required', 'unique:students', 'email:rfc,dns'],
                'gender' => ['required'],
                'nomor_hp' => ['required', 'min:12', 'unique:students'],
                'address' => ['required'],
                'photo' => ['required', 'max:1024'],
                'motto' => ['required'],
            ],
            [
                'name.unique' => 'Nama telah digunakan',
                'name.required' => 'Nama belum diisi',
                'name.min' => 'Nama minimal 4 karakter',
                'email.required' => 'Email belum diisi',
                'email.unique' => 'Email telah digunakan',
                'nomor_hp.min' => 'Nomor hp minimal 12 angka',
                'nomor_hp.unique' => 'Nomor hp telah digunakan'
            ]
        );
        $data = Students::create($request->all());
        if ($request->File('photo')) {
            $request->file('photo')->move('photostudent/', $request->file('photo')->getClientOriginalName());
            $data->photo = $request->file('photo')->getClientOriginalName();
            $data->save();
        }
        return redirect('/student')->with('alert', 'Data Berhasil Ditambah');
    }
    public function tampildata($id)
    {
        $data = Students::find($id);

        return view('editstudent', compact('data'));
    }
    public function updatedata(Request $request, $id)
    {
        $data = Students::find($id);
        $data->update($request->all());

        return redirect('/student')->with('alert', 'Data Berhasil Diupdate');
    }
    public function deletedata($id)
    {
        $data = Students::find($id);
        $data->delete();

        return redirect('/student')->with('alert', 'Data Berhasil Dihapus');
    }
    public function show(Students $post)
    {
        return view('detailstudent', ['post' => $post]);
    }
}
