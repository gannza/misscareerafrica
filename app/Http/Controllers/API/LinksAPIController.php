<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateLinksAPIRequest;
use App\Http\Requests\API\UpdateLinksAPIRequest;
use App\Models\Links;
use App\Repositories\LinksRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class LinksController
 * @package App\Http\Controllers\API
 */

class LinksAPIController extends AppBaseController
{
    /** @var  LinksRepository */
    private $linksRepository;

    public function __construct(LinksRepository $linksRepo)
    {
        $this->linksRepository = $linksRepo;
    }

    /**
     * Display a listing of the Links.
     * GET|HEAD /links
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $links = $this->linksRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($links->toArray(), 'Links retrieved successfully');
    }

    /**
     * Store a newly created Links in storage.
     * POST /links
     *
     * @param CreateLinksAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateLinksAPIRequest $request)
    {
        $input = $request->all();

        $links = $this->linksRepository->create($input);

        return $this->sendResponse($links->toArray(), 'Links saved successfully');
    }

    /**
     * Display the specified Links.
     * GET|HEAD /links/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Links $links */
        $links = $this->linksRepository->find($id);

        if (empty($links)) {
            return $this->sendError('Links not found');
        }

        return $this->sendResponse($links->toArray(), 'Links retrieved successfully');
    }

    /**
     * Update the specified Links in storage.
     * PUT/PATCH /links/{id}
     *
     * @param int $id
     * @param UpdateLinksAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLinksAPIRequest $request)
    {
        $input = $request->all();

        /** @var Links $links */
        $links = $this->linksRepository->find($id);

        if (empty($links)) {
            return $this->sendError('Links not found');
        }

        $links = $this->linksRepository->update($input, $id);

        return $this->sendResponse($links->toArray(), 'Links updated successfully');
    }

    /**
     * Remove the specified Links from storage.
     * DELETE /links/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Links $links */
        $links = $this->linksRepository->find($id);

        if (empty($links)) {
            return $this->sendError('Links not found');
        }

        $links->delete();

        return $this->sendResponse($id, 'Links deleted successfully');
    }
}
