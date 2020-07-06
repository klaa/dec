@extends('classic.general')

@section('pagetitle', 'Liên hệ với Trung tâm Đào tạo Từ xa - Đại học Thái Nguyên')

@section('khaigiang')
  @include('classic.khaigiang')     
@endsection

@section('maincontent')
<div class="tab">
    <h3 class="tab-header">Gửi thông tin liên hệ đến Trung tâm Đào tạo từ xa</h3>
    <div class="tab-body">
        <form action="{{ route('contact') }}" class="border-bottom mb-2" method="POST">
            @csrf
            <div class="form-group">
                <label for="frmName">Họ tên</label>
                <input type="text" id="frmName" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="frmPhone">Điện thoại</label>
                <input type="text" id="frmPhone" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="frmMessage">Nội dung</label>
                <textarea name="name" class="form-control" row="6"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-success">Gửi tin nhắn</button>
                <button type="reset" class="btn btn-outline-danger">Xóa</button>
            </div>
        </form>
        <div class="directinfo">
            <div class="row">
                <div class="col-md-4">
                    <h5>Liên hệ trực tiếp</h5>
                    <h5 class="mb-4">Trung tâm Đào tạo Từ xa - ĐHTN</h5>
                    <p>Điện thoại: <a href="tel:02083648989">0208 364 89 89</a></p>
                    <p>Email: <a href="mailto:ttdttx@tnu.edu.vn">ttdttx@tnu.edu.vn</a></p>
                    <p>Địa chỉ: Phường Tân Thịnh - tp Thái Nguyên - Tỉnh Thái Nguyên.</p>
                </div>
                <div class="col-md-8">
                    <div id="ttdttxmap"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQAGv-AmIr0j3rSKvKNtjnJ36FcK-w8C8&callback=initMap">
    </script>
    <script type="text/javascript">
        function initMap() {
        // The location of Uluru
        var uluru = {lat: 21.587831996625212, lng: 105.81066681180322};
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('ttdttxmap'), {zoom: 16, center: uluru});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: uluru, map: map});
        }
    </script>
@endpush