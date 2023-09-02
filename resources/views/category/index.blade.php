@extends('layouts.app')
@include('partials.common_index_css')
@section('content')

<div class="box-body">
    @push('js')
    @include('partials._session')
    @endpush
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12" style="margin-top:10px ">
                <div style="margin:0 0 20px 0 ">
                <form action="{{ route('users.index') }}" method="GET" class="form-inline">
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
                        <th >Action</th>
                      </tr>
                    </thead>
                    <tbody>
             @foreach ($categories as $item )
                      <tr>
                        <td>1</td>
                        <td>
                            {{$item->name}}
                        </td>

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

