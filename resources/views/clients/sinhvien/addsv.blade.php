

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<h1>Thêm Sinh Viên</h1>
<div class="container">

  
    @if($errors-> any())
        <div class="alert alert-danger">Dữ liệu nhập vào không hợp lệ. Vui lòng kiểm tra lại</div>
    @endif
    {{-- <h1>{{title}}</h1> --}}
    <form action="" method="POST">
        <div class="mb-3 w-25">
            <label for="">Mã sv</label>
            <input type="text" class="form-control" name="masv" placeholder="Mã sinh  viên.." value="{{old('masv')}}" />
            @error('masv')
                <span style="color:red;">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Họ và tên</label>
            <input type="text" class="form-control" name="fullname" placeholder="Họ và tên.." value="{{old('fullname')}}">
            @error('fullname')
            <span style="color:red;">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Lớp</label>
            <input type="text" class="form-control" name="lop" placeholder="Lớp" value="{{old('lop')}}">
            @error('lop')
            <span style="color:red;">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Ngày sinh</label>
            <input type="date" class="form-control" name="ngaysinh" placeholder="Ngày sinh" value="{{old('ngaysinh')}}">
            @error('ngaysinh')
            <span style="color:red;">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3 w-25">
            <label for="">Giới Tính</label>
            <input type="text" class="form-control" name="gioitinh" placeholder="Giới tính" value="{{old('gioitinh')}}">
            @error('gioitinh')
            <span style="color:red;">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="">Địa chỉ</label>
            <input type="text" class="form-control" name="diachi" placeholder="Địa chỉ" value="{{old('diachi')}}">
            @error('diachi')
            <span style="color:red;">{{$message}}</span>
            @enderror
        </div>
        <button class="btn btn-primary" type="submit">Thêm mới</button>
    <a href="{{route('users_sv.list')}}" class="btn btn-warning">Quay lại</a>
    @csrf
</form>
    
</div>




