@extends('backend.layouts.master',['title' => 'Add Banner'])
@section('css')
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/summernote/summernote-bs4.min.css') }}">
@endsection
@section('content')
    <div class="card card-default">
        <div class="card-body">
            <form action="{{ route('banner.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{old('title')}}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea id="summernote" name="description">
                            {{ old('description') }}
                        </textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>{{ __('general.photo') }}</label>
                            <div class="form-group">
                                <div class="input-group">
                               <span class="input-group-btn">
                                 <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                   <i class="fa fa-picture-o"></i> Choose
                                 </a>
                               </span>
                                    <input id="thumbnail" class="form-control" type="text" name="photo">
                                </div>
                                <img id="holder" style="margin-top:15px;max-height:100px;">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{ __('general.status') }}</label>
                            <select class="form-control select2" name="status">
                                @foreach(\App\Constants\BannerConstants::getStatus() as $optionKey => $optionValue)
                                    @if ($optionKey == old('status'))
                                        <option value="{{ $optionKey }}" selected>{{ $optionValue }}</option>
                                    @else
                                        <option value="{{ $optionKey }}">{{ $optionValue }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <!-- /.form-group -->
                    </div>

                    <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{ __('banner.condition') }}</label>
                            <select class="form-control select2" name="condition">
                                @foreach(\App\Constants\BannerConstants::getConditions() as $optionKey => $optionValue)
                                    @if ($optionKey == old('condition'))
                                        <option value="{{ $optionKey }}" selected>{{ $optionValue }}</option>
                                    @else
                                        <option value="{{ $optionKey }}">{{ $optionValue }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </div>
            </form>
            <!-- /.row -->
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection
@section('scripts')
    <!-- Summernote -->
    <script src="{{ asset('backend/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $(function () {
            // Summernote
            $('#summernote').summernote();
            $('.select2').select2();
        })
    </script>
    <script>
        $('#lfm').filemanager('image');
    </script>

@endsection
