@extends('Test.meeting')
@section('content')

     <main style="height:100px;width:1000px;float:right;margin: 40% 0% 50% 40%">
       <div class="container">
        <div class='row'>
          
          <br>
            <form action="{{url('/Test/all')}}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row page-header">
              <div class="col-sm-6">
                <h3>EDIT STATUS</h3>
                </div>
               </div>


               <div class="panel panel-default">
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th><input type="checkbox" id="checkAll"/></th>
                                    <th>Username</th>
                                    <th>Name</th>
                                    <th>E-mail</th>
                                    <th>Tel</th>
                                    <th>Active</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if($track != null)
                                @foreach($track as $u)
                                <tr>
                                    <td>{{$u->trackingId}}</td>
                                    <td class="text-center"><input name="id[]" type="checkbox" id="id" value="{{$u->id}}" class="checkboxAll" /></td>
                                    <td>{{$u->trackingTopic}}</td>
                                    <td>{{$u->trackingDeadline}}</td>
                                    <td>{{$u->personFirstName}}</td>
                                    <td>{{$u->personLastName}}</td>
                                    <td class="text-center"><i class="fa {{$u->trackStatusName == 'TO DO' ? 'glyphicon glyphicon-ok ':'glyphicon glyphicon-remove'}}"></i></td>
                                    <td class="text-right">
                                        <a href="{{url('admin/user/form/'.$u->id)}}" title="" class="edit"><i class="glyphicon glyphicon-pencil"></i></a>
                                        &nbsp;&nbsp;&nbsp;
                                        <a href="{{url('admin/user/delete/'.$u->id)}}" title="" class="del"><i class="glyphicon glyphicon-remove"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                  <p> no variable </p>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            </form>
    
        </div>
        </div>  
     </main>
@stop

