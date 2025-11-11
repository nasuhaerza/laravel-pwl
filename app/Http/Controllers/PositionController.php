<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index(Request $request)
    {
        // Ambil nilai pencarian dari input form (jika ada)
        $search = $request->input('search');

        // Buat query dasar
        $query = Position::query();

        // Jika ada kata kunci pencarian, filter data
        if (!empty($search)) {
            $query->where('nama_jabatan', 'like', '%' . $search . '%')
                ->orWhere('gaji_pokok', 'like', '%' . $search . '%');
        }

        // Ambil hasil (bisa pakai paginate jika ingin)
        $p = $query->orderBy('nama_jabatan', 'asc')->get();

        // Kirim data ke view
        return view('backend.positions.index', compact('p'));
    }
    
    // Form tambah data
    public function create()
    {
        return view('backend.positions.create');
    }

    // Simpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_jabatan' => 'required|string|max:255',
            'gaji_pokok' => 'required|int|max:11',
        ]);

        Position::create([
            'nama_jabatan' => $request->nama,
            'gaji_pokok' => $request->gaji,
        ]);

        return redirect()->route('position')->with('success', 'Data jabatan berhasil ditambahkan.');
    }
    // Hapus data
    public function delete($id)
    {
        $position = Position::findOrFail($id);
        $position->delete();

        return redirect()->route('position')->with('success', 'Data jabatan berhasil dihapus.');
    }

    // Edit Data
    public function edit($id)
    {
        $position = Position::findOrFail($id);
        return view('backend.positions.edit', compact('position'));
    }

    // Update Data
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_jabatan' => 'required|string|max:255',
            'gaji_pokok' => 'required|int|max:11',
        ]);

        $position = Position::findOrFail($id);
        $position->update([
            'nama_jabatan' => $request->nama_jabatan,
            'gaji_pokok' => $request->gaji_pokok,
        ]);

        return redirect()->route('position')->with('success', 'Data jabatan berhasil diperbarui.');
    }
}
