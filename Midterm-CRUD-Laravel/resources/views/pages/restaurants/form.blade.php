@extends('layouts.MainLayout')
@section('content')

<div class="space50">&nbsp;</div>
<div class="container beta-relative">
    <div class="pull-left">
        <h2>Form</h2>
    </div>
    <div class="space50">&nbsp;</div>
    <div class="container">
        <form action="@yield('actionForm')" method="post" enctype="multipart/form-data" >
            @csrf
            @if (isset($restaurant))
                @method('put')
            @endif
            <div class="form-group">
                <label for='inputName'>Name</label>
                <input type="text" class="form-control" name="name" id="inputName"  placeholder="Enter name" required />
            </div>

            <div class="form-group">
                <label for='inputPrice'>Price</label>
                <input type="number" min=100000 class="form-control" name="price" id="inputPrice"  placeholder="Enter price" required />
            </div>
        
            <div class="form-group">
                <label for='inputImage'>Image file</label>
                <input type="file" class="form-control" name="img" id="inputImage"   required />
            </div>

            <div class="form-group">
                <label for='inputPromotionPrice'>Description</label>
                <input type="text"  class="form-control" name="description" id="inputDescription"   placeholder="Enter Descriptipon"/>
            </div>
            <div class="form-group">
                <label for='inputNew'>Category</label>
                <input type="text" class="form-control" name="category" id="inputCategory"  placeholder="Enter Category" required />
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="space50">&nbsp;</div>
</div>

@endsection
