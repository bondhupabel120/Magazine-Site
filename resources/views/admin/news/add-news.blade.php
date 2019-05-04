@extends('admin.master')

@section('title')
    Add News
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <br/>
            <div class="well">

                <h1 class="text-success text-center">{{ Session::get('message') }}</h1>

                <form action="{{ route('new-news') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-3">Category Name</label>
                        <div class="col-md-9">
                            <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">News Title</label>
                        <div class="col-md-9">
                            <input type="text" name="news_title" class="form-control"/>
                            <span class="text-danger">{{ $errors->has('news_title') ? $errors->first('news_title') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">News Short Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="news_short_description"></textarea>
                            <span class="text-danger">{{ $errors->has('news_short_description') ? $errors->first('news_short_description') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">News Long Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="editor" name="news_long_description"></textarea>
                            <span class="text-danger"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">News Image</label>
                        <div class="col-md-9">
                            <input type="file" name="news_image" accept="image/*"/>
                            <span class="text-danger">{{ $errors->has('news_image') ? $errors->first('news_image') : ' ' }}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">News Audio</label>
                        <div class="col-md-9">
                            <input type="file" name="news_audio"/>
                            <span class="text-danger">{{ $errors->has('news_audio') ? $errors->first('news_audio') : ' ' }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Publication status</label>
                        <div class="col-md-9 radio">
                            <label><input type="radio" name="publication_status" value="1"/> Published</label>
                            <label><input type="radio" name="publication_status" value="0"/> UnPublished</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Save News Info" />
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
