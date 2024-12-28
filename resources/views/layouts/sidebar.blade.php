<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ url(auth()->user()->foto ?? '') }}" class="img-circle img-profil" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="{{ route('dashboard') }}" class="{{ request()->is('dashboard') ? 'active' : '' }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            @if (auth()->user()->level == 1)
            <li class="header">MASTER</li>
            <li>
                <a href="{{ route('kategori.index') }}" class="{{ request()->is('kategori*') ? 'active' : '' }}">
                    <i class="fa fa-cube"></i> <span>Categories</span>
                </a>
            </li>
            <li>
                <a href="{{ route('produk.index') }}" class="{{ request()->is('produk*') ? 'active' : '' }}">
                    <i class="fa fa-cubes"></i> <span>Products</span>
                </a>
            </li>
            <li>
                <a href="{{ route('member.index') }}" class="{{ request()->is('member*') ? 'active' : '' }}">
                    <i class="fa fa-id-card"></i> <span>Members</span>
                </a>
            </li>
            <li>
                <a href="{{ route('supplier.index') }}" class="{{ request()->is('supplier*') ? 'active' : '' }}">
                    <i class="fa fa-truck"></i> <span>Suppliers</span>
                </a>
            </li>
            <li class="header">TRANSACTION</li>
            <li>
                <a href="{{ route('pengeluaran.index') }}" class="{{ request()->is('pengeluaran*') ? 'active' : '' }}">
                    <i class="fa fa-money"></i> <span>Expenditure</span>
                </a>
            </li>
            <li>
                <a href="{{ route('pembelian.index') }}" class="{{ request()->is('pembelian*') ? 'active' : '' }}">
                    <i class="fa fa-download"></i> <span>Purchases</span>
                </a>
            </li>
            <li>
                <a href="{{ route('penjualan.index') }}" class="{{ request()->is('penjualan*') ? 'active' : '' }}">
                    <i class="fa fa-upload"></i> <span>Sales</span>
                </a>
            </li>
            <li>
                <a href="{{ route('transaksi.index') }}" class="{{ request()->is('transaksi*') ? 'active' : '' }}">
                    <i class="fa fa-cart-arrow-down"></i> <span>Active Transaction</span>
                </a>
            </li>
            <li>
                <a href="{{ route('transaksi.baru') }}" class="{{ request()->is('transaksi*') ? 'active' : '' }}">
                    <i class="fa fa-cart-arrow-down"></i> <span>New Transaction</span>
                </a>
            </li>
            <li class="header">REPORT</li>
            <li>
                <a href="{{ route('laporan.index') }}" class="{{ request()->is('laporan*') ? 'active' : '' }}">
                    <i class="fa fa-file-pdf-o"></i> <span>Report</span>
                </a>
            </li>
            <li class="header">SYSTEM</li>
            <li>
                <a href="{{ route('user.index') }}" class="{{ request()->is('user*') ? 'active' : '' }}">
                    <i class="fa fa-users"></i> <span>Users</span>
                </a>
            </li>
            <li>
                <a href="{{ route("setting.index") }}" class="{{ request()->is('setting*') ? 'active' : '' }}">
                    <i class="fa fa-cogs"></i> <span>Arrangements</span>
                </a>
            </li>
            @else
            <li>
                <a href="{{ route('transaksi.index') }}" class="{{ request()->is('transaksi*') ? 'active' : '' }}">
                    <i class="fa fa-cart-arrow-down"></i> <span>Active Transactions</span>
                </a>
            </li>
            <li>
                <a href="{{ route('transaksi.baru') }}" class="{{ request()->is('transaksi*') ? 'active' : '' }}">
                    <i class="fa fa-cart-arrow-down"></i> <span>New Transactions</span>
                </a>
            </li>
            @endif
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
