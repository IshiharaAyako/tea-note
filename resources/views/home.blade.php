@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                {!! Form::open(['route' => ['informations.store'], 'method' => 'post']) !!}
                <div class="card-body">
                    <form>
                        <div class="form-group">
                          <label for="inputAddress">タイトル</label>
                          {!! Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'テキストを入力してください', 'required']) !!}
                        </div>
                        <div class="form-group">
                          <label for="inputAddress2">内容</label>
                          {!! Form::text('body', '', ['class' => 'form-control', 'placeholder' => 'テキストを入力してください', 'required']) !!}
                        </div>
                        <button type="submit" class="btn btn-primary">submit</button>
                    </form>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
