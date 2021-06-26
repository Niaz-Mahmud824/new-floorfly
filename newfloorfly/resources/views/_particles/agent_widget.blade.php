<div class="sidebar-box" id="contact-agent">
    <div class="widget-heading bg-yellow text-center">
        <h3>{{trans('words.contact_agents')}}</h3>
    </div>

    <div class="box-content">
       @php $agents=\app\User::where('usertype','Agents')->where('status','1')->orderBy('id', 'desc')->take(2)->get();
       @endphp

 {{-- @php $agents=\app\User::where('usertype','Agents')->where('status','1')->inRandomOrder()->take(2)->get(); @endphp --}}

        @foreach($agents as $agent)
        <div class="agent-box">
            <div class="agent-top">
                <div class="agent-image">
                    @if($agent->profile_image)
                    <img src="{{ URL::asset($agent->profile_image)}}" alt="{{ $agent->name }}">
                    @else
                    <img src="{{ URL::asset('site_assets/img/avatar.png') }}" alt="{{ $agent->name }}">
                    @endif
                </div>

                <div class="agent-contacts">
                    <ul class="list-inline agent-contact-list">
                        <li class="agent-phone"><a href="tel:+8801819767676"><i class="fa fa-phone"></i></a></li>
                        <li class="agent-whatsapp"><a href="https://wa.me/+8801819767676"><i class="fa fa-whatsapp"></i></a></li>
                        <li class="agent-message"><a href="#" data-toggle="modal" data-target="#contactAgentModel{{$property->id}}"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="agent-info">
                <h2 class="agent-name">{{$agent->name}}<h2>
         <p>Experience : <b>{{$agent->yrs_exp}}</b></p>
         @php
            $educations = App\Education::where('user_id', $agent->id)->orderBy('id', 'asc')->get();

        @endphp
         @foreach($educations as $education)
         <ul class="list-inline agent-ratting-list">
     @if(!empty($education->institue)&&!empty($education->agent_result)&&!empty($education->agent_degree))
          <li> Institute: <b>{{$education->institue}}</b></li><br>
         <li>  Degree: <b>{{$education->agent_degree}}</b></li><br>
         <li>  Result: <b>{{$education->agent_result}}</b></li><br>
         @endif
         </ul>

        @endforeach


        @php
        $educations = App\Education::where('user_id', $agent->id)->orderBy('id', 'asc')->get();

    @endphp
     @foreach($educations as $education)
     <ul class="list-inline agent-ratting-list">
 @if(!empty($education->institue)&&!empty($education->agent_result)&&!empty($education->agent_degree))
      <li> Institute: <b>{{$education->institue}}</b></li><br>
     <li>  Degree: <b>{{$education->agent_degree}}</b></li><br>
     <li>  Result: <b>{{$education->agent_result}}</b></li><br>
     @endif
     </ul>

    @endforeach


                <div class="ratting-box">
                  <ul class="list-inline agent-ratting-list">
                    <li class="ratting-number"><b>4.7</b></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><img src="{{ URL::asset('site_assets/img/agent-rating.png') }}" /></li>
                  </ul>
                </div>

                <div class="agent-experience-data">
                  <!--<p>Experience : <b>3 yrs</b></p>-->
                  <!--<p>Position : <b>Managing Director</b></p>-->
                  <!--<p>Location  : <b>{{ $agent->agent_location }}</b></p>-->

                </div>
            </div>
        </div> <!--agent-box-->
        @endforeach

        <div class="view-agents pull-right"><a href="{{ URL::to('agents/') }}">Contact More >></a></div>
    </div>
    </div> <!--sidebar-box-->

    @include('_particles.enquiry_widget')
