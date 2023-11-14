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
                            <form action="post" method="{{ route('task.update') }}">
                                <div class="form-group mb-25">
                                    <input type="text" class="form-control" value="{{ $task->id }}" id="taskId"
                                        hidden>
                                </div>
                                <div class="form-group mb-25">
                                    <label for="taskName">name</label>
                                    <input type="text" class="form-control" id="taskName" value="{{ $task->name }}">
                                </div>

                                <div class="form-group mb-25">
                                    <label for="name3">Task Details</label>
                                    <input type="text" class="form-control" id="taskDetails"
                                        value="{{ $task->details }}">
                                </div>
                                <div class="form-group mb-25">
                                    <label for="taskAddignTo">Assign To</label>
                                    <input type="text" class="form-control" id="taskAddignTo"
                                        value="{{ $task->assign_to }}">
                                </div>
                                <div class="form-group mb-25 form-group-calender">
                                    <label for="assignDate">Assign Date</label>
                                    <div class="position-relative">
                                        <input type="date" class="form-control" id="assignDate"
                                            value="{{ $task->assign_date }}">
                                        {{-- <a href="#"><img class="svg" src="{{ asset('img/svg/calendar.svg') }}"
                                                alt="calendar"></a> --}}
                                    </div>
                                </div>
                                <div class="form-group mb-25 status-radio">
                                    <label class="mb-15" for="taskStatus">status</label>
                                    <div class="d-flex">
                                        <div class="radio-horizontal-list d-flex flex-wrap">
                                            <div class="radio-theme-default custom-radio ">
                                                <input name="status" class="radio" type="radio"
                                                    value="taskStatusIncomplete" id="taskStatusIncomplete"
                                                    {{ $task->status === 'Incomplete' ? 'checked' : '' }}>
                                                <label for="taskStatusIncomplete">
                                                    <span class="radio-text">incomplete</span>
                                                </label>
                                            </div>

                                            <div class="radio-theme-default custom-radio ">
                                                <input name="status" class="radio" type="radio"
                                                    value="taskStatusComplete" id="taskStatusComplete"
                                                    {{ $task->status === 'Complete' ? 'checked' : '' }}>
                                                <label for="taskStatusComplete">
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
