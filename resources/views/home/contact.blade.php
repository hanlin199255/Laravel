@extends('home/layout');

@section('style')

@endsection

@section('page')
联 系 我 们
@endsection

@section('contents')
   
  		 
                    <address>
                      <div style="margin:0 0 0 550">
         
         <iframe width="1000" height="489" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://map.sogou.com/card/index+s=1000,277&p=1111&m=005&d=14685868669695967.html#"></iframe>

                      </div>
                    </address>
             
         
        <div class="comment">
    
    	<div class="container">
        
        	<form role="form">
            	<div class="row">
                
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="name" class="form-control" id="exampleInputName1" placeholder="Enter name">
                  </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
               </div>
               
              </div><!-- end row -->
              
              
               		<textarea class="form-control" rows="3"></textarea>
               
              
              <button type="submit" class="btn btn-default">Send</button>
            </form>


        
        </div>
    
    </div><!-- End comment -->
   
   
     
     
@endsection