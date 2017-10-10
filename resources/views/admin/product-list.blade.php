<?php
/**
 * Created by PhpStorm.
 * User: Men phors
 * Date: 8/27/2017
 * Time: 12:01 AM
 */
?>
@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Products Dashboard</h1>
@stop

@section('content')
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><i class="fa fa-building-o"></i> @lang('admin.pro_title')</h2>
                        <!-- button -->

                        <a href="{{ url('admin/add_product') }}" class="btn btn-sm btn-primary btn-flat pull-right"><i class="fa fa-plus"></i> @lang('admin.create_new')</a>
                        {{--<a href="{{ url('buildings/exportPDF') }}" class="btn btn-sm btn-success btn-flat pull-right"><i class="glyphicon glyphicon-download"></i>Export</a>--}}
                        <!-- /button -->
                        <div class="clearfix"></div>
                    </div>
                    <div style="height:10px;"></div>
                    <div class="x_content">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>@lang('admin.pro_id')</th>
                                <th>@lang('admin.pro_name')</th>
                                <th>@lang('admin.pro_desc')</th>
                                <th>@lang('admin.price')</th>
                                <th>@lang('admin.pro_img')</th>
                                <th>@lang('admin.pro_dic')</th>
                                <th>@lang('admin.pro_created')</th>
                                <th class="no-sort" style="width: 80px;">Manage</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php $i=1; ?>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{ $product->pro_name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->pro_price }}</td>
                                    <td>{{ $product->pro_disc }}</td>
                                    <td>{{ count($product->pro_id) }}</td>
                                    <td>{{ Date($product->created_at) }}</td>
                                    <td>
                                        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="@lang('common.edit')" class="btn btn-xs btn-info btn-flat" href="{{ url('/admin/edit/'.$product->pro_id) }}"><i class="fa fa-edit"></i></a>
                                        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="@lang('common.delete')" class="btn btn-xs btn-danger btn-flat" onclick="return confirm('Are you sure to delete?');" href="{{ url('/admin/delete/'.$product->pro_id) }}"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop