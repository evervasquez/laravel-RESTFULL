<?php
use bibliotecaunsm\Repository\FacultadsRepository;

class FacultadsController extends \BaseController
{
    protected $faculRepo;

    public function __construct(FacultadsRepository $facultadsRepository)
    {
        $this->faculRepo = $facultadsRepository;
    }

    /**
     * Display a listing of the resource.
     * GET /facultads
     *
     * @return Response
     */
    public function index()
    {
        return $this->faculRepo->selectAll();
    }

    /**
     * Show the form for creating a new resource.
     * GET /facultads/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /facultads
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /facultads/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /facultads/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /facultads/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /facultads/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}