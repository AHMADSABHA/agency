<!--start top header-->
<header class="top-header">        
  <nav class="navbar navbar-expand gap-3">
    <div class="mobile-toggle-icon fs-3">
        <i class="bi bi-list"></i>
      </div>
      
      <div class="top-navbar-right ms-auto">
        <ul class="navbar-nav align-items-center">
          
        <div>
          <form action="{{ route('logout.view') }}" method="POST" >
            @csrf
        <input type="submit" class="btn btn-dark" value="LOGOUT">
        </form>
        </div>
        &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
        <div>
          <form action="{{ route('home.view') }}" method="POST" >
            @csrf
        <input type="submit" class="btn btn-info" value="HOME">
        </form>
        </div>
        &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp;
      
        <div> 
          
          <h4> Welcome:<b> {{ Auth::user()->name }}</b></h4></div>
        
        
        </ul>
        </div>
     
  </nav>
</header>
 <!--end top header-->