<div class="col-md-8">
    <div class="card">
        <div class="card-header">
            <h4 class="heading">{{ __('My Tasks') }}</h4>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Created Date</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($tasks->count())
                        @foreach ($tasks as $index => $task)
                            <tr>
                                <th scope="row">
                                    {{ $index + 1 }}
                                </th>
                                <td>
                                    {{ $task->title }}
                                </td>
                                <td>
                                    {{ $task->created_at->diffForHumans() }}
                                </td>
                                <td>
                                    <x-tasks.delete-model modelRoute="tasks.destroy" :modelId="$task->id"></x-tasks.delete-model>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td scope="col" colspan="4" class="fs-3 text-center">You don't have any tasks yet!

                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
