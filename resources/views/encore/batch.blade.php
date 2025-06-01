<x-layout>
	@vite('resources/css/nav_logo.css')
	@vite('resources/css/batch_view.css')



    <section class="form-wrapper">

        <div class="form-container col-5 col-sm-11">

            {{-- check if any error is returned from trying to send multiple Emails --}}
            @if(session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
            @endif

            @if(session('error'))
                
                <p class="alert alert-danger">{{ implode(', ', session('error'))." the following email(s) were not sent"; }}</p>
                
            @endif


            <form action="{{route('encore.sendBatchEmail')}}" method="POST" >

                @csrf

                <div class="item">
                    <span>Batch </span>
                    <input type="text" name="batch"  value="{{request()->route('id')}}" >
                </div>

                <div class="item">
                    <span>Course </span>
                    <input type="text" name="course" placeholder="HTML">
                </div>

                <div class="scores">

                    @foreach ($students as $student)
                    <div class="item">   
                        <span>{{ $student->first_name ." ". $student->middle_name ." ". $student->last_name }}</span>
                        <input type="number" value="0" name="score[]" placeholder="score">
                    </div>
                    @endforeach
                </div>

                <button id="sendbtn" name="sendBtn">Send Scores</button> 

            </form>

        </div>
    </section>

    
</x-layout>