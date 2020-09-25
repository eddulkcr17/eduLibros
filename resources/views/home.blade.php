@extends('layouts.template')



@section('content')

        
 
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $usuarios }}</h3>

                <p>Usuarios</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
           
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $roles }}<sup style="font-size: 20px"></sup></h3>

                <p>Roles </p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
             
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $libros }}</h3>

                <p>Libros</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
             
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $editoriales }}</h3>

                <p>Editoriales</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
            
            </div>
          </div>

           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $autores }}</h3>

                <p>Autores</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
           
            </div>
          </div>
          <!-- ./col -->
        
        

@endsection