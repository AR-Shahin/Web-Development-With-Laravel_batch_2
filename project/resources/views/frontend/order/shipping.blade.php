@extends('layouts.frontend_app')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-9">
                <h2 class="text-center">Shipping Address</h2>
                <form action="{{ route('order.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <h5><b>Shipping Address</b></h5>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Name : </label>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Enter your Name" value="{{ old('name') }}">
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Email : </label>
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Enter your Email" value="{{ old('email') }}">
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Phone : </label>
                                                <input type="text" class="form-control" name="phone"
                                                    placeholder="Enter your Phone number" value="{{ old('phone') }}">
                                                @error('phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Region : </label>
                                                <input type="text" class="form-control" name="region"
                                                    placeholder="Enter your Region" value="{{ old('region') }}">
                                                @error('region')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">City : </label>
                                                <input type="text" class="form-control" name="city"
                                                    placeholder="Enter your City" value="{{ old('city') }}">
                                                @error('city')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Address : </label>
                                                <input type="text" class="form-control" name="address"
                                                    placeholder="Enter your Address" value="{{ old('address') }}">
                                                @error('address')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Remark : </label>
                                                <textarea name="remark" id="" cols="30" rows="5" class="form-control"></textarea>
                                                @error('remark')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5><b>Cart Summery</b></h5>
                                    <hr>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Total Product</th>
                                            <td>{{ auth('customer')->user()->cartItems() }}</td>
                                        </tr>
                                        <tr>
                                            <th>Total Price</th>
                                            <td>
                                                $ {{ auth('customer')->user()->cartTotal() }}
                                            </td>
                                        </tr>

                                    </table>

                                    <h5><b>Payment Method</b></h5>
                                    <hr>
                                    <select name="payment_method" id="payment_method" class="form-control">
                                        <option value="">Select A Payment Method</option>
                                        <option value="cash">Hand Cash</option>
                                        <option value="bksh">Bksh</option>
                                    </select>
                                    <div class="form-group mt-2">
                                        <input type="text" class="form-control" id="trans_id" name="trans_id"
                                            placeholder="Transiction No.(AB5036)">
                                    </div>
                                    @error('payment_method')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <button type="submit" class="btn btn-success btn-block">Order Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        const $ = (el) => document.querySelector(el);

        const trans_id = $('#trans_id');
        const payment_method = $('#payment_method');

        trans_id.style.display = 'none';

        payment_method.addEventListener('change', function(e) {
            if (this.value) {
                if (this.value === 'bksh') {
                    trans_id.style.display = 'block';
                } else {
                    trans_id.style.display = 'none';
                }
            } else {
                trans_id.style.display = 'none';
            }
        })
    </script>
@endpush
