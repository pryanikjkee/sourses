@extends('admin.master') @section('title', 'Пользователь') @section('content')



<form method='post' action="{{url('/')}}/admin/chagepass">
    
    @csrf
    <div class="row">
    <div class="container">
    Логин : {{$user->name}} <br>
Email : <input type="email" name="email" value='{{$user->email}}'><br>
Сменить пароль:<br>
   <input type="hidden" name="id" value="{{$user->id}}">
    Новый пароль: <input type="password" name="pass1"><br>
    Повторить пароль: <input type="password" name="pass2"><br>
    <input type="submit">
    
    </div>
    
    
    
    
    </div>
  
</form>
@endsection