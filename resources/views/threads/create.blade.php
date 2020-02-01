@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create a new Thread</div>

                    <div class="card-body">
                        <form method="POST" action="/threads">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Title:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="title" type="text" name="title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="body">Body:</label>
                                <textarea name="body" class="form-control" id="body" rows="8"
                                          placeholder="Have Something to say?"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Success</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
