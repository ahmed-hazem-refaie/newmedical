
<div class="row" >


    <div class="col-12">
        <form action="{{route('website.carrers-apply')}}" method="post" enctype="multipart/form-data">
        
        
            @csrf
            <input type="hidden" name="carrer" value="{{$carrers[0]->id}}">
            <input type="file" name="cv">
            <input type="text" placeholder="name" name="name">
            <input type="text" placeholder="phone" name="phone">
            <input type="text" placeholder="email" name="email">
            <input type="text"  placeholder="gender" name="gender">
            <input type="text" placeholder="faculty" name="faculty">
            <input type="text" placeholder="grade" name="grade">
            <input type="text" placeholder="country" name="country">
            <input type="text" placeholder="city" name="city">
        
            <button type="submit">SAVE</button>
        </form>
    </div>
</div>






