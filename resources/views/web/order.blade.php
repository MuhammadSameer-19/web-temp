<x-web_layout title="Contact - Web-Temp">
<div class="container-fluid c-page bg-img">
            <div class="row">
            <div class="text-center pt-16 md:pt-0">
            <h1 class="h1 form_heading pt-1">Order In Progress</h1>
            <h3 class="h3 form_subheading pt-1">Create Your Dream Site</h3>
            </div>
            <div class="row justify-content-center">
            <div class="col-8">
            <form class="form_style mt-4" id="myForm">
            <label for="name" class="form-label login_label mt-1 h5">Enter Your Name:</label>
                <input type="text" class="form-control login_input mt-1" id="name" required>    
            <label for="email" class="form-label login_label mt-1 h5">Enter Your Email:</label>
                <input type="email" class="form-control login_input mt-1" id="email" required>
                <select class="form-select mt-4" aria-label="Default select example">
                <option selected>Select Site Type</option>
                <option value="1">E-Commerce Site Using React Js</option>
                <option value="2">E-Commerce Site Using Word Press</option>
                <option value="3">Blog Site Using React Js</option>
                </select>
                <label for="custom" class="form-label login_label mt-1 h5">Any Customization:</label>
                <input type="text" class="form-control mt-1" id="custom">
                <div class="text-center"><button class="btn  btn-lg login_btn mt-4" type="submit"><a href="./">Done!</a></button></div>
            </form>
            </div>
        </div>
        </div>
        </div>
</x-web_layout>