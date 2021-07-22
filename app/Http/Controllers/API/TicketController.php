<?php

namespace App\Http\Controllers\API;
use App\Ticket;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;

class TicketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //tampil semua data
        $data = Ticket::get();
        return response()->json([
            'pesan' => 'Data ditemukan',
            'data' => $data
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //tambah data
        $validasi = Validator::make($request->all(), [
            "kelas"     => "required", 
            "sub_kelas" => "required", 
            "harga"     => "required|integer", 
            "berlaku"   => "required", 
            "desc"      => "required"
        ]);

        if($validasi->passes()){
            $data = Ticket::create($request->all());

            return response()->json([
                'pesan' => 'Data ditambahkan',
                'data' => $data
            ], 200);
        }
        return response()-json([
            'pesan' => 'Data gagal ditambahkan',
            'data' => $validasi->errors()->all()
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //tampil 1 data sesuai id
        $data = Ticket::where('id', $id)->first();

        if(empty($data)){
            return response()-json([
                'pesan' => 'Data tidak ditemukan',
                'data' => ''
            ], 404);
        }
        return response()->json([
            'pesan' => 'Data ditemukan',
            'data' => $data
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //update data
        $data = Ticket::where('id', $id)->first();

        if(empty($data)){
            return response()->json([
                'pesan' => 'Data tidak ditemukan',
                'data' => ''
            ], 404);
        }else{
            $validasi = Validator::make($request->all(),[
                "kelas"     => "required", 
                "sub_kelas" => "required", 
                "harga"     => "required|integer", 
                "berlaku"   => "required", 
                "desc"      => "required"
            ]);
 
            if($validasi->passes()){
                $data->update($request->all());
                return response()->json([
                    'pesan' => 'Data disimpan',
                    'data' => $data->update($request->all())
                ]);
            }else{
                return response()->json([
                    'pesan' => 'Data gagal di-update',
                    'data' => $validasi->errors()->all()
                ], 404);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //hapus data sesuai id
        $data = Ticket::where('id', $id)->first();

        if(empty($data)){
            return response()->json([
                'pesan' => 'Data tidak ditemukan',
                'data' => ''
            ], 404);
        }
        $data->delete();
        return response()->json([
            'pesan' => 'Data dihapus',
            'data' => $data
        ], 200);
    }
}
