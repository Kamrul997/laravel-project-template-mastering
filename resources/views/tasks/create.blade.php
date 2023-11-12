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
                            <form>
                                <div class="form-group mb-25">
                                    <label for="taskName">name</label>
                                    <input type="text" class="form-control" id="taskName" placeholder="Duran Clayton">
                                </div>

                                <div class="form-group mb-25">
                                    <label for="name3">Task Details</label>
                                    <input type="text" class="form-control" id="taskDetails" placeholder="Example">
                                </div>
                                <div class="form-group mb-25">
                                    <label for="taskAddignTo">Assign To</label>
                                    <input type="text" class="form-control" id="taskAddignTo"
                                        placeholder="duran clayton">
                                </div>
                                <div class="form-group mb-25 form-group-calender">
                                    <label for="assignDate">Assign Date</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="assignDate"
                                            placeholder="Select date">
                                        <a href="#"><img class="svg" src="{{ asset('img/svg/calendar.svg') }}"
                                                alt="calendar"></a>
                                    </div>
                                </div>
                                <div class="form-group mb-25 status-radio">
                                    <label class="mb-15" for="taskStatus">status</label>
                                    <div class="d-flex">
                                        <div class="radio-horizontal-list d-flex flex-wrap">
                                            <div class="radio-theme-default custom-radio ">
                                                <input class="radio" type="radio" name="radio-optional" value=0
                                                    id="taskStatusOngoing">
                                                <label for="taskStatusOngoing">
                                                    <span class="radio-text">on going</span>
                                                </label>
                                            </div>

                                            <div class="radio-theme-default custom-radio ">
                                                <input class="radio" type="radio" name="radio-optional" value=0
                                                    id="taskStatusComplete">
                                                <label for="taskStatusComplete">
                                                    <span class="radio-text">complete</span>
                                                </label>
                                            </div>

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
