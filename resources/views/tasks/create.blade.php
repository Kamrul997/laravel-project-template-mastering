@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main breadcrumb-main--table justify-content-sm-between ">
                    <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                        <div class="d-flex align-items-center user-member__title">
                            <h4 class="text-capitalize">add new task</h4>
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

                            <form method="post" action="{{ route('task.store') }}">
                                @csrf


                                <div class="form-group mb-25">
                                    <label for="taskName">name</label>
                                    <input type="text" class="form-control" name="taskName" id="taskName"
                                        value="{{ old('taskName') }}">
                                    @error('taskName')
                                        <p><span><small class="text-danger">{{ $message }}</small></span></p>
                                    @enderror
                                </div>

                                <div class="form-group mb-25">
                                    <label for="name3">Task Details</label>
                                    <input type="text" class="form-control" value="{{ old('taskDetails') }}"
                                        name="taskDetails" id="taskDetails">
                                    @error('taskDetails')
                                        <p><span><small class="text-danger">{{ $message }}</small></span></p>
                                    @enderror
                                </div>
                                <div class="form-group mb-25">
                                    <label for="taskAddignTo" class="il-gray fs-14 fw-500 align-center mb-10">Assign
                                        To</label>
                                    <select class="form-control px-15" id="taskAddignTo">
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                 </div>
                                <div class="form-group mb-25 form-group-calender">
                                    <label for="assignDate">Assign Date</label>
                                    <div class="position-relative">
                                        <input type="date" class="form-control" value="{{ old('assignDate') }}"
                                            name="assignDate" id="assignDate">

                                        @error('assignDate')
                                            <p><span><small class="text-danger">{{ $message }}</small></span></p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mb-25 status-radio">
                                    <label class="mb-15" for="taskStatus">status</label>
                                    <div class="d-flex">
                                        <div class="radio-horizontal-list d-flex flex-wrap">
                                            <div class="radio-theme-default custom-radio ">
                                                <input name="status" class="radio" type="radio"
                                                    value="taskStatusIncomplete" id="taskStatusIncomplete"
                                                    {{ old('status') == 'taskStatusIncomplete' ? 'checked' : '' }}>
                                                <label for="taskStatusIncomplete">
                                                    <span class="radio-text">Incomplete</span>
                                                </label>
                                            </div>

                                            <div class="radio-theme-default custom-radio ">
                                                <input name="status" class="radio" type="radio"
                                                    value="taskStatusComplete" id="taskStatusComplete"
                                                    {{ old('status') == 'taskStatusComplete' ? 'checked' : '' }}>
                                                <label for="taskStatusComplete">
                                                    <span class="radio-text">complete</span>
                                                </label>
                                            </div>
                                            @error('status')
                                                <p><span><small class="text-danger">{{ $message }}</small></span></p>
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
