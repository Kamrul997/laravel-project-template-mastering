@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main breadcrumb-main--table justify-content-sm-between ">
                    <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                        <div class="d-flex align-items-center user-member__title">
                            <h4 class="text-capitalize">add new User</h4>
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

                            {{-- <form method="post" action="{{ route('task.store') }}">
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
                                    <label for="taskAddignTo" class="il-gray fs-14 fw-500 align-center mb-10">User Type</label>
                                    <select class="form-control px-15" id="taskAddignTo">
                                        <option value="0">Select User Type</option>
                                        <option value="admin">Admin</option>
                                        <option value="guest">Guest</option>
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
                            </form> --}}

                            <form method="POST" action="{{ route('user.store') }}">
                                @csrf
                                <div class="edit-profile__body">
                                    <div class="edit-profile__body">
                                        <div class="form-group mb-20">
                                            <label for="name">name</label>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        </div>
                                        <div class="form-group mb-20">
                                            <label for="email">Email Adress</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        </div>
                                        <div class="form-group mb-15">
                                            <label for="password-field">password</label>
                                            <div class="position-relative">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                <div
                                                    class="uil uil-eye-slash text-lighten fs-15 field-icon toggle-password2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-15">
                                            <label for="password-field">Confirm password</label>
                                            <div class="position-relative">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                <div
                                                    class="uil uil-eye-slash text-lighten fs-15 field-icon toggle-password2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-25">
                                            <label for="user_type" class="il-gray fs-14 fw-500 align-center mb-10">User Type</label>
                                            <select class="form-control px-15" name="user_type" id="user_type">
                                                <option value="0">Select User Type</option>
                                                <option value="admin">Admin</option>
                                                <option value="guest">Guest</option>
                                            </select>
                                         </div>
                                        {{-- <div class="admin-condition">
                                            <div class="checkbox-theme-default custom-checkbox ">
                                                <input class="checkbox" type="checkbox" id="admin-1">
                                                <label for="admin-1">
                                                    <span class="checkbox-text">Creating an account means you’re okay
                                                        with our <a href="#" class="color-primary">Terms of
                                                            Service</a> and <a href="#"
                                                            class="color-primary">Privacy
                                                            Policy</a>
                                                        my preference</span>
                                                </label>
                                            </div>
                                        </div> --}}
                                        <div
                                            class="admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                            <button type="submit"
                                                class="btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn ">
                                                Create User
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
