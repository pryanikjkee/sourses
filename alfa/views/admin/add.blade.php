@extends('admin.master')


@section('title', 'Добавить акцию')


@section('content')

<form method="post" class="dropzone1" id="my-awesome-dropzone1" enctype="multipart/form-data" action="{{url('/')}}/admin/additem">
  
  
   <!-- <p>Включить <input type="checkbox" name="active" value="1"> </p> -->
   <div class="custom-control mb-4 custom-checkbox">
  <input type="checkbox" name="active" value="1" class="custom-control-input" id="customCheck1">
  <label class="custom-control-label" for="customCheck1">Включить</label>
</div>
<p>Заголовок Акции</p>
<div class="input-group input-group-sm mb-3">
<input type="text"  name="discount_title" class="form-control" placeholder="Название акции"> 
</div>
   
    <p>Описание</p>
    <textarea  name="discount_description"></textarea>
    <p>Иконка акции</p>
    <div class="row mb-3">
     

        <!-- input -->
        <div class="input-group mb-3 col-lg-6  col-12 ">
            <div class="custom-file ">
                <input type="file"  name="icon_path" accept="image/*">
          
            </div>

        </div>
    </div>

    <!-- input end -->
    <!-- <input  type="file" name="icon_path" accept="image/*" > -->
<p>Год:</p>
    <select name="year" class="custom-select mounth__select w-50">
               <option @if($now->year == 2018) selected="selected" @endif value="2018" >2018</option> 
               <option @if($now->year == 2019) selected="selected" @endif value="2019" >2019</option> 
               <option @if($now->year == 2020) selected="selected" @endif value="2020" >2020</option> 
               <option @if($now->year == 2021) selected="selected" @endif value="2021" >2021</option> 
    </select>

    <p>Месяц</p>
    <select name="mounth_id" class="custom-select mounth__select w-50">
        @foreach ($mounths as $mounth)
                @if($mounth->number )
               <option value="{{$mounth->id}}" >{{$mounth->name}}</option> 
         @endif 
        @endforeach
    </select>
     <p>Дата начала: <br>
     Число: <input  type="number" min="1" max="31" name="start_day" > Время: <input type="time" name="timestart" placeholder="00" value=""></p>
      
     <p>Дата  окончания:<br>
     Число: <input   type="number" min="1" max="31" name="end_day" >  Время:<input type="time" name="timeend" value=""></p>
   <input type="submit" class="btn btn-secondary" value="Отправить">
   @csrf
</form> 

@endsection