@extends('layouts.tempnew')

@section('content')
<!--*******************************************************************-->
<!--*******************************************************************-->
<!--*******************************************************************-->
<!--*******************************************************************-->
<!--*******************************************************************-->
<!--*******************************************************************-->

<div class="" id="body">

<div class="row" id="cusbr1">
        <div class="col-sm-1" id="formboder">
                    
        </div>
        <div class="col-sm-10" id="">
        <h3 id="topic"><i><br>Your Details</i></h3>
        <br><br>
            
        </div>
        <div class="col-sm-1" id="formboder">
                    
        </div>            
    </div>
<!--*******************************************************************--> 
@foreach( $guides as $g)
    <div  class="row">
        <div  class="col-sm-2" id=""></div>
        <div  class="col-sm-4" id="">
        
            <p id="subtopic">
            First Name : {{$g->First_Name}}
            <br>
            <br>
            Last Name :{{$g->Last_Name}}
            <br>
            <br>
            NIC :{{$g->Address1}}
            <br>
            <br>
            Address : {{$g->Address1}}, {{$g->Address2}}, {{$g->City }}
            <br>
            <br>
            Telephone No 1: {{$g->Tele}}
            <br>
            <br>
            Telephone No 2 :{{$g->Alt_Tele}}
            <br>
            <br>
            E-mail :{{$g->Email}}

            </p>
           
        </div>
        <div  class="col-sm-4" id="">
            <img src="/storage/{{$g->Pro }}" alt="" style="width:75%">
        </div>
        <div  class="row">
            <div  class="col-sm-1" id=""></div>
            <div  class="col-sm-10" id="">
                    <a href="/Updateg/{{$g->id}}" class="btn btn-danger">Update Details</button></a>
                    <a href="/Viewbooking/{{$g->id}}" class="btn btn-danger">Views</button></a>
                        <br>
                        <br>
            </div> 
            <div  class="col-sm-1" id=""></div>
        </div>


        
    </div> 
    @endforeach
<!--*******************************************************************-->
    
<!--*******************************************************************-->
    
<!--*******************************************************************-->
    
<!--*******************************************************************-->
    
<!--*******************************************************************-->
    
<!--*******************************************************************-->
    
<!--*******************************************************************-->
</div>

<!--*******************************************************************-->
<!--*******************************************************************-->
<!--*******************************************************************-->
<!--*******************************************************************-->
<!--*******************************************************************-->
<!--*******************************************************************-->

@endsection