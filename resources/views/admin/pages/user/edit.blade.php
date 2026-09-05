@extends('admin.layouts.master')

@section('title', 'Users')


@section('content')
    <x-admin.phead title="Edit User" subtitle="Update user information.">
        <a href="{{ route('users.index') }}" class="btn-custom btn-custom-secondary fw-bold" type="button">
            <i class="bi bi-arrow-left"></i> Back to Users
        </a>
    </x-admin.phead>
 
        <div class="card border-light shadow-sm p-4 h-100">
            <h5 class="card-title mb-4">Basic Fields</h5>

            <!-- Text input -->
            <div class="mb-3">
                <label for="basicText" class="form-label-custom">Username</label>
                <input type="text" class="form-control-custom" id="basicText" placeholder="Enter username">
            </div>

            <!-- Email input -->
            <div class="mb-3">
                <label for="basicEmail" class="form-label-custom">Email Address</label>
                <input type="email" class="form-control-custom" id="basicEmail" placeholder="name@example.com">
                <span class="text-muted">We'll never share your email with anyone else.</span>
            </div>

            <!-- Password input -->
            <div class="mb-3">
                <label for="basicPassword" class="form-label-custom">Password</label>
                <input type="password" class="form-control-custom" id="basicPassword"
                    placeholder="Enter your secure password">
            </div>

            <!-- Disabled State -->
            <div class="mb-3">
                <label for="basicDisabled" class="form-label-custom">Disabled Input</label>
                <input type="text" class="form-control-custom" id="basicDisabled" value="This input field is disabled"
                    disabled="">
            </div>

            <!-- Readonly State -->
            <div class="mb-0">
                <label for="basicReadonly" class="form-label-custom">Read-only Input</label>
                <input type="text" class="form-control-custom" id="basicReadonly" value="This field is read-only"
                    readonly="">
            </div>
        </div>

    </div>
    <!-- END: Basic Table Card Container -->
@endsection