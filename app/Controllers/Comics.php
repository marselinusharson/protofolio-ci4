<?php

namespace App\Controllers;

use App\Models\ComicModel;

class Comics extends BaseController

{
    protected $comicModel;
    public function __construct()
    {
        $this->comicModel = new ComicModel();
    }

    public function index()
    {
        // $comic = $this->comicModel->findAll();
        $data = [
            'title' => 'Zayy | Comic List',
            'comic' => $this->comicModel->getComic()
        ];

        return view('comic/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Comic Detail',
            'comic' => $this->comicModel->getComic($slug)
        ];

        return view('comic/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Komik',
            'validation' => \Config\Services::validation(),
        ];
        return view('comic/create', $data);
    }

    public function save()
    {
        //validasi input
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[comic.title]',
                'errors' => [
                    'required' => '{field} komik harus diisi',
                    'is_unique' => '{field} sudah ada'
                ]
            ],
            'penulis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} komik harus diisi',
                ]
            ],
            'penerbit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} komik harus diisi',
                ]
            ],
            'sampul' => [
                'rules' => 'uploaded[sampul]',
                'errors' => [
                    'uploaded' => 'Pilih gambar untuk sampul',
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            // dd($validation);
            return redirect()->to('/comic/create')->withInput()->with('validation', $validation);
        };
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->comicModel->save([
            'title' => $this->request->getVar('judul'),
            'slug' => $slug,
            'writter' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'cover' => $this->request->getVar('sampul'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasi ditambahkan');

        return redirect()->to('/comic');
    }

    public function delete($id)
    {
        $this->comicModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasi dihapus');
        return redirect()->to("/comic");
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Edit Data Komik',
            'validation' => \Config\Services::validation(),
            'comic' => $this->comicModel->getComic($slug)
        ];
        return view('comic/edit', $data);
    }

    public function update($id)
    {
        //cek judul
        $comicOld  = $this->comicModel->getComic($this->request->getVar('slug'));
        if ($comicOld['title'] == $this->request->getVar('judul')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[comic.title]';
        }

        $dataValidasi = [
            'judul' => [
                'rules' => $rule_judul,
                'errors' => [
                    'required' => '{field} komik harus diisi',
                    'is_unique' => '{field} sudah ada'
                ]
            ],
            'penulis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} komik harus diisi',
                ]
            ],
            'penerbit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} komik harus diisi',
                ]
            ],
            'sampul' => [
                'rules' => 'uploaded[sampul]',
                'errors' => [
                    'uploaded' => 'Pilih gambar untuk sampul',
                ]
            ],
        ];

        if (!$this->validate($dataValidasi)) {
            // return redirect()->to('/comic/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
            return redirect()->to('/comic/edit/' . $this->request->getVar('slug'))->withInput();
            $slug = url_title($this->request->getVar('judul'), '-', true);

            $simpanData = [
                'id' => $id,
                'title' => $this->request->getVar('judul'),
                'slug' => $slug,
                'writter' => $this->request->getVar('penulis'),
                'penerbit' => $this->request->getVar('penerbit'),
                'cover' => $this->request->getVar('sampul'),
            ];

            $this->comicModel->save($simpanData);
        }
        session()->setFlashdata('pesan', 'Data Berhasi diubah');
        return redirect()->to('/comic');
    }
}
