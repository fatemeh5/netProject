@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">مستند پروژه</div>

                    @if(isset($doc["description"]))
                        <div class="wrapper text-right">

                          <!-- Left side column. contains the logo and sidebar -->
                          

                            <!-- Main content -->
                                <div class="col-md-12"  style=" direction: RTL;">
                                    
                                    <!-- /.box-header -->
                                                    
                                     <p class="card-text text-right">{!! (html_entity_decode($doc->description)) !!}</p>
                                                            
                                </div>
                         
                              <a href="{{route('home1')}}/home/editdoc"><button class="btn btn-primary"> ویرایش مسنتد</button></a>
                        </div>
                        @endif   

            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ویرایش رزومه ها</div>

                <div class="card-body">
                    @if(isset($re[0]["description"]))
                        @foreach($re as $r)
                        <div class="wrapper">

                          <!-- Left side column. contains the logo and sidebar -->
                          

                            <!-- Main content -->
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                  <div class="box">
                                    
                                    <!-- /.box-header -->
                                    <div class="box-body pad">
                                    @if(isset($r->name))
                                    <a href="{{route('home1')}}/edit/{{$r->id}}"><p class="card-text">{!! (html_entity_decode($r->name)) !!}</p>
                                       </a>
                                    @endif         
                                       
                                    </div>
                                  </div>
                                </div>
                            <div class="col-md-2"></div>

                              
                        </div>
                        @endforeach
                        @endif  
                </div>


                
            </div>
        </div>

    </div>
</div>
@endsection
