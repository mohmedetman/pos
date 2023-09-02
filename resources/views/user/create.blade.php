@extends('layouts.app')
@section('content')

<section class="content">
    <div class="container-fluid">
        @include('partials._errors')
      <div class="row">
        <!-- left column -->
        <div class="col-md-12" style="margin-top:10px ">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Quick Example</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{url('users/store')}}" method="POST" >
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name = "email"placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                </div>
                <div class="row">

                    <div class="col-6 col-sm-12">
                      <div class="card card-primary card-tabs">
                        <div class="card-header p-0 pt-1">
                          <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                          @php
                              $cat = ['products','users']
                          @endphp

                          @foreach ($cat as $index=>$item )


                            <li class="nav-item">
                              <a class="nav-link {{$index==0 ? 'active':''}}"  data-toggle="pill" href="#{{$item}}" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">{{$item}}</a>
                            </li>
                            @endforeach

                          </ul>
                        </div>
                        <div class="card-body" >
                          <div class="tab-content" >
                            @foreach ( $cat as $index=>$item )


                            <div class="tab-pane  {{$index==0 ? 'active':''}}" id="{{$item}}">

                                <div class="form-group">

                                    <div class="form-check " style="display: inline-block">
                                        <input class="form-check-input" name="permission[]" value="{{$item}}-read"  type="checkbox" >
                                        <label class="form-check-label" for="checkbox2">
                                           read  {{$item }}
                                        </label>
                                    </div>
                                    <div class="form-check " style="display: inline-block">
                                        <input class="form-check-input" name="permission[]" value="{{$item}}-create" type="checkbox" >
                                        <label class="form-check-label" for="checkbox2">
                                            create {{$item }}
                                        </label>
                                    </div>
                                    <div class="form-check " style="display: inline-block">
                                        <input class="form-check-input" name="permission[]" value="{{$item}}-delete"  type="checkbox">
                                        <label class="form-check-label" for="checkbox2">
                                            delete  {{$item }}
                                        </label>
                                    </div>




                                </div>

                            </div>
                            @endforeach
                          </div>
                        </div>
                      </div>
                  </div>
              </div>

              </div>
              <!-- /.card-body -->


              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
           </div>
        </div>
    </div>
</section>






@endsection
