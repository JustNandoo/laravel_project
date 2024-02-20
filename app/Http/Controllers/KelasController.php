<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;

class KelasController extends Controller
{
  public function index()
  {
      return view('dashboard/views/kelas/all', [
          "title" => "kelas",
          "listKelas" => kelas::all()
      ]);
  }

  public function index2()
  {
      return view('kelas/all', [
          "title" => "kelas",
          "listKelas" => kelas::all()
      ]);
  }

  public function create()
  {
      return view("dashboard/views/kelas/create", [
          "title" => "tambah data kelas"
      ]);
  }

  public function store(Request $request)
  {
      $validateData = $request->validate([
          "nama" => "required|max:100",
      ]);

      $result = kelas::create($validateData);
      if($result) {
          return redirect("/dashboard/kelasall")->with("successAdd", "data siswa berhasil ditambahkan!");
      }
  }

  public function destroy(kelas $kelas)
  {
      $result = kelas::destroy($kelas->id);
      if($result) {
          return redirect("/dashboard/kelasall")->with("successDelete", "data siswa berhasil dihapus!");
      }
  }

  public function edit(Kelas $kelas)
  {
      return view("dashboard/views/kelas/edit", [
          "title" => "edit data kelas",
          "kelas" => $kelas
      ]);
  }

  public function update(Request $request, Kelas $kelas)
  {
      $validateData = $request->validate([
          "nama" => "required|max:100",
      ]);

      $result = kelas::where('id', $kelas->id)->update($validateData);
      if($result) {
          return redirect("/dashboard/kelasall")->with("successAdd", "data siswa berhasil diubah!");
      }
  }

  public function delete(Request $req, $id)
  {
      $data = Kelas::find($id);
      if($data) {
          $data->delete();
      }

      return redirect("/dashboard/kelasall")->with("successDelete", "data siswa berhasil dihapus!");
  }
}