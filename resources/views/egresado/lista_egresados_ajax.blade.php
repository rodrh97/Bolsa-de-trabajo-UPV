@foreach ($students_upv as $student_upv)
              <div class="col-sm-3">
                <div class="uou-block-6a"> <img src="{{ asset($student_upv->image_url)}}" alt="{{$student_upv->first_name}}"  style="width:100%;max-width:175px;height:100%;max-height:175px">
                  @if (auth()->user()->id != $student_upv->user_id)
                    <a href="/perfil_usuario/{{$student_upv->user_id}}"><h6>{{$student_upv->first_name}}</a> <span>Matrícula: {{$student_upv->university_id}}</span><span>Carrera: {{$student_upv->abbreviation}}</span></h6>
                  @else
                    <a href="/perfil_egresado/{{$student_upv->user_id}}"><h6>{{$student_upv->first_name}}</a> <span>Matrícula: {{$student_upv->university_id}}</span><span>Carrera: {{$student_upv->abbreviation}}</span></h6>
                  @endif
                  
                </div>
                <!-- end .uou-block-6a --> 
              </div> 
@endforeach
              {!! $students_upv->links()!!}