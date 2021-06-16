<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Antrian;
use PDF;
use DateTime;


class IndexController extends Controller
{
   public DateTime $tanggal_mulai, $tanggal_akhir;
   public int $kuota = 50;

    public function __construct()
    {
        $this->tanggal_mulai = new DateTime();
        $this->tanggal_akhir = new DateTime();
        $this->tanggal_mulai->setDate(2021, 6, 21);
        $this->tanggal_akhir->setDate(2021, 6, 25);
    }

    public function index()
    {   $antrian_terdaftar = Antrian::select("antrian")->orderBy('tanggal_layanan', 'desc')->orderBy('antrian', 'desc')->first();
        $tanggal_terdaftar = new DateTIme(Antrian::max("tanggal_layanan"));
        if($tanggal_terdaftar == $this->tanggal_akhir && $antrian_terdaftar == $this->kuota){
                return "[Maaf Kuota Pelayanan Sudah Penuh. Pelayanan PPDB bisa dibantu di sekolah lain. Terimakasih]";
        }
        return view("index");
    }

    public function bukti(Request $request)
    {
        $antrian_terdaftar = Antrian::select("antrian")->orderBy('tanggal_layanan', 'desc')->orderBy('antrian', 'desc')->first();
        $tanggal_terdaftar = new DateTIme(Antrian::max("tanggal_layanan"));
        if($tanggal_terdaftar == $this->tanggal_akhir && $antrian_terdaftar == $this->kuota){
                return "[Maaf Kuota Pelayanan Sudah Penuh. Pelayanan PPDB bisa dibantu di sekolah lain. Terimakasih]";
        }
        $tanggal_layanan = $this->tanggal_mulai;

        $antrian_baru = new Antrian;
        $antrian_baru->nisn = $request->nisn;
        $antrian_baru->nama_lengkap = $request->nama;
        $antrian_baru->wa = $request->wa;
        $antrian_baru->jalur = $request->jalur;

        if($tanggal_terdaftar > $tanggal_layanan){
            $tanggal_layanan = $tanggal_terdaftar;
            // dd($tanggal_layanan);
        }
        $antrian_terdaftar = !is_null($antrian_terdaftar)?$antrian_terdaftar->antrian:$antrian_terdaftar;
        if($antrian_terdaftar < $this->kuota){
            
            $antrian_baru->antrian = $antrian_terdaftar + 1;
            $antrian_baru->tanggal_layanan = $tanggal_layanan;
        }else{
            $antrian_baru->antrian = 1;
            // $tanggal_layanan = new DateTime($tanggal_layanan);
            $tanggal_layanan->modify("+1 day");
            // dd($tanggal_layanan);
            $antrian_baru->tanggal_layanan = $tanggal_layanan;
        }

        $antrian_baru->save();


        return view("bukti", compact('antrian_baru'));
    }


    public function download(Request $request)
    {
        $antrian_baru = Antrian::findOrFail($request->id);
        // dd($antrian_baru);

        // return view("download", compact('antrian_baru'));

        $pdf = PDF::loadView("download", compact('antrian_baru'));

        return $pdf->download("ANTREPPDB_". $antrian_baru->nama_lengap."_". $antrian_baru->antrian."_". $antrian_baru->tanggal_layanan.".pdf");
    }
}
