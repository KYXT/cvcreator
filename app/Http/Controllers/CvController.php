<?php

namespace App\Http\Controllers;

use App\Http\Helpers\Uploader;
use App\Http\Requests\IndexRequest;
use App\Http\Requests\PartRequest;
use Illuminate\Support\Facades\Cache;
use niklasravnsborg\LaravelPdf\Facades\Pdf;

class CvController extends Controller
{
    protected $firstPart = 'firstPart';
    protected $secondPart = 'secondPart';

    /**
     * @return \Illuminate\Contracts\View\View
     */
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

    /**
     * @param IndexRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(IndexRequest $request)
    {
        $data = $request->validated();

        if (isset($data['image'])) {
            $data['image'] = Uploader::uploadImage($data['image']);
        }

        if (Cache::has($this->firstPart)) {
            $cache['image'] = Cache::get($this->firstPart)['image'];
            Cache::forget($this->firstPart);
        }

        if (!isset($data['image']) && isset($cache['image'])) {
            $data['image'] = $cache['image'];
        }

        Cache::put($this->firstPart, $data, 60*60*6);

        return redirect()
            ->route('part');
    }

    /**
     * @return \Illuminate\Contracts\View\View|
     */
    public function part()
    {
        if (!Cache::has($this->firstPart)) {
            return redirect()
                ->route('index');
        }

        return view('part');
    }

    /**
     * @param PartRequest $request
     * @return mixed
     */
    public function storePart(PartRequest $request)
    {
        $data = $request->validated();
        if (Cache::has($this->secondPart)) {
            Cache::forget($this->secondPart);
        }

        Cache::put($this->secondPart, $data, 60*60*6);

        $pdf = PDF::loadView('cv', [
            'firstPart'     => Cache::get($this->firstPart),
            'secondPart'    => Cache::get($this->secondPart)
        ]);

        return $pdf->download('cv.pdf');
    }
}
