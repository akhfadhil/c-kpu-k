<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;

    /**
     * Atribut yang dapat diisi secara massal (mass assignable).
     *
     * @var array
     */
    protected $fillable = [
        'id_kecamatan',
        'nama_desa',
    ];

    /**
     * Hubungan (relationship) dengan model Kecamatan.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan', 'id');
    }

    public function tps()
    {
        return $this->hasMany(tps::class, 'id_desa');
    }
}

// use Illuminate\Support\Facades\DB;

// $desas = [
//     // Kecamatan Bangorejo (id_kecamatan = 1)
//     [ "id_kecamatan" => 1, "nama_desa" => "Bangorejo" ],
//     [ "id_kecamatan" => 1, "nama_desa" => "Kebondalem" ],
//     [ "id_kecamatan" => 1, "nama_desa" => "Ringintelu" ],
//     [ "id_kecamatan" => 1, "nama_desa" => "Sambimulyo" ],
//     [ "id_kecamatan" => 1, "nama_desa" => "Sambirejo" ],
//     [ "id_kecamatan" => 1, "nama_desa" => "Sukorejo" ],
//     [ "id_kecamatan" => 1, "nama_desa" => "Temurejo" ],

//     // Kecamatan Banyuwangi (id_kecamatan = 2)
//     [ "id_kecamatan" => 2, "nama_desa" => "Kampungmandar" ],
//     [ "id_kecamatan" => 2, "nama_desa" => "Kampungmelayu" ],
//     [ "id_kecamatan" => 2, "nama_desa" => "Karangrejo" ],
//     [ "id_kecamatan" => 2, "nama_desa" => "Kebalenan" ],
//     [ "id_kecamatan" => 2, "nama_desa" => "Kepatihan" ],
//     [ "id_kecamatan" => 2, "nama_desa" => "Kertosari" ],
//     [ "id_kecamatan" => 2, "nama_desa" => "Lateng" ],
//     [ "id_kecamatan" => 2, "nama_desa" => "Pakis" ],
//     [ "id_kecamatan" => 2, "nama_desa" => "Panderejo" ],
//     [ "id_kecamatan" => 2, "nama_desa" => "Penganjuran" ],
//     [ "id_kecamatan" => 2, "nama_desa" => "Pengantigan" ],
//     [ "id_kecamatan" => 2, "nama_desa" => "Singonegaran" ],
//     [ "id_kecamatan" => 2, "nama_desa" => "Singotrunan" ],
//     [ "id_kecamatan" => 2, "nama_desa" => "Sobo" ],
//     [ "id_kecamatan" => 2, "nama_desa" => "Sumberrejo" ],
//     [ "id_kecamatan" => 2, "nama_desa" => "Tamanbaru" ],
//     [ "id_kecamatan" => 2, "nama_desa" => "Temenggungan" ],
//     [ "id_kecamatan" => 2, "nama_desa" => "Tukangkayu" ],

//     // Kecamatan Blimbingsari (id_kecamatan = 3)
//     [ "id_kecamatan" => 3, "nama_desa" => "Badean" ],
//     [ "id_kecamatan" => 3, "nama_desa" => "Blimbingsari" ],
//     [ "id_kecamatan" => 3, "nama_desa" => "Bomo" ],
//     [ "id_kecamatan" => 3, "nama_desa" => "Gintangan" ],
//     [ "id_kecamatan" => 3, "nama_desa" => "Kaligung" ],
//     [ "id_kecamatan" => 3, "nama_desa" => "Kaotan" ],
//     [ "id_kecamatan" => 3, "nama_desa" => "Karangrejo" ],
//     [ "id_kecamatan" => 3, "nama_desa" => "Patoman" ],
//     [ "id_kecamatan" => 3, "nama_desa" => "Sukojati" ],
//     [ "id_kecamatan" => 3, "nama_desa" => "Watukebo" ],

//     // Kecamatan Cluring (id_kecamatan = 4)
//     [ "id_kecamatan" => 4, "nama_desa" => "Benculuk" ],
//     [ "id_kecamatan" => 4, "nama_desa" => "Cluring" ],
//     [ "id_kecamatan" => 4, "nama_desa" => "Kaliploso" ],
//     [ "id_kecamatan" => 4, "nama_desa" => "Plampangrejo" ],
//     [ "id_kecamatan" => 4, "nama_desa" => "Sarimulyo" ],
//     [ "id_kecamatan" => 4, "nama_desa" => "Sembulung" ],
//     [ "id_kecamatan" => 4, "nama_desa" => "Sraten" ],
//     [ "id_kecamatan" => 4, "nama_desa" => "Tamanagung" ],
//     [ "id_kecamatan" => 4, "nama_desa" => "Tampo" ],

//     // Kecamatan Gambiran (id_kecamatan = 5)
//     [ "id_kecamatan" => 5, "nama_desa" => "Gambiran" ],
//     [ "id_kecamatan" => 5, "nama_desa" => "Jajag" ],
//     [ "id_kecamatan" => 5, "nama_desa" => "Purwodadi" ],
//     [ "id_kecamatan" => 5, "nama_desa" => "Wringinagung" ],
//     [ "id_kecamatan" => 5, "nama_desa" => "Wringinrejo" ],
//     [ "id_kecamatan" => 5, "nama_desa" => "Yosomulyo" ],

//     // Kecamatan Genteng (id_kecamatan = 6)
//     [ "id_kecamatan" => 6, "nama_desa" => "Genteng Kulon" ],
//     [ "id_kecamatan" => 6, "nama_desa" => "Genteng Wetan" ],
//     [ "id_kecamatan" => 6, "nama_desa" => "Kaligondo" ],
//     [ "id_kecamatan" => 6, "nama_desa" => "Kembiritan" ],
//     [ "id_kecamatan" => 6, "nama_desa" => "Setail" ],

//     // Kecamatan Giri (id_kecamatan = 7)
//     [ "id_kecamatan" => 7, "nama_desa" => "Boyolangu" ],
//     [ "id_kecamatan" => 7, "nama_desa" => "Giri" ],
//     [ "id_kecamatan" => 7, "nama_desa" => "Grogol" ],
//     [ "id_kecamatan" => 7, "nama_desa" => "Jambesari" ],
//     [ "id_kecamatan" => 7, "nama_desa" => "Mojopanggung" ],
//     [ "id_kecamatan" => 7, "nama_desa" => "Penataban" ],

//     // Kecamatan Glagah (id_kecamatan = 8)
//     [ "id_kecamatan" => 8, "nama_desa" => "Bakungan" ],
//     [ "id_kecamatan" => 8, "nama_desa" => "Banjarasari" ],
//     [ "id_kecamatan" => 8, "nama_desa" => "Glagah" ],
//     [ "id_kecamatan" => 8, "nama_desa" => "Kampunganyar" ],
//     [ "id_kecamatan" => 8, "nama_desa" => "Kemiren" ],
//     [ "id_kecamatan" => 8, "nama_desa" => "Kenjo" ],
//     [ "id_kecamatan" => 8, "nama_desa" => "Olehsari" ],
//     [ "id_kecamatan" => 8, "nama_desa" => "Paspan" ],
//     [ "id_kecamatan" => 8, "nama_desa" => "Rejosari" ],
//     [ "id_kecamatan" => 8, "nama_desa" => "Tamansuruh" ],

//     // Kecamatan Glenmore (id_kecamatan = 9)
//     [ "id_kecamatan" => 9, "nama_desa" => "Bumiharjo" ],
//     [ "id_kecamatan" => 9, "nama_desa" => "Karangharjo" ],
//     [ "id_kecamatan" => 9, "nama_desa" => "Margomulyo" ],
//     [ "id_kecamatan" => 9, "nama_desa" => "Sepanjang" ],
//     [ "id_kecamatan" => 9, "nama_desa" => "Sumbergondo" ],
//     [ "id_kecamatan" => 9, "nama_desa" => "Tegalharjo" ],
//     [ "id_kecamatan" => 9, "nama_desa" => "Tulungrejo" ],

//     // Kecamatan Kabat (id_kecamatan = 10)
//     [ "id_kecamatan" => 10, "nama_desa" => "Bareng" ],
//     [ "id_kecamatan" => 10, "nama_desa" => "Benelan Lor" ],
//     [ "id_kecamatan" => 10, "nama_desa" => "Bunder" ],
//     [ "id_kecamatan" => 10, "nama_desa" => "Dadapan" ],
//     [ "id_kecamatan" => 10, "nama_desa" => "Gombolirang" ],
//     [ "id_kecamatan" => 10, "nama_desa" => "Kabat" ],
//     [ "id_kecamatan" => 10, "nama_desa" => "Kalirejo" ],
//     [ "id_kecamatan" => 10, "nama_desa" => "Kedayunan" ],
//     [ "id_kecamatan" => 10, "nama_desa" => "Labanasem" ],
//     [ "id_kecamatan" => 10, "nama_desa" => "Macan Putih" ],
//     [ "id_kecamatan" => 10, "nama_desa" => "Pakistaji" ],
//     [ "id_kecamatan" => 10, "nama_desa" => "Pendarungan" ],
//     [ "id_kecamatan" => 10, "nama_desa" => "Pondoknongko" ],
//     [ "id_kecamatan" => 10, "nama_desa" => "Tambong" ],

//     // Kecamatan Kalibaru (id_kecamatan = 11)
//     [ "id_kecamatan" => 11, "nama_desa" => "Banyuanyar" ],
//     [ "id_kecamatan" => 11, "nama_desa" => "Kajarharjo" ],
//     [ "id_kecamatan" => 11, "nama_desa" => "Kalibarukulon" ],
//     [ "id_kecamatan" => 11, "nama_desa" => "Kalibarumanis" ],
//     [ "id_kecamatan" => 11, "nama_desa" => "Kalibaruwetan" ],
//     [ "id_kecamatan" => 11, "nama_desa" => "Kebonrejo" ],

//     // Kecamatan Kalipuro (id_kecamatan = 12)
//     [ "id_kecamatan" => 12, "nama_desa" => "Bulusan" ],
//     [ "id_kecamatan" => 12, "nama_desa" => "Bulusari" ],
//     [ "id_kecamatan" => 12, "nama_desa" => "Gombengsari" ],
//     [ "id_kecamatan" => 12, "nama_desa" => "Kalipuro" ],
//     [ "id_kecamatan" => 12, "nama_desa" => "Kelir" ],
//     [ "id_kecamatan" => 12, "nama_desa" => "Ketapang" ],
//     [ "id_kecamatan" => 12, "nama_desa" => "Klatak" ],
//     [ "id_kecamatan" => 12, "nama_desa" => "Pesucen" ],
//     [ "id_kecamatan" => 12, "nama_desa" => "Telemung" ],

//     // Kecamatan Licin (id_kecamatan = 13)
//     [ "id_kecamatan" => 13, "nama_desa" => "Banjar" ],
//     [ "id_kecamatan" => 13, "nama_desa" => "Gumuk" ],
//     [ "id_kecamatan" => 13, "nama_desa" => "Jelun" ],
//     [ "id_kecamatan" => 13, "nama_desa" => "Kluncing" ],
//     [ "id_kecamatan" => 13, "nama_desa" => "Licin" ],
//     [ "id_kecamatan" => 13, "nama_desa" => "Pakel" ],
//     [ "id_kecamatan" => 13, "nama_desa" => "Segobang" ],
//     [ "id_kecamatan" => 13, "nama_desa" => "Tamansari" ],

//     // Kecamatan Muncar (id_kecamatan = 14)
//     [ "id_kecamatan" => 14, "nama_desa" => "Blambangan" ],
//     [ "id_kecamatan" => 14, "nama_desa" => "Kedungrejo" ],
//     [ "id_kecamatan" => 14, "nama_desa" => "Kedungringin" ],
//     [ "id_kecamatan" => 14, "nama_desa" => "Kumendung" ],
//     [ "id_kecamatan" => 14, "nama_desa" => "Sumberberas" ],
//     [ "id_kecamatan" => 14, "nama_desa" => "Sumbersewu" ],
//     [ "id_kecamatan" => 14, "nama_desa" => "Tambakrejo" ],
//     [ "id_kecamatan" => 14, "nama_desa" => "Tapanrejo" ],
//     [ "id_kecamatan" => 14, "nama_desa" => "Tembokrejo" ],
//     [ "id_kecamatan" => 14, "nama_desa" => "Wringinputih" ],

//     // Kecamatan Pesanggaran (id_kecamatan = 15)
//     [ "id_kecamatan" => 15, "nama_desa" => "Kandangan" ],
//     [ "id_kecamatan" => 15, "nama_desa" => "Pesanggaran" ],
//     [ "id_kecamatan" => 15, "nama_desa" => "Sarongan" ],
//     [ "id_kecamatan" => 15, "nama_desa" => "Sumberagung" ],
//     [ "id_kecamatan" => 15, "nama_desa" => "Sumbermulyo" ],

//     // Kecamatan Purwoharjo (id_kecamatan = 16)
//     [ "id_kecamatan" => 16, "nama_desa" => "Bulurejo" ],
//     [ "id_kecamatan" => 16, "nama_desa" => "Glagahagung" ],
//     [ "id_kecamatan" => 16, "nama_desa" => "Grajagan" ],
//     [ "id_kecamatan" => 16, "nama_desa" => "Karetan" ],
//     [ "id_kecamatan" => 16, "nama_desa" => "Kradenan" ],
//     [ "id_kecamatan" => 16, "nama_desa" => "Purwoharjo" ],
//     [ "id_kecamatan" => 16, "nama_desa" => "Sidorejo" ],
//     [ "id_kecamatan" => 16, "nama_desa" => "Sumberasri" ],

//     // Kecamatan Rogojampi (id_kecamatan = 17)
//     [ "id_kecamatan" => 17, "nama_desa" => "Aliyan" ],
//     [ "id_kecamatan" => 17, "nama_desa" => "Bubuk" ],
//     [ "id_kecamatan" => 17, "nama_desa" => "Gitik" ],
//     [ "id_kecamatan" => 17, "nama_desa" => "Gladag" ],
//     [ "id_kecamatan" => 17, "nama_desa" => "Karangbendo" ],
//     [ "id_kecamatan" => 17, "nama_desa" => "Kedaleman" ],
//     [ "id_kecamatan" => 17, "nama_desa" => "Lemahbangdewo" ],
//     [ "id_kecamatan" => 17, "nama_desa" => "Mangir" ],
//     [ "id_kecamatan" => 17, "nama_desa" => "Pengatigan" ],
//     [ "id_kecamatan" => 17, "nama_desa" => "Rogojampi" ],

//     // Kecamatan Sempu (id_kecamatan = 18)
//     [ "id_kecamatan" => 18, "nama_desa" => "Gendoh" ],
//     [ "id_kecamatan" => 18, "nama_desa" => "Jambewangi" ],
//     [ "id_kecamatan" => 18, "nama_desa" => "Karangsari" ],
//     [ "id_kecamatan" => 18, "nama_desa" => "Sempu" ],
//     [ "id_kecamatan" => 18, "nama_desa" => "Tegalarum" ],
//     [ "id_kecamatan" => 18, "nama_desa" => "Temuasri" ],
//     [ "id_kecamatan" => 18, "nama_desa" => "Temuguruh" ],

//     // Kecamatan Siliragung (id_kecamatan = 19)
//     [ "id_kecamatan" => 19, "nama_desa" => "Barurejo" ],
//     [ "id_kecamatan" => 19, "nama_desa" => "Buluagung" ],
//     [ "id_kecamatan" => 19, "nama_desa" => "Kesilir" ],
//     [ "id_kecamatan" => 19, "nama_desa" => "Seneporejo" ],
//     [ "id_kecamatan" => 19, "nama_desa" => "Siliragung" ],

//     // Kecamatan Singojuruh (id_kecamatan = 20)
//     [ "id_kecamatan" => 20, "nama_desa" => "Alasmalang" ],
//     [ "id_kecamatan" => 20, "nama_desa" => "Benelan Kidul" ],
//     [ "id_kecamatan" => 20, "nama_desa" => "Cantuk" ],
//     [ "id_kecamatan" => 20, "nama_desa" => "Gambor" ],
//     [ "id_kecamatan" => 20, "nama_desa" => "Gumirih" ],
//     [ "id_kecamatan" => 20, "nama_desa" => "Kemiri" ],
//     [ "id_kecamatan" => 20, "nama_desa" => "Lemahbangkulon" ],
//     [ "id_kecamatan" => 20, "nama_desa" => "Padang" ],
//     [ "id_kecamatan" => 20, "nama_desa" => "Singojuruh" ],
//     [ "id_kecamatan" => 20, "nama_desa" => "Singolatren" ],
//     [ "id_kecamatan" => 20, "nama_desa" => "Sumberbaru" ],

//     // Kecamatan Songgon (id_kecamatan = 21)
//     [ "id_kecamatan" => 21, "nama_desa" => "Balak" ],
//     [ "id_kecamatan" => 21, "nama_desa" => "Bayu" ],
//     [ "id_kecamatan" => 21, "nama_desa" => "Parangharjo" ],
//     [ "id_kecamatan" => 21, "nama_desa" => "Sragi" ],
//     [ "id_kecamatan" => 21, "nama_desa" => "Songgon" ],
//     [ "id_kecamatan" => 21, "nama_desa" => "Sumberarum" ],
//     [ "id_kecamatan" => 21, "nama_desa" => "Sumberbulu" ],
//     [ "id_kecamatan" => 21, "nama_desa" => "Sumberberas" ],
//     [ "id_kecamatan" => 21, "nama_desa" => "Sumberrejo" ],

//     // Kecamatan Srono (id_kecamatan = 22)
//     [ "id_kecamatan" => 22, "nama_desa" => "Bomo" ],
//     [ "id_kecamatan" => 22, "nama_desa" => "Kedungrejo" ],
//     [ "id_kecamatan" => 22, "nama_desa" => "Keseran" ],
//     [ "id_kecamatan" => 22, "nama_desa" => "Parijatah Kulon" ],
//     [ "id_kecamatan" => 22, "nama_desa" => "Parijatah Wetan" ],
//     [ "id_kecamatan" => 22, "nama_desa" => "Rejoagung" ],
//     [ "id_kecamatan" => 22, "nama_desa" => "Sukonatar" ],
//     [ "id_kecamatan" => 22, "nama_desa" => "Sukorejo" ],
//     [ "id_kecamatan" => 22, "nama_desa" => "Srono" ],
//     [ "id_kecamatan" => 22, "nama_desa" => "Wonosobo" ],

//     // Kecamatan Tegaldlimo (id_kecamatan = 23)
//     [ "id_kecamatan" => 23, "nama_desa" => "Kedungasri" ],
//     [ "id_kecamatan" => 23, "nama_desa" => "Kedunggebang" ],
//     [ "id_kecamatan" => 23, "nama_desa" => "Kedaleman" ],
//     [ "id_kecamatan" => 23, "nama_desa" => "Purwoagung" ],
//     [ "id_kecamatan" => 23, "nama_desa" => "Tegaldlimo" ],
//     [ "id_kecamatan" => 23, "nama_desa" => "Wringinputih" ],

//     // Kecamatan Tegalsari (id_kecamatan = 24)
//     [ "id_kecamatan" => 24, "nama_desa" => "Dasri" ],
//     [ "id_kecamatan" => 24, "nama_desa" => "Karangdoro" ],
//     [ "id_kecamatan" => 24, "nama_desa" => "Tegalsari" ],
//     [ "id_kecamatan" => 24, "nama_desa" => "Tegalrejo" ],
//     [ "id_kecamatan" => 24, "nama_desa" => "Wonorejo" ],

//     // Kecamatan Wongsorejo (id_kecamatan = 25)
//     [ "id_kecamatan" => 25, "nama_desa" => "Alasbuluh" ],
//     [ "id_kecamatan" => 25, "nama_desa" => "Alasrejo" ],
//     [ "id_kecamatan" => 25, "nama_desa" => "Bangurejo" ],
//     [ "id_kecamatan" => 25, "nama_desa" => "Bajulmati" ],
//     [ "id_kecamatan" => 25, "nama_desa" => "Bangsring" ],
//     [ "id_kecamatan" => 25, "nama_desa" => "Sidodadi" ],
//     [ "id_kecamatan" => 25, "nama_desa" => "Wongsorejo" ],
//     [ "id_kecamatan" => 25, "nama_desa" => "Watukebo" ],
// ];

// DB::table('desas')->insert($desas);