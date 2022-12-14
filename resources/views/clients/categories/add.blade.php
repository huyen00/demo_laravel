
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<h1>Thêm sinh viên</h1>
<form action="<?php echo route('categories.add'); ?>" method="POST" >
    <div>
        <input type="text" name="category_name" placeholder="Tên sinh viên">
    </div>
    <?php echo csrf_field(); ?>
   
    <button type="submit">Thêm sinh viên</button>
</form>
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
            </tr>
            @endforeach
        @else
            <tr>
                <td colspan="7"> Không có sinh viên </td>
            </tr>
        @endif
    </tbody>
</table>