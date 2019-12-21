<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLinksRequest;
use App\Http\Requests\UpdateLinksRequest;
use App\Repositories\LinksRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class LinksController extends AppBaseController
{
    /** @var  LinksRepository */
    private $linksRepository;

    public function __construct(LinksRepository $linksRepo)
    {
        $this->linksRepository = $linksRepo;
    }

    /**
     * Display a listing of the Links.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $links = $this->linksRepository->paginate(10);

        return view('links.index')
            ->with('links', $links);
    }

    public function videos(Request $request)
    {
        $links = $this->linksRepository->paginate(100);

        return view('videos')
            ->with('videos', $links);
    }

    /**
     * Show the form for creating a new Links.
     *
     * @return Response
     */
    public function create()
    {
        return view('links.create');
    }

    /**
     * Store a newly created Links in storage.
     *
     * @param CreateLinksRequest $request
     *
     * @return Response
     */
    public function store(CreateLinksRequest $request)
    {
        $input = $request->all();

        $links = $this->linksRepository->create($input);

        Flash::success('Links saved successfully.');

        return redirect(route('links.index'));
    }

    /**
     * Display the specified Links.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $links = $this->linksRepository->find($id);

        if (empty($links)) {
            Flash::error('Links not found');

            return redirect(route('links.index'));
        }

        return view('links.show')->with('links', $links);
    }

    /**
     * Show the form for editing the specified Links.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $links = $this->linksRepository->find($id);

        if (empty($links)) {
            Flash::error('Links not found');

            return redirect(route('links.index'));
        }

        return view('links.edit')->with('links', $links);
    }

    /**
     * Update the specified Links in storage.
     *
     * @param int $id
     * @param UpdateLinksRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLinksRequest $request)
    {
        $links = $this->linksRepository->find($id);

        if (empty($links)) {
            Flash::error('Links not found');

            return redirect(route('links.index'));
        }

        $links = $this->linksRepository->update($request->all(), $id);

        Flash::success('Links updated successfully.');

        return redirect(route('links.index'));
    }

    /**
     * Remove the specified Links from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $links = $this->linksRepository->find($id);

        if (empty($links)) {
            Flash::error('Links not found');

            return redirect(route('links.index'));
        }

        $this->linksRepository->delete($id);

        Flash::success('Links deleted successfully.');

        return redirect(route('links.index'));
    }
}
