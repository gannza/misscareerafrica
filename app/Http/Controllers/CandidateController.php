<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCandidateRequest;
use App\Http\Requests\UpdateCandidateRequest;
use App\Repositories\CandidateRepository;
use App\Http\Controllers\AppBaseController;
use App\Mail\NotifyCandidadte;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Mail;
use Response;
use App\Models\Session;
use App\Models\Candidate;
//Candidate
use Log;

class CandidateController extends AppBaseController
{

    /** @var  CandidateRepository */
    private $candidateRepository;

    public function __construct(CandidateRepository $candidateRepo)
    {
        $this->candidateRepository = $candidateRepo;
    }

    /**
     * Display a listing of the Candidate.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $candidates = $this->candidateRepository->paginate(10);

        return view('candidates.index')
            ->with('candidates', $candidates);
    }

    /**
     * Show the form for creating a new Candidate.
     *
     * @return Response
     */
    public function create()
    {
        return view('candidates.create');
    }

    /**
     * Store a newly created Candidate in storage.
     *
     * @param CreateCandidateRequest $request
     *
     * @return Response
     */
    public function store(CreateCandidateRequest $request)
    {
        $input = $request->all();
        $request['session_id']=Session::where('is_current_applying',1)->first();
        $candidate = $this->candidateRepository->create($input);

        Flash::success('Candidate saved successfully.');

        return redirect(route('candidates.index'));
    }


    public function candidateApplying(CreateCandidateRequest $request)
    {
        $input = $request->all();

        $input['session_id']=Session::where('is_current_applying',1)->first()->id;
        $input['is_selected']=0;
        $input['votes']=0;
      //  Log::info($input);
        $candidate = $this->candidateRepository->create($input);
        //TODO: send email;
        Mail::to( $request->email)->send(new NotifyCandidadte($request->fname));
        return $this->sendResponse($candidate->toArray(), 'Miss Career Africa is pleased you dared to apply,Thank you!');
    }

    public function votes(Request $request)
    {
        $candidate = $this->candidateRepository->find($request['id']);

        if (empty($candidate)) {
            return $this->sendResponse([],'No candidates found!');
        }

        $candidate = $this->candidateRepository->update(['votes'=>$request['votes']], $request['id']);
        return $this->sendResponse($candidate->toArray(), 'Miss Career Africa is pleased you dared to apply,Thank you!');
    }
    //votes
    /**
     * Display the specified Candidate.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $candidate = $this->candidateRepository->find($id);

        if (empty($candidate)) {
            Flash::error('Candidate not found');

            return redirect(route('candidates.index'));
        }

        return view('candidates.show')->with('candidate', $candidate);
    }
//

    public function listSelectedCandidates(){
        $session =    Session::where('is_current_applying',1)->first();
        $candidates = Candidate::where('is_selected',1)->where('session_id',$session->id)->orderBy('votes', 'DESC')->get();

        return $this->sendResponse(count($candidates) > 0?$candidates->toArray():[], 'List Selected Candidates');
    }
    /**
     * Show the form for editing the specified Candidate.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $candidate = $this->candidateRepository->find($id);

        if (empty($candidate)) {
            Flash::error('Candidate not found');

            return redirect(route('candidates.index'));
        }

        return view('candidates.edit')->with('candidate', $candidate);
    }

    /**
     * Update the specified Candidate in storage.
     *
     * @param int $id
     * @param UpdateCandidateRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCandidateRequest $request)
    {
        $candidate = $this->candidateRepository->find($id);

        if (empty($candidate)) {
            Flash::error('Candidate not found');

            return redirect(route('candidates.index'));
        }

        $candidate = $this->candidateRepository->update($request->all(), $id);

        Flash::success('Candidate updated successfully.');

        return redirect(route('candidates.index'));
    }

    /**
     * Remove the specified Candidate from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $candidate = $this->candidateRepository->find($id);

        if (empty($candidate)) {
            Flash::error('Candidate not found');

            return redirect(route('candidates.index'));
        }

        $this->candidateRepository->delete($id);

        Flash::success('Candidate deleted successfully.');

        return redirect(route('candidates.index'));
    }
}
