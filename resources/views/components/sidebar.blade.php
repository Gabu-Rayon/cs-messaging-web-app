 <!-- Sidebar Start -->
 <div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="/" class="navbar-brand mx-4 mb-3">
            <h4 class="text-primary"><i class="fa fa-hashtag me-2"></i>CS Messaging<br> Agent's Panel</h4>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('assets/img/user.jpg ') }}" alt="" style="width: 40px; height: 40px;">
                
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Agents Name</h6>
                <span>Agents</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            
            <a href="/messages" class="nav-item nav-link"><i class="fa fa-sms me-2"></i>Messages</a>
            <a href="/replied" class="nav-item nav-link"><i class="fa fa-comments me-2"></i>Responsed</a>
            <a href="/waiting" class="nav-item nav-link"><i class="fa fa-envelope"></i>Waiting Response</a>
            {{-- <a href="/reply" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Reply Messages</a> --}}
            <a href="/agents" class="nav-item nav-link"><i class="fa fa-users me-2"></i>Agents</a>
    </div>
    </nav>
</div>
<!-- Sidebar End -->