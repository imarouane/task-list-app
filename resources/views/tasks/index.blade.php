@extends('layouts.app')

@section('content')
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>{{ __('Create Task') }}</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('tasks.store') }}" method="post">
                        @csrf
                        <form>
                            <div class="mb-3">
                                <label for="title" class="form-label">Task</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    id="title" name="title" aria-describedby="titleInputFeedback">
                                @error('title')
                                    <div id="titleInputFeedback" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </form>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <div class="row justify-content-center">
        <x-tasks.index :tasks="$tasks"></x-tasks.index>
    </div>
@endsection
