@extends('admin.master') @section('title', 'Редактировать акцию') @section('content')

<form method="post" enctype="multipart/form-data" action="{{url('/')}}/admin/saveedit">


    <!-- <p>Включить <input type="checkbox" name="active" @if($discount->active) checked @endif > </p> -->
    <div class="custom-control mb-4 custom-checkbox">
        <input type="checkbox" name="active" value="1" class="custom-control-input" id="customCheck1" @if($discount->active) checked @endif >
        <label class="custom-control-label" for="customCheck1">Включить</label>
    </div>
    <p>Заголовок Акции</p>
    <!-- <input type="text"  name="discount_title" placeholder="Название акции" value="{{$discount->discount_title}}">  -->
    <div class="input-group input-group-sm mb-3">

        <input type="text" name="discount_title" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="{{$discount->discount_title}}">
    </div>

    <input hidden="hidden" name="id" value="{{$discount->id}}">
    <p>Описание</p>
    <textarea name="discount_description">{{$discount->discount_description}}</textarea>
    <p>Иконка акции</p>
    <div class="row mb-3">
        <div class="col-lg-2 col-5">
            <img src=" {{$image}}" class="img-fluid img-thumbnail">
        </div>

        <!-- input -->
        <div class="input-group mb-3 col-lg-6  col-12 ">
            <div class="custom-file ">
                <input type="file"  name="icon_path" accept="image/*">
                <!-- <label class="custom-file-label" for="inputGroupFile02">Выберите иконку</label> -->
            </div>

        </div>
    </div>

    <!-- input end -->
    <!-- <input  type="file" name="icon_path" accept="image/*" > -->

 <p>Год</p>
    <select name="year" class="custom-select mounth__select w-50">
               <option @if($discount->startdate == 2018) selected="selected" @endif value="2018">2018</option> 
               <option @if($discount->startdate == 2019) selected="selected" @endif value="2019">2019</option> 
               <option @if($discount->startdate == 2020) selected="selected" @endif value="2020">2020</option> 
               <option @if($discount->startdate == 2021) selected="selected" @endif value="2021">2021</option> 
    </select>

   <p>Месяц</p>
    <select name="mounth_id" class="custom-select mounth__select w-50">
        @foreach ($mounths as $mounth)
        <option value="{{$mounth->id}}" @if($discount->mounth_id == $mounth->id) selected="selected" @endif>{{$mounth->name}}</option>
       @endforeach
    </select>
 
    <p>Дата начала:   <br>
       Число:  <input type="number" min="1" max="31" value="{{$discount->start_day}}" name="start_day">
        Время: <input type="time" name="timestart" value="{{$discount->timestart}}"> <br> Дата окончания:  <br> Число: 
        <input type="number" min="1" max="31" value="{{$discount->end_day}}" name="end_day">
       Время:   <input type="time" name="timeend" value="{{$discount->timeend}}">
    </p>
    <input type="submit" class="btn btn-secondary" value="Обновить"> @csrf
</form>

@endsection
