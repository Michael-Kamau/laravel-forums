@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><a href="#">{{$thread->creator->name}}</a> posted: {{$thread->title}}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="body">{{$thread->body}}</div>
                    </div>
                </div>
                @foreach($thread ->replies as $reply)
                    @include('threads.reply')
                @endforeach
                @if(auth()->check())
                    <div class="row">
                        <div class="col-md-12 col-md-offset-2">
                            <form method="POST" action="{{$thread->path().'/replies'}}">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Body:</label>
                                    <textarea name="body" class="form-control" id="body" rows="5"
                                              placeholder="Have Something to say?"></textarea>
                                </div>
                                <button type="submit" class="btn btn-secondary">Success</button>
                            </form>
                        </div>
                    </div>
                @else
                    <p class="text-center"> Please <a href="{{route('login')}}">Sign in</a> to participate in this discussion</p>
                @endif
            </div>
        </div>
    </div>
@endsection
