<?php
namespace App\Models;
namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
class BarangController extends Controller
{
    public function index(): Response
    {
        //$posts = Barang::all();
        //return response()->view('Barang.index', ['Barang' => $posts]);
        $barang = Barang::paginate(10);
        return response()->view('Barang.index', ['Barang' => $barang]);
    }
    public function create()
    {
        return view('Barang.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'Nama_Barang' => 'required',
            'Jumlah_Barang' => 'required'
        ]);
        $form_data = array(
            'Nama_Barang' => $request->Nama_Barang,
            'Jumlah_Barang' => $request->Jumlah_Barang
        );
        Barang::create($form_data);
        return redirect()->route('Barang.index')
                        ->with('success','Barang created successfully.');
    }

    public function edit(string $id)
    {
        $barang = Barang::findOrFail($id);

        return view('Barang.edit', compact('barang'));
    }
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'Nama_Barang'     => 'required',
            'Jumlah_Barang'   => 'required',
        ]);

        //get post by ID
        $barang = Barang::findOrFail($id);

        //update post without image
        $barang->update([
            'Nama_Barang'     => $request->Nama_Barang,
            'Jumlah_Barang'   => $request->Jumlah_Barang
        ]);
        return redirect()->route('Barang.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    public function destroy($id): RedirectResponse
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect()->route('Barang.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
    public function show(string $id)
    {
        $barang = Barang::findOrFail($id);
        return view('Barang.show', compact('barang'));
    }
}
