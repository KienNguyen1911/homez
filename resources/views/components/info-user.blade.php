<section class="pb-0" id="form-info">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-5 wow fadeInRight" data-wow-delay="00ms">
                <div class="main-title mb40">
                    <h2 class="title">HÃY ĐỂ CHÚNG TÔI GIÚP BẠN</h2>
                    <p class="paragraph fz15">Sự hài lòng của bạn là niềm vui của chúng tôi</p>
                </div>
                <div class="inquiry-form mb30-md">
                    <form class="form-style1" method="POST" action="{{ route('user-info') }}">
                        @csrf
                        <div class="row">
                            @if ($errors->any())
                                <div class="col-md-12">
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                            {{-- <div class="col-md-12">
                                <div class="mb20">
                                    <label class="form-label fw600 dark-color">Inquiry Type</label>
                                    <div class="bootselect-multiselect">
                                        <select class="selectpicker" multiple>
                                            <option>Apartments</option>
                                            <option>Bungalow</option>
                                            <option>Houses</option>
                                            <option>Loft</option>
                                            <option>Office</option>
                                            <option>TownHome</option>
                                            <option>Villa</option>
                                        </select>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="col-md-5">
                                <div class="mb20">
                                    <label class="form-label fw600 dark-color">Personel Role</label>
                                    <div class="bootselect-multiselect">
                                        <select class="selectpicker" multiple>
                                            <option>Mr.</option>
                                            <option>Mrs.</option>
                                            <option>Miss.</option>
                                        </select>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-md-12">
                                <div class="mb20">
                                    <label class="form-label fw600 dark-color">Họ và tên</label>
                                    <input type="text" class="form-control" placeholder="Tên của bạn" name="name"
                                        value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="mb20">
                                    <label class="form-label fw600 dark-color">Email</label>
                                    <input type="email" class="form-control" placeholder="info@t-dolphin.com"
                                        name="email" value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mb20">
                                    <label class="form-label fw600 dark-color">Số điện thoại</label>
                                    <input type="text" class="form-control" placeholder="0912341234" name="phone"
                                        value="{{ old('phone') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb20">
                                    <label class="form-label fw600 dark-color">Tỉnh</label>
                                    <div class="bootselect-multiselect">
                                        <select class="selectpicker" name="province_id" id="province_id">
                                            <option value="">Chọn tỉnh</option>
                                            @forelse ($provinces as $province)
                                                <option value="{{ $province->id }}"
                                                    @if (old('province_id') == $province->id) selected @endif>
                                                    {{ $province->name }}</option>
                                            @empty
                                                <option>Không có dữ liệu</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb20">
                                    <label class="form-label fw600 dark-color">Quận/Huyện</label>
                                    <div class="bootselect-multiselect">
                                        <select class="selectpicker" multiple name="district_ids[]" id="district_id">
                                            <option value="">Chọn quận/huyện</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb30">
                                    <label class="form-label fw600 dark-color">Giá tối thiểu</label>
                                    <input type="text" class="form-control" placeholder="VND 1.000.000" name="min_price"
                                        value="{{ old('min_price') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb20">
                                    <label class="form-label fw600 dark-color">Giá tối đa</label>
                                    <input type="text" class="form-control" placeholder="VND 10.000.000" name="max_price"
                                        value="{{ old('max_price') }}">
                                </div>
                            </div>
                            {{-- textarea --}}
                            <div class="col-md-12">
                                <div class="mb20">
                                    <label class="form-label fw600 dark-color">Ghi chú</label>
                                    <textarea class="form-control" placeholder="Hãy cho chúng tôi biết mong muốn của bạn" name="note"
                                        value="{{ old('note') }}"></textarea>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button class="ud-btn btn-thm" type="submit">Xác nhận<i
                                        class="fal fa-arrow-right-long"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-xl-1 wow fadeInLeft" data-wow-delay="300ms">
                <div class="inquiry-form">
                    <div class="inquiry-img"><img class="w-100" src="images/about/about-4.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .filter-option-inner-inner {
        font-size: 14px;
    }
</style>