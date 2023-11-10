@extends('layouts.app')


@section('content')
<div class="userDatatable userDatatable--ticket userDatatable--ticket--2 mt-1">
    <div class="table-responsive">
       <table class="table mb-0 table-borderless">
          <thead>
             <tr class="userDatatable-header">
                <th>
                   <span class="userDatatable-title">ID</span>
                </th>
                <th>
                   <span class="userDatatable-title">User</span>
                </th>
                <th>
                   <span class="userDatatable-title">Company</span>
                </th>
                <th>
                   <span class="userDatatable-title">Position</span>
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

             <tr>
                <td>#01</td>
                <td>
                   <div class="d-flex">
                      <div class="userDatatable-inline-title">
                         <a href="#" class="text-dark fw-500">
                            <h6>Kellie Marquot</h6>
                         </a>
                      </div>
                   </div>
                </td>
                
                <td>
                   <div class="userDatatable-content--subject">
                      Business Development
                   </div>
                </td>
                <td>
                   <div class="userDatatable-content--priority">
                      Web Developer
                   </div>
                </td>
                <td>
                   <div class="userDatatable-content d-inline-block">
                      <span class="bg-opacity-success  color-success userDatatable-content-status active">active</span>
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
                         <a href="#" class="edit">
                            <i class="uil uil-edit"></i>
                         </a>
                      </li>
                      <li>
                         <a href="#" class="remove">
                            <i class="uil uil-trash-alt"></i>
                         </a>
                      </li>
                   </ul>
                </td>
             </tr>


             <tr>
                <td>#02</td>
                <td>
                   <div class="d-flex">
                      <div class="userDatatable-inline-title">
                         <a href="#" class="text-dark fw-500">
                            <h6>Robert Clinton</h6>
                         </a>
                      </div>
                   </div>
                </td>
                <td>
                   <div class="userDatatable-content--subject">
                      Vehicle Master
                   </div>
                </td>
                <td>
                   <div class="userDatatable-content--priority">
                      Senior Manager
                   </div>
                </td>
                <td>
                   <div class="userDatatable-content d-inline-block">
                      <span class="bg-opacity-warning  color-warning userDatatable-content-status active">deactivated</span>
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
                         <a href="#" class="edit">
                            <i class="uil uil-edit"></i>
                         </a>
                      </li>
                      <li>
                         <a href="#" class="remove">
                            <i class="uil uil-trash-alt"></i>
                         </a>
                      </li>
                   </ul>
                </td>
             </tr>


             <tr>
                <td>#03</td>
                <td>
                   <div class="d-flex">
                      <div class="userDatatable-inline-title">
                         <a href="#" class="text-dark fw-500">
                            <h6>Chris Joe</h6>
                         </a>
                      </div>
                   </div>
                </td>
                <td>
                   <div class="userDatatable-content--subject">
                      Business Development
                   </div>
                </td>
                <td>
                   <div class="userDatatable-content--priority">
                      Content writer
                   </div>
                </td>
                <td>
                   <div class="userDatatable-content d-inline-block">
                      <span class="bg-opacity-danger  color-danger userDatatable-content-status active">blocked</span>
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
                         <a href="#" class="edit">
                            <i class="uil uil-edit"></i>
                         </a>
                      </li>
                      <li>
                         <a href="#" class="remove">
                            <i class="uil uil-trash-alt"></i>
                         </a>
                      </li>
                   </ul>
                </td>
             </tr>


             <tr>
                <td>#04</td>
                <td>
                   <div class="d-flex">
                      <div class="userDatatable-inline-title">
                         <a href="#" class="text-dark fw-500">
                            <h6>Jack Kalis</h6>
                         </a>
                      </div>
                   </div>
                </td>
                <td>
                   <div class="userDatatable-content--subject">
                      Smart Collection
                   </div>
                </td>
                <td>
                   <div class="userDatatable-content--priority">
                      UX/UI Designer
                   </div>
                </td>
                <td>
                   <div class="userDatatable-content d-inline-block">
                      <span class="bg-opacity-success  color-success userDatatable-content-status active">open</span>
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
                         <a href="#" class="edit">
                            <i class="uil uil-edit"></i>
                         </a>
                      </li>
                      <li>
                         <a href="#" class="remove">
                            <i class="uil uil-trash-alt"></i>
                         </a>
                      </li>
                   </ul>
                </td>
             </tr>


             <tr>
                <td>#05</td>
                <td>
                   <div class="d-flex">
                      <div class="userDatatable-inline-title">
                         <a href="#" class="text-dark fw-500">
                            <h6>Black Smith</h6>
                         </a>
                      </div>
                   </div>
                </td>
                <td>
                   <div class="userDatatable-content--subject">
                      Print Media
                   </div>
                </td>
                <td>
                   <div class="userDatatable-content--priority">
                      Graphic Designer
                   </div>
                </td>
                <td>
                   <div class="userDatatable-content d-inline-block">
                      <span class="bg-opacity-success  color-success userDatatable-content-status active">open</span>
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
                         <a href="#" class="edit">
                            <i class="uil uil-edit"></i>
                         </a>
                      </li>
                      <li>
                         <a href="#" class="remove">
                            <i class="uil uil-trash-alt"></i>
                         </a>
                      </li>
                   </ul>
                </td>
             </tr>


             

          </tbody>
       </table>
    </div>
    {{-- <div class="d-flex justify-content-end pt-30">

       <nav class="dm-page ">
          <ul class="dm-pagination d-flex">
             <li class="dm-pagination__item">
                <a href="#" class="dm-pagination__link pagination-control"><span class="la la-angle-left"></span></a>
                <a href="#" class="dm-pagination__link"><span class="page-number">1</span></a>
                <a href="#" class="dm-pagination__link active"><span class="page-number">2</span></a>
                <a href="#" class="dm-pagination__link"><span class="page-number">3</span></a>
                <a href="#" class="dm-pagination__link pagination-control"><span class="page-number">...</span></a>
                <a href="#" class="dm-pagination__link"><span class="page-number">12</span></a>
                <a href="#" class="dm-pagination__link pagination-control"><span class="la la-angle-right"></span></a>
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
       </nav>


    </div> --}}
 </div>
@endsection