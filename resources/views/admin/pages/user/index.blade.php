@extends('admin.layouts.master')

@section('title', 'Users')


@section('content')
    <x-admin.phead title="Users" subtitle="Manage your users from this page.">
        <a href="{{ route('users.create') }}" class="btn-custom btn-custom-secondary fw-bold" type="button">
            <i class="bi bi-plus"></i> Add User
        </a>
    </x-admin.phead>
    <!-- START: Basic Table Card Container -->
    <div class="table-card-custom">
        <!-- Header Controls -->
        <div class="table-header-control">
            <!-- Search bar -->
            <div class="table-search-box">
                <i class="bi bi-search table-search-icon"></i>
                <input type="text" class="table-search-input" placeholder="Search orders or products...">
            </div>
            <!-- Action buttons / Filter options -->
            <div class="table-filter-group">
                <div class="dropdown">
                    <button class="btn-table-action dropdown-toggle" type="button" id="dropdownFilterStatus"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-funnel"></i> Status Filter
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownFilterStatus">
                        <li><a class="dropdown-item" href="#">All Statuses</a></li>
                        <li><a class="dropdown-item" href="#">Paid / Success</a></li>
                        <li><a class="dropdown-item" href="#">Processing</a></li>
                        <li><a class="dropdown-item" href="#">Cancelled / Failed</a></li>
                    </ul>
                </div>
                <button class="btn-table-action" type="button">
                    <i class="bi bi-file-earmark-arrow-down"></i> Export
                </button>
            </div>
        </div>

        <!-- Responsive Table Wrapper -->
        <div class="table-responsive">
            <table class="table-custom">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer</th>
                        <th>Product Info</th>
                        <th>Category</th>
                        <th>Amount</th>
                        <th>Order Date</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    <tr>
                        <td class="table-order-id">#ORD-9982</td>
                        <td>
                            <div class="table-user-cell">
                                <img src="assets/images/user_1.jpg" alt="Eleanor Pena" class="table-user-avatar"
                                    onerror="this.src='assets/images/avatar.png'">
                                <div>
                                    <div class="table-user-name">Eleanor Pena</div>
                                    <div class="table-user-sub">eleanor.pena@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td class="table-product-name">Oversized Hoodie</td>
                        <td>Apparel</td>
                        <td class="table-amount">$89.90</td>
                        <td>Feb 14, 2026</td>
                        <td><span class="badge-table success">Paid</span></td>
                        <td>
                            <div class="d-flex justify-content-center gap-1">
                                <a href="#" class="table-btn-action" title="View details"><i class="bi bi-eye"></i></a>
                                <a href="#" class="table-btn-action" title="Edit row"><i class="bi bi-pencil"></i></a>
                                <a href="#" class="table-btn-action delete" title="Delete row"><i
                                        class="bi bi-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                 
                </tbody>
            </table>
        </div>

        <!-- Footer Controls / Pagination -->
        <div class="table-footer-control">
            <span class="table-pagination-info">Showing 1 to 10 of 50 entries</span>
            <nav aria-label="Page navigation">
                <ul class="pagination mb-0 gap-1">
                    <li class="page-item disabled"><a class="page-link border-0" href="#"><i
                                class="bi bi-chevron-left"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link border-0" href="#">1</a></li>
                    <li class="page-item"><a class="page-link border-0" href="#">2</a></li>
                    <li class="page-item"><a class="page-link border-0" href="#">3</a></li>
                    <li class="page-item"><a class="page-link border-0" href="#"><i class="bi bi-chevron-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- END: Basic Table Card Container -->
@endsection