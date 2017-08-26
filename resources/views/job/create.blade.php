       
@extends('layouts.app')

@section('content')


<div class="container">
        <div class="col-md-12">
           <div class="page-header"><h1>Create a Job</h1></div>
              <div class="well">
                


                @foreach($companies as $company)
                
                <form action="/job/{{$company->id}}" method="POST" class="form-group" >
                 
                 {{ csrf_field() }}

                 <input type="hidden" name="_token" value="{{ csrf_token() }}"></br>


    <div class="form-group"> <!-- Position -->
        <label for="full_name_id" class="control-label">Position</label>
        <input type="text" class="form-control" id="full_name_id" name="position" placeholder="PHP Developer">
    </div>  

    <div class="form-group"> <!-- Street 1 -->
        <label for="street1_id" class="control-label">Category</label>
        <input type="text" class="form-control" id="street1_id" name="category" placeholder="IT Software">
    </div>                  
                            
    <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Salary</label>
        <input type="text" class="form-control" id="street2_id" name="salary" placeholder="2000">
    </div>  

    <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Experience</label>
        <select class="form-control" id="state_id" name="experience">
            <option>Entery Level</option>
            <option>Middle Level</option>
            <option>Senior </option>
        </select>
    </div>  

    <div class="form-group"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Employment Type</label>
        <select class="form-control" id="state_id" name="employment_type">
            <option>Full Time</option>
            <option>Part Time</option>
            <option>Contract</option>
        </select>
    </div>  
                                
                            
    <div class="form-group"> <!-- City Button -->
        <label for="state_id" class="control-label">City</label>
        <select class="form-control" id="state_id" name="city">
            <option>Baghdad</option>
            <option>Al Anbar</option>
            <option>Al-Qadisiyyah</option>
            <option>Babil</option>
            <option>Basra</option>
            <option>Dahuk</option>
            <option>Diyala</option>
            <option>Dhi Qar</option>
            <option>Erbil</option>
            <option>Karbala</option>
            <option>Kirkuk</option>
            <option>Al-Muthana</option>
            <option>Najaf</option>
            <option>Ninawa</option>
            <option>Wasit</option>
            <option>Sulaymaniyah</option>
            <option>Maysan</option>
            <option>Salah ad Din</option>
        </select>                   
    </div>
    
    <div class="form-group"> <!--Description-->
        <label for="zip_id" class="control-label">Description</label>
        <textarea class="form-control" name="description" rows="8" cols="100" placeholder="Enter The Description Here ...."></textarea>
    </div>      
    
    <div class="form-group"> <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Create Job</button>
    </div>     
    
    </form>
        
        @endforeach
      </div>
   </div>
</div> 


@endsection








    