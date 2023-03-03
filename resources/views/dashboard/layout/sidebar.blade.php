<!--start sidebar -->
<aside class="sidebar-wrapper"data-simplebar="true" >
  <div class="sidebar-header">
    <div>
      <img src="{{ asset('dashboard-assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
    </div>
    <div>
      <h4 class="logo-text">Store</h4>
    </div>
    <div class="toggle-icon ms-auto" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="bi bi-list" ></i>
    </div>
  </div>
  <!--navigation-->
  <ul class="metismenu" id="menu" >
    <li>
      <a href="">
       
        <div class="menu-title" >Dashboard</div>
        <div><i class="bi bi-house-fill"></i></div>
      </a>
      
    </li>
    <li>
      <a href="javascript:;" class="has-arrow" >
        <div class="parent-icon"> Basic sections
        </div>
        <div class="menu-title"><i class="bi bi-grid-fill"></i></div>
      </a>
      <ul >
       
        <li> <a href="{{ route('section.whatwedo.view') }}">What We Do</a>
        </li>
        <li> <a href="{{route('section.feature.view')}}">Features</a>
        </li>
        <li> <a href="{{ route('section.workmodule.view') }}">Working Module</a>
        </li>
        <li> <a href="{{ route('section.howweare.view') }}">How We Are</a>
        </li>
        <li> <a href="{{ route('section.processe.action') }}">process</a>
        </li>
        <li> <a href="{{ route('section.getintouch.view') }}">getintouch</a>
        </li>
        
      </ul>
    </li>
    
      <a href="{{ route('services.list.view') }}">
        <div class="parent-icon"> services
        </div>
        <div class=""><i class="bi bi-box"></i></div>
      </a>
    </li>
    <li>
      <a href="">
        <div class="parent-icon"> Best Skills
        </div>
        <div class=""><i class="bi bi-award"></i></div>
      </a>
    </li>
    <li>
      <a href="{{ route('section.agencystatistic.view') }}">
        <div class="parent-icon"> Agency Statistics
        </div>
        <div class=""><i class="bi bi-activity"></i></div>
      </a>
    </li>
    <li>
      <a href="{{ route('projects.list.view') }}">
        <div class="parent-icon"> Projects
        </div>
        <div class=""><i class="bi bi-person-workspace"></i></div>
      </a>
    </li>
    <li>
      <a href="{{ route('section.aboutus.view') }}"> About Us
        <div class="parent-icon">
        </div>
        <div class=""><i class="bi bi-people-fill"></i></div>
      </a>
    </li>
    <li>
      <a href="{{ route('teams.list.view') }}">
        <div class="parent-icon"> Teams
        </div>
        <div class=""><i class="bi bi-person"></i></div>
      </a>
    </li>
    <li>
      <a href="{{ route('testimonials.list.view') }}">
        <div class="parent-icon">Testimonials
        </div>
        <div class=""><i class="bi bi-file-earmark-post"></i></div>
      </a>
    </li>
    <li>
      <a href="{{ route('blogs.list.view') }}">
        <div class="parent-icon">Blogs
        </div>
        <div class=""><i class="bi bi-file-post"></i></div>
      </a>
    </li>
    <li>
      <a href="{{ route('plans.list.view') }}">
        <div class="parent-icon">Plans
        </div>
        <div class=""><i class="bi bi-graph-up-arrow"></i></div>
      </a>
    </li>
    <li>
      <a href="javascript:;" class="has-arrow">
        <div class="parent-icon"> profile
        </div>
        <div class="menu-title"><i class="bi bi-gear-fill"></i></div>
      </a>
      <ul>
       
        <li> <a href="{{ route('profile.view') }}">edit password</a>
        </li>
        @if (Auth::user()->is_super_admin)
        <li> <a href="{{ route('new-profile.view') }}">add admin</a>
        </li>
       @endif
        
      </ul>
    </li>
  </ul>
  <!--end navigation-->
</aside>
<!--end sidebar -->