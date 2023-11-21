@extends('layouts.app')


@section('content')
    <div class="col-lg-12">
        <div class="col-lg-12">
            <div class="breadcrumb-main">
                <div class="d-flex align-items-center user-member__title">
                    <h4 class="text-capitalize">Task Table</h4>
                </div>
                <div class="action-btn {{ Auth::user()->user_type === 'super admin' || Auth::user()->user_type === 'admin' ? '' : 'd-none' }}">
                    <a href="{{ route('task.create') }}" class="btn btn-primary">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 mb-30">
        <div class="support-ticket-system support-ticket-system--search">
            <div class="support-form datatable-support-form d-flex justify-content-start align-items-center flex-wrap">
                <div class="support-form__search">
                    <div class="support-order-search">
                        <form action="/" class="support-order-search__form">
                            <img src="{{ asset('img/svg/search.svg') }}" alt="search" class="svg">
                            <input class="form-control border-0 box-shadow-none" type="search" placeholder="Search"
                                aria-label="Search">
                        </form>
                    </div>
                </div>
            </div>
            <div class="userDatatable userDatatable--ticket userDatatable--ticket--2 mt-1">
                <div class="table-responsive">
                    <table class="table mb-0 table-borderless">
                        <thead>
                            <tr class="userDatatable-header">
                                <th>
                                    <span class="userDatatable-title">ID</span>
                                </th>
                                <th>
                                    <span class="userDatatable-title">Task</span>
                                </th>
                                <th>
                                    <span class="userDatatable-title">Details</span>
                                </th>
                                <th>
                                    <span class="userDatatable-title">Subtask</span>
                                </th>
                                <th>
                                    <span class="userDatatable-title">Subtask Details</span>
                                </th>
                                <th>
                                    <span class="userDatatable-title">Assign To</span>
                                </th>
                                <th>
                                    <span class="userDatatable-title">Assign Date</span>
                                </th>
                                <th>
                                    <span class="userDatatable-title">Status</span>
                                </th>
                                <th class="actions">
                                    <span class="userDatatable-title">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allTaskAndSubtask as $task)

                            <tr>
                                <td>{{ $task->id }}</td>
                                <td>
                                    <div class="d-flex">
                                        <div class="userDatatable-inline-title">
                                            <a href="#" class="text-dark fw-500">
                                                <h6>{{ $task->name }}</h6>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content--subject">
                                        {{ $task->details }}
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <div class="userDatatable-inline-title">
                                            <a href="#" class="text-dark fw-500">
                                                <h6>
                                                    @foreach ( $task->subtasks as $subTask )
                                                    {{ $subTask->sub_task_title }}
                                                    @endforeach
                                                </h6>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content--subject">
                                        @foreach ( $task->subtasks as $subTask )
                                            {{ $subTask->sub_task_details }}
                                        @endforeach
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content--subject text-capitalize">
                                        {{ $task->assign_to }}
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content--priority">
                                        {{ $task->assign_date }}
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content--priority text-capitalize">
                                        {{ $task->status }}
                                    </div>
                                </td>
                                <td>
                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                        <li>
                                            <a href="#" class="view">
                                                <i class="uil uil-setting"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('task.edit', $task->id) }}" class="edit">
                                                <i class="uil uil-edit"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('task.delete', $task->id) }}" class="remove">
                                                <i class="uil uil-trash-alt"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-end pt-30">
                    {{ $allTaskAndSubtask->links() }}
                    {{-- <nav class="dm-page ">
                        <ul class="dm-pagination d-flex">
                            <li class="dm-pagination__item">
                                <a href="#" class="dm-pagination__link pagination-control"><span
                                        class="la la-angle-left"></span></a>
                                <a href="#" class="dm-pagination__link"><span class="page-number">1</span></a>
                                <a href="#" class="dm-pagination__link active"><span
                                        class="page-number">2</span></a>
                                <a href="#" class="dm-pagination__link"><span class="page-number">3</span></a>
                                <a href="#" class="dm-pagination__link pagination-control"><span
                                        class="page-number">...</span></a>
                                <a href="#" class="dm-pagination__link"><span class="page-number">12</span></a>
                                <a href="#" class="dm-pagination__link pagination-control"><span
                                        class="la la-angle-right"></span></a>
                                <a href="#" class="dm-pagination__option">
                                </a>
                            </li>
                            <li class="dm-pagination__item">
                                <div class="paging-option">
                                    <select name="page-number" class="page-selection">
                                        <option value="20">20/page</option>
                                        <option value="40">40/page</option>
                                        <option value="60">60/page</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </nav> --}}


                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
