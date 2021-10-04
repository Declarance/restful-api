<?php

namespace App\Http\Controllers\API;

use App\Models\Genre;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Validator;
use App\Models\Film;
use App\Http\Resources\FilmResource;

class FilmController extends BaseController
{

    public function index(): JsonResponse
    {
        $films = Film::all();

        return $this->sendResponse(FilmResource::collection($films), 'Films fetched.');
    }

    public function store(Request $request): JsonResponse
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'title' => 'required|string',
            'genre_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return $this->sendError($validator->errors());
        }

        $film = Film::create($input);
        $film->genre()->associate($input['genre_id']);

        if ($request->has('actor_id')) {
            $validator = Validator::make($input, [
                'actor_id' => 'required|array',
            ]);

            if ($validator->fails()) {
                return $this->sendError($validator->errors());
            }

            foreach ($input['actor_id'] as $actor) {
                $film->actors()->attach($actor);
            }
        }

        return $this->sendResponse(new FilmResource($film), 'Film created.');
    }

    public function show($id): JsonResponse
    {
        $film = Film::find($id);

        if (is_null($film)) {
            return $this->sendError('Film does not exist.');
        }

        return $this->sendResponse(new FilmResource($film), 'Film fetched.');
    }
    
    public function update(Request $request, Film $film): JsonResponse
    {
        $input = $request->all();

        if ($request->has('title')) {
            $validator = Validator::make($input, [
                'title' => 'required|string',
            ]);

            if ($validator->fails()) {
                return $this->sendError($validator->errors());
            }

            $film->title = $input['title'];
            $film->save();
        }

        if ($request->has('genre_id')) {
            $validator = Validator::make($input, [
                'genre_id' => 'required|integer',
            ]);

            if ($validator->fails()) {
                return $this->sendError($validator->errors());
            }

            $film->genre()->associate($input['genre_id']);
            $film->save();
        }

        if ($request->has('actor_id')) {
            $validator = Validator::make($input, [
                'actor_id' => 'required|array',
            ]);

            if ($validator->fails()) {
                return $this->sendError($validator->errors());
            }

            foreach ($input['actor_id'] as $actor) {
                $film->actors()->toggle($actor);
            }

            $film->save();
        }
        
        return $this->sendResponse(new FilmResource($film), 'Film updated.');
    }
   
    public function destroy(Film $film): JsonResponse
    {
        $film->actors()->detach();
        $film->save();
        $film->delete();

        return $this->sendResponse([], 'Film deleted.');
    }
}
