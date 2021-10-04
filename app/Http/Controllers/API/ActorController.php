<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Validator;
use App\Models\Actor;
use App\Http\Resources\ActorResource;

class ActorController extends BaseController
{

    public function index(): JsonResponse
    {
        $actors = Actor::all();

        return $this->sendResponse(ActorResource::collection($actors), 'Actors fetched.');
    }

    public function store(Request $request): JsonResponse
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name' => 'required|string',
        ]);

        if ($validator->fails()) {
            return $this->sendError($validator->errors());
        }

        $actor = Actor::create($input);

        return $this->sendResponse(new ActorResource($actor), 'Actor created.');
    }

    public function show($id): JsonResponse
    {
        $actor = Actor::find($id);

        if (is_null($actor)) {
            return $this->sendError('Actor does not exist.');
        }

        return $this->sendResponse(new ActorResource($actor), 'Actor fetched.');
    }

    public function update(Request $request, Actor $actor): JsonResponse
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' => 'required|string',
        ]);

        if($validator->fails()){
            return $this->sendError($validator->errors());
        }

        $actor->title = $input['name'];
        $actor->save();

        return $this->sendResponse(new ActorResource($actor), 'Actor updated.');
    }

    public function destroy(Actor $actor): JsonResponse
    {
        $actor->delete();

        return $this->sendResponse([], 'Actor deleted.');
    }
}
