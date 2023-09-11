<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('home')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#user-nav" data-bs-toggle="collapse" href="#">
         <span style="color:rgba(70,99,202,255)">User</span><i class="bi bi-chevron-down ms-auto" style="color:rgba(70,99,202,255)"></i>
        </a>
        <ul id="user-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('user_list')}}" >
              <i class="bi bi-circle" style="color:rgba(55,180,236,255)"></i><span style="color:rgba(55,180,236,255)">User List</span>
            </a>
          </li>      
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#post-nav" data-bs-toggle="collapse" href="#">
         <span style="color:rgba(70,99,202,255)">Post</span><i class="bi bi-chevron-down ms-auto" style="color:rgba(70,99,202,255)"></i>
        </a>
        <ul id="post-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('post_list')}}" >
              <i class="bi bi-circle" style="color:rgba(55,180,236,255)"></i><span style="color:rgba(55,180,236,255)">Post List</span>
            </a>
          </li>
          <li>
            <a href="{{route('post_create')}}">
              <i class="bi bi-circle" style="color:rgba(55,180,236,255)"></i><span style="color:rgba(55,180,236,255)">Post Create</span>
            </a>
          </li>       
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#comment-nav" data-bs-toggle="collapse" href="#">
         <span style="color:rgba(70,99,202,255)">Comment</span><i class="bi bi-chevron-down ms-auto" style="color:rgba(70,99,202,255)"></i>
        </a>
        <ul id="comment-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="" >
              <i class="bi bi-circle" style="color:rgba(55,180,236,255)"></i><span style="color:rgba(55,180,236,255)">Comment List</span>
            </a>
          </li>
          <li>
            <a href="">
              <i class="bi bi-circle" style="color:rgba(55,180,236,255)"></i><span style="color:rgba(55,180,236,255)">Comment Create</span>
            </a>
          </li>       
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#reply-nav" data-bs-toggle="collapse" href="#">
         <span style="color:rgba(70,99,202,255)">Reply</span><i class="bi bi-chevron-down ms-auto" style="color:rgba(70,99,202,255)"></i>
        </a>
        <ul id="reply-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="" >
              <i class="bi bi-circle" style="color:rgba(55,180,236,255)"></i><span style="color:rgba(55,180,236,255)">Reply List</span>
            </a>
          </li>
          <li>
            <a href="">
              <i class="bi bi-circle" style="color:rgba(55,180,236,255)"></i><span style="color:rgba(55,180,236,255)">Reply Create</span>
            </a>
          </li>       
        </ul>
      </li>

    </ul>

  </aside>