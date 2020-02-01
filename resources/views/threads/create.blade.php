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
                                <label for="channel_id">Choose a Channel:</label>
                                <select name="channel_id" id="channel_id" class="form-control" required>
                                    <option value="">Choose One...</option>

                                    @foreach (App\Channel::all() as $channel)
                                        <option value="{{ $channel->id }}" {{ old('channel_id') == $channel->id ? 'selected' : '' }}>
                                            {{ $channel->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Title:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="title" type="text" name="title"
                                           value="{{old('title')}}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="body">Body:</label>
                                <textarea name="body" class="form-control" id="body" rows="8"
                                          placeholder="Have Something to say?" value="{{old('body')}}" required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Success</button>
                            </div>
                            @if (count($errors))
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
