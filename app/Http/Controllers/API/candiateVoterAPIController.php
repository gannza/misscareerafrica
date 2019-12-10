<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatecandiateVoterAPIRequest;
use App\Http\Requests\API\UpdatecandiateVoterAPIRequest;
use App\Models\candiateVoter;
use App\Repositories\candiateVoterRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class candiateVoterController
 * @package App\Http\Controllers\API
 */

class candiateVoterAPIController extends AppBaseController
{
    /** @var  candiateVoterRepository */
    private $candiateVoterRepository;

    public function __construct(candiateVoterRepository $candiateVoterRepo)
    {
        $this->candiateVoterRepository = $candiateVoterRepo;
    }

    /**
     * Display a listing of the candiateVoter.
     * GET|HEAD /candiateVoters
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $candiateVoters = $this->candiateVoterRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($candiateVoters->toArray(), 'Candiate Voters retrieved successfully');
    }

    /**
     * Store a newly created candiateVoter in storage.
     * POST /candiateVoters
     *
     * @param CreatecandiateVoterAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatecandiateVoterAPIRequest $request)
    {
        $input = $request->all();

        $candiateVoter = $this->candiateVoterRepository->create($input);

        return $this->sendResponse($candiateVoter->toArray(), 'Candiate Voter saved successfully');
    }

    /**
     * Display the specified candiateVoter.
     * GET|HEAD /candiateVoters/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var candiateVoter $candiateVoter */
        $candiateVoter = $this->candiateVoterRepository->find($id);

        if (empty($candiateVoter)) {
            return $this->sendError('Candiate Voter not found');
        }

        return $this->sendResponse($candiateVoter->toArray(), 'Candiate Voter retrieved successfully');
    }

    /**
     * Update the specified candiateVoter in storage.
     * PUT/PATCH /candiateVoters/{id}
     *
     * @param int $id
     * @param UpdatecandiateVoterAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecandiateVoterAPIRequest $request)
    {
        $input = $request->all();

        /** @var candiateVoter $candiateVoter */
        $candiateVoter = $this->candiateVoterRepository->find($id);

        if (empty($candiateVoter)) {
            return $this->sendError('Candiate Voter not found');
        }

        $candiateVoter = $this->candiateVoterRepository->update($input, $id);

        return $this->sendResponse($candiateVoter->toArray(), 'candiateVoter updated successfully');
    }

    /**
     * Remove the specified candiateVoter from storage.
     * DELETE /candiateVoters/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var candiateVoter $candiateVoter */
        $candiateVoter = $this->candiateVoterRepository->find($id);

        if (empty($candiateVoter)) {
            return $this->sendError('Candiate Voter not found');
        }

        $candiateVoter->delete();

        return $this->sendResponse($id, 'Candiate Voter deleted successfully');
    }
}
