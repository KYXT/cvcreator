<?php

namespace App\Http\Controllers;

use App\Http\Helpers\Uploader;
use App\Http\Requests\IndexRequest;
use App\Http\Requests\PartRequest;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
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
        if (Session::has($this->firstPart)) {
            $data = Session::get($this->firstPart);
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

        $sessionImage = null;
        if (Session::has($this->firstPart)) {
            $sessionImage = Session::get($this->firstPart);
            if (isset($sessionImage['image'])) {
                $sessionImage = $sessionImage['image'];
            }
            Session::forget($this->firstPart);
        }

        if (!isset($data['image']) && ($sessionImage != null)) {
            $data['image'] = $sessionImage;
        }

        Session::put($this->firstPart, $data);


        return redirect()
            ->route('part');
    }

    /**
     * @return \Illuminate\Contracts\View\View|
     */
    public function part()
    {
        if (!Session::has($this->firstPart)) {
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
        if (Session::has($this->secondPart)) {
            Session::forget($this->secondPart);
        }

        Session::put($this->secondPart, $data);

        if ($data['cvtype'] == 1) {
            $pdf = PDF::loadView('cv', [
                'firstPart'     => Session::get($this->firstPart),
                'secondPart'    => Session::get($this->secondPart)
            ]);
        } else {
            //return view('cv2');

            $pdf = PDF::loadView('cv2', [
                'firstPart'     => Session::get($this->firstPart),
                'secondPart'    => Session::get($this->secondPart)
            ]);
        }



        return $pdf->download('cv.pdf');
    }
}
