<!DOCTYPE html>
<html lang="en">

@include('admin.includes.head')

<body>
<div class="be-wrapper">

    @include('admin.includes.nav')

    @include('admin.includes.sidebar')

    <div class="be-content">

        <div class="main-content container-fluid">
            <!--Summernote-->
            <div class="row">

                <div class="col-md-12">
                    <div class="card card-border-color card-border-color-primary">
                        <div class="card-header card-header-divider">
                            Edit Post
                        </div>

                        @include('admin.includes.errors')

                        <div class="card-body">
                            <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">

                                {{ csrf_field() }}

                                {{ method_field('PUT') }}

                                <div class="form-group pt-2">
                                    <label for="title">Title</label>
                                    <input id="title" type="text" name="title" placeholder="Enter Post title" class="form-control" value="{{ $post->title }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="featured">Image</label>
                                    <input id="featured" type="file" name="featured" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea id="editor1" name="description" required>{{ $post->content }}</textarea>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-sm-12">
                                        <p class="text-left">
                                            <button type="submit" class="btn btn-space btn-primary">Update Post</button>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="{{ asset('admin/assets/lib/jquery/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/js/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/lib/summernote/summernote-bs4.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/assets/lib/summernote/summernote-ext-beagle.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        //initialize the javascript
        App.init();
        App.textEditors();
    });
</script>

</body>

</html>