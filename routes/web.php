<?php
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("home", [
        "title" => "Homepage",
        "kecamatan" => [
            ["id_kecamatan" => "1", "nama" => "Bangorejo"],
            ["id_kecamatan" => "2", "nama" => "Banyuwangi"],
            ["id_kecamatan" => "3", "nama" => "Blimbingsari"],
            ["id_kecamatan" => "4", "nama" => "Cluring"],
            ["id_kecamatan" => "5", "nama" => "Gambiran"],
            ["id_kecamatan" => "6", "nama" => "Genteng"],
            ["id_kecamatan" => "7", "nama" => "Giri"],
            ["id_kecamatan" => "8", "nama" => "Glagah"],
            ["id_kecamatan" => "9", "nama" => "Glenmore"],
            ["id_kecamatan" => "10", "nama" => "Kabat"],
            ["id_kecamatan" => "11", "nama" => "Kalibaru"],
            ["id_kecamatan" => "12", "nama" => "Kalipuro"],
            ["id_kecamatan" => "13", "nama" => "Licin"],
            ["id_kecamatan" => "14", "nama" => "Muncar"],
            ["id_kecamatan" => "15", "nama" => "Pesanggaran"],
            ["id_kecamatan" => "16", "nama" => "Purwoharjo"],
            ["id_kecamatan" => "17", "nama" => "Rogojampi"],
            ["id_kecamatan" => "18", "nama" => "Sempu"],
            ["id_kecamatan" => "19", "nama" => "Siliragung"],
            ["id_kecamatan" => "20", "nama" => "Singojuruh"],
            ["id_kecamatan" => "21", "nama" => "Songgon"],
            ["id_kecamatan" => "22", "nama" => "Srono"],
            ["id_kecamatan" => "23", "nama" => "Tegaldlimo"],
            ["id_kecamatan" => "24", "nama" => "Tegalsari"],
            ["id_kecamatan" => "25", "nama" => "Wongsorejo"],
        ],
        "desa" => [
            // Kecamatan Bangorejo (id_kecamatan = 1)
            [
                "id_desa" => "1",
                "id_kecamatan" => "1",
                "nama_desa" => "Bangorejo",
            ],
            [
                "id_desa" => "2",
                "id_kecamatan" => "1",
                "nama_desa" => "Kebondalem",
            ],
            [
                "id_desa" => "3",
                "id_kecamatan" => "1",
                "nama_desa" => "Ringintelu",
            ],
            [
                "id_desa" => "4",
                "id_kecamatan" => "1",
                "nama_desa" => "Sambimulyo",
            ],
            [
                "id_desa" => "5",
                "id_kecamatan" => "1",
                "nama_desa" => "Sambirejo",
            ],
            [
                "id_desa" => "6",
                "id_kecamatan" => "1",
                "nama_desa" => "Sukorejo",
            ],
            [
                "id_desa" => "7",
                "id_kecamatan" => "1",
                "nama_desa" => "Temurejo",
            ],

            // Kecamatan Banyuwangi (id_kecamatan = 2)
            [
                "id_desa" => "8",
                "id_kecamatan" => "2",
                "nama_desa" => "Kampungmandar",
            ],
            [
                "id_desa" => "9",
                "id_kecamatan" => "2",
                "nama_desa" => "Kampungmelayu",
            ],
            [
                "id_desa" => "10",
                "id_kecamatan" => "2",
                "nama_desa" => "Karangrejo",
            ],
            [
                "id_desa" => "11",
                "id_kecamatan" => "2",
                "nama_desa" => "Kebalenan",
            ],
            [
                "id_desa" => "12",
                "id_kecamatan" => "2",
                "nama_desa" => "Kepatihan",
            ],
            [
                "id_desa" => "13",
                "id_kecamatan" => "2",
                "nama_desa" => "Kertosari",
            ],
            ["id_desa" => "14", "id_kecamatan" => "2", "nama_desa" => "Lateng"],
            ["id_desa" => "15", "id_kecamatan" => "2", "nama_desa" => "Pakis"],
            [
                "id_desa" => "16",
                "id_kecamatan" => "2",
                "nama_desa" => "Panderejo",
            ],
            [
                "id_desa" => "17",
                "id_kecamatan" => "2",
                "nama_desa" => "Penganjuran",
            ],
            [
                "id_desa" => "18",
                "id_kecamatan" => "2",
                "nama_desa" => "Pengantigan",
            ],
            [
                "id_desa" => "19",
                "id_kecamatan" => "2",
                "nama_desa" => "Singonegaran",
            ],
            [
                "id_desa" => "20",
                "id_kecamatan" => "2",
                "nama_desa" => "Singotrunan",
            ],
            ["id_desa" => "21", "id_kecamatan" => "2", "nama_desa" => "Sobo"],
            [
                "id_desa" => "22",
                "id_kecamatan" => "2",
                "nama_desa" => "Sumberrejo",
            ],
            [
                "id_desa" => "23",
                "id_kecamatan" => "2",
                "nama_desa" => "Tamanbaru",
            ],
            [
                "id_desa" => "24",
                "id_kecamatan" => "2",
                "nama_desa" => "Temenggungan",
            ],
            [
                "id_desa" => "25",
                "id_kecamatan" => "2",
                "nama_desa" => "Tukangkayu",
            ],

            // Kecamatan Blimbingsari (id_kecamatan = 3)
            ["id_desa" => "26", "id_kecamatan" => "3", "nama_desa" => "Badean"],
            [
                "id_desa" => "27",
                "id_kecamatan" => "3",
                "nama_desa" => "Blimbingsari",
            ],
            ["id_desa" => "28", "id_kecamatan" => "3", "nama_desa" => "Bomo"],
            [
                "id_desa" => "29",
                "id_kecamatan" => "3",
                "nama_desa" => "Gintangan",
            ],
            [
                "id_desa" => "30",
                "id_kecamatan" => "3",
                "nama_desa" => "Kaligung",
            ],
            ["id_desa" => "31", "id_kecamatan" => "3", "nama_desa" => "Kaotan"],
            [
                "id_desa" => "32",
                "id_kecamatan" => "3",
                "nama_desa" => "Karangrejo",
            ],
            [
                "id_desa" => "33",
                "id_kecamatan" => "3",
                "nama_desa" => "Patoman",
            ],
            [
                "id_desa" => "34",
                "id_kecamatan" => "3",
                "nama_desa" => "Sukojati",
            ],
            [
                "id_desa" => "35",
                "id_kecamatan" => "3",
                "nama_desa" => "Watukebo",
            ],

            // Kecamatan Cluring (id_kecamatan = 4)
            [
                "id_desa" => "36",
                "id_kecamatan" => "4",
                "nama_desa" => "Benculuk",
            ],
            [
                "id_desa" => "37",
                "id_kecamatan" => "4",
                "nama_desa" => "Cluring",
            ],
            [
                "id_desa" => "38",
                "id_kecamatan" => "4",
                "nama_desa" => "Kaliploso",
            ],
            [
                "id_desa" => "39",
                "id_kecamatan" => "4",
                "nama_desa" => "Plampangrejo",
            ],
            [
                "id_desa" => "40",
                "id_kecamatan" => "4",
                "nama_desa" => "Sarimulyo",
            ],
            [
                "id_desa" => "41",
                "id_kecamatan" => "4",
                "nama_desa" => "Sembulung",
            ],
            ["id_desa" => "42", "id_kecamatan" => "4", "nama_desa" => "Sraten"],
            [
                "id_desa" => "43",
                "id_kecamatan" => "4",
                "nama_desa" => "Tamanagung",
            ],
            ["id_desa" => "44", "id_kecamatan" => "4", "nama_desa" => "Tampo"],

            // Kecamatan Gambiran (id_kecamatan = 5)
            [
                "id_desa" => "45",
                "id_kecamatan" => "5",
                "nama_desa" => "Gambiran",
            ],
            ["id_desa" => "46", "id_kecamatan" => "5", "nama_desa" => "Jajag"],
            [
                "id_desa" => "47",
                "id_kecamatan" => "5",
                "nama_desa" => "Purwodadi",
            ],
            [
                "id_desa" => "48",
                "id_kecamatan" => "5",
                "nama_desa" => "Wringinagung",
            ],
            [
                "id_desa" => "49",
                "id_kecamatan" => "5",
                "nama_desa" => "Wringinrejo",
            ],
            [
                "id_desa" => "50",
                "id_kecamatan" => "5",
                "nama_desa" => "Yosomulyo",
            ],

            // Kecamatan Genteng (id_kecamatan = 6)
            [
                "id_desa" => "51",
                "id_kecamatan" => "6",
                "nama_desa" => "Genteng Kulon",
            ],
            [
                "id_desa" => "52",
                "id_kecamatan" => "6",
                "nama_desa" => "Genteng Wetan",
            ],
            [
                "id_desa" => "53",
                "id_kecamatan" => "6",
                "nama_desa" => "Kaligondo",
            ],
            [
                "id_desa" => "54",
                "id_kecamatan" => "6",
                "nama_desa" => "Kembiritan",
            ],
            ["id_desa" => "55", "id_kecamatan" => "6", "nama_desa" => "Setail"],

            // Kecamatan Giri (id_kecamatan = 7)
            [
                "id_desa" => "56",
                "id_kecamatan" => "7",
                "nama_desa" => "Boyolangu",
            ],
            ["id_desa" => "57", "id_kecamatan" => "7", "nama_desa" => "Giri"],
            ["id_desa" => "58", "id_kecamatan" => "7", "nama_desa" => "Grogol"],
            [
                "id_desa" => "59",
                "id_kecamatan" => "7",
                "nama_desa" => "Jambesari",
            ],
            [
                "id_desa" => "60",
                "id_kecamatan" => "7",
                "nama_desa" => "Mojopanggung",
            ],
            [
                "id_desa" => "61",
                "id_kecamatan" => "7",
                "nama_desa" => "Penataban",
            ],

            // Kecamatan Glagah (id_kecamatan = 8)
            [
                "id_desa" => "62",
                "id_kecamatan" => "8",
                "nama_desa" => "Bakungan",
            ],
            [
                "id_desa" => "63",
                "id_kecamatan" => "8",
                "nama_desa" => "Banjarasari",
            ],
            ["id_desa" => "64", "id_kecamatan" => "8", "nama_desa" => "Glagah"],
            [
                "id_desa" => "65",
                "id_kecamatan" => "8",
                "nama_desa" => "Kampunganyar",
            ],
            [
                "id_desa" => "66",
                "id_kecamatan" => "8",
                "nama_desa" => "Kemiren",
            ],
            ["id_desa" => "67", "id_kecamatan" => "8", "nama_desa" => "Kenjo"],
            [
                "id_desa" => "68",
                "id_kecamatan" => "8",
                "nama_desa" => "Olehsari",
            ],
            ["id_desa" => "69", "id_kecamatan" => "8", "nama_desa" => "Paspan"],
            [
                "id_desa" => "70",
                "id_kecamatan" => "8",
                "nama_desa" => "Rejosari",
            ],
            [
                "id_desa" => "71",
                "id_kecamatan" => "8",
                "nama_desa" => "Tamansuruh",
            ],

            // Kecamatan Glenmore (id_kecamatan = 9)
            [
                "id_desa" => "72",
                "id_kecamatan" => "9",
                "nama_desa" => "Bumiharjo",
            ],
            [
                "id_desa" => "73",
                "id_kecamatan" => "9",
                "nama_desa" => "Karangharjo",
            ],
            [
                "id_desa" => "74",
                "id_kecamatan" => "9",
                "nama_desa" => "Margomulyo",
            ],
            [
                "id_desa" => "75",
                "id_kecamatan" => "9",
                "nama_desa" => "Sepanjang",
            ],
            [
                "id_desa" => "76",
                "id_kecamatan" => "9",
                "nama_desa" => "Sumbergondo",
            ],
            [
                "id_desa" => "77",
                "id_kecamatan" => "9",
                "nama_desa" => "Tegalharjo",
            ],
            [
                "id_desa" => "78",
                "id_kecamatan" => "9",
                "nama_desa" => "Tulungrejo",
            ],

            // Kecamatan Kabat (id_kecamatan = 10)
            [
                "id_desa" => "79",
                "id_kecamatan" => "10",
                "nama_desa" => "Bareng",
            ],
            [
                "id_desa" => "80",
                "id_kecamatan" => "10",
                "nama_desa" => "Benelan Lor",
            ],
            [
                "id_desa" => "81",
                "id_kecamatan" => "10",
                "nama_desa" => "Bunder",
            ],
            [
                "id_desa" => "82",
                "id_kecamatan" => "10",
                "nama_desa" => "Dadapan",
            ],
            [
                "id_desa" => "83",
                "id_kecamatan" => "10",
                "nama_desa" => "Gombolirang",
            ],
            ["id_desa" => "84", "id_kecamatan" => "10", "nama_desa" => "Kabat"],
            [
                "id_desa" => "85",
                "id_kecamatan" => "10",
                "nama_desa" => "Kalirejo",
            ],
            [
                "id_desa" => "86",
                "id_kecamatan" => "10",
                "nama_desa" => "Kedayunan",
            ],
            [
                "id_desa" => "87",
                "id_kecamatan" => "10",
                "nama_desa" => "Labanasem",
            ],
            [
                "id_desa" => "88",
                "id_kecamatan" => "10",
                "nama_desa" => "Macan Putih",
            ],
            [
                "id_desa" => "89",
                "id_kecamatan" => "10",
                "nama_desa" => "Pakistaji",
            ],
            [
                "id_desa" => "90",
                "id_kecamatan" => "10",
                "nama_desa" => "Pendarungan",
            ],
            [
                "id_desa" => "91",
                "id_kecamatan" => "10",
                "nama_desa" => "Pondoknongko",
            ],
            [
                "id_desa" => "92",
                "id_kecamatan" => "10",
                "nama_desa" => "Tambong",
            ],

            // Kecamatan Kalibaru (id_kecamatan = 11)
            [
                "id_desa" => "93",
                "id_kecamatan" => "11",
                "nama_desa" => "Banyuanyar",
            ],
            [
                "id_desa" => "94",
                "id_kecamatan" => "11",
                "nama_desa" => "Kajarharjo",
            ],
            [
                "id_desa" => "95",
                "id_kecamatan" => "11",
                "nama_desa" => "Kalibarukulon",
            ],
            [
                "id_desa" => "96",
                "id_kecamatan" => "11",
                "nama_desa" => "Kalibarumanis",
            ],
            [
                "id_desa" => "97",
                "id_kecamatan" => "11",
                "nama_desa" => "Kalibaruwetan",
            ],
            [
                "id_desa" => "98",
                "id_kecamatan" => "11",
                "nama_desa" => "Kebonrejo",
            ],

            // Kecamatan Kalipuro (id_kecamatan = 12)
            [
                "id_desa" => "99",
                "id_kecamatan" => "12",
                "nama_desa" => "Bulusan",
            ],
            [
                "id_desa" => "100",
                "id_kecamatan" => "12",
                "nama_desa" => "Bulusari",
            ],
            [
                "id_desa" => "101",
                "id_kecamatan" => "12",
                "nama_desa" => "Gombengsari",
            ],
            [
                "id_desa" => "102",
                "id_kecamatan" => "12",
                "nama_desa" => "Kalipuro",
            ],
            [
                "id_desa" => "103",
                "id_kecamatan" => "12",
                "nama_desa" => "Kelir",
            ],
            [
                "id_desa" => "104",
                "id_kecamatan" => "12",
                "nama_desa" => "Ketapang",
            ],
            [
                "id_desa" => "105",
                "id_kecamatan" => "12",
                "nama_desa" => "Klatak",
            ],
            [
                "id_desa" => "106",
                "id_kecamatan" => "12",
                "nama_desa" => "Pesucen",
            ],
            [
                "id_desa" => "107",
                "id_kecamatan" => "12",
                "nama_desa" => "Telemung",
            ],

            // Kecamatan Licin (id_kecamatan = 13)
            [
                "id_desa" => "108",
                "id_kecamatan" => "13",
                "nama_desa" => "Banjar",
            ],
            [
                "id_desa" => "109",
                "id_kecamatan" => "13",
                "nama_desa" => "Gumuk",
            ],
            [
                "id_desa" => "110",
                "id_kecamatan" => "13",
                "nama_desa" => "Jelun",
            ],
            [
                "id_desa" => "111",
                "id_kecamatan" => "13",
                "nama_desa" => "Kluncing",
            ],
            [
                "id_desa" => "112",
                "id_kecamatan" => "13",
                "nama_desa" => "Licin",
            ],
            [
                "id_desa" => "113",
                "id_kecamatan" => "13",
                "nama_desa" => "Pakel",
            ],
            [
                "id_desa" => "114",
                "id_kecamatan" => "13",
                "nama_desa" => "Segobang",
            ],
            [
                "id_desa" => "115",
                "id_kecamatan" => "13",
                "nama_desa" => "Tamansari",
            ],

            // Kecamatan Muncar (id_kecamatan = 14)
            [
                "id_desa" => "116",
                "id_kecamatan" => "14",
                "nama_desa" => "Blambangan",
            ],
            [
                "id_desa" => "117",
                "id_kecamatan" => "14",
                "nama_desa" => "Kedungrejo",
            ],
            [
                "id_desa" => "118",
                "id_kecamatan" => "14",
                "nama_desa" => "Kedungringin",
            ],
            [
                "id_desa" => "119",
                "id_kecamatan" => "14",
                "nama_desa" => "Kumendung",
            ],
            [
                "id_desa" => "120",
                "id_kecamatan" => "14",
                "nama_desa" => "Sumberberas",
            ],
            [
                "id_desa" => "121",
                "id_kecamatan" => "14",
                "nama_desa" => "Sumbersewu",
            ],
            [
                "id_desa" => "122",
                "id_kecamatan" => "14",
                "nama_desa" => "Tambakrejo",
            ],
            [
                "id_desa" => "123",
                "id_kecamatan" => "14",
                "nama_desa" => "Tapanrejo",
            ],
            [
                "id_desa" => "124",
                "id_kecamatan" => "14",
                "nama_desa" => "Tembokrejo",
            ],
            [
                "id_desa" => "125",
                "id_kecamatan" => "14",
                "nama_desa" => "Wringinputih",
            ],

            // Kecamatan Pesanggaran (id_kecamatan = 15)
            [
                "id_desa" => "126",
                "id_kecamatan" => "15",
                "nama_desa" => "Kandangan",
            ],
            [
                "id_desa" => "127",
                "id_kecamatan" => "15",
                "nama_desa" => "Pesanggaran",
            ],
            [
                "id_desa" => "128",
                "id_kecamatan" => "15",
                "nama_desa" => "Sarongan",
            ],
            [
                "id_desa" => "129",
                "id_kecamatan" => "15",
                "nama_desa" => "Sumberagung",
            ],
            [
                "id_desa" => "130",
                "id_kecamatan" => "15",
                "nama_desa" => "Sumbermulyo",
            ],

            // Kecamatan Purwoharjo (id_kecamatan = 16)
            [
                "id_desa" => "131",
                "id_kecamatan" => "16",
                "nama_desa" => "Bulurejo",
            ],
            [
                "id_desa" => "132",
                "id_kecamatan" => "16",
                "nama_desa" => "Glagahagung",
            ],
            [
                "id_desa" => "133",
                "id_kecamatan" => "16",
                "nama_desa" => "Grajagan",
            ],
            [
                "id_desa" => "134",
                "id_kecamatan" => "16",
                "nama_desa" => "Karetan",
            ],
            [
                "id_desa" => "135",
                "id_kecamatan" => "16",
                "nama_desa" => "Kradenan",
            ],
            [
                "id_desa" => "136",
                "id_kecamatan" => "16",
                "nama_desa" => "Purwoharjo",
            ],
            [
                "id_desa" => "137",
                "id_kecamatan" => "16",
                "nama_desa" => "Sidorejo",
            ],
            [
                "id_desa" => "138",
                "id_kecamatan" => "16",
                "nama_desa" => "Sumberasri",
            ],

            // Kecamatan Rogojampi (id_kecamatan = 17)
            [
                "id_desa" => "139",
                "id_kecamatan" => "17",
                "nama_desa" => "Aliyan",
            ],
            [
                "id_desa" => "140",
                "id_kecamatan" => "17",
                "nama_desa" => "Bubuk",
            ],
            [
                "id_desa" => "141",
                "id_kecamatan" => "17",
                "nama_desa" => "Gitik",
            ],
            [
                "id_desa" => "142",
                "id_kecamatan" => "17",
                "nama_desa" => "Gladag",
            ],
            [
                "id_desa" => "143",
                "id_kecamatan" => "17",
                "nama_desa" => "Karangbendo",
            ],
            [
                "id_desa" => "144",
                "id_kecamatan" => "17",
                "nama_desa" => "Kedaleman",
            ],
            [
                "id_desa" => "145",
                "id_kecamatan" => "17",
                "nama_desa" => "Lemahbangdewo",
            ],
            [
                "id_desa" => "146",
                "id_kecamatan" => "17",
                "nama_desa" => "Mangir",
            ],
            [
                "id_desa" => "147",
                "id_kecamatan" => "17",
                "nama_desa" => "Pengatigan",
            ],
            [
                "id_desa" => "148",
                "id_kecamatan" => "17",
                "nama_desa" => "Rogojampi",
            ],

            // Kecamatan Sempu (id_kecamatan = 18)
            [
                "id_desa" => "149",
                "id_kecamatan" => "18",
                "nama_desa" => "Gendoh",
            ],
            [
                "id_desa" => "150",
                "id_kecamatan" => "18",
                "nama_desa" => "Jambewangi",
            ],
            [
                "id_desa" => "151",
                "id_kecamatan" => "18",
                "nama_desa" => "Karangsari",
            ],
            [
                "id_desa" => "152",
                "id_kecamatan" => "18",
                "nama_desa" => "Sempu",
            ],
            [
                "id_desa" => "153",
                "id_kecamatan" => "18",
                "nama_desa" => "Tegalarum",
            ],
            [
                "id_desa" => "154",
                "id_kecamatan" => "18",
                "nama_desa" => "Temuasri",
            ],
            [
                "id_desa" => "155",
                "id_kecamatan" => "18",
                "nama_desa" => "Temuguruh",
            ],

            // Kecamatan Siliragung (id_kecamatan = 19)
            [
                "id_desa" => "156",
                "id_kecamatan" => "19",
                "nama_desa" => "Barurejo",
            ],
            [
                "id_desa" => "157",
                "id_kecamatan" => "19",
                "nama_desa" => "Buluagung",
            ],
            [
                "id_desa" => "158",
                "id_kecamatan" => "19",
                "nama_desa" => "Kesilir",
            ],
            [
                "id_desa" => "159",
                "id_kecamatan" => "19",
                "nama_desa" => "Seneporejo",
            ],
            [
                "id_desa" => "160",
                "id_kecamatan" => "19",
                "nama_desa" => "Siliragung",
            ],

            // Kecamatan Singojuruh (id_kecamatan = 20)
            [
                "id_desa" => "161",
                "id_kecamatan" => "20",
                "nama_desa" => "Alasmalang",
            ],
            [
                "id_desa" => "162",
                "id_kecamatan" => "20",
                "nama_desa" => "Benelan Kidul",
            ],
            [
                "id_desa" => "163",
                "id_kecamatan" => "20",
                "nama_desa" => "Cantuk",
            ],
            [
                "id_desa" => "164",
                "id_kecamatan" => "20",
                "nama_desa" => "Gambor",
            ],
            [
                "id_desa" => "165",
                "id_kecamatan" => "20",
                "nama_desa" => "Gumirih",
            ],
            [
                "id_desa" => "166",
                "id_kecamatan" => "20",
                "nama_desa" => "Kemiri",
            ],
            [
                "id_desa" => "167",
                "id_kecamatan" => "20",
                "nama_desa" => "Lemahbangkulon",
            ],
            [
                "id_desa" => "168",
                "id_kecamatan" => "20",
                "nama_desa" => "Padang",
            ],
            [
                "id_desa" => "169",
                "id_kecamatan" => "20",
                "nama_desa" => "Singojuruh",
            ],
            [
                "id_desa" => "170",
                "id_kecamatan" => "20",
                "nama_desa" => "Singolatren",
            ],
            [
                "id_desa" => "171",
                "id_kecamatan" => "20",
                "nama_desa" => "Sumberbaru",
            ],

            // Kecamatan Songgon (id_kecamatan = 21)
            [
                "id_desa" => "172",
                "id_kecamatan" => "21",
                "nama_desa" => "Balak",
            ],
            ["id_desa" => "173", "id_kecamatan" => "21", "nama_desa" => "Bayu"],
            [
                "id_desa" => "174",
                "id_kecamatan" => "21",
                "nama_desa" => "Parangharjo",
            ],
            [
                "id_desa" => "175",
                "id_kecamatan" => "21",
                "nama_desa" => "Sragi",
            ],
            [
                "id_desa" => "176",
                "id_kecamatan" => "21",
                "nama_desa" => "Songgon",
            ],
            [
                "id_desa" => "177",
                "id_kecamatan" => "21",
                "nama_desa" => "Sumberarum",
            ],
            [
                "id_desa" => "178",
                "id_kecamatan" => "21",
                "nama_desa" => "Sumberbulu",
            ],
            [
                "id_desa" => "179",
                "id_kecamatan" => "21",
                "nama_desa" => "Sumberberas",
            ],
            [
                "id_desa" => "180",
                "id_kecamatan" => "21",
                "nama_desa" => "Sumberrejo",
            ],

            // Kecamatan Srono (id_kecamatan = 22)
            ["id_desa" => "181", "id_kecamatan" => "22", "nama_desa" => "Bomo"],
            [
                "id_desa" => "182",
                "id_kecamatan" => "22",
                "nama_desa" => "Kedungrejo",
            ],
            [
                "id_desa" => "183",
                "id_kecamatan" => "22",
                "nama_desa" => "Keseran",
            ],
            [
                "id_desa" => "184",
                "id_kecamatan" => "22",
                "nama_desa" => "Parijatah Kulon",
            ],
            [
                "id_desa" => "185",
                "id_kecamatan" => "22",
                "nama_desa" => "Parijatah Wetan",
            ],
            [
                "id_desa" => "186",
                "id_kecamatan" => "22",
                "nama_desa" => "Rejoagung",
            ],
            [
                "id_desa" => "187",
                "id_kecamatan" => "22",
                "nama_desa" => "Sukonatar",
            ],
            [
                "id_desa" => "188",
                "id_kecamatan" => "22",
                "nama_desa" => "Sukorejo",
            ],
            [
                "id_desa" => "189",
                "id_kecamatan" => "22",
                "nama_desa" => "Srono",
            ],
            [
                "id_desa" => "190",
                "id_kecamatan" => "22",
                "nama_desa" => "Wonosobo",
            ],

            // Kecamatan Tegaldlimo (id_kecamatan = 23)
            [
                "id_desa" => "191",
                "id_kecamatan" => "23",
                "nama_desa" => "Kedungasri",
            ],
            [
                "id_desa" => "192",
                "id_kecamatan" => "23",
                "nama_desa" => "Kedunggebang",
            ],
            [
                "id_desa" => "193",
                "id_kecamatan" => "23",
                "nama_desa" => "Kedaleman",
            ],
            [
                "id_desa" => "194",
                "id_kecamatan" => "23",
                "nama_desa" => "Purwoagung",
            ],
            [
                "id_desa" => "195",
                "id_kecamatan" => "23",
                "nama_desa" => "Tegaldlimo",
            ],
            [
                "id_desa" => "196",
                "id_kecamatan" => "23",
                "nama_desa" => "Wringinputih",
            ],

            // Kecamatan Tegalsari (id_kecamatan = 24)
            [
                "id_desa" => "197",
                "id_kecamatan" => "24",
                "nama_desa" => "Dasri",
            ],
            [
                "id_desa" => "198",
                "id_kecamatan" => "24",
                "nama_desa" => "Karangdoro",
            ],
            [
                "id_desa" => "199",
                "id_kecamatan" => "24",
                "nama_desa" => "Tegalsari",
            ],
            [
                "id_desa" => "200",
                "id_kecamatan" => "24",
                "nama_desa" => "Tegalrejo",
            ],
            [
                "id_desa" => "201",
                "id_kecamatan" => "24",
                "nama_desa" => "Wonorejo",
            ],

            // Kecamatan Wongsorejo (id_kecamatan = 25)
            [
                "id_desa" => "202",
                "id_kecamatan" => "25",
                "nama_desa" => "Alasbuluh",
            ],
            [
                "id_desa" => "203",
                "id_kecamatan" => "25",
                "nama_desa" => "Alasrejo",
            ],
            [
                "id_desa" => "204",
                "id_kecamatan" => "25",
                "nama_desa" => "Bangurejo",
            ],
            [
                "id_desa" => "205",
                "id_kecamatan" => "25",
                "nama_desa" => "Bajulmati",
            ],
            [
                "id_desa" => "206",
                "id_kecamatan" => "25",
                "nama_desa" => "Bangsring",
            ],
            [
                "id_desa" => "207",
                "id_kecamatan" => "25",
                "nama_desa" => "Sidodadi",
            ],
            [
                "id_desa" => "208",
                "id_kecamatan" => "25",
                "nama_desa" => "Wongsorejo",
            ],
            [
                "id_desa" => "209",
                "id_kecamatan" => "25",
                "nama_desa" => "Watukebo",
            ],
        ],
    ]);
});

Route::get("/desa/{id}", function ($id) {
    $daftar_tps = [
        [
            "id_tps" => 1,
            "id_desa" => 1,
            "kode" => "TPS001",
            "lokasi_deskripsi" => "Balai Desa Karangrejo",
        ],
        [
            "id_tps" => 2,
            "id_desa" => 1,
            "kode" => "TPS002",
            "lokasi_deskripsi" => "SDN Karangrejo 1",
        ],
        [
            "id_tps" => 3,
            "id_desa" => 1,
            "kode" => "TPS003",
            "lokasi_deskripsi" => "Balai Dusun Krajan",
        ],
        [
            "id_tps" => 4,
            "id_desa" => 1,
            "kode" => "TPS004",
            "lokasi_deskripsi" => "Lapangan Desa Sumberagung",
        ],
        [
            "id_tps" => 5,
            "id_desa" => 1,
            "kode" => "TPS005",
            "lokasi_deskripsi" => "Rumah Ketua RT 05",
        ],
    ];

    $tps = array_filter($daftar_tps, function ($item) use ($id) {
        return $item["id_desa"] == $id;
    });

    return view("desa", [
        "nama_desa" => $tps[0]["id_desa"],
        "daftar_tps" => $tps,
    ]);
});

Route::get("/upload", function () {
    return view("upload", ["title" => "Upload", "name" => "KPU"]);
});
