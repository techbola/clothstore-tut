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
                            New Product
                        </div>

                        @include('admin.includes.errors')

                        @include('admin.includes.sucess')

                        <div class="card-body">
                            <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">

                                {{ csrf_field() }}

                                <div class="form-group pt-2">
                                    <label for="title">Title</label>
                                    <input id="title" type="text" name="title" placeholder="Enter Product title" class="form-control" value="{{ old('title') }}" required>
                                </div>
                                <div class="form-group pt-2">
                                    <label for="price">Price</label>
                                    <input id="price" type="number" min="0" name="price" placeholder="Enter Price" class="form-control" value="{{ old('price') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="featured">Image</label>
                                    <input id="featured" type="file" name="featured" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea id="editor1" name="description" required>{{ old('description') }}</textarea>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-sm-12">
                                        <p class="text-left">
                                            <button type="submit" class="btn btn-space btn-primary">Create Product</button>
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

<script src="{{ asset('js/toastr.min.js') }}"></script>

<script>

    @if(Session::has('successs'))

    toastr.success("{{ Session::get('success') }}")

    @endif

</script>

</body>

</html>