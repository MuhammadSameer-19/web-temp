<x-web_layout title="Contact - Web-Temp">
<div class="container-fluid c-page bg-img">
            <div class="row">
            <div class="text-center pt-16 md:pt-0">
            <h1 class="h1 form_heading pt-1">Contact Us</h1>
            <h3 class="h3 form_subheading pt-1">Feel Free To Ask</h3>
            </div>
            <div class="row justify-content-center">
            <div class="col-8">
            <form action="{{url('/contact')}}" method="POST" class="form_style mt-4" id="myForm">
            @csrf    
            <label for="Email" class="form-label login_label mt-1 h5">Enter Your Email:</label>
                <input name="Email" type="email" class="form-control login_input mt-1" id="email" required>
                <label for="Query" class="form-label login_label mt-1 h5">Your Query:</label>
                <textarea name="Query" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                <div class="text-center"><input class="btn  btn-lg sub_btn mt-4" type="submit"></input></div>
            </form>
            </div>
        </div>
        </div>
        </div>
</x-web_layout>