@extends('Test.meeting')
@section('content')
<div class="row page-header">
        <div class="col-sm-6">
            <h1 class="">{{$trackingId != null ? 'Update' : 'Add New'}} TrackingId</h1>
        </div>
        <div class="col-sm-6 text-right padding-top-20">
            <a class="btn btn-default" href="{{url('admin/user/index')}}" title="Back"><i class="glyphicon glyphicon-arrow-left" ></i> Back</a>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

<div class="panel panel-default">
        <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('editStatusForm') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ $trackingId }}">
 
                <div class="form-group">
                    <label class="col-md-4 control-label">trackingTopic</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="trackingTopic" value="{{ $tracking ? $tracking->trackingTopic : old('trackingTopic') }}">
                        {!!$errors->first('trackingTopic', '<span class="control-label color-red" for="trackingTopic">*:message</span>')!!}
                    </div>
                </div>
 
                <div class="form-group">
                    <label class="col-md-4 control-label">Description</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="trackingDescription" value="{{ $tracking ? $tracking->trackingDescription : old('trackingDescription') }}">
                        {!!$errors->first('trackingDescription', '<span class="control-label color-red" for="trackingDescription">*:message</span>')!!}
                    </div>
                </div>
 
                <div class="form-group">
                    <label class="col-md-4 control-label">Deadline</label>
                    <div class="col-md-6">
                        <input type="datetime-local" class="form-control" name="trackingDeadline" value="{{$tracking ? $tracking->trackingDeadline : old('trackingDeadline')}}">
                        {!!$errors->first('trackingDeadline', '<span class="control-label color-red" for="trackingDeadline">*:message</span>')!!}
                    </div>
                </div>
 
                <div class="form-group">
                    <label class="col-md-4 control-label">Status</label>
                    <div class="col-md-6">
                        <section value="{{ $tracking ? $tracking->trackStatusName : old('trackStatusName') }}">
                            <option name="trackStatusName" value="TODO">TO DO</option>
                            <option name="trackStatusName" value="DOING">DOING</option>
                            <option name="trackStatusName" value="DONE">DONE</option>
                        {!!$errors->first('trackStatusName', '<span class="control-label color-red" for="trackStatusName">*:message</span>')!!}
                        </section>
                    </div>
                </div>
 
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-danger">
                            <i class="glyphicon glyphicon-floppy-disk"></i>
                            {{$id == 0 ? 'Add':'Update'}}
                        </button>
                        <a href="{{url('admin/user/form')}}" class="btn btn-success">
                            <i class="glyphicon glyphicon-plus-sign"></i>
                            New User
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @stop