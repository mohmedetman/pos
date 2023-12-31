{{-- <form action="{{ url('category/store') }}" method="POST">
    @csrf

    @foreach(config('translatable.locales') as $locale)
        <label for="name_{{ $locale }}">name ({{ $locale }})</label>
        <input type="text" name="{{ $locale }}[name]" class="form-control" value="{{ old($locale . '.title') }}">

        {{-- <input type="text" name="{{ $locale }}_title" required> --}}
    {{-- @endforeach

    <button type="submit">Create Post</button>
</form> --}}
@extends('layouts.app')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>@lang('site.categories')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ url('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ url('dashboard.categories.index') }}"> @lang('site.categories')</a></li>
                <li class="active">@lang('site.add')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">@lang('site.add')</h3>
                </div><!-- end of box header -->
                <div class="box-body">

                    @include('partials._errors')

                    <form action="{{ url('category/store') }}" method="post">

                        {{ csrf_field() }}
                        {{-- {{ method_field('post') }} --}}

                        @foreach (config('translatable.locales') as $locale)
                            <div class="form-group">
                                <label>@lang('site.' . $locale . '.name')</label>
                                <input type="text" name="{{ $locale }}[name]" class="form-control" value="{{ old($locale . '.name') }}">
                            </div>
                        @endforeach

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection

