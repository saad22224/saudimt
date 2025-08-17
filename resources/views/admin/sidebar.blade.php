    <nav class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <div class="logo">
                <i class="fas fa-tachometer-alt"></i>
                <span>لوحة التحكم</span>
            </div>
            {{-- <button class="sidebar-toggle" id="sidebarToggle">
                <i class="fas fa-bars"></i>
            </button> --}}
        </div>
        
        <ul class="sidebar-menu">
            <li class=" active" data-page="dashboard">
                <a href="" class="menu-link">
                    <i class="fas fa-home"></i>
                    <span>الرئيسية</span>
                </a>
            </li>
            <li class="" data-page="users">
                <a href="{{ route('admin.speakers') }}" class="menu-link">
                    <i class="fas fa-users"></i>
                    <span>المتحدثون</span>
                </a>
            </li>
            <li class="" data-page="transfers">
                <a href="{{ route('admin.media') }}" class="menu-link">
                    <i class="fas fa-exchange-alt"></i>
                    <span>التغطية الإعلامية</span>
                </a>
            </li>
            <li class="" data-page="offices">
                <a href="" class="menu-link">
                    <i class="fas fa-building"></i>
                    <span>مكاتب التحويل</span>
                </a>
            </li>
            <li class="" data-page="offices">
                <a href="" class="menu-link">
                    <i class="fas fa-building"></i>
                    <span>الشكاوي</span>
                </a>
            </li>
            <li class="" data-page="offices">
                <a href="" class="menu-link">
                    <i class="fas fa-building"></i>
                    <span>البانرات الإعلانية</span>
                </a>
            </li>
        </ul>
    </nav>