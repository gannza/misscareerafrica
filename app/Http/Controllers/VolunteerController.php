<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVolunteerRequest;
use App\Http\Requests\UpdateVolunteerRequest;
use App\Repositories\VolunteerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Response;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyVolunteer;
use Log;
class VolunteerController extends AppBaseController
{
    /** @var  VolunteerRepository */
    private $volunteerRepository;

    public function __construct(VolunteerRepository $volunteerRepo)
    {
        $this->volunteerRepository = $volunteerRepo;
    }

    /**
     * Display a listing of the Volunteer.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $volunteers = $this->volunteerRepository->paginate(10);

        return view('volunteers.index')
            ->with('volunteers', $volunteers);
    }

    /**
     * Show the form for creating a new Volunteer.
     *
     * @return Response
     */
    public function create()
    {
        return view('volunteers.create');
    }

    /**
     * Store a newly created Volunteer in storage.
     *
     * @param CreateVolunteerRequest $request
     *
     * @return Response
     */
    public function store(CreateVolunteerRequest $request)
    {
        $input = $request->all();

        $volunteer = $this->volunteerRepository->create($input);

        Flash::success('Miss career is pleased that you are interested to be a part of this program, thank you!. .');

        //send email
        //Log::debug($request->all());
        Mail::to($request->email)->send(new NotifyVolunteer($request->fname));
        if(Auth::check()){
            return redirect(route('volunteers.index'));
        }
        return redirect()->back();
        
    }

    /**
     * Display the specified Volunteer.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $volunteer = $this->volunteerRepository->find($id);

        if (empty($volunteer)) {
            Flash::error('Volunteer not found');

            return redirect(route('volunteers.index'));
        }

        return view('volunteers.show')->with('volunteer', $volunteer);
    }

    /**
     * Show the form for editing the specified Volunteer.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $volunteer = $this->volunteerRepository->find($id);

        if (empty($volunteer)) {
            Flash::error('Volunteer not found');

            return redirect(route('volunteers.index'));
        }

        return view('volunteers.edit')->with('volunteer', $volunteer);
    }

    /**
     * Update the specified Volunteer in storage.
     *
     * @param int $id
     * @param UpdateVolunteerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVolunteerRequest $request)
    {
        $volunteer = $this->volunteerRepository->find($id);

        if (empty($volunteer)) {
            Flash::error('Volunteer not found');

            return redirect(route('volunteers.index'));
        }

        $volunteer = $this->volunteerRepository->update($request->all(), $id);

        Flash::success('Volunteer updated successfully.');

        return redirect(route('volunteers.index'));
    }

    /**
     * Remove the specified Volunteer from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $volunteer = $this->volunteerRepository->find($id);

        if (empty($volunteer)) {
            Flash::error('Volunteer not found');

            return redirect(route('volunteers.index'));
        }

        $this->volunteerRepository->delete($id);

        Flash::success('Volunteer deleted successfully.');

        return redirect(route('volunteers.index'));
    }
}
