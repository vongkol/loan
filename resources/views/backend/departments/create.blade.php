@extends('layouts.app')
@section('content')
    <?php $lang = Auth::user()->language .".php"; ?>
    <?php include(app_path()."/lang/". $lang); ?>
    <div class="panel">
        <div class="panel-heading bg-primary">
        <span class="panel-title">
           <strong>{{$new_department}}</strong>
        </span>
        </div>
        <div class="panel-body pn">
            <div class="row">
                <form action="{{url('/department/save')}}" class="form-horizontal" method="post" name="frm" id="frm">
                    @if(Session::has('sms'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            {{session('sms')}}
                        </div>
                    @endif
                    @if(Session::has('sms1'))
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            {{session('sms1')}}
                        </div>
                    @endif
                    <div class="col-sm-6">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="code" class="control-label col-sm-4">{{$code}}</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="code" id="code"
                                       autofocus required value="{{old('code')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="control-label col-sm-4">{{$name}}</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="name" id="name" required value="{{old('name')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4">&nbsp;</label>
                            <div class="col-sm-8">
                                <button type="submit" class="btn btn-primary btn-flat">{{$save}}</button>
                                <a href="{{url('/department')}}" class="btn btn-danger btn-flat">{{$cancel}}</a>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection