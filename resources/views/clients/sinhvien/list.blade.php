

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<h1>Danh sách sinh viên</h1>
<a href="{{route('users_sv.add')}}" class="btn btn-primary">Thêm sinh viên</a>


<table class="table table-striped">
    <thead>
        <tr>
            <th>stt</th>
            <th>mã sv</th>
            <th>Tên sv</th>
            <th>Lớp</th>
            <th>Ngày sinh</th>
            <th>Giới tính</th>
            <th>Địa Chỉ</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
    </thead>
    <tbody>
        @if(!empty($usersList))
            @foreach ($usersList as $key => $item)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$item->masv}}</td>
                <td>{{$item->hoten}}</td>
                <td>{{$item->hoclop}}</td>
                <td>{{$item->ngaysinh}}</td>
                <td>{{$item->gioitinh}}</td>
                <td>{{$item->diachi}}</td>
                <td>
                    <a href="{{route('users_sv.editsv',['id'=>$item->id])}}" class="btn btn-warning">Sửa</a>    
                </td>
                <td>
                    <a href="" class="btn btn-primary">Xóa</a>    
                </td>
            </tr>
            @endforeach
        @else
            <tr>
                <td colspan="7"> Không có sinh viên </td>
            </tr>
        @endif
    </tbody>
</table>