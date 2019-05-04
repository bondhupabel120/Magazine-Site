@extends('admin.master')

@section('title')
    Edit News
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <br/>
            <div class="well">

                <h1 class="text-success text-center">{{ Session::get('message') }}</h1>

                <form action="{{ route('update-news') }}" method="POST" class="form-horizontal" enctype="multipart/form-data" name="editNewsForm">
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
                            <input type="text" name="news_title" value="{{ $news->news_title }}" class="form-control"/>
                            <input type="hidden" name="id" value="{{ $news->id }}" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">News Short Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="news_short_description">{{ $news->news_short_description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">News Long Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="editor" name="news_long_description">{{ $news->news_long_description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">News Image</label>
                        <div class="col-md-9">
                            <input type="file" name="news_image" accept="image/*"/>
                            <br/>
                            <img src="{{ asset($news->news_image) }}" alt="" height="100" width="120">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">News Audio</label>
                        <div class="col-md-9">
                            <input type="file" name="news_audio"/>
                            <br/>
                            <video controls>
                                <source src="{{ asset($news->news_audio) }}">
                            </video>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">Publication status</label>
                        <div class="col-md-9 radio">
                            <label><input type="radio" {{ $news->publication_status == 1 ? 'checked' : ' ' }} name="publication_status" value="1"/> Published</label>
                            <label><input type="radio" {{ $news->publication_status == 0 ? 'checked' : ' ' }} name="publication_status" value="0"/> UnPublished</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Update News Info" />
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script>
        document.forms['editNewsForm'].elements['category_id'].value = '{{ $news->category_id}}';
    </script>
@endsection
