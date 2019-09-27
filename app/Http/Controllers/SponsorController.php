<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSponsorRequest;
use App\Http\Requests\UpdateSponsorRequest;
use App\Repositories\SponsorRepository;
use App\Http\Controllers\AppBaseController;
use App\Mail\EmailSponsor;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Response;

class SponsorController extends AppBaseController
{
    /** @var  SponsorRepository */
    private $sponsorRepository;

    public function __construct(SponsorRepository $sponsorRepo)
    {
        $this->sponsorRepository = $sponsorRepo;
    }

    /**
     * Display a listing of the Sponsor.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $sponsors = $this->sponsorRepository->paginate(10);

        return view('sponsors.index')
            ->with('sponsors', $sponsors);
    }

    /**
     * Show the form for creating a new Sponsor.
     *
     * @return Response
     */
    public function create()
    {
        return view('sponsors.create');
    }

    /**
     * Store a newly created Sponsor in storage.
     *
     * @param CreateSponsorRequest $request
     *
     * @return Response
     */
    public function store(CreateSponsorRequest $request)
    {
        $input = $request->all();

        $sponsor = $this->sponsorRepository->create($input);

        Flash::success('Sponsor saved successfully.');
        
        Mail::to($request->email)->send(new EmailSponsor($request->fname));
        return redirect(route('sponsors.index'));
    }

    /**
     * Display the specified Sponsor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sponsor = $this->sponsorRepository->find($id);

        if (empty($sponsor)) {
            Flash::error('Sponsor not found');

            return redirect(route('sponsors.index'));
        }

        return view('sponsors.show')->with('sponsor', $sponsor);
    }

    /**
     * Show the form for editing the specified Sponsor.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sponsor = $this->sponsorRepository->find($id);

        if (empty($sponsor)) {
            Flash::error('Sponsor not found');

            return redirect(route('sponsors.index'));
        }

        return view('sponsors.edit')->with('sponsor', $sponsor);
    }

    /**
     * Update the specified Sponsor in storage.
     *
     * @param int $id
     * @param UpdateSponsorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSponsorRequest $request)
    {
        $sponsor = $this->sponsorRepository->find($id);

        if (empty($sponsor)) {
            Flash::error('Sponsor not found');

            return redirect(route('sponsors.index'));
        }

        $sponsor = $this->sponsorRepository->update($request->all(), $id);

        Flash::success('Sponsor updated successfully.');

        return redirect(route('sponsors.index'));
    }

    /**
     * Remove the specified Sponsor from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sponsor = $this->sponsorRepository->find($id);

        if (empty($sponsor)) {
            Flash::error('Sponsor not found');

            return redirect(route('sponsors.index'));
        }

        $this->sponsorRepository->delete($id);

        Flash::success('Sponsor deleted successfully.');

        return redirect(route('sponsors.index'));
    }
}
