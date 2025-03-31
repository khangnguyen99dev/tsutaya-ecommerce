@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Users Management</h1>
    
    @livewire('admin.users-list')
@endsection 