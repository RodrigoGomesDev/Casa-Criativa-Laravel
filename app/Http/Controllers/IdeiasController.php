<?php

namespace App\Http\Controllers;

use App\Ideia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class IdeiasController extends Controller
{
    private $repository;

    public function __construct(Ideia $ideia)
    {
        $this->repository = $ideia;
    }

    public function index() {
        $ideias = $this->repository->latest()->paginate(2);

        return view('home', [
            'ideias' => $ideias
        ]);
    }

    public function ideias() {
        $ideias = Ideia::all();

        return view('ideias', compact(['ideias']));
    }

    public function all_ideias() {
        $ideias = Ideia::all();

        return view('all_ideias', compact(['ideias']));
    }

    public function create(Request $request) {
        $this->repository->create($request->all());

        return redirect()->route('ideias');
    }
}
