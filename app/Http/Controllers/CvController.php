<?php

namespace App\Http\Controllers;

use App\Http\Helpers\Uploader;
use App\Http\Requests\IndexRequest;
use App\Http\Requests\PartRequest;
use Illuminate\Support\Facades\Cache;

class CvController extends Controller
{
    protected $firstPart = 'firstPart';
    protected $secondPart = 'secondPart';

    public function index()
    {
        $data = [];

        if (Cache::has($this->firstPart)) {
            $data = Cache::get($this->firstPart);
        }

        return view('index', [
            'data' => $data
        ]);
    }

    public function store(IndexRequest $request)
    {
        $data = $request->validated();

        if (isset($data['image'])) {
            $data['image'] = Uploader::uploadImage($data['image']);
        }

        if (Cache::has($this->firstPart)) {
            Cache::forget($this->firstPart);
        }

        Cache::put($this->firstPart, $data, 60*60*6);

        return redirect()
            ->route('part');
    }

    public function part()
    {
        if (!Cache::has($this->firstPart)) {
            return redirect()
                ->route('index');
        }

        return view('part');
    }

    public function storePart(PartRequest $request)
    {
        $data = $request->validated();

        dd($data);
    }

}
