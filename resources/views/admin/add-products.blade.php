<?php
/**
 * Created by PhpStorm.
 * User: Men phors
 * Date: 9/23/2017
 * Time: 10:36 PM
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
                        {{--<h2><i class="fa fa-{{$icon}}"></i> {{$title}}</h2>--}}
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br>
                        <form id="building_form" action="" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alias">@lang('buildings.building_id') <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" value="{{ isset($product->alias)?$product->alias:'' }}" name="pro_id" id="building_id" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pro_name">@lang('buildings.name') <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" value="{{ isset($product->pro_name)?$product->pro_name:'' }}" name="pro_name" id="building_name" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">@lang('buildings.address')
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea name="description" id="address" class="form-control col-md-7 col-xs-12">{{ isset($product->description)?$product->description:'' }}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tel">@lang('buildings.contact')
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input data-inputmask="'mask': '099-999-999'" type="text" value="{{ isset($product->pro_price)?$product->pro_price:'' }}" name="pro_price" id="tel" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">@lang('buildings.email')
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" value="{{ isset($product->pro_disc)?$product->pro_disc:'' }}"name="pro_disc" id="email" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <center><img class="img-responsive display-image" src="{{ isset($product->avatar) && $product->avatar!=null?URL::asset('uploads/'.$product->avatar):URL::asset('img/sample.jpg') }}" style="max-width:150px;" alt="Buildings Profile"></center>
                            <br>
                            <div class="text-center">
                          <span class="btn btn-xs btn-warning btn-file btn-flat">
                            <i class="fa fa-folder-open"></i> @lang('admin.avatar')<input accept="image/*" name="avatar" id="avatar" type="file">
                          </span>
                            </div>
                            {{--@if(isset($product->id) && count($product->pro_id)>0 )--}}
                            {{--@foreach($product->pro_id as $pro_id)--}}
                            {{--<div class="form-group">--}}
                            {{--<label class="control-label col-md-3 col-sm-3 col-xs-12">@lang('buildings.floor') <span class="required">*</span>--}}
                            {{--</label>--}}
                            {{--<div class="col-md-6 col-sm-6 col-xs-12">--}}
                            {{--<input type="text" value="{{$pro_id->name}}" name="floors[]" class="form-control col-md-7 col-xs-12">--}}
                            {{--</div> <a href="#" class="remove"><i class="fa fa-close"></i></a>--}}
                            {{--</div>--}}
                            {{--@endforeach--}}
                            {{--@else--}}
                            {{--<div class="form-group">--}}
                            {{--<label class="control-label col-md-3 col-sm-3 col-xs-12">@lang('buildings.floor') <span class="required">*</span>--}}
                            {{--</label>--}}
                            {{--<div class="col-md-6 col-sm-6 col-xs-12">--}}
                            {{--<input type="text" name="floors[]" class="form-control col-md-7 col-xs-12">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--@endif--}}
                            <div class="list_floor">

                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <a class="pull-right" id="add_floor" href="#"> <i class="fa fa-plus"></i> @lang('buildings.add_floor')</a>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            {{ csrf_field() }}
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 text-right col-md-offset-3">
                                    <button type="reset" class="btn btn-danger">@lang('admin.cancel')</button>
                                    <button type="submit" class="btn btn-primary" name="save_product"><a href="{{ url('admin/add_product') }}"></a><i class="fa fa-save"></i> @lang('admin.save')</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
@stop