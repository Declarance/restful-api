<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Validator;
use App\Models\Genre;
use App\Http\Resources\GenreResource;

class GenreController extends BaseController
{

    public function index(): JsonResponse
    {
        $genres = Genre::all();

        return $this->sendResponse(GenreResource::collection($genres), 'Genres fetched.');
    }

    public function store(Request $request): JsonResponse
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError($validator->errors());
        }

        $genre = Genre::create($input);

        return $this->sendResponse(new GenreResource($genre), 'Genre created.');
    }

    public function show($id): JsonResponse
    {
        $genre = Genre::find($id);

        if (is_null($genre)) {
            return $this->sendError('Genre does not exist.');
        }

        return $this->sendResponse(new GenreResource($genre), 'Genre fetched.');
    }

    public function update(Request $request, Genre $genre): JsonResponse
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError($validator->errors());
        }

        $genre->title = $input['name'];
        $genre->save();

        return $this->sendResponse(new GenreResource($genre), 'Genre updated.');
    }

    public function destroy(Genre $genre): JsonResponse
    {
        $genre->delete();

        return $this->sendResponse([], 'Genre deleted.');
    }
}
