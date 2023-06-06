<x-app-layout>
    this is an admin dashboard
    
    </x-app-layout>
    
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <style type="text/css">
            label{
                display: inline-block;
                width: 200px;
            }
        </style>
        @include('admin.css')
        
      </head>
      <body>
        <div class="container-scroller">
          <!-- partial -->
          @include('admin.sidebar')
    
          @include('admin.navbar')
          
        <div class="container-fluid page-body-wrapper">
           
           <div class="container" align="center" style="padding-top: 100px;">
           
                @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss ="alert">
               X </button>

                {{session()->get('message')}}
            </div>
            @endif


                <form action="{{url('upload_doctor')}}" method="POST" encrypt="multipart/form-data">
                    @csrf
                    <div style="padding: 15px;">
                        <label>Doctor Name</label>
                        <input type="text" name="name" placeholder="Write Doctor Name" style="color:black">
                    </div>

                    <div style="padding: 15px;">
                        <label>Phone</label>
                        <input type="number" name="phone" placeholder="Write Doctor Number" style="color:black">
                    </div>

                    <div style="padding: 15px;">
                        <label>Doctor Speciality</label>

                        <select style="color: black; width: 200px;" name="speciality">
                            <option value="skin">Skin</option>
                            <option value="heart">Heart</option>
                            <option value="eye">Eye</option>
                            <option value="nose">Nose</option>
                        </select>
                    </div>

                    <div style="padding: 15px;">
                        <label>Doctor Room Number</label>
                        <input type="number" name="room" placeholder="Write The Room Number" style="color:black">
                    </div>

                    <div style="padding: 15px;">
                        <label>Doctor Image</label>
                        <input type="file" name="image">
                    </div>

                    <div style="padding: 15px;">
                        <input type="submit" class="btn btn-success">
                    </div>

            </div>
        </div>
            
          @include('admin.script')
      </body>
    </html>