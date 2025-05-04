<x-layout>
	@vite('resources/css/nav_logo.css')
	@vite('resources/css/batch_view.css')


    <section class="form-wrapper">

        <div class="form-container col-5">
            <form action="" class="" >

                <div class="item">
                    <span>Course </span>
                    <input type="text" placeholder="HTML">
                </div>

                @foreach ($students as $student)
                    <div class="item">   
                        <span>{{ $student->first_name ." ". $student->middle_name ." ". $student->last_name }}</span>
                        <input type="text" placeholder="score">
                    </div>
                @endforeach

                <button id="sendbtn">Send Scored</button>
                

            </form>

        </div>
    </section>

    
</x-layout>