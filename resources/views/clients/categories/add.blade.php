<h1>Thêm Chuyên mục</h1>
<form action="<?php echo route('categories.add'); ?>" method="POST" >
    <div>
        <input type="text" name="category_name" placeholder="Tên chuyên mục">
    </div>
    <?php echo csrf_field(); ?>
    {{-- <input type="hidden" name="_token" value="<?php echo csrf_token() ?>"> --}}
    <button type="submit">Thêm chuyên mục</button>
</form>