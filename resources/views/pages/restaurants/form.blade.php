@extends('layouts.MainLayout')
@section('content')

<div class="space50">&nbsp;</div>
<div class="container beta-relative">
    <div class="pull-left">
        <h2>Thêm món ăn</h2>
    </div>
    <div class="space50">&nbsp;</div>
    <div class="container">
        <form action="@yield('actionForm')" method="post" enctype="multipart/form-data" >
            @csrf
            @if (isset($restaurant))
                @method('put')
            @endif
            <div class="form-group">
                <label for='inputName'>Tên món ăn</label>
                <input type="text" class="form-control" name="name" id="inputName"  placeholder="Nhập tên món ăn" required />
            </div>

            <div class="form-group">
                <label for='inputPrice'>Giá</label>
                <input type="number" min=10000 class="form-control" name="price" id="inputPrice"  placeholder="Nhập giá" required />
            </div>
        
            <div class="form-group">
                <label for='inputImage'>Ảnh</label>
                <input type="file" class="form-control" name="img" id="inputImage"   required />
            </div>

            <div class="form-group">
                <label for='inputPromotionPrice'>Mô tả</label>
                <input type="text"  class="form-control" name="description" id="inputDescription"   placeholder="Mô tả"/>
            </div>
            <div class="form-group">
                <label for='inputNew'>Loại</label>
                <input type="text" class="form-control" name="category" id="inputCategory"  placeholder="Nhập loại" required />
            </div>
            <br/>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
    <div class="space50">&nbsp;</div>
</div>

@endsection
