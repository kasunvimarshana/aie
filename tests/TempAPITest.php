<?php

    Route::resource('/models', 'ModelController', [
        'except' => ['edit', 'show', 'store']
    ]);

    public function create(Generator $faker){
        $model = new Model();
        $model->name = $faker->lexify('????????');
        $model->color = $faker->boolean ? 'red' : 'green';
        $model->save();

        return response($model->jsonSerialize(), Response::HTTP_CREATED);
    }

    public function index(){
        return response(Model::all()->jsonSerialize(), Response::HTTP_OK);
    }

    public function update(Request $request, $id){
        $model = Model::findOrFail($id);
        $model->color = $request->color;
        $model->save();

        return response(null, Response::HTTP_OK);
    }

    public function destroy($id){
        Model::destroy($id);

        return response(null, Response::HTTP_OK);
    }

?>