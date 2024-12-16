<x-web_layout title="Contact - Web-Temp">
<div class="container-fluid c-page bg-img">
            <div class="row">
            <div class="text-center pt-16 md:pt-0">
            <h1 class="h1 form_heading pt-1">Order In Progress</h1>
            <h3 class="h3 form_subheading pt-1">Create Your Dream Site</h3>
            </div>
            <div class="row justify-content-center">
            <div class="col-8">
            <form action="{{url('product/'.$product_det->id.'/order')}}" method="POST" class="form_style mt-4" id="myForm">
                @csrf
            <label for="Name" class="form-label login_label mt-1 h5">Enter Your Name:</label>
                <input name="Name" type="text" class="form-control login_input mt-1 text-black" id="name" required>    
            <label for="Email" class="form-label login_label mt-1 h5 ">Enter Your Email:</label>
                <input name="Email" type="email" class="form-control login_input mt-1 text-black" id="email" required>
                <label for="Prod_Id" class="form-label login_label mt-1 h5" >Product Id:</label>
                <input name="Prod_Id" type="number" value={{$product_det->id}} class="form-control login_input mt-1 text-black"><br>
                <!-- <select class="form-select mt-4" aria-label="Default select example">
                <option selected>Select Site Type</option>
                <option value="1">E-Commerce Site Using React Js</option>
                <option value="2">E-Commerce Site Using Word Press</option>
                <option value="3">Blog Site Using React Js</option>
                </select> -->
                <label for="Customization" class="form-label login_label mt-1 h5">Any Customization:</label>
                <input name="Customization" type="text" class="form-control mt-1" id="Customization">
                <div class="text-center flex  justify-center place-items-center"><input type="submit" class="btn  btn-lg sub_btn " /><button class="btn  btn-lg login_btn mt-4" type="button"><a href="{{url("product")}}">Back</a></button></div>
            </form>
            </div>
        </div>
        </div>
        </div>
</x-web_layout>