<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexRequest;
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

        if (Cache::has($this->firstPart)) {
            Cache::forget($this->firstPart);
        }

        Cache::put($this->firstPart, $data, 60*60*6); // 10 Minutes

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

}
