@component('mail::message')
# Email mới từ mục Liên hệ

Thông tin cụ thể như sau: 

@component('mail::panel')
<p>Họ tên: <strong>{{ $data['name'] }}</strong></p>
<p>Số điện thoại: <strong>{{ $data['phone'] }}</strong></p>
<p>Nội dung: <strong>{{ $data['message'] }}</strong></p>
@endcomponent

Cảm ơn,<br>
{{ config('app.name') }}
@endcomponent
