@extends('layouts.app')
@include('partials.common_index_css')
@section('content')

<div class="box-body">
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12" style="margin-top:10px ">
                <div style="margin:0 0 20px 0 ">
                <form action="{{ url('users.index') }}" method="GET" class="form-inline">
                    <div class="form-group mr-2">
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>

                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
                </form>
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Bordered Table</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>address</th>
                        <th>phone</th>
                        <th >add</th>

                        <th >action</th>
                      </tr>
                    </thead>
                    <tbody>
             @foreach ($clients as $item )
                      <tr>
                        <td>1</td>
                        <td>
                            {{$item->name}}
                        </td>
                        <td>
                            {{$item->address}}
                        </td>

                        <td>
                             {{-- {{implode('-', array_filter($item->phone));}} --}}
                     {{($item->phone)}}
                        </td>
                        <td> <a href="{{url('order',$item->id)}}" class="btn btn-primary btn-sm">add</a></td>

                        <td>
                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->

              </div>
            </div>
        </div>
    </div>
    </section>

</div><

@endsection
@push('js')
scr
@include('partials.common_index_js')

@endpush

