<?php

namespace App\Http\Controllers;

class BukuController extends Controller
{
    private function dataBuku()
    {
        return [
            [
                'id' => 1,
                'judul' => 'Laskar Pelangi',
                'penulis' => 'Andrea Hirata',
                'kategori' => 'Novel',
                'tahun' => 2005,
                'gambar' => 'laskar-pelangi.jpg',
                'deskripsi' => 'Kisah sepuluh anak Belitung yang berjuang meraih pendidikan dan cita-cita.'
            ],
            [
                'id' => 2,
                'judul' => 'Bumi',
                'penulis' => 'Tere Liye',
                'kategori' => 'Fantasi',
                'tahun' => 2014,
                'gambar' => 'bumi.jpg',
                'deskripsi' => 'Petualangan Raib, Seli, dan Ali menjelajahi dunia paralel.'
            ],
            [
                'id' => 3,
                'judul' => 'Negeri 5 Menara',
                'penulis' => 'Ahmad Fuadi',
                'kategori' => 'Inspirasi',
                'tahun' => 2009,
                'gambar' => 'negeri-5-menara.jpg',
                'deskripsi' => 'Kisah persahabatan para santri yang berjuang meraih impian.'
            ],
            [
                'id' => 4,
                'judul' => 'Hujan',
                'penulis' => 'Tere Liye',
                'kategori' => 'Fiksi',
                'tahun' => 2016,
                'gambar' => 'hujan.jpg',
                'deskripsi' => 'Kisah Lail tentang kehilangan, persahabatan, cinta, dan masa depan.'
            ],
            [
                'id' => 5,
                'judul' => 'Sang Pemimpi',
                'penulis' => 'Andrea Hirata',
                'kategori' => 'Novel',
                'tahun' => 2006,
                'gambar' => 'sang-pemimpi.jpg',
                'deskripsi' => 'Perjuangan Ikal dan Arai dalam mengejar pendidikan dan impian.'
            ],
            [
                'id' => 6,
                'judul' => 'Dilan 1990',
                'penulis' => 'Pidi Baiq',
                'kategori' => 'Romansa',
                'tahun' => 2014,
                'gambar' => 'dilan-1990.jpg',
                'deskripsi' => 'Kisah Dilan dan Milea yang berlatar kehidupan remaja di Bandung.'
            ],
        ];
    }

    public function index()
    {
        $buku = $this->dataBuku();

        return view('buku', compact('buku'));
    }

    public function detail($id)
    {
        $buku = $this->dataBuku();

        foreach ($buku as $item) {
            if ($item['id'] == $id) {
                return view('detail-buku', ['buku' => $item]);
            }
        }

        abort(404);
    }
}
