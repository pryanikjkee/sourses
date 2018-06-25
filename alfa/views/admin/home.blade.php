@extends('admin.master') @section('title', 'Акции') @section('content')


<div class="container">

    <div class="row">
        <div class="container px-0">
            <div class="col-12 year__links">
            
            <a href="{{url('/')}}/admin/year/2018"  class="p-2 @if($now == 2018) activeyear @endif">2018</a>
       <a href="{{url('/')}}/admin/year/2019" class="p-2 @if($now == 2019) activeyear @endif">2019</a>
       <a href="{{url('/')}}/admin/year/2020" class="p-2 @if($now == 2020) activeyear @endif">2020</a>
       <a href="{{url('/')}}/admin/year/2021" class="p-2 @if($now == 2021) activeyear @endif">2021</a>
            </div>
        </div>
      
        @foreach ($mounths as $mounth)
        <!-- Цикл месяца -->
      @if(count($mounth->discount))
        <!-- Если месяц уже прошел - не выводим -->
        <div class="col-lg-12 mouth">
            <p class="mouth__date">
                {{ $mounth->name }} {{ $now }} 
                @foreach ($mounth->discount as $key => $disc)

                
            </p>
            <!-- Блок месяца -->


            <div class="discount">
                <div class="row">
                 
                    <div class="col-1">
                        <span class="action__id">
                        {{ $key+1 }}
                        </span>
                       
                    </div>
                 
                    <div class="col-lg-3 col-10">
                     {{ $disc->discount_title }}
                        
                    </div>
                    <!-- Название акции -->
             
                    <div class="col-lg-3 col-12 pt-2 text-lg-center">
                        @if($disc->active)
                   
                        <i class="ti-face-smile"></i>  <span class="active__text">Активно</span> @else
                        <i class="ti-face-sad"></i>В архиве @endif
                    </div>
                       <div class="col-lg-3 col-12">
                           @if($disc['time_status'] == 1)  <!-- Если 1 - акция не началась -->
                               @if($disc['diff_format'] == 'day') 
                                   Дней до cтарта: <span class="start__days">{{  $disc['diff'] }}</span> 
                               @endif
                               @if($disc['diff_format'] == 'hour')
                              
                                   Часов до cтарта: <span class="numer__bold"> {{ $disc['diff']}} </span>
                               @endif
                           @endif
                            
                             @if($disc['time_status'] == 2) <!-- Если 2 - акция началась -->
                                 
                                  @if($disc['diff_format'] == 'day')
                                   Активно. Дней до окончания: {{ $disc['diff'] }}
                               @endif
                               @if($disc['diff_format'] == 'hour')
                               <span class="active__text"> Активно</span>
                                  . Часов до окончания: <span class="active__hours">{{  $disc['diff'] }}</span> 
                               @endif
                           @endif
                             @if($disc['time_status'] == 3) <!-- Если 3 - акция закончилась -->
                             <i class="ti-alert"></i>
                              <span class="text-danger">Акция закончилась</span> 
                           @endif
                       </div>
                    <!-- Активность bool  -->
                  
                    <div class="col-lg-2 col-12 text-center">
                      
                        <a href="{{url('/')}}/admin/edit/{{ $disc->id }} ">
                            <i class="ti-marker-alt"></i>
                        </a>
                        <a href="{{url('/')}}/admin/del/{{ $disc->id }} ">
                            <i class="ti-close"></i>
                        </a>
                    </div>

                </div>
                <!-- Блок акции -->

            </div>
            @endforeach
        </div>
        @endif @endforeach
    </div>
</div>
@endsection