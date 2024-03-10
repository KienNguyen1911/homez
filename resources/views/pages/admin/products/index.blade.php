@extends('layouts.dashboard')

@section('additional')
@endsection

@section('content')
    <div class="row align-items-center pb40">
        <div class="col-xxl-3">
            <div class="dashboard_title_area">
                <h2>My Properties</h2>
                <p class="text">We are glad to see you again!</p>
            </div>
        </div>
        {{-- <div class="col-xxl-9">
            <div class="dashboard_search_meta d-md-flex align-items-center justify-content-xxl-end">
                <div class="item1 mb15-sm">
                    <div class="search_area">
                        <input type="text" class="form-control bdrs12" placeholder="Search">
                        <label><span class="flaticon-search"></span></label>
                    </div>
                </div>
                <div class="page_control_shorting bdr1 bdrs12 py-2 ps-3 pe-2 mx-1 mx-xxl-3 bgc-white mb15-sm maxw140">
                    <div class="pcs_dropdown d-flex align-items-center"><span class="title-color">Sort by:</span>
                        <select class="selectpicker show-tick">
                            <option>New</option>
                            <option>Best Seller</option>
                            <option>Best Match</option>
                            <option>Price Low</option>
                            <option>Price High</option>
                        </select>
                    </div>
                </div>
                <a href="{{ route('admin.products.create') }}" class="ud-btn btn-thm">Add New Property<i class="fal fa-arrow-right-long"></i></a>
            </div>
        </div> --}}
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                <div class="packages_table table-responsive">
                    <table class="table-style3 table at-savesearch">
                        <thead class="t-head">
                            <tr>
                                <th scope="col">Listing title</th>
                                <th scope="col">Date Published</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="t-body">
                            @foreach ($products as $product)
                            <tr>
                                <th scope="row">
                                    <div class="listing-style1 dashboard-style d-xxl-flex align-items-center mb-0">
                                        <div class="list-thumb">
                                            <img class="w-100" src="{{ asset($product->main_image) }}" alt="">
                                        </div>
                                        <div class="list-content py-0 p-0 mt-2 mt-xxl-0 ps-xxl-4">
                                            <div class="h6 list-title">
                                                <a href="">{{ $product->name }}</a>
                                            </div>
                                            <p class="list-text mb-0">
                                                {{ $product->province->name }}, {{ $product->district->name }}, {{ $product->ward->name }}
                                            </p>
                                            <div class="list-price">
                                                <a href="#">{{number_format($product->price)}} VND/<span>mo</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </th>
                                <td class="vam">{{ $product->created_at }}</td>
                                <td class="vam">
                                    @foreach (\App\Models\Product::STATUS as $key => $status)
                                        @if ($product->status == $key)
                                        <span class="pending-style style{{$key}}">
                                            {{ $status }}
                                        </span>
                                        @endif
                                    @endforeach
                                </td>
                                <td class="vam">
                                    <div class="d-flex">
                                        <a href="{{ route('admin.products.edit', ['product' => $product->id]) }}"
                                            class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                            <span class="fas fa-pen fa"></span>
                                        </a>
                                        <a class="icon delete-btn" data-bs-toggle="modal" data-bs-target="#exampleModalToggle"
                                            href="#exampleModalToggle" data-bs-placement="top" title="Delete" data-value="{{ $product->id }}"
                                        >
                                            <span class="flaticon-bin"></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $products->links('pagination::default') }}
                </div>
            </div>
        </div>
    </div>
  <!-- Signup Modal -->
  <div class="signup-modal">
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalToggleLabel">Delete product</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="modal_text">
              <h4>Are you sure you want to delete this property?</h4>
              <p>Once you delete this property, it won't be possible to undo this action.</p>
            </div>
            {{-- confirm --}}
            <form method="post" id="delete-form">
                @csrf
                @method('DELETE')
                <input type="hidden" name="product_id" id="product_id" value="">
                <div class="modal_btn">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            // pass param value to modal
            $('.delete-btn').on('click', function() {
                var product_id = $(this).data('value');
                let url = '{{ route('admin.products.destroy', ['product' => ':product_id']) }}';
                $('#delete-form').attr('action', url.replace(':product_id', product_id));
            });
            
            
        });
    </script>
@endpush