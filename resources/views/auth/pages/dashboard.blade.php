<x-auth-layout pageTitle="Dashboard">

    @hasrole('admin')
        <x-admin.pages.dashboard />
    @endhasrole

    @hasrole('customer')
        {{-- <x-user.pages.dashboard /> --}}
        <h1>User</h1>
    @endhasrole

</x-auth-layout>
