<x-layout>
    <link rel="stylesheet" href="/css/nav_logo.css">
    <link rel="stylesheet" href="/css/batch_view.css">


    <section class="form-wrapper">

        <div class="form-container col-5 col-sm-11">

            {{-- check if any error is returned from trying to send multiple Emails --}}
            @if(session('success'))
                <p style="text-align: center; color:green; font-size:20px">{{ session('success') }}</p>
            @endif

            @if(session('error'))
                
                <p style="text-align: center; color:red; font-size:20px">
                    {{ implode(', ', session('error'))." the following email(s) were not sent"; }}
                </p>
                
            @endif


            <form action="/encore" method="GET" >

                @csrf
                
                <div class="scores">
                    
                    @for ($i = 0; $i < count($students); $i++)
                        
                        <div class="item">   
                            <b style="float: left">{{$i+1}}</b> 
                            <span>{{ $students[$i]->first_name ." ". $students[$i]->middle_name ." ". $students[$i]->last_name }}</span>
                            <input type="text" placeholder="{{$students[$i]->id}}" value="{{ $students[$i]->reg_no }}" title="reg_no" id="regNo">
                            <input type="text" placeholder="{{$students[$i]->id}}" value="{{ $students[$i]->batch_no }}" title="batch_no" id="batchNo">

                            <i id="mssg{{$students[$i]->id}}" style="display:none; font-weight: bolder; height:10px;"></i>
                            
                        </div>
                    
                    @endfor


                </div>

                    
                <button id="sendbtn">Done</button> 

            </form>

        </div>
    </section>
	<script src="/js/updateRecords.js"></script>

</x-layout>