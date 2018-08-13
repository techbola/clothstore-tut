<!DOCTYPE html>
<html lang="en">

@include('admin.includes.head')

<body>
<div class="be-wrapper">

    @include('admin.includes.nav')

    @include('admin.includes.sidebar')

    <div class="be-content">
        <div class="main-content container-fluid">

            <div class="row">
                <!--Responsive table-->
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-header">
                            Products
                        </div>
                        <div class="card-body">
                            <div class="table-responsive noSwipe">
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th style="width:20%;">Image</th>
                                        <th style="width:17%;">Title</th>
                                        <th style="width:17%;">Price</th>
                                        <th style="width:10%;">Date Added</th>
                                        <th style="width:10%;"></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($products as $product)

                                        <tr>
                                            <td class="user-avatar cell-detail user-info">
                                                <img src="{{ asset($product->featured) }}" alt="Product title">
                                            </td>
                                            <td class="cell-detail">
                                                <span>{{ $product->title }}</span>
                                            </td>
                                            <td class="cell-detail">
                                                <span>${{ $product->price }}</span>
                                            </td>
                                            <td class="cell-detail">
                                                <span>{{ $product->created_at->toformattedDateString() }}</span>
                                            </td>
                                            <td class="text-right">
                                                <div class="btn-group btn-hspace">
                                                    <button type="button" data-toggle="dropdown" class="btn btn-secondary dropdown-toggle">
                                                        Action
                                                        <span class="icon-dropdown mdi mdi-chevron-down"></span>
                                                    </button>
                                                    <div role="menu" class="dropdown-menu">
                                                        <a href="{{ route('products.edit', $product->id) }}" class="dropdown-item">EDIT</a>
                                                        <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                                            {{csrf_field()}}
                                                            {{ method_field('DELETE') }}
                                                            <button type="submit" class="dropdown-item">DELETE</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    {{ $products->links() }}
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