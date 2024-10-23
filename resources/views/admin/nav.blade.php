<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse shadow-sm" style="background:#ffffff";>
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center {{ Request::is('admin*') ? 'active' : '' }}" href="{{ route('admin') }}"style="color: #000000;">
                    <i class="fas fa-home me-2"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center {{ Request::is('categoryadmin*') ? 'active' : '' }}" href="{{ route('categoryadmin') }}"style="color: #000000;">
                    <i class="fas fa-chart-bar me-2"></i>
                    Category
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center {{ Request::is('productadmin*') ? 'active' : '' }}" href="{{ route('productadmin') }}"style="color: #000000;">
                    <i class="fas fa-box me-2"></i>
                    Products
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center {{ Request::is('orders*') ? 'active' : '' }}" href="{{ url('orders') }}"style="color: #000000;">
                    <i class="fas fa-shopping-cart me-2"></i>
                    Orders
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center {{ Request::is('customers*') ? 'active' : '' }}" href="{{ url('customers') }}"style="color: #000000;">
                    <i class="fas fa-users me-2"></i>
                    Customers
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center {{ Request::is('settings*') ? 'active' : '' }}" href="{{ url('settings') }}"style="color: #000000;">
                    <i class="fas fa-cog me-2"></i>
                    Settings
                </a>
            </li>
        </ul>
    </div>
</nav>



<style>
#sidebarMenu .nav-link.active {
    background-color: #FF9999; /* Màu xanh Bootstrap */
    color: #ffffff;
    font-weight: 500;
}

#sidebarMenu .nav-link:hover {
    background-color: #ffe0e0;
    color: #ffffff;
}


</style>

<script>
    // Lấy tất cả các mục nav-link
let navLinks = document.querySelectorAll('#sidebarMenu .nav-link');

// Lặp qua từng mục và lắng nghe sự kiện click
navLinks.forEach(link => {
    link.addEventListener('click', function() {
        // Xóa class 'active' khỏi tất cả các mục
        navLinks.forEach(link => link.classList.remove('active'));

        // Thêm class 'active' vào mục được click
        this.classList.add('active');
    });
});

</script>