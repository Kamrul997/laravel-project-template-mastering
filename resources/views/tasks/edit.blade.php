@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main breadcrumb-main--table justify-content-sm-between ">
                    <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                        <div class="d-flex align-items-center user-member__title">
                            <h4 class="text-capitalize">update task</h4>
                        </div>
                    </div>
                    <div class="action-btn">
                        <a href="{{ route('task.index') }}" class="btn btn-primary">
                            Go Back
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-50">
            <div class="row justify-content-center">
                <div class="col-md-5 col-10">
                    <div class="mt-40 mb-50">
                        <div class="edit-profile__body">
                            <form method="post" action="{{ route('task.update') }}">
                                @csrf
                                @if (Auth::user()->user_type === 'super admin' || Auth::user()->user_type === 'admin')
                                    <div class="form-group mb-25">
                                        <input type="text" class="form-control" value="{{ $task->id }}"
                                            name="taskId" id="taskId" hidden>
                                    </div>
                                    <div class="form-group mb-25">
                                        <label for="taskName">name</label>
                                        <input type="text" class="form-control" id="taskName" name="taskName"
                                            value="{{ $task->name }}">
                                    </div>

                                    <div class="form-group mb-25">
                                        <label for="name3">Task Details</label>
                                        <input type="text" class="form-control" name="taskDetails" id="taskDetails"
                                            value="{{ $task->details }}">
                                    </div>
                                    <div class="form-group mb-25">
                                        <label for="taskAddignTo">Assign To</label>
                                        <select class="form-control px-15" name="taskAssignTo" id="taskAssignTo">
                                            @foreach ($users as $user)
                                                <option value="{{ $user->name }}">{{ $user->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mb-25 form-group-calender">
                                        <label for="assignDate">Assign Date</label>
                                        <div class="position-relative">
                                            <input type="date" class="form-control" name="assignDate" id="assignDate"
                                                value="{{ $task->assign_date }}">
                                        </div>
                                    </div>
                                    <div class="form-group mb-25 status-radio">
                                        <label class="mb-15" for="taskStatus">status</label>
                                        <div class="d-flex">
                                            <div class="radio-horizontal-list d-flex flex-wrap">
                                                <div class="radio-theme-default custom-radio ">
                                                    <input name="status" class="radio" type="radio" value="incomplete"
                                                        id="incomplete"
                                                        {{ $task->status === 'incomplete' ? 'checked' : '' }}>
                                                    <label for="incomplete">
                                                        <span class="radio-text">incomplete</span>
                                                    </label>
                                                </div>

                                                <div class="radio-theme-default custom-radio ">
                                                    <input name="status" class="radio" type="radio" value="complete"
                                                        id="complete" {{ $task->status === 'complete' ? 'checked' : '' }}>
                                                    <label for="complete">
                                                        <span class="radio-text">complete</span>
                                                    </label>
                                                </div>
                                                @error('status')
                                                    <p class="d-block"><span><small
                                                                class="text-danger">{{ $message }}</small></span></p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="form-group mb-25 status-radio">
                                        <label class="mb-15" for="taskStatus">status</label>
                                        <div class="d-flex">
                                            <div class="radio-horizontal-list d-flex flex-wrap">
                                                <div class="radio-theme-default custom-radio ">
                                                    <input name="status" class="radio" type="radio" value="incomplete"
                                                        id="incomplete"
                                                        {{ $task->status === 'incomplete' ? 'checked' : '' }}>
                                                    <label for="incomplete">
                                                        <span class="radio-text">incomplete</span>
                                                    </label>
                                                </div>

                                                <div class="radio-theme-default custom-radio ">
                                                    <input name="status" class="radio" type="radio" value="complete"
                                                        id="complete" {{ $task->status === 'complete' ? 'checked' : '' }}>
                                                    <label for="complete">
                                                        <span class="radio-text">complete</span>
                                                    </label>
                                                </div>
                                                @error('status')
                                                    <p class="d-block"><span><small
                                                                class="text-danger">{{ $message }}</small></span></p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                <div class="button-group d-flex pt-25 justify-content-md-end justify-content-start">
                                    <button
                                        class="btn btn-primary btn-default btn-squared text-capitalize radius-md shadow2 btn-sm">Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
