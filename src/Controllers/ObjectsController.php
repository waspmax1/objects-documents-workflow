<?php


namespace Waspmax1\ObjectsDocumentsWorkflow\Controllers;


use App\Http\Controllers\Controller;
use Waspmax1\ObjectsDocumentsWorkflow\Models\Objects;

class ObjectsController extends Controller
{
    public function index()
    {
        $objects = Objects::all();

        return view('objects.index', ['objects' => $objects]);
    }
}
